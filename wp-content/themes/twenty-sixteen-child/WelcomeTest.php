<?php /* Template Name: WelcomeTest */ ?>

<?php get_header(); ?>

<div id="primary" class="site-content-fullwidth">
        <main id="main" class="site-main" role="main">
                                <?php
                                // Start the loop.
                             //   while ( have_posts() ) : the_post();

                                                // Include the page content template.
                                             //   get_template_part( 'template-parts/content', 'page' );

                                              
                              // endwhile;
                                ?>
        <p class="welcometext"><strong>Tip of the day:</strong> <?php echo do_shortcode( '[tip]' ); ?></p>
        <p class="welcometext">Welcome to the test of Nandan Global </p>
        <p class="welcometext">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
        
        <div class="contentHolder">
        <div class="p_img"><img src="https://shrirambattery.com/wp-content/uploads/2023/11/Hello-Guide.jpg" alt="Hello Guide" /></div>
        <div class="txtHolder">
        <h2> Hello Guide </h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        </div>
        <div class="Btn">Start ></div>
        </div>
        
        <div class="contentHolder">
        <div class="p_img"><img src="https://shrirambattery.com/wp-content/uploads/2023/11/My-Store.jpg" alt=" My Store" /></div>
        <div class="txtHolder">
        <h2> My Store </h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        </div>
        <div class="Btn">Start ></div>
        </div>
        
        <div class="contentHolder">
        <div class="p_img"><img src="https://shrirambattery.com/wp-content/uploads/2023/11/The-Guide.jpg" alt="The Guide" /></div>
        <div class="txtHolder">
        <h2> The Guide </h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        </div>
        <div class="Btn">Start ></div>
        </div>
        
        <div class="contentHolder">
        <div class="p_img"><img src="https://shrirambattery.com/wp-content/uploads/2023/11/The-Quiz.png" alt="The Quiz" /></div>
        <div class="txtHolder">
        <h2> Quiz! </h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        </div>
        <div class="Btn">Start ></div>
        </div>

                </main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>