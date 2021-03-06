<?php

namespace App\Service;

use App\DataTransferObjects\CourseResponseDto;
use App\DataTransferObjects\RecruitResponseDto;
use App\DataTransferObjects\StudentResponseDto;
use App\Models\Student;
use Illuminate\Support\Collection;

class StudentService
{
    public function list(): Collection
    {
        return Student::with('courses')->get()
            ->map(function (Student $student) {
                return new StudentResponseDto(
                    $student->first_name,
                    $student->last_name,
                    $student->surname,
                    $student->gender,
                    $student->age,
                    $student->courses->pluck('name')->toArray(),
                );
            });
    }

    public function courses($id)
    {
         return Student::with('courses')->find($id)
             ->courses
             ->map(function ($course) {
                 return new CourseResponseDto(
                     $course->name,
                 );
         });
    }

    public function oldsStudentsList ($age, $gender = 'm'|'w'): Collection
    {
        return Student::query()
            ->where('age','>', $age)
            ->where('gender', $gender)
            ->get()
            ->map(function ($student) {
                return new RecruitResponseDto(
                    $student->first_name.' '.$student->last_name.', '. $student->gender.', '.$student->age );
            });
    }
}
