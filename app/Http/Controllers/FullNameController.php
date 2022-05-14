<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullNameController extends Controller
{

    protected $result;

    public function getFullName( Request $request )
    {
        $this->result = $request->first_name . ' ' . $request->last_name;

        // return redirect()->back()->with( 'fullName', $this->result );

        return view( 'fullName.full-name', ['fullName' => $this->result] );
    }

}