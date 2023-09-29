<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Education;

class HomeController extends Controller
{
    public function register()
    {
        return view('register');
    }
public function register_data(Request $request)
{
    $candidate=Candidate::create([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
    ]);
     $c_id=$candidate->candidate_id;
        Education::create([
        'course'=>$request->input('course'),
        'university'=>$request->input('university'),
        'year'=>$request->input('year'),
        'candidate_id'=>$c_id
        ]);
        return redirect()->route('register');
     }
}
