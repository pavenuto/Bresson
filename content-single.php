<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <nav>
    <?php previous_post_link( '%link','<span class="meta-nav">&larr;</span> Previous'); ?>
    <?php next_post_link( '%link', 'Next <span class="meta-nav">&rarr;</span>' ); ?>
  </nav>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

    <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>

    <div class="entry">
      <?php the_content(); ?>
    </div>

    <p class="postmetadata">Posted in <?php the_category(', '); ?></p>

  </article>

  <?php comments_template( '', true ); ?>

<?php endwhile; else: ?>

  Sorry, no posts matched your criteria.

<?php endif; ?>

