<?php
// Centralized Site Configuration & Dynamic Data

$siteConfig = [
    'name' => 'Webryakt',
    'title' => 'Webryakt. — Web Design & Digital Marketing Agency',
    'tagline' => 'Corporate Creativity. Intelligent Growth.',
    'description' => 'We blend strategy, creativity and technology to build digital experiences that drive results for ambitious brands.',
    'email' => 'hello@webryakt.in',
    'phone' => '+91 88765 43210',
    'location' => 'Indore, India',
    'coords' => [
        'lat' => '22.5726° N',
        'lng' => '88.3639° E'
    ],
    'social' => [
        'linkedin' => '#',
        'instagram' => '#',
        'dribbble' => '#',
        'behance' => '#'
    ]
];

$navItems = [
    ['label' => 'Work', 'url' => 'work.php', 'key' => 'work'],
    ['label' => 'Services', 'url' => 'services.php', 'key' => 'services'],
    ['label' => 'About', 'url' => 'about.php', 'key' => 'about'],
    ['label' => 'Insights', 'url' => 'insights.php', 'key' => 'insights'],
    ['label' => 'Contact', 'url' => 'contact.php', 'key' => 'contact']
];

$services = [
    [
        'id' => '01',
        'slug' => 'web-design',
        'title' => 'Web Design',
        'desc' => 'Beautiful, fast and responsive websites that convert visitors into customers.',
        'short_desc' => 'Beautiful, fast and responsive websites that convert visitors into customers.',
        'overview' => 'We design and build fast, responsive websites that turn visitors into customers — grounded in your brand, written for your audience, and engineered to convert.',
        'icon' => '<svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><path d="M7 8h10M7 12h5"/></svg>',
        'tags' => ['UX & UI Design', 'Webflow & Custom Build', 'Design Systems', 'Conversion Optimization']
    ],
    [
        'id' => '02',
        'slug' => 'digital-marketing',
        'title' => 'Digital Marketing',
        'desc' => 'Data-driven strategies that increase visibility, generate leads and drive growth.',
        'short_desc' => 'Data-driven strategies that increase visibility, generate leads and drive growth.',
        'overview' => 'Data-driven strategy across paid, search and social — built to increase visibility, generate qualified leads and compound growth month over month.',
        'icon' => '<svg viewBox="0 0 24 24"><path d="M11 5L6 9H2v6h4l5 4V5z"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14"/></svg>',
        'tags' => ['Paid Media', 'Content Strategy', 'Email & CRM', 'Marketing Automation']
    ],
    [
        'id' => '03',
        'slug' => 'branding',
        'title' => 'Branding',
        'desc' => 'Strong brands that connect with people and stand out in the right way.',
        'short_desc' => 'Strong brands that connect with people and stand out in the right way.',
        'overview' => 'Strong, considered brand identities that connect with the right people and stand out for the right reasons — from naming to visual systems.',
        'icon' => '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>',
        'tags' => ['Brand Strategy', 'Identity Design', 'Naming', 'Brand Guidelines']
    ],
    [
        'id' => '04',
        'slug' => 'seo-analytics',
        'title' => 'SEO & Analytics',
        'desc' => 'Improve rankings, track performance and maximize your online presence.',
        'short_desc' => 'Improve rankings, track performance and maximize your online presence.',
        'overview' => 'Technical and content SEO paired with clear reporting, so you always know what\'s working, what isn\'t, and what to fix next.',
        'icon' => '<svg viewBox="0 0 24 24"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>',
        'tags' => ['Technical SEO', 'Content SEO', 'Analytics Setup', 'Performance Reporting']
    ]
];

