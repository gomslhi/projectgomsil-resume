<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gomgom Silalahi - IT Infrastructure & DevOps</title>
    <!-- Favicon dengan huruf 'g' yang modern -->
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">

    <!-- Google Font: Plus Jakarta Sans for simple, elegant, modern typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css?v=3.9">
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
                <a href="#experience">Professional Experience</a>
                <a href="#projects">Projects</a>
                <a href="#certifications">Certifications</a>
                <a href="#education">Education</a>
                <a href="#skills">Tech Stack</a>
                <button id="theme-toggle" class="theme-btn">🌙 Dark</button>
            </div>
        </div>
    </nav>

    <div class="hero" id="home">

        <div class="hero-content">
            <div class="hero-intro">
                <span class="hero-greeting">Hi, I'm</span>
                <h1 class="hero-name">Gomgom Silalahi</h1>
            </div>

            <!-- Lead Statement (Minimalist & Punchy) -->
            <p class="hero-headline">6+ years engineering enterprise IT Infrastructure and DevOps. Based in Jakarta, Indonesia.</p>

            <!-- Expandable Overview (Inspired by Reference) -->
            <div class="hero-expandable">
                <button class="details-toggle" id="toggle-work" aria-expanded="false" aria-controls="work-collapse">
                    <span class="toggle-sign">+</span>
                    <span class="toggle-label">More ..</span>
                </button>
                <div class="details-collapse" id="work-collapse">
                    <div class="details-inner">
                        <p class="details-text">With over 6 years in enterprise IT—most notably within a Insurance enterprise—I focus on architecting resilient, automated, and highly available infrastructure. In the Insurance sector, where strict regulatory compliance, high availability, and zero data loss are mission-critical, I manage hybrid cloud environments, automated deployment pipelines, and enterprise database systems. My work combines solid system administration with modern DevOps practices to keep core enterprise operations running seamlessly.</p>
                    </div>
                </div>
            </div>

            <!-- Minimalist Uppercase Action Text Links -->
            <div class="hero-text-links">
                <a href="https://linkedin.com/in/gomgomsilalahi" target="_blank" rel="noopener noreferrer" class="text-link">LINKEDIN</a>
                <a href="https://github.com/gomslhi" target="_blank" rel="noopener noreferrer" class="text-link">GITHUB</a>
            </div>

            <!-- Action Buttons (Contact Me & Download CV) -->
            <div class="hero-actions">
                <a href="mailto:gomgom.silalahi@projectgomsil.com" class="pill-btn-primary">Contact Me</a>
                <a href="assets/Gomgom_Silalahi_Resume.pdf" class="pill-btn-download" download>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    <span>Download CV</span>
                </a>
            </div>
        </div>

        <a href="#experience" class="hero-scroll-indicator" aria-label="Scroll to Professional Experience" style="text-decoration: none;">
            <span class="mouse-icon">
                <span class="wheel-dot"></span>
            </span>
            <span class="scroll-label">Scroll to explore</span>
            <svg class="scroll-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </a>
    </div>

    <!-- Section Links -->
    <div class="tabs-container" id="content-tabs">

        <div class="tab-content">

            <!-- EXPERIENCE SECTION -->
            <div class="content-section" id="experience">
                <h2 class="section-title">Professional Experience</h2>
                <div class="timeline">
                    <!-- Great Eastern -->
                    <div class="company-group">
                        <div class="company-header">
                            <div class="company-logo-container">
                                <img src="assets/gegi.png" alt="Great Eastern General Insurance">
                            </div>
                            <div class="company-details">
                                <h3>PT Great Eastern General Insurance</h3>
                                <p>PT Great Eastern General Insurance Indonesia is a general insurance company owned by
                                    Great Eastern General Insurance Limited which is a wholly owned subsidiary of Great
                                    Eastern Holdings. Founded in 1908, Great Eastern is a subsidiary of OCBC,
                                    Singapore's oldest bank, having been established since 1932.</p>
                            </div>
                        </div>
                        <div class="company-roles">
                            <div class="job-item">
                                <div class="job-meta">
                                    <h4>DevOps Engineer</h4>
                                    <span class="job-date">May 2025 - Present</span>
                                </div>
                                <ul>
                                    <li>Orchestrated end-to-end application deployments, significantly contributing to
                                        efficient development cycles and smooth production releases.</li>
                                    <li>Performed monitoring of application performance and proactively handled issues
                                        to maintain high system availability and stability through proactive application
                                        performance monitoring, comprehensive incident troubleshooting, and root cause
                                        analysis.</li>
                                    <li>Fostered close collaboration with development teams, business analysts, and key
                                        stakeholders to deliver core application enhancements and new business features.
                                    </li>
                                    <li>Overseas multi-platform database administration for MySQL, MSSQL, and IBM DB2
                                        specializing in query optimization, performance tuning, and secure data
                                        provisioning for cross-functional stakeholders.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Equity Life -->
                    <div class="company-group">
                        <div class="company-header">
                            <div class="company-logo-container">
                                <img src="assets/eli.png" alt="Equity Life Indonesia">
                            </div>
                            <div class="company-details">
                                <h3>PT Equity Life Indonesia</h3>
                                <p>PT Equity Life Indonesia is the Insurance company providing its services in Life
                                    Insurance, Health Insurance. Established in 1987, with more than 34 valuable years
                                    in service, Equity Life Indonesia has provided life and health protection for over 3
                                    million individuals and group customers in cities all over Indonesia.</p>
                            </div>
                        </div>
                        <div class="company-roles">
                            <!-- Role 1 -->
                            <div class="job-item">
                                <div class="job-meta">
                                    <h4>DevOps Engineer</h4>
                                    <span class="job-date">Jan 2024 - May 2025</span>
                                </div>
                                <ul>
                                    <li>Designed and implemented end-to-end CI/CD automation pipelines for SIT, UAT, and
                                        Production environments leveraging Git, Jenkins, Secret Management, and
                                        SonarQube, significantly reducing almost 95% manual overhead and deployment
                                        errors.</li>
                                    <li>Partnered closely with development and QA teams to streamline software delivery
                                        pipelines, accelerate release cycles, and optimize deployment processes.</li>
                                    <li>Managed, scaled, and deployed enterprise applications on Docker containers, IIS
                                        servers, and Kong API Gateways.</li>
                                    <li>Maintained and administered critical Windows Server infrastructures (AD, DNS,
                                        DFS, GPO, Quota Management) and Linux Server environments.</li>
                                    <li>Manage and monitored enterprise virtualization via vCenter, applying rigorous
                                        security hardening to VMs and physical servers to elevate reliability and
                                        compliance metrics.</li>
                                    <li>Supervised and executed robust system and database backup strategies, ensuring
                                        seamless replication to the Disaster Recovery (DR) site and executing disaster
                                        recovery procedures via Veeam Backup & Replication.</li>
                                    <li>Managed and monitored critical middleware infrastructures including IBM
                                        WebSphere, alongside secure FTP and SFTP transmission servers.</li>
                                    <li>Handled end-to-end database administration for PostgreSQL, driving efficient
                                        query management, scheduled patch deployments, and fail-safe backup/restore
                                        operations.</li>
                                </ul>
                            </div>
                            <!-- Role 2 -->
                            <div class="job-item">
                                <div class="job-meta">
                                    <h4>Sysadmin & DBA</h4>
                                    <span class="job-date">Mar 2022 - Jan 2024</span>
                                </div>
                                <ul>
                                    <li>Maintained and administered critical Windows Server infrastructures (AD, DNS,
                                        DFS, GPO, Quota Management,etc) and Linux Server environments.</li>
                                    <li>Managed comprehensive database administration for MS SQL and PostgreSQL,
                                        executing advanced query optimization, patch deployment, performance tuning,
                                        data replication, robust backup/restore protocols, and database security
                                        hardening.</li>
                                    <li>Implemented strict server hardening and proactive monitoring systems for both
                                        virtual machines (VMs) and bare-metal servers, ensuring rigorous compliance and
                                        enterprise security.</li>
                                    <li>Managed and fine-tuned IBM WebSphere application servers to facilitate seamless
                                        application deployments and ensure optimal performance.</li>
                                    <li>Orchestrated application deployments across containerized environments using
                                        Docker, as well as IIS web servers and Kong API Gateways.</li>
                                    <li>Administered Kaspersky Security Center (KSC) by driving endpoint installation,
                                        critical updates, policy deployments, and automating mass application
                                        distribution while enforcing robust access controls, threat prevention, and
                                        reporting.</li>
                                    <li>Administered and continuously monitored dedicated SFTP servers to safeguard and
                                        guarantee secure data exchange.</li>
                                </ul>
                            </div>
                            <!-- Role 3 -->
                            <div class="job-item">
                                <div class="job-meta">
                                    <h4>Network and Technical Support</h4>
                                    <span class="job-date">Dec 2020 - Mar 2022</span>
                                </div>
                                <ul>
                                    <li>Maintained and troubleshot corporate hardware (PCs, laptops, printers, scanners)
                                        and core network infrastructure (routers, access points, distribution switches)
                                        to ensure peak operational efficiency.</li>
                                    <li>Monitored and resolved technical criticalities on the MDaemon email server and
                                        Cisco corporate phone systems, minimizing communication downtime.</li>
                                    <li>Installed, configured, and troubleshot core enterprise applications, strictly
                                        aligning with business continuity and operational standards.</li>
                                    <li>Monitored, upgraded, and optimized network infrastructure (TCP/IP, routing,
                                        switching, VLAN, cabling) and network security policies (Firewalls) utilizing
                                        MikroTik and Cisco devices across HQ and all branch offices.</li>
                                    <li>Designed and deployed highly secure VPN architectures, configuring EoIP Tunnels
                                        with IPsec to connect 11 branch offices to HQ and establishing L2TP VPN
                                        solutions for remote WFH users via MikroTik.</li>
                                    <li>Created OSPF routing protocols between remote branches and the Head Office using
                                        MikroTik routers.</li>
                                    <li>Collaborated within a team to architect secure branch-to-HQ network connectivity
                                        using advanced VLAN over VPN configurations (L2TP BCP on MikroTik).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- ============================================== -->
            <!-- FEATURED PROJECTS / CASE STUDIES SECTION       -->
            <!-- ============================================== -->
            <div class="content-section" id="projects">
                <h2 class="section-title">Featured Projects</h2>
                <div class="projects-grid">
                    <!-- Project 1 -->
                    <div class="project-card">
                        <div>
                            <div class="project-meta">
                                <span class="project-category">Cloud & Virtualization</span>
                                <span class="project-year">2024</span>
                            </div>
                            <h3 class="project-title">Enterprise Hybrid Cloud & Automated Server Provisioning</h3>
                            <p class="project-summary">Bridging on-premises VMware vSphere clusters with AWS cloud infrastructure to establish automated, resilient multi-environment deployment pipelines.</p>
                            
                            <div class="problem-solution">
                                <div class="ps-item">
                                    <span class="ps-label">Challenge:</span> 
                                    <span class="ps-desc">Manual server setups taking days with high risk of configuration drift.</span>
                                </div>
                                <div class="ps-item">
                                    <span class="ps-label">Solution:</span> 
                                    <span class="ps-desc">Automated provisioning workflows using Git, Bash scripting, and standardized templates.</span>
                                </div>
                            </div>

                            <div class="project-metrics">
                                <span class="metric-pill">⚡ 40% Faster Setup</span>
                                <span class="metric-pill">🛡️ 99.9% Availability</span>
                            </div>
                        </div>

                        <div class="project-tags">
                            <span class="tag">AWS</span>
                            <span class="tag">VMware ESXi</span>
                            <span class="tag">vSphere</span>
                            <span class="tag">Git</span>
                            <span class="tag">Bash</span>
                            <span class="tag">RHEL</span>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="project-card">
                        <div>
                            <div class="project-meta">
                                <span class="project-category">DevOps & Security</span>
                                <span class="project-year">2024</span>
                            </div>
                            <h3 class="project-title">Automated CI/CD & Centralized Enterprise Secrets Management</h3>
                            <p class="project-summary">Standardizing secure build-test-deploy cycles with integrated static code quality checks and centralized encryption for enterprise access control.</p>
                            
                            <div class="problem-solution">
                                <div class="ps-item">
                                    <span class="ps-label">Challenge:</span> 
                                    <span class="ps-desc">Scattered credentials, slow release cadences, and manual code review bottlenecks.</span>
                                </div>
                                <div class="ps-item">
                                    <span class="ps-label">Solution:</span> 
                                    <span class="ps-desc">Engineered Jenkins CI/CD with SonarQube quality gates and Infisical secret vault.</span>
                                </div>
                            </div>

                            <div class="project-metrics">
                                <span class="metric-pill">🚀 30% Higher Deployment Frequency</span>
                                <span class="metric-pill">🔒 100% Encrypted Secrets</span>
                            </div>
                        </div>

                        <div class="project-tags">
                            <span class="tag">Jenkins</span>
                            <span class="tag">SonarQube</span>
                            <span class="tag">Infisical</span>
                            <span class="tag">Docker</span>
                            <span class="tag">Git</span>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="project-card">
                        <div>
                            <div class="project-meta">
                                <span class="project-category">Monitoring & SIEM</span>
                                <span class="project-year">2023 - 2024</span>
                            </div>
                            <h3 class="project-title">End-to-End Enterprise Observability & Threat Detection Stack</h3>
                            <p class="project-summary">Unified monitoring, centralized log telemetry, and proactive host-based intrusion detection safeguarding hybrid insurance infrastructures.</p>
                            
                            <div class="problem-solution">
                                <div class="ps-item">
                                    <span class="ps-label">Challenge:</span> 
                                    <span class="ps-desc">Reactive incident response and decentralized server log inspection across fleets.</span>
                                </div>
                                <div class="ps-item">
                                    <span class="ps-label">Solution:</span> 
                                    <span class="ps-desc">Integrated Prometheus & Grafana metrics with ELK log parsing and Wazuh SIEM alerting.</span>
                                </div>
                            </div>

                            <div class="project-metrics">
                                <span class="metric-pill">⏱️ 35% Faster MTTD</span>
                                <span class="metric-pill">📊 Real-Time Telemetry</span>
                            </div>
                        </div>

                        <div class="project-tags">
                            <span class="tag">Prometheus</span>
                            <span class="tag">Grafana</span>
                            <span class="tag">ELK Stack</span>
                            <span class="tag">Wazuh</span>
                            <span class="tag">Linux</span>
                        </div>
                    </div>

                    <!-- Project 4 -->
                    <div class="project-card">
                        <div>
                            <div class="project-meta">
                                <span class="project-category">Enterprise Networking</span>
                                <span class="project-year">2021 - 2022</span>
                            </div>
                            <h3 class="project-title">Multi-Branch Encrypted IPsec VPN & Zero-Downtime Routing</h3>
                            <p class="project-summary">Architecting high-security encrypted site-to-site connectivity interconnecting 11 nationwide branch offices directly with corporate Headquarters.</p>
                            
                            <div class="problem-solution">
                                <div class="ps-item">
                                    <span class="ps-label">Challenge:</span> 
                                    <span class="ps-desc">Securing inter-branch financial data transfer over public lines with zero disruption.</span>
                                </div>
                                <div class="ps-item">
                                    <span class="ps-label">Solution:</span> 
                                    <span class="ps-desc">Deployed EoIP Tunnels over IPsec, L2TP BCP, and OSPF dynamic routing on MikroTik & Cisco.</span>
                                </div>
                            </div>

                            <div class="project-metrics">
                                <span class="metric-pill">🏢 11 Branch Offices</span>
                                <span class="metric-pill">🔐 IPsec Encryption</span>
                            </div>
                        </div>

                        <div class="project-tags">
                            <span class="tag">MikroTik</span>
                            <span class="tag">Cisco</span>
                            <span class="tag">IPsec VPN</span>
                            <span class="tag">OSPF</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================== -->
            <!-- CERTIFICATIONS & BADGES SECTION                -->
            <!-- ============================================== -->
            <div class="content-section" id="certifications">
                <h2 class="section-title">Certifications & Training</h2>
                <div class="certs-grid">
                    <!-- Cert 1: AWS re/Start -->
                    <div class="cert-card">
                        <div>
                            <div class="cert-top">
                                <div class="cert-issuer-badge">
                                    <span class="cert-issuer-icon">☁️</span>
                                    <span>AWS</span>
                                </div>
                            </div>
                            <h3 class="cert-name">AWS re/Start Graduate (Cloud Practitioner Training)</h3>
                        </div>
                        <div class="cert-footer">
                            <span class="cert-date">Completed November 2026</span>
                            <a href="LINK_VERIFIKASI_KAMU" class="cert-verify" target="_blank" rel="noopener noreferrer">Verify ↗</a>
                    </div>
                </div>
                    <!-- Cert 2 -->
                    <div class="cert-card">
                        <div>
                            <div class="cert-top">
                                <div class="cert-issuer-badge">
                                    <span class="cert-issuer-icon">🐧</span>
                                    <span>Red Hat</span>
                                </div>
                            </div>
                            <h3 class="cert-name">Red Hat Certified System Administrator (RHCSA)</h3>
                        </div>
                        <div class="cert-footer">
                            <span class="cert-date">Issued Mar 2023</span>
                            <a href="#" class="cert-verify" target="_blank" rel="noopener noreferrer">Verify ↗</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- EDUCATION SECTION -->
            <div class="content-section" id="education">
                <h2 class="section-title">Education</h2>
                <div class="timeline">
                    <div class="company-header">
                        <div class="company-logo-container">
                            <img src="assets/it_del.png" alt="Del Institute of Technology">
                        </div>
                        <div class="company-details">
                            <h3>Del Institute of Technology</h3>
                            <div class="job-meta">
                                <h4>Bachelor Degree in Electrical Engineering</h4>
                                <span class="job-date">Aug 2016 - Sep 2020</span>
                            </div>
                            <p>GPA: 3.07/4.00</p> 
                            <p>Published a final project entitled "Vehicle Tracking System (VTS)
                                real-time
                                positioning based on GPS with Multihop LoRa Communication".</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TECH STACK SECTION -->
            <div class="content-section" id="skills">
                <h2 class="section-title">Tech Stack</h2>
                <div class="tech-stack-list">
                    <div class="tech-stack-group">
                        <h4>Monitoring & Observability</h4>
                        <div class="tags">
                            <span class="tag">Prometheus</span>
                            <span class="tag">Grafana</span>
                            <span class="tag">ELK Stack</span>
                        </div>
                    </div>
                    <div class="tech-stack-group">
                        <h4>Containers & Orchestration</h4>
                        <div class="tags">
                            <span class="tag">Docker</span>
                            <span class="tag">Kubernetes</span>
                        </div>
                    </div>
                    <div class="tech-stack-group">
                        <h4>Cloud & Virtualization</h4>
                        <div class="tags">
                            <span class="tag">VMware ESXi</span>
                            <span class="tag">vSphere</span>
                            <span class="tag">AWS</span>
                        </div>
                    </div>
                    <div class="tech-stack-group">
                        <h4>CI/CD & Automation</h4>
                        <div class="tags">
                            <span class="tag">Git</span>
                            <span class="tag">Jenkins</span>
                            <span class="tag">SonarQube</span>
                            <span class="tag">Infisical</span>
                        </div>
                    </div>
                    <div class="tech-stack-group">
                        <h4>Scripting </h4>
                        <div class="tags">
                            <span class="tag">Bash</span>
                            <span class="tag">PowerShell</span>
                            <span class="tag">Groovy</span>
                            <span class="tag">SQL</span>
                        </div>
                    </div>
                    <div class="tech-stack-group">
                        <h4>Operating Systems & Servers</h4>
                        <div class="tags">
                            <span class="tag">Windows Server</span>
                            <span class="tag">RHEL / CentOS</span>
                            <span class="tag">IBM WebSphere</span>
                            <span class="tag">IIS</span>
                        </div>
                    </div>
                    <div class="tech-stack-group">
                        <h4>Databases</h4>
                        <div class="tags">
                            <span class="tag">PostgreSQL</span>
                            <span class="tag">MS SQL Server</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">MongoDB</span>
                        </div>
                    </div>
                    <div class="tech-stack-group">
                        <h4>Networking & Security</h4>
                        <div class="tags">
                            <span class="tag">MikroTik</span>
                            <span class="tag">Cisco</span>
                            <span class="tag">Wazuh</span>
                            <span class="tag">Kaspersky</span>
                        </div>
                    </div>
                    <div class="tech-stack-group">
                        <h4>Project Management</h4>
                        <div class="tags">
                            <span class="tag">Jira</span>
                            <span class="tag">Confluence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Lenis Smooth Scroll Engine (Momentum & Inertia for Mouse Wheel & Trackpad) -->
    <script src="https://cdn.jsdelivr.net/npm/lenis@1.1.18/dist/lenis.min.js"></script>
    <script>
        // Initialize Lenis for buttery momentum scrolling (both scroll up & down)
        let lenisInstance = null;
        if (typeof Lenis !== 'undefined') {
            lenisInstance = new Lenis({
                duration: 1.3,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Apple-style smooth exponential deceleration
                orientation: 'vertical',
                gestureOrientation: 'vertical',
                smoothWheel: true,
                wheelMultiplier: 1,
                touchMultiplier: 1.8,
                infinite: false,
            });

            function raf(time) {
                lenisInstance.raf(time);
                requestAnimationFrame(raf);
            }
            requestAnimationFrame(raf);
        }

        // Unified smooth navigation for anchor links
        document.querySelectorAll('.nav-links a[href^="#"], .hero-scroll-indicator').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');

                if (lenisInstance) {
                    if (targetId === '#home') {
                        lenisInstance.scrollTo(0, { duration: 1.3 });
                    } else {
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            const navbarHeight = document.querySelector('.navbar').offsetHeight;
                            lenisInstance.scrollTo(targetElement, { offset: -navbarHeight - 20, duration: 1.3 });
                        }
                    }
                    return;
                }

                // Fallback if Lenis is not available
                if (targetId === '#home') {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    return;
                }

                const targetElement = document.querySelector(targetId);
                if (!targetElement) return;
                const navbarHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight - 20;
                window.scrollTo({ top: targetPosition, behavior: 'smooth' });
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

        // Expandable Work Details Toggle (Smooth Animated Accordion)
        const toggleWorkBtn = document.getElementById('toggle-work');
        const workCollapse = document.getElementById('work-collapse');
        if (toggleWorkBtn && workCollapse) {
            toggleWorkBtn.addEventListener('click', () => {
                const isOpen = workCollapse.classList.toggle('is-open');
                toggleWorkBtn.setAttribute('aria-expanded', isOpen);
                const signEl = toggleWorkBtn.querySelector('.toggle-sign');
                if (signEl) {
                    signEl.textContent = isOpen ? '–' : '+';
                }
            });
        }
    </script>
</body>

</html>