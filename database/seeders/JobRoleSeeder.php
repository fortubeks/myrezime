<?php

namespace Database\Seeders;

use App\Models\JobRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $jobRoles = [
            'Accountant',
            'Administrator',
            'Architect',
            'Artist',
            'Attorney',
            'Baker',
            'Banker',
            'Barista',
            'Bartender',
            'Chef',
            'Civil Engineer',
            'Cleaner',
            'Consultant',
            'Customer Service Representative',
            'Data Analyst',
            'Dentist',
            'Doctor',
            'Electrician',
            'Engineer',
            'Financial Analyst',
            'Graphic Designer',
            'Human Resources Manager',
            'Information Technology (IT) Specialist',
            'Journalist',
            'Lawyer',
            'Marketing Manager',
            'Nurse',
            'Pharmacist',
            'Photographer',
            'Pilot',
            'Police Officer',
            'Professor',
            'Programmer',
            'Project Manager',
            'Real Estate Agent',
            'Receptionist',
            'Sales Representative',
            'Software Developer',
            'Teacher',
            'Web Developer',
        ];

        foreach ($jobRoles as $role) {
            JobRole::create(['name' => $role]);
        }
    }
}
