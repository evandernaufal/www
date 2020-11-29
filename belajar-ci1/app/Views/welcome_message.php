<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>FALEVAN</h1>
            <p>Website for Reading News and Blog</p> 
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="<?php echo base_url('home'); ?>">FALEVAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog</a>
                    </li>
                </ul>
            </div>  
        </nav>
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Us</h2>
                    <img src="<?= base_url('images/aboutweb.png') ?>" style="height: 300px;">
                    <p><link rel="stylesheet" href="">Hello, I'm FALEVAN your partner for read many news and blog. If you find news, just remember me and i will be there for you.</p>
                    <h3>Follow Us</h3>
                    <p>Get Closer with FALEVAN</p>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Facebook</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Instagram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Youtube</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none">
                </div>
                <div class="col-sm-8">
                    <h1>News</h1>
                    <?php if($news): ?>
                    <?php foreach ($news as $reading): ?>
                    <h3><?= $reading['judulberita']; ?></h3>
                    <h5><?= $reading['author']; ?>, <?= $reading['tglposting']; ?></h5>
                    <img src="<?= base_url('images/'.$reading['foto']) ?>" class="rounded" style="width:700px;height:300px;">
                    <br><br><p><?= substr($reading['isiberita'],0,1000)."....."; ?></p>
                    <a href="<?= base_url('home/newsopen/'.$reading['id']); ?>" class="btn btn-info">Read More</a><br><br>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="jumbotron text-center" style="margin-bottom:0">
          <p>This Is Footer</p>
        </div>
    </body>
</html>