<?php 
// Page-specific data
$pageTitle = "Press Release — Roha Medical Campus";
$activeNav = "news";

// Get release ID from URL parameter
$releaseId = isset($_GET['id']) ? $_GET['id'] : 'edge-certification';

// Release data array
$releases = [
    'edge-certification' => [
        'date' => 'November 27, 2024',
        'title' => "Ethiopia's First World Bank IFC-Accredited Green Hospital: Roha Medical Campus Sets New Standard in Sustainable Healthcare",
        'dateline' => 'Addis Ababa, Ethiopia — 26th November 2024',
        'paragraphs' => [
            "Roha Medical Campus (RMC), a $130 million multispecialty hospital under construction in Addis Ababa, has become the first healthcare development in Ethiopia accredited for sustainability under the International Finance Corporation's (IFC) EDGE program, a member of the World Bank Group.",
            "The certification recognizes the hospital's integrated 1MW solar energy network, smart water-saving fixtures, and Thermally Activated Building Structures (TABS) system — engineering choices made from the earliest design stages to minimize the campus's long-term environmental footprint.",
            "Surrounding the hospital, a 12,000-tree Miyawaki-method urban forest reinforces Roha's commitment to sustainable, restorative healthcare environments.",
            "Full release text coming soon — this is a placeholder built from the published excerpt; swap in the complete announcement once available."
        ]
    ],
    '42-million-injection' => [
        'date' => 'February 22, 2024',
        'title' => "Roha Medical Campus, a World-Class Hospital in Ethiopia, Gets $42 Million First Injection",
        'dateline' => 'Addis Ababa, Ethiopia — 22nd February 2024',
        'paragraphs' => [
            "Initial equity is part of a $130 million first-phase investment in Roha Medical Campus, placing Ethiopia on the $5 billion African medical tourism map with one of the continent's most significant healthcare developments.",
            "Africa's second-largest nation has an acute need for hospital capacity, with only a small fraction of demand for advanced specialty care currently met domestically.",
            "The investment accelerates construction of the Advanced Multispecialty Hospital, Roha's flagship 350-bed facility in Addis Ababa.",
            "Full release text coming soon — this is a placeholder built from the published excerpt; swap in the complete announcement once available."
        ]
    ],
    'ace-award' => [
        'date' => 'October 2, 2023',
        'title' => "Roha is Nominated for the 2023 US Secretary of State's Prestigious Global Award for Corporate Excellence (ACE)",
        'dateline' => 'Addis Ababa, Ethiopia — 2nd October 2023',
        'paragraphs' => [
            "On October 2nd, 2023, the US Embassy in Addis Ababa announced that Roha Group has been nominated for the 2023 Award for Corporate Excellence (ACE) in Innovation for developing Roha Medical Campus in Addis Ababa, Ethiopia.",
            "Roha Medical Campus will be a state-of-the-art, climate-friendly landmark hospital providing affordable and accessible healthcare to Ethiopians and patients from around the world.",
            "The nomination recognizes Roha's innovative approach to combining sustainable design with expanded access to specialty healthcare in the region.",
            "Full release text coming soon — this is a placeholder built from the published excerpt; swap in the complete announcement once available."
        ]
    ],
    'campus-launch' => [
        'date' => 'April 10, 2021',
        'title' => "Launch of Roha Medical Campus: a $300M Integrated, Multi-Facility Healthcare Development in Addis Ababa",
        'dateline' => 'Addis Ababa, Ethiopia — 10th April 2021',
        'paragraphs' => [
            "Roha Medical Campus PLC today announced the launch of a $300 million integrated healthcare campus in Addis Ababa, set to become an Ethiopian hub for medical tourism and high-quality care within a beautiful urban park.",
            "The launch took place in the presence of H.E. Dr. Abiy Ahmed, Prime Minister of Ethiopia; H.E. W/ro Adanech Abiebie, Deputy Mayor of Addis Ababa City; H.E. W/ro Alemtsehay Paulos, State Minister of Health of Ethiopia; Mr. Brooks Washington, Founder of Roha Group and CEO of Roha Medical Campus PLC; representatives of the U.S. Embassy, and members of the media.",
            "The campus marks one of the most significant private healthcare investments in Ethiopia's history.",
            "Full release text coming soon — this is a placeholder built from the published excerpt; swap in the complete announcement once available."
        ]
    ]
];

// Set release data or fallback to default
$release = isset($releases[$releaseId]) ? $releases[$releaseId] : $releases['edge-certification'];

require 'header-home.php'; 
?>

<style>
<?php require './components/common/single-press.css'; ?>
</style>

<!-- Single Press Release Components -->
<?php 
    include './components/common/press-header.php'; 
    include './components/common/press-body.php'; 
    include './components/common/press-more.php'; 
?>

<?php require 'footer-home.php'; ?>