<?php
echo "Welcome To My Game \n";
while (true){
    echo "===== Game Tebak Angka ===== \n";
echo "Tebak sebuah angka antara 1 dan 9 \n";
$computer = rand(1,9);
echo "Masukkan tebakanmu : ";
$player = trim(fgets(STDIN)); 
// STDIN = Membaca karakter yang di input
//fgets = Mengambil input
//trim = Menghapus ruang kosong
if($player == $computer){
    echo "Menang\n";
    echo "Angka komputer adalah : $computer \n";
    exit;
}
else{
    echo "Kalah\n";
    echo "Angka komputer adalah : $computer \n";
}
}
?>
