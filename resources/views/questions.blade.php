@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ $error }}
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endforeach

            @if(Session::get('successMessage'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ Session::get('successMessage') }}
             <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>


            @endif
        </div>
        <div class="col-md-4"></div>
        </div>
    </div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-1"><h2>Users <b></b></h2></div>
                    <div class="col-sm-7"><button data-bs-toggle="modal" data-bs-target="#modal_add" class="btn btn-primary">Add</button>
                    <a href="/">Home</a></div>
                    <div class="col-sm-4">
                        <div class="search-box">


                        <form method="post" action="/search">
                          @csrf
                          <div class="d-flex">
                            <input type="text" name="keywords" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Question <i class="fa fa-sort"></i></th>
                       <th></th>
                    </tr>
                </thead>
                <tbody>

                @foreach($questions as $q)

                <tr>
                        <td>{{ $loop -> index}}</td>
                        <td>{{ $q->question }}</td>

                        <td>
                            <a href="#" class="text-warning" data-bs-toggle="modal" data-bs-target="#Modal_update{{ $q->id }}">Update</a>
                            <a href="#" class="text-danger"  data-bs-toggle="tooltip" data-bs-target="#Modal_delete{{ $q->id }}">Delete</a>
                        </td>
                    </tr>

 @endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">







