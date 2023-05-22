<?php

namespace App\Http\Controllers;

use App\Models\Gejala_Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Type\NullType;

// perhitungan algoritma certainty factor untuk mendiagnosis berbagai macam penyakit
class CertaintyFactorController extends Controller
{
    public function index()
    {
        // Mengambil semua record Gejala_Penyakit dari database
        $gejala = Gejala_Penyakit::all();

        // Mengembalikan tampilan check.blade.php beserta variabel $gejala
        return view('cek_kesehatan.check', ['gejala' => $gejala]);
    }

    public function cfUser(Request $request)
    {
        // Mengambil semua pilihan pengguna kecuali token CSRF
        $pilihan = $request->except('_token');

        // Mengekstrak hanya kode gejala_penyakit yang dipilih
        $kode_gejala = array_keys($pilihan);

        // Mengambil nama gejala_penyakit terpilih dengan mencocokkan kode pada kode_gejala
        $nama_gejala = DB::table('gejala_penyakit')->whereIn('kode_gejala', $kode_gejala)->pluck('nama_gejala')->toArray();

        // Mengembalikan tampilan cf_user.blade.php beserta data yang diekstrak
        return view('cek_kesehatan.cf_user', compact('kode_gejala', 'nama_gejala'));
    }

    public function hasilCF(Request $request)
    {
        function demamBerdarah($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }

        function malaria($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function tipes($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function gastritis($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function diare($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function kolesterol($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function asamUrat($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function campakRubella($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function pneumonia($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function bronkitis($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function tuberkolosis($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function fluBurung($cf_values, $gejala)
        {
            // Inisiasi variabel dalam bentuk null
            $hasil = null;

            // Menghitung jumlah elemen pada array $cf_values
            $count = count($cf_values);

            // Deklarasikan array kosong untuk perhitungan
            $calculate = [];

            // Jika jumlah elemen pada array $cf_value lebih dari 0, maka hitung nilai CF
            if ($count > 0) {

                // Hitung nilai CF untuk gejala pertama
                $calculate[0] = $cf_values[0] * $gejala[0];

                // Loooping sebanyak (jumlah elemen - 1), dan kalkulasikan nilai CF secara berurutan dan simpan dalam array $calculate
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }

                // Jika jumlah elemen pada array $cf_values sesuai, ambil dan simpan nilai tersebut dalam variabel hasil
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            //Jika nilai $hasil tidak sama dengan NULL dan $hasil lebih besar atau sama dengan 0.30, maka format angka dan persentase dan kembalikan nilai tersebut
            if ($hasil !== null && $hasil >= 0.30) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }

        $test = $request->except('_token');
        $count = count($test);

        // Jika jumlah elemen dari request pengguna lebih dari 0 ambil nilai float dari setiap gejala dan simpan dalam array baru bernama gejala
        //Lalu simpan kunci gejala pada array $kode_gejala
        if ($count > 0) {
            // Memetakan setiap elemen pada array $test menjadi float dan menyimpannya dalam array baru bernama $gejala
            $gejala = array_map('floatval', array_values($test));

            // Menyimpan semua key dari array $test pada array baru bernama $kode_gejala
            $kode_gejala = array_keys($test);

            // Mendeklarasikan array yang menyimpan tabel nama penyakit
            $tableNames = ['demam_berdarah', 'malaria', 'tipes', 'gastritis', 'diare', 'kolesterol', 'asam_urat', 'campak_rubella', 'pneumonia', 'bronchitis', 'tuberkolosis', 'flu_burung'];
            $cfValues = [];

            // Iterasi ke semua tabel penyakit untuk mengambil nilai CF_pakar dari masing-masing penyakit berdasarkan kunci kode gejala
            foreach ($tableNames as $tableName) {
                $cfValues[$tableName] = DB::table($tableName)
                    ->whereIn('kode_gejala', $kode_gejala)
                    ->pluck('CF_pakar')
                    ->toArray();
            }

            // Hasil diagnosis diperoleh dengan memanggil fungsi-fungsi di bawah yang menerima parameter nilai CF dari setiap jenis penyakit dan gejala
            $results = collect([
                "demamBerdarah" => demamBerdarah($cfValues['demam_berdarah'], $gejala),
                "malaria" => malaria($cfValues['malaria'], $gejala),
                "tipes" => tipes($cfValues['tipes'], $gejala),
                "gastritis" => gastritis($cfValues['gastritis'], $gejala),
                "diare" => diare($cfValues['diare'], $gejala),
                "kolesterol" => demamBerdarah($cfValues['kolesterol'], $gejala),
                "asamUrat" => malaria($cfValues['asam_urat'], $gejala),
                "campakRubella" => tipes($cfValues['campak_rubella'], $gejala),
                "pneumonia" => gastritis($cfValues['pneumonia'], $gejala),
                "bronkitis" => diare($cfValues['bronchitis'], $gejala),
                "tuberkolosis" => diare($cfValues['tuberkolosis'], $gejala),
                "fluBurung" => diare($cfValues['flu_burung'], $gejala)
            ]);

            // Filter hasil diagnose sehingga menghasilkan nilai yang tidak null
            $filteredResults = $results->reject(function ($value) {
                return $value === null;
            });

            // Ambil semua keys dari hasil filter dan masukkan ke dalam array yang bernama $keys
            $keys = $filteredResults->keys()->all();

            // Menyimpan kode-kode penyakit dalam variabel $diseases. Kode penyakit diasosiasikan dengan nama penyakit. 
            $diseases = [
                'demamBerdarah' => 'P001',
                'malaria' => 'P002',
                'tipes' => 'P003',
                'diare' => 'P004',
                'gastritis' => 'P005',
                'kolesterol' => 'P006',
                'asamUrat' => 'P007',
                'campakRubella' => 'P008',
                'pneumonia' => 'P009',
                'bronkitis' => 'P010',
                'tuberkolosis' => 'P011',
                'fluBurung' => 'P012'
            ];

            // Mencocokkan kode-kode penyakit yang didapatkan dari $keys dengan daftar penyakit untuk memperoleh nama penyakit
            $matchingDiseases = array_intersect_key($diseases, array_flip($keys));

            // Mengambil nilai-nilai dari array $matchingDiseases dan memasukkannya ke dalam variabel $diseaseValue
            $diseasesValue = array_values($matchingDiseases);

            // Mengambil nama-nama penyakit dari tabel 'penyakit' berdasarkan kode penyakit $diseasesValue
            $nama_penyakit = DB::table('penyakit')->whereIn('kode_penyakit', $diseasesValue)->pluck('nama_penyakit')->toArray();

            // Mengambil hasil diagnosis dari variabel $filteredResults
            $hasil = $filteredResults->values()->all();

            // Mengambil saran pencegahan dari tabel 'penyakit' yang sesuai dengan kode penyakit $diseasesValue
            $saran_pencegahan = DB::table('penyakit')
                ->whereIn('kode_penyakit', $diseasesValue)
                ->pluck('saran_pencegahan')
                ->map(function ($item) {
                    return explode(", ", $item);
                })
                ->toArray();

            // Mengambil saran obat dari tabel 'penyakit' yang sesuai dengan kode penyakit $diseasesValue
            $saran_obat = DB::table('penyakit')
                ->whereIn('kode_penyakit', $diseasesValue)
                ->pluck('saran_obat')
                ->map(function ($item) {
                    return explode(", ", $item);
                })
                ->toArray();

            // Mengembalikan view hasilCF.blade.php dengan membawa variabel hasil diagnosis, nama-nama penyakit, saran pencegahan, dan saran obat
            return view('cek_kesehatan.hasilCF', compact('hasil', 'nama_penyakit', 'saran_pencegahan', 'saran_obat'));
        }
    }
}
