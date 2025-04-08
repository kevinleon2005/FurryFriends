<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class ProductsController extends Controller
    {
        public function productos(){
            return view('products.productos'); // Crea la vista products/index.blade.php
        }
    }