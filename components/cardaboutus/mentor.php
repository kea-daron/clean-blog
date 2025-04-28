<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mentors</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        body {
            background-color: #f9fafb;
        }
        
        /* .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 64px 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
        } */
        
        h2 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 64px;
            color: #1e3a8a;
        }
        
        .mentors-grid {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        
        .mentor-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 32px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            cursor: pointer;
            max-width: 380px;
            width: 100%;
        }
        
        .mentor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .mentor-image {
            width: 100%;
            height: 240px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 16px;
        }
        
        .mentor-title {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 4px;
        }
        
        .mentor-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 16px;
        }
        
        .social-links {
            display: flex;
            gap: 12px;
        }
        
        .social-icon {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f3f4f6;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: #e5e7eb;
        }
        
        .corner-decoration {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 60px;
            height: 60px;
            border-radius: 0 0 8px 0;
        }
        
        .blue-corner {
            background-color: #1E3A8A;
        }
        
        .orange-corner {
            background-color: #f59e0b;
        }
    </style>
</head>
<body>
    <section class="container">
        <h2 class="mt-[90px] mb-[100px] dark:text-white">Our Mentor</h2>
        
        <div class="mentors-grid">
            <div class="mentor-card">
                <img src="http://localhost/clean-blog/assets/cher.png" alt="Meas Sovann" class="mentor-image" style="object-position: 25% center;">
                <p class="mentor-title">Mentor</p>
                <h3 class="mentor-name">Meas Sovann</h3>
                <div class="social-links">
                    <a href="https://t.me/kea_daron" class="text-blue-900 hover:text-primary-50 dark:hover:text-primary-50 mb-5">
                        <i class="fa-brands fa-telegram text-2xl"></i>
                        <span class="sr-only">Telegram page</span>
                    </a>
                    <a href="https://www.facebook.com/share/18oXHR6M5b/?mibextid=wwXIfr" class="text-blue-900 hover:text-primary-50 dark:hover:text-primary-50">
                        <i class="fa-brands fa-facebook text-2xl"></i>
                        <span class="sr-only">Facebook page</span>
                    </a>
                </div>
                <div class="corner-decoration blue-corner"></div>
            </div>
        </div>
    </section>
</body>
</html>