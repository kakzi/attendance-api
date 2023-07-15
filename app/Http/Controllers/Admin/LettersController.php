<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Letters;
use Illuminate\Http\Request;

class LettersController extends Controller
{
    public function index()
    {
        // $letters = Letters::latest()->when(request()->q, function($letters) {
        //     $letters = $letters->where('name', 'like', '%'. request()->q . '%');
        // })->paginate(10);

        return view('admin.letters.index');
    }

    public function create()
    {
        return view('admin.letters.create');
    }
}
