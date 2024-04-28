@extends('layouts.plantilla')

@section('title', 'Post: ' . {{$post}})

@section('content')
    <h1>Post {{$post}}</h1>
@endsection