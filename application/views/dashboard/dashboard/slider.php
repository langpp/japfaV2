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
              <h4>Tambah Slider</h4>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url();?>dashboard/tambahSlider" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <label>Foto</label>
                      <input type="file" name="file" class="form-control" required="">
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
             <h4>Slider Website Japfa Foundation</h4>
           </div>
           <div class="card-body">
            <table class="table table-striped table-hover dataTable text-center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($allSlider as $slider) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $slider['file'];?></td>
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $slider['id_banner']; ?>">Edit</button>
                    <a href="<?php echo base_url();?>dashboard/deleteslider?id=<?php echo $slider['id_banner'];?>" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
                <!-- The Modal -->
                <div class="modal" id="myModal<?php echo $slider['id_banner']; ?>" style="background: rgb(0,0,0,.3);">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Edit Slider <?php echo $slider['file']; ?></h4>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <form action="<?php echo base_url();?>dashboard/editSlider" method="POST" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-lg-12">
                              <img src="<?php echo base_url(); ?>assets/Images/<?php echo $slider['file']; ?>" class="img-fluid" alt="">
                            </div>
                            <input type="hidden" name="id" class="form-control" value="<?php echo $slider['id_banner']; ?>">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="file" class="form-control" required="">
                                <small><?php echo $slider['file']; ?></small>
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