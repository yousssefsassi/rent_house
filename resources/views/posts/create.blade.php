@extends('layouts.master')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 align='center'>Ajouter une maison</h2>
        </div>
        
    </div>
</div>
      
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Il y a eu des problèmes avec votre entrée.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('Posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Localisation:</strong>
                <input class="form-control"  name="localisation" placeholder="localisation"></input>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro tlf :</strong>
                <input  type="tlf" class="form-control"  name="tlf" placeholder="tlf"></input>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix :</strong>
                <textarea class="form-control" type="number" name="price" placeholder="Prix"></textarea>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="descreption" placeholder="Description"></textarea>
            </div>
</div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
               
            <a class="btn btn-primary" href="{{ route('Posts.index') }}"> retour</a>
    
        </div>
    </div>
      
</form>
@endsection