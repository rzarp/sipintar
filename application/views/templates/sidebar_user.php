   <!-- Page Wrapper -->
   <div id="wrapper">

       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin">
               <div class="sidebar-brand-icon">
                   <img src="<?php echo base_url('assets/img/sucofindo.svg') ?>" alt="Si pintar" width="100" height="100">
               </div>

           </a>

           <!-- Divider -->
           <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
           <li class="nav-item active">
               <a class="nav-link" href="user">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Dashboard</span></a>
           </li>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item active">
               <a class="nav-link" href="kirim">
                   <i class="fas fa-fw fa-rocket"></i>
                   <span>Order Pengiriman</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="laporan">
                   <i class="fas fa-fw fa-tasks"></i>
                   <span>Laporan Pengiriman</span>
               </a>
           </li>


           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

           <!-- Heading -->
           <div class="sidebar-heading">
               Account
           </div>

           <li class="nav-item active">
               <a class="nav-link" href="<?php echo base_url('login/logout'); ?>">
                   <i class="fas fa-fw fa fa-key"></i>
                   <span>Logout</span>
               </a>
           </li>

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>

       </ul>
       <!-- End of Sidebar -->