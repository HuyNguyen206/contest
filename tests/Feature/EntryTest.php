<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EntryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_an_email_can_be_enter_contest()
    {
//        $this->withoutExceptionHandling();
        $response = $this->post('/contest', [
            'email' => 'test@gmail.com'
        ]);
        $this->assertDatabaseCount('contest_entries', 1);
        $response->assertStatus(200);
    }

    public function testEmailIsRequired(){
//        $this->withoutExceptionHandling();
        $response = $this->post('/contest', [
            'email' => ''
        ]);
        $this->assertDatabaseCount('contest_entries', 0);
        $response->assertStatus(302);
    }

    public function testEmailIs(){
//        $this->withoutExceptionHandling();
        $response = $this->post('/contest', [
            'email' => 'sdasd'
        ]);
        $this->assertDatabaseCount('contest_entries', 0);
        $response->assertStatus(302);
    }
}
