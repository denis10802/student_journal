<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Database\Factories\StudentFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RootUserSeeder::class,
        ]);
        Student::factory()->count(10)->girls()->create();
        Student::factory()->count(10)->boys()->create();
        Course::factory()->count(20)->create();
    }
}
