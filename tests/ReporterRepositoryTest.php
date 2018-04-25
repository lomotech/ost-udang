<?php

use App\Models\Reporter;
use App\Repositories\ReporterRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReporterRepositoryTest extends TestCase
{
    use MakeReporterTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ReporterRepository
     */
    protected $reporterRepo;

    public function setUp()
    {
        parent::setUp();
        $this->reporterRepo = App::make(ReporterRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateReporter()
    {
        $reporter = $this->fakeReporterData();
        $createdReporter = $this->reporterRepo->create($reporter);
        $createdReporter = $createdReporter->toArray();
        $this->assertArrayHasKey('id', $createdReporter);
        $this->assertNotNull($createdReporter['id'], 'Created Reporter must have id specified');
        $this->assertNotNull(Reporter::find($createdReporter['id']), 'Reporter with given id must be in DB');
        $this->assertModelData($reporter, $createdReporter);
    }

    /**
     * @test read
     */
    public function testReadReporter()
    {
        $reporter = $this->makeReporter();
        $dbReporter = $this->reporterRepo->find($reporter->id);
        $dbReporter = $dbReporter->toArray();
        $this->assertModelData($reporter->toArray(), $dbReporter);
    }

    /**
     * @test update
     */
    public function testUpdateReporter()
    {
        $reporter = $this->makeReporter();
        $fakeReporter = $this->fakeReporterData();
        $updatedReporter = $this->reporterRepo->update($fakeReporter, $reporter->id);
        $this->assertModelData($fakeReporter, $updatedReporter->toArray());
        $dbReporter = $this->reporterRepo->find($reporter->id);
        $this->assertModelData($fakeReporter, $dbReporter->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteReporter()
    {
        $reporter = $this->makeReporter();
        $resp = $this->reporterRepo->delete($reporter->id);
        $this->assertTrue($resp);
        $this->assertNull(Reporter::find($reporter->id), 'Reporter should not exist in DB');
    }
}
