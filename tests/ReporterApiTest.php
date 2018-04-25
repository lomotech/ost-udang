<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReporterApiTest extends TestCase
{
    use MakeReporterTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateReporter()
    {
        $reporter = $this->fakeReporterData();
        $this->json('POST', '/api/v1/reporters', $reporter);

        $this->assertApiResponse($reporter);
    }

    /**
     * @test
     */
    public function testReadReporter()
    {
        $reporter = $this->makeReporter();
        $this->json('GET', '/api/v1/reporters/'.$reporter->id);

        $this->assertApiResponse($reporter->toArray());
    }

    /**
     * @test
     */
    public function testUpdateReporter()
    {
        $reporter = $this->makeReporter();
        $editedReporter = $this->fakeReporterData();

        $this->json('PUT', '/api/v1/reporters/'.$reporter->id, $editedReporter);

        $this->assertApiResponse($editedReporter);
    }

    /**
     * @test
     */
    public function testDeleteReporter()
    {
        $reporter = $this->makeReporter();
        $this->json('DELETE', '/api/v1/reporters/'.$reporter->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/reporters/'.$reporter->id);

        $this->assertResponseStatus(404);
    }
}
