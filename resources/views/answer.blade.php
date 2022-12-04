<link href="files/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="files/stl.css" rel="stylesheet" type="text/css">

<div class="back1_2">
    <div class="container-fluid">
        <form method="post" action="/submitans">
            @csrf
        <div class="row" style="padding-top: 30vh; color: black; ">
        <h3 style="text-align: center; margin-bottom: 50px;">Choose the correct answer:</h3>
            <div class="col-md-4" >
                
            </div>

            <div class="col-md-4" style=" background: lightyellow;
    outline: 2px solid #000; border-radius: 12px;">
                <h4>№{{Session::get("nextq")}} {{$question->question}}</h4>
                <input value="a" name="ans" type="radio"> :(A) <small>{{$question->a}}</small><br>
                <input value="b" checked="true" name="ans" type="radio"> :(B) <small>{{$question->b}}</small><br>
                <input value="c" name="ans" type="radio"> :(C) <small>{{$question->c}}</small><br>
                <input value="d" name="ans" type="radio"> :(D) <small>{{$question->d}}</small><br>
                <input value="{{$question->ans}}" style="visibility:hidden" name="dbans">
            </div>
            </div>
            <div class="col-md-5"></div>

        </div>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
            <button type="submit" style="float: right;" class="btn btn-primary">Next</button>
        </div>
        <div class="col-md-5"></div>
        </div>
        </form>
    </div>
</div>

<script src="files/jquery.min.js"></script>