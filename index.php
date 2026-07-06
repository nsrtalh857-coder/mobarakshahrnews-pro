<?php get_header(); ?>

<div class="container news-grid">

<div class="main">
<h2>Latest News</h2>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="card">
<a href="<?php the_permalink(); ?>">
<h3><?php the_title(); ?></h3>
</a>
<p><?php echo wp_trim_words(get_the_excerpt(),20); ?></p>
</div>
<?php endwhile; endif; ?>

</div>

<aside>
<?php get_sidebar(); ?>
</aside>

</div>

<?php get_footer(); ?>
