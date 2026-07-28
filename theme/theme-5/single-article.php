<?php 
// Page-specific data
$pageTitle = "News Article — Roha Medical Campus";
$activeNav = "news";

// Get article ID from URL parameter
$articleId = isset($_GET['id']) ? $_GET['id'] : 'green-buildings';

// Article data array
$articles = [
    'green-buildings' => [
        'tag' => 'News',
        'date' => 'November 2024',
        'title' => 'A Deep Dive with Yenework Tsegaye on Green Buildings',
        'imageCaption' => 'The Advanced Multispecialty Hospital, Bole district',
        'paragraphs' => [
            'Situated in the prominent Bole district in Addis Ababa, a new landmark is taking shape — the Advanced Multispecialty Hospital by Roha Health.',
            'This state-of-the-art facility is poised to be one of the region\'s most environmentally responsible hospitals, engineered around green-building principles from the ground up rather than retrofitted after the fact.',
            'In this feature, Yenework Tsegaye discusses how the design team balanced ambitious sustainability targets — including EDGE certification — with the practical realities of building a large-scale hospital in Addis Ababa.',
            'Full interview coming soon — this is a placeholder summary based on the published excerpt; swap in the complete article text once available.'
        ]
    ],
    'humphrey-visit' => [
        'tag' => 'News',
        'date' => '2024',
        'title' => 'Mr. John Humphrey Visits the Campus',
        'imageCaption' => 'Delegate site visit, Roha Medical Campus',
        'paragraphs' => [
            'Our distinguished guest witnessed the progress of our Advanced Multi-Specialty Hospital, built to international standards and incorporating innovative construction techniques and environmental features that are new to Ethiopia.',
            'Mr. Humphrey commended the project\'s potential to transform healthcare in Africa through affordable, high-quality care delivered from a sustainably built campus.',
            'The visit underscored the growing international interest in Roha Medical Campus as a model for future healthcare development across the region.',
            'Full write-up coming soon — this is a placeholder summary based on the published excerpt; swap in the complete article text once available.'
        ]
    ],
    'environmental-clearance' => [
        'tag' => 'News',
        'date' => '2023',
        'title' => 'Roha Medical Campus Obtains Environmental Clearance Certificate',
        'imageCaption' => 'Environmental review, Roha Medical Campus',
        'paragraphs' => [
            'Roha aims to be the leading responsible healthcare provider in the region and break barriers for others to follow suit.',
            'We focus on matters that are meaningful to our stakeholders — patients, employees, and the wider community — and the Environmental Clearance Certificate marks another milestone in building a campus that meets the highest environmental standards from day one.',
            'This clearance supports the broader ESG commitments Roha has made across the construction and future operation of the campus.',
            'Full write-up coming soon — this is a placeholder summary based on the published excerpt; swap in the complete article text once available.'
        ]
    ],
    'campus-launch' => [
        'tag' => 'News',
        'date' => 'April 10, 2021',
        'title' => 'Launch of Roha Medical Campus',
        'imageCaption' => 'Launch ceremony, Addis Ababa',
        'paragraphs' => [
            'Launch of Roha Medical Campus: a $300M integrated, multi-facility healthcare development in Addis Ababa. Roha Medical Campus is set to become an Ethiopian hub for medical tourism and high-quality care within a beautiful urban park.',
            'April 10, 2021, Addis Ababa — Roha Medical Campus PLC today announced the launch of a $300 million integrated healthcare campus in Addis Ababa.',
            'The launch took place in the presence of H.E. Dr. Abiy Ahmed, Prime Minister of Ethiopia; H.E. W/ro Adanech Abiebie, Deputy Mayor of Addis Ababa City; H.E. W/ro Alemtsehay Paulos, State Minister of Health of Ethiopia; Mr. Brooks Washington, Founder of Roha Group and CEO of Roha Medical Campus PLC; representatives of the U.S. Embassy, and members of the media.',
            'Full write-up coming soon — this is a placeholder summary based on the published excerpt; swap in the complete article text once available.'
        ]
    ]
];

// Set article data or fallback to default
$article = isset($articles[$articleId]) ? $articles[$articleId] : $articles['green-buildings'];

require 'header-home.php'; 
?>

<style>
<?php require './components/common/single-article.css'; ?>
</style>

<!-- Single Article Components -->
<?php 
    include './components/common/article-header.php'; 
    include './components/common/article-image.php'; 
    include './components/common/article-body.php'; 
    include './components/common/article-more.php'; 
?>

<?php require 'footer-home.php'; ?>