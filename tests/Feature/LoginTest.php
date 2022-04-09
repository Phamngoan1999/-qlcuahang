<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /** @test */
    public function user_login_page()
    {
//        $response = $this->get('/login');
//        $response->assertSee("Đăng nhập hệ thống");
////        $dataCreate = [
////            'name' => $this->faker->name,
////            'email' => "0339845999",
////            'password' => Hash::make('12345678'),
////        ];
////
////        $response = $this->post($this->getStoreRoute(), $dataCreate);
//        $response->assertStatus(200);
    }
}
