<?php

/*
 * Profile data for the whole site (no database). Read in views with config('team').
 *
 * Each person edits only their own block. Names, slugs, programmes, university
 * and email addresses are real; skill percentages, certifications, hobbies,
 * phone numbers, project counts and social links (#) are sample values to be
 * replaced with each person's own details. 'ref' is kept for records only and
 * is never displayed on the website.
 */

return [

    // ===== Member 1 =====
    [
        'slug'     => 'ainin',
        'nickname' => 'Ainin',
        'initials' => 'AS',
        'name'     => 'Ainin Sofiya Binti Zulkanain',
        'ref'      => 'CB23015',
        'title'    => 'Full Stack Developer',
        'bio'      => 'I am a Software Engineering undergraduate who builds complete web applications, from the database to the interface. I work mainly with PHP and Laravel and care about clean, maintainable code. I enjoy turning a rough idea into a product people actually use.',
        'focus'    => 'Bachelor of Computer Science (Software Engineering)',
        'location' => 'Universiti Malaysia Pahang Al-Sultan Abdullah',
        'projects' => 5,
        'skills' => [
            ['name' => 'Laravel',      'level' => 85],
            ['name' => 'PHP',          'level' => 82],
            ['name' => 'MySQL',        'level' => 78],
            ['name' => 'JavaScript',   'level' => 75],
            ['name' => 'Git',          'level' => 80],
            ['name' => 'UI/UX Design', 'level' => 60],
        ],
        'certifications' => [
            ['name' => 'Oracle Cloud Foundations',        'note' => 'Oracle University',         'icon' => 'bi-cloud-check-fill'],
            ['name' => 'PHP and Laravel Web Development', 'note' => 'Online course certificate', 'icon' => 'bi-code-slash'],
            ['name' => 'Git and GitHub Essentials',       'note' => 'Online course certificate', 'icon' => 'bi-git'],
        ],
        'hobbies' => [
            ['name' => 'Photography',  'text' => 'Capturing everyday moments',   'icon' => 'bi-camera'],
            ['name' => 'Badminton',    'text' => 'Weekend games to stay active', 'icon' => 'bi-trophy'],
            ['name' => 'Reading',      'text' => 'Novels and tech blogs',        'icon' => 'bi-book'],
            ['name' => 'Cafe hopping', 'text' => 'Finding quiet places to code', 'icon' => 'bi-cup-hot'],
        ],
        'education' => [
            ['q' => 'Education',              'icon' => 'bi-mortarboard', 'a' => 'Bachelor of Computer Science (Software Engineering) at Universiti Malaysia Pahang Al-Sultan Abdullah, expected to graduate in 2027.'],
            ['q' => 'Highlights',             'icon' => 'bi-trophy',      'a' => 'I have built five web projects, including an event finder and a small online shop, using Laravel and MySQL.'],
            ['q' => 'What I like working on', 'icon' => 'bi-bullseye',    'a' => 'Business web apps, dashboards and APIs, from planning the database to deployment.'],
        ],
        'email'    => 'ainin@gmail.com',
        'phone'    => '+60 11-3381 8393',
        'social'   => ['linkedin' => '#', 'github' => '#', 'instagram' => '#'],
    ],

    // ===== Member 2 =====
    [
        'slug'     => 'huda',
        'nickname' => 'Huda',
        'initials' => 'NH',
        'name'     => 'Nurul Huda Binti Roslan',
        'ref'      => 'CA23046',
        'title'    => 'Network Engineer',
        'bio'      => 'I am a Computer Systems and Networking undergraduate who enjoys designing, configuring and troubleshooting networks. I am most comfortable with Cisco routing and switching and with reading packet captures to see what is really happening. I like building reliable networks that people never have to think about.',
        'focus'    => 'Bachelor of Computer Science (Computer Systems and Networking)',
        'location' => 'Universiti Malaysia Pahang Al-Sultan Abdullah',
        'projects' => 3,
        'skills' => [
            ['name' => 'Laravel',                    'level' => 58],
            ['name' => 'Cisco Routing and Switching', 'level' => 88],
            ['name' => 'Wireshark',                   'level' => 80],
            ['name' => 'Network Security',            'level' => 72],
            ['name' => 'Linux Administration',        'level' => 66],
            ['name' => 'Python Scripting',            'level' => 62],
        ],
        'certifications' => [
            ['name' => 'Cisco Introduction to Networks',                   'note' => 'Cisco Networking Academy', 'icon' => 'bi-diagram-3-fill'],
            ['name' => 'Cisco Switching, Routing and Wireless Essentials', 'note' => 'Cisco Networking Academy', 'icon' => 'bi-router-fill'],
        ],
        'hobbies' => [
            ['name' => 'Gaming',   'text' => 'Strategy and co-op games',      'icon' => 'bi-controller'],
            ['name' => 'Home lab', 'text' => 'Tinkering with spare hardware', 'icon' => 'bi-motherboard'],
            ['name' => 'Cycling',  'text' => 'Evening rides around town',     'icon' => 'bi-bicycle'],
        ],
        'education' => [
            ['q' => 'Education',              'icon' => 'bi-mortarboard', 'a' => 'Bachelor of Computer Science (Computer Systems and Networking) at Universiti Malaysia Pahang Al-Sultan Abdullah, expected to graduate in 2027.'],
            ['q' => 'Highlights',             'icon' => 'bi-trophy',      'a' => 'I have configured multi-VLAN network designs with inter-VLAN routing and tested them in Cisco Packet Tracer.'],
            ['q' => 'What I like working on', 'icon' => 'bi-bullseye',    'a' => 'Network design, traffic analysis and troubleshooting connectivity problems.'],
        ],
        'email'    => 'huda@gmail.com',
        'phone'    => '+60 12-902 4367',
        'social'   => ['linkedin' => '#', 'github' => '#', 'instagram' => '#'],
    ],

    // ===== Member 3 =====
    [
        'slug'     => 'aisyah',
        'nickname' => 'Aisyah',
        'initials' => 'NA',
        'name'     => "Nurul 'Aisyah Binti Haironasir",
        'ref'      => 'CA23014',
        'title'    => 'Network and Security Specialist',
        'bio'      => 'I am a Computer Systems and Networking undergraduate focused on keeping networks and servers secure. I enjoy hardening Linux systems, working with cloud networking on AWS and writing small Python tools. I like finding weak points before anyone else does.',
        'focus'    => 'Bachelor of Computer Science (Computer Systems and Networking)',
        'location' => 'Universiti Malaysia Pahang Al-Sultan Abdullah',
        'projects' => 3,
        'skills' => [
            ['name' => 'Laravel',                   'level' => 60],
            ['name' => 'Network Security',            'level' => 86],
            ['name' => 'Linux Administration',        'level' => 82],
            ['name' => 'Cloud Networking (AWS)',      'level' => 74],
            ['name' => 'Wireshark',                   'level' => 72],
            ['name' => 'Python Scripting',            'level' => 70],
        ],
        'certifications' => [
            ['name' => 'AWS Cloud Practitioner',         'note' => 'Amazon Web Services',      'icon' => 'bi-cloud-fill'],
            ['name' => 'Cisco Cybersecurity Essentials', 'note' => 'Cisco Networking Academy', 'icon' => 'bi-shield-lock-fill'],
            ['name' => 'Linux Essentials',               'note' => 'Cisco Networking Academy', 'icon' => 'bi-terminal-fill'],
        ],
        'hobbies' => [
            ['name' => 'Cooking',  'text' => 'Trying recipes at home',         'icon' => 'bi-egg-fried'],
            ['name' => 'Hiking',   'text' => 'Weekend trails and fresh air',   'icon' => 'bi-tree'],
            ['name' => 'Podcasts', 'text' => 'Cybersecurity and tech stories', 'icon' => 'bi-headphones'],
            ['name' => 'Chess',    'text' => 'Planning a few moves ahead',     'icon' => 'bi-puzzle'],
        ],
        'education' => [
            ['q' => 'Education',              'icon' => 'bi-mortarboard', 'a' => 'Bachelor of Computer Science (Computer Systems and Networking) at Universiti Malaysia Pahang Al-Sultan Abdullah, expected to graduate in 2027.'],
            ['q' => 'Highlights',             'icon' => 'bi-trophy',      'a' => 'I have secured a Linux web server with firewall rules and SSH hardening, and set up a small VPC on AWS.'],
            ['q' => 'What I like working on', 'icon' => 'bi-bullseye',    'a' => 'Network security, server hardening and automating routine checks with Python.'],
        ],
        'email'    => 'aisyah@gmail.com',
        'phone'    => '+60 19-278 5143',
        'social'   => ['linkedin' => '#', 'github' => '#', 'instagram' => '#'],
    ],

    // ===== Member 4 =====
    [
        'slug'     => 'faten',
        'nickname' => 'Faten',
        'initials' => 'FF',
        'name'     => 'Faten Fatehah Binti Salim',
        'ref'      => 'CB23068',
        'title'    => 'Mobile App Developer',
        'bio'      => 'I am a Software Engineering undergraduate who builds cross-platform mobile apps with Flutter. I care about smooth, friendly interfaces and enjoy polishing the small details that make an app pleasant to use every day.',
        'focus'    => 'Bachelor of Computer Science (Software Engineering)',
        'location' => 'Universiti Malaysia Pahang Al-Sultan Abdullah',
        'projects' => 4,
        'skills' => [
            ['name' => 'Laravel',     'level' => 70],
            ['name' => 'Flutter',      'level' => 85],
            ['name' => 'UI/UX Design', 'level' => 82],
            ['name' => 'JavaScript',   'level' => 74],
            ['name' => 'Git',          'level' => 72],
            ['name' => 'MySQL',        'level' => 68],
        ],
        'certifications' => [
            ['name' => 'Flutter Development Bootcamp', 'note' => 'Online course certificate', 'icon' => 'bi-phone-fill'],
            ['name' => 'Google UX Design Foundations', 'note' => 'Coursera',                  'icon' => 'bi-palette-fill'],
            ['name' => 'Responsive Web Design',        'note' => 'freeCodeCamp',              'icon' => 'bi-tablet-fill'],
        ],
        'hobbies' => [
            ['name' => 'Digital sketching', 'text' => 'Drawing characters and app ideas', 'icon' => 'bi-brush'],
            ['name' => 'Travelling',        'text' => 'Discovering new places',           'icon' => 'bi-airplane'],
            ['name' => 'Movies',            'text' => 'Weekend watch nights',             'icon' => 'bi-film'],
        ],
        'education' => [
            ['q' => 'Education',              'icon' => 'bi-mortarboard', 'a' => 'Bachelor of Computer Science (Software Engineering) at Universiti Malaysia Pahang Al-Sultan Abdullah, expected to graduate in 2027.'],
            ['q' => 'Highlights',             'icon' => 'bi-trophy',      'a' => 'I have built four Flutter and responsive web projects, each designed in Figma before development.'],
            ['q' => 'What I like working on', 'icon' => 'bi-bullseye',    'a' => 'Cross-platform mobile apps with animated, accessible interfaces.'],
        ],
        'email'    => 'faten@gmail.com',
        'phone'    => '+60 17-635 2084',
        'social'   => ['linkedin' => '#', 'github' => '#', 'instagram' => '#'],
    ],

];
