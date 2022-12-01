<!-- Modal-Delete -->
<div class="modal fade" id="Modal_delete{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="/delete">
            @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">

        <input style="visibility:hidden" name="id" value="{{$q->id}}">

        <h5>Are you sure you want to delete this question?</h5>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
