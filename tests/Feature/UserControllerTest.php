<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;
use App\Models\User;

uses(RefreshDatabase::class);

test('create user', function () {
    $response = $this->postJson('/api/users', [
        'name'     => 'user',
        'email'    => 'user@gmail.com',
        'password' => 'password123',
    ]);

    $response->assertStatus(201)
             ->assertJsonFragment([
                 'name'  => 'user',
                 'email' => 'user@gmail.com',
             ]);

    $user = User::where('email', 'user@gmail.com')->first();
    $this->assertNotEmpty($user);

    // hashed password
    expect($user->password)->not->toBe('password123');
    expect(Hash::check('password123', $user->password))->toBeTrue();
});

test('Delete user.', function () {
    $user = User::factory()->create();

    Sanctum::actingAs($user);

    $this->assertDatabaseHas('users', ['id' => $user->id]);

    $this->deleteJson("/api/users")
         ->assertStatus(204);

    $this->assertDatabaseMissing('users', ['id' => $user->id]);
});