<style type="text/css">
.modal-backdrop{
  position: relative;
}
</style>
<?php echo $this->session->flashdata('notif');?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <h4>Tambah News</h4>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url();?>dashboard/tambahNews" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" name="judul" placeholder="Judul" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="deskripsi" class="form-control" required=""></textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label>File</label>
                      <input type="file" name="file" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label>Foto</label>
                      <input type="file" name="foto" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="float-right">
                      <button type="submit" class="btn btn-success btn-sm">Simpan <i class="fab fa-telegram"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
             <h4>News Website Japfa Foundation</h4>
           </div>
           <div class="card-body">
            <table class="table table-striped table-hover dataTable text-center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Waktu</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($allNews as $news) { ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $news['judul'];?></td>
                    <td><?php echo $news['deskripsi'];?></td>
                    <td><?php echo date("Y-m-d", strtotime($news['waktu'])); ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>detail?tag=news&id=<?php echo $news['id_news']; ?>&tab=tbnews&find=id_news" title="Lihat Detail" class="btn btn-primary btn-sm" target="_blank">Detail</a>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $news['id_news']; ?>">Edit</button>
                      <a href="<?php echo base_url();?>dashboard/deleteNews?id=<?php echo $news['id_news'];?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                  </tr>
                  <!-- The Modal -->
                  <div class="modal" id="myModal<?php echo $news['id_news']; ?>" style="background: rgb(0,0,0,.3);">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Edit News <?php echo $news['judul']; ?></h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <form action="<?php echo base_url();?>dashboard/editNews" method="POST" enctype="multipart/form-data">
                            <div class="row">
                              <div class="col-lg-12">
                                <img src="<?php echo base_url(); ?>assets/news/<?php echo $news['img']; ?>" class="img-fluid" alt="">
                              </div>
                              <input type="hidden" name="id" class="form-control" value="<?php echo $news['id_news']; ?>">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                  <label>Judul</label>
                                  <input type="text" name="judul" placeholder="Judul" class="form-control" required="" value="<?php echo $news['judul']; ?>">
                                </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                  <label>Deskripsi</label>
                                  <textarea name="deskripsi" class="form-control" required=""><?php echo $news['deskripsi']; ?></textarea>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                  <label>File</label>
                                  <input type="file" name="file" class="form-control" required="">
                                  <small><?php echo $news['file']; ?></small>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                  <label>Foto</label>
                                  <input type="file" name="foto" class="form-control" required="">
                                  <small><?php echo $news['img']; ?></small>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="float-right">
                                  <button type="submit" class="btn btn-success btn-sm">Simpan <i class="fab fa-telegram"></i></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>