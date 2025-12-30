<?php
get_header();
?>
 <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

 <div class="container">
    <div class="picture">
        <img src="<?= get_template_directory_uri(); ?>/image/g.avif" alt="">
         <div class="posation"></div>
        <h1>We are accepting new patients, <br>
        and would love to see how we can help.</h1>
        <a href="">Contact Us</a>
        <div class="picture1">
            <img src="<?= get_template_directory_uri(); ?>/image/download.png" alt="">
            
        </div>
       
    </div>
</div>

<div class="container1">
    <h1>We'd Love To Hear From You</h1>
    <p>You can recommon for my clinic we happy to hear your feedback and happy <br>
    to help you if you any question places ask we answer the question.</p>
</div>
<div class="map-contact">
    <div class="map">
        <img src="<?= get_template_directory_uri(); ?>/image/maps.webp" alt="">
    </div>
    <div class="information">
       <h1>Contact</h1>
        <ul>
            <li>
                Phone: 097 483 3677
            </li>
            <li>
                haksovanphanha111@gmail.com
            </li>
        </ul>
         <h1>Office Hours</h1>
        <ul>
         <li>
                Mon - Fri 9AM - 7PM
            </li>
            <li>
                Saturday 9AM - 3PM
            </li>
            <li>
                Closed for lunch from 12-1pm
            </li>
        </ul> 
            <h1>Location</h1>
            <ul>
                <li>
                    Cambodia
                </li>
                <li>
                    Phnom phen
                </li>
            </ul>
    </div>
</div>
<div class="container-contact-form">
    <div class="contact-form">
        <h1>Have Questions For Us?</h1> 
        <p>Let us know in the space below</p>
    </div>
    <div class="form">
        <label for="">Name</label>
        <input type="text">
         <label for="">Email</label>
        <input type="email">
        <label for="">Phone</label>
        <input type="text">
        <label for="">Message</label>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <h1><a href="">Send Massage</a></h1>
    </div>
</div>
<div class="add-contact">
    <div class="location">
    <h1>Location: Phmon phen</h1>
    </div>
    <div class="icon">
    <a href=""><i class="fa-brands fa-telegram"></i></a>
    <a href=""><i class="fa-brands fa-instagram"></i></a>
    <a href=""><i class="fa-brands fa-facebook"></i></a>
    </div>
</div>

<?php
get_footer();
?>