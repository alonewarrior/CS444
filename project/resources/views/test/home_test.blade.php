@extends('layouts.master_layout')

@section('title', 'Hello World')

@section('main_content')
    <h3>This is my page</h3>

    <p>Zach Newell</p>
    <p></p>
    @yield('sub_content')
@endsection