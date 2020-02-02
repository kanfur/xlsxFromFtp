<?php

namespace Tests\Feature;

use App\Jobs\ReadXlsx;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Bus;

class ExcelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApiCallBack()
    {
        $response = $this->get('/api/callback');

        $response->assertStatus(200);
    }
    public function testFtpExcel()
    {
        $response = $this->get('/test');

        $response->assertStatus(200);
    }
}
