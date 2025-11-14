<!-- home.php -->
<div class="home-container">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Selamat Datang di<br>RPL SMK Negeri 1 Sukawati</h1>
            <p class="hero-subtitle">Mencetak Generasi Digital yang Berkompeten dan Berkarakter</p>
            <div class="hero-buttons">
                <a href="index.php?page=siswa" class="btn btn-primary">Lihat Siswa</a>
                <a href="index.php?page=guru" class="btn btn-secondary">Data Guru</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="floating-card">
                <i class="icon">💻</i>
                <h3>Programming</h3>
                <p>Web & Mobile Development</p>
            </div>
            <div class="floating-card">
                <i class="icon">🎨</i>
                <h3>Design</h3>
                <p>UI/UX Design</p>
            </div>
            <div class="floating-card">
                <i class="icon">📱</i>
                <h3>Technology</h3>
                <p>Latest Tech Stack</p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number" data-count="350">0</div>
                <div class="stat-label">Siswa Aktif</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="25">0</div>
                <div class="stat-label">Guru Profesional</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="12">0</div>
                <div class="stat-label">Kelas</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="8">0</div>
                <div class="stat-label">Program Unggulan</div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="section-header">
            <h2>Keunggulan Jurusan RPL</h2>
            <p>Mengapa memilih Rekayasa Perangkat Lunak?</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3>Kurikulum Terupdate</h3>
                <p>Mengikuti perkembangan teknologi terbaru dalam industri software development</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💼</div>
                <h3>Siap Kerja</h3>
                <p>Lulusan siap bekerja di berbagai perusahaan IT dan startup</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3>Praktik Langsung</h3>
                <p>Belajar dengan project nyata dan tools profesional</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <h3>Berprestasi</h3>
                <p>Raihan berbagai penghargaan dalam kompetisi IT nasional</p>
            </div>
        </div>
    </section>

    <!-- Quick Access Section -->
    <section class="quick-access-section">
        <div class="section-header">
            <h2>Akses Cepat</h2>
            <p>Navigasi mudah ke berbagai layanan</p>
        </div>
        <div class="quick-access-grid">
            <a href="index.php?page=absensi" class="quick-access-card">
                <div class="access-icon">📊</div>
                <h3>Absensi</h3>
                <p>Lihat data kehadiran siswa</p>
            </a>
            <a href="index.php?page=pembayaran" class="quick-access-card">
                <div class="access-icon">💳</div>
                <h3>Pembayaran</h3>
                <p>Informasi pembayaran SPP</p>
            </a>
            <a href="index.php?page=jurnal" class="quick-access-card">
                <div class="access-icon">📝</div>
                <h3>Jurnal</h3>
                <p>Catatan kegiatan belajar</p>
            </a>
            <a href="index.php?page=mpk" class="quick-access-card">
                <div class="access-icon">👥</div>
                <h3>MPK</h3>
                <p>Organisasi siswa</p>
            </a>
        </div>
    </section>
</div>

<style>
/* Home Page Styles */
.home-container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Hero Section */
.hero-section {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    padding: 60px 0;
    min-height: 70vh;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 800;
    line-height: 1.2;
    color: #2c3e50;
    margin-bottom: 20px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-subtitle {
    font-size: 1.3rem;
    color: #7f8c8d;
    margin-bottom: 40px;
    line-height: 1.6;
}

.hero-buttons {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.btn {
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
    border: 2px solid transparent;
}

.btn-primary {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
}

.btn-secondary {
    background: transparent;
    color: #667eea;
    border-color: #667eea;
}

.btn-secondary:hover {
    background: #667eea;
    color: white;
    transform: translateY(-3px);
}

.hero-image {
    position: relative;
    height: 400px;
}

/* Floating Cards - Desktop */
.floating-card {
    position: absolute;
    background: white;
    padding: 25px;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;
    width: 200px;
}

.floating-card:hover {
    transform: translateY(-10px);
}

.floating-card:nth-child(1) {
    top: 0;
    left: 0;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
}

.floating-card:nth-child(2) {
    top: 50%;
    right: 0;
    transform: translateY(-50%);
}

.floating-card:nth-child(3) {
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}

.floating-card .icon {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.floating-card h3 {
    margin-bottom: 10px;
    font-size: 1.2rem;
}

.floating-card p {
    font-size: 0.9rem;
    opacity: 0.8;
}

/* ===== FLOATING CARD MOBILE FIX ===== */
@media (max-width: 768px) {
    .hero-section {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 40px;
        padding: 40px 0;
        min-height: auto;
    }
    
    .hero-image {
        position: relative;
        height: auto;
        min-height: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
        order: -1;
    }
    
    /* Reset floating card positions for mobile */
    .floating-card {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        right: auto !important;
        bottom: auto !important;
        transform: none !important;
        width: 100%;
        max-width: 280px;
        margin: 0 auto;
        padding: 20px;
    }
    
    .floating-card:hover {
        transform: translateY(-5px) !important;
    }
}

/* Stats Section */
.stats-section {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 80px 0;
    margin: 60px 0;
}

.stats-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    max-width: 1000px;
    margin: 0 auto;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 10px;
}

.stat-label {
    font-size: 1.1rem;
    opacity: 0.9;
}

/* Section Header */
.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 2.5rem;
    color: #2c3e50;
    margin-bottom: 15px;
}

.section-header p {
    font-size: 1.2rem;
    color: #7f8c8d;
}

/* Features Section */
.features-section {
    padding: 80px 0;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 40px;
}

.feature-card {
    background: white;
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    border: 1px solid #f1f2f6;
}

.feature-card:hover {
    transform: translateY(-10px);
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 25px;
}

.feature-card h3 {
    font-size: 1.5rem;
    color: #2c3e50;
    margin-bottom: 15px;
}

.feature-card p {
    color: #7f8c8d;
    line-height: 1.6;
}

/* Quick Access Section */
.quick-access-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.quick-access-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.quick-access-card {
    background: white;
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    text-decoration: none;
    color: inherit;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.quick-access-card:hover {
    transform: translateY(-5px);
    border-color: #667eea;
    box-shadow: 0 15px 35px rgba(102, 126, 234, 0.15);
}

.access-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.quick-access-card h3 {
    color: #2c3e50;
    margin-bottom: 15px;
    font-size: 1.3rem;
}

.quick-access-card p {
    color: #7f8c8d;
    line-height: 1.6;
}

/* Responsive Design untuk Home */
@media (max-width: 1024px) {
    .hero-title {
        font-size: 2.8rem;
    }
    
    .stats-container {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }
    
    .section-header h2 {
        font-size: 2.2rem;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.2rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .stats-container {
        grid-template-columns: 1fr;
    }
    
    .stat-number {
        font-size: 2.8rem;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .features-grid,
    .quick-access-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 1.8rem;
    }
    
    .hero-buttons {
        justify-content: center;
    }
    
    .btn {
        padding: 12px 25px;
        font-size: 0.9rem;
    }
    
    .section-header h2 {
        font-size: 1.6rem;
    }
    
    .stats-section {
        padding: 60px 0;
        margin: 40px 0;
    }
}
</style>

<script>
// Animation for counter
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;
    
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;
            
            const inc = target / speed;
            
            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        }
        
        updateCount();
    });
});
</script>