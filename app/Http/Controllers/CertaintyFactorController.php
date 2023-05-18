<?php

namespace App\Http\Controllers;

use App\Models\Gejala_Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Type\NullType;

class CertaintyFactorController extends Controller
{
    public function index()
    {
        $gejala = Gejala_Penyakit::all();
        return view('check', ['gejala' => $gejala]);
    }
    public function cfUser(Request $request)
    {
        $pilihan = $request->except('_token');
        $kode_gejala = array_keys($pilihan);
        $nama_gejala = DB::table('gejala_penyakit')->whereIn('kode_gejala', $kode_gejala)->pluck('nama_gejala')->toArray();
        return view('cf_user', compact('kode_gejala', 'nama_gejala'));
    }
    public function hasilCF(Request $request)
    {
        function demamBerdarah($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }
            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function malaria($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }

            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function tipes($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }
            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function gastritis($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }
            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function diare($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }
            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function kolesterol($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }
            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function asamUrat($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }
            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function campakRubella($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }
            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function pneumonia($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }
            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }
        function bronkitis($cf_values, $gejala)
        {
            $hasil = null;
            $count = count($cf_values);
            $calculate = [];
            if ($count > 0) {
                $calculate[0] = $cf_values[0] * $gejala[0];
                for ($i = 1; $i < $count; ++$i) {
                    $result = $cf_values[$i] * $gejala[$i];
                    $calculate[$i] = $calculate[$i - 1] + $result * (1 - $calculate[$i - 1]);
                }
                $hasil = ($count == 1) ? $calculate[0] : (($count == 2) ? $calculate[1] : end($calculate));
            }
            if ($hasil !== null && $hasil >= 0.50) {
                $value = number_format($hasil * 100, 2) . "%";
                return $value;
            }
        }

        $test = $request->except('_token');
        $count = count($test);

        if ($count > 0) {
            $gejala = array_map('floatval', array_values($test));
            $kode_gejala = array_keys($test);

            $tableNames = ['demam_berdarah', 'malaria', 'tipes', 'gastritis', 'diare', 'kolesterol', 'asam_urat', 'campak_rubella', 'pneumonia', 'bronchitis'];
            $cfValues = [];

            foreach ($tableNames as $tableName) {
                $cfValues[$tableName] = DB::table($tableName)
                    ->whereIn('kode_gejala', $kode_gejala)
                    ->pluck('CF_pakar')
                    ->toArray();
            }

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
                "bronkitis" => diare($cfValues['bronchitis'], $gejala)
            ]);

            $filteredResults = $results->reject(function ($value) {
                return $value === null;
            });

            $keys = $filteredResults->keys()->all();
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
                'bronkitis' => 'P010'
            ];
            $matchingDiseases = array_intersect_key($diseases, array_flip($keys));

            $diseasesValue = array_values($matchingDiseases);
            $nama_penyakit = DB::table('penyakit')->whereIn('kode_penyakit', $diseasesValue)->pluck('nama_penyakit')->toArray();
            $hasil = $filteredResults->values()->all();

            $saran_pencegahan = DB::table('penyakit')
                ->whereIn('kode_penyakit', $diseasesValue)
                ->pluck('saran_pencegahan')
                ->map(function ($item) {
                    return explode(", ", $item);
                })
                ->toArray();

            $saran_obat = DB::table('penyakit')
                ->whereIn('kode_penyakit', $diseasesValue)
                ->pluck('saran_obat')
                ->map(function ($item) {
                    return explode(", ", $item);
                })
                ->toArray();
            return view('hasilCF', compact('hasil', 'nama_penyakit', 'saran_pencegahan', 'saran_obat'));
        }
    }
}
