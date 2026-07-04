<?php 
// Page-specific data
$pageTitle = "Press Release — Roha Medical Campus";
$activeNav = "news";

require 'header-home.php'; 
?>

<style>
<?php require './components/common/news.css'; ?>
</style>

<!-- Press Release Components -->
<?php 
    include './components/common/press-release-hero.php'; 
    include './components/common/press-release-body.php'; 
    include './components/common/press-release-more.php'; 
?>

<?php require 'footer-home.php'; ?>