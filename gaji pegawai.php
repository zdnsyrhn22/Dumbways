<?php

function gajiPegawai($gaji, $kelamin, $anak)
{
    if ($kelamin == 'pria' || 'laki-laki') {
        $tunjangan_istri = 200000;
    } else {
        $tunjangan_istri = 0;
    }

    $golongan = [
        'golongan1' => [
            'gaji_pokok' => 1500000,
            'tunjangan' => 200000,
            'tunjangan_istri' => $tunjangan_istri,
            'tunjangan_anak' => 100000 * $anak
        ],
        'golongan2' => [
            'gaji_pokok' => 2000000,
            'tunjangan' => 400000,
            'tunjangan_istri' => $tunjangan_istri,
            'tunjangan_anak' => 100000 * $anak
        ],
        'golongan3' => [
            'gaji_pokok' => 3000000,
            'tunjangan' => 600000,
            'tunjangan_istri' => $tunjangan_istri,
            'tunjangan_anak' => 100000 * $anak
        ],
        'golongan4' => [
            'gaji_pokok' => 4000000,
            'tunjangan' => 1000000,
            'tunjangan_istri' => $tunjangan_istri,
            'tunjangan_anak' => 100000 * $anak
        ],
    ];

    if ($gaji == 1500000) {
        $golonganNum = "golongan1";
    } else if ($gaji == 2000000) {
        $golonganNum = "golongan2";
    } else if ($gaji == 3000000) {
        $golonganNum = "golongan3";
    } else if ($gaji == 4000000) {
        $golonganNum = "golongan4";
    }

    if ($gaji == $golongan["$golonganNum"]['gaji_pokok']) {
        echo "Golongan : ", $golonganNum, "</br>";
        echo "Jenis Kelamin : ", $kelamin, "</br>";
        echo "Jumlah Anak", $anak, "</br>";
        echo "================================================================", "</br>";
        echo "Gaji Pokok : ", $golongan["$golonganNum"]['gaji_pokok'], "</br>";
        echo "Tunjangan : ", $golongan["$golonganNum"]['tunjangan'], "</br>";
        echo "Tunjangan Istri : ", $golongan["$golonganNum"]['tunjangan_istri'], "</br>";
        echo "Tunjangan Anak : ", $golongan["$golonganNum"]['tunjangan_anak'], "</br>";

        echo "Total : ", $total =  $golongan["$golonganNum"]['gaji_pokok'] +  $golongan["$golonganNum"]['tunjangan'] +  $golongan["$golonganNum"]['tunjangan_istri'] +  $golongan["$golonganNum"]['tunjangan_anak'], "</br>";
        echo "Pajak 10% : ", $pajak = $total * 10 / 100, "</br>";
        echo "Gaji Sementara : ", $gajiSementara = $total - $pajak, "</br>";
        echo "================================================================", "</br>";
        echo "Potongan Pensiun : ", $pensiun = 200000, "</br>";
        echo "Potongan BPJS : ", $bpjs = 150000, "</br>";
        echo "Gaji Bersih : ", $gajiSementara - $pensiun - $bpjs, "</br>";
    }
}

echo gajiPegawai(4000000, 'laki-laki', 1);
