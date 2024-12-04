<?php

namespace App\Controllers;

class Columns extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('templates/nav');
        echo view('spalten');
        echo view('templates/footer');
    }

    public function form()
    {
        echo view('templates/header');
        echo view('templates/nav');
        echo view('formular');
        echo view('templates/footer');
    }
}
