<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static $name = 'Santo';
    public static $name1 = 'Mamun';
    public static $name2 = 'Nitu';
    public static $name3 = 'Tanvir';
    public static $name4 = 'Lota';

    // protected static $name = 'Santo';

    // public static function printName()
    // {

    //     return self::$name;
    // }

    public static function index()
    {
        return [
            0 => [
                'id'    => 1,
                'name'  => self::$name,
                'phone' => '01345-356321',
                'image' => asset( 'assets/img/kids-2.jpg' ),
            ],
            1 => [
                'id'    => 2,
                'name'  => self::$name1,
                'phone' => '01445-356321',
                'image' => asset( 'assets/img/kids-3.jpg' ),
            ],
            2 => [
                'id'    => 3,
                // 'name' => 'santo',
                'name'  => self::$name2,
                'phone' => '01745-356321',
                'image' => asset( 'assets/img/kids-1.jpeg' ),

            ],
            3 => [
                'id'    => 4,
                'name'  => Self::$name3,
                'phone' => '01845-356321',
                'image' => asset( 'assets/img/p1.jpg' ),
            ],
            4 => [
                'id'    => 5,
                'name'  => Self::$name4,
                'phone' => '01645-356321',
                'image' => asset( 'assets/img/p2.jpg' ),
            ],
            5 => [
                'id'    => 6,
                'name'  => 'Sobuj',
                'phone' => '01545-356321',
                'image' => asset( 'assets/img/p3.jpg' ),
            ],

        ];
    }
}