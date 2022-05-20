<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected static $name = 'Santo';

    public static function printName()
    {
        // return Self::name;
        return 'Self::name';
    }

    public static function index()
    {
        return [
            0 => [
                'id'   => 1,
                'name' => 'Arif',
            ],
            1 => [
                'id'   => 2,
                'name' => 'Jenifer',
            ],
            2 => [
                'id'   => 3,
                // 'name' => 'santo',
                'name' => 'Maruf',

            ],
            3 => [
                'id'   => 4,
                'name' => Self::printName(),
            ],

        ];
    }
}