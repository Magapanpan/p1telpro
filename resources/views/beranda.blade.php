@extends('welcome')

@section('title', 'Halaman Beranda')

@section('content')
<div class="container py-5">
    <!-- Carousel for Featured Content -->
    <div id="carouselExample" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/41Cegk4gVzeBjP2ZMduBi2?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/1jT4UggOhTuGG92UOoHLOA?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/4nwmNtP1E7IWvv8mDHPD0j?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Featured Services Section -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="mb-4">Layanan Unggulan</h3>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <i class="bi bi-gear-fill card-img-top text-center p-3" style="font-size: 3rem; color: #007bff;"></i>
                <div class="card-body">
                    <h5 class="card-title">Layanan Teknologi</h5>
                    <p class="card-text">Solusi teknologi inovatif untuk bisnis dan kehidupan.</p>
                    <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <i class="bi bi-person-circle card-img-top text-center p-3" style="font-size: 3rem; color: #28a745;"></i>
                <div class="card-body">
                    <h5 class="card-title">Konsultasi Profesional</h5>
                    <p class="card-text">Bantuan ahli dalam berbagai sektor industri.</p>
                    <a href="#" class="btn btn-primary">Hubungi Kami</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <i class="bi bi-palette-fill card-img-top text-center p-3" style="font-size: 3rem; color: #fd7e14;"></i>
                <div class="card-body">
                    <h5 class="card-title">Desain Kreatif</h5>
                    <p class="card-text">Buat branding yang menonjol dengan desain kreatif kami.</p>
                    <a href="#" class="btn btn-primary">Tinjau Portofolio</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <i class="bi bi-card-checklist card-img-top text-center p-3" style="font-size: 3rem; color: #6610f2;"></i>
                <div class="card-body">
                    <h5 class="card-title">Penyusunan Rencana</h5>
                    <p class="card-text">Rencanakan proyek Anda dengan lebih terstruktur dan efisien.</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Articles Section -->
    <div class="row">
        <div class="col-12">
            <h3 class="mb-4">Artikel Terbaru</h3>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200/FF5733/FFFFFF?text=Artikel+1" class="card-img-top" alt="Artikel 1">
                <div class="card-body">
                    <h5 class="card-title">Teknologi Terkini</h5>
                    <p class="card-text">Ikuti perkembangan teknologi terbaru dan tips praktis.</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200/33B5FF/FFFFFF?text=Artikel+2" class="card-img-top" alt="Artikel 2">
                <div class="card-body">
                    <h5 class="card-title">Tren Industri</h5>
                    <p class="card-text">Dapatkan informasi terbaru mengenai tren di berbagai sektor.</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200/FF57A5/FFFFFF?text=Artikel+3" class="card-img-top" alt="Artikel 3">
                <div class="card-body">
                    <h5 class="card-title">Strategi Bisnis</h5>
                    <p class="card-text">Pelajari strategi terbaik dalam menjalankan bisnis.</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Weather Section with Animation -->
    <div class="row mt-5">
        <div class="col-12">
            <h3>Cuaca Hari Ini</h3>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <h4 id="weather-city" class="weather-item">Loading...</h4>
                <p id="weather-description" class="weather-item">Loading...</p>
                <h5 id="weather-temp" class="weather-item">Loading...</h5>
            </div>
        </div>
    </div>

    <!-- Pie Chart Section for Popular Services -->
    <div class="row mt-5">
        <div class="col-12">
            <h3>Populasi Layanan Kami</h3>
            <canvas id="serviceChart" width="400" height="400"></canvas>
        </div>
    </div>

    <!-- Interactive Table Section -->
    <div class="row mt-5">
        <div class="col-12">
            <h3>Tabel Layanan Terbaru</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Layanan</th>
                        <th>Status</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Konsultasi Teknologi</td>
                        <td><span class="badge bg-success">Tersedia</span></td>
                        <td>$500</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Desain Kreatif</td>
                        <td><span class="badge bg-warning">Proses</span></td>
                        <td>$300</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Penyusunan Rencana</td>
                        <td><span class="badge bg-danger">Habis</span></td>
                        <td>$200</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // Weather API integration
    async function fetchWeather() {
        const city = 'Jakarta';
        const apiKey = 'YOUR_API_KEY';
        const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

        try {
            const response = await fetch(apiUrl);
            const weatherData = await response.json();
            document.getElementById('weather-city').innerText = weatherData.name;
            document.getElementById('weather-description').innerText = weatherData.weather[0].description;
            document.getElementById('weather-temp').innerText = `${weatherData.main.temp}°C`;
        } catch (error) {
            console.error('Error fetching weather:', error);
        }
    }

    // Fetch weather data when page loads
    window.onload = fetchWeather;

    // Service Pie Chart
    const ctx = document.getElementById('serviceChart').getContext('2d');
    const serviceChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Teknologi', 'Konsultasi', 'Desain', 'Rencana'],
            datasets: [{
                label: 'Layanan Populer',
                data: [35, 25, 20, 20],
                backgroundColor: ['#007bff', '#28a745', '#fd7e14', '#6610f2'],
                borderColor: ['#ffffff', '#ffffff', '#ffffff', '#ffffff'],
                borderWidth: 2
            }]
        }
    });
</script>

@endsection
