@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Modifier Membres
                       
                        <a href='/home' class="btn btn-primary btn-sm float-end"> Retour</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-membre/'.$membres->id) }}" method="POST">
                    @csrf
                    @method('put')
                        <div className="form-group mb-3">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control"  value="{{$membres->nom }}"/>
                        </div>
                        <div className="form-group mb-3">
                            <label>Prenom</label>
                            <input type="text" name="prenom" class="form-control" value="{{$membres->prenom }}"/>
                        </div>
                        <div className="form-group mb-3">
                            <label>Email</label>
                            <input type="text" name="email"  class="form-control" value="{{$membres->email }}"/>
                        </div>
                        <div className="form-group mb-3">
                            <label>Contact</label>
                            <input type="text" name="contact"  class="form-control" value="{{$membres->contact }}"/>
                        </div>
                        <div className="form-group mb-3">
                            <label>Mode d'arriver</label>
                            <input type="text" name="mode" class="form-control" value="{{$membres->mode }}" />
                        </div>
                        <div className="form-group mb-3">
                            <button type="submit" id="updatbtn" class="btn btn-primary">Mettre à Jour</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection