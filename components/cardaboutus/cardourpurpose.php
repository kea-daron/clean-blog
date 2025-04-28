<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Purpose</title>
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
        } */
        
        h2 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 64px;
        }
        
        .cards-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
           
        }
        
        @media (min-width: 768px) {
            .cards-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        .card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            border-color: #e0e7ff;
            background-color: #fafbff;
        }
        
        .card:hover h3 {
            color: #3b82f6;
        }
        
        .card:hover .hexagon {
            border-color: #3b82f6;
            background-color: #f0f7ff;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 32px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            
        }
        
        .icon-container {
            position: absolute;
            top: -40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .icon-wrapper {
            background-color: white;
            padding: 8px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .icon-inner {
            background-color: white;
            padding: 12px;
            border-radius: 8px;
        }
        
        .hexagon-container {
            width: 70px;
            height: 70px;
            position: relative;
        }
        
        .hexagon {
            width: 100%;
            height: 100%;
            background: white;
            position: relative;
            border: 1px solid #e5e7eb;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .icon {
            width: 32px;
            height: 32px;
            fill: #3b82f6;
        }
        
        h3 {
            font-size: 24px;
            font-weight: bold;
            margin-top: 32px;
            margin-bottom: 16px;
        }
        
        p {
            color: #4b5563;
        }
    </style>
</head>
<body>
    <section class="container">
        <h2 class="mb-[150px] mt-[90px] dark:text-white">Our Purpose</h2>
        
        <div class="cards-grid">
            <!-- Vision Card -->
            <div class="card">
                <div class="icon-container">
                    <div class="icon-wrapper">
                        <div class="icon-inner">
                            <div class="hexagon-container">
                                <div class="hexagon">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-[90px]">Write and Post Blogs</h3>
                <p>Users can easily create and publish blog content.</p>
            </div>
            
            <!-- Mission Card -->
            <div class="card">
                <div class="icon-container">
                    <div class="icon-wrapper">
                        <div class="icon-inner">
                            <div class="hexagon-container">
                                <div class="hexagon">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
                                        <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-[90px]">Clean Interface</h3>
                <p>A simple, user-friendly design for better reading and writing.</p>
            </div>
            
            <!-- Core Values Card -->
            <div class="card">
                <div class="icon-container">
                    <div class="icon-wrapper">
                        <div class="icon-inner">
                            <div class="hexagon-container">
                                <div class="hexagon">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-[90px]">Manage Content</h3>
                <p>Users can edit, delete, and organize their blog posts.</p>
            </div>
        </div>
    </section>
</body>
</html>