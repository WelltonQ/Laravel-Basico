<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $title = 'Titulo teste';
        $var1 ='123';

        return view('site.home.index', compact('title', 'var1'));
    }
    public function contato()
    {
        return view('site.contact.indexcontact');
    }
    public function categoria($id = 1)
    {
        return "Listagem dos posts da categoria: $id";
    }
}