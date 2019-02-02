  <div class="modal fade bottom" id="modal-bid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <!-- Add class .modal-frame and then add class .modal-bottom (or other classes from list above) to set a position to the modal -->
            <div class="modal-dialog modal-frame modal-bottom col-xl-10" role="document">


              <div class="modal-content">
                <div class="modal-body">
                  <div class="modal-header ">
                        <h4 class="modal-title" id="exampleModalLongTitle"> Post your Question</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>



                  <div class="row d-flex justify-content-center align-items-center">

                  
                    <div class="col-xl-12">
                        <form method="post" action="{{route('post-questions')}}"  enctype="multipart/form-data">

                        <div class="form-group">
                          <input type="hidden" placeholder="" class="form-control"   name="topic">
                        </div>
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                        <textarea class="form-control"></textarea>
                      </div>
                      

               
                              
                    <div class="form-group">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Continue</button>
                </div>
                    </form>

                    </div>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>