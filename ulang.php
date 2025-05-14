<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ulang extends Controller
{
    public function perulangan()
    {
        
        $for = [];
        for ($i = 0; $i <= 5; $i++) {
            $for[] = $i;
        }
        $while = [];
        $i = 0;
        while ($i <= 5) {
            $while[] = $i;
            $i++;
        }
        $doWhile = [];
        $i = 0;
        do {
            $doWhile[] = $i;
            $i++;
        } while ($i <= 5);

        return view('3ulang', compact('for', 'while', 'doWhile'));
    }
}
