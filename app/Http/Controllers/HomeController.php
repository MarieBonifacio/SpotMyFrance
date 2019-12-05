<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place; //appeler modèles utiles dans controller
use App\Models\Categorie;
use App\Models\Citie;
use App\Models\Region;
use App\Models\Department;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexHome()
    {
        $lieux=Place::orderBy('created_at', 'desc')->take(5)->get(); // Je prends les 5 derniers ajouts du modèle place
        return view('home', ["lieux"=>$lieux]); //Je retourne la vue home, avec les élément dans variable "lieu"
    }
}
