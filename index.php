<?php
include 'koneksi.php';

$profile = mysqli_query($conn, "SELECT * FROM profile LIMIT 1");
$data = mysqli_fetch_assoc($profile);

$skills = mysqli_query($conn, "SELECT * FROM skills");
$experiences = mysqli_query($conn, "SELECT * FROM experiences");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <?php echo $data['nama']; ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home" class="hero-section d-flex align-items-center text-white">
    <div class="overlay"></div>

    <div class="container text-center position-relative">
        <img src="assets/<?php echo $data['foto']; ?>" 
            class="profile-img mb-4" 
            alt="Foto Profil">

        <h1 class="fw-bold display-4 mb-3">
            Halo, Saya <br><?php echo $data['nama']; ?>
        </h1>

        <p class="lead mb-4">
            <?php echo $data['tagline']; ?>
        </p>
    </div>
</section>

<section id="about" class="about-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold text-white">About Me</h2>
            <p class="text-light opacity-75">
                <?php echo $data['deskripsi']; ?>
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="glass-card p-4 h-100">
                    <h4 class="mb-4 text-white">Skills</h4>

                    <?php while ($skill = mysqli_fetch_assoc($skills)) { ?>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between text-light">
                                <span><?php echo $skill['nama']; ?></span>
                                <span><?php echo $skill['level']; ?>%</span>
                            </div>

                            <div class="modern-progress">
                                <div class="modern-progress-bar"
                                    style="width: <?php echo $skill['level']; ?>%;">
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

            <div class="col-md-6">
                <div class="glass-card p-4 h-100">
                    <h4 class="mb-4 text-white">Experiences</h4>
                    <ul class="text-light">

                        <?php while ($exp = mysqli_fetch_assoc($experiences)) { ?>
                            <li class="mb-3">
                                <?php echo $exp['deskripsi']; ?>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="certificates" class="cert-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold text-white">Certificates</h2>
            <p class="text-light opacity-75">
                Beberapa pelatihan dan sertifikasi yang telah saya selesaikan.
            </p>
        </div>

        <div class="row g-4">

            <?php while ($cert = mysqli_fetch_assoc($certificates)) { ?>
                <div class="col-md-4">
                    <div class="modern-card h-100">

                        <div class="card-img-wrapper">
                            <img src="assets/<?php echo $cert['image']; ?>" alt="Certificate">
                            <div class="img-overlay"></div>
                        </div>

                        <div class="card-content p-4">
                            <h5 class="text-white mb-2">
                                <?php echo $cert['title']; ?>
                            </h5>

                            <p class="text-light opacity-75">
                                <?php echo $cert['description']; ?>
                            </p>

                            <a href="<?php echo $cert['link']; ?>" class="modern-btn mt-3">
                                Lihat Detail
                            </a>
                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
