    <!-- Modal-Update -->
    
    <div class="modal fade" id="Modal_update{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="/update">
            @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        <div class="row">
            <h5>Question: </h5>
        </div>

        <input style="visibility:hidden" name="id" value="{{ $q->id }}">

        <div class="row" style="padding-top: 10px;">
            <input name="question" value="{{$q->question}}" class="form-control">
        </div>
      </div>

      <div class="row">
            <div class="col-md-6"><label>A:</label></div>
            <div class="col-md-6"><label>B:</label></div>
      </div>    
      <div class="row">
            <div class="col-md-6"><input value="{{$q->a}}" name="optA"></div>
            <div class="col-md-6"><input value="{{$q->b}}" name="optB"></div>
      </div>  
      <div class="row">
            <div class="col-md-6"><label>C:</label></div>
            <div class="col-md-6"><label>D:</label></div>
      </div>    
      <div class="row">
            <div class="col-md-6"><input value="{{$q->c}}" name="optC"></div>
            <div class="col-md-6"><input value="{{$q->d}}" name="optD"></div>
      </div>
      <div class="row">
        <div class="col-md-3"> <label>Answer:</label>
            <select name="ans" class="form-control">
                <option value=" {{$q->ans}} ">{{$q->ans}} </option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>

            </select>
        </div>  
    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Question</button>
      </div>
      </form>
    </div>
  </div>
</div>