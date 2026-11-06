
<?php
$page = 'contact';
$title = 'Contact | Entertainment';
include 'includes/header.php';
?>

<section class="inner-hero">
    <div class="container">
        <p class="eyebrow">WE WOULD LOVE TO HEAR FROM YOU</p>
    </div>
</section>

<section class="content-section container">

    <div class="row g-5">

        <div class="col-lg-5">

            <p class="section-label">GET IN TOUCH</p>
            <h2>Have something in mind?</h2>

            <p class="muted-text">
                Reach out to the Entertainment team.
                We welcome enquiries, ideas and collaborations.
            </p>

            <div class="contact-info">
                <h5>📍 Location</h5>
                <p>Kenya — project location to be confirmed</p>

                <h5>✉ Email</h5>
                <p>info@entertainment.example</p>

                <h5>☎ Phone</h5>
                <p>Contact details coming soon</p>
            </div>

        </div>

        <div class="col-lg-7">

            <form class="booking-form" action="#" method="POST">

                <h3>Send an Enquiry</h3>

                <label>Your Name</label>
                <input type="text" name="name" required>

                <label>Email Address</label>
                <input type="email" name="email" required>

                <label>Subject</label>
                <input type="text" name="subject" required>

                <label>Your Message</label>
                <textarea name="message" rows="6" required></textarea>

                <button type="submit" class="form-button">
                    SEND MESSAGE →
                </button>

                <p class="form-note">
                    Contact form backend will be implemented later.
                </p>

            </form>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>
