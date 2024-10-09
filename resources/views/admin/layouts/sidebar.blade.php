<div class="navbar-bg"></div>
<!-- Navbar Start -->
@include('admin.layouts.navbar')
<!-- Navbar End -->
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="active">
        <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>        
      </li>
      <li class="menu-header">Starter</li>
      <li><a class="nav-link" href="{{ route('admin.language.index') }}">
        <i class="fas fa-list"></i> <span>{{ __('admin.Languages') }}</span>
          </a>
      </li>
      <li><a class="nav-link" href="{{ route('admin.category.index') }}">
      <i class="fas fa-list"></i><span>{{ __('admin.category') }}</span>
          </a>
      </li>
     
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
          <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
          <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
        </ul>
      </li>
      <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
     
     
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>News</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('admin.news.index') }}">All News</a></li>
          <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
          <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
        </ul>
      </li>
      <li><a class="nav-link" href="{{ route('admin.home-section-setting.index') }}">
        <i class="fas fa-list"></i> <span>{{ __('admin.Home Section Setting') }}</span>
          </a>
      </li>
      <li><a class="nav-link" href="{{ route('admin.ad.index') }}">
        <i class="fas fa-list"></i> <span>{{ __('admin.AD Setting') }}</span>
          </a>
      </li>
      <li><a class="nav-link" href="{{ route('admin.social-count.index') }}">
        <i class="fas fa-hashtag"></i><span>{{ __('admin.Social Count') }}</span></a>
      </li>
      <li>
        <a class="nav-link" href="{{ route('admin.social-link.index') }}">{{ __('admin.Social Links') }}</a>
      </li>
    </ul>
    <li><a class="nav-link" href="{{ route('admin.subscribers.index') }}">
          <i class="fas fa-users"></i><span>{{ __('admin.Subscribers') }}</span></a>
    </li>
   <ul class="sidebar-menu">
     <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"> </i> <span>{{ __('Footer') }} {{ __('Setting') }}</span></a> 
        <ul class="dropdown-menu">
          <li> <a class="nav-link" href="{{ route('admin.social-link.index') }}"> <span>{{ __('admin.Social Links') }}</span></a></li>    
          <li> <a class="nav-link" href="{{ route('admin.footer-info.index') }}"> <span>{{ __('admin.Footer Info') }}</span></a></li>    
          <li> <a class="nav-link" href="{{ route('admin.footer-grid-one.index') }}"> <span>{{ __('admin.Footer Grid One')  }}</span></a></li> 
          <li> <a class="nav-link" href="{{ route('admin.footer-grid-two.index') }}"> <span>{{ __('admin.Footer Grid Two')  }}</span></a></li> 
          <li> <a class="nav-link" href="{{ route('admin.footer-grid-three.index') }}"> <span>{{ __('admin.Footer Grid Three')  }}</span></a></li> 
             
        </ul>
                      
             
    </li>
    
   <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Pages</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('admin.about.index') }}">About</a></li>
          <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
          <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
        </ul>
      </li>
          
   </ul>

  </aside>
</div>