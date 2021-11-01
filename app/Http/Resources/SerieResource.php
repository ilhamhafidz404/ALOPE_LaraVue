<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SerieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'status' => $this->status,
            'tag' => $this->tag,
            'thumbnail' => asset('storage/img/'.$this->thumbnail),
            'created_at' => $this->created_at->format('d F Y'),
        ];
    }
}
