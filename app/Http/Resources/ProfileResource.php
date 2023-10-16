<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'email' => $this->email,
            'pictures' => $this->pictures()->orderBy('is_primary','desc')->orderBy('updated_at','desc')->get(),
            'religion' => $this->info->religion,
            'religion_id' => $this->religion_id,
            'mood' => $this->info->mood,
            'sex' => $this->info->sex ? "Male" :'Female',
            'interested_sex' => $this->info->interested_sex ? "Male" : 'Female',
            'dob' => $this->info->dob,
            'age' => $this->info->dob->age,
            'purpose' => $this->info->purpose,
            'education_and_work' =>[
                'school' =>$this->info->school,
                'job_title_id' => $this->info->job_title_id,
                'job_title' => $this->info->jobTitle?->name,
                'company' => $this->info->company_name,
            ],
            'education_level' => $this->info->education_level,
            'phone_number' => $this->info->phone_number,
            'bio' => $this->info->bio,
            'other' => $this->info->other,
            'height' => $this->info->height,
            'relationship' => $this->info->relationship,
            'smoking' => $this->info->smoking,
            'drinking' => $this->info->drinking,
            'star' => $this->info->star,
            'personality' =>$this->info->personality,
            'interests' => $this->interests,
            'languages' => $this->languages,

        ];
    }
}
