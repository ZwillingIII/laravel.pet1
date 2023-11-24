@extends('layouts.app')

@section('title', "Главная")

@section('head')
  @vite(['resources/sass/app.sass', 'resources/js/app.js'])
@endsection

@section('content')
  @include('components.header')
@endsection