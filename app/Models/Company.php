<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobPost;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'size',
        'logo_url',
        'website_url'
    ];

    public function jobPosts(): HasMany
    {
        return $this->hasMany(JobPost::class);
    }
}
