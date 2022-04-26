<?php
include_once './assets/php/handler/language.php';
include_once './assets/php/functions/data.php';
include_once './assets/php/functions/switchLang.php';
?>
<!DOCTYPE html>
<html lang="<?=$lang["lang_iso"]; ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?=$lang["title"] ?></title>
    <meta content="<?=$lang["meta_description"] ?>" name="description">
    <meta content="Discord, Discord Bot, Nevar, Open Source Bot, Bot, Nevar Bot" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.webp" rel="icon">
    <link href="assets/img/favicon.webp" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <span>Nevar</span>
        </a>
        <?php include_once './assets/php/templates/navbar.php'; ?>
    </div>
</header>
<!-- End Header -->
<!-- ======= Home Section ======= -->
<section id="home" class="home d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up"><?=$lang["home_title"] ?></h1>
                <h2 data-aos="fade-up" data-aos-delay="400"><?=$lang["home_subtitle"] ?></h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="./invite?r=false" class="btn-invite scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span><?=$lang["invite"] ?></span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="./support" class="btn-invite scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span><?=$lang["support"] ?></span>
                            <i class="bi bi-discord"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 home-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/favicon_transparent.webp" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Home -->
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-12 d-flex flex-column justify-content-center">
                    <div class="content">
                        <h3><?=$lang["about_title"] ?></h3>
                        <h2><?=$lang["about_subtitle"] ?></h2>
                        <p><?=$lang["about_description"] ?></p>
                        <div class="text-center text-lg-start">
                            <a href="/invite?r=false" class="btn-invite d-inline-flex align-items-center justify-content-center align-self-center">
                                <span><?=$lang["invite"] ?></span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-discord"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=get_json_data('servers', true) ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p><?=$lang["stats_servers"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people-fill" style="color: #161F6D;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=get_json_data('users', true) ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p><?=$lang["stats_users"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-chat-left-fill" style="color: #51a270;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=get_json_data('channels', true) ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p><?=$lang["stats_channels"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-heart-fill" style="color: #ff0000;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=get_json_data('votes', true) ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p><?=$lang["stats_votes"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counts Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["features_title"] ?></h2>
                <p><?=$lang["features_subtitle"] ?></p>
            </header>
            <div class="row">
                <div class="col-lg-12 mt-5 mt-lg-0 d-flex justify-content-center">
                    <div class="row align-self-center gy-4">
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["features_administration"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["features_fun"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["features_misc"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["features_minigames"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["features_moderation"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["features_music"] ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / row -->
            <!-- Feature Tabs -->
            <div class="row feture-tabs">
                <div class="col-lg-6">
                    <h3><?=$lang["featuresTab_title"] ?></h3>
                    <h4><?=$lang["featuresTab_description"] ?></h4>
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1"><?=$lang["features_administration"] ?></a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2"><?=$lang["features_moderation"] ?></a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3"><?=$lang["features_misc"] ?></a>
                        </li>
                    </ul>
                    <!-- End Tabs -->
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <p><?=$lang["f_admin_desc"] ?></p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_admin_1"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_admin_2"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_admin_3"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_admin_4"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_admin_5"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-three-dots"></i>
                                <h4><?=$lang["f_admin_6"] ?></h4>
                            </div>
                        </div>
                        <!-- End Tab 1 Content -->
                        <div class="tab-pane fade show" id="tab2">
                            <p><?=$lang["f_mod_desc"] ?></p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_mod_1"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_mod_2"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_mod_3"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_mod_4"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-three-dots"></i>
                                <h4><?=$lang["f_mod_5"] ?></h4>
                            </div>
                        </div>
                        <!-- End Tab 2 Content -->
                        <div class="tab-pane fade show" id="tab3">
                            <p><?=$lang["f_misc_desc"] ?></p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_misc_1"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_misc_2"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_misc_3"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["f_misc_4"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-three-dots"></i>
                                <h4><?=$lang["f_misc_5"] ?></h4>
                            </div>
                        </div>
                        <!-- End Tab 3 Content -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/features.webp" class="img-fluid" alt="">
                </div>
            </div>
            <!-- End Feature Tabs -->
        </div>
    </section>
    <!-- End Features Section -->
    <!-- ======= Advantages Section ======= -->
    <section id="advantages" class="advantages">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["advantages_title"] ?></h2>
                <p><?=$lang["advantages_subtitle"] ?></p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12">
                    <div class="advantage-box">
                        <i class="ri-fingerprint-line icon"></i>
                        <h3><?=$lang["advantage_1"] ?></h3>
                        <p><?=$lang["advantage1_desc"] ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="advantage-box orange">
                        <i class="ri-upload-2-fill icon"></i>
                        <h3><?=$lang["advantage_2"] ?></h3>
                        <p><?=$lang["advantage2_desc"] ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="advantage-box green">
                        <i class="ri-visa-fill icon"></i>
                        <h3><?=$lang["advantage_3"] ?></h3>
                        <p><?=$lang["advantage3_desc"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Advantages Section -->
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["faq_title"] ?></h2>
                <p><?=$lang["faq_subtitle"] ?></p>
            </header>
            <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    <?=$lang["faq_1"] ?>
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body" style="border-radius: 7px">
                                    <?=$lang["faq_1_answer"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    <?=$lang["faq_2"] ?>
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <?=$lang["faq_2_answer"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    <?=$lang["faq_3"] ?>
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <?=$lang["faq_3_answer"] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- F.A.Q List 2-->
                    <div class="accordion accordion-flush" id="faqlist2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                    <?=$lang["faq_4"] ?>
                                </button>
                            </h2>
                            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    <?=$lang["faq_4_answer"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                    <?=$lang["faq_5"] ?>
                                </button>
                            </h2>
                            <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    <?=$lang["faq_5_answer"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                    <?=$lang["faq_6"] ?>
                                </button>
                            </h2>
                            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    <?=$lang["faq_6_answer"] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End F.A.Q Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["team_title"] ?></h2>
                <p><?=$lang["team_subtitle"] ?></p>
            </header>
            <div class="row gy-4">
                <?php include_once './assets/php/functions/pushTeamMembers.php'; ?>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
    <!-- ======= Credits Section ======= -->
    <section id="clients" class="clients">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["credits_subtitle"] ?></h2>
                <p><?=$lang["credits_title"] ?></p>
            </header>
            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a href="https://prohosting24.de/a/tinte" rel="noopener" target="_blank"><img src="assets/img/clients/ph24.webp" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Prohosting24" alt=""></a></div>
                    <div class="swiper-slide"><a href="https://nodejs.org" rel="noopener" target="_blank"><img src="assets/img/clients/nodejs.webp" class="img-fluid" data-toggle="tooltip" data-placement="top" title="NodeJS" alt=""></a></div>
                    <div class="swiper-slide"><a href="https://github.com" rel="noopener" target="_blank"><img src="assets/img/clients/github.webp" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Github" alt=""></a></div>
                    <div class="swiper-slide"><a href="https://discord.com" rel="noopener" target="_blank"><img src="assets/img/clients/discord.webp" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Discord" alt=""></a></div>
                    <div class="swiper-slide"><a href="https://discord.js.org" rel="noopener" target="_blank"><img src="assets/img/clients/discordjs.webp" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Discord.js" alt=""></a></div>
                    <div class="swiper-slide"><a href="https://jetbrains.com/webstorm" rel="noopener" target="_blank"><img src="assets/img/clients/webstorm.webp" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Jetbrains Webstorm" alt=""></a></div>
                    <div class="swiper-slide"><a href="https://mongodb.com" rel="noopener" target="_blank"><img src="assets/img/clients/mongodb.webp" class="img-fluid" data-toggle="tooltip" data-placement="top" title="MongoDB" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Clients Section -->
</main>
<!-- End #main -->
<!-- ======= Footer ======= -->
<?php include_once './assets/php/templates/footer.php'; ?>
<!-- End Footer -->
<!-- Back to Top -->
<a href="/#home" class="nav-link scrollto back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/jquery-min-3.6.0.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
</body>
<link rel="stylesheet" href="/assets/css/cookies.css" />
<script src="/assets/js/cookies.js"></script>
<script>
    glowCookies.start('<?=$lang["lang_iso"]; ?>', {
        policyLink: '/go/legal/privacy',
        style: 1,
        bannerBackground: '#E6E2DD'

    });
</script>
</html>
