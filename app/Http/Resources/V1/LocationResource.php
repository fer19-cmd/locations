<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

// Recurso JSON para transformar el modelo Location en una respuesta API personalizada
class LocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'code' => $this->code, // Código de la sede
            'name' => $this->name, // Nombre de la sede
            'image' => $this->image,  // URL de la imagen de la sede
            'creationDate' => $this->created_at, // Fecha de creación (campo creado automáticamente por Eloquent)
            
        ];
    }
}
