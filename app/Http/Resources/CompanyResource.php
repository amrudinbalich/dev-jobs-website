<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'size' => $this->size,
            'logo_url' => $this->logo_url,
            'website_url' => $this->website_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'job_posts' => new JobPostResourceCollection($this->whenLoaded('jobPosts'))
        ];
    }
}
