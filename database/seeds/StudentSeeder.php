<?php
use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students_list = [
            [
                'name' => 'Francesco',
                'lastname' => 'Rossi'
            ],
            [
                'name' => 'Mario',
                'lastname' => 'Bianchi'
            ],
            [
                'name' => 'Cloe',
                'lastname' => 'Zarulli'
            ]
        ];

        foreach ($students_list as $student){
            $newStudent = new Student();
            $newStudent->name = $student['name'];
            $newStudent->lastname = $student['lastname'];
            $newStudent->save();
        }
    }
}
