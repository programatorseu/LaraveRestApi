<?php

namespace Tests\Feature\Feature;

use App\Models\Company;
use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;


class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function a_logged_user_can_fetch_json()
    {
        Sanctum::actingAs(
            User::factory()->create(),
            ['create', 'update', 'delete']
        );

        $response = $this->get('/api/v1/companies');

        $response->assertOk();
    }
    /** @test */
    public function a_guest_can_not_fetch_json()
    {
        $response = $this->get('/api/v1/companies');
        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }
    /** @test */
    public function get_all_records()
    {
        $this->seed();
        Sanctum::actingAs(
            User::factory()->create(),
            ['create', 'update', 'delete']
        );

        $this->assertEquals(10, Company::count());
    }
    /** @test */
    public function user_can_show_single_company()
    {
        $company = Company::factory()->create();

        Sanctum::actingAs(
            User::factory()->create(),
            ['create', 'update', 'delete']
        );
        $content = $this->get("api/v1/companies/{$company->id}")->decodeResponseJson();
        $this->assertSame($company->nazwa, $content['data']['nazwa']);
    }
}
