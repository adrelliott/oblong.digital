<?php 
    include('partials/header.php');

    $masthead = [
        'image' => '/book/call-me-256.png',
        'headline' => 'Book a Consultation',
        'font-awesome' => 'fas fa-phone-volume',
        'subhead' => '<i class="fas fa-arrow-down fa-5x mt-5"></i>'
,    ];
    include('partials/masthead.php');

    include('partials/navbar-empty.php');
?>
        <section class="page-section " id="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <img src="assets/img/book/al-hello-3_tiny.gif">
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <h2>Fancy a chat?</h2>
                        <p>Just choose the best option for you below to see my schedule:</p>
                        <ul class="list-unstyled">
                            <li class=" mb-3">
                                <h3 class="mb-3">
                                    <a class="lead" href="/book-zoom">
                                        <i class="fas fa-lg fa-video mr-2"></i>
                                        I use Zoom ‘cos I'm cool AF...
                                    </a>
                                </h3>
                            </li>
                            <li class=" mb-3">
                                <h3 class="mb-3">
                                    <a class="lead" href="/book-skype">
                                        <i class="fab fa-lg fa-skype mr-2"></i>
                                        I use Skype ‘cos I'm old school...
                                    </a>
                                </h3>
                            </li>
                            <li class=" mb-3">
                                <h3 class="mb-3">
                                    <a class="lead" href="/book-phone">
                                        <i class="fas fa-lg fa-phone-square-alt mr-2"></i>
                                        I use the telephone ‘cos I'm not a nerd...
                                    </a>
                                </h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
 <?php include('partials/footer.php'); ?> 