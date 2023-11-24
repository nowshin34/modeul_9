<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        
        $projects = [
            ['title' => 'Project 1', 'description' => 'Description 1'],
            ['title' => 'Project 2', 'description' => 'Description 2'],
            
        ];

        return view('projects', ['projects' => $projects]);}
}
