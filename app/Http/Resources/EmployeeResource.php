<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'employeeId'=>$this->id,
            'employeeName'=>$this->employee_nme,
            'mobile'=>$this->mobile,
            'email'=>$this->email,
            'departmentId'=>$this->department_id,
            'designationID'=>$this->designation_id,
            'department'=>$this->department,
            'designation'=>$this->designation,
        ];
    }
}
