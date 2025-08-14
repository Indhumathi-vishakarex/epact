<!-- START HEADER -->

    <div class="topbar bg-dark d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 text-light">
                    <i class="bi bi-envelope"></i>
                    <a href="mailto:info@epact.com" class="text-light">info@epact.com</a>
                </div>
                <div class="d-flex align-items-center gap-2 text-light">
                    <i class="bi bi-telephone ms-4"></i>
                    <a href="tel:02033765250" class="text-light">020 3376 5250</a>
                </div>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <ul class="d-flex align-items-center justify-content-end gap-3">
                    <li><a href="#" class="social-link"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#" class="social-link"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#" class="social-link"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#" class="social-link"><i class="bi bi-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="header header-light">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="./index.html"><img src="assets/img/w-Epact.png" class="logo img-fluid" alt="logo"></a>
                    <div class="nav-toggle"></div>
                    <div class="mobile_nav">
                        <ul>
                            <li class="list-buttons">
                                <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                            class="fill-main" />
                                        <path
                                            d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                            class="fill-main" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper">
                    <ul class="nav-menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contact.html">Contact Us</a></li>

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="moreDropdown">
                            <li><a class="dropdown-item" href="terms.html">Terms & Conditions</a></li>
                            <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
                            </ul>
                        </li> -->
                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li class="bg-darker-btn " style=" border-radius: 3px; background-color: #333 !important;">
                            <a href="./login.html" style="color: #fff !important;"><i class="bi bi-person-circle me-2" style="color: #fff !important;"></i>Employer Login</a>
                        </li>
                        <li class="list-buttons ms-2">
                            <a href="./employee-login.html"><i class="bi bi-person-circle me-2"></i>Employee Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <style>
        .nav-menu li.active > a {
            color: #ff6600;
            font-weight: bold;
        }
        .nav-menu+.nav-menu>li:first-child{
            margin-right: 20px !important;
            background-color: black !important;
        }

        li a{
            font-family: 'Jost', sans-serif !important;
        }
    
    .header
 {
    background: #fff;
    position: relative;
    padding: 13px 0;
    box-shadow: 0 -12px 14px -1px #333;
    position: relative;
    z-index: 9999;
}
    .nav-menu .dropdown-menu {
    background-color: #fff;
    border-radius: 8px;
    min-width: 180px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    padding: 10px 0;
    border: none;
}

.nav-menu .dropdown-menu a.dropdown-item {
    color: #333;
    padding: 10px 20px;
    font-family: 'Jost', sans-serif;
    font-size: 14px;
    transition: background 0.2s ease;
}

.nav-menu .dropdown-menu a.dropdown-item:hover {
    background-color: #f5f5f5;
    color: var(--epact-primary, #ff6600); /* Replace with your primary color if customized */
}

</style>
    <!-- END HEADER -->