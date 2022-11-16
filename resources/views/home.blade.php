@extends('layouts.app')

@section('title-block')
    Main
@endsection

@section('content')
<style>

.btn {
    display: inline-block; 
    background: #8C959D; 
    color: #fff; 
    padding: 1rem 1.5rem; 
    text-decoration: none; 
    border-radius: 3px; 
    width:130px;
    height:30px;
   }
.container {
width: 1330px; 
height: auto;
margin-right: auto; 
margin-left: auto; 

}

  </style>

<div class="container"> 
  <h1>Welcome To Our Quiz!</h1>
    <h2>If you want to go to the quiz press on the button below:</h2>

    <form action="main/start" method="post"></form>
    
    <p style="text-align: center"><a href="start" class="btn">Go To The Quiz Now!</a>
</div>

@endsection

