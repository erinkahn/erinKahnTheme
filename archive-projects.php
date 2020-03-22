<?php 
/**
Template Name: Work
**/

$page_id = 'page work'; 
$page_title = '';
require 'header.php';
?>



<div class="site-container workPage">
    <div class="flex-container" style="overflow-x: hidden;">
        <div class="row">
            <div class="col-lg-6 leftSide">

            </div>
            <div class="col-lg-6 rightSide">

            </div>
        </div>
    </div>
</div>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : 
    the_post(); 
?>


<?php 
endwhile; 
endif; ?>

<?php require 'footer.php'; ?>