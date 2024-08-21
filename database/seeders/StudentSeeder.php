<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Define the sample data
        $students = [
            [
                'student_name' => 'Aarav Patel',
                'class_teacher_id' => rand(1, 5), // Randomly select a teacher ID
                'class' => '10th Grade',
                'admission_date' => Carbon::now()->subYears(3),
                'yearly_fees' => 1200.00,
                'gender' => 'Male',
                'phone_number' => '9876543210',
            ],
            [
                'student_name' => 'Isha Sharma',
                'class_teacher_id' => rand(1, 5),
                'class' => '9th Grade',
                'admission_date' => Carbon::now()->subYears(2),
                'yearly_fees' => 1100.00,
                'gender' => 'Female',
                'phone_number' => '9876543211',
            ],
            [
                'student_name' => 'Vivaan Singh',
                'class_teacher_id' => rand(1, 5),
                'class' => '8th Grade',
                'admission_date' => Carbon::now()->subYears(4),
                'yearly_fees' => 1000.00,
                'gender' => 'Male',
                'phone_number' => '9876543212',
            ],
            [
                'student_name' => 'Aanya Gupta',
                'class_teacher_id' => rand(1, 5),
                'class' => '10th Grade',
                'admission_date' => Carbon::now()->subYears(1),
                'yearly_fees' => 1300.00,
                'gender' => 'Female',
                'phone_number' => '9876543213',
            ],
            [
                'student_name' => 'Arjun Kumar',
                'class_teacher_id' => rand(1, 5),
                'class' => '7th Grade',
                'admission_date' => Carbon::now()->subYears(5),
                'yearly_fees' => 900.00,
                'gender' => 'Male',
                'phone_number' => '9876543214',
            ],
            [
                'student_name' => 'Saanvi Reddy',
                'class_teacher_id' => rand(1, 5),
                'class' => '6th Grade',
                'admission_date' => Carbon::now()->subYears(2),
                'yearly_fees' => 850.00,
                'gender' => 'Female',
                'phone_number' => '9876543215',
            ],
            [
                'student_name' => 'Kabir Verma',
                'class_teacher_id' => rand(1, 5),
                'class' => '9th Grade',
                'admission_date' => Carbon::now()->subYears(3),
                'yearly_fees' => 1150.00,
                'gender' => 'Male',
                'phone_number' => '9876543216',
            ],
            [
                'student_name' => 'Mira Patel',
                'class_teacher_id' => rand(1, 5),
                'class' => '8th Grade',
                'admission_date' => Carbon::now()->subYears(4),
                'yearly_fees' => 1050.00,
                'gender' => 'Female',
                'phone_number' => '9876543217',
            ],
            [
                'student_name' => 'Rohan Joshi',
                'class_teacher_id' => rand(1, 5),
                'class' => '7th Grade',
                'admission_date' => Carbon::now()->subYears(3),
                'yearly_fees' => 950.00,
                'gender' => 'Male',
                'phone_number' => '9876543218',
            ],
            [
                'student_name' => 'Diya Sharma',
                'class_teacher_id' => rand(1, 5),
                'class' => '10th Grade',
                'admission_date' => Carbon::now()->subYears(2),
                'yearly_fees' => 1250.00,
                'gender' => 'Female',
                'phone_number' => '9876543219',
            ],
            [
                'student_name' => 'Aryan Mehta',
                'class_teacher_id' => rand(1, 5),
                'class' => '6th Grade',
                'admission_date' => Carbon::now()->subYears(1),
                'yearly_fees' => 900.00,
                'gender' => 'Male',
                'phone_number' => '9876543220',
            ],
            [
                'student_name' => 'Shruti Singh',
                'class_teacher_id' => rand(1, 5),
                'class' => '8th Grade',
                'admission_date' => Carbon::now()->subYears(3),
                'yearly_fees' => 1020.00,
                'gender' => 'Female',
                'phone_number' => '9876543221',
            ],
            [
                'student_name' => 'Karan Kumar',
                'class_teacher_id' => rand(1, 5),
                'class' => '7th Grade',
                'admission_date' => Carbon::now()->subYears(2),
                'yearly_fees' => 980.00,
                'gender' => 'Male',
                'phone_number' => '9876543222',
            ],
            [
                'student_name' => 'Pooja Rao',
                'class_teacher_id' => rand(1, 5),
                'class' => '9th Grade',
                'admission_date' => Carbon::now()->subYears(4),
                'yearly_fees' => 1080.00,
                'gender' => 'Female',
                'phone_number' => '9876543223',
            ],
        ];

        // Insert records into the database
        DB::table('students')->insert($students);

        // Output informative messages
        $this->command->info('Student records with teacher assignments have been successfully inserted.');
    }
}
