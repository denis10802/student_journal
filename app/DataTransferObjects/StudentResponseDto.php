<?php

namespace App\DataTransferObjects;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use phpDocumentor\Reflection\Types\Nullable;

class StudentResponseDto
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $surname,
        public string $gender,
        public int $age,
        public ?array $course,
    ) {
    }
}
