<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

class XrefStatusApiTest extends TestCase
{
    use MakeXrefStatusTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateXrefStatus()
    {
        $xrefStatus = $this->fakeXrefStatusData();
        $this->json('POST', '/api/v1/xrefStatuses', $xrefStatus);

        $this->assertApiResponse($xrefStatus);
    }

    /**
     * @test
     */
    public function testReadXrefStatus()
    {
        $xrefStatus = $this->makeXrefStatus();
        $this->json('GET', '/api/v1/xrefStatuses/'.$xrefStatus->id);

        $this->assertApiResponse($xrefStatus->toArray());
    }

    /**
     * @test
     */
    public function testUpdateXrefStatus()
    {
        $xrefStatus = $this->makeXrefStatus();
        $editedXrefStatus = $this->fakeXrefStatusData();

        $this->json('PUT', '/api/v1/xrefStatuses/'.$xrefStatus->id, $editedXrefStatus);

        $this->assertApiResponse($editedXrefStatus);
    }

    /**
     * @test
     */
    public function testDeleteXrefStatus()
    {
        $xrefStatus = $this->makeXrefStatus();
        $this->json('DELETE', '/api/v1/xrefStatuses/'.$xrefStatus->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/xrefStatuses/'.$xrefStatus->id);

        $this->assertResponseStatus(404);
    }
}
