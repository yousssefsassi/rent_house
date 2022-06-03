@extends('layouts.master')
  
@section('content')
    <div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 > Lire Article</h2>
            </div>
            
        </div>
    </div>
      
    <div class="row" >
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                      {{ $posts->name }}
            </div>
            <div class="form-group">
                <strong>Localisation:</strong>
                      {{ $posts->localisation }}
            </div>
            <div class="form-group">
                <strong>Prix:</strong>
                      {{ $posts->price }}DT
            </div>
            <div class="form-group">
                <strong>Numéro téléphone:</strong>
                      {{ $posts->tlf }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description :</strong>
                {{ $posts->descreption }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <div class="col-xs-13 col-sm-13 col-md-13">
                <img src="/images/{{ $posts->image }}" width="200px"></div>
            </div>
        </div>
        <br> <br> <br>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Posts.index') }}"> Retour</a>
            </div>
    </div>
@endsection