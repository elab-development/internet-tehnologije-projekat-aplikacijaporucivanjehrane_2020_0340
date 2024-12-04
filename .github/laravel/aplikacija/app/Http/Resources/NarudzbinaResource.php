<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NarudzbinaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

     public static $wrap = 'narudzbina';

    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->resource->id, 
            'user' => $this->resource->user,
            'restoran' => $this->resource->restoran_id,
            'napomena' => $this->resource->napomena,
           ];
    }
}
