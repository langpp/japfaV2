<div class="main-content">
  <section class="section">
    <div class="section-body">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card">
        <div class="card-header">
         <h4>Subcriber Website Japfa Foundation</h4>
       </div>
       <div class="card-body">
        <table class="table table-striped table-hover dataTable text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th>Waktu</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $no = 1;
              foreach ($allSubsciber as $subs) { ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $subs['first_name'];?> <?php echo $subs['last_name'];?></td>
              <td><?php echo $subs['email'];?></td>
              <td><?php echo date("Y-m-d", strtotime($subs['date'])); ?></td>
              <td><a href="mailto:<?php echo $subs['email']; ?>" title="Lihat Detail" class="btn btn-primary btn-sm" target="_blank">Kirim Email</a></td>
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