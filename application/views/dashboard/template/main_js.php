    <script src="<?php echo base_url();?>assets/dashboard/modules/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/modules/popper.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/modules/tooltip.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/sa-functions.js"></script>

    <script src="<?php echo base_url();?>assets/dashboard/modules/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/scripts.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/custom.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/modules/daterange/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/modules/daterange/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/modules/chart.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/utatti/perfect-scrollbar/master/dist/perfect-scrollbar.js"></script>

    <!-- <script src="<?php echo base_url();?>modules/toastr/build/toastr.min.js"></script> -->
    <!-- CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
      $(function () {
        $(".dataTable").dataTable();
        window.addEventListener('load', function () {
          function updateOnlineStatus(event) {
            var condition = navigator.onLine ? "Online" : "Offline";

            if (condition == "Online") {
              swal({
                title: "HORRREEEEEE!",
                text: "Your Connection Is Online",
                icon: "success",
              });
            } else if (condition == "Offline") {
              swal({
                title: "OHH NOOO!",
                text: "Your Connection Is Offline",
                icon: "error",
              });
            }
          }
          window.addEventListener('online', updateOnlineStatus);
          window.addEventListener('offline', updateOnlineStatus);
        });
      });

      function logout(){
        swal({
          title: "Apa Anda Yakin Ingin Keluar?",
          text: "",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = "<?php echo base_url();?>Check/logout";
          } else {
          }
        });
      }
    </script>