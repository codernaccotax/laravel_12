<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\User;
use App\Models\UserType;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        UserType::insert([
            ['user_type_name' => 'Admin'],
            ['user_type_name' => 'Developer'],
            ['user_type_name' => 'Manager'],
        ]);

        Department::insert([
            ['department_name' => 'General'],
            ['depatment_name' => 'Sales'],
            ['depatment_name' => 'Production'],
            ['depatment_name' => 'Worker'],
        ]);
        Designation::insert([
            ['designation_name' => 'Owner'],
            ['designation_name' => 'Gen. Worker'],
        ]);
        Employee::insert([
            ['employee_nme'=>'Vivekanada','mobile'=>'9836444999','email'=>'bangle312@gmail.com','department_id' => 1, 'designation_id' => 1]
        ]);
    }
}
