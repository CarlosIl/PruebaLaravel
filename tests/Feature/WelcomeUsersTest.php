<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/duilio/silence')
            ->assertStatus(200)
            ->assertSee('Bienvenido Duilio, tu apodo es silence');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {


        $this->get('saludo/duilio')
        ->assertStatus(200)
        ->assertSee('Bienvenido Duilio, no tienes apodo');
    }
}
