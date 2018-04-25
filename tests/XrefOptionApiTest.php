<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class XrefOptionApiTest extends TestCase
{
    use MakeXrefOptionTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateXrefOption()
    {
        $xrefOption = $this->fakeXrefOptionData();
        $this->json('POST', '/api/v1/xrefOptions', $xrefOption);

        $this->assertApiResponse($xrefOption);
    }

    /**
     * @test
     */
    public function testReadXrefOption()
    {
        $xrefOption = $this->makeXrefOption();
        $this->json('GET', '/api/v1/xrefOptions/'.$xrefOption->id);

        $this->assertApiResponse($xrefOption->toArray());
    }

    /**
     * @test
     */
    public function testUpdateXrefOption()
    {
        $xrefOption = $this->makeXrefOption();
        $editedXrefOption = $this->fakeXrefOptionData();

        $this->json('PUT', '/api/v1/xrefOptions/'.$xrefOption->id, $editedXrefOption);

        $this->assertApiResponse($editedXrefOption);
    }

    /**
     * @test
     */
    public function testDeleteXrefOption()
    {
        $xrefOption = $this->makeXrefOption();
        $this->json('DELETE', '/api/v1/xrefOptions/'.$xrefOption->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/xrefOptions/'.$xrefOption->id);

        $this->assertResponseStatus(404);
    }
}
