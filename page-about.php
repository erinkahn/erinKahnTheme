<?php 
/**
Template Name: About
**/

$page_id = 'page about'; 
$page_title = '';
require 'header.php';
?>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : 
    the_post(); 
?>

<div class="site-container aboutPage">
    <div class="flex-container" style="overflow-x: hidden;">
        <div class="row flex">
            <div class="col-lg-6 leftSide">

           

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