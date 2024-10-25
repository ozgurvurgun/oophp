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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded active" href="<?= $_ENV['BASE_URL'] ?>research">Research</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= $_ENV['BASE_URL'] ?>publications">Publications</a></li>
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
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Research</h2>
            <!-- Icon Divider-->
            <!-- <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div> -->
            <!-- About Section Content-->
            <?php foreach ($researchData as $data): ?>
                <div class="row research-wrapper">
                    <div class="col-lg-10 m-auto underline pb-5 pt-5">
                        <h3 style="font-size: 22px;" class="mb-4"><?= $data['header'] ?></h3>
                        <h4 style="font-size: 16px;" class="lead text-secondary mb-2"><span class="research-list-style">Current Status: </span><?= $data['current-status'] ?></h4>
                        <h4 style="font-size: 16px;" class="lead text-secondary mb-2"><span class="research-list-style">Investigators: </span><?= $data['investigators'] ?></h4>
                        <h4 style="font-size: 16px;" class="lead text-secondary mb-5"><span class="research-list-style">Concept: </span><?= $data['concept'] ?></h4>
                        <h4 style="font-size: 16px;" class="lead text-secondary mb-1"><span class="research-list-style">Contact: </span><a target="_blank" href="mailto:<?= $data['contact'] ?>"><?= $data['contact'] ?></a></h4>
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
    <?php foreach ($conceptData as $data): ?>
        <div class="portfolio-modal modal fade" id="portfolioModal<?= $data['id'] ?>" tabindex="-1" aria-labelledby="portfolioModal<?= $data['id'] ?>" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-4"><?= $data['header'] ?></h2>
                                    <!-- <h6 class="text-secondary text-uppercase mb-0"><i><?= $data['title'] ?></i></h6> -->
                                    <!-- Icon Divider-->
                                    <!-- <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                    </div> -->
                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <?= $data['content'] ?>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

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