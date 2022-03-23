<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            DB::table('grades')->insert([
                [
                    'course_name' => 'Programme and Career Orientation',
                    'test_name' => 'Assessment'
                ],
                [
                    'course_name' => 'Computer Science Basics',
                    'test_name' => 'Written Exam'
                ],
                [
                    'course_name' => 'Programming Basics',
                    'test_name' => 'Case Study Exam'
                ],
                [
                    'course_name' => 'Object Oriented Programming',
                    'test_name' => 'Case Study Exam'
                ],
                [
                    'course_name' => 'Object Oriented Programming',
                    'test_name' => 'Project'
                ],
                [
                    'course_name' => 'Framework Development 1',
                    'test_name' => 'Case Study Exam'
                ],
                [
                    'course_name' => 'Framework Development 1',
                    'test_name' => 'Project'
                ],
                [
                    'course_name' => 'Framework Project 1',
                    'test_name' => 'Assessment'
                ],
                [
                    'course_name' => 'Framework project 1',
                    'test_name' => 'Report'
                ],
                [
                    'course_name' => 'Framework project 2',
                    'test_name' => 'Portfolio'
                ],
                [
                    'course_name' => 'Framework Project 2',
                    'test_name' => 'Assessment'
                ],
                [
                    'course_name' => 'Personality 1',
                    'test_name' => '-'
                ],
                [
                    'course_name' => 'Personality 2',
                    'test_name' => '-'
                ],

            ])
        ];
    }
}
