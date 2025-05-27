<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {
        return View::make('index');
    }

    public function download(){
        header('Content-Type: apllication/pdf');
        header('Content-Disposition: attachment;filename"myfile.pdf');

        //readfile(STORAGE_PATH .'/name');
    }

    public function upload(){
        $filepath = STORAGE_PATH.'/'.$_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'],$filepath);

       

        header('location: /');
    }
}
