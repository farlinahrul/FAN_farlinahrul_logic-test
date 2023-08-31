<?php


function countCouple(array $list): int
{
    $listCountNumber = array();
    $result          = 0;

    // Menghitung jumlah_total_tiap_angka yang muncul pada list
    foreach ($list as $number) {
        if (isset($listCountNumber[$number])) {
            $listCountNumber[$number]++;
            continue;
        }
        $listCountNumber[$number] = 1;
    }

    // Menghitung angka yang memiliki pasangan
    foreach ($listCountNumber as $total) {
        /**
         * Dibagi 2 kemudian dibulatkan kebawah karena jumlah_total_tiap_angka_yang_muncul
         * jika dibagi 2 akan bernilai 1 per pasangannya
         **/
        $result += floor($total / 2);
    }
    return $result;
}

