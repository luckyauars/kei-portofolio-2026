<div id="mobile-nav" class="mobile-nav">
    <a href="#about" class="mobile-link" data-target="about">About Me</a>
    <a href="#education" class="mobile-link" data-target="education">Education</a>
    <a href="#experience" class="mobile-link" data-target="experience">Experience</a>
    <a href="#work" class="mobile-link" data-target="work">Projects</a>
</div>

<div class="mobile-container" style="padding-top: 50px;">

    <section id="home" class="mobile-section"
        style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
        <?= $this->include('pages/home'); ?>
    </section>

    <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.1); margin: 2rem 0;">

    <section id="about" class="mobile-section" style="padding: 2rem 0;">
        <?= $this->include('pages/about'); ?>
    </section>

    <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.1); margin: 2rem 0;">

    <section id="education" class="mobile-section" style="padding: 2rem 0;">
        <?= $this->include('pages/education'); ?>
    </section>

    <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.1); margin: 2rem 0;">

    <section id="experience" class="mobile-section" style="padding: 2rem 0;">
        <?= $this->include('pages/experience'); ?>
    </section>

    <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.1); margin: 2rem 0;">

    <section id="work" class="mobile-section" style="padding: 2rem 0; padding-bottom: 5rem;">
        <?= $this->include('pages/my_work'); ?>
    </section>

</div>

<style>
    @media (max-width: 768px) {
        .navbar {
            display: none;
        }

        .mobile-nav {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            position: fixed;
            top: 20px;
            right: 20px;
            width: auto;
            left: auto;
            background: transparent;
            padding: 0;
            z-index: 9999;
            backdrop-filter: none;
            border-bottom: none;
        }

        .mobile-link {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.3s;
        }

        .mobile-link.active {
            color: #fff;
            font-weight: bold;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .content-wrapper {
            padding-top: 0 !important;
        }

        .home-hero {
            height: auto;
            min-height: 80vh;
            margin-top: 0;
        }

        section {
            scroll-margin-top: 60px;
        }
    }

    @media (min-width: 769px) {
        .mobile-nav {
            display: none;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('.mobile-section');
        const navLinks = document.querySelectorAll('.mobile-link');

        const observerOptions = {
            root: null,
            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -60% 0px',
                threshold: 0
            };
            threshold: 0
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => link.classList.remove('active'));

                        const id = entry.target.getAttribute('id');
                        const activeLink = document.querySelector(`.mobile-link[href="#${id}"]`);
                        if (activeLink) {
                            activeLink.classList.add('active');
                        }
                    }
                });
        }, observerOptions);

        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script>