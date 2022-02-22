@extends('layouts.app')
@section('content')

<h1>Welcome to our products</h1>


<ul>
@foreach($products as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@endsection