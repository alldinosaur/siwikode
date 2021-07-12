    <!-- nav broadcrumb -->
    <nav aria-label="breadcrumb" class="sign justify-content-end">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wisata Rekreasi</li>
        </ol>
    </nav>
    <!-- end nav broadcrumb -->
    
    <!-- wisata rekrasi section -->
    <section id="wisata-rekreasi" class="gallery">
        <div class="container">
            <div class="gallery-details">
                <div class="gallary-header text-center">
                    <h2><?= $title; ?></h2>
                    <p>Berikut ini kami berikan beberapa referensi wisata rekreasi di wilayah kota Depok.</p>
                </div>
                
                <!-- <div class="col-md-8">
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="keyword" placeholder="type keyword..." autocomplete>
                            <div class="input-group-append">
                                <input class="btn btn-solid-lg btn-login" type="submit" name="submit">
                                </input>
                            </div>
                        </div>
                    </form>
                </div> -->
            <?php foreach($rekreasi as $rek) : ?>
                <div class="item-rekreasi">
                    <div class="row">
                        <div class="col-md-5 mb-2">
                            <div class="gallary-header">
                                <h4><?= $rek['name']; ?></h4>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-4">
                            <div class="filtr-item">
                                <img src="<?= base_url() ?>/asset/img/rekreasi/<?= $rek['image']; ?>" alt="portfolio image" style="width: 450px; height: 250px;"/>
                            </div><!-- /.filtr-item -->
                        </div>
                        <div class="col-md-7 offset-1">
                            <div class="article-header">
                                    <?= $rek['deskripsi']; ?>
                            </div>
                            <a href="<?= base_url('rekreasi/').$rek['id']; ?>" class="btn btn-solid-lg btn-promote">Detail</a>
                        </div>
                    </div>
    
                </div>
            <?php endforeach; ?>



            </div> <!-- /.galleyy details   -->
        </div> <!-- /.container   -->
</section> <!-- /.section wisata-rekreasi   -->


    