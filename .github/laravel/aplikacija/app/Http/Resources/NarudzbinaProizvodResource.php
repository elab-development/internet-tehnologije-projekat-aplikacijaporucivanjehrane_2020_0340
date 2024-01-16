<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NarudzbinaProizvodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->resource->id,
            'narudzbina' => $this->resource->narudzbina_id,
            'proizvod' => $this->resource->proizvod_id,
            'kolicina' => $this->resource->kolicina,
           ];
    }
}
