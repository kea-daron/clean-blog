<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
        }
        
        /* .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        } */
        
        .team-section {
            padding: 60px 0;
        }
        
        .section-title {
            text-align: center;
            color: #0a2463;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 50px;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .team-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .team-card:hover .team-image {
            transform: scale(1.05);
        }
        
        .team-card:hover .team-name {
            color: #0a2463;
        }

        .team-image {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
        }
        
        .team-info {
            padding: 20px;
        }
        
        .team-role {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 5px;
            
        }
        
        .team-name {
            color: #212529;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .social-links {
            display: flex;
            gap: 10px;
        }
        
        .social-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
        }

        .corner-accent {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 48px;
            height: 48px;
            clip-path: polygon(100% 0, 0% 100%, 100% 100%);
        }
        
        .blue-accent {
            background-color: #3498db;
        }
        
        .orange-accent {
            background-color: #f39c12;
        }
        
        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .section-title {
                font-size: 30px;
            }
        }

        .social-icon {
            background-color: #3b82f6;
        }

        .social-icon svg {
            fill: white;
            width: 16px;
            height: 16px;
        }

    </style>
</head>
<body>
    <section class="team-section">
        <div class="container">
            <h1 class="section-title mb-[150px] mt-[60px] dark:text-white">Our Team</h1>
            
            <div class="team-grid mt-[100px]">
                <?php
                // Team members data
                $teamMembers = [
                    [
                        'name' => 'Kea Daron',
                        'role' => 'Lead Web (Leader)',
                        'image' => 'http://localhost/clean-blog/assets/ron.jpg',
                        'telegram' => 'https://t.me/kea_daron',
                        'facebook' => 'https://www.facebook.com/share/18oXHR6M5b/?mibextid=wwXIfr',
                        'github' => 'https://github.com/kea-daron',
                        'accent' => 'blue',
                        'accent' => 'orange'
                    ],
                    [
                        'name' => 'Chhun Meyling',  
                        'role' => 'Lead Web',
                        'image' => 'http://localhost/clean-blog/assets/ling.jpg',
                        'telegram' => 'https://t.me/chhun_meyling',
                        'facebook' => 'https://www.facebook.com/share/17W1QCwFkA/?mibextid=wwXIfr',
                        'github' => 'https://github.com/ChhunMeyling',
                        'accent' => 'blue'
                    ],
                    [
                        'name' => 'An Hengheng',
                        'role' => 'Presentation',
                        'image' => 'http://localhost/clean-blog/assets/heng.jpg',
                        'telegram' => 'https://t.me/henghengan',
                        'facebook' => 'https://www.facebook.com/share/16JWwneUWX/',
                        'github' => 'https://www.facebook.com/share/16JWwneUWX/',
                        'accent' => 'blue'
                    ],
                    [
                        'name' => 'Khoeun Khema',
                        'role' => 'Presentation',
                        'image' => 'http://localhost/clean-blog/assets/khema.jpg',
                        'telegram' => 'https://t.me/Khoeun_khema',
                        'facebook' => 'https://www.facebook.com/share/165vZaRoHV/?mibextid=wwXIfr',
                        'github' => 'https://www.facebook.com/share/165vZaRoHV/?mibextid=wwXIfr',
                        'accent' => 'blue'
                    ],
                    [
                        'name' => 'Chheoun SreySokny',
                        'role' => 'Presentation',
                        'image' => 'http://localhost/clean-blog/assets/sokny.jpg',
                        'telegram' => 'https://t.me/CHHEOUNSOKNY',
                        'facebook' => 'https://www.facebook.com/share/1BTV1Heo4h/',
                        'github' => 'https://www.facebook.com/share/1BTV1Heo4h/',
                        'accent' => 'blue'
                    ],
                    [
                        'name' => 'Rin Ormara',
                        'role' => 'Presentation',
                        'image' => 'http://localhost/clean-blog/assets/ormara.jpg',
                        'telegram' => 'https://t.me/RinOrmara',
                        'facebook' => 'https://web.facebook.com/4maraz.R',
                        'github' => 'https://github.com/rin-ormara',
                        'accent' => 'blue'
                    ],
                    [
                        'name' => 'Sam Ratha',
                        'role' => 'Presentation',
                        'image' => 'http://localhost/clean-blog/assets/ratha.jpg',
                        'telegram' => 'https://t.me/ratha_sam9',
                        'facebook' => 'https://www.facebook.com/sam.ratha.3950',
                        'github' => 'https://www.facebook.com/sam.ratha.3950',
                        'accent' => 'blue'
                    ],
                    [
                        'name' => 'Mao Ineang',
                        'role' => 'Presentation',
                        'image' => 'http://localhost/clean-blog/assets/neang.jpg',
                        'telegram' => 'https://t.me/Mao_Ineang',
                        'facebook' => 'https://www.facebook.com/share/16UKnN7Nq5/?mibextid=LQQJ4d',
                        'github' => 'https://www.facebook.com/share/16UKnN7Nq5/?mibextid=LQQJ4d',
                        'accent' => 'blue'
                    ],
                    [
                        'name' => 'Oem Sreypich',
                        'role' => 'Presentation',
                        'image' => 'http://localhost/clean-blog/assets/pich.jpg',
                        'telegram' => 'https://t.me/pichoem06',
                        'facebook' => 'https://www.facebook.com/ahpiichOun',
                        'github' => 'https://www.facebook.com/ahpiichOun',
                        'accent' => 'blue'
                    ],
                    [
                        'name' => 'Kim Sivdara',
                        'role' => 'Presentation',
                        'image' => 'http://localhost/clean-blog/assets/dara.jpg',
                        'telegram' => 'https://t.me/zerm_4Twenty',
                        'facebook' => 'https://www.facebook.com/share/15UvjLKZAT/?mibextid=wwXIfr',
                        'github' => 'https://www.facebook.com/share/15UvjLKZAT/?mibextid=wwXIfr',
                        'accent' => 'blue'
                    ]
                ];
                
                // Loop through team members
                foreach ($teamMembers as $member) {
                    echo '<div class="team-card">';
                    echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '" class="team-image">';
                    echo '<div class="team-info">';
                    echo '<p class="team-role">' . $member['role'] . '</p>';
                    echo '<h3 class="team-name">' . $member['name'] . '</h3>';
                    echo '<div class="social-links">';
                    
                    if (!empty($member['telegram'])) {
                        echo '<a href="' . $member['telegram'] . '" class="social-icon telegram ">';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/></svg>';
                        echo '</a>';
                    }

                    if (!empty($member['facebook'])) {
                        echo '<a href="' . $member['facebook'] . '" class="social-icon  facebook">';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>';
                        echo '</a>';
                    }

                    if (!empty($member['github'])) {
                        echo '<a href="' . $member['github'] . '" class="social-icon github">';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>';
                        echo '</a>';
                    }
                    
                    echo '</div>'; // End social-links
                    echo '</div>'; // End team-info
                    
                    // Corner accent
                    $accentClass = $member['accent'] === 'blue' ? 'blue-accent' : 'orange-accent';
                    echo '<div class="corner-accent ' . $accentClass . '"></div>';
                    
                    echo '</div>'; // End team-card
                }
                ?>
            </div>
        </div>
    </section>
</body>
</html>