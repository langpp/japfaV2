<div class="main-sidebar">
   <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
         <a href="dashboard">Japfa Foundation</a>
      </div>
      <div class="sidebar-user">
         <div class="sidebar-user-picture">
            <img alt="image" src="<?php echo base_url();?>assets/Images/icon.png">
         </div>
         <div class="sidebar-user-details">
            <div class="user-name">Admin</div>
            <div class="user-role">
              Administrator
            </div>
         </div>
      </div>
      <ul class="sidebar-menu">
         <li class="menu-header">Dashboard</li>
         <li <?php if ($this->uri->segment(1) == "dashboard" && $this->uri->segment(2) == "") { ?> class="nav-active" <?php }else{?> class="" <?php }?>>
            <a href="<?php echo base_url();?>dashboard"><img src="<?php echo base_url();?>assets/dashboard/icon/logo-dashboard.png"><span>Dashboard</span></a>
         </li>
        
         <li class="menu-header">Menu</li>
         <li <?php if ($this->uri->segment(1) == "dashboard" && $this->uri->segment(2) == "news") { ?> class="nav-active" <?php }else{?> class="" <?php }?>>
            <a href="<?php echo base_url();?>dashboard/news "><img src="<?php echo base_url();?>assets/dashboard/icon/daftar-izin.png" width="20"><span> News</span></a>
         </li>
         <li <?php if ($this->uri->segment(1) == "dashboard" && $this->uri->segment(2) == "about") { ?> class="nav-active" <?php }else{?> class="" <?php }?>>
            <a href="<?php echo base_url();?>dashboard/about "><img src="<?php echo base_url();?>assets/dashboard/icon/pengajuan.png" width="20"><span> About Us</span></a>
         </li>
         <li <?php if ($this->uri->segment(1) == "dashboard" && $this->uri->segment(2) == "subscriber") { ?> class="nav-active" <?php }else{?> class="" <?php }?>>
            <a href="<?php echo base_url();?>dashboard/subscriber "><img src="<?php echo base_url();?>assets/dashboard/icon/inventaris.png" width="20"><span> Subscriber</span></a>
         </li>
         <li <?php if ($this->uri->segment(1) == "dashboard" && $this->uri->segment(2) == "slider") { ?> class="nav-active" <?php }else{?> class="" <?php }?>>
            <a href="<?php echo base_url();?>dashboard/slider "><img src="<?php echo base_url();?>assets/dashboard/icon/tracking.png" width="20"><span> Slider</span></a>
         </li>
         <li <?php if ($this->uri->segment(1) == "dashboard" && $this->uri->segment(2) == "gallery") { ?> class="nav-active" <?php }else{?> class="" <?php }?>>
            <a href="<?php echo base_url();?>dashboard/gallery "><img src="<?php echo base_url();?>assets/dashboard/icon/gallery.png" width="20"><span> Gallery</span></a>
         </li>
         <li class="menu-header">More</li>
         <li>
            <a href="#" onclick="logout()"><img src="<?php echo base_url();?>assets/dashboard/icon/logo-logout.png"><span>Logout</span></a>
         </li>
      </ul>
   </aside>
</div>