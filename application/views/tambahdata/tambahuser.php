  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
      <nav class="navbar-color gradient-45deg-light-blue-cyan">
        <div class="nav-wrapper">
          <ul class="left">
            <li>
              <h1 class="logo-wrapper">
                <a href="index.html" class="brand-logo darken-1">
                
                    <span class="logo-text hide-on-med-and-down">Sistem Parkir</span>
                  </a>
              </h1>
            </li>
          </ul>
          <div class="header-search-wrapper hide-on-med-and-down">
          
          </div>
          <ul class="right hide-on-med-and-down">
            <li>
            </li>
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge pink accent-2">5</small>
                  </i>
                </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
            </li>
            <li>
              <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                  <i class="material-icons">format_indent_increase</i>
                </a>
            </li>
          </ul>
        
   <!-- notifications-dropdown -->
          <ul id="notifications-dropdown" class="dropdown-content">
            <li>
              <h6>NOTIFICATIONS
                <span class="new badge">5</span>
              </h6>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
            </li>
          </ul>
    <!-- profile-dropdown -->
          <ul id="profile-dropdown" class="dropdown-content">
            <li>
              <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
            </li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Settings</a>
            </li>
  
          </ul>
        </div>
      </nav>
    </div>
  <!-- end header nav-->
  </header>
  <!-- END HEADER -->
 
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
          <li class="user-details cyan darken-2">
            <div class="row">
              <div class="col col s4 m4 l4">
                <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
              </div>
            
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">Admin<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">Administrator</p>
              </div>
         
          </li>
          <li class="no-padding">
        
         <ul class="collapsible" data-collapsible="accordion">
              <li class="bold">
                <a href="index.html" class="waves-effect waves-cyan">
                    <i class="material-icons">pie_chart_outlined</i>
                    <span class="nav-text">Dashboard</span>
                  </a>
              </li>
              <li class="bold">
                <a href="<?= base_url('tampildata/adminview'); ?>" class="waves-effect waves-cyan">
                    <i class="material-icons">cast</i>
                    <span class="nav-text">Tampil Data Kendaraan</span>
                  </a>
              </li>
              <li class="bold">
                <a href="<?= base_url('tambahdata/kendaraan'); ?>" class="waves-effect waves-cyan">
                    <i class="material-icons">cast</i>
                    <span class="nav-text">Tambah Data Kendaraan</span>
                  </a>
              </li>
              <li class="bold">
                <a href="<?= base_url('tambahdata/petugas'); ?>" class="waves-effect waves-cyan">
                    <i class="material-icons">insert_link</i>
                    <span class="nav-text">Tambah Petugas Parkir</span>
                  </a>
              </li>
              <li class="bold">
                <a href="ui-icons.html" class="waves-effect waves-cyan">
                <i class="material-icons">lightbulb_outline</i>
                <span class="nav-text">Logout</span>
              </a>
              </li>
              <li>
               
            </ul>   
      

        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTENT -->
      <section id="content">
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <!-- Search for small screen -->
          <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Cari Data Kendaraan">
          </div>
          <!-- <div class="container">
            <div class="row">
              <div class="col s12">
               <h5 class="breadcrumbs-title center"> <i class="material-icons">directions_car</i> Halaman Data Kendaraan</h5>
                
                <ol class="breadcrumbs">
                  
                </ol>
              </div>
            
            </div>
          </div> -->
        </div>
        <!--breadcrumbs end-->
       


<!-- kontainer -->
<div class="main">

<div class="container center">


        <div class="col s12">
          <div class="icon-block">
            <h5 class="center light-blue-text"><i class="material-icons">account_box</i>
            <?= $title; ?>
            </h5>

            <p class="light"></p>
          </div>
        </div>

  
  <?= $this->session->flashdata('message');  ?>
 
<div class="container">
 <form method="post" action="<?= base_url('tambahdata/petugas');?>">
      
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text"  name="username">
          <label for="icon_prefix">Username</label>
          <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

        
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email"  name="email">
          <label for="icon_telephone">Email</label>
          <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>


     

    
    <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="pas1" type="password"  name="pas1">
          <label for="icon_telephone">Password</label>
          <?= form_error('pas1', ' <small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="pas2" name="pas2" type="password" >
          <label for="icon_telephone">Confirm Password</label>
        </div>    
      </div> 
     
     <div class="row">
      <button class="waves-effect waves-light btn-small" type="submit"><i class="material-icons left">cloud</i>Tambah Petugas</button>
      </div> 

    </form>

    </div>
  


  
   </div>
   </div>
         
    </form>
         
 <!--end container-->



      </section>
      <!-- END CONTENT -->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
   