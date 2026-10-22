<?php

/*
 * Profile data for the whole site (no database). Read in views with config('team').
 *
 * SAMPLE CONTENT: names and slugs are real. Every other value in this file
 * (roles, bios, focus, skills and percentages, certifications, hobbies,
 * emails, phones, social links, project counts) is sample text that each
 * person MUST replace with their own details before the site is published.
 * Each person edits only their own block. 'ref' is kept for records only
 * and is never displayed on the website.
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
        'bio'      => 'I am a full stack developer who builds complete web applications from database to interface, with a focus on clean code and reliable delivery. I enjoy turning a rough idea into a product people actually use.',
        'focus'    => 'Web application development',
        'location' => 'Kuala Lumpur, Malaysia',
        'projects' => 4,
        'skills' => [
            ['name' => 'HTML & CSS',     'level' => 90],
            ['name' => 'JavaScript',     'level' => 75],
            ['name' => 'PHP & Laravel',  'level' => 80],
            ['name' => 'MySQL',          'level' => 70],
            ['name' => 'Collaboration',       'level' => 85],
        ],
        'certifications' => [
            ['name' => 'Web Development Fundamentals', 'note' => 'Professional certificate', 'icon' => 'bi-globe2'],
            ['name' => 'Cloud Computing Fundamentals', 'note' => 'Professional certificate', 'icon' => 'bi-cloud-check-fill'],
            ['name' => 'Database Design',              'note' => 'Professional certificate', 'icon' => 'bi-database-fill'],
        ],
        'hobbies' => [
            ['name' => 'Reading',     'text' => 'Exploring new ideas and stories', 'icon' => 'bi-book'],
            ['name' => 'Photography', 'text' => 'Capturing everyday moments',      'icon' => 'bi-camera'],
            ['name' => 'Hiking',      'text' => 'Enjoying nature and fresh air',   'icon' => 'bi-compass'],
            ['name' => 'Gaming',      'text' => 'Relaxing with friends',           'icon' => 'bi-controller'],
        ],
        'education' => [
            ['q' => 'Background',               'icon' => 'bi-mortarboard', 'a' => 'I am a computer science graduate with hands-on experience building web applications for clients and internal tools.'],
            ['q' => 'Highlights',               'icon' => 'bi-trophy',      'a' => 'I have delivered four projects end to end, from planning and design to deployment and support.'],
            ['q' => 'What I like working on',   'icon' => 'bi-bullseye',    'a' => 'Business web apps, dashboards and APIs built with PHP, Laravel and MySQL.'],
        ],
        'email'    => 'ainin@example.com',
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
        'title'    => 'UI/UX Designer',
        'bio'      => 'I am a UI/UX designer who creates simple, friendly interfaces and turns them into working prototypes. I care about how a product feels as much as how it looks.',
        'focus'    => 'Interface and experience design',
        'location' => 'Kuala Lumpur, Malaysia',
        'projects' => 3,
        'skills' => [
            ['name' => 'UI Design',     'level' => 85],
            ['name' => 'HTML & CSS',    'level' => 80],
            ['name' => 'JavaScript',    'level' => 65],
            ['name' => 'Figma',         'level' => 75],
            ['name' => 'Communication', 'level' => 88],
        ],
        'certifications' => [
            ['name' => 'UI Design Essentials',     'note' => 'Professional certificate', 'icon' => 'bi-palette-fill'],
            ['name' => 'Web Accessibility Basics', 'note' => 'Professional certificate', 'icon' => 'bi-universal-access'],
        ],
        'hobbies' => [
            ['name' => 'Drawing', 'text' => 'Sketching ideas and characters', 'icon' => 'bi-brush'],
            ['name' => 'Baking',  'text' => 'Trying out new recipes',         'icon' => 'bi-cup-hot'],
            ['name' => 'Music',   'text' => 'Listening while designing',      'icon' => 'bi-music-note-beamed'],
        ],
        'education' => [
            ['q' => 'Background',               'icon' => 'bi-mortarboard', 'a' => 'I am a design-focused developer with experience in user research, wireframing and high-fidelity prototyping.'],
            ['q' => 'Highlights',               'icon' => 'bi-trophy',      'a' => 'I have designed the interfaces for three shipped products, each tested with real users.'],
            ['q' => 'What I like working on',   'icon' => 'bi-bullseye',    'a' => 'Design systems, landing pages and mobile-first product interfaces.'],
        ],
        'email'    => 'huda@example.com',
        'phone'    => '+60 12-000 0002',
        'social'   => ['linkedin' => '#', 'github' => '#', 'instagram' => '#'],
    ],

    // ===== Member 3 =====
    [
        'slug'     => 'aisyah',
        'nickname' => 'Aisyah',
        'initials' => 'NA',
        'name'     => "Nurul 'Aisyah Binti Haironasir",
        'ref'      => 'CA23014',
        'title'    => 'Backend Developer',
        'bio'      => 'I am a backend developer who works on the data and server side of products, making sure they are fast, secure and dependable. I like solving the problems users never have to see.',
        'focus'    => 'APIs, databases and server logic',
        'location' => 'Kuala Lumpur, Malaysia',
        'projects' => 4,
        'skills' => [
            ['name' => 'MySQL',           'level' => 85],
            ['name' => 'PHP & Laravel',   'level' => 75],
            ['name' => 'Python',          'level' => 70],
            ['name' => 'Git',             'level' => 72],
            ['name' => 'Problem Solving', 'level' => 82],
            ['name' => 'Collaboration',        'level' => 80],
        ],
        'certifications' => [
            ['name' => 'Database Design',          'note' => 'Professional certificate', 'icon' => 'bi-database-fill'],
            ['name' => 'Python Programming',       'note' => 'Professional certificate', 'icon' => 'bi-code-slash'],
            ['name' => 'Version Control with Git', 'note' => 'Professional certificate', 'icon' => 'bi-git'],
        ],
        'hobbies' => [
            ['name' => 'Reading', 'text' => 'Exploring new ideas and stories', 'icon' => 'bi-book'],
            ['name' => 'Cooking', 'text' => 'Making meals for family',         'icon' => 'bi-egg-fried'],
            ['name' => 'Walking', 'text' => 'Clearing the mind outdoors',      'icon' => 'bi-tree'],
            ['name' => 'Puzzles', 'text' => 'Logic games and brain teasers',   'icon' => 'bi-puzzle'],
        ],
        'education' => [
            ['q' => 'Background',               'icon' => 'bi-mortarboard', 'a' => 'I am a backend engineer with experience designing relational databases and REST APIs.'],
            ['q' => 'Highlights',               'icon' => 'bi-trophy',      'a' => 'I have built and maintained the backends for four projects, including data migrations and integrations.'],
            ['q' => 'What I like working on',   'icon' => 'bi-bullseye',    'a' => 'Performance tuning, secure authentication and clean data models.'],
        ],
        'email'    => 'aisyah@example.com',
        'phone'    => '+60 12-000 0003',
        'social'   => ['linkedin' => '#', 'github' => '#', 'instagram' => '#'],
    ],

    // ===== Member 4 =====
    [
        'slug'     => 'faten',
        'nickname' => 'Faten',
        'initials' => 'FF',
        'name'     => 'Faten Fatehah Binti Salim',
        'ref'      => 'CB23068',
        'title'    => 'Mobile Developer',
        'bio'      => 'I am a mobile developer who builds responsive apps that feel smooth on any screen size. I enjoy polishing the small details that make an app pleasant to use every day.',
        'focus'    => 'Mobile and responsive front end',
        'location' => 'Kuala Lumpur, Malaysia',
        'projects' => 3,
        'skills' => [
            ['name' => 'JavaScript', 'level' => 80],
            ['name' => 'Bootstrap',  'level' => 85],
            ['name' => 'Flutter',    'level' => 60],
            ['name' => 'HTML & CSS', 'level' => 88],
        ],
        'certifications' => [
            ['name' => 'Responsive Web Design', 'note' => 'Professional certificate', 'icon' => 'bi-phone-fill'],
            ['name' => 'Mobile App Development', 'note' => 'Professional certificate', 'icon' => 'bi-tablet-fill'],
        ],
        'hobbies' => [
            ['name' => 'Travelling', 'text' => 'Discovering new places',      'icon' => 'bi-airplane'],
            ['name' => 'Movies',     'text' => 'Weekend watch parties',       'icon' => 'bi-film'],
            ['name' => 'Badminton',  'text' => 'Staying active with friends', 'icon' => 'bi-trophy'],
        ],
        'education' => [
            ['q' => 'Background',               'icon' => 'bi-mortarboard', 'a' => 'I am a front-end and mobile developer with experience shipping cross-platform apps.'],
            ['q' => 'Highlights',               'icon' => 'bi-trophy',      'a' => 'I have delivered three responsive web and mobile projects used across phones, tablets and desktops.'],
            ['q' => 'What I like working on',   'icon' => 'bi-bullseye',    'a' => 'Cross-platform apps, progressive web apps and animated, accessible interfaces.'],
        ],
        'email'    => 'faten@example.com',
        'phone'    => '+60 12-000 0004',
        'social'   => ['linkedin' => '#', 'github' => '#', 'instagram' => '#'],
    ],

];
