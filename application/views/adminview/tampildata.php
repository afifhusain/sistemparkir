
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
                    <img src="<?= base_url('vendor/'); ?>images/logo/materialize-logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Materialize</span>
                  </a>
              </h1>
            </li>
          </ul>
          <div class="header-search-wrapper hide-on-med-and-down">
            <i class="material-icons">search</i>
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize" />
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
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
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
                <a href="cards-basic.html" class="waves-effect waves-cyan">
                    <i class="material-icons">cast</i>
                    <span class="nav-text">Cards</span>
                  </a>
              </li>
              <li class="bold">
                <a href="ui-basic-buttons.html" class="waves-effect waves-cyan">
                    <i class="material-icons">insert_link</i>
                    <span class="nav-text">Buttons</span>
                  </a>
              </li>
              <li class="bold">
                <a href="form-layouts.html" class="waves-effect waves-cyan">
                    <i class="material-icons">format_color_text</i>
                    <span class="nav-text">Forms</span>
                  </a>
              </li>
              <li class="bold">
                <a href="css-typography.html" class="waves-effect waves-cyan">
                    <i class="material-icons">format_size</i>
                    <span class="nav-text">Typography</span>
                  </a>
              </li>
              <li class="bold">
                <a href="css-color.html" class="waves-effect waves-cyan">
                    <i class="material-icons">invert_colors</i>
                    <span class="nav-text">Color</span>
                  </a>
              </li>
              <li class="bold">
                <a href="table-basic.html" class="waves-effect waves-cyan">
                    <i class="material-icons">border_all</i>
                    <span class="nav-text">Table</span>
                  </a>
              </li>
              <li class="bold">
                <a href="ui-icons.html" class="waves-effect waves-cyan">
                <i class="material-icons">lightbulb_outline</i>
                <span class="nav-text">Icons</span>
              </a>
              </li>
              <li>
                <a class="btn waves-effect waves-light gradient-45deg-red-pink" href="https://pixinvent.com/materialize-material-design-admin-template/landing/" target="_blank">
                  <i class="material-icons white-text">file_upload</i>Upgrade to Pro!
                </a>
              </li>
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
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
          </div>
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Cards</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.html">Dashboard</a>
                  </li>
                  <li><a href="#">UI Elements</a>
                  </li>
                  <li class="active">Cards</li>
                </ol>
              </div>
              <div class="col s2 m6 l6">
                <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">settings</i>
                    <span class="hide-on-small-onl">Settings</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
                <ul id="dropdown1" class="dropdown-content">
                  <li><a href="#!" class="grey-text text-darken-2">Access<span class="badge">1</span></a>
                  </li>
                  <li><a href="#!" class="grey-text text-darken-2">Profile<span class="new badge">2</span></a>
                  </li>
                  <li><a href="#!" class="grey-text text-darken-2">Notifications</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        <!--start container-->
        <div class="container">
          <p class="caption">Cards are a convenient means of displaying content composed of different types of objects. They’re also well-suited for presenting similar objects whose size or supported actions can vary considerably, like photos with captions of variable length.</p>
          <!--Card Panel-->
          <div class="divider"></div>
          <div id="card-panel-type" class="section">
            <h4 class="header">Card Panel</h4>
            <div class="row">
              <div class="col s12">
                <p>For a simpler card with less markup, try using a card panel which just has padding and a shadow effect</p>
              </div>
              <div class="col s12">
                <div class="row">
                  <div class="col s12 m4 l4">
                    <div class="card-panel yellow darken-4">
                      <span class="white-text">I am a very simple solid color card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.</span>
                    </div>
                  </div>
                  <div class="col s12 m4 l4">
                    <div class="card-panel gradient-45deg-light-blue-cyan gradient-shadow">
                      <span class="white-text">I am a very simple gradient color card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.</span>
                    </div>
                  </div>
                  <div class="col s12 m4 l4">
                    <div class="card-panel gradient-45deg-red-pink gradient-shadow">
                      <span class="white-text">I am a very simple gradient color card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="divider"></div>
          <!--Basic Card-->
          <div id="basic-card" class="section">
            <h4 class="header">Basic Card</h4>
            <div class="row">
              <div class="col s12">
                <p>Basic card good at containing small bits of information.</p>
              </div>
              <div class="col s12 m12 l12">
                <div class="row">
                  <div class="col s12 m6 l6">
                    <div class="card light-blue">
                      <div class="card-content white-text">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card with solid background & link. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                      </div>
                      <div class="card-action">
                        <a href="#!" class="white-text">This is a link</a>
                        <a href="#!" class="white-text">This is a link</a>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m6 l6">
                    <div class="card gradient-45deg-light-blue-cyan gradient-shadow">
                      <div class="card-content white-text">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card with gradient background & button. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                      </div>
                      <div class="card-action">
                        <a href="#!" class="waves-effect waves-light btn gradient-45deg-red-pink">Button</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Image Card-->
          <div class="divider"></div>
          <div id="image-card" class="section">
            <h4 class="header">Image Card</h4>
            <div class="row">
              <div class="col s12">
                <p>Here is the standard card with an image thumbnail.</p>
              </div>
              <div class="col s12 m12 l12">
                <div class="row">
                  <div class="col s12 m6 l6">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= base_url('vendor/'); ?>images/gallary/4.png" alt="sample">
                        <span class="card-title">Card Title</span>
                      </div>
                      <div class="card-content">
                        <p>I am a very simple card with link. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                      </div>
                      <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href='#'>This is a link</a>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m6 l6">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= base_url('vendor/'); ?>images/gallary/3.png" alt="sample">
                        <span class="card-title">Card Title</span>
                      </div>
                      <div class="card-content">
                        <p>I am a very simple card with button. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                      </div>
                      <div class="card-action">
                        <a href="#!" class="waves-effect waves-light btn gradient-45deg-red-pink">Button</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FABs in Cards -->
          <div class="divider"></div>
          <div id="fabs-card" class="section">
            <h4 class="header">FABs in Cards</h4>
            <div class="row">
              <div class="col s12">
                <p>Here is an image card with a Floating Action Button.</p>
              </div>
              <div class="col s12 m12 l12">
                <div class="row">
                  <div class="col s12 m6 l6">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= base_url('vendor/'); ?>images/gallary/6.png">
                        <span class="card-title">Card Title</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red">
                            <i class="material-icons">add</i>
                          </a>
                      </div>
                      <div class="card-content">
                        <p>I am a very simple card with small size solid color fab button. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m6 l6">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= base_url('vendor/'); ?>images/gallary/8.png">
                        <span class="card-title">Card Title</span>
                        <a class="btn-floating btn-large halfway-fab waves-effect waves-light gradient-45deg-red-pink gradient-shadow">
                            <i class="material-icons">add</i>
                          </a>
                      </div>
                      <div class="card-content">
                        <p>I am a very simple card with large size gradient color fab button. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Horizontal Card -->
          <div class="divider"></div>
          <div id="horizontal-card" class="section">
            <h4 class="header">Horizontal Card</h4>
            <div class="row">
              <div class="col s12">
                <p>Here is the standard card with a horizontal image.</p>
              </div>
              <div class="col s12 m12 l12">
                <div class="row">
                  <div class="col s12 m6 l6">
                    <div class="card horizontal">
                      <div class="card-image">
                        <img src="<?= base_url('vendor/'); ?>images/gallary/11.png">
                      </div>
                      <div class="card-stacked">
                        <div class="card-content">
                          <p>I am a very simple card with link. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                          <a href="#">This is a link</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m6 l6">
                    <div class="card horizontal">
                      <div class="card-image">
                        <img src="<?= base_url('vendor/'); ?>images/gallary/18.png">
                      </div>
                      <div class="card-stacked">
                        <div class="card-content">
                          <p>I am a very simple card with button. I am good at containing small bits of.</p>
                        </div>
                        <div class="card-action">
                          <a href="#!" class="waves-effect waves-light btn gradient-45deg-red-pink">Button</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Card Reveal-->
          <div class="divider"></div>
          <div id="card-reveal" class="section">
            <h4 class="header">Card Reveal</h4>
            <div class="row">
              <div class="col s12">
                <p>Here you can add a card that reveals more information once clicked.</p>
              </div>
              <div class="col s12 m12 l12">
                <div class="row">
                  <div class="col s12 m4 l4">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?= base_url('vendor/'); ?>images/gallary/12.png" alt="office">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Card Title
                            <i class="material-icons right">more_vert</i>
                          </span>
                        <p><a href="#">This is a link</a>
                        </p>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title
                            <i class="material-icons right">close</i>
                          </span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                      </div>
                    </div>
                    <p>
                      Just add the <code class=" language-markup">card-reveal</code> div with a <code class=" language-markup">span.card-title</code> inside to make this work. Add the class
                      <code class=" language-markup">activator</code> to an element inside the card to allow it to open the card reveal.
                    </p>
                  </div>
                  <div class="col s12 m4 l4">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?= base_url('vendor/'); ?>images/gallary/19.png">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Card Title
                            <i class="material-icons right">more_vert</i>
                          </span>
                        <p><a href="#!">This is a link</a></p>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title
                            <i class="material-icons right">close</i>
                            </i>
                          </span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                      </div>
                      <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                    <p>The default state is having the card-reveal go over the card-action.</p>
                  </div>
                  <div class="col s12 m4 l4">
                    <div class="card sticky-action">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?= base_url('vendor/'); ?>images/gallary/21.png">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Card Title
                            <i class="material-icons right">more_vert</i>
                          </span>
                        <p><a href="#!">This is a link</a></p>
                      </div>
                      <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title
                            <i class="material-icons right">close</i>
                            </i>
                          </span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                      </div>
                    </div>
                    <p>You can make your card-action always visible by adding the class <code class=" language-markup">sticky-action</code> to the overall card.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Tabs in Cards-->
          <div class="divider"></div>

          <!--Card Size-->
          <div class="divider"></div>
          <div id="card-size" class="section">
            <h4 class="header">Card Size</h4>
            <div class="row section">
              <div class="col s12">
                <p class="caption">Small</p>
                <p>The Small Card limits the height of the card to 300px.</p>
              </div>
              <div class="col s12 m6 l6">
                <div class="card small">
                  <div class="card-image">
                    <img src="<?= base_url('vendor/'); ?>images/gallary/23.png" alt="sample">
                    <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row section">
              <div class="col s12">
                <p class="caption">Medium</p>
                <p>The Medium Card limits the height of the card to 400px.</p>
              </div>
              <div class="col s12 m7 l7">
                <div class="card medium">
                  <div class="card-image">
                    <img src="<?= base_url('vendor/'); ?>images/gallary/25.png" alt="sample">
                    <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row section">
              <div class="col s12">
                <p class="caption">Large</p>
                <p>The Large Card limits the height of the card to 500px.</p>
              </div>
              <div class="col s12 m8 l8">
                <div class="card large">
                  <div class="card-image">
                    <img src="<?= base_url('vendor/'); ?>images/gallary/28.png" alt="sample">
                    <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

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
   