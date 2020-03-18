<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            'Общеинтеллектуальное',
            'Спортивно-оздоровительное',
            'Общекультурное',
            'Духовно-нравственное',
        ];

        foreach ($courses as $course_name) {
            \App\Course::create([
                'name' => $course_name,
            ]);
        }
    }
}
