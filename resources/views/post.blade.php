@extends('layouts.app')

@section('title', "Пост")

@section('head')
  @vite(['resources/sass/posts.detail.sass', 'resources/js/app.js'])
@endsection

@section('content')
  @include('components.formPutPost')
@endsection