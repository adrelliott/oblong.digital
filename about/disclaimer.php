<?php 
    include('../partials/header.php');

    $masthead = [
        'image' => 'obl_home.png',
        'headline' => 'Disclaimer',
        'font-awesome' => 'fas fa-file-alt',
        'subhead' => 'We take your privacy very seriously here. If you have a question, please email help@oblongHQ.com'
,    ];
    include('../partials/masthead.php');

    include('../partials/navbar-empty.php');
?>
        <section class="page-section" id="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg12">
                        <?php
                            $output = file_get_contents('../../policies/disclaimer' . '.php');

	                        // Replace the placeholders
	                        echo str_replace("|*SITE_URL*|", "oblong.digital", $output);
                        ?>
                    </div>
                </div>
                <hr>
                <div class="text-center mt-5">
                    <p class="lead">Fed up with sending emails that just don't work? Let's have a chat...</p>
                    <a class="btn btn-xl btn-primary" href="/book"><i class="fas fa-phone-volume mr-2"></i>Talk to us!</a>
                </div>
            </div>
        </section>
    <?php include('../partials/footer-widget.php'); ?>  
 <?php include('../partials/footer.php'); ?> 