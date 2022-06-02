@extends('layouts.master')
@section('title','comments')
@section('content')
<table align='center' cellspacing=2 cellpadding=5 id="data_table" border=1>
<tr>
<th>Titre</th>
<th>Auteur</th>
<th>Contenu</th>
<th colspan="3"><input type="button" id="add_button" value="Ajouter" onclick="#"></th>
</tr>

@foreach ($comments as $post)
<tr>
<td>{{$comments->title}}</td>
<td>{{$comments->user->name}}</td>
<td>{{ Str::limit($post->content, 10) }}
<a href="{{route('comments.show',$post->id)}}">Lire commentaire</a></td>
<td>
<a class="button" id="comments_button" href="{{route('Posts.comments.index',$post->id)}}"> Commentaires </a>
</td>
<td>
<a class="button" id="edit_button" href="#"> Modifier </a>
</td>
<td>
<a class="button" id="delete_button" href="#"> Supprimer </a>
</td>
@endforeach
</tr>
</table>
@endsection