<?php

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('Get all categories.', function () {
    Category::factory(5)->create();

    $this->getJson('/api/categories')
         ->assertStatus(200)
         ->assertJsonCount(5);
});

test('Create category.', function () {
    $this->postJson('/api/categories', [
        'name'        => 'PHP / Laravel',
        'description' => 'Backend development with PHP and Laravel framework.',
    ])
         ->assertStatus(201)
         ->assertJsonFragment(['name' => 'PHP / Laravel']);

    $this->assertDatabaseHas('categories', ['name' => 'PHP / Laravel']);
});

test('Get single category.', function () {
    $category = Category::factory()->create();

    $this->getJson("/api/categories/{$category->id}")
         ->assertStatus(200)
         ->assertJsonFragment(['id' => $category->id]);
});

test('Update category.', function () {
    $category = Category::factory()->create();

    $this->putJson("/api/categories/{$category->id}", [
        'name'        => 'Updated Name',
        'description' => 'Updated description for category.',
    ])
         ->assertStatus(200)
         ->assertJsonFragment(['name' => 'Updated Name']);
});

test('Delete category.', function () {
    $category = Category::factory()->create();

    $this->deleteJson("/api/categories/{$category->id}")
         ->assertStatus(204);

    $this->assertDatabaseMissing('categories', ['id' => $category->id]);
});