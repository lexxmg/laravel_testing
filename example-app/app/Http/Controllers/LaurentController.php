<?php

namespace App\Http\Controllers;

use App\Laurent\Laurent;
use App\Models\Out;
use Illuminate\Http\Request;

class LaurentController extends Controller
{
    public function laurent()
    {
        $out = Out::find(1);
        $host = $out->laurent_id;
        //dd($out->laurent_id);
        //$test = Laurent::test();
        $test = Laurent::getStatusOut('http://' . $host, 3);

        return view('laurent.laurent', ['test' => $test]);
    }
}
