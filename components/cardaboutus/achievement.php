<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievement Section</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }
        
        body {
            background-color: #f9fafb;
        }
        
        /* .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 1rem;
        } */
        
        .heading {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .heading h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e3a8a;
        }
        
        .underline {
            height: 4px;
            width: 200px;
            background-color: #fbbf24;
            margin: 0.5rem auto 0;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1.5rem;
        }
        
        @media (min-width: 768px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 1024px) {
            .stats-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }
        
        .stat-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            border-color: #e0e7ff;
            background-color: #fafbff;
        }
        
        .stat-card:hover h3 {
            color: #3b82f6;
        }
        
        .stat-card:hover .hexagon {
            border-color: #3b82f6;
            background-color: #f0f7ff;
        }
        .stat-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .icon-wrapper {
            background-color: #dbeafe;
            padding: 1rem;
            border-radius: 9999px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .icon {
            width: 2rem;
            height: 2rem;
            fill: #3b82f6;
        }
        
        .stat-number {
            font-size: 2.25rem;
            font-weight: 700;
            color: #1f2937;
        }
        
        .stat-label {
            font-size: 1.125rem;
            color: #4b5563;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <h2 class="dark:text-white">Achievement</h2>
            
        </div>
        
        <div class="stats-grid">
            <!-- Total Jobs -->
            <div class="stat-card">
                <div class="icon-wrapper">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    </svg>
                </div>
                <h3 class="stat-number">899</h3>
                <p class="stat-label">Total Post</p>
            </div>
            
            <!-- Seekers -->
            <div class="stat-card">
                <div class="icon-wrapper">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h3 class="stat-number">16.8k</h3>
                <p class="stat-label">Blogger</p>
            </div>
            
            <!-- Companies -->
            <div class="stat-card">
                <div class="icon-wrapper">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </div>
                <h3 class="stat-number">261</h3>
                <p class="stat-label">Companies</p>
            </div>
            
            <!-- Employers -->
            <div class="stat-card">
                <div class="icon-wrapper">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <h3 class="stat-number">378</h3>
                <p class="stat-label">Users</p>
            </div>
        </div>
    </div>
</body>
</html>