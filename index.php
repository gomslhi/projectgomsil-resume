<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gomgom Silalahi - DevOps Engineer</title>
    <!-- Favicon dengan huruf 'g' yang modern -->
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-inner">
            <div class="logo">
                <img src="assets/profile.png" alt="Gomgom Silalahi Profile" class="logo-img">
                Gomgom Silalahi
            </div>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#experience">Work Experience</a>
                <a href="#education">Education</a>
                <a href="#skills">Skills</a>
                <button id="theme-toggle" class="theme-btn">🌙 Dark</button>
            </div>
        </div>
    </nav>

    <div class="hero" id="home">

        <div class="hero-content">
            <div class="html-tag top-tag">&lt;body&gt;</div>
            
            <div class="main-text">
                <div class="html-tag">&lt;h1&gt;</div>
                <h1>Hi,<br>I'm <span class="accent-g">G</span>omgom,<br>DevOps Engineer</h1>
                <div class="html-tag">&lt;/h1&gt;</div>
                
                <div class="html-tag">&lt;p&gt;</div>
                <p>Hi there!</p> 
                <p>I’m an IT professional with over 6 years of experience managing the full spectrum of IT Infrastructure and databases to scalable DevOps pipelines. I specialize in turning complex architecture into stable, well-monitored, and stress-free environments for software delivery.</p>
                <p>Drop a message to say hi!</p>
                <div class="html-tag">&lt;/p&gt;</div>
            </div>

            <a href="mailto:gomgom.silalahi@projectgomsil.com" class="contact-btn">Contact me!</a>
        </div>
        
        <div class="scroll-indicator left">scroll down &darr;</div>
        <div class="scroll-indicator right">scroll down &darr;</div>
    </div>

    <!-- Section Links -->
    <div class="tabs-container" id="content-tabs">

        <div class="tab-content">

            <!-- EXPERIENCE SECTION -->
            <div class="content-section" id="experience">
                <h2 class="section-title">Work Experience</h2>
                <div class="timeline">
                    <!-- Great Eastern -->
                    <div class="job-item">
                        <div class="job-meta">
                            <h4>DevOps Engineer</h4>
                            <span class="job-date">May 2025 - Present</span>
                        </div>
                        <div class="job-company">PT Great Eastern General Insurance</div>
                        <ul>
                            <li>Managed end-to-end application deployment using Docker and JBoss RedHat, ensuring smooth releases.</li>
                            <li>Performed monitoring of application performance and proactively handled issues to maintain high system availability.</li>
                            <li>Supported automation and optimization of deployment pipelines, contributing to more efficient development cycles.</li>
                        </ul>
                    </div>
                    <!-- Equity Life 1 -->
                    <div class="job-item">
                        <div class="job-meta">
                            <h4>DevOps Engineer</h4>
                            <span class="job-date">Jan 2024 - May 2025</span>
                        </div>
                        <div class="job-company">PT Equity Life Indonesia</div>
                        <ul>
                            <li>Implemented CI/CD automation pipelines for SIT, UAT, and Production environments using Git, Jenkins, Secret Management, and SonarQube.</li>
                            <li>Managed and deployed applications on Docker, IIS, and Kong API Gateway.</li>
                            <li>Monitored VMware vCenter and applied security hardening for VMs and servers.</li>
                        </ul>
                    </div>
                    <!-- Equity Life 2 -->
                    <div class="job-item">
                        <div class="job-meta">
                            <h4>Sysadmin & DBA</h4>
                            <span class="job-date">Mar 2022 - Jan 2024</span>
                        </div>
                        <div class="job-company">PT Equity Life Indonesia</div>
                        <ul>
                            <li>Administered Windows Server (AD, DNS, DFS) and Linux Server.</li>
                            <li>Performed database administration (PostgreSQL, MSSQL): query optimization, replication, backup-restore.</li>
                        </ul>
                    </div>
                    <!-- Equity Life 3 -->
                    <div class="job-item">
                        <div class="job-meta">
                            <h4>Network and Technical Support</h4>
                            <span class="job-date">Dec 2020 - Mar 2022</span>
                        </div>
                        <div class="job-company">PT Equity Life Indonesia</div>
                        <ul>
                            <li>Provided maintenance and troubleshooting for hardware and network devices.</li>
                            <li>Designed and implemented secure VPN connections (EOIP Tunnel + IPSec, L2TP VPN).</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- EDUCATION SECTION -->
            <div class="content-section" id="education">
                <h2 class="section-title">Education</h2>
                <div class="timeline">
                    <div class="job-item">
                        <div class="job-meta">
                            <h4>Bachelor Degree in Electrical Engineering</h4>
                            <span class="job-date">Aug 2016 - Sep 2020</span>
                        </div>
                        <div class="job-company">Del Institute of Technology</div>
                        <p>GPA: 3.07/4.00. Published a final project entitled "Vehicle Tracking System (VTS) real-time positioning based on GPS with Multihop LoRa Communication".</p>
                    </div>
                </div>
            </div>

            <!-- SKILLS SECTION -->
            <div class="content-section" id="skills">
                <h2 class="section-title">My Skills</h2>
                <div class="skills-grid">
                    <div class="skill-group">
                        <h4>Cloud & Containers</h4>
                        <div class="tags">
                            <span class="tag">AWS</span><span class="tag">Docker</span><span class="tag">Kubernetes</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <h4>CI/CD & Automation</h4>
                        <div class="tags">
                            <span class="tag">GIT</span><span class="tag">Jenkins</span><span class="tag">Sonarqube</span><span class="tag">Infisical</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <h4>Scripting</h4>
                        <div class="tags">
                            <span class="tag">Bash</span><span class="tag">PowerShell</span><span class="tag">Groovy</span><span class="tag">SQL</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <h4>Server & OS</h4>
                        <div class="tags">
                            <span class="tag">Windows Server</span><span class="tag">RHEL/CentOS</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <h4>Database</h4>
                        <div class="tags">
                            <span class="tag">PostgreSQL</span><span class="tag">MSSQL</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <h4>Networking & Sec</h4>
                        <div class="tags">
                            <span class="tag">Mikrotik</span><span class="tag">Cisco</span><span class="tag">Wazuh</span><span class="tag">Kaspersky</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
    <!-- Premium Smooth Scroll Animation -->
    <script>
        document.querySelectorAll('.nav-links a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                
                if (targetId === '#home') {
                    // For Home, smooth scroll exactly to the top
                    const startPosition = window.pageYOffset;
                    const distance = -startPosition;
                    const duration = 1200;
                    let start = null;
                    function ease(t, b, c, d) {
                        t /= d / 2;
                        if (t < 1) return c / 2 * t * t * t * t + b;
                        t -= 2;
                        return -c / 2 * (t * t * t * t - 2) + b;
                    }
                    function animation(currentTime) {
                        if (start === null) start = currentTime;
                        const timeElapsed = currentTime - start;
                        const run = ease(timeElapsed, startPosition, distance, duration);
                        window.scrollTo(0, run);
                        if (timeElapsed < duration) requestAnimationFrame(animation);
                    }
                    requestAnimationFrame(animation);
                    return;
                }
                
                const targetElement = document.querySelector(targetId);
                if (!targetElement) return;

                // For other sections, account for the sticky navbar height + extra padding
                const navbarHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight - 20;
                const startPosition = window.pageYOffset;
                const distance = targetPosition - startPosition;
                const duration = 1200; // 1.2s duration for buttery smooth feel
                let start = null;

                function ease(t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t * t * t + b;
                    t -= 2;
                    return -c / 2 * (t * t * t * t - 2) + b;
                }

                function animation(currentTime) {
                    if (start === null) start = currentTime;
                    const timeElapsed = currentTime - start;
                    const run = ease(timeElapsed, startPosition, distance, duration);
                    window.scrollTo(0, run);
                    if (timeElapsed < duration) {
                        requestAnimationFrame(animation);
                    }
                }

                requestAnimationFrame(animation);
            });
        });

        // Theme Toggle Logic
        const themeToggleBtn = document.getElementById('theme-toggle');
        const currentTheme = localStorage.getItem('theme') || 'light';
        
        if (currentTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            themeToggleBtn.innerHTML = '☀️ Light';
        }

        themeToggleBtn.addEventListener('click', () => {
            let theme = document.documentElement.getAttribute('data-theme');
            if (theme === 'dark') {
                document.documentElement.removeAttribute('data-theme');
                localStorage.setItem('theme', 'light');
                themeToggleBtn.innerHTML = '🌙 Dark';
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
                themeToggleBtn.innerHTML = '☀️ Light';
            }
        });
    </script>
</body>
</html>
