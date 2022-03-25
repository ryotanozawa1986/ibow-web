<?php

namespace App\Http\Controllers;
use App\Models\Owner_item;



use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {

        $owner_items = Owner_item::all();
        echo('<pre>');
            var_dump($owner_items);
        echo('<pre>');
        exit;
    }
}