@extends('layouts.app')
@section('content')
    <h1>Start the quiz now!</h1>
<h2>All data</h2>

@foreach($data as $element)
<p>{{ $element ->questionId}}</p>
<p>{{ $element ->question}}</p>
<p>{{ $element ->text}}</p>
@endforeach
@endsection