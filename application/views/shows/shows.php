<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Predstave
                <small>Pogledajte predstave u ponudi</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Početna</a>
                </li>
                <li class="active">Predstave</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <!-- Projects Row -->
    <div class="row">
        <?php foreach ($shows as $shows_item): ?>
        <div class="col-md-6 img-portfolio">
            <a href="<?php echo site_url('shows/'.$shows_item['slug']); ?>">
                <img class="img-responsive img-hover" src="<?php echo $shows_item['picture']; ?>" alt="" style="max-height: 365px;">
            </a>
            <h3>
                <a href="<?php echo site_url('shows/'.$shows_item['slug']); ?>">
                    <?php echo $shows_item['title']; ?>
                </a>
            </h3>
            <p>
                <?php echo $shows_item['description']; ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- /.row -->
    <hr>

</div>
<!-- /.container -->