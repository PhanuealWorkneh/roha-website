<?php 
// Page-specific data
$pageTitle = "About Roha — Roha Medical Campus";
$activeNav = "about";

require 'header-home.php'; 
?>

<style>
<?php require './components/about/about.css'; ?>
</style>

<!-- About Page Components -->
<?php 
    include './components/about/hero.php'; 
    include './components/about/group.php'; 
    include './components/about/leadership.php'; 
    include './components/about/foundation.php'; 
?>

<?php require 'footer-home.php'; ?>