<?php

use App\Models\Company;
use App\Models\JobPost;

use Illuminate\Foundation\Testing\RefreshDatabase;
 
pest()->use(RefreshDatabase::class);

test('Get all job posts.', function () {
    JobPost::factory(5)->create();

    $response = $this->get('/job-posts');

    $response->assertStatus(200);
    $response->assertJsonCount(5);
});

// validation
test('Fails if title is too short.', function () {
    $response = $this->postJson('/job-posts', [
        'title' => 'ab',
        'description' => 'Valid description here',
    ]);

    $response->assertStatus(422)
             ->assertJsonValidationErrors(['title']);
});

test('Fails if description is too short.', function () {
    $response = $this->postJson('/job-posts', [
        'title' => 'Valid title',
        'description' => 'short',
    ]);

    $response->assertStatus(422)
             ->assertJsonValidationErrors(['description']);
});

test('Fails if title is too long.', function () {
    $response = $this->postJson('/job-posts', [
        'title' => str_repeat('a', 256),
        'description' => 'Valid description here',
    ]);

    $response->assertStatus(422)
             ->assertJsonValidationErrors(['title']);
});

test('Fails if fields are missing.', function () {
    $response = $this->postJson('/job-posts', []);

    $response->assertStatus(422)
             ->assertJsonValidationErrors(['title', 'description']);
});
// validation::end

// create
test('Create job post.', function () {
    $company = Company::factory()->create();

    $response = $this->postJson('/job-posts', [
        'title' => 'Software Engineer',
        'description' => 'We are looking for a software engineer.',
        'company_id' => $company->id
    ]);

    $response->assertStatus(201)
             ->assertJsonFragment([
                 'title' => 'Software Engineer',
                 'description' => 'We are looking for a software engineer.',
             ]);

    $this->assertDatabaseHas('job_posts', [
        'title' => 'Software Engineer',
    ]);
});

// show
test('Get single job post.', function () {
    $jobPost = JobPost::factory()->create();

    $response = $this->getJson("/job-posts/{$jobPost->id}");

    $response->assertStatus(200)
             ->assertJsonFragment([
                 'id' => $jobPost->id,
                 'title' => $jobPost->title,
                 'description' => $jobPost->description,
             ]);
});

test('Returns 404 if job post not found.', function () {
    $response = $this->getJson('/job-posts/999');

    $response->assertStatus(404);
});

// update
test('Update job post.', function () {
    $jobPost = JobPost::factory()->create();

    $response = $this->putJson("/job-posts/{$jobPost->id}", [
        'title' => 'Updated Title',
        'description' => 'Updated description for job post.'
    ]);

    $response->assertStatus(200)
             ->assertJsonFragment([
                 'title' => 'Updated Title',
                 'description' => 'Updated description for job post.',
             ]);

    $this->assertDatabaseHas('job_posts', [
        'id' => $jobPost->id,
        'title' => 'Updated Title',
    ]);
});

test('Partially update job post.', function () {
    $jobPost = JobPost::factory()->create(['title' => 'Original Title']);

    $response = $this->putJson("/job-posts/{$jobPost->id}", [
        'title' => 'New Title',
    ]);

    $response->assertStatus(200)
             ->assertJsonFragment(['title' => 'New Title']);
});

test('Returns 404 on update if job post not found.', function () {
    $response = $this->putJson('/job-posts/999', [
        'title' => 'Updated Title',
    ]);

    $response->assertStatus(404);
});

// destroy
test('Delete job post.', function () {
    $jobPost = JobPost::factory()->create();

    // has
    $this->assertDatabaseHas('job_posts', [
        'id' => $jobPost->id,
    ]);

    // response
    $response = $this->delete("/job-posts/{$jobPost->id}");
    $response->assertStatus(204);

    // is deleted
    $this->assertDatabaseMissing('job_posts', [
        'id' => $jobPost->id,
    ]);
});