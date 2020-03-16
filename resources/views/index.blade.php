@extends('layouts.layouts')


@section('header')
{{-- section richiama il segnaposto yield  --}}
@endsection

@section('content')
@foreach ($arrayCd as $cd)
<div class="cd">
    <img src={{$cd ['post']}}/>
    <h3>{{$cd ['song']}}</h3>
    <small>{{$cd ['artist']}}</small>
    <strong>{{$cd ['year']}}</strong>
</div>

@endforeach
{{-- nel foreach con blade vuole sempre endforeach  --}}

@endsection 
