<?php

namespace App\Http\Resources\Academia\Apis;

use Illuminate\Http\Resources\Json\JsonResource;

class OlympicsApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
