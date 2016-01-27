@extends('layouts.master_layout')

@section('title', 'Hello World')

@section('main_content')
    <h2>This is my page</h2>

    <h3>Hi everyone, I made a link/page for us to join on HipChat</h3>
    <p>When you join HipChat join the group name "Cs444-kidsfirst" without the quotes!</p>

    <p>Zach Newell</p>
    <p>Blake Smola</p>
    <p>Lukas Hoover</p>
    <p>Matt Mullenbach</p>
    <p>Alex Buchanan</p>
    <p></p>
    @yield('sub_content')
@endsection