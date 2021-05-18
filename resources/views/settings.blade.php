@extends('layouts.app')

@section('content')
  <settings :user="{{ Auth::user() }}"  csrf="{{ csrf_token() }}"></settings>
@endsection