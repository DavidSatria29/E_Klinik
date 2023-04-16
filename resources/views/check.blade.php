@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Pilih Gejala Yang Sesuai!
        </div>
        <div class="card-body">
            <form action="">
          <div class="row">
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1" name="panas">
                <label class="form-check-label" for="exampleCheck1">Panas</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck2" name="pilek">
                <label class="form-check-label" for="exampleCheck2">Pilek</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck3">
                <label class="form-check-label" for="exampleCheck3">Pusing</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck4" name="meriang">
                <label class="form-check-label" for="exampleCheck4">Meriang</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck5" name="sakitPerut">
                <label class="form-check-label" for="exampleCheck5">Sakit Perut</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck6" name="badanLemas">
                <label class="form-check-label" for="exampleCheck6">Badan Lemas</label>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck7" name="nyeri otot">
                <label class="form-check-label" for="exampleCheck7">Nyeri Otot</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck7" name="batuk">
                <label class="form-check-label" for="exampleCheck7">Batuk</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck8" name="gatalKulit">
                <label class="form-check-label" for="exampleCheck8">Gatal Kulit</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck8" nama="bersin">
                <label class="form-check-label" for="exampleCheck8">Bersin-Bersin</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck9" name="hidungTersumbat">
                <label class="form-check-label" for="exampleCheck9">Hidung tersumbat</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck10" name="mataBerair">
                <label class="form-check-label" for="exampleCheck10">Mata Berair</label>
              </div>
            </div>
          </div>
        </form>
        </div>
    </div>
</div>
@endsection