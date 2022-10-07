@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Donnee Des Membres
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
                        <a href='{{route('getmembre')}}' class="btn btn-primary btn-sm float-end"> Ajouter membre</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                               <th>ID</th> 
                               <th>Nom</th> 
                               <th>Prenom</th> 
                               <th>Email</th> 
                               <th>Contact</th> 
                               <th>Mode d'arriver</th> 
                               <th>Modifier</th> 
                               <th>Supprimer</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($membres as $membre)
                               <tr>
                                    <td>{{$membre->id}}</td>
                                    <td>{{$membre->nom}}</td>
                                    <td>{{$membre->prenom}}</td>
                                    <td>{{$membre->email}}</td>
                                    <td>{{$membre->contact}}</td>
                                    <td>{{$membre->mode}}</td>
                                    <td>
                                        <a href="{{url ('modifier-membre/'.$membre->id)  }}"class="btn btn-success">modifier</a>
                                    </td>
                                    <td>
                                        <a href="{{url('delete-membre/'.$membre->id)}}" class="btn btn-danger">supprimer</a>

                                    </td>
                                </tr> 
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
                
        </div>
    </div>
</div>
@endsection
