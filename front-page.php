<?php get_header(); ?>
<main>
    <div class="container">
        <?php $categories = get_categories();
        foreach ($categories as $category):
            echo '<div class="row"><h2>' . $category->name . '</h2></div>';
            $args = array('posts_per_page' => 3, 'category' => $category->id);
            $posts = get_posts($args); foreach ($posts as $post):
                setup_postdata($post); ?>
        <article>
            <div class="content">
                <div class="content-meta">
                    <span class="category">
                        <?= $category->name; ?>
                    </span>
                    <span class="postdate"><?= get_the_date(); ?></span>
                    <!-- <span class="postdate">AUGUST 13, 2021</span> -->
                </div>
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p>Redefined the user acquisition and redesigned the onboarding experience, all within 3 working
                    weeks.</p>
            </div>
            <?= the_post_thumbnail(); ?>
        </article>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</main>

<?php get_footer(); ?>