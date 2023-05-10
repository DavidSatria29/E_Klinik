@extends('layouts.master')
<style>
  .container-user{
    margin-top: 3cm;
  }
  footer{
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>
@section('content')
<div class="container container-user">
    <table class="table table-striped-columns">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Gejala</th>
          <th scope="col">Jawaban</th>
        </tr>
      </thead>
      <tbody>
        <form action="{{ route('CF.hasil') }}" method="POST">
            @csrf
            @foreach ($nama_gejala as $index => $nama)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $nama }}</td>
                <td>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example" 
                      name="{{ $kode_gejala[$index] }}">
                      <option selected value="0">tidak</option>
                      <option value="0.20">tidak tahu</option>
                      <option value="0.40">sedikit yakin</option>
                      <option value="0.60">cukup yakin</option>
                      <option value="0.80">yakin</option>
                      <option value="1">sangat yakin</option>
                  </select>
                </td>
              </tr>
            @endforeach                     
      </tbody>
    </table>
    <div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

</div>
@endsection