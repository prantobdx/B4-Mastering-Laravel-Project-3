<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    protected $result;

    public function getResult( Request $request )
    {

        // return $request->all();
        switch ( $request->option )
        {
            case '+':$this->result = $request->first_number + $request->last_number;
                break;
            case '-':$this->result = $request->first_number - $request->last_number;
                break;
            case '*':$this->result = $request->first_number * $request->last_number;
                break;
            case '/':$this->result = $request->first_number / $request->last_number;
                break;
        }
        return redirect()->back()->with( 'result', $this->result );

    }

}