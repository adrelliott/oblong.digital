<!-- Start of masthead -->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="assets/img/<?php echo $masthead['image']; ?>" alt="" /><!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0"><?php echo $masthead['headline']; ?></h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="<?php echo $masthead['font-awesome']; ?>"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <?php if ( $masthead['subhead'] ): ?>
                <p class="masthead-subheading font-weight-light mb-0"><?php echo $masthead['subhead']; ?></p>
            <?php endif; ?>
            </div>
        </header>
<!-- End of masthead -->