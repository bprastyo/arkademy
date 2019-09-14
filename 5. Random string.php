<?php
function random($ulang){
    $karakter ='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $string = ''; 

        for ($i=0;$i<32;$i++){
            $hasil = rand(0, strlen($karakter)-1);
            $string .=$karakter{$hasil};
        }
        return $string;
}

function ulang($jumlah){
    for ($i=0;$i<$jumlah;$i++){
            echo random(3)."<br>";
        }
}
echo ulang(4);