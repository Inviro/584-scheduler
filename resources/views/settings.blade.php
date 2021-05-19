@php
    $dark_mode = Auth::user() ? Auth::user()->dark_mode : false
@endphp
@extends('layouts.app', ['dark_mode' => $dark_mode])

@section('content')
  <settings :user="{{ Auth::user() }}" :dark_mode="{{ $dark_mode }}" csrf="{{ csrf_token() }}"></settings>
@endsection