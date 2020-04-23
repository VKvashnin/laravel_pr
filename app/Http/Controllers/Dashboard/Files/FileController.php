<?php

namespace App\Http\Controllers\Dashboard\Files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        //Storage::put('text.txt', 'Content string');

        /*
        if (Storage::disk('public')->exists('text.txt');)
        {
            echo Storage::disk('public')->get('text.txt');
        }
         */

    }

    public function upload()
    {
        Storage::put();
    }
}
