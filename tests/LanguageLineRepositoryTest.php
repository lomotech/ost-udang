<?php

use App\Models\LanguageLine;
use App\Repositories\LanguageLineRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LanguageLineRepositoryTest extends TestCase
{
    use MakeLanguageLineTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var LanguageLineRepository
     */
    protected $languageLineRepo;

    public function setUp()
    {
        parent::setUp();
        $this->languageLineRepo = App::make(LanguageLineRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateLanguageLine()
    {
        $languageLine = $this->fakeLanguageLineData();
        $createdLanguageLine = $this->languageLineRepo->create($languageLine);
        $createdLanguageLine = $createdLanguageLine->toArray();
        $this->assertArrayHasKey('id', $createdLanguageLine);
        $this->assertNotNull($createdLanguageLine['id'], 'Created LanguageLine must have id specified');
        $this->assertNotNull(LanguageLine::find($createdLanguageLine['id']), 'LanguageLine with given id must be in DB');
        $this->assertModelData($languageLine, $createdLanguageLine);
    }

    /**
     * @test read
     */
    public function testReadLanguageLine()
    {
        $languageLine = $this->makeLanguageLine();
        $dbLanguageLine = $this->languageLineRepo->find($languageLine->id);
        $dbLanguageLine = $dbLanguageLine->toArray();
        $this->assertModelData($languageLine->toArray(), $dbLanguageLine);
    }

    /**
     * @test update
     */
    public function testUpdateLanguageLine()
    {
        $languageLine = $this->makeLanguageLine();
        $fakeLanguageLine = $this->fakeLanguageLineData();
        $updatedLanguageLine = $this->languageLineRepo->update($fakeLanguageLine, $languageLine->id);
        $this->assertModelData($fakeLanguageLine, $updatedLanguageLine->toArray());
        $dbLanguageLine = $this->languageLineRepo->find($languageLine->id);
        $this->assertModelData($fakeLanguageLine, $dbLanguageLine->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteLanguageLine()
    {
        $languageLine = $this->makeLanguageLine();
        $resp = $this->languageLineRepo->delete($languageLine->id);
        $this->assertTrue($resp);
        $this->assertNull(LanguageLine::find($languageLine->id), 'LanguageLine should not exist in DB');
    }
}
