@extends('layouts.master')
@section('title','comments')
@section('content')
<h1>{{$comments->title}}</h1>
<div>{{$comments->content}}</div>
<div>{{$comments->user->name}}</div>
<p><a href="{{route('comments')}}" title="retourner aux commentaire">retourner aux commentaire</a></p>
@endsection