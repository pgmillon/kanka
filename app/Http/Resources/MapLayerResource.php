<?php

namespace App\Http\Resources;

class MapLayerResource extends ModelResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->entity([
            'map_id' => (int) $this->map_id,
            'name' => $this->name,
            'position' => (int) $this->position,
            'width' => (int) $this->width,
            'height' => (int) $this->height,
            'visibility_id' => $this->visibility_id,
            'type_id' => (bool) $this->type_id,
            'type' => (string) $this->typeName(),
        ]);
    }
}
