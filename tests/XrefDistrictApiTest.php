<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefDistrictApiTest extends TestCase
{
    use MakeXrefDistrictTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateXrefDistrict()
    {
        $xrefDistrict = $this->fakeXrefDistrictData();
        $this->json('POST', '/api/v1/xrefDistricts', $xrefDistrict);

        $this->assertApiResponse($xrefDistrict);
    }

    /**
     * @test
     */
    public function testReadXrefDistrict()
    {
        $xrefDistrict = $this->makeXrefDistrict();
        $this->json('GET', '/api/v1/xrefDistricts/'.$xrefDistrict->id);

        $this->assertApiResponse($xrefDistrict->toArray());
    }

    /**
     * @test
     */
    public function testUpdateXrefDistrict()
    {
        $xrefDistrict = $this->makeXrefDistrict();
        $editedXrefDistrict = $this->fakeXrefDistrictData();

        $this->json('PUT', '/api/v1/xrefDistricts/'.$xrefDistrict->id, $editedXrefDistrict);

        $this->assertApiResponse($editedXrefDistrict);
    }

    /**
     * @test
     */
    public function testDeleteXrefDistrict()
    {
        $xrefDistrict = $this->makeXrefDistrict();
        $this->json('DELETE', '/api/v1/xrefDistricts/'.$xrefDistrict->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/xrefDistricts/'.$xrefDistrict->id);

        $this->assertResponseStatus(404);
    }
}
