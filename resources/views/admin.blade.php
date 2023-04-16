@extends('layouts.master')
<style>
  .container-user{
    margin-top: 3cm;
  }
  </style>
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>
<section>
  <div class="container container-user">
    <div class="card">
      <div class="card-header text-center">
        USER 
      </div>
      <div class="card-body">
        <table id="example" class="table table-striped" style="width:100%">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>email</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>
            @forelse ($users as $user)
              <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->nomor}}</td>
                  <td>{{$user->alamat}}</td>
                  <td>
                    <div class="justify-content-between">
                      <form action=""> 
                        <button type="submit" class="btn btn-danger me-1">Delete</button>
                      </form>
                      {{-- <form action="{{ route('edit_create.useredit',['user' => $user->name]) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <button type="submit" class="btn btn-warning">Update</button>
                      </form> --}}
                      <a href="{{ route('edit_create.useredit',['user' => $user->name]) }}" class="btn btn-warning">Edit</a>
                    </div>
                  </td>
                  <td>Active</td>
              </tr>
              @empty
          <td colspan="6" class="text-center">Tidak ada data...</td>
        @endforelse
          </tbody>
      </table>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        Chat Docter
      </div>
      <div class="card-body">
          <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>pertanyaan</th>
                      <th>Jawaban</th>
                      <th>Nama Dokter</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Donna Snider</td>
                      <td>Dok apakah saya akan mati?</td>
                      <td>mungkin saja</td>
                      <td>Dr. Aldy</td>
                      <td>
                        <div class="justify-content-between">
                        <form action=""> 
                          <button type="submit" class="btn btn-danger me-1">Delete</button>
                        </form>
                        <form action="">
                          <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                      </div>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>
</section>
<section>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        Article
      </div>
      <div class="card-body">
          <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>Gambar</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Jantungr</td>
                      <td>Bahaya Penyakit Jantung</td>
                      <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam eius odit libero culpa. Porro corporis iure, repellendus repudiandae aut beatae. A, repellat ex odit fugiat molestiae vitae laborum! Fugiat, dicta!</td>
                      <td>
                        <div class="justify-content-between">
                        <form action=""> 
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <form action="" class="d-inline-block">
                          <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                      </div>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
      $('#example').DataTable();
  });
</script>

@endsection

