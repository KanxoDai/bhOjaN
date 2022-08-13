<?php include('partials-front/menu.php');  ?>
<link rel="stylesheet" href="css/contact.css">
<?php
// When form submitted, insert values into the database.
if (isset($_REQUEST['submit'])) {
    // removes backslashes
    $first_name = stripslashes($_REQUEST['first_name']);
    //escapes special characters in a string
    $first_name = mysqli_real_escape_string($conn, $first_name);
    $last_name = stripslashes($_REQUEST['last_name']);
    $last_name = mysqli_real_escape_string($conn, $last_name);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($conn, $email);
    $mobile    = stripslashes($_REQUEST['mobile']);
    $mobile    = mysqli_real_escape_string($conn, $mobile);
    $message   = stripslashes($_REQUEST['message']);
    $message   = mysqli_real_escape_string($conn, $message);
    $query    = "INSERT INTO `tbl_contact`(`first_name`, `last_name`, `email`, `mobile`, `message`, `id`) 
                     VALUES ('$first_name','$last_name','$email','$mobile','$message','')";
    $result   = mysqli_query($conn, $query);
    if ($result) {
        $_SESSION['contact'] = "<div class='success text-center'> Message Send Successfully </div>";
        header('location:' . SITEURL);
    } else {
        $_SESSION['contact'] = "<div class='error text-center'> Failed To Send Message</div>";
        header('location:' . SITEURL);
    }
} else {
?>
<?php
}
?>
<div class="contactUs">
    <div class="title">
        <h2>Get in Touch </h2>
    </div>
    <div class="box">
        <!-- Form -->
        <div class="contact form">
            <h3>Send a Message</h3>
            <form>
                <div class="formBox">
                    <div class="row50">
                        <div class="inputBox">
                            <span> First Name:</span>
                            <input type="text" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="inputBox">
                            <span> Last Name:</span>
                            <input type="text" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="row50">
                        <div class="inputBox">
                            <span> Email:</span>
                            <input type="text" class="form-control login-input" name="email" placeholder="Email Adress" id="email" pattern="^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$" title="Enter your valid gmail id" required />
                        </div>
                        <div class="inputBox">
                            <span> Mobile:</span>
                            <input type="tel" class="form-control login-input" name="mobile" placeholder="Phone Number" id="phone" pattern="^[9]\d{9,9}$" title="Phone number starts with 9 and remaing 9 digit with 0-9" maxlength="10" required />
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <span> Message:</span>  
                            <textarea name="message" placeholder="Write Message Here" required> </textarea>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <input type="submit" name="submit" value="submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Info -->
        <div class="contact info">
            <h3>Contact Info</h3>
            <div class="infoBox">
                <div>
                    <span>
                        <ion-icon name="location"></ion-icon>
                    </span>
                    <p>Biratnager, Province-1 <br> NEPAL</p>
                </div>
                <div>
                    <span>
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <a href="mailto:amitghimire100@gmail.com">amitghimire100@gmail.com </a>
                </div>
                <div>
                    <span>
                        <ion-icon name="call"></ion-icon>
                    </span>
                    <a href="tel:+977 980 7072 190">+977 980 7072 190 </a>
                </div>
                <!-- social media link -->
                <div class="sci">
                    <li>
                        <a href="#">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                </div>
            </div>
        </div>
        <!-- Map -->
        <div class="contact map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114311.
                    32531362747!2d87.2017662591932!3d26.44834907963289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                    1!3m3!1m2!1s0x39ef744704331cc5%3A0x6d9a85e45c54b3fc!2z4KSs4KS_4KSw4KS-4KSf4KSo4KSX4KSwIDU2NjEz!5e0!3m2!1sne!2snp!4v1653193797982!5m2!1sne!2snp" tyle="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php include('partials-front/footer.php');  ?>