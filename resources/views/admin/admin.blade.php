@extends('layouts.adminmaster')
@section('content')
@section('title', 'Halaman Admin')
@section('Dashboard', 'active')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>
  <style>
    footer{
      position:static;
      bottom: 0;
      width: 100%;
    }
  </style>

<div class="container" id="container-artikel">
<div class="row">
  <div class="col-md-12 col-lg-5 mt-4">
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

  <div class="col-md-12 col-lg-7 mt-4">
    <div class="card">
      <div class="card-header">
        <h6 class="mb-0">Pertanyaan</h6>
      </div>
      <div class="card-body pt-4 p-3">
        <ul class="list-group">
          @forelse ($chats as $chat)
          <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
            <div class="d-flex flex-column">
              <span class="mb-2 text-xs">Nama Penanya : <span class="text-dark font-weight-bold ms-sm-2">{{$chat->name}}</span></span>
              <span class="mb-2 text-xs">Email Penanya : <span class="text-dark font-weight-bold ms-sm-2">{{$chat->email}}</span></span>
              <span class="mb-2 text-xs">Pertanyaan Penanya : <span class="text-dark ms-sm-2 font-weight-bold">{{$chat->question}}</span></span>
              <span class="mb-2 text-xs">Jawaban : <span class="text-dark ms-sm-2 font-weight-bold">{{$chat->answer}}</span></span>
              <span class="mb-2 text-xs">Dokter Yang Menjawab : <span class="text-dark ms-sm-2 font-weight-bold">{{$chat->name_doctor}}</span></span>
            </div>
            <div class="ms-auto text-end">
              <a class="btn btn-link text-dark mb-0" href="{{ route('edit_create.chatedit',['chat' => $chat->name]) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
              <a class="btn btn-link text-danger text-gradient mb-0" href="{{ route('chat.delete',['chat' => $chat->name]) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
            </div>
          </li>
          @empty
          <span class="text-xs">Tidak Ada Data</span>
        @endforelse
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
      <div class="card-header">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-0">Artikel</h6>
          </div>
          <div class="col-6 text-end">
            <a class="btn bg-gradient-dark mb-0" href="{{ route('edit_create.articlecreate') }}"><i class="fas fa-plus"></i> Tambah Artikel</a>
          </div>
        </div>
      </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gambar</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Isi Konten</th>
                  <th class="text-secondary opacity-7" colspan="2"></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($articles as $article)
                <tr>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{$article->id}}</p>
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{$article->image_path}}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$article->title}}</p>
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{$article->content}}</p>
                  </td>
                  <td class="align-middle">
                    <a class="btn btn-link text-dark mb-0" href="{{ route('edit_create.articleedit',['article' => $article->id]) }}"><i class="fas fa-pencil-alt text-dark me-2" title="Edit"></i></a>
                  </td>
                  <td class="align-middle">
                    <a class="btn btn-link text-danger text-gradient mb-0" href="{{ route('article.delete',['article' => $article->id]) }}"><i class="far fa-trash-alt me-2"title="Delete"></i></a>
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

  <div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4 mb-5">
      <div class="card-header">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-0">Pesan Dari Hubungi Kami</h6>
          </div>
        </div>
      </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Isi Pesan</th>
                  <th class="text-secondary opacity-7" colspan="2"></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($contacts as $contact)
                <tr>
                  <td>
                    <p class="text-xs text-center font-weight-bold mb-0">{{$contact->name}}</p>
                  </td>
                  <td>
                    <p class="text-xs text-center font-weight-bold mb-0">{{$contact->email}}</p>
                  </td>
                  <td class="align-middle text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$contact->message}}</p>
                  </td>
                  <td class="align-start">
                    <a class="btn btn-link text-dark mb-0" href="{{ route('edit_create.contactedit',['contact' => $contact->name]) }}"><i class="fas fa-pencil-alt text-dark me-2" title="Edit"></i>Edit</a>
                  </td>
                  <td class="align-end">
                    <a class="btn btn-link text-danger text-gradient mb-0" href="{{ route('contact.delete',['contact' => $contact->name]) }}"><i class="far fa-trash-alt me-2" title="Delete"></i>delete</a>
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

  <div class="container" id="container-artikel">
    <div class="row">
      <div class="col-md-12 mb-lg-0 mb-4">
        <div class="card mt-4">
          <div class="card-header">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Deskripsi Penyakit</h6>
              </div>
              <div class="col-6 text-end">
                <a class="btn bg-gradient-dark mb-0" href="{{ route('edit_create.penyakitcreate') }}"><i class="fas fa-plus"></i> Tambah Deskripsi Penyakit</a>
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
                        <a class="btn btn-link text-dark mb-0" href="{{ route('edit_create.penyakitedit',['penyakit' => $penyakit->nama_penyakit]) }}"><i class="fas fa-pencil-alt text-dark me-2" title="Edit"></i></a>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-link text-danger text-gradient mb-0" href="{{ route('penyakit.delete',['penyakit' => $penyakit->nama_penyakit]) }}"><i class="far fa-trash-alt me-2"title="Delete"></i></a>
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
  <br>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
      $('#example').DataTable();
  });
</script>

@endsection

