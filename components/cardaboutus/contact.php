<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }

    /* body {
      background-color: #f9fafb;
      padding: 20px;
      display: flex;
      justify-content: center;
    }

    .contact-container {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
                  0 2px 4px -1px rgba(0, 0, 0, 0.06);
      padding: 40px 20px;
      width: 100%;
      max-width: 1200px;
      display: flex;
      flex-direction: column;
      margin: 20px 0;
      gap: 30px;
    } */

    @media (min-width: 768px) {
      .contact-container {
        flex-direction: row;
        gap: 60px;
        padding: 40px;
      }
    }

    .contact-info {
      flex: 1;
    }

    .contact-map {
      flex: 1;
      min-height: 300px;
    }

    .contact-heading {
      font-size: 2.5rem;
      font-weight: 700;
      color: #1E3A8A;
      text-align: center;
      margin-bottom: 30px;
    }

    .contact-heading-underline {
      height: 3px;
      width: 180px;
      background-color: #3b82f6;
      margin: 8px auto 40px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 25px;
    }

    .contact-icon {
      background-color: #dbeafe;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      flex-shrink: 0;
    }

    .contact-icon svg {
      width: 24px;
      height: 24px;
      color: #3b82f6;
    }

    .contact-text {
      font-size: 1.125rem;
      color: #4b5563;
    }

    .contact-text a {
      color: #4b5563;
      text-decoration: none;
    }

    .contact-text a:hover {
      color: #3b82f6;
    }

    iframe {
      width: 100%;
      height: 100%;
      min-height: 300px;
      border: none;
      border-radius: 8px;
    }
  </style>
</head>
<body>
<?php
  $phoneNumber = "+855 31 473 327";
  $email = "info.iBlog@gmail.com";
  $address = "Science and Technology Advanced Institute, Phnom Penh, Cambodia";
  $mapEmbedUrl = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.772214440522!2d104.88611731532566!3d11.568291191786693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513c9eedf8f1%3A0x932b8d4c3e0d8b7a!2sScience%20and%20Technology%20Advanced%20Institute!5e0!3m2!1sen!2sus!4v1649812345678!5m2!1sen!2sus";
?>
<div class="contact-container">
  <div class="contact-info">
    <h2 class="contact-heading" data-translate="ai">Contact Us</h2>

    <div class="contact-item">
      <div class="contact-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
        </svg>
      </div>
      <div class="contact-text">
        <a href="tel:<?php echo $phoneNumber; ?>"><?php echo $phoneNumber; ?></a>
      </div>
    </div>

    <div class="contact-item">
      <div class="contact-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
      </div>
      <div class="contact-text">
        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
      </div>
    </div>

    <div class="contact-item">
      <div class="contact-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>
      <div class="contact-text"><?php echo $address; ?></div>
    </div>
  </div>

  <div class="contact-map">
    <iframe src="<?php echo $mapEmbedUrl; ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
</body>
</html>
