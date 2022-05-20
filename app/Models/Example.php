<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    protected $name = 'Sudipto';

    public function returnName()
    {
        echo $this->name;
    }

    public function index()
    {
        return [
            0 => [
                'id'   => 1,
                'name' => 'arif',
            ],
            1 => [
                'id'   => 2,
                'name' => 'jenifer',
            ],
            2 => [
                'id'   => 3,
                'name' => 'santo',
            ],
            3 => [
                'id'   => 4,
                'name' => 'Maruf',
            ],

        ];
    }
}