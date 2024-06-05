<?php

namespace App\Http\Controllers;

use App\Models\Spbu;
use Illuminate\Http\Request;

class SPBUDetailController extends Controller
{
    public function show()
    {
        $spbus = Spbu::all();

         return view ('welcome' , [
        'spbus' => $spbus
        ]);
    }

    public function detail($id)
    {
        $spbu = Spbu::find($id);
        return view('detail', compact('spbu'));
    }
    public function contact()
    {
        return view('contact');
    }
}
