<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefStateApiTest extends TestCase
{
    use MakeXrefStateTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateXrefStates()
    {
        $xrefStates = $this->fakeXrefStatesData();
        $this->json('POST', '/api/v1/xrefStates', $xrefStates);

        $this->assertApiResponse($xrefStates);
    }

    /**
     * @test
     */
    public function testReadXrefStates()
    {
        $xrefStates = $this->makeXrefStates();
        $this->json('GET', '/api/v1/xrefStates/'.$xrefStates->id);

        $this->assertApiResponse($xrefStates->toArray());
    }

    /**
     * @test
     */
    public function testUpdateXrefStates()
    {
        $xrefStates = $this->makeXrefStates();
        $editedXrefStates = $this->fakeXrefStatesData();

        $this->json('PUT', '/api/v1/xrefStates/'.$xrefStates->id, $editedXrefStates);

        $this->assertApiResponse($editedXrefStates);
    }

    /**
     * @test
     */
    public function testDeleteXrefStates()
    {
        $xrefStates = $this->makeXrefStates();
        $this->json('DELETE', '/api/v1/xrefStates/'.$xrefStates->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/xrefStates/'.$xrefStates->id);

        $this->assertResponseStatus(404);
    }
}
