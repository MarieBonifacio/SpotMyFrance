<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place; //appeler modèles utiles dans controller
use Auth;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lieux=Place::all(); // Je prends tout dans le modèle Place
        return view('Place/index', ["lieux"=>$lieux]); //Je retourne la vue index du dossier Place, avec les élément dans variable "lieu"
    }

    //Lieux par catégories, faire un objet JSON avec liste de catégories

    public function indexByCategory($name)
    {
        $lieux= Categorie::all()->where('name', $name)->first()->places();
        return view('Place/index', ["lieux"=>$lieux]);
        
        // $category = json_decode($category);
        // $collection;
        // if (is_array($category)){
        //     $category_ids = collect($category)->pluck('id');
        
        //     $places = Place::whereHas('categories', function($query) use ($category_ids) {
        //         // Assuming your category table has a column id
        //         $query->whereIn('categories.id', $category_ids);
        //     })->get();
            
        // } else {
        //     dd('Not array');
        // }

        // return view('Place/index', ["places"=>$collection]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPlace()
    {
        // return view('Place/create');
        return view('TEST');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePlace(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category'=>'required'
            //vérif formulaire
        ]);

        //récup lat et long (API)

        Place::create([
            'name'=> $request->name,
            'latitude' => $request->latitude, //pour tester
            'longitude' => $request->longitude,//pour tester
            'description' =>$request->description,
            'id_city'=>$request->ville,//pour tester
            'id_region'=>$request->region,//pour tester
            'id_department' => 1,//pour tester
            'average_grade' => 0,
            'id_user' => Auth::user()->id,
            'id_category' => $request->category
        ]);

        return redirect()->route('place.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPlace($id)
    {
        $lieu=Place::all()->where('id', $id)->first();
        return view('Place/show', ["lieu"=>$lieu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = Place::findOrFail($id);
        return view('Place/edit', ["article"=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update note
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place= Place::findOrFail($id)->delete();
        return redirect()->route('place.index');
    }
}
