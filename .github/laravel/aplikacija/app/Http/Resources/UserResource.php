<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

     public static $wrap = 'korisnik';

    public function toArray(Request $request): array
    {
       // return parent::toArray($request);
       return [
        'id' => $this->resource->id, 
        'name' => $this->resource->name,
        'email' => $this->resource->email,
        'address' => $this->resource->address,
        'phone_number' => $this->resource->phone_number,
        'role' => $this->resource->role,
       ];
    }
}
