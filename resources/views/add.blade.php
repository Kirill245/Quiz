
<!-- Modal-Add -->
<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="modal_add" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="/add">
            @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="modal_add">Add</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Question</button>
      </div>
      </form>
    </div>
  </div>
</div>
