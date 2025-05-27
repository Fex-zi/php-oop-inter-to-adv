<?php
declare(strict_type=1);

namespace App\Controllers;

use App\View;

class InvoiceController
{

    public function index(): string 
    {

        return View::make('invoices/index');
    
    }

    public function create(): string
    {

        return '';
    }

    public function store()
    {
       // $invoice = new Invoice();

        $amount = $_POST['amount'];
        var_dump($amount);
    }
}