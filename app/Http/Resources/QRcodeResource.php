<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QRcodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'type' => "QRCode",
            'attributes' =>[
                'user' => (String)$this->user_id,
                'agency' => $this->agency,
                'departure' => $this->departure,
                'arrival' => $this->arrival,
                'date' => $this->date,
                'class' => $this->user_id,
                'seat_number' => $this->seat_number,
                'passenger_name' => $this->passenger_name,
                'passenger_id' => $this->passenger_id,
                'passenger_phone' => $this->passenger_phone,
                'token' => $this->token,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            
        ];

    }
}
