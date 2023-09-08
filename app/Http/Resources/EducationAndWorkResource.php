<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EducationAndWorkResource extends JsonResource
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
            'school' =>$this->info->school,
            'job_title_id' => $this->info->job_title_id,
            'job_title' => $this->info->jobTitle->name,
            'company' => $this->info->company_name,
        ];
    }
}
