
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START HEADER -->
  <header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
      <nav class="navbar-color gradient-45deg-light-blue-cyan">
        <div class="nav-wrapper">
          <ul class="left">
            <li>
              <h1 class="logo-wrapper">
                <a href="index.html" class="brand-logo darken-1">
                   <!--  <img src="<?= base_url('vendor/'); ?>images/logo/logo.png" alt="materialize logo"> -->
                    <span class="logo-text hide-on-med-and-down">Sistem Parkir</span>
                  </a>
              </h1>
            </li>
          </ul>
          <div class="header-search-wrapper hide-on-med-and-down">
            <i class="material-icons">search</i>
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Cari Data Kendaraan" />
          </div>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-gb"></span>
                </a>
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
          <!-- translation-button -->
          <ul id="translation-dropdown" class="dropdown-content">
            <li>
              <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-gb"></i> English</a>
            </li>
            <li>
              <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-fr"></i> French</a>
            </li>
            <li>
              <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-cn"></i> Chinese</a>
            </li>
            <li>
              <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-de"></i> German</a>
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
            <li>
              <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
            </li>
            <li>
              <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
            </li>
            <li>
              <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
            </li>
            <li>
              <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
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
            <li>
              <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Lock</a>
            </li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- end header nav-->
  </header>
  <!-- END HEADER -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
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
              <div class="col col s8 m8 l8">
                <ul id="profile-dropdown-nav" class="dropdown-content">
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">face</i> Profile</a>
                  </li>
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">settings</i> Settings</a>
                  </li>
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">live_help</i> Help</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">lock_outline</i> Lock</a>
                  </li>
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">keyboard_tab</i> Logout</a>
                  </li>
                </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">Admin<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">Administrator</p>
              </div>
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
          </li>
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
            <h5 class="center light-blue-text"><i class="material-icons">library_add</i>
            Tambah Data Kendaraan
            </h5>

            <p class="light"></p>
          </div>
        </div>
 




    <form action="" method="post">
   
        <div class="input-field">
          <i class="material-icons prefix">confirmation_number</i>
          <input id="no_faktur" type="text"  name="no_faktur" value="<?= $kendaraan['no_faktur']; ?>">
          <label for="icon_prefix">Nomor Faktur</label>
          <?= form_error('no_faktur', ' <small class="red lighten-4">', '</small>'); ?>
        </div>


        <div class="input-field">
          <i class="material-icons prefix">local_offer</i>
          <input id="no_plat" type="text"  name="no_plat" value="<?= $kendaraan['no_plat']; ?>">
          <label for="icon_telephone">Nomor Plat</label>
          <?= form_error('no_plat', ' <small class="red lighten-4">', '</small>'); ?>
        </div>

         <div class="input-field">
          <i class="material-icons prefix">local_taxi</i>
          <input id="jenis_mobil" name="jenis_mobil" type="text" value="<?= $kendaraan['jenis_mobil']; ?>">
          <label for="icon_telephone">Jenis Mobil</label>
        <?= form_error('jenis_mobil', ' <small  class="red lighten-4">', '</small>'); ?>
        </div>    

        <div class="input-field">
          <i class="material-icons prefix">label_outline</i>
          <input id="merk_mobil" name="merk_mobil" type="text" value="<?= $kendaraan['merk_mobil']; ?>" >
          <label for="icon_telephone">Merk Mobil</label>
          <?= form_error('merk_mobil', ' <small  class="red lighten-4">', '</small>'); ?>
        </div>  

        <div class="input-field">
          <i class="material-icons prefix">color_lens</i>
          <input id="warna_mobil" name="warna_mobil" type="text" value="<?= $kendaraan['warna_mobil']; ?>">
          <label for="icon_telephone">Warna Mobil</label>
          <?= form_error('warna_mobil', ' <small  class="red lighten-4">', '</small>'); ?>
        </div>    

     
      <a onclick="return confirm ('Ubah Data Kendaraan');"><button class="waves-effect waves-light btn-small" type="submit"><i class="material-icons left">cloud</i>Ubah Data</button></a>


  
   </div>
   </div>
         
    </form>
         
 <!--end container-->



      </section>
      <!-- END CONTENT -->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
          <li class="li-hover">
            <div class="row">
              <div class="col s12 border-bottom-1 mt-5">
                <ul class="tabs">
                  <li class="tab col s4">
                    <a href="#activity" class="active">
                        <span class="material-icons">graphic_eq</span>
                      </a>
                  </li>
                  <li class="tab col s4">
                    <a href="#chatapp">
                        <span class="material-icons">face</span>
                      </a>
                  </li>
                  <li class="tab col s4">
                    <a href="#settings">
                        <span class="material-icons">settings</span>
                      </a>
                  </li>
                </ul>
              </div>
              <div id="settings" class="col s12">
                <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                <ul class="collection border-none">
                  <li class="collection-item border-none">
                    <div class="m-0">
                      <span class="font-weight-600">Notifications</span>
                      <div class="switch right">
                        <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                      </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                  </li>
                  <li class="collection-item border-none">
                    <div class="m-0">
                      <span class="font-weight-600">Show recent activity</span>
                      <div class="switch right">
                        <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                      </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                  </li>
                  <li class="collection-item border-none">
                    <div class="m-0">
                      <span class="font-weight-600">Notifications</span>
                      <div class="switch right">
                        <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                      </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                  </li>
                  <li class="collection-item border-none">
                    <div class="m-0">
                      <span class="font-weight-600">Show recent activity</span>
                      <div class="switch right">
                        <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                      </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                  </li>
                  <li class="collection-item border-none">
                    <div class="m-0">
                      <span class="font-weight-600">Show your emails</span>
                      <div class="switch right">
                        <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                      </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                  </li>
                  <li class="collection-item border-none">
                    <div class="m-0">
                      <span class="font-weight-600">Show Task statistics</span>
                      <div class="switch right">
                        <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                      </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                  </li>
                </ul>
              </div>
              <div id="chatapp" class="col s12">
                <div class="collection border-none">
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Elizabeth Elliott </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-2.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Mary Adams </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Caleb Richards </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-4.png" alt="" class="circle cyan">
                      <span class="line-height-0">June Lane </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-5.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Edward Fletcher </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Love you </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-6.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Crystal Bates </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can we </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-7.png" alt="" class="circle cyan">
                      <span class="line-height-0">Nathan Watts </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Great! </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-8.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Willard Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Do it </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-9.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Ronnie Ellis </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Got that </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Gwendolyn Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Like you </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-2.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Daniel Russell </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Sarah Graves </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-4.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Andrew Hoffman </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can do </p>
                    </a>
                  <a href="#!" class="collection-item avatar border-none">
                      <img src="<?= base_url('vendor/'); ?>images/avatar/avatar-5.png" alt="" class="circle cyan">
                      <span class="line-height-0">Camila Lynch </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
                    </a>
                </div>
              </div>
              <div id="activity" class="col s12">
                <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                <div class="activity">
                  <div class="col s3 mt-2 center-align recent-activity-list-icon">
                    <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                  </div>
                  <div class="col s9 recent-activity-list-text">
                    <a href="#" class="deep-purple-text medium-small">just now</a>
                    <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                  </div>
                  <div class="recent-activity-list chat-out-list row mb-0">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="cyan-text medium-small">Yesterday</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list chat-out-list row mb-0">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                      <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="green-text medium-small">5 Days Ago</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list chat-out-list row mb-0">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="amber-text medium-small">1 Week Ago</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list row">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list chat-out-list row mb-0">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                      <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="brown-text medium-small">1 Month Ago</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list chat-out-list row mb-0">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list row">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="grey-text medium-small">1 Year Ago</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </aside>
      <!-- END RIGHT SIDEBAR NAV-->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
   