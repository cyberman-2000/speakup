<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PochtaResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'phone_number'=>$this->phone_number,
            'subject'=>$this->subject,
            'message'=>$this->message,
            'created_at'=>$this->created_at
        ];
    }
}
