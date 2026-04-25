<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name'])]
class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    /**
     * Get the Job Posts that belongs to the Category.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<JobPost, Category>
     */
    public function jobPosts(): HasMany
    {
        return $this->hasMany(JobPost::class);
    }
}
