
<!-- Main Sidebar Container -->
<aside class="main-sidebar">
    <!-- Brand Logo -->
    <div><a href="#dashboard">
            <img src="../dist/img/final _logo.png" alt="Wildlife Crime" class="brand-link">
            <!-- <span class="brand-text font-weight-light">WLOR</span> -->
        </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> -->
        <!-- <div class="image">
          <img src="https://cdn4.iconfinder.com/data/icons/professions-1-2/151/21-512.png" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <!-- <div class="info">
          <a href="#" class="d-block"></a>
        </div> -->
        <!-- </div> -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <div class="form-control control-sidebar">
                    <div class="group-append">
                        <!-- <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#dashboard" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>

                        <label id="dash_head">

                            Home <br> হোম

                        </label>
                    </a>
                    <a href="#pre_loader" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            <label id="gn">
                                Generate WOR<br> WOR তৈরী করুন
                            </label>

                        </p>
                    </a>
                    <!-- <a href="#access-resource" class="nav-link admin-link">
                        <i class="nav-icon fas fa-indent"></i>
                        <p>
                            <label id="access">
                                <?php echo trans("access", 'en'); ?>
                                <br>
                                <?php echo trans("access", 'bn'); ?>
                            </label>

                        </p>
                    </a> -->
                    <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul> -->
            </li>
            <li class="nav-item">
                    <a href="#access-resource" class="nav-link admin-link">
                        <i class="nav-icon fas fa-indent"></i>
                        <p>
                            <label id="access">
                                <?php echo trans("access", 'en'); ?>
                                <br>
                                <?php echo trans("access", 'bn'); ?>
                            </label>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#wildlife_law" class="nav-link">
                                <i class="fas fa-chevron-right"></i>
                                    <p>
                                        <label id="">
                                            Law sections <br>
                                        </label>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="#act_schedule" class="nav-link">
                                <i class="fas fa-chevron-right"></i>
                                    <p>
                                        <label id="">
                                           Wildlife Act schedules <br>
                                        </label>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="#species" class="nav-link">
                                <i class="fas fa-chevron-right"></i>
                                    <p>
                                        <label id="">
                                            Species ID<br>
                                        </label>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="#tradefor" class="nav-link">
                                <i class="fas fa-chevron-right"></i>
                                    <p>
                                        <label id="">
                                             Bodyparts/products ID<br>
                                        </label>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="#basic_law" class="nav-link">
                                <i class="fas fa-chevron-right"></i>
                                    <p>
                                        <label id="">
                                            Main Laws <br>
                                        </label>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="#hand_book" class="nav-link">
                                <i class="fas fa-chevron-right"></i>
                                    <p>
                                        <label id="">
                                        Training Handbook <br>
                                        </label>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="#guide" class="nav-link">
                                <i class="fas fa-chevron-right"></i>
                                    <p>
                                        <label id="">
                                        Species ID Guide <br>
                                        </label>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="#poster" class="nav-link">
                                <i class="fas fa-chevron-right"></i>
                                    <p>
                                        <label id="">
                                        Poster <br>
                                        </label>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="nav-item">
                    <a href="#my_wlor_list" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> <label id="my_wlor_list">
                                My WOR<br>আমার প্রতিবেদন
                            </label>

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#wlor_list" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p><label id="wlor_list">
                               Final WOR<br>চূড়ান্ত প্রতিবেদন
                            </label></p>
                    </a>
                </li>
                <li class="nav-item">

                </li>
                <li class="nav-item">
                <label id="admin" style="display:none;">
                    <a href="#admin" class="nav-link admin-link" id="admin-panel">
                    
                        <i class="nav-icon fas fa-indent"></i>
                        <p>
                            <?php echo trans("admin", 'en'); ?>
                        </p><br>
                        <p style="margin-left:13%;"><?php echo trans("admin", 'bn'); ?></p>
                        
                    </label>
                
                    <!-- <ul class="nav nav-treeview">
           <!-child section goes here->
          </ul> -->
                
          <hr>
            
             <i ><img src="../dist/images/user_img.png" height="30" /></i>
                 <p  style="color:grey; font-weight:bold;" id="test"></p>

                <li class="nav-item">
                    <a href="#logout" class="nav-link logout">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                        
                            <label id="logout">

                                <?php echo trans("logout", 'en'); ?>
                                <br>
                                <?php echo trans("logout", 'bn'); ?>
                                
                            </label>
                            
                            

                        </p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<script>

if (localStorage.getItem("name") != null) {
  document.getElementById("test").innerHTML = localStorage.getItem("name");
}

if (localStorage.getItem("name") =='Admin') {
  document.getElementById("admin").style.display = "block";
}
</script>