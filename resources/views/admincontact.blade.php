@extends('layouts.adminmaster')
@section('content')
@section('title', 'Data Hubungi Kami')
@section('Contact', 'active')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>

  <div class="container" id="container-artikel">
    <div class="row">
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

