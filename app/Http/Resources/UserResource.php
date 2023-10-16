<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'pictures' => $this->pictures()->where('is_primary', true)->first(),
            'religion' => $this->info->religion,
            'mood' => $this->info->mood,
            'sex' => $this->info->sex,
            'interested_sex' => $this->info->interested_sex,
            'dob' => $this->info->dob,
            'purpose' => $this->info->purpose,
            'job_title' => $this->info->job_title,
            'company' => $this->info->company_name,
            'school' => $this->info->school,
            'education_level' => $this->info->education_level,
            'bio' => $this->info->bio,
            'other' => $this->info->other,
            'height' => $this->info->height,
            'relationship' => $this->info->relationship,
            'interests' => $this->interests,
            'languages' => $this->languages,

        ];
    }
}
