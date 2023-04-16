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
                  <th>Role</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
            @forelse ($users as $user)
              <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->nomor}}</td>
                  <td>{{$user->alamat}}</td>
                  <td>{{$user->role}}</td>
                  <td>
                    <div class="justify-content-between">
                      <a href="{{ route('user.delete',['user' => $user->name]) }}" class="btn btn-danger">Delete</a>
                      <a href="{{ route('edit_create.useredit',['user' => $user->name]) }}" class="btn btn-warning">Edit</a>
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
                @forelse ($chats as $chat)
                  <tr>
                      <td>{{$chat->name}}</td>
                      <td>{{$chat->question}}</td>
                      <td>{{$chat->answer}}</td>
                      <td>{{$chat->name_doctor}}</td>
                      <td>
                        <div class="justify-content-between">
                        <a href="{{ route('chat.delete',['chat' => $chat->name]) }}" class="btn btn-danger">Delete</a>
                        <a href="{{ route('edit_create.chatedit',['chat' => $chat->name]) }}" class="btn btn-warning">Update</a>
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
</section>

<section>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        Article
        <div class="d-flex justify-content-end align-items-center">
          <a href="{{ route('edit_create.articlecreate') }}" class="btn btn-primary">Tambah Artikel</a>
        </div>
      </div>
      <div class="card-body">
          <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Gambar</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                @forelse ($article as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->image_path}}</td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->content}}</td>
                    <td>
                      <div class="justify-content-between">
                      <a href="{{ route('article.delete',['article' => $article->id]) }}" class="btn btn-danger">Delete</a>
                      <a href="{{ route('edit_create.articleedit',['article' => $article->id]) }}" class="btn btn-warning">Update</a>
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
</section>

<section>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        Hubungi
      </div>
      <div class="card-body">
          <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>name</th>
                      <th>email</th>
                      <th>message</th>
                      <th>aksi</th>

                  </tr>
              </thead>
              <tbody>
                @forelse ($contact as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->message}}</td>
                    <td>
                      <div class="justify-content-between">
                      <a href="{{ route('contact.delete',['contact' => $contact->name]) }}" class="btn btn-danger">Delete</a>
                      <a href="{{ route('edit_create.contactedit',['contact' => $contact->name]) }}" class="btn btn-warning">Update</a>
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

