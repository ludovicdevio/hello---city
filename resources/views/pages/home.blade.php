@extends('base')
<h1> Hello from Quebec! </h1>

@section('content')
    <p> It's currently {{ date('h:i A') }}. </p>
@endsection
