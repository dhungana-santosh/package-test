<?php

namespace TestVendor\TestPackage\controllers;


use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        return view('test::index');
    }

}