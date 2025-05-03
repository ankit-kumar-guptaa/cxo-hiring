<!-- Header Section -->
<header id="header">
    <div class="logo">
        <img src="https://elitecorporatesolutions.com/images/logo/logo.png" style="height: 60px;" alt="">
    </div>
    <nav>
        <ul id="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="dropdown">
                <a href="#services" class="nav-link">Services <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-content">
                    <li><a href="#full-scale-search">Full-Scale Executive Search</a></li>
                    <li><a href="#confidential-search">Confidential Executive Search</a></li>
                    <li><a href="#transition-services">Leadership Transition Services</a></li>
                    <li><a href="#board-advisory">Board Advisory Services</a></li>
                    <li><a href="#diversity-search">Diversity Executive Search</a></li>
                    <li><a href="#interim-solutions">Interim Executive Solutions</a></li>
                </ul>
            </li>
            <li><a href="#process">Process</a></li>
            <li><a href="#industries">Industries</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#contact" class="cta-nav">Get Started</a></li>
        </ul>
        <div class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>
</header>

<style>
/* Header Styling (Unchanged) */
header {
    background-color: rgba(255, 255, 255, 0.95);
    color: var(--secondary);
    padding: 20px 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

header.scrolled {
    padding: 15px 5%;
    background-color: rgba(255, 255, 255, 0.98);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

.logo {
    font-size: 28px;
    font-weight: 700;
    letter-spacing: 1px;
    color: var(--primary);
    display: flex;
    align-items: center;
}

.logo i {
    margin-right: 10px;
    color: var(--accent);
}

nav ul {
    list-style-type: none;
    display: flex;
}

nav ul li {
    margin-left: 30px;
    position: relative;
}

nav ul li a {
    text-decoration: none;
    color: var(--secondary);
    font-size: 16px;
    font-weight: 500;
    transition: color 0.3s ease;
    position: relative;
}

nav ul li a:hover {
    color: var(--primary);
}

nav ul li a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -5px;
    left: 0;
    background-color: var(--primary);
    transition: width 0.3s ease;
}

nav ul li a:hover::after {
    width: 100%;
}

.cta-nav {
    background-color: var(--primary);
    color: white;
    padding: 10px 20px;
    border-radius: 30px;
    transition: all 0.3s ease;
}

.cta-nav:hover {
    background-color: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
}

.cta-nav::after {
    display: none;
}

.hamburger {
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
    cursor: pointer;
    z-index: 1001;
}

.hamburger div {
    background-color: var(--secondary);
    height: 3px;
    width: 100%;
    border-radius: 3px;
    transition: all 0.3s ease;
}

.hamburger.active div:nth-child(1) {
    transform: translateY(9px) rotate(45deg);
}

.hamburger.active div:nth-child(2) {
    opacity: 0;
}

.hamburger.active div:nth-child(3) {
    transform: translateY(-9px) rotate(-45deg);
}

/* Dropdown Styling */
.dropdown {
    position: relative;
}

.dropdown .nav-link i {
    margin-left: 5px;
    font-size: 12px;
    transition: transform 0.3s ease;
}

.dropdown:hover .nav-link i {
    transform: rotate(180deg);
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background: #ffffff;
    min-width: 240px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 15px 0;
    z-index: 1000;
    animation: slideDown 0.3s ease;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content li {
    margin: 0;
    padding: 0;
}

.dropdown-content li a {
    display: block;
    padding: 12px 20px;
    color: var(--secondary);
    font-weight: 500;
    font-size: 15px;
    transition: all 0.3s ease;
}

.dropdown-content li a:hover {
    background: #f1f5f9;
    color: var(--primary);
    padding-left: 25px;
}

/* Mobile Styles (Unchanged) */
@media (max-width: 992px) {
    nav ul {
        position: fixed;
        top: 0;
        right: -100%;
        width: 300px;
        height: 100vh;
        background-color: white;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        transition: right 0.4s ease;
        z-index: 1000;
    }

    nav ul.active {
        right: 0;
    }

    nav ul li {
        margin: 15px 0;
    }

    .hamburger {
        display: flex;
    }

    .dropdown-content {
        position: static;
        box-shadow: none;
        background: #f8fafc;
        padding: 10px 0 10px 20px;
        border-radius: 5px;
        display: none;
        width: 100%;
    }

    .dropdown.active .dropdown-content {
        display: block;
    }

    .dropdown-content li a {
        padding: 10px 15px;
    }
}
</style>

<script>
// Mobile menu toggle and dropdown functionality
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    const dropdowns = document.querySelectorAll('.dropdown');

    // Hamburger toggle
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Mobile dropdown toggle
    dropdowns.forEach(dropdown => {
        const link = dropdown.querySelector('.nav-link');
        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            }
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
            dropdowns.forEach(dropdown => dropdown.classList.remove('active'));
        }
    });

    // Sticky header effect
    window.addEventListener('scroll', () => {
        const header = document.getElementById('header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
</script>