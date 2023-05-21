@extends('layouts.doctormaster')

{{-- <style>
  .container-dokter{
    margin-top: 3cm;
  }
  footer{
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style> --}}
@section('content')
@section('title', 'Data Chat Dokter')
@section('Chat', 'active')
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
