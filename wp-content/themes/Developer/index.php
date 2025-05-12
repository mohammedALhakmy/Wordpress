<?php echo get_header();?>

<div class="container">
    <div class="row">
        <?php
        if(have_posts()){
            while (have_posts()){
                the_post();
                ?>
                    <div class="col-sm-6">
                        <div class="main-post">
                            <h3 class="post-title">
                                <a href="<?php the_permalink();?>">
                                    <?php the_title()?>
                                </a>
                            </h3>
                            <span class="post-author">
                                <i class="fa fa-user fa-fw"></i><?php the_author_posts_link();?>,
                            </span>
                            <span class="post-date">
                                <i class="fa fa-calendar fa-fw"></i><?php the_time('F j, Y');?>,
                            </span>
                            <span class="post-comments">
                                <i class="fa fa-comments-o fa-fw"></i>
                                <?php comments_popup_link('0 Comment','1 Comment','% Comments','comment-url','Comment Disable');?>
                            </span>
                                <?php the_post_thumbnail('',['class'=>'img-responsive img-thumbnail','title' => 'Post Image']);?>
                            <hr>
                            <p class="categories">
                                <i class="fa fa-tags fa-fw fa-lg"></i>
                                <?php the_category(', ');?>
                            </p>
<!--                            --><?php //the_title('<h3 class="post-title">','</h3>')?>
                        </div>
                    </div>
                    <?php
                the_title();
            }
        }
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="main-post">
                <p class="post-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

            </div>
        </div>

    </div>
</div>

<?php echo get_footer();
