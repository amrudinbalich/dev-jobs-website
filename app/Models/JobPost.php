<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'description', 'company_id', 'category_id'])]
class JobPost extends Model
{
    /** @use HasFactory<\Database\Factories\JobPostFactory> */
    use HasFactory;

    /**
     * Get the Company that owns the Job Post.
     * @return BelongsTo<Company, JobPost>
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the Category that Job Post belongs to.
     * @return BelongsTo<Category, JobPost>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
