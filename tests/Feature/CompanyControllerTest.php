<?php

use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

// INDEX
test('Get all companies.', function () {
    Company::factory(5)->create();

    $response = $this->getJson('/companies');

    $response->assertStatus(200)
             ->assertJsonCount(5);
});

test('Returns empty array when no companies.', function () {
    $response = $this->getJson('/companies');

    $response->assertStatus(200)
             ->assertJsonCount(0);
});

// STORE
test('Create company.', function () {
    $response = $this->postJson('/companies', [
        'name' => 'Anthropic',
        'description' => 'AI safety company based in San Francisco.',
        'size' => '1-10',
        'logo_url' => 'https://anthropic.com/logo.png',
        'website_url' => 'https://anthropic.com',
    ]);

    $response->assertStatus(201)
             ->assertJsonFragment([
                 'name' => 'Anthropic',
                 'description' => 'AI safety company based in San Francisco.',
             ]);

    $this->assertDatabaseHas('companies', [
        'name' => 'Anthropic',
    ]);
});

test('Fails to create company with missing fields.', function () {
    $response = $this->postJson('/companies', []);

    $response->assertStatus(422)
             ->assertJsonValidationErrors(['name', 'description']);
});

// SHOW
test('Get single company.', function () {
    $company = Company::factory()->create();

    $response = $this->getJson("/companies/{$company->id}");

    $response->assertStatus(200)
             ->assertJsonFragment([
                 'id' => $company->id,
                 'name' => $company->name,
             ]);
});

test('Returns 404 if company not found.', function () {
    $response = $this->getJson('/companies/999');

    $response->assertStatus(404);
});

// UPDATE
test('Update company.', function () {
    $company = Company::factory()->create();

    $response = $this->putJson("/companies/{$company->id}", [
        'name' => 'Updated Name',
        'description' => 'Updated description here for the company.',
        'size' => '51-200',
        'logo_url' => 'https://updated.com/logo.png',
        'website_url' => 'https://updated.com',
    ]);

    $response->assertStatus(200)
             ->assertJsonFragment(['name' => 'Updated Name']);

    $this->assertDatabaseHas('companies', [
        'id' => $company->id,
        'name' => 'Updated Name',
    ]);
});

test('Partially update company.', function () {
    $company = Company::factory()->create(['name' => 'Original Name']);

    $response = $this->putJson("/companies/{$company->id}", [
        'name' => 'New Name',
    ]);

    $response->assertStatus(200)
             ->assertJsonFragment(['name' => 'New Name']);
});

test('Returns 404 on update if company not found.', function () {
    $response = $this->putJson('/companies/999', [
        'name' => 'Updated Name',
    ]);

    $response->assertStatus(404);
});

// DESTROY
test('Delete company.', function () {
    $company = Company::factory()->create();

    $this->assertDatabaseHas('companies', ['id' => $company->id]);

    $response = $this->deleteJson("/companies/{$company->id}");

    $response->assertStatus(204);

    $this->assertDatabaseMissing('companies', ['id' => $company->id]);
});

test('Returns 404 on delete if company not found.', function () {
    $response = $this->deleteJson('/companies/999');

    $response->assertStatus(404);
});