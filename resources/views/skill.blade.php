@extends('layouts.layout')
@section('title', 'Skill')
@section('content')
    <div class="container mt-5">
        <h2 class="text-warning mb-5 border-bottom">Skills</h2>
        <div class="row text-white">
            <div class="col-md-5">
                <h5 class="mt-5">HTML/CSS</h5>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
            </div>
            <div class="col-md-5 offset-md-2">
                <h5 class="mt-5">Javascript</h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated  bg-warning" role="progressbar" style="width:95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                </div>
            </div>
            <div class="col-md-5">
                <h5 class="mt-5">PHP</h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
            </div>
             <div class="col-md-5 offset-md-2">
                <h5 class="mt-5">Laravel</h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
            </div>
             <div class="col-md-5">
                <h5 class="mt-5">SQL</h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:85%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
            </div>
        </div>
    </div>
@endsection