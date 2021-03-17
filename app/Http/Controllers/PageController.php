<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $date = date('Y-m-d H:i:s');
        $totalstudent = 8;
        $class = 'CNTT';
        //cách 1

        // return view('hello', [
        //     'date' => $date  //bên view có biến date có giá trị là $date
        // ]);
        
        //cách 2
        return view('hello', compact('date', 'totalstudent', 'class'));
    }
}
