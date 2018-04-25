<?php

use App\Models\XrefSubdistrict;
use App\Repositories\XrefSubdistrictRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefSubdistrictRepositoryTest extends TestCase
{
    use MakeXrefSubdistrictTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var XrefSubdistrictRepository
     */
    protected $xrefSubdistrictRepo;

    public function setUp()
    {
        parent::setUp();
        $this->xrefSubdistrictRepo = App::make(XrefSubdistrictRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateXrefSubdistrict()
    {
        $xrefSubdistrict = $this->fakeXrefSubdistrictData();
        $createdXrefSubdistrict = $this->xrefSubdistrictRepo->create($xrefSubdistrict);
        $createdXrefSubdistrict = $createdXrefSubdistrict->toArray();
        $this->assertArrayHasKey('id', $createdXrefSubdistrict);
        $this->assertNotNull($createdXrefSubdistrict['id'], 'Created XrefSubdistrict must have id specified');
        $this->assertNotNull(XrefSubdistrict::find($createdXrefSubdistrict['id']), 'XrefSubdistrict with given id must be in DB');
        $this->assertModelData($xrefSubdistrict, $createdXrefSubdistrict);
    }

    /**
     * @test read
     */
    public function testReadXrefSubdistrict()
    {
        $xrefSubdistrict = $this->makeXrefSubdistrict();
        $dbXrefSubdistrict = $this->xrefSubdistrictRepo->find($xrefSubdistrict->id);
        $dbXrefSubdistrict = $dbXrefSubdistrict->toArray();
        $this->assertModelData($xrefSubdistrict->toArray(), $dbXrefSubdistrict);
    }

    /**
     * @test update
     */
    public function testUpdateXrefSubdistrict()
    {
        $xrefSubdistrict = $this->makeXrefSubdistrict();
        $fakeXrefSubdistrict = $this->fakeXrefSubdistrictData();
        $updatedXrefSubdistrict = $this->xrefSubdistrictRepo->update($fakeXrefSubdistrict, $xrefSubdistrict->id);
        $this->assertModelData($fakeXrefSubdistrict, $updatedXrefSubdistrict->toArray());
        $dbXrefSubdistrict = $this->xrefSubdistrictRepo->find($xrefSubdistrict->id);
        $this->assertModelData($fakeXrefSubdistrict, $dbXrefSubdistrict->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteXrefSubdistrict()
    {
        $xrefSubdistrict = $this->makeXrefSubdistrict();
        $resp = $this->xrefSubdistrictRepo->delete($xrefSubdistrict->id);
        $this->assertTrue($resp);
        $this->assertNull(XrefSubdistrict::find($xrefSubdistrict->id), 'XrefSubdistrict should not exist in DB');
    }
}
