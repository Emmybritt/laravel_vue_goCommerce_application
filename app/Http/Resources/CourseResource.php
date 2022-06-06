<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'amount'=> $this->amount,
            'discounted_amount'=> $this->discounted_amount,
            'currency' => $this->currency,
            'image' => $this->image ? URL::to($this->image) : null,
            'rating' => $this->rating,
            'duration' => $this->duration,
            'lessons' => $this->lessons,
            'level' => $this->level,
            'tag' => $this->tag,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
