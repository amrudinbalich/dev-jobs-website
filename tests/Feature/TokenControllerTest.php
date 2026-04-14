<?php

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('Create token.', function () {
    $user = User::factory()->create();

    $response = $this->postJson('/api/token/create', [
        'email'    => $user->email,
        'password' => 'password',
    ]);

    $response->assertStatus(200)
             ->assertJsonStructure(['token']);
});


test('Create token with device.', function () {
    $user = User::factory()->create();

    $response = $this->postJson('/api/token/create', [
        'email'    => $user->email,
        'password' => 'password',
        'device_name' => 'Iphone 16 pro'
    ]);

    $response->assertStatus(200)
             ->assertJsonStructure(['token']);

    $this->assertDatabaseHas('personal_access_tokens', ['name' => 'Iphone 16 pro']);
});

test('Revoke token.', function () {
    $user = User::factory()->create();

    Sanctum::actingAs($user, ['*']);

    $this->deleteJson('/api/token/revoke')
         ->assertStatus(204);
});