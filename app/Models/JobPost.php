<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    /** @use HasFactory<\Database\Factories\JobPostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'company_id',
        'category_id'
    ];

    /**
     * @return BelongsTo<Company, JobPost>
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
