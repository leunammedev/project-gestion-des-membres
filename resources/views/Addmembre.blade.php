@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ajout Des Membres
                  
                        <a href='/home' class="btn btn-primary btn-sm float-end"> Retour</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{route('ajoutmembre')}}" method="POST">

                    <div class="form-group mb-3">
                        @csrf
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control" required autocomplete="nom" autofocus />
                           
                        </div>
                        <div class="form-group mb-3">
                            <label>Prenom</label>
                            <input type="text" name="prenom"  class="form-control" required autocomplete="prenom" autofocus />
                    
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" name="email"  class="form-control" required autocomplete="email" autofocus />
                            
                        </div>
                        <div class="form-group mb-3">
                            <label>Contact</label>
                            <input type="text" name="contact"  class="form-control" required autocomplete="contact" autofocus/>
                       
                        </div>
                        <div class="form-group mb-3">
                            <label>Mode d'arriver</label>
                            <input type="text" name="mode" class="form-control" required autocomplete="mode" autofocus/>
                           
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Enregistrer Membre</button>
                        </div>
                    </form>

                </div>
            </div>
                
        </div>
    </div>
</div>
@endsection