<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreatePermissionTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function a_guest_user_cannot_create_new_permission()
    {
        $this->withExceptionHandling();

        // we have a guest that want to store new thread
        // but will redirect to login page
        $this->post(route('permissions.store'))
            ->assertRedirect(route('login'));

        // we have a guest that want to create thread
        // but will redirect to login page
        $this->get(route('permissions.create'))
            ->assertRedirect(route('login'));
    }

    /** @test */
    function an_authenticated_user_cannot_create_new_permission()
    {
        // Given we have a signed user
        $this->signIn();

        // when we hit the endpoint to create a new thread
        $permission = create('App\Permission');

        $this->post(route('permissions.store'), $permission->toArray());

        $this->get('/permissions/'. $permission->id)
            ->assertSee($permission->name)
            ->assertSee($permission->description);
    }
}
