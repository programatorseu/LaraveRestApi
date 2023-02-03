<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'nazwa' => $this->nazwa,
            'nip' => $this->nip,
            'adres' => $this->adres,
            'miasto' => $this->miasto,
            'kodPocztowy' => $this->kod_pocztowy
        ];
    }
}
