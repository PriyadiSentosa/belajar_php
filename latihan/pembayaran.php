<?php
if(isset($_POST['Input'])) {
    $totalpembayaran = $_POST['totalpembayaran'];
    $pembayaran = $_POST['pembayaran'];


    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    }
    
    $kembalian= $pembayaran - $totalpembayaran;
    if ($totalpembayaran <= $pembayaran) {
        echo "Terimakasih Telah Merental Di Perentalan Kami,Kembaliannya Sebesar ";
        echo  rupiah ( $kembalian);  
    } else
      echo "Uang Anda Kurang Maaf Anda kami blacklist dari rental kami";
    
}
?>