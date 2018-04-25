<?php

use App\Models\XrefStatus;
use App\Repositories\XrefStatusRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefStatusRepositoryTest extends TestCase
{
    use MakeXrefStatusTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var XrefStatusRepository
     */
    protected $xrefStatusRepo;

    public function setUp()
    {
        parent::setUp();
        $this->xrefStatusRepo = App::make(XrefStatusRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateXrefStatus()
    {
        $xrefStatus = $this->fakeXrefStatusData();
        $createdXrefStatus = $this->xrefStatusRepo->create($xrefStatus);
        $createdXrefStatus = $createdXrefStatus->toArray();
        $this->assertArrayHasKey('id', $createdXrefStatus);
        $this->assertNotNull($createdXrefStatus['id'], 'Created XrefStatus must have id specified');
        $this->assertNotNull(XrefStatus::find($createdXrefStatus['id']), 'XrefStatus with given id must be in DB');
        $this->assertModelData($xrefStatus, $createdXrefStatus);
    }

    /**
     * @test read
     */
    public function testReadXrefStatus()
    {
        $xrefStatus = $this->makeXrefStatus();
        $dbXrefStatus = $this->xrefStatusRepo->find($xrefStatus->id);
        $dbXrefStatus = $dbXrefStatus->toArray();
        $this->assertModelData($xrefStatus->toArray(), $dbXrefStatus);
    }

    /**
     * @test update
     */
    public function testUpdateXrefStatus()
    {
        $xrefStatus = $this->makeXrefStatus();
        $fakeXrefStatus = $this->fakeXrefStatusData();
        $updatedXrefStatus = $this->xrefStatusRepo->update($fakeXrefStatus, $xrefStatus->id);
        $this->assertModelData($fakeXrefStatus, $updatedXrefStatus->toArray());
        $dbXrefStatus = $this->xrefStatusRepo->find($xrefStatus->id);
        $this->assertModelData($fakeXrefStatus, $dbXrefStatus->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteXrefStatus()
    {
        $xrefStatus = $this->makeXrefStatus();
        $resp = $this->xrefStatusRepo->delete($xrefStatus->id);
        $this->assertTrue($resp);
        $this->assertNull(XrefStatus::find($xrefStatus->id), 'XrefStatus should not exist in DB');
    }
}
