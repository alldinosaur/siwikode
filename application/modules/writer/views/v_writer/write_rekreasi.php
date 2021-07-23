    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>

                </div>
            <div class="card-body">
            <?= form_open_multipart('writer/rekreasi'); ?>
            
            <div class="row">
                
                <div class="col-md-4">  

                <div class="card">
                    <div class="card-header bg-primary" style="color: white;">Data Wisata Rekreasi</div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        </div>
                        <div class="form-group">
                        <label for="m">Nama Wisata</label>
                        <input id="m" name="name" class="form-control"></input>
                        <?= form_error('name','<small class="text-danger">','</small>') ?>
                        </div>
                        <div class="form-group">
                        <label for="s">Jenis Wisata</label>
                            <select name="jenis_rekreasi" id="jenis_rekreasi" class="form-control">
                                <option value="">Jenis Wisata</option>
                                <?php foreach($jenis_rekreasi as $jr) : ?>
                                <option value="<?= $jr['id']; ?>"><?= $jr['jenis']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?= form_error('jenis_rekreasi','<small class="text-danger">','</small>') ?>
                        </div>
                        <div class="form-group">
                        <label for="facility">Fasilitas</label>
                        <input id="facility" name="facility" class="form-control"></input>
                        <?= form_error('facility','<small class="text-danger">','</small>') ?>
                        </div>
                        <div class="form-group">
                        <label for="ticket">Tiket Masuk</label>
                        <input id="ticket" name="ticket" class="form-control"></input>
                        <small class="text-muted">Contoh: 20.000 - 30.000 per orang</small>
                        <?= form_error('ticket','<small class="text-danger">','</small>') ?>
                        </div>
                        <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input id="alamat" name="alamat" class="form-control"></input>
                        <?= form_error('alamat','<small class="text-danger">','</small>') ?>
                        </div>
                        <div class="form-group">
                        <label for="time_open">Waktu Buka</label>
                        <input id="time_open" name="time_open" class="form-control"></input>
                        <?= form_error('time_open','<small class="text-danger">','</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="w">Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label for="image" class="custom-file-label">Choose file</label>
                            </div>
                            <?= form_error('image','<small class="text-danger">','</small>') ?>
                        </div>
                    </div>
                </div>
                
                </div>

                <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary" style="color: white;">Deskripsi Wisata Rekreasi</div>
                    <div class="card-body">
                        <div class="form-group">
                            <textarea id="ckeditor" name="deskripsi" placeholder="deskripsi rekreasi" class="form-control"></textarea>
                            <?= form_error('deskripsi','<small class="text-danger">','</small>') ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-md-4" style="margin-top: 20px;"><i class="fa fa-paper-plane"></i> KIRIM</button>
                </div>
                
            </div>
            </div>
            </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->`