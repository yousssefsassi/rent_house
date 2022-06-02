@extends('rent.master')
@extends('app')
  @section('content')
<div> Bonjour </div>
<b> {{ $name }} </b><i>DSI23</i>
<div>
    @if ($nb === 1)
    <b> j'ai un resultat </b>
    @elseif ($nb> 1)
    <b> j'ai plusieurs resultats </b>
    @else
    <b> j'ai n'ai pas de resultat </b>
    @endif
</div>
<div>
    @switch($nb)
    @case(1)
    premier case
    @break
    @case(2)
    Deuxiéme case
    @break
    @default
    cas par default
    @endswitch
</div>
