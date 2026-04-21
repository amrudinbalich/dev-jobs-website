<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobPost;

#[Fillable(['name', 'description', 'size', 'logo_url', 'website_url'])]
class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    /**
     * Get Company Job Posts.
     * @return HasMany<JobPost, Company>
     */
    public function jobPosts(): HasMany
    {
        return $this->hasMany(JobPost::class);
    }
}
