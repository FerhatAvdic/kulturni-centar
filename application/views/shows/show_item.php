
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $shows_item['title']; ?>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Početna</a>
                    </li>
                    <li class="active">predstave</li>
                    <li class="active"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php foreach ($show_pictures as $key=>$value): 
                        if($key===0){
                            echo '<li data-target="#carousel-example-generic" data-slide-to="'.$key.'"class="active"></li>';
                        } else{
                            echo  '<li data-target="#carousel-example-generic" data-slide-to="'.$key.'"></li>';
                        }
                        endforeach; ?>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php foreach ($show_pictures as $key=>$value): 
                        if($key===0){
                            echo '<div class="item active">';
                        } else{
                            echo  '<div class="item">';
                        }
                        ?>
                            <img class="img-responsive" src="<?php echo $value['link']; ?>" alt="">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Opis Predstave</h4><p><?php echo $shows_item['description']; ?></h3>
                <h4>Cijena</h4><p><?php echo $shows_item['price']; ?> KM</h3></p>
                <a href="<?php echo site_url('reservations/create/'.$shows_item['id']); ?>" class="btn btn-primary">Rezervacija</a>
            </div>
        </div>
        <!-- /.row -->
        <!-- Related Projects Row -->
       <!-- <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Slične Predstave</h3>
            </div>
            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
        </div>-->
        <!-- /.row -->
        <hr>

    </div>
    <!-- /.container -->
 