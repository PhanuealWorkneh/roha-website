<?php 
// Page-specific data
$pageTitle = "ESG & Sustainability — Roha Medical Campus";
$activeNav = "esg";

require 'header-home.php'; 
?>

<style>
<?php require './components/esg/esg.css'; ?>
</style>

<!-- ESG Page Components -->
<?php 
    include './components/esg/hero.php'; 
    include './components/esg/intro.php'; 
    include './components/esg/objectives.php'; 
    include './components/esg/policy.php'; 
    include './components/esg/forest.php'; 
    include './components/esg/community.php'; 
    include './components/esg/safety.php'; 
    include './components/esg/disclosure.php'; 
?>

<?php require 'footer-home.php'; ?>