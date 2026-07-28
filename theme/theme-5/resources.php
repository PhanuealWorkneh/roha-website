<?php 
// Page-specific data
$pageTitle = "Resources — Roha Medical Campus";
$activeNav = "news";

require 'header-home.php'; 
?>

<style>
<?php require './components/resources/resources.css'; ?>
</style>

<!-- Resources Components -->
<?php 
    include './components/resources/hero.php'; 
    include './components/resources/brand-assets.php'; 
    include './components/resources/policies.php'; 
    include './components/resources/press-kit.php'; 
?>

<?php require 'footer-home.php'; ?>