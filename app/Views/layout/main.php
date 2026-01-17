<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?? 'Portfolio'; ?>
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>

    <!-- Animated Background -->
    <div class="cloud-bg">
        <div class="cloud cloud-1"></div>
        <div class="cloud cloud-2"></div>
        <div class="cloud cloud-3"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <ul class="nav-links">
                <li><a href="<?= base_url('/about'); ?>" class="<?= ($page == 'about') ? 'active' : ''; ?>">About Me</a>
                </li>
                <li><a href="<?= base_url('/education'); ?>"
                        class="<?= ($page == 'education') ? 'active' : ''; ?>">Education</a></li>
                <li><a href="<?= base_url('/experience'); ?>"
                        class="<?= ($page == 'experience') ? 'active' : ''; ?>">Experience</a></li>
                <li><a href="<?= base_url('/work'); ?>"
                        class="<?= ($page == 'my_work') ? 'active' : ''; ?>">Projects</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content-wrapper">
        <div class="container">
            <?= $this->include('pages/' . $page); ?>
        </div>
    </main>



    <script src="<?= base_url('assets/js/main.js'); ?>"></script>
</body>

</html>