@extends('layouts.adminmaster')
@section('content')
@section('title', 'Data Artikel')
@section('Article', 'active')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>
  <div class="container" id="container-artikel">
    <div class="row">
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
                      <td>
                        <p class="text-xs font-weight-bold text-center mb-0">{{$article->id}}</p>
                      </td>
                      <td>
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

