<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="{{asset('/adminasset/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <!-- <p>Alexander Pierce</p> -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active ">
          <a href="{{url('admin/dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>         
          </a>          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Website Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
           {{--*/ $pages=Helper::pages() /*--}}
           @foreach(Helper::pages() as $page)
                  <li><a href='{{url("admin/pages/$page->slug")}}'><i class="fa fa-circle-o"></i>{{$page->name}}</a></li>
           @endforeach

            @foreach(Helper::slidertype() as $slidertype)
                  <li><a href='{{url("admin/slider/$slidertype->slug")}}'><i class="fa fa-circle-o"></i>{{$slidertype->name}}</a></li>
           @endforeach
            <li><a href="{{url('admin/partner')}}"><i class="fa fa-circle-o"></i>Partners</a></li>
            <li><a href="{{url('admin/advertiser')}}"><i class="fa fa-circle-o"></i>Existing Advertisers</a></li>
            <li><a href="{{url('admin/keyreader')}}"><i class="fa fa-circle-o"></i>Key Reader Icons</a></li>
            <li><a href="{{url('admin/media-partner')}}"><i class="fa fa-circle-o"></i>Media Partners</a></li>
          </ul>          
        </li>
        <li >
          <a href="{{url('admin/companyinfo')}}">
            <i class="fa fa-share"></i> <span>Company Info</span>
          </a>
        </li>
         <li >
          <a href="{{url('admin/contact')}}">
            <i class="fa fa-share"></i> <span>Contact Messages</span>
          </a>
        </li>
         <li >
          <a href="{{url('admin/subscribe')}}">
            <i class="fa fa-share"></i> <span>Subscriptions</span>
          </a>
        </li>
         <li >
          <a href="{{url('admin/advertise')}}">
            <i class="fa fa-share"></i> <span>Advertises</span>
          </a>
        </li>
        <li >
          <a href="{{url('admin/allvisitors')}}">
            <i class="fa fa-share"></i> <span>Total Visitors</span>
          </a>
        </li>
        <li >
          <a href="{{url('admin/visitor')}}">
            <i class="fa fa-share"></i> <span>Unique Visitors</span>
          </a>
        </li>
        <li >
          <a href="{{url('admin/reserve')}}">
            <i class="fa fa-share"></i> <span>Front & Back Cover AD</span>
          </a>
        </li>
        <li >
          <a href="{{url('admin/addslide')}}">
            <i class="fa fa-share"></i> <span>Home Left Slider</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>