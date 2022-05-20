<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compute;
use App\Services\ComputeService;

class ComputeController extends Controller
{
    public function index()
    {
        return view('application');
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => ['required'],
        ]);
        $compute = new Compute;
        $octave = new ComputeService;
        $data = $octave->runOctave($request->body,$request->user);
        dd($data);
        $compute->body = $data;
        $compute->serror = "nothing";
        $compute->nerrors = 0;
        $compute->save();
        return redirect()->back();
    }
}