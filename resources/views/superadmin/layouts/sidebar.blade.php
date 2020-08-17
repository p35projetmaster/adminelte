<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('adminLTE3/dist/img/avatar04.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Baosem</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminLTE3/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
            <a href="{{url('/baosemhome')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
               <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Importation
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>-->
          
          @can('Importation')

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th" style="color: green"></i>
                        <p>
                            Importation

                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/importeannonce')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Annonce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/importeannonceur')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Annonceure</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('supression_placard')
                <li class="nav-item">
            <a href="#" class="nav-link">
             
              <i class="nav-icon fas fa-trash-alt"></i>
              <p>
                 Supression placarde
               
              </p>
            </a>
          </li>
          @endcan
          @can('Archive')
          <li class="nav-item">
            <a href="{{url('/archiveannonce')}}" class="nav-link">
              <i class="nav-icon fas fa-sync"></i>
              <p>
                Transfert archive
              </p>
            </a>
          </li>
          @endcan
          @can('Abonnees')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Abonnées
                            <i class="right fas fa-angle-left" ></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admines</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('Role')
                <li class="nav-item">
                <a href="{{url('/adminslist')}}" class="nav-link">
              
                  <i class="nav-icon fas fa-user-secret"></i>
                  <p>Admin</p>
                </a>
              </li>
              @endcan
              @can('Demandes')

               <li class="nav-item">
                 <a class="nav-link" href="#">
                  <i class="nav-icon fas fa-poll-h"></i>
                  <span>Demandes</span></a>
                </li>
               @endcan

                 <li class="nav-item">
                <a href="examples/project_add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/project_edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
