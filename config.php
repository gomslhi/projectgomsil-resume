<?php
return [
    'profile' => [
        'name' => 'Gomgom Silalahi',
        'title' => 'DevOps Engineer',
        'email' => 'gomgomsilalahi50@gmail.com',
        'phone' => '+62 82161503032',
        'location' => 'Jakarta, Indonesia',
        'linkedin' => 'https://www.linkedin.com/in/gomgomsilalahi',
        'about' => 'Dedicated IT professional with over 4 years of progressive experience in IT infrastructure and DevOps across insurance and technology sectors. Passionate about automating pipelines, containerizing applications, and maintaining high availability systems.'
    ],
    'skills' => [
        'Cloud & Containers' => ['AWS', 'Docker', 'Kubernetes'],
        'CI/CD & Automation' => ['GIT', 'Jenkins', 'Sonarqube', 'Infisical'],
        'Scripting' => ['Bash', 'PowerShell', 'Groovy', 'SQL'],
        'Server & OS' => ['Windows Server', 'RHEL/CentOS'],
        'Database' => ['PostgreSQL', 'MSSQL'],
        'Networking & Sec' => ['Mikrotik', 'Cisco', 'Wazuh', 'Kaspersky']
    ],
    'experience' => [
        [
            'role' => 'DevOps Engineer',
            'company' => 'PT Great Eastern General Insurance',
            'period' => 'May 2025 - Present',
            'details' => [
                'Managed end-to-end application deployment using Docker and JBoss RedHat, ensuring smooth releases.',
                'Performed monitoring of application performance and proactively handled issues to maintain high system availability.',
                'Supported automation and optimization of deployment pipelines, contributing to more efficient development cycles.'
            ]
        ],
        [
            'role' => 'DevOps Engineer',
            'company' => 'PT Equity Life Indonesia',
            'period' => 'Jan 2024 - May 2025',
            'details' => [
                'Implemented CI/CD automation pipelines for SIT, UAT, and Production environments using Git, Jenkins, Secret Management, and SonarQube.',
                'Managed and deployed applications on Docker, IIS, and Kong API Gateway.',
                'Monitored VMware vCenter and applied security hardening for VMs and servers.'
            ]
        ],
        [
            'role' => 'Sysadmin & DBA',
            'company' => 'PT Equity Life Indonesia',
            'period' => 'Mar 2022 - Jan 2024',
            'details' => [
                'Administered Windows Server (AD, DNS, DFS) and Linux Server.',
                'Performed database administration (PostgreSQL, MSSQL): query optimization, replication, backup-restore.',
                'Implemented server hardening and monitoring for VMs to ensure compliance and security.'
            ]
        ],
        [
            'role' => 'Network and Technical Support',
            'company' => 'PT Equity Life Indonesia',
            'period' => 'Dec 2020 - Mar 2022',
            'details' => [
                'Provided maintenance and troubleshooting for hardware and network devices.',
                'Designed and implemented secure VPN connections (EOIP Tunnel + IPSec, L2TP VPN).'
            ]
        ]
    ],
    'education' => [
        [
            'degree' => 'Bachelor Degree in Electrical Engineering',
            'institution' => 'Del Institute of Technology',
            'period' => 'Aug 2016 - Sep 2020',
            'details' => 'GPA: 3.07/4.00. Final project: Vehicle Tracking System real-time positioning based on GPS with Multihop LoRa Communication.'
        ]
    ]
];
