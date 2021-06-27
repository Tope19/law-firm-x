@extends('layouts.app', ['title' => 'Dashboard'])
@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to Law-Firm-x</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">

      <button data-id="exampleModal" data-toggle="modal" data-target="#exampleModal" href="#" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="btn-icon-prepend" data-feather="upload"></i>
        Create new Case
      </button>
      @include('layouts.includes.createModal')
    </div>
  </div>



  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Clients List Table</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->first_name }}</td>
                                <td>{{ $client->last_name }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->created_at->translatedFormat('l, F j, Y g:i a') }}</td>
                                <td><button  data-id="exampleModal-id" data-toggle="modal" data-target="#exampleModal-id-{{ $client->id }}" href="#" class="btn btn-outline-primary sm">View More Info</button></td>
                            </tr>
                       @include('layouts.includes.modal')
                        @endforeach

                    </tbody>

                </table>
                {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@stop

@push('ajax_crud')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="{{ $admin_source }}/assets/js/ajax.js"></script>

@endpush
