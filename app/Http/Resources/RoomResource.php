<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'room_name' => $this->room_name,
            'description' => $this->description,
            'code' => $this->code,
            'status' => $this->status,
            'valid_vote' => $this->validVotes(),
            'invalid_vote' => $this->invalidVotes(),
            'total_vote' => $this->totalVotes(),
        ];
    }
}
