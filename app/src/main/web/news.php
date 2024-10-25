<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Özgür VURGUN" />
    <meta name="author" content="Özgür VURGUN" />
    <title>Team Members - SMART LAB</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?=$_ENV['BASE_URL']?>public/assets/img/smartlab_logo-2.webp" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= $_ENV['BASE_URL'] ?>public/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top mb-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                SMART LAB
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= $_ENV['BASE_URL'] ?>">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= $_ENV['BASE_URL'] ?>team">The Team</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= $_ENV['BASE_URL'] ?>research">Research</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= $_ENV['BASE_URL'] ?>publications">Publications</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= $_ENV['BASE_URL'] ?>contact">Contact</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded active" href="<?= $_ENV['BASE_URL'] ?>news">News</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->

    <!-- Portfolio Section-->
    <section class="page-section portfolio mt-5" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">please wait for a moment</h2>
            <!-- Icon Divider-->
            <!-- <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div> -->
            <br />
            <br />
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <?php foreach ($teamData as $data): ?>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto ratio ratio-4x3 border border-secondary" data-bs-toggle="modal" data-bs-target="#portfolioModal<?= $data['id'] ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center" style="z-index: 1;">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img loading="lazy" class="img-fluid" src="<?= $_ENV['BASE_URL'] ?>public/assets/img/<?= $data['profile_image'] ?>" alt="..." style="object-fit: contain;" />
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php require_once __DIR__ . '/templates/footer.php' ?>
    <!-- Portfolio Modals-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= $_ENV['BASE_URL'] ?>public/js/template.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
</body>

</html>