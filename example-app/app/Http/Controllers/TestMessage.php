<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestMessage extends Controller
{
    /**
    * $iteration
    * парапетр URL
    */

    public function showMessage($iteration)
    {
        $message = 'Это controller ShowMessage';
        echo $message;
        echo '<br>';

        for ($i=0; $i < $iteration; $i++) {
            echo $message;
            echo '<br>';
        }
    }
}
