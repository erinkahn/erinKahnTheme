<?php 
/**
Template Name: 404
**/

$page_id = 'page notfound'; 
$page_title = '';
require 'header.php';
?>


<div class="site-container notFound">
    <div class="flex-container" style="overflow-x: hidden;">
        <div class="row">
            <div class="col-lg-6 leftSide">
                <h1>Page Not Found</h1>
            </div>
            <div class="col-lg-6 rightSide">
                <p>Please check your URL and try again.</p>
            </div>
        </div>
    </div>
</div>




<?php require 'footer.php'; ?>