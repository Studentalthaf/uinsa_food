   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Brand Logo -->
       <a href="index3.html" class="brand-link">
           <span class="brand-text font-weight-light">Admin Controller</span>
       </a>

       <!-- Sidebar -->
       <div class="sidebar">
           <!-- Sidebar user panel (optional) -->
           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="{{ asset('frontend/images/favicon.png') }}" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                   <a href="#" class="d-block">SAM {{ Auth::user()->nama_lengkap }}</a>
               </div>
           </div>

           <!-- Sidebar Menu -->
           <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                   data-accordion="false">
                   <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                   <li class="nav-item menu-open">
                       <a href="#" class="nav-link active">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                               Dashboard
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="./index.html" class="nav-link active">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dashboard v1</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="./index2.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dashboard v2</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="./index3.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dashboard v3</p>
                               </a>
                           </li>
                       </ul>
                   </li>

                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-chart-pie"></i>
                           <p>
                               Charts
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/charts/chartjs.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>ChartJS</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/charts/flot.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Flot</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/charts/inline.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Inline</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/charts/uplot.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>uPlot</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-tree"></i>
                           <p>
                               UI Elements
                               <i class="fas fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/UI/general.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>General</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/icons.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Icons</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/buttons.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Buttons</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/sliders.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Sliders</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/modals.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Modals & Alerts</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/navbar.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Navbar & Tabs</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/timeline.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Timeline</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/ribbons.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Ribbons</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-edit"></i>
                           <p>
                               Data User
                               <i class="fas fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="{{ route('data_pengguna') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Pengguna</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/forms/advanced.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Advanced Elements</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/forms/editors.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Editors</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/forms/validation.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Validation</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-table"></i>
                           <p>
                               Tables
                               <i class="fas fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/tables/simple.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Simple Tables</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/tables/data.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>DataTables</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/tables/jsgrid.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>jsGrid</p>
                               </a>
                           </li>
                       </ul>
                   </li>


                   <!-- Control Sidebar -->
                   <aside class="control-sidebar control-sidebar-dark">
                       <!-- Control sidebar content goes here -->
                   </aside>
