<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\DisciplineResource;

class StudentDisciplineResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            
            'disciplines' => DisciplineResource::collection($this->whenLoaded('disciplines'))





        ];
    }
}
