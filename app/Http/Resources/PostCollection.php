<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       //return parent::toArray($request);
        // return[
        //     'user_data' =>[
        //         'id' => $this->id,
        //         'user_name' => $this->name,
        //     ],
        //     'post_data' => [
        //         'posts' => $this->posts
        //     ],


        // ];
        return [
            'data' => $this->collection 
        ];


    }
}
