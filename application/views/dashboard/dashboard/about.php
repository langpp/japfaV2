<?php echo $this->session->flashdata('notif');?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit About</h4>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url();?>dashboard/editAbout" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <label>isi</label>
                      <textarea name="isi" class="form-control" required="" style="height: 300px;"><?php echo $about[0]['about']; ?></textarea>
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
    </div>
  </section>
</div>