<div class="modal fade" id="exampleModal-id-{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Client Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>First-Name: {{ $client->first_name }}</p><br>
        <p>Last-Name: {{ $client->last_name }}</p><br>
        <p>Email Address: {{ $client->email }}</p><br>
        <p>Date of Birth: {{ $client->dob }}</p><br>
        <p>Profile Image: <img height="100px" width="100px" src="{{ asset('storage/clients/' .$client->profile_image) }}" /> </p><br>
        <p>Case Details: {{ $client->case_details }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
