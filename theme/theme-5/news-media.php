<?php 
// Page-specific data
$pageTitle = "News & Media — Roha Medical Campus";
$activeNav = "News";

require 'header-home.php'; 
?>

<style>
<?php require './components/news-media/news.css'; ?>
</style>

<!-- news-media & Media Page Components -->
<?php 
    include './components/news-media/hero.php'; 
    include './components/news-media/featured.php'; 
    include './components/news-media/grid.php'; 
    include './components/news-media/archive.php'; 
    include './components/news-media/gallery.php'; 
    include './components/news-media/newsletter.php'; 
?>

<?php require 'footer-home.php'; ?>