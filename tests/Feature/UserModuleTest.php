<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use app\User;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    use RefreshDatabase;

    

    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados.');
    }

    /**@test**/
    function it_loads_the_users_list_page(){
        $this->get('/usuarios/5')
             ->assertStatus(200)
             ->assertSee('mostrando detalle del usuario: 5 ');
    }
    /**@test**/
    function it_loads_the_new_users_page(){
        $this->get('usuario/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo Usuario');
    }
}
