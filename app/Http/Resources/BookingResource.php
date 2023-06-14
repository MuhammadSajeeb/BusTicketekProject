<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'passenger_name' => $this->passenger_name,
            'age' => $this->age,
            'gender' => $this->gender,
            'seat_no' => $this->seat_no,
            'phone' => $this->phone,
            'email' => $this->email,
            'is_confirmed' => $this->is_confirmed,
            'order_number' => $this->order_number,
            'luggage' => $this->luggage,
            'trip_id' => $this->trip_id,
            'price' => $this->price,
            'Trip' => $this->Trip,
            'trip_price' => $this->Trip->price,
            'Operator' =>$this->Trip->Bus->Operator->name,
        ];
    }
}
