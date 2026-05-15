<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonucu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg sticky-top bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html" style="color: #3b82f6;">Yusuf Aroğlu</a>
            <a href="iletisim.html" class="btn btn-outline-primary btn-sm">Geri Dön</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-header bg-success text-white text-center rounded-top-4 py-3">
                        <h4 class="mb-0 fw-bold">Gelen İletişim Verileri</h4>
                    </div>
                    <div class="card-body p-4">
                        
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            
                            $ad = htmlspecialchars($_POST['ad'] ?? 'Boş Bırakıldı');
                            $no = htmlspecialchars($_POST['no'] ?? 'Boş Bırakıldı');
                            $mail = htmlspecialchars($_POST['mail'] ?? 'Boş Bırakıldı');
                            $tel = htmlspecialchars($_POST['tel'] ?? 'Belirtilmedi');
                            $mesaj = htmlspecialchars($_POST['mesaj'] ?? 'Boş Bırakıldı');

                            echo '
                            <table class="table table-bordered table-striped mt-3">
                                <tbody>
                                    <tr>
                                        <th style="width: 30%;" class="bg-light text-primary">Ad Soyad</th>
                                        <td>'.$ad.'</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light text-primary">Öğrenci No</th>
                                        <td>'.$no.'</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light text-primary">E-Posta Adresi</th>
                                        <td>'.$mail.'</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light text-primary">Telefon Numarası</th>
                                        <td>'.$tel.'</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light text-primary">Gönderilen Mesaj</th>
                                        <td>'.nl2br($mesaj).'</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="alert alert-success mt-4 text-center">
                                <strong>Başarılı!</strong> Sunucu tarafı (PHP) veri alma işlemi kusursuz çalışıyor.
                            </div>
                            ';
                        } else {
                            echo '<div class="alert alert-danger text-center">Sayfaya doğrudan erişim yasaktır. Lütfen formu kullanarak gelin.</div>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>