@extends('layouts.master')
@section('title', 'Artikel')
@section('content')
<div class="container mt-3">
    <div class="card">
    <div class="card-header text-center">
        <h5>Algroritma Certainty factor</h5>
    </div>
    <div class="card-body">
        <div>
            <p>
                Algoritma <i>certainty factor</i> merupakan sebuah metode untuk pemecahan sebuah masalah ketidakpastian dari pemikiran 
                seorang dokter. <i>Certainty Factor (CF)</i> melakukan sebuah penalaran yang sama halnya seperti seorang pakar untuk 
                mendapatkan sebuah nilai kepercayaan. Proses perhitungan dari <i>Certainty Factor (CF)</i> dilakukan dengan menghitung 
                nilai perkalian dari nilai CF user dan CF Pakar yang kemudian dapat menghasilkan nilai CF Combine. Adapun Nilai dari 
                CF (Rule) diperoleh dari sebuah interprestasi “term” yang diberikan oleh pakar lalu diubah menjadi nilai CF tertentu. 
                Adapun nilai ketentuan dari certainty factor dijelaskan pada tabel berikut :
            </p>
        </div>
        <div class="table-responsive ">
            <table class="table table-bordered align-middle" style="width:70%">
            <thead>
                <tr>
                <th>NO</th>
                <th>Tingkat keputusan / keyakinan</th>
                <th>Nilai CF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1</td>
                <td>Tidak</td>
                <td>0</td>
                </tr>
                <tr>
                <td>2</td>
                <td>Tidak tahu</td>
                <td>0.2</td>
                </tr>
                <tr>
                <td>3</td>
                <td>Sedikit yakin</td>
                <td>0.4</td>
                </tr>
                <tr>
                <td>4</td>
                <td>Cukup yakin</td>
                <td>0.6</td>
                </tr>
                <tr>
                <td>5</td>
                <td>Yakin</td>
                <td>0.8</td>
                </tr>
                <tr>
                <td>6</td>
                <td>Sangat yakin</td>
                <td>1</td>
                </tr>
            </tbody>
            </table>
        </div>
        <div>
            <p>
                Pada algoritma certainty factor memiliki formula dalam melakukan proses perhitungannya. Adapun formula 
                didalam certainty factor dijelaskan pada persamaan sebagai berikut.
            </p>
            <p class="text-center">
                <i>CF[H,E] = MB(H,E) - MD(H,E)</i>
            </p>
            <p>
                Keterangan : <br>
                <ul>
                    <li>
                        CF = Certainty Factor (CF) atau Faktor Kepastian pada Hipotesis H yang dipengaruhi oleh Fakta E
                    </li>
                    <li>
                        MB = Measure of Belief (MB) atau tingkat keyakinan merupakan sebuah ukuran kenaikan dari suatu Kepercayaan Hipotesis H yang dipengaruhi oleh Fakta E
                    </li>
                    <li>
                        MD = Measure of Disbelief (MD) atau tingkat ketidakpercayaan hipotesis yang dipengaruhi oleh fakta E
                    </li>
                    <li>
                        E = Evidence (Fakta atau Peristiwa)
                    </li>
                    <li>
                        H = Hipotesis (Dugaan)
                    </li>
                </ul>
            </p>
            <p>
                Pada algoritma certainty factor juga memiliki sebuah kaidah kombinasi pada premis tertentu diantara sebagai berikut : 
            </p>
            <ol>
                <li>
                    <p>
                        CF dengan kondisi premis tunggal dijelaskan pada persamaan berikut <br>
                        <p class="text-center">
                            <i>CF[H,E] = CF[H] * CF[E]</i>
                        </p>
                    </p>
                </li>
                <li>
                    <p>
                        CF dengan sebuah kesimpulan yang sama atau serupa dijelaskan pada persamaan berikut ini : <br>
                    <p class="text-center">
                        <i>
                            CF<small>combine</small>CF[H,E]<small>1,2</small> = CF[H,E]<small>1</small> + CF[H,E]<small>2</small> * [1-CF[H,E]<small>1</small> ]
                        </i> 
                    </p>
                    <p class="text-center">
                        <i>
                            CF<small>combine</small>CF[H,E]<small>old 3</small> = CF[H,E]<small>old</small> + CF[H,E]<small>3</small> * [1-CF[H,E]<small>old</small> ]
                        </i>
                    </p>
                    </p>
                </li>
            </ol>
        </div>
        <div>
            <p>
                Untuk mendapatkan CF Pakar,  kami melakukan penelitian pada jurnal-jurnal yang relevan dengan penyakit yang tercantum di bagian pelayanan pada halaman utama. CF User didapatkan dari inputan user yang 
                berada di bagian Cek Penyakit. Setelah itu kami menghitung algoritma <i>Certainty Factor</i> yang diperoleh dengan menggunakan rumus yang tertera diatas.
            </p>
        </div>
    </div>
    </div>
</div>
@endsection