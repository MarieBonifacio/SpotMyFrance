<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place; //appeler modèles utiles dans controller
use App\Models\Categorie;
use Intervention\Image\Facades\Image;
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
        $lieux = Categorie::all()->where('name', $name)->first()->places;
        // dd($lieux);
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
            'category'=>'required',
            'photo'=>'required',
            //vérif champs formulaire
        ]);

        // upload photo
        $imageName = time().'.'.$request->photo->extension();  
        $request->photo->move(public_path('img/places/'), $imageName);

        //récup exif photo


        $data = Image::make(public_path('img/places/'.$imageName))->exif();
        // dd($data);
        if(isset($data['GPSLatitude'])){
        $lat = eval('return ' . $data['GPSLatitude'][0] . ';')
            + (eval('return ' . $data['GPSLatitude'][1] . ';') / 60)
            + (eval('return ' . $data['GPSLatitude'][2] . ';') / 3600);
        $lng = eval('return ' . $data['GPSLongitude'][0] . ';')
            + (eval('return ' . $data['GPSLongitude'][1] . ';') / 60)
            + (eval('return ' . $data['GPSLongitude'][2] . ';') / 3600);
            echo "$lat, $lng";
        } else {
            echo "No GPS Info"; 
        };
        //API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://places-dsn.algolia.net/1/places/reverse?aroundLatLng='.$lat.','.$lng.'&hitsPerPage=3&language=fr');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($output);
        // dd($response->hits);


        //DONNEES RECUPEREES
        $postcode= $response->hits[0]->postcode[0];
        $city = $response->hits[0]->city[0];
        $department = $response->hits[0]->administrative[0];

        echo " $postcode, $city, $department";




        

        





        // $ curl -X GET 'https://places-dsn.algolia.net/1/places/reverse?aroundLatLng=48.880379,%202.327007&hitsPerPage=5&language=fr';

        dd($data);


        // Place::create([
        //     'name'=> $request->name,
        //     'latitude' => $request->latitude, //pour tester
        //     'longitude' => $request->longitude,//pour tester
        //     'description' =>$request->description,
        //     'id_city'=>$request->ville,//pour tester
        //     'id_region'=>$request->region,//pour tester
        //     'id_department' => 1,//pour tester
        //     'average_grade' => 0,
        //     'id_user' => Auth::user()->id,
        //     'id_category' => $request->category
        // ]);

        // return redirect()->route('place.index');
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
