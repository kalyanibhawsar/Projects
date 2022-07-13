@extends('layouts.layout')
@section('title', 'Contact')

@section('content')
    <div class="container mt-5">
        <h2 class="text-warning mb-5 border-bottom">Contact Us</h2>
        <div class="row text-white mb-5">
            <p class="mx-auto mb-5">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
            </p>
            <div class="col-md-9 mb-5">
                <form action="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name"> Your Name</label>
                            <input type="text" class="form-control mt-2" id="inputName">
                        </div>
                        <div class="col-md-6">
                            <label for="Email"> Your Email</label>
                            <input type="text" class="form-control mt-2" id="inputEmail" required>
                        </div>
                        <div class="col-md-12">
                            <label for="message"> Your message</label>
                            <textarea name="message" id="inputMessage" class="form-control mt-2"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-5" type="submit">Send</button>
                </form>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled">
                    <li ><i class="fas fa-map-marker-alt fa-2x i-color"></i>
                        <p>Indore,India</p>
                    </li>
                    <li ><i class="fas fa-phone fa-2x i-color mt-4"></i>
                        <p>+ 91 9865236596</p>
                    </li>
                    <li ><i class="fas fa-envelope fa-2x i-color mt-4"></i>
                        <p>contact@email.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="#" ><i class="fab fa-twitter i-color"></i></a>
        <a href="#" ><i class="fab fa-facebook-f i-color mx-3"></i></a>
        <a href="#" ><i class="fab fa-instagram i-color"></i></a>
        <a href="#" ><i class="fab fa-dribbble i-color mx-3"></i></a>
    </div>
@endsection