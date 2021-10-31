<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'serie' => $this->serie->slug,
            'episode' => $this->episode,
            'duration' => $this->duration,
            'isPremium' => $this->isPremium,
        ];
    }
}
