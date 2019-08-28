<div class="main-content">
  <section class="section">
    <h2 class="section-header">
      <div>Selamat Datang Admin !</div>
    </h2>
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-6">
          <div class="card card-sm">
            <div class="card-icon text-success">
              <i class="ion ion-ios-paper-outline"></i>
            </div>
            <div class="card-wrap">
              <div class="card-body">
                <?php echo $totalNews[0]['total']; ?>
              </div>
              <div class="card-header">
                <h4>Total News</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6">
          <div class="card card-sm">
            <div class="card-icon text-danger">
              <i class="ion ion-record"></i>
            </div>
            <div class="card-wrap">
              <div class="card-body">
                <?php echo $totalSubsciber[0]['total']; ?>
              </div>
              <div class="card-header">
                <h4>Total Subscriber</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-7 col-md-8 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
             <h4>News Terbaru</h4>
           </div>
           <div class="card-body chartMid">
            <table class="table table-striped table-hover text-center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Waktu</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach ($tenNews as $news) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $news['judul']; ?></td>
                  <td><?php echo date("Y-m-d", strtotime($news['waktu'])); ?></td>
                  <td><a href="<?php echo base_url(); ?>detail?tag=news&id=<?php echo $news['id_news']; ?>&tab=tbnews&find=id_news" title="Lihat Detail" class="btn btn-primary btn-sm" target="_blank">Lihat</a></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-header">

           <h4>Subscriber Terbaru</h4>
         </div>
         <div class="card-body">
          <table class="table table-striped table-hover text-center">
            <thead>
              <tr>
                <th>Email</th>
                <th>Waktu</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($tenSubsciber as $subscriber) { ?>
                <tr>
                  <td><a href="mailto:<?php echo $subscriber['email']; ?>" title="Lihat Detail" class="btn btn-primary btn-sm" target="_blank"><?php echo $subscriber['email']; ?></td>
                  <td><?php echo date("Y-m-d", strtotime($subscriber['date'])); ?></td>
                </tr>
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