<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProfil($id)
    {
        //Dans une variable, je stocke tous les éléments du modèle User
        $user = User::where('id', $id)->first();
        //Je crée ma vue profil.blade dans le dossier user, mais besoin d'un tableau de données avec les variables du dessus
        return view('User/profil', ["user" =>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('User/profilEdit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //A voir : pour modif mot de passe, login et adresse mail
    public function update(Request $request, $id)
    // tous les champs en required sauf mots de passe
    // si les deux champs mot de passe sont vide, pas de modifs du mdp
    {   
        if (auth()->guest()){
            flash('Vous devez être connecté pour voir cette page')->error();
            return redirect('/connexion');
        }
        
        request()->validate([
            'login' => ['required'],
            'mail' =>['required']
        ]);

        // User::update(['login'=>$request->login,'mail'=>$request->mail]);

        //test mdp et verif remplis et pareils
            // User::update(['mdp'=>$request->mdp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::findOrFail($id)->delete();
        return redirect()->route('/');
    }
}
