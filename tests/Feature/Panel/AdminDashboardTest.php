<?php

namespace Tests\Feature\Panel;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase; 
   /** @test **/
   function admins_can_visit_the_admin_dashboard(){
        $admin = factory(User::class)->create(['is_admin' => true]);
        $this->actingAs($admin)
             ->get(route('panel'))
             ->assertStatus(200)
             ->assertSee('Admin');
   }
   /** @test **/
   function non_admins_users_cannot_visit_the_admin_dashboard(){
        $user = factory(User::class)->create(['is_admin' => false]);
        $this->actingAs($user)
            ->get(route('panel'))
            ->assertStatus(403);
   } 
    /** @test **/
   function guests_cannot_visit_the_admin_dashboard(){
        $user = factory(User::class)->create(['is_admin' => false]);
        $this->actingAs($user)
            ->get(route('panel'))
            ->assertStatus(403);
   }
}
