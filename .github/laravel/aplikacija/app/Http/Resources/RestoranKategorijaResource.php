<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RestoranKategorijaResource extends JsonResource
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
            'restoran' => new RestoranResource($this->resource->restoran),
            'kategorija' => $this->resource->kategorija,
           ];
    }
}
