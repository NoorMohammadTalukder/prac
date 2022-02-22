@extends('layouts.app')
@section('content')
<h1>Contact Us</h1>

<form action="{{route('contactUs')}}" class="form-group" method="post">
{{csrf_field()}}

        <label for="">Email</label>
        <input type="email" name="email" id="" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>

        <label for="">Message</label>
        <input type="text" name="message" id="" value="{{old('message')}}" class="form-control">
        @error('message')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>

        <input type="submit">

</form>
@endsection