<link href="files/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="files/stl.css" rel="stylesheet" type="text/css">

<div class="container-fluid">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-4">
        <label>Correct: <small>{{Session::get('correctans') }}</small></label>
        <label>Incorrect: <small>{{Session::get('wrongans') }}</small></label>
        <label>Final Result: <small>{{Session::get('correctans')}} / {{Session::get('correctans') +  Session::get('wrongans')}}</small></label>
        <br>
        <br>
        <br><br>
        <a href="/"><button class="btn btn-primary" style="margin-left: 20%;">Finish Quiz</button></a>
    </div>
    <div class="col-md-3 "></div>
</div>
</div>

<script src="files/jquery.min.js"></script>