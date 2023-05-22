@extends('layouts.master')
@section('title', 'Nilai gejala')
@section('cek', 'active')
<style>
  .container-user{
    margin-top: 1cm;
    padding: 0;
    min-height: 70vh;
  }
</style>
@section('content')
@section('title', 'Cek Kesehatan')
@section('cek', 'active')
<div class="container container-user">
  <div class="table-responsive">
    <table class="table table-striped bg-light">
      <thead>
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Nama Gejala</th>
          <th scope="col">Tingkat Keyakinan</th>
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
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
</div>

@endsection