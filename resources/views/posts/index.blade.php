@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 align='center'>Panneau de loueur </h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-info" href="\create"> Créer nouveau post</a>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Localisation</th>
            <th>Numéro tlf </th>
            <th>Prix</th>
            <th>Description</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $post->image }}" width="100px"></td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->localisation }}</td>
            <td>{{ $post->tlf }}</td>
            <td>{{ $post->price }}DT</td>
            <td>{{ $post->descreption }}</td>
            
            <td>
                <form action="{{ route('Posts.destroy', $post->id) }}" method="POST">
      
                    <a class="btn btn-primary" href="{{ route('Posts.show', $post)  }}">Lire</a>
       
                    <a class="btn btn-primary" href="{{ route('Posts.edit',$post->id) }}">Modifier</a>
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-primary">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div align='center'>
    <a  class="btn btn-info"  href=" {{ route('dashboard') }} ">Retour au panel</a>
    <a class="btn btn-info" href="/"> Retour</a>
</div>
    {!! $posts->links() !!}
    @endsection