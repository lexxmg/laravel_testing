<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRequest extends Controller
{
    protected $testArray = [1,2,3,4,5,6,7,8,9,0,56,7,89];

    public function testGet(Request $request)
    {
        $itemNumbers = $request->get('items');

        echo $itemNumbers;
        echo '<br>';
        echo $request->fullUrl();
        echo '<br>';
        echo $request->getRequestUri();
    }

    public function testPost(Request $request)
    {
        // code...
    }
}
