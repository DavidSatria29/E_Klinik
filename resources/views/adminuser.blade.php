@extends('layouts.adminmaster')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<div class="container" id="container-artikel">
<div class="row">
  <div class="col-md-5 mt-4">
    <div class="card">
      <div class="card-header">
        <h6 class="mb-0">User</h6>
      </div>
      <div class="card-body pt-4 p-3">
        <ul class="list-group">
          @forelse ($users as $user)
          <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
            <div class="d-flex flex-column">
              <h6 class="mb-3 text-sm">{{$user->name}}</h6>
              <span class="mb-2 text-xs">Email:<span class="text-dark font-weight-bold ms-sm-2">{{$user->email}}</span></span>
              <span class="mb-2 text-xs">No Telepon:<span class="text-dark ms-sm-2 font-weight-bold">0{{$user->nomor}}</span></span>
              <span class="mb-2 text-xs">Alamat :<span class="text-dark ms-sm-2 font-weight-bold">{{$user->alamat}}</span></span>
              <span class="mb-2 text-xs">Role :<span class="text-dark ms-sm-2 font-weight-bold">{{$user->role}}</span></span>
            </div>
            <div class="ms-auto text-end">
              <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('edit_create.useredit',['user' => $user->name]) }}"><i class="fas fa-pencil-alt text-dark me-2"></i>Edit</a>
              <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('user.delete',['user' => $user->name]) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
            </div>
          </li>
          @empty
          <span class="text-xs">Tidak Ada Data</span>
        @endforelse
        </ul>
      </div>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
      $('#example').DataTable();
  });
</script>

@endsection

