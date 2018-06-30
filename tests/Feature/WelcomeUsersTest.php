<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**@test**/
    function it_welcome_users_with_nickname(){
        $this->get('saludo/Ismael/ismaelfac')
        ->assertStatus(200)
        ->assertSee('Bienvenido Ismael, tu apodo es ismaelfac');
    }

    /**@test**/
    function it_welcome_users_without_nickname(){
        $this->get('saludo/Ismael')
        ->assertStatus(200)
        ->assertSee('Bienvenido Ismael');
    }
}
