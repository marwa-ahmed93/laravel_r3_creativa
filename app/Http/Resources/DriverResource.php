<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this);
        // return parent::toArray($request);
        return [
            'Driver_name' => $this->name ,
            'Driver_email' => $this->email ,
            'Driver_id' => $this->id ,
        ];
    }
}
