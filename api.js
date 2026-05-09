// js/api.js — API işlemleri ayrı dosyada tutulur

async function filmleriGetir() {
    const yukleniyor = document.getElementById('api-yukleniyor');
    const hataDiv    = document.getElementById('api-hata');
    const filmlerDiv = document.getElementById('api-filmler');

    try {
        // PHP proxy üzerinden çağrılıyor — key hiç burada görünmez
        const res = await fetch('api_proxy.php');

        if (!res.ok) throw new Error('Proxy yanıt vermedi');

        const filmler = await res.json();

        if (!filmler.length) throw new Error('Film verisi boş');

        yukleniyor.classList.add('d-none');

        filmler.forEach(film => {
            const poster = (film.poster && film.poster !== 'N/A')
                ? film.poster
                : 'https://via.placeholder.com/300x450?text=Poster+Yok';

            const kart = document.createElement('div');
            kart.className = 'col-md-3 col-6';
            kart.innerHTML = `
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-center">
                    <img src="${poster}" class="card-img-top" style="height:350px;object-fit:cover;" alt="${film.title}">
                    <div class="card-body p-2">
                        <h6 class="fw-bold mb-1">${film.title}</h6>
                        <p class="text-warning small mb-0">
                            <i class="bi bi-star-fill"></i> IMDb: ${film.imdbRating}/10
                            <span class="text-muted ms-1">(${film.year})</span>
                        </p>
                    </div>
                </div>`;
            filmlerDiv.appendChild(kart);
        });

    } catch (err) {
        yukleniyor.classList.add('d-none');
        hataDiv.classList.remove('d-none');
        console.error('Hata:', err);
    }
}

filmleriGetir();
