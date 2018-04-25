<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefSubdistrictApiTest extends TestCase
{
    use MakeXrefSubdistrictTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateXrefSubdistrict()
    {
        $xrefSubdistrict = $this->fakeXrefSubdistrictData();
        $this->json('POST', '/api/v1/xrefSubdistricts', $xrefSubdistrict);

        $this->assertApiResponse($xrefSubdistrict);
    }

    /**
     * @test
     */
    public function testReadXrefSubdistrict()
    {
        $xrefSubdistrict = $this->makeXrefSubdistrict();
        $this->json('GET', '/api/v1/xrefSubdistricts/'.$xrefSubdistrict->id);

        $this->assertApiResponse($xrefSubdistrict->toArray());
    }

    /**
     * @test
     */
    public function testUpdateXrefSubdistrict()
    {
        $xrefSubdistrict = $this->makeXrefSubdistrict();
        $editedXrefSubdistrict = $this->fakeXrefSubdistrictData();

        $this->json('PUT', '/api/v1/xrefSubdistricts/'.$xrefSubdistrict->id, $editedXrefSubdistrict);

        $this->assertApiResponse($editedXrefSubdistrict);
    }

    /**
     * @test
     */
    public function testDeleteXrefSubdistrict()
    {
        $xrefSubdistrict = $this->makeXrefSubdistrict();
        $this->json('DELETE', '/api/v1/xrefSubdistricts/'.$xrefSubdistrict->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/xrefSubdistricts/'.$xrefSubdistrict->id);

        $this->assertResponseStatus(404);
    }
}
