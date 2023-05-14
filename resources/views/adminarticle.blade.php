@extends('layouts.adminmaster')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>

  <div class="col-md-7 mt-4">
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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
      $('#example').DataTable();
  });
</script>

@endsection

