<?php

$tanimli_mail = "b251210051@ogr.sakarya.edu.tr"; 
$tanimli_sifre = "b251210051"; 

$girilen_mail = isset($_POST['email']) ? $_POST['email'] : '';
$girilen_sifre = isset($_POST['sifre']) ? $_POST['sifre'] : '';

if (empty($girilen_mail) || empty($girilen_sifre) || $girilen_mail !== $tanimli_mail || $girilen_sifre !== $tanimli_sifre) {
    
    header("Location: login.php?durum=hata");
    exit();

} else {
    $ogrenci_no = explode('@', $girilen_mail)[0];

    echo '
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Giriş Başarılı</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body { background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; height: 100vh; }
        </style>
    </head>
    <body>
        <div class="text-center bg-white p-5 rounded-4 shadow-lg border-top border-success border-5">
            <h1 class="text-success fw-bold mb-3">Hoşgeldiniz '.$ogrenci_no.'</h1>
            <p class="text-muted fs-5">Giriş işleminiz başarıyla gerçekleşti.</p>
            <p class="small text-secondary mt-4">Açılış sayfasına yönlendiriliyorsunuz...</p>
            <div class="spinner-border text-success mt-2" role="status"></div>
        </div>

        <script>
            setTimeout(function() {
                window.location.href = "index.html";
            }, 3000);
        </script>
    </body>
    </html>
    ';
}
?>