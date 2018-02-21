
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
             <?php foreach ($shows as $key=>$value): 
                        if($key===0){
                            echo '<li data-target="#carousel-example-generic" data-slide-to="'.$key.'"class="active"></li>';
                        } else{
                            echo  '<li data-target="#carousel-example-generic" data-slide-to="'.$key.'"></li>';
                        }
                        endforeach; ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
             <?php foreach ($shows as $key=>$value): 
                        if($key===0){
                            echo '<div class="item active">';
                        } else{
                            echo  '<div class="item">';
                        }
                        ?>
                 <div class="fill" style="background-image:url('<?php echo $value['picture']; ?>');"></div>
                 <div class="carousel-caption">
                    <h2><?php echo $value['title']; ?></h2>
                </div>
            </div>
             <?php endforeach; ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">
        <!--Show Icons Section-->
        <div class="row section-wrap">
            <div class="col-lg-12 text-center">
                <h1 class="section-header">
                    Vrste Predstava
                </h1>
            </div>
            <div class="col-md-4">
                <div class="icon-wrap">
                    <i class="fa fa-glass" aria-hidden="true"></i>
                </div>
                <div class="show-description">
                    Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-wrap">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="show-description">
                    Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-wrap">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </div>
                <div class="show-description">
                    Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->


        <!-- Marketing Icons Section -->
        <!--<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Modern Business
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.3.7</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- /.row -->


        <!-- Portfolio Section -->
        <!--<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>-->
        <!-- /.row -->

        <!-- Features Section -->
        <!--<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>-->
        <!-- /.row -->

        <!--<hr>-->

        <!-- Call to Action Section -->
        <!--<div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>-->

