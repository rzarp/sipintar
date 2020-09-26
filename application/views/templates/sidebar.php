   <!-- Page Wrapper -->
   <div id="wrapper">

       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               <div class="sidebar-brand-icon rotate-n-15">
                   <i class="fas fa-laugh-wink"></i>
               </div>
               <div class="sidebar-brand-text mx-3">Si Pinter</div>
           </a>

           <!-- Divider -->
           <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
           <li class="nav-item active">
               <a class="nav-link" href="admin">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Dashboard</span>
                </a>
           </li>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item active">
               <a class="nav-link" href="unitkerja">
                   <i class="fas fa-fw fa-building"></i>
                   <span>Data Unit Kerja</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="datauser">
                   <i class="fas fa-fw fa-user"></i>
                   <span>Data User</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="unitkerja">
                   <i class="fas fa-fw fa-rocket"></i>
                   <span>Data Kurir</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="unitkerja">
                   <i class="fas fa-fw fa-tasks"></i>
                   <span>Laporan Pengiriman</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="unitkerja">
                   <i class="fas fa-fw fa-save"></i>
                   <span>Back Up</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="<?php echo base_url('login/logout'); ?>">
                   <i class="fas fa-fw fa fa-key"></i>
                   <span>Logout</span>
               </a>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>

       </ul>
       <!-- End of Sidebar -->