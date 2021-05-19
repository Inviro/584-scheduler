@extends('layouts.app', ['dark_mode' => Auth::user() && Auth::user()->dark_mode])

@section('content')
  <settings :user="{{ Auth::user() }}"  csrf="{{ csrf_token() }}"></settings>
@endsection