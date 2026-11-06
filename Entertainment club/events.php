
<?php
$page = 'events';
$title = 'Events | Entertainment';
include 'includes/header.php';

$events = [
    [
        'category' => 'LIVE MUSIC',
        'name' => 'Friday Live Sessions',
        'date' => 'Every Friday',
        'time' => '6:00 PM',
        'image' => 'download.jpg'
    ],
    [
        'category' => 'DJ EXPERIENCE',
        'name' => 'Saturday Night',
        'date' => 'Every Saturday',
        'time' => '7:00 PM',
        'image' => 'Music.jpg'
    ],
    [
        'category' => 'SOCIAL EXPERIENCE',
        'name' => 'Sunday Chill',
        'date' => 'Every Sunday',
        'time' => '3:00 PM',
        'image' => 'Party all night.jpg'
    ]
];
?>

<section class="inner-hero">
    <div class="container">
        <p class="eyebrow">THE ENTERTAINMENT CALENDAR</p>
    </div>
</section>

<section class="content-section container">

    <div class="section-heading">
        <div>
            <p class="section-label">DON'T MISS OUT</p>
            <h2>Upcoming Events</h2>
        </div>
    </div>

    <div class="row g-4">

        <?php foreach ($events as $event): ?>

        <div class="col-md-6 col-lg-4">

            <div class="event-page-card">

                <img src="assets/images/<?= $event['image'] ?>"
                     alt="<?= htmlspecialchars($event['name']) ?>">

                <div class="event-details">

                    <span class="event-category">
                        <?= $event['category'] ?>
                    </span>

                    <h3><?= $event['name'] ?></h3>

                    <p>📅 <?= $event['date'] ?></p>
                    <p>◷ <?= $event['time'] ?></p>

                    <a href="bookings.php" class="text-link">
                        REGISTER INTEREST →
                    </a>

                </div>
            </div>

        </div>

        <?php endforeach; ?>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
