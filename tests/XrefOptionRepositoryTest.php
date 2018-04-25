<?php

use App\Models\XrefOption;
use App\Repositories\XrefOptionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefOptionRepositoryTest extends TestCase
{
    use MakeXrefOptionTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var XrefOptionRepository
     */
    protected $xrefOptionRepo;

    public function setUp()
    {
        parent::setUp();
        $this->xrefOptionRepo = App::make(XrefOptionRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateXrefOption()
    {
        $xrefOption = $this->fakeXrefOptionData();
        $createdXrefOption = $this->xrefOptionRepo->create($xrefOption);
        $createdXrefOption = $createdXrefOption->toArray();
        $this->assertArrayHasKey('id', $createdXrefOption);
        $this->assertNotNull($createdXrefOption['id'], 'Created XrefOption must have id specified');
        $this->assertNotNull(XrefOption::find($createdXrefOption['id']), 'XrefOption with given id must be in DB');
        $this->assertModelData($xrefOption, $createdXrefOption);
    }

    /**
     * @test read
     */
    public function testReadXrefOption()
    {
        $xrefOption = $this->makeXrefOption();
        $dbXrefOption = $this->xrefOptionRepo->find($xrefOption->id);
        $dbXrefOption = $dbXrefOption->toArray();
        $this->assertModelData($xrefOption->toArray(), $dbXrefOption);
    }

    /**
     * @test update
     */
    public function testUpdateXrefOption()
    {
        $xrefOption = $this->makeXrefOption();
        $fakeXrefOption = $this->fakeXrefOptionData();
        $updatedXrefOption = $this->xrefOptionRepo->update($fakeXrefOption, $xrefOption->id);
        $this->assertModelData($fakeXrefOption, $updatedXrefOption->toArray());
        $dbXrefOption = $this->xrefOptionRepo->find($xrefOption->id);
        $this->assertModelData($fakeXrefOption, $dbXrefOption->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteXrefOption()
    {
        $xrefOption = $this->makeXrefOption();
        $resp = $this->xrefOptionRepo->delete($xrefOption->id);
        $this->assertTrue($resp);
        $this->assertNull(XrefOption::find($xrefOption->id), 'XrefOption should not exist in DB');
    }
}
