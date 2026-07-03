<?php 
// Page-specific data
$pageTitle = "Contact Us — Roha Medical Campus";
$activeNav = "contact";

require 'header-home.php'; 
?>

<style>
<?php require './components/contact/contact.css'; ?>
</style>

<!-- Contact Page Components -->
<?php 
    include './components/contact/hero.php'; 
    include './components/contact/details.php'; 
    include './components/contact/form.php'; 
    include './components/contact/newsletter.php'; 
?>

<?php require 'footer-home.php'; ?>