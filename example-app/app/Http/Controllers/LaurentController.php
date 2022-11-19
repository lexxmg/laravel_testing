<?php

namespace App\Http\Controllers;

use App\Laurent\Laurent;
use Illuminate\Http\Request;

class LaurentController extends Controller
{
    public function laurent()
    {
        //$test = Laurent::test();
        $test = Laurent::getStatusOut('http://192.168.0.101', 3);

        return view('laurent.laurent', ['test' => $test]);
    }
}
