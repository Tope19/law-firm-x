<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Case</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('client.store') }}" enctype="multipart/form-data">@csrf
            <div class="form-group row">
                <div class="col-6">
                    <label>First Name</label>
                    <div id="the-basics">
                        <input id="first_name" name="first_name" type="text" placeholder="First Name">
                    </div>
                </div>
                <div class="col-6">
                    <label>Last Name</label>
                    <div id="bloodhound">
                        <input id="last_name" name="last_name" type="text"  placeholder="Last Name">
                    </div>
                </div>
                <br>
                <div class="col-6">
                    <label>Email Address</label>
                    <div id="the-basics">
                        <input id="email" name="email" type="email"  placeholder="Email Address">
                    </div>
                </div>
                <br>
                <div class="col-6">
                    <label>Date of Birth</label>
                    <div id="bloodhound">
                        <input id="dob" name="dob" type="date"  placeholder="date of Birth">
                    </div>
                </div>
                <br>
                <div class="col-6">
                    <label>Profile Image</label>
                    <div id="bloodhound">
                        <input id="profile_image" name="profile_image" type="file">
                    </div>
                </div>
                <br>
                <div class="col-6">
                    <label>Detail of your Case</label>
                    <div id="bloodhound">
                        <textarea style="resize: none; padding:30px; overflow:hidden" class="form-control" id="case_details" name="case_details"   rowspan="50" placeholder="Write your case Details" onfocus="this.placeholder = ''" onblur="this.placeholder ='Write your case Details'"></textarea>
                    </div>
                </div>
            </div>
            <button id="butsave" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

