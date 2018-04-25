<?php

use App\Models\XrefCountry;
use App\Repositories\XrefCountryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefCountryRepositoryTest extends TestCase
{
    use MakeXrefCountryTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var XrefCountryRepository
     */
    protected $xrefCountryRepo;

    public function setUp()
    {
        parent::setUp();
        $this->xrefCountryRepo = App::make(XrefCountryRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateXrefCountry()
    {
        $xrefCountry = $this->fakeXrefCountryData();
        $createdXrefCountry = $this->xrefCountryRepo->create($xrefCountry);
        $createdXrefCountry = $createdXrefCountry->toArray();
        $this->assertArrayHasKey('id', $createdXrefCountry);
        $this->assertNotNull($createdXrefCountry['id'], 'Created XrefCountry must have id specified');
        $this->assertNotNull(XrefCountry::find($createdXrefCountry['id']), 'XrefCountry with given id must be in DB');
        $this->assertModelData($xrefCountry, $createdXrefCountry);
    }

    /**
     * @test read
     */
    public function testReadXrefCountry()
    {
        $xrefCountry = $this->makeXrefCountry();
        $dbXrefCountry = $this->xrefCountryRepo->find($xrefCountry->id);
        $dbXrefCountry = $dbXrefCountry->toArray();
        $this->assertModelData($xrefCountry->toArray(), $dbXrefCountry);
    }

    /**
     * @test update
     */
    public function testUpdateXrefCountry()
    {
        $xrefCountry = $this->makeXrefCountry();
        $fakeXrefCountry = $this->fakeXrefCountryData();
        $updatedXrefCountry = $this->xrefCountryRepo->update($fakeXrefCountry, $xrefCountry->id);
        $this->assertModelData($fakeXrefCountry, $updatedXrefCountry->toArray());
        $dbXrefCountry = $this->xrefCountryRepo->find($xrefCountry->id);
        $this->assertModelData($fakeXrefCountry, $dbXrefCountry->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteXrefCountry()
    {
        $xrefCountry = $this->makeXrefCountry();
        $resp = $this->xrefCountryRepo->delete($xrefCountry->id);
        $this->assertTrue($resp);
        $this->assertNull(XrefCountry::find($xrefCountry->id), 'XrefCountry should not exist in DB');
    }
}
