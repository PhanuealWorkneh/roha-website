<?php 
// Page-specific data
$pageTitle = "Gallery — Roha Medical Campus";
$activeNav = "news";

require 'header-home.php'; 
?>

<style>
<?php require './components/gallery/gallery.css'; ?>
</style>

<!-- Gallery Components -->
<?php 
    include './components/gallery/hero.php'; 
    include './components/gallery/filters.php'; 
    include './components/gallery/photos.php'; 
    include './components/gallery/videos.php'; 
    include './components/gallery/events.php'; 
    include './components/gallery/construction.php'; 
?>

<?php require 'footer-home.php'; ?>