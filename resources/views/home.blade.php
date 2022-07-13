@extends('layouts.layout')
@section('title', 'Home')

@section('content')
    <div class="mt-5">
        <div class="text-center">
            <img src="images/d4.png" alt="" class="img-thumbnail" width="150px" height="100" >
        </div>
        <div class="text-white text-justify mx-5 mt-5">
            <h4 class="st-font">Hello,</h4>
            <div class="px-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
        </div>
        <div class="text-center">
            <a href="{{ asset('contact') }}" class="btn btn-outline-warning mt-4">Contact</a>
        </div>
    </div>
@endsection
  
