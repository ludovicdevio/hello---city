@extends('base')

@section('title')
    Hello City
@endsection

@section('content')
    <h1> Hello from Quebec! </h1>
    <p> It's currently {{ date('h:i A') }}. </p>
@endsection
