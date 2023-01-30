<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostResources extends JsonResource
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
       return[
        'user_data' => [
            'id' => $this->id,
            'user_name' => $this->name,
        ],

       'posts' =>PostCollection::make($this->whenLoaded('posts') ),// call postCollection and make collection from it
       // 'posts' =>PostCollection::collection($this->posts),// call postCollection and make collection from it
        //and whenLoaded('posts) :mean that if posts relation was found call it from postcollection


       ];
    }
}
