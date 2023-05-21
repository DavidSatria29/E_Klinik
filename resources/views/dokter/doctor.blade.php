@extends('layouts.doctormaster')

@section('content')
@section('title', 'Halaman Dokter')
@section('Dashboard', 'active')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<section>
  @if (session()->has('pesan'))
    <div class="alert alert-success">
      {{ session()->get('pesan') }}
    </div>
  @endif
  <div class="container container-dokter mt-5">
    <div class="card">
      <div class="card-header">
        Chat Dokter
      </div>
      <div class="card-body">
          <table id="example" class="table-responsive table-striped" style="width:100%">
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
                @forelse ($chats as $chat)
                  <tr>
                      <td>{{$chat->name}}</td>
                      <td>{{$chat->question}}</td>
                      <td>{{$chat->answer}}</td>
                      <td>{{$chat->name_doctor}}</td>
                      <td>
                        <div class="justify-content-between">
                        <a href="{{ route('edit_create.chateditdoctor',['chat' => $chat->name]) }}" class="btn btn-warning">Update</a>
                      </div>
                    </td>
                  </tr>
                  @empty
          <td colspan="6" class="text-center">Tidak ada data...</td>
        @endforelse
              </tbody>
          </table>
      </div>
  </div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 mb-lg-0 mb-4">
      <div class="card mt-4">
        <div class="card-header">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">Deskripsi Penyakit</h6>
            </div>
            <div class="col-6 text-end">
              <a class="btn bg-gradient-dark mb-0" href="{{ route('doctoredit_create.penyakitcreate') }}"><i class="fas fa-plus"></i> Tambah Deskripsi Penyakit</a>
            </div>
          </div>
        </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Penyakit</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Icon</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi Penyakit</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jurnal referensi</th>
                    <th class="text-secondary opacity-7" colspan="2"></th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($penyakits as $penyakit)
                  <tr>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$penyakit->id}}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <p class="text-xs font-weight-bold mb-0">{{$penyakit->nama_penyakit}}</p>
                    </td>
                    <td class="align-middle">
                      <p class="text-xs font-weight-bold mb-0">{{$penyakit->icon}}</p>
                    </td>
                    <td class="align-middle">
                      <p class="text-xs font-weight-bold mb-0">{{$penyakit->deskripsi}}</p>
                    </td>
                    <td class="align-middle">
                      <p class="text-xs font-weight-bold mb-0">{{$penyakit->jurnal_referensi}}</p>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-link text-dark mb-0" href="{{ route('doctoredit_create.penyakitedit',['penyakit' => $penyakit->nama_penyakit]) }}"><i class="fas fa-pencil-alt text-dark me-2" title="Edit"></i></a>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-link text-danger text-gradient mb-0" href="{{ route('doctorpenyakit.delete',['penyakit' => $penyakit->nama_penyakit]) }}"><i class="far fa-trash-alt me-2"title="Delete"></i></a>
                    </td>
                  </tr>
                  @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
              @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
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

