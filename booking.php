<?php 
    $pageTitle = "Book an Appointment";
    include 'header.php'; 
?>

<style>
    .container {
        text-align: center;
    }
    .booking-widget-container {
        border: 3px dashed #007bff;
        padding: 20px;
        margin-top: 20px;
        background-color: #fff;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    /* This style is to make the Calendly widget responsive */
    .calendly-inline-widget {
        min-width: 320px;
        height: 630px;
    }
</style>

<div class="container">
    <h2>Schedule Your Pet's Pampering Session</h2>
    <p>Choose a service and find a time that works for you. We can't wait to see you and your furry friend!</p>
    
    <div class="booking-widget-container">
        <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/wutszho20032003" style="min-width:320px;height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->
        <p style="font-weight: bold; font-size: 1.2em;">Your booking calendar will appear here.</p>
        <p>https://calendly.com/wutszho20032003/30min</p>
    </div>
</div>

<?php include 'footer.php'; ?>
