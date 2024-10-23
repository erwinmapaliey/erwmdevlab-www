<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Skill;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/Index');
    }

    public function about()
    {
        $data['experiences'] = Company::with(['experiences'])->get();
        $data['skills'] = Skill::all();
        
        return inertia('About/IndexAbout', $data);
    }
}
