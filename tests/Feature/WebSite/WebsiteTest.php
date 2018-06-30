<?php

namespace Tests\Feature\WebSite;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WebsiteTest extends TestCase
{
    use RefreshDatabase; 
  
    /** @test **/
   function admin_can_visit_the_content_registred(){
    $user = factory(User::class)->create(['admin' => true]);
    $this->actingAs($user)
        ->get(route('/'))
        ->assertStatus(200);
    }

   /** @test **/
   function users_can_visit_the_content_registred(){
        $user = factory(User::class)->create(['admin' => false]);
        $this->actingAs($user)
            ->get(route('/'))
            ->assertStatus(200);
   } 
    /** @test **/
   function guests_cannot_visit_the_content_registred(){
        $this->get(route('/'))
            ->assertStatus(200);
   }
}
