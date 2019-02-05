

<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="modal-take">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Place Request</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <h5> By clicking OK you are confirming that you will post the Answer within the given budget and time</h5>
        </div>
        <form action="{{ route ('assign-question', ['question_id' => $question->question_id])}}" method="POST">
          <!-- CSRF field is a must -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal footer -->
         <div class="modal-footer" style="text-align: left;">
          <button type="submit" class="btn btn-primary">Confirm Take</button>
        
        <div style="text-align: right;">     
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>

      </form>
        
      </div>
    </div>
  </div>
  
</div>


