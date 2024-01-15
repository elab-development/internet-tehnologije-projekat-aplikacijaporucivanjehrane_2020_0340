<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProizvodResource extends JsonResource
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
            'naziv_proizvoda' => $this->resource->naziv_proizvoda,
            'cena' => $this->resource->cena, 
            'opis_proizvoda' => $this->resource->opis_proizvoda,
            'kategorija' => $this->resource->kategorija,
            'prilozi' => $this->resource->prilozi,
            'ocena' => $this->resource->ocena,
        ];
    }
}
