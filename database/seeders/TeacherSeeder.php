<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Rajesh Sharma',
                'subject' => 'Mathematics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suman Verma',
                'subject' => 'Physics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anil Kumar',
                'subject' => 'Chemistry',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Neha Gupta',
                'subject' => 'Biology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Amitabh Singh',
                'subject' => 'English',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Teacher::insert($teachers);
        $this->command->info('Teachers have been created successfully!');
    }
}
