@extends('layouts.mainlayout')
@section('title',"Dashboard page")

@section('content')

        @php 
        $user = session()->get('user'); 
        @endphp

        <h1> Dashboard Page</h1>
@endsection

