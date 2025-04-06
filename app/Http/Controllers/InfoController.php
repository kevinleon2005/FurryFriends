<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class InfoController extends Controller
    {
        public function nosotros()
        {
            return view('info.nosotros'); // Crea la vista info/nosotros.blade.php
        }
    }
