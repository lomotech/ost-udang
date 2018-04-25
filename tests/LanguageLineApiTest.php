<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LanguageLineApiTest extends TestCase
{
    use MakeLanguageLineTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateLanguageLine()
    {
        $languageLine = $this->fakeLanguageLineData();
        $this->json('POST', '/api/v1/languageLines', $languageLine);

        $this->assertApiResponse($languageLine);
    }

    /**
     * @test
     */
    public function testReadLanguageLine()
    {
        $languageLine = $this->makeLanguageLine();
        $this->json('GET', '/api/v1/languageLines/'.$languageLine->id);

        $this->assertApiResponse($languageLine->toArray());
    }

    /**
     * @test
     */
    public function testUpdateLanguageLine()
    {
        $languageLine = $this->makeLanguageLine();
        $editedLanguageLine = $this->fakeLanguageLineData();

        $this->json('PUT', '/api/v1/languageLines/'.$languageLine->id, $editedLanguageLine);

        $this->assertApiResponse($editedLanguageLine);
    }

    /**
     * @test
     */
    public function testDeleteLanguageLine()
    {
        $languageLine = $this->makeLanguageLine();
        $this->json('DELETE', '/api/v1/languageLines/'.$languageLine->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/languageLines/'.$languageLine->id);

        $this->assertResponseStatus(404);
    }
}
