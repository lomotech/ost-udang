<?php

use App\Models\XrefState;
use App\Repositories\XrefStateRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefStateRepositoryTest extends TestCase
{
    use MakeXrefStateTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var XrefStateRepository
     */
    protected $xrefStatesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->xrefStatesRepo = App::make(XrefStateRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateXrefStates()
    {
        $xrefStates = $this->fakeXrefStatesData();
        $createdXrefStates = $this->xrefStatesRepo->create($xrefStates);
        $createdXrefStates = $createdXrefStates->toArray();
        $this->assertArrayHasKey('id', $createdXrefStates);
        $this->assertNotNull($createdXrefStates['id'], 'Created XrefStates must have id specified');
        $this->assertNotNull(XrefState::find($createdXrefStates['id']), 'XrefStates with given id must be in DB');
        $this->assertModelData($xrefStates, $createdXrefStates);
    }

    /**
     * @test read
     */
    public function testReadXrefStates()
    {
        $xrefStates = $this->makeXrefStates();
        $dbXrefStates = $this->xrefStatesRepo->find($xrefStates->id);
        $dbXrefStates = $dbXrefStates->toArray();
        $this->assertModelData($xrefStates->toArray(), $dbXrefStates);
    }

    /**
     * @test update
     */
    public function testUpdateXrefStates()
    {
        $xrefStates = $this->makeXrefStates();
        $fakeXrefStates = $this->fakeXrefStatesData();
        $updatedXrefStates = $this->xrefStatesRepo->update($fakeXrefStates, $xrefStates->id);
        $this->assertModelData($fakeXrefStates, $updatedXrefStates->toArray());
        $dbXrefStates = $this->xrefStatesRepo->find($xrefStates->id);
        $this->assertModelData($fakeXrefStates, $dbXrefStates->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteXrefStates()
    {
        $xrefStates = $this->makeXrefStates();
        $resp = $this->xrefStatesRepo->delete($xrefStates->id);
        $this->assertTrue($resp);
        $this->assertNull(XrefState::find($xrefStates->id), 'XrefStates should not exist in DB');
    }
}
