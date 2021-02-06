<?php


$n = 7;

if ($n > 2) {
    //baris
    for ($i = 0; $i < $n; $i++) {

        for ($j = $n; $j > $i; $j--) {
            echo "&nbsp;";
        }
        //kolom
        for ($j = 0; $j < $n; $j++) {
            echo "&nbsp;";
            //kondisi pembentuk kota
            if (($i == 0) || ($i == $n - 1) || ($j == 0) || ($j == $n - 1)) {
                echo "*";
            } else {
                //kondisi bolong tengahnya
                if ($n % 2 == 1) { {
                        echo "&nbsp;&nbsp;";
                    }
                } else {
                    echo "&nbsp;&nbsp;";
                }
            }
        } //akhir kolom
        echo "</br>";
    } //akhir baris
    for ($i = 0; $i < $n; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;";
        }
        //kolom
        for ($j = 0; $j < $n; $j++) {
            echo "&nbsp;";
            //kondisi pembentuk kota
            if (($i == 0) || ($i == $n - 1) || ($j == 0) || ($j == $n - 1)) {
                echo "*";
            } else {
                //kondisi bolong tengahnya
                if ($n % 2 == 1) { {
                        echo "&nbsp;&nbsp;";
                    }
                } else {
                    echo "&nbsp;&nbsp;";
                }
            }
        } //akhir kolom
        echo "</br>";
    } //akhir baris
}
