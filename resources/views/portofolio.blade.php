<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Dafa</title>
    <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <section id="home">
        <img src="{{ asset('images/foto-profil.jpg') }}" alt="Foto Dafa" class="profile-pic">
        <h1>Hi, I'm Rifky Dhafa</h1>
        <p class="subtitle">Pelajar SMK Negeri 1 Bantul — Rekayasa Perangkat Lunak</p>
    </section>

    <section id="about">
        <h2><i class="fa-solid fa-user"></i> About Me</h2>
        <p>
            Hi, namaku Rifky Dhafa Putra Triwardhana, seorang pelajar di SMK Negeri 1 Bantul
            yang masuk di jurusan Rekayasa Perangkat Lunak. Sekarang aku memasuki tahun ke-2
            di jurusan RPL, dan aku sedang mempelajari cybersecurity, HTML, CSS, database,
            Laravel, dan masih banyak lagi.
        </p>
        <p>
            Aku juga memiliki hobi bermain musik yaitu bermain Drum, dan aku juga memiliki
            hobi olahraga di bidang basketball.
        </p>
        <p>
            Setelah lulus nanti rencana aku ingin melanjutkan pendidikan ke Universitas Telkom
            Bandung di prodi Teknik Informatika. Aku berharap di masa depan bisa menjadi
            seorang programmer yang handal dan dapat mengembangkan aplikasi yang bermanfaat
            bagi masyarakat luas.
        </p>
    </section>

    <section id="skills">
        <h2><i class="fa-solid fa-code"></i> Skill Baru Dipelajari</h2>
        <div class="badge-container">
            <span class="badge">HTML</span>
            <span class="badge">CSS</span>
            <span class="badge">Database</span>
            <span class="badge">Laravel</span>
            <span class="badge">Cybersecurity</span>
        </div>
    </section>

    <section id="hobi">
        <h2><i class="fa-solid fa-heart"></i> Hobi</h2>
        <div class="badge-container">
            <span class="badge badge-alt">🏀 Basketball</span>
            <span class="badge badge-alt">🥁 Drum</span>
        </div>
    </section>

    <section id="contact">
        <h2><i class="fa-solid fa-address-card"></i> Social Media / Contact</h2>
        <div class="social-container">
            <a href="https://instagram.com/Dhafarifky_" target="_blank" class="social-link">
                <i class="fa-brands fa-instagram"></i> @Dhafarifky_
            </a>
            <a href="https://facebook.com" target="_blank" class="social-link">
                <i class="fa-brands fa-facebook"></i> Rifky Dhafa Putra Triwardhana
            </a>
            <a href="mailto:rifkydhafa4@gmail.com" class="social-link">
                <i class="fa-solid fa-envelope"></i> rifkydhafa4@gmail.com
            </a>
            <a href="https://wa.me/6288958783960" target="_blank" class="social-link">
                <i class="fa-brands fa-whatsapp"></i> 0889-5878-3960
            </a>
        </div>
    </section>

</body>
</html>