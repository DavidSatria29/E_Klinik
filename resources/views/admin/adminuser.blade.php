@extends('layouts.adminmaster')
@section('content')
@section('title', 'Data User')
@section('User', 'active')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<div class="container" id="container-artikel">
  <div class="row">
    <div class="col-md-12 mt-4">
      <div class="card">
        <div class="card-header">
          <h6 class="mb-0">User</h6>
        </div>
        <div class="card-body pt-4 p-3">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Address</th>
                  <th>Role</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>0{{$user->nomor}}</td>
                  <td>{{$user->alamat}}</td>
                  <td>{{$user->role}}</td>
                  <td class="text-end">
                    <a class="btn btn-link text-dark" href="{{ route('edit_create.useredit',['user' => $user->name]) }}"><i class="fas fa-pencil-alt text-dark me-2"></i>Edit</a>
                    <a class="btn btn-link text-danger text-gradient" href="{{ route('user.delete',['user' => $user->name]) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="6">Tidak Ada Data</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
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

