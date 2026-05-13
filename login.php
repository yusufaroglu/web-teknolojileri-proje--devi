<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yusuf Aroğlu - Proje</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- Menü başlangıcı -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="hakkimda.html" style="color: #3b82f6;">Yusuf Aroğlu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item"><a class="nav-link" href="hakkimda.html">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.html">Özgeçmişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasimiz.html">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link text-primary fw-bold" href="login.html">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- İçerik Alanı -->
    <div class="icerik-alani">
        <div class="icerik-karti">
           
            <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            
            <div id="hataKutusu" class="alert alert-danger text-center fw-bold shadow-sm rounded-4 d-none mb-4" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i> Bilgiler hatalı veya alanlar boş!
            </div>

            <div class="saydam-kart p-5 shadow-lg rounded-4 border-0 bg-white">
                <div class="text-center mb-4">
                    <h2 class="fw-bold" style="color: #3b82f6;">Öğrenci Girişi</h2>
                    <p class="text-muted small">Lütfen Sakarya Üniversitesi öğrenci bilgilerinizle giriş yapın.</p>
                </div>

                <form action="loginislem.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold text-dark">Kullanıcı Adı (Mail)</label>
                        <input type="text" name="email" class="form-control rounded-pill px-3 py-2" placeholder="b251210051@ogr.sakarya.edu.tr">
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold text-dark">Şifre (Öğrenci No)</label>
                        <input type="password" name="sifre" class="form-control rounded-pill px-3 py-2" placeholder="b251210051">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold shadow-sm">
                        Giriş Yap <i class="bi bi-box-arrow-in-right ms-1"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    if(urlParams.get('durum') === 'hata') {
        document.getElementById('hataKutusu').classList.remove('d-none');
    }
</script>

        </div>
    </div>

    
    <footer>
        <div class="container text-center mt-5 mb-3">
            <p class="mb-0 text-muted">&copy; 2026 Web Teknolojileri Projesi</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>