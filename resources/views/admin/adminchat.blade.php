@extends('layouts.adminmaster')
@section('content')
@section('title', 'Data Chat Dokter')
@section('Chat', 'active')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>

<div class="container" id="container-artikel">
  <div class="row">
    <div class="col-md-12 mt-4">
      <div class="card">
        <div class="card-header">
          <h6 class="mb-0">Pertanyaan</h6>
        </div>
        <div class="card-body pt-4 p-3">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nama Penanya</th>
                  <th>Email Penanya</th>
                  <th>Pertanyaan Penanya</th>
                  <th>Jawaban</th>
                  <th>Dokter Yang Menjawab</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($chats as $chat)
                <tr>
                  <td>{{ $chat->name }}</td>
                  <td>{{ $chat->email }}</td>
                  <td style="word-break: break-word; ">{{ $chat->question }}</td>
                  <td style="word-break: break-word; ">{{ $chat->answer }}</td>
                  <td>{{ $chat->name_doctor }}</td>
                  <td class="text-end">
                    <a class="btn btn-link text-dark" href="{{ route('edit_create.chatedit',['chat' => $chat->name]) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                    <a class="btn btn-link text-danger text-gradient" href="{{ route('chat.delete',['chat' => $chat->name]) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
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

