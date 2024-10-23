<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Company;
use App\Models\Project;
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

    public function experience()
    {
        return inertia('Experience/IndexExperience');
    }

    public function projects()
    {
        $data['projects'] = Project::with(['company', 'skills'])->orderByDesc('year')->get();
        
        return inertia('Projects/IndexProjects', $data);
    }

    public function downloadResume($filename) 
    {
        return response()->file(public_path('assets/download/'.$filename));
    }
}
