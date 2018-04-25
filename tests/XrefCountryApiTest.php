<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefCountryApiTest extends TestCase
{
    use MakeXrefCountryTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateXrefCountry()
    {
        $xrefCountry = $this->fakeXrefCountryData();
        $this->json('POST', '/api/v1/xrefCountries', $xrefCountry);

        $this->assertApiResponse($xrefCountry);
    }

    /**
     * @test
     */
    public function testReadXrefCountry()
    {
        $xrefCountry = $this->makeXrefCountry();
        $this->json('GET', '/api/v1/xrefCountries/'.$xrefCountry->id);

        $this->assertApiResponse($xrefCountry->toArray());
    }

    /**
     * @test
     */
    public function testUpdateXrefCountry()
    {
        $xrefCountry = $this->makeXrefCountry();
        $editedXrefCountry = $this->fakeXrefCountryData();

        $this->json('PUT', '/api/v1/xrefCountries/'.$xrefCountry->id, $editedXrefCountry);

        $this->assertApiResponse($editedXrefCountry);
    }

    /**
     * @test
     */
    public function testDeleteXrefCountry()
    {
        $xrefCountry = $this->makeXrefCountry();
        $this->json('DELETE', '/api/v1/xrefCountries/'.$xrefCountry->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/xrefCountries/'.$xrefCountry->id);

        $this->assertResponseStatus(404);
    }
}
