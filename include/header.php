<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Modern Header with Bootstrap -->
<header id="header" class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://elitecorporatesolutions.com/images/logo/logo.png" alt="Elite Corporate Solutions" height="40">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="index.php"><i class="fas fa-home me-1"></i> Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3" href="about.php"><i class="fas fa-building me-1"></i> About</a>
                    </li>

                    <!-- Services Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="servicesDropdown" role="button">
                            <i class="fas fa-briefcase me-1"></i> Services <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" aria-labelledby="servicesDropdown">
                            <li>
                                <div class="dropdown-header d-flex align-items-center">
                                    <i class="fas fa-user-tie text-primary me-2"></i>
                                    <h6 class="mb-0">Executive Solutions</h6>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="full-scale-search.php"><i class="fas fa-search me-2 text-muted"></i> Full-Scale Search</a></li>
                            <li><a class="dropdown-item" href="confidential-executive-search.php"><i class="fas fa-lock me-2 text-muted"></i> Confidential Search</a></li>
                            <li><a class="dropdown-item" href="transition-services.php"><i class="fas fa-exchange-alt me-2 text-muted"></i> Transition Services</a></li>
                            <li><a class="dropdown-item" href="board-advisory.php"><i class="fas fa-chalkboard-teacher me-2 text-muted"></i> Board Advisory</a></li>
                            <li><a class="dropdown-item" href="diversity-search.php"><i class="fas fa-users me-2 text-muted"></i> Diversity Search</a></li>
                            <li><a class="dropdown-item" href="interim-solutions.php"><i class="fas fa-clock me-2 text-muted"></i> Interim Solutions</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3" href="process.php"><i class="fas fa-project-diagram me-1"></i> Process</a>
                    </li>

                    <!-- Industries Dropdown -->
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="industriesDropdown" role="button">
                            <i class="fas fa-industry me-1"></i> Industries <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu mega-menu dropdown-menu-end shadow-sm border-0 w-100 p-3" aria-labelledby="industriesDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-globe text-primary me-2"></i>
                                            <h5 class="mb-0">Our Industries</h5>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <a class="dropdown-item mb-2" href="aerospace-defence.php"><i class="fas fa-fighter-jet me-2 text-muted"></i> Aerospace & Defence</a>
                                        <a class="dropdown-item mb-2" href="automobile-components.php"><i class="fas fa-car me-2 text-muted"></i> Automobile & Auto Components</a>
                                        <a class="dropdown-item mb-2" href="building-materials.php"><i class="fas fa-hammer me-2 text-muted"></i> Building Materials</a>
                                        <a class="dropdown-item" href="consumer.php"><i class="fas fa-shopping-cart me-2 text-muted"></i> Consumer</a>
                                    </div>

                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <a class="dropdown-item mb-2" href="development.php"><i class="fas fa-chart-line me-2 text-muted"></i> Development</a>
                                        <a class="dropdown-item mb-2" href="education.php"><i class="fas fa-graduation-cap me-2 text-muted"></i> Education</a>
                                        <a class="dropdown-item mb-2" href="financial-services.php"><i class="fas fa-piggy-bank me-2 text-muted"></i> Financial Services</a>
                                        <a class="dropdown-item" href="industrial.php"><i class="fas fa-cogs me-2 text-muted"></i> Industrial</a>
                                    </div>

                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <a class="dropdown-item mb-2" href="infrastructure.php"><i class="fas fa-road me-2 text-muted"></i> Infrastructure</a>
                                        <a class="dropdown-item mb-2" href="logistics.php"><i class="fas fa-truck me-2 text-muted"></i> Logistics</a>
                                        <a class="dropdown-item mb-2" href="media-entertainment.php"><i class="fas fa-film me-2 text-muted"></i> Media & Entertainment</a>
                                        <a class="dropdown-item" href="metals-minerals-mining.php"><i class="fas fa-gem me-2 text-muted"></i> Metals, Minerals & Mining</a>
                                    </div>

                                    <div class="col-md-3 col-sm-6">
                                        <a class="dropdown-item mb-2" href="oil-gas.php"><i class="fas fa-gas-pump me-2 text-muted"></i> Oil & Gas</a>
                                        <a class="dropdown-item mb-2" href="pharmaceutical.php"><i class="fas fa-pills me-2 text-muted"></i> Pharmaceutical & Healthcare</a>
                                        <a class="dropdown-item mb-2" href="real-estate.php"><i class="fas fa-building me-2 text-muted"></i> Real Estate</a>
                                        <a class="dropdown-item" href="technology.php"><i class="fas fa-microchip me-2 text-muted"></i> Technology</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3" href="contact.php"><i class="fas fa-envelope me-1"></i> Contact</a>
                    </li>

                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2 d-flex align-items-center">
                            <i class="fas fa-rocket me-2"></i> Get Started
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Custom styles to enhance Bootstrap */
    #header {
        transition: all 0.3s ease;
    }

    .navbar {
        padding-top: 12px;
        padding-bottom: 12px;
        backdrop-filter: blur(10px);
    }

    .navbar-brand img {
        transition: transform 0.3s ease;
    }

    .navbar-brand:hover img {
        transform: scale(1.05);
    }

    .nav-link {
        color: #333 !important;
        font-weight: 500;
        position: relative;
        transition: all 0.3s ease;
    }

    .nav-link:hover,
    .nav-link:focus {
        color: #0d6efd !important;
    }

    /* नीली लाइन को छोटा करने के लिए */
    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: #0d6efd;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after {
        width: 30px;
        /* छोटी लाइन */
    }

    /* Hover पर ड्रॉपडाउन खोलने के लिए */
    @media (min-width: 992px) {
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* इंडस्ट्रीज ड्रॉपडाउन को वाइड बनाने के लिए */
        .mega-menu {
            width: 100% !important;
            left: 0;
            right: 0;
            padding: 20px;
        }
    }

    /* मोबाइल में ड्रॉपडाउन के लिए */
    @media (max-width: 991.98px) {
        .dropdown-menu {
            display: none;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-toggle::after {
            float: right;
            margin-top: 10px;
        }

        .mega-menu {
            width: 100% !important;
            position: static;
            padding: 10px;
        }
    }

    .dropdown-menu {
        border-radius: 10px;
        overflow: hidden;
        display: none;
        transition: all 0.3s ease;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
    }

    .dropdown-item {
        padding: 8px 16px;
        transition: all 0.3s ease;
        border-radius: 5px;
    }

    .dropdown-item:hover {
        background-color: #f0f7ff;
        color: #0d6efd;
        transform: translateX(5px);
    }

    .dropdown-item i {
        width: 20px;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover i {
        color: #0d6efd !important;
    }

    .dropdown-header {
        padding: 10px 16px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #0d6efd, #0a58ca);
        border: none;
        box-shadow: 0 4px 15px rgba(13, 110, 253, 0.2);
        transition: all 0.3s ease;
        animation: pulse 2s infinite;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(13, 110, 253, 0.4);
        background: linear-gradient(135deg, #0a58ca, #084298);
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(13, 110, 253, 0.7);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(13, 110, 253, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(13, 110, 253, 0);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .dropdown-menu {
            display: none;
            opacity: 1;
            visibility: visible;
            transform: none;
            border: none;
            box-shadow: none;
            padding-left: 1.5rem;
        }

        .dropdown-item:hover {
            transform: translateX(0);
        }

        .nav-link::after {
            display: none;
        }

        .navbar-collapse {
            max-height: 80vh;
            overflow-y: auto;
            position: fixed;
            top: 0;
            right: -100%;
            width: 280px;
            height: 100vh;
            background: white;
            z-index: 1000;
            padding: 70px 20px 20px;
            transition: right 0.3s ease;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        }

        .navbar-collapse.show {
            right: 0;
        }

        .position-static {
            position: relative !important;
        }

        .dropdown-menu.w-100 {
            width: auto !important;
        }

        /* मोबाइल में ड्रॉपडाउन को ठीक से दिखाने के लिए */
        .dropdown-menu.show {
            display: block !important;
        }

        .navbar-toggler {
            z-index: 1001;
        }
    }
</style>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // स्क्रॉल पर हेडर स्टाइल बदलें
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.querySelector('.navbar').classList.add('shadow');
                header.querySelector('.navbar').style.paddingTop = '8px';
                header.querySelector('.navbar').style.paddingBottom = '8px';
            } else {
                header.querySelector('.navbar').classList.remove('shadow');
                header.querySelector('.navbar').style.paddingTop = '12px';
                header.querySelector('.navbar').style.paddingBottom = '12px';
            }
        });

        // मोबाइल में ड्रॉपडाउन के लिए अतिरिक्त हैंडलिंग
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');

        // हैमबर्गर बटन पर क्लिक इवेंट
        navbarToggler.addEventListener('click', function() {
            navbarCollapse.classList.toggle('show');
        });

        // बाहर क्लिक करने पर मेन्यू बंद करें
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.navbar') || e.target.closest('.nav-link:not(.dropdown-toggle)')) {
                navbarCollapse.classList.remove('show');
            }
        });

        // मोबाइल में ड्रॉपडाउन के लिए
        if (window.innerWidth < 992) {
            const dropdownItems = document.querySelectorAll('.dropdown-toggle');
            dropdownItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const dropdownMenu = this.nextElementSibling;

                    // अन्य सभी ड्रॉपडाउन मेनू को बंद करें
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        if (menu !== dropdownMenu) {
                            menu.classList.remove('show');
                        }
                    });

                    // टॉगल करें वर्तमान ड्रॉपडाउन मेनू
                    dropdownMenu.classList.toggle('show');
                });
            });
        }
    });
</script>