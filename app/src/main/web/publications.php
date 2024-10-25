<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Özgür VURGUN" />
    <meta name="author" content="Özgür VURGUN" />
    <title>SMART LAB - Space Magnitude Association Research Team</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= $_ENV['BASE_URL'] ?>public/assets/img/smartlab_logo-2.webp" />
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
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top mb-5" id="mainNav">
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded active" href="<?= $_ENV['BASE_URL'] ?>publications">Publications</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= $_ENV['BASE_URL'] ?>contact">Contact</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= $_ENV['BASE_URL'] ?>news">News</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- About Section-->
    <section class="page-section mb-0 mt-5" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Publications</h2>
            <!-- Icon Divider-->
            <!-- <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div> -->
            <!-- About Section Content-->
            <?php foreach ($publicationsData as $data): ?>
                <div class="row research-wrapper">
                    <div class="col-lg-10 m-auto pb-2 pt-4">
                        <p>
                            <?= $data['content'] ?>

                            <?php if (!empty($data['url'])): ?>
                                <a target="_blank" href="<?= $data['url'] ?>">&nbsp;DOI: <?= $data['doi'] ?></a>
                            <?php endif; ?>

                            <?php if (!empty($data['submission-id'])): ?>
                                <strong>&nbsp;Submission ID: <?= $data['submission-id'] ?></strong>
                            <?php endif; ?>

                        </p>
                    </div>
                </div>
            <?php endforeach ?>

            <!-- About Section Button-->
            <!-- <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="#">
                    <i class="fas fa-download me-2"></i> Download
                </a>
            </div> -->
        </div>
    </section>
    <!-- Footer-->
    <?php require_once __DIR__ . '/templates/footer.php' ?>
    <!-- Portfolio Modals-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $_ENV['BASE_URL'] ?>public/js/Main.js"></script>
    <!-- Core theme JS-->
    <script src="<?= $_ENV['BASE_URL'] ?>public/js/template.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
</body>

</html>