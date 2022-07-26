<?php
get_header();
global $wp_query;
?>

<section class='hero'>
    <div class='container'>
        <div class='container-front'>
            <div class='images-wrapper'>
                <img src='https://s3-alpha-sig.figma.com/img/39ce/db18/1f7bc2dd757e6c08f7c2f85482fd1bbe?Expires=1659312000&Signature=abF1mGUd2rMg5cd~xi-YNi6rOwUFzePD4NELg38Ylg~BtQWvl1VSuGgjHaKQ-eNGuIfp1~tQFkD52l4itNvxDdliZ7KObsq~AQI-k1~GrIhmtToGktVBBKv9F8Lzsekc~~VH6Vjmo-CsGiso2sxbExWNnj~sJ2MKFQ~qc5YXa~yGj3Mwyxn~oep48BuYXu~vlERqG6DZyriaCLeMGmSXekJFFcrWEzZGW9QLsjlGVjJ1yVXQXohmQTNQOCqGL78dtf9rxNq-cCTtM51zjN9ikJ2QoPJcCZx2hI2~-S8O-jsFogL3cHM2M2PycpGWMcA6BhVsmfyrlQQZ-8qKqAiNHA__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
                    alt=''>
                <div class='img-behind'>
                    <img src='https://s3-alpha-sig.figma.com/img/7453/653f/72013f6a3aa4d00a5ab0c52d2d1b3029?Expires=1659312000&Signature=SYnAzxSUzdGO0szx-2aHcLiV9PfPcWHjr83h-n--1rScUrGmQ~-9~eldTCsF58ZuD7x6eqBgWiDuqgZ1vz5gUj45iNdujGUdjZJj8xvqjKV2BEImx~Se7lz4RnT6HuAkgJgg1hV0XS0oHKclmkA11aKx~MzzNdHbU00dXkgvDyYNhp8ndAQmtGkLGZOXEIr9gH1En-D4wfnRzyflgflRN1qduEITY13EIcntXjyPlJutm6dcNxklk8HeTVse5rLK6xpHkOyGQtcfpr~Ysyf3~Oc56Wbl6hJE4LND55XtnOaLlfg1OS0eP5DFK8dC9ElSwoE8BVnvza-TGnXx2DI1xg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
                        alt=''>
                </div>
            </div>
            <div class='content'>
                <p class='heading-sm'>Introducing</p>
                <h2 class='heading'>Mad hatters, </br>
                    <span class='inner-line'>
                        <span><sup>b</sup>/<sub>c</sub></span>
                        style matters
                    </span>
                </h2>
                <button class='hero-btn'>
                    <span>
                        Learn more
                    </span>
                    <div class='shadow'></div>
                </button>
            </div>
        </div>
        <div class='container-bg'>
            <div class='outer'></div>
        </div>
    </div>
</section>

<section class='usps'>
    <div class='container'>
        <ul>
            <?php
$uspsItems = new WP_Query( array(
    'posts_per_page' => 3,
    'post_type' => 'usps'
) );

while( $uspsItems->have_posts() ) {
    $uspsItems->the_post();
    ?>

            <li>
                <div class='usps-item'>
                    <header class='header'>
                        <div class='decoration'>
                            <svg width='9' height='9' viewBox='0 0 9 9' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <g opacity='0.3'>
                                    <circle cx='1.5' cy='1.5' r='1.5' fill='#23242C' />
                                    <circle cx='1.5' cy='7.5' r='1.5' fill='#23242C' />
                                    <circle cx='7.5' cy='1.5' r='1.5' fill='#23242C' />
                                    <circle cx='7.5' cy='7.5' r='1.5' fill='#23242C' />
                                </g>
                            </svg>
                        </div>
                        <h3 class='heading'><?php the_title() ?></h3>
                    </header>
                    <div class='content'>
                        <p><?php the_content() ?></p>
                    </div>
                </div>
            </li>

            <?php
}
?>

        </ul>
    </div>
</section>

<section class='advertise'>
    <div class='container'>
        <div class='image-section'></div>
        <div class='content-section'>
            <p class='heading-sm'>Become sexy</p>
            <h2 class='heading'>Mad love</br> for fire</br> headwear</h2>
            <button class='hero-btn'>
                <span>
                    Learn more
                </span>
                <div class='shadow'></div>
            </button>
        </div>
    </div>
</section>

<section class='our-range'>
    <div class='container'>
        <header class='header'>
            <p class='heading-sm'>Hat's that bring the fire</p>
            <h2 class='heading'>Our Range</h2>
        </header>
        <ul class='card-list'>
            <?php 

                $cardItems = new WP_Query( array(
                    'posts_per_page' => 4,
                    'post_type' => 'cards'
                ));
                
                while($cardItems->have_posts()){
                    $cardItems->the_post();
            ?>

            <li class='card-list-item'>
                <div class='card'>
                    <div class='image-section' style='background-image: url( " <?php the_field('card-image'); ?>"' );>
                    </div>
                    <div class=' content'>
                        <h3 class='card-title'><?php the_title(); ?></h3>
                        <p class='card-text'><?php echo get_the_excerpt(); ?></p>
                    </div>
                </div>
            </li>




            <?php
            }

            ?>
        </ul>
        <div class='show-more'>
            <p class='show-more-text'>+ Show more</p>
            <p class='show-more-shadow-text'>More</p>
        </div>
    </div>
</section>

<section class='quotation'>
    <div class='container'>
        <h2 class='heading'><span class='heading1'>In quoting </span><span class='heading2'>others we cite
            </span><span class='heading3'>ourselves</span></h2>
        <div class='inner'>
            <div class='outer'>
            </div>
        </div>
    </div>
</section>

<section class='newsletter'>
    <div class='container'>
        <header class='header'>
            <p class='heading-sm'>Keep up-to-date on us</p>
            <h2 class='heading'>Newsletter</h2>
        </header>
        <div class='content'>
            <input type='text' placeholder='Enter your email'>
            <button class='newsletter-btn'><span>Submit</span>
                <div class='shadow'></div>
            </button>
        </div>
    </div>
</section>

<?php get_footer();
?>