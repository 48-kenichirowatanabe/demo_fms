<?php

namespace App\Http\Resources\CompanyUser;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyUser extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
