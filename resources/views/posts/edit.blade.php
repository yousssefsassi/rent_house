@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier le post</h2>
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
  
    <form action="{{ route('Posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
   
    
     
            <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$post->name }}" >
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Localisation:</strong>
                <input class="form-control"  name="localisation" placeholder="localisation" value="{{ $post->localisation }}"></input>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro tlf :</strong>
                <input  type="tlf" class="form-control"  name="tlf" placeholder="tlf" value="{{ $post->tlf }}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix :</strong>
                <textarea class="form-control" type="number" name="price" placeholder="Prix">{{ $post->price }}</textarea>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descreption:</strong>
                <textarea class="form-control" style="height:150px" name="descreption" placeholder="Descreption">{{ $post->descreption }}</textarea>
            </div>
</div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image" >
                <img src="/images/{{ $post->image }}" width="100px">{{ $post->image }}</div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
              
                <a class="btn btn-primary" href="{{ route('Posts.index') }}"> Retour</a>
          
        </div>
            </div>
        </div>
   
    </form>
@endsection