<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membre;

class MembreController extends Controller
{
    public function getmembre()
    {
        $membres = Membre::all();
        return view('Addmembre' ,compact('membres'));
    }

    // pour enregistrer un membre
   public function store(Request $request)
   {
   
            $request->validate([
                'nom'=>'required',
                'prenom'=>'required',
                'email'=>['required','email'],
                'contact'=>'required',
                'mode'=>'required'
            ]);

         
            $membre = new Membre;
            $membre->nom = $request->nom;
            $membre->prenom = $request->prenom;
            $membre->email = $request->email;
            $membre->contact = $request->contact;
            $membre->mode = $request->mode;
            // dd($membre);
            $register=$membre->save();
            if($register){
                return back()->with('enregistrer avec succès');
            }else{
                return back()->with('enregistrer non fait');

            }
        
        // redirect('getmembre');
        return redirect();
   }

   public function modifier($id)
   {
    $membres = Membre::find($id);
    return view('Modifiermembre',compact('membres'));

   }
   public function update(Request $request, $id)
   {
    $membre = Membre::find($id);
    $membre->nom = $request->input('nom');
    $membre->prenom = $request->input('prenom');
    $membre->email = $request->input('email');
    $membre->contact = $request->input('contact');
    $membre->mode = $request->input('mode');
    $membre->update();

    return redirect('/home');
   
   }
   public function destroy($id)
   {
        $membre = Membre::find($id);
        $membre->delete();
        return back();
   }
}
