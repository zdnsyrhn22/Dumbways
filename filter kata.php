<?PHP

$filter = ["apa", "saya", "anda", "kamu", "halo"];
$kalimat = [
    "apa yang anda lakukan?",
    "selamat pagi",
    "kamu ternyata cantik juga ya",
    "yukk belajar javascript",
    "kamu itu adalah kebanggaan saya",
    "music hari ini yang akan di putar oleh gabut FM apa ya?"
];

$search = ['a', 'u', 'e', 'o'];

//memfilter kata "apa", "saya", "anda", "kamu", "halo" !
foreach ($kalimat as $k) {
    echo "</br>", $k, "</br>";
    foreach ($filter as $f) {
        echo ("Jumlah '$f' dalam string : " . substr_count($k, $f) . "</br>");
    }
}

//miribih hirif vicil jidi 'i' simiih !
echo "</br>";
foreach ($kalimat as $k) {
    $vocal = str_replace($search, 'i', $k);
    echo $k . " = " . $vocal . "</br>";
}
