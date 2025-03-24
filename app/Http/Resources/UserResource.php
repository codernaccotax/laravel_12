<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\UserTypeResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'userId' => $this->id,
            'userName' => $this->email,
            'userTypeId'=>$this->user_type_id,
            'userType'=> new UserTypeResource($this->user_type),
            'employee'=>new EmployeeResource($this->employee)
        ];
    }
}
