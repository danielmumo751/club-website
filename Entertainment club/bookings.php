
<?php
$page = 'bookings';
$title = 'Reservations | Entertainment';
include 'includes/header.php';
?>

<section class="inner-hero">
    <div class="container">
        <p class="eyebrow">YOUR EXPERIENCE STARTS HERE</p>
    </div>
</section>

<section class="content-section container">

    <div class="row g-5">

        <div class="col-lg-5">
            <p class="section-label">VIP EXPERIENCE</p>
            <h2>Make your moments special.</h2>

            <p class="muted-text">
                Planning a group visit or attending a special event?
                Submit your reservation request and our team can
                follow up with you.
            </p>

        </div>

        <div class="col-lg-7">

            <form class="booking-form" action="#" method="POST">

                <h3>Reservation Request</h3>

                <label>Full Name</label>
                <input type="text" name="name" required placeholder="Your name">

                <label>Email Address</label>
                <input type="email" name="email" required placeholder="Your email">

                <label>Phone Number</label>
                <input type="tel" name="phone" required placeholder="+254 7XX XXX XXX">

                <div class="row">
                    <div class="col-md-6">
                        <label>Preferred Date</label>
                        <input type="date" name="date" required>
                    </div>

                    <div class="col-md-6">
                        <label>Number of Guests</label>
                        <input type="number" name="guests"
                               min="1" max="20" required>
                    </div>
                </div>

                <label>Event / Experience</label>
                <select name="event" required>
                    <option value="">Select an event</option>
                    <option>Friday Live Sessions</option>
                    <option>Saturday Night</option>
                    <option>Sunday Chill</option>
                    <option>Other</option>
                </select>

                <label>Additional Information</label>
                <textarea name="message" rows="4"
                          placeholder="Tell us more about your reservation"></textarea>

                <button type="submit" class="form-button">
                    SEND BOOKING REQUEST →
                </button>

                <p class="form-note">
                    This is a demonstration form. Booking submission
                    will be connected to PHP and MySQL in our next stage.
                </p>

            </form>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>
