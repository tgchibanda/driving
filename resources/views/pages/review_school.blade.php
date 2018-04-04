<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">School Review</h4>
        </div>
        <div class="modal-body">
            <form action="{{route('schoolreview.store')}}" method="post" role="form">
                {{csrf_field()}}
    
                    <div class="form-group">
                            <label for="">Headline</label>
                            <input type="text" class="form-control" name="school_review_headline" id="" placeholder="Enter headline" required>
        
                        </div>
    
                        <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="school_review_description" id="" required placeholder="Enter details"></textarea>
            
                            </div>
    
                            <div class="form-group">
                                    <label for="">Rating</label>
                                    <select class="form-control" name="school_review_rating" id="">
                                        <option value="1">Very Bad</option>
                                        <option value="2">Bad</option>
                                        <option value="3">Good</option>
                                        <option value="4">Very Good</option>
                                        <option value="5">Excellent</option>
                                    </select>
                            <input type="hidden" name="school_id" value="{{$school->school_id}}">
                                </div>
                    <button class="btn btn-primary btn-sm" type="submit">Submit review</button>
                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
