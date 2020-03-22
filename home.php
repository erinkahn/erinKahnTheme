<?php 
/**
Template Name: Home
**/

$page_id = 'page home'; 
$page_title = '';
require 'header.php';
?>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : 
    the_post(); 
?>

<div class="site-container workPage">
    <div class="flex-container" style="overflow-x: hidden;">
        <div class="row flex">
            <div class="col-lg-6 leftSide">
                <div class="slider-container">
                    <div class="slider">
                        <div><img src="assets/img/" alt=""></div>
                        <div><img src="assets/img/" alt=""></div>
                        <div><img src="assets/img/" alt=""></div>
                        <div><img src="assets/img/" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 rightSide">

            </div>
        </div>
    </div>
</div>

<?php 
endwhile; 
endif; ?>


<?php require 'footer.php'; ?>