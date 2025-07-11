<?php
$session = \Config\Services::session();
$formData = $session->get('formData');
if (!$formData) {
    echo "No data found.";
    return;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Submitted Contact Form | Kazvin's Portfolio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Kazvin">
        <link rel="stylesheet" type="text/css" href="styles/bulma/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="icons/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="icon" type="image/icon" href="images/favicon.ico">
        <style>
            .input:not(#submit), select:not(#submit), .textarea:not(#submit), .input:hover:not(#submit), select:hover:not(#submit), .textarea:hover:not(#submit), .input:active:not(#submit), select:active:not(#submit), .textarea:active:not(#submit) {
                background-color: hsl(212, 78%, 95%) !important;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="navbar-brand">
            <div class="navbar-spacing"></div>
                <img class="navbar-item" src="images/navbar-logo.svg">
                <p class="navbar-item">Kazvin</p>
                <a role="button" class="navbar-burger" data-target="globalNavbar">
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                </a>
            </div>
            <div class="navbar-spacing"></div>
            <div id="globalNavbar" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/">
                        <span class="icon has-text-black navbar-item-icons">
                            <i class="mdi mdi-home"></i>
                        </span>
                        <span class="navbar-item-text">Home</span>
                    </a>
                    <a class="navbar-item" href="/about-me">
                        <span class="icon has-text-black navbar-item-icons">
                            <i class="mdi mdi-information-box"></i>
                        </span>
                        <span class="navbar-item-text">About Me</span>
                    </a>
                    <a class="navbar-item" href="/contact-form">
                        <span class="icon has-text-black navbar-item-icons">
                            <i class="mdi mdi-account-box"></i>
                        </span>
                        <span class="navbar-item-text">Contact Form</span>
                    </a>
                </div>
                <div class="navbar-spacing"></div>
                <div class="navbar-end">
                    <a class="navbar-item" href="https://www.facebook.com/thekazvin">
                        <span class="icon has-text-black navbar-item-icons socials-icons">
                            <i class="mdi mdi-facebook"></i>
                        </span>
                        <span class="navbar-item-text socials-text">Facebook</span>
                    </a>
                    <a class="navbar-item" href="https://www.youtube.com/channel/UCHlDxPJGM4md8Aj6zcdsQrA">
                        <span class="icon has-text-black navbar-item-icons socials-icons">
                            <i class="mdi mdi-youtube"></i>
                        </span>
                        <span class="navbar-item-text socials-text">YouTube</span>
                    </a>
                    <a class="navbar-item" href="https://github.com/harith3907">
                        <span class="icon has-text-black navbar-item-icons socials-icons">
                            <i class="mdi mdi-github"></i>
                        </span>
                        <span class="navbar-item-text socials-text">GitHub</span>
                    </a>
                    <a class="navbar-item" href="https://www.linkedin.com/in/kazvin-kyd-aguzar">
                        <span class="icon has-text-black navbar-item-icons socials-icons">
                            <i class="mdi mdi-linkedin"></i>
                        </span>
                        <span class="navbar-item-text socials-text">LinkedIn</span>
                    </a>
                </div>
                <div class="navbar-spacing"></div>
            </div>
        </nav>
        <!-- Contact Form -->
        <form id="submitted-contact-form" autocomplete="off">
            <h1 class="title is-1 has-text-centered">Submitted Contact Form</h1>
            <div class="columns">
                <div class="column is-3 is-offset-2">
                    <div class="field">
                        <label class="label">First Name</label>
                        <div class="control">
                            <input id="sender-first-name" name="sender-first-name" class="input" type="text" value="<?php echo $formData['firstName'];?>" disabled>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Last Name</label>
                        <div class="control">
                            <input id="sender-last-name" name="sender-last-name" class="input" type="text" value="<?php echo $formData['lastName'];?>" disabled>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input id="sender-email" name="sender-email" class="input" type="email" value="<?php echo $formData['email'];?>" disabled>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Phone Number</label>
                        <div class="control">
                            <input id="sender-phone-number" name="sender-phone-number" class="input" type="text" value="<?php echo $formData['phoneNumber'];?>" disabled>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Company</label>
                        <div class="control">
                            <input id="sender-company" name="sender-company" class="input" type="text" value="<?php echo $formData['company'];?>" disabled>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Country</label>
                        <div class="control">
                            <input id="sender-country" name="sender-country" class="input" type="text" value="<?php echo $formData['country'];?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="column is-4 is-offset-1">
                    <div class="field">
                        <label class="label">Subject</label>
                        <div class="control">
                            <input id="sender-subject" name="sender-subject" class="input" type="text" value="<?php echo $formData['subject'];?>" disabled>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea id="sender-message" name="sender-message" class="textarea" disabled><?php echo $formData['message'];?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="field">
                        <div class="control">
                            <input id="submit" name="submit" class="input" type="reset" value="Go Back" onclick="window.open('contact-form', '_self')"></input>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src="scripts/script.js"></script>
    </body>
</html>