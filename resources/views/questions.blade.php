<link href="files/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="files/stl.css" rel="stylesheet" type="text/css">

<br>
<h3 style="text-align: center;">Table Of Questions</h3>
<br>
<br>

<br>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
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
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            Session::forget('successMessage');

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
                    <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Add</Button>
                    <a href="/">Home</a></div>
                    <div class="col-sm-4">
                        <div class="search-box">

                            <input type="text" class="form-control" placeholder="Search&hellip;">
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
                            <a href="#" class="text-warning" data-toggle="modal" data-target="#Modal_update {{ $q->id }}">Update</a>
                            <a href="#" class="text-danger"  data-toggle="tooltip" >Delete</a>
                        </td>
                    </tr>


                @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>


<!-- Modal-Add -->
<div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="/add">
            @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        <div class="row">
            <h5>Question: </h5>
        </div>
        <div class="row" style="padding-top: 10px;">
            <input name="question" class="form-control">
        </div>
      </div>

      <div class="row">
            <div class="col-md-6"><label>A:</label></div>
            <div class="col-md-6"><label>B:</label></div>
      </div>    
      <div class="row">
            <div class="col-md-6"><input name="optA"></div>
            <div class="col-md-6"><input name="optB"></div>
      </div>  
      <div class="row">
            <div class="col-md-6"><label>C:</label></div>
            <div class="col-md-6"><label>D:</label></div>
      </div>    
      <div class="row">
            <div class="col-md-6"><input name="optC"></div>
            <div class="col-md-6"><input name="optD"></div>
      </div>
      <div class="row">
        <div class="col-md-3"> <label>Answer:</label>
            <select name="ans" class="form-control">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>

            </select>
        </div>  
    </div>




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Question</button>
      </div>
      </form>
    </div>
  </div>
</div>




<script src="files/jquery.min.js"></script>