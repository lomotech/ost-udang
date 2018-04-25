<?php

use App\Models\XrefDistrict;
use App\Repositories\XrefDistrictRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefDistrictRepositoryTest extends TestCase
{
    use MakeXrefDistrictTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var XrefDistrictRepository
     */
    protected $xrefDistrictRepo;

    public function setUp()
    {
        parent::setUp();
        $this->xrefDistrictRepo = App::make(XrefDistrictRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateXrefDistrict()
    {
        $xrefDistrict = $this->fakeXrefDistrictData();
        $createdXrefDistrict = $this->xrefDistrictRepo->create($xrefDistrict);
        $createdXrefDistrict = $createdXrefDistrict->toArray();
        $this->assertArrayHasKey('id', $createdXrefDistrict);
        $this->assertNotNull($createdXrefDistrict['id'], 'Created XrefDistrict must have id specified');
        $this->assertNotNull(XrefDistrict::find($createdXrefDistrict['id']), 'XrefDistrict with given id must be in DB');
        $this->assertModelData($xrefDistrict, $createdXrefDistrict);
    }

    /**
     * @test read
     */
    public function testReadXrefDistrict()
    {
        $xrefDistrict = $this->makeXrefDistrict();
        $dbXrefDistrict = $this->xrefDistrictRepo->find($xrefDistrict->id);
        $dbXrefDistrict = $dbXrefDistrict->toArray();
        $this->assertModelData($xrefDistrict->toArray(), $dbXrefDistrict);
    }

    /**
     * @test update
     */
    public function testUpdateXrefDistrict()
    {
        $xrefDistrict = $this->makeXrefDistrict();
        $fakeXrefDistrict = $this->fakeXrefDistrictData();
        $updatedXrefDistrict = $this->xrefDistrictRepo->update($fakeXrefDistrict, $xrefDistrict->id);
        $this->assertModelData($fakeXrefDistrict, $updatedXrefDistrict->toArray());
        $dbXrefDistrict = $this->xrefDistrictRepo->find($xrefDistrict->id);
        $this->assertModelData($fakeXrefDistrict, $dbXrefDistrict->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteXrefDistrict()
    {
        $xrefDistrict = $this->makeXrefDistrict();
        $resp = $this->xrefDistrictRepo->delete($xrefDistrict->id);
        $this->assertTrue($resp);
        $this->assertNull(XrefDistrict::find($xrefDistrict->id), 'XrefDistrict should not exist in DB');
    }
}
