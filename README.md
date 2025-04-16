🌸 DonaCenter Web
A clean, responsive, and lightweight web project for DonaCenter — an online product showcase and contact platform built with HTML, CSS, JavaScript, Bootstrap, and PHPMailer for handling contact form submissions.

📂 Project Structure
donacenter-web/
├── index.html               # Main landing page
├── style.css                # Custom CSS styles
├── script.js                # Custom JS logic
├── contactme.php            # Contact form backend handler
├── success.html             # Success message page
├── failed.html              # Failed submission page
├── images/                  # Image assets
├── js/                      # Additional JavaScript files
├── lib/                     # Third-party libraries (Bootstrap, jQuery, etc.)
├── mailing/                 # Email sending logic with PHPMailer
├── vendor/                  # Composer dependencies (PHPMailer)
├── composer.json            # PHP dependencies configuration
├── composer.lock            # PHP dependencies lock file

🚀 Features
📱 Responsive Layout — built with Bootstrap for full device support.

📨 Contact Form with PHPMailer — sends emails securely from your web page.

🎨 Image Galleries and Sliders — powered by Lightbox and Owl Carousel.

📊 Animated Counters & Smooth Scrolling — with Waypoints and CounterUp.

✨ Clean and Modern UI — simple, elegant design with custom styling.

📦 Installation & Setup
1. Clone the repository

git clone https://github.com/blendihasani/html-css-js-php-Dona-Center.git
cd donacenter-web

2. Install PHP dependencies (PHPMailer)

Ensure you have Composer installed, then run:

composer install

3. Configure mailing variables

Edit /mailing/mailingvariables.php and set your email credentials and recipient details.

4. Deploy the files

Upload everything to your PHP-supported hosting environment.

📧 Contact Form Setup
The form on the website submits data to contactme.php, which utilizes PHPMailer to send emails. You’ll need to:

Configure SMTP settings in mailing/mailfunction.php

Ensure your hosting provider allows sending emails via PHP/SMTP

📸 Screenshots


📄 License
This project is licensed under the MIT License — feel free to use, modify, and share!

✨ Acknowledgements
Bootstrap

jQuery

PHPMailer

Owl Carousel

Lightbox


