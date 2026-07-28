<!-- ARTICLE HEADER -->
<header class="article-header" style="padding-top: 90px;">
    <div class="article-header-inner">
        <a href="news.php" class="article-back-link">← Back to News &amp; Media</a>
        <div class="article-meta">
            <span class="article-tag article-tag-<?php echo strtolower($article['tag']); ?>"><?php echo $article['tag']; ?></span>
            <span class="article-date"><?php echo $article['date']; ?></span>
        </div>
        <h1 class="article-title"><?php echo $article['title']; ?></h1>
    </div>
</header>