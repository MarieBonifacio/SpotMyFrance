<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place; //appeler modèles utiles dans controller
use App\Models\Categorie;
use App\Models\Citie;
use App\Models\Region;
use App\Models\Department;
use App\Models\Photo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPlace()
    {
        return view('Place/create');
        // return view('TEST');
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
        $request->photo->move(public_path('img/places/tmp'), $imageName);

        //récup exif photo
        $data = Image::make(public_path('img/places/tmp/'.$imageName))->exif();

        if(isset($data['GPSLatitude'])){
        $lat = eval('return ' . $data['GPSLatitude'][0] . ';')
            + (eval('return ' . $data['GPSLatitude'][1] . ';') / 60)
            + (eval('return ' . $data['GPSLatitude'][2] . ';') / 3600);
        $lng = eval('return ' . $data['GPSLongitude'][0] . ';')
            + (eval('return ' . $data['GPSLongitude'][1] . ';') / 60)
            + (eval('return ' . $data['GPSLongitude'][2] . ';') / 3600);
            echo "$lat, $lng";
        } else {
            //RETURN VIEW ERREUR
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

        //DB
        $ville = Citie::all()->where('name', $city)->first();
        $dptm = Department::all()->where('code', $ville->department_code)->first();
        $region= Region::all()->where('code', $dptm->region_code)->first();

        $place= Place::create([
            'name'=> $request->name,
            'latitude' => $lat,
            'longitude' => $lng,
            'description' =>$request->description,
            'id_city'=>$ville->id,
            'id_region'=> $region->id,
            'id_department' => $dptm->id,
            'average_grade' => 0,
            'id_user' => Auth::user()->id,
            'id_category' => $request->category
        ]);
        //Créer dossier image
        $directoryName= $place->id;
        // $r=Storage::makeDirectory(public_path('img/places/').$directoryName.'/'); dd(public_path('img/places/'.$directoryName));
        File::makeDirectory(public_path('img/places/').$directoryName.'/', 0755, true, true);

        $new_path = public_path('img/places/').$directoryName."/".$imageName;
        $old_path = public_path('img/places/tmp')."/".$imageName;
        $move = File::move($old_path, $new_path);

        //Vignetage images
        File::makeDirectory(public_path('img/places/').$directoryName.'/thumbnail', 0755, true, true);
        $i=Image::make($new_path);
        $i->resize(320, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('img/places/').$directoryName.'/thumbnail/'.$imageName);

        //ENREGISTREMENT PHOTO DB
        $photo = Photo::create([
            'id_place'=> $place->id,
            'name'=> $imageName,
        ]);


        return redirect()->route('place.show', ['id'=>$place->id]);
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