$projects = [
    [
        'id' => 1,
        'title' => 'Next-gen platform for a global leader',
        'category' => 'Technology',
        'category_slug' => 'technology',
        'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=600&q=80',
        'alt' => 'Modern glass office building at dusk',
        'overlay' => 'dark'
    ],
    [
        'id' => 2,
        'title' => 'Luxury living, redefined',
        'category' => 'Real Estate',
        'category_slug' => 'real-estate',
        'image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=600&q=80',
        'alt' => 'Contemporary luxury house exterior',
        'overlay' => 'light'
    ],
    [
        'id' => 3,
        'title' => 'Digital care for a better tomorrow',
        'category' => 'Healthcare',
        'category_slug' => 'healthcare',
        'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=600&q=80',
        'alt' => 'Bright minimal healthcare lounge',
        'overlay' => 'muted'
    ],
    [
        'id' => 4,
        'title' => 'Sustainable living, beautifully crafted',
        'category' => 'Lifestyle',
        'category_slug' => 'lifestyle',
        'image' => 'https://images.unsplash.com/photo-1538688525198-9b88f6f53126?auto=format&fit=crop&w=600&q=80',
        'alt' => 'Sustainable interior design',
        'overlay' => 'light'
    ],
    [
        'id' => 5,
        'title' => 'Data dashboard for a fintech scale-up',
        'category' => 'Technology',
        'category_slug' => 'technology',
        'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=600&q=80',
        'alt' => 'Team reviewing product dashboard',
        'overlay' => 'dark'
    ],
    [
        'id' => 6,
        'title' => 'Digital sales suite for a housing brand',
        'category' => 'Real Estate',
        'category_slug' => 'real-estate',
        'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80',
        'alt' => 'Interior of a modern apartment living room',
        'overlay' => 'muted'
    ]
];

$brands = [
    ['name' => 'zomato', 'class' => 'client-logo', 'html' => 'zomato', 'subtext' => ''],
    ['name' => 'SRISHTI GROUP', 'class' => 'client-logo srishti', 'html' => 'SRISHTI<span>GROUP</span>', 'subtext' => 'GROUP'],
    ['name' => 'CRED', 'class' => 'client-logo cred', 'html' => 'CRED', 'subtext' => ''],
    ['name' => 'ATHER', 'class' => 'client-logo ather', 'html' => 'ATHER', 'subtext' => ''],
    ['name' => 'zepto', 'class' => 'client-logo zepto', 'html' => 'zepto', 'subtext' => ''],
    ['name' => 'INDIE HOTELS', 'class' => 'client-logo indie', 'html' => 'INDIE<span>HOTELS</span>', 'subtext' => 'HOTELS']
];

$clientLogos = $brands;

$stats = [
    ['number' => '60+', 'label' => 'Projects shipped'],
    ['number' => '34', 'label' => 'Brands we\'ve grown'],
    ['number' => '8', 'label' => 'Years in business'],
    ['number' => '92%', 'label' => 'Client retention']
];

$values = [
    [
        'id' => '01',
        'title' => 'Strategy first',
        'desc' => 'Nothing gets designed until we understand what it needs to achieve for the business.'
    ],
    [
        'id' => '02',
        'title' => 'Craft over trend',
        'desc' => 'We chase what\'s right for the brand, not what\'s currently trending on design feeds.'
    ],
    [
        'id' => '03',
        'title' => 'Measured impact',
        'desc' => 'Every engagement is judged by results, not deliverables — visibility, leads, revenue.'
    ]
];

$processSteps = [
    [
        'id' => '01',
        'phase' => 'Discover',
        'title' => 'Research & strategy',
        'desc' => 'We learn your business, market and goals before a single pixel is placed.'
    ],
    [
        'id' => '02',
        'phase' => 'Design',
        'title' => 'Concept & craft',
        'desc' => 'We design experiences grounded in your brand and built for your audience.'
    ],
    [
        'id' => '03',
        'phase' => 'Build',
        'title' => 'Development',
        'desc' => 'Clean, performant builds that hold up on every device and connection.'
    ],
    [
        'id' => '04',
        'phase' => 'Grow',
        'title' => 'Launch & optimize',
        'desc' => 'We track, test and refine post-launch so results keep compounding.'
    ]
];

$insights = [
    [
        'id' => 1,
        'title' => 'Why design system investments pay off for scaling B2B brands',
        'category' => 'Strategy',
        'date' => 'Aug 12, 2026',
        'photo' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=600&q=80',
        'excerpt' => 'How unified component libraries accelerate launch speed while maintaining design consistency.'
    ],
    [
        'id' => 2,
        'title' => 'Optimizing conversion rates without sacrificing visual aesthetics',
        'category' => 'Web Design',
        'date' => 'Jul 28, 2026',
        'photo' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80',
        'excerpt' => 'Balancing brand identity with clear calls to action and frictionless user flows.'
    ],
    [
        'id' => 3,
        'title' => 'The modern SEO stack: Technical foundations for high organic growth',
        'category' => 'SEO & Analytics',
        'date' => 'Jun 19, 2026',
        'photo' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80',
        'excerpt' => 'Key site performance metrics and semantic architecture strategies that move rankings.'
    ]
];
