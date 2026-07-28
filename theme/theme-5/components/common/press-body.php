<!-- RELEASE BODY -->
<section class="press-body">
    <div class="press-body-inner">
        <div class="press-dateline"><?php echo $release['dateline']; ?></div>

        <?php foreach ($release['paragraphs'] as $p): ?>
            <p class="press-paragraph"><?php echo $p; ?></p>
        <?php endforeach; ?>

        <div class="press-about">
            <div class="press-about-label">About Roha Medical Campus</div>
            <p>Roha Medical Campus is an integrated health campus under development in the heart of Addis Ababa, Ethiopia, providing world-class, high-quality, affordable healthcare. It is being developed by Roha Group, an investment firm that responsibly builds companies in Africa.</p>
        </div>

        <div class="press-media-contact">
            <div class="press-media-contact-label">Media Contact</div>
            <a href="mailto:media@rohamedicalcampus.com" class="press-media-contact-email">media@rohamedicalcampus.com</a>
        </div>
    </div>
</section>