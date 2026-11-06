
<?php
$page = $page ?? 'home';

$links = [
    'home' => ['Home', 'index.php'],
    'about' => ['About', 'about.php'],
    'events' => ['Events', 'events.php'],
    'gallery' => ['Gallery', 'gallery.php'],
    'bookings' => ['VIP & Bookings', 'bookings.php'],
    'contact' => ['Contact', 'contact.php']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($title ?? 'Entertainment') ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark main-nav">
    <div class="container">

        <a class="navbar-brand logo" href="index.php">
            ✦ ENTER<span>TAINMENT HUB.</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <?php foreach ($links as $key => $link): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $page === $key ? 'active' : '' ?>"
                           href="<?= $link[1] ?>">
                            <?= $link[0] ?>
                        </a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</nav>
