<?php

use App\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers_list = config('teachers');

        foreach ($teachers_list as $teacher) {
            $newTeacher = new Teacher();
            $newTeacher->name = $teacher['name'];
            $newTeacher->lastname = $teacher['lastname'];
            $newTeacher->matter = $teacher['matter'];
            $newTeacher->save();

        }
    }
}
