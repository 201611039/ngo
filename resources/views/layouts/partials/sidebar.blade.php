@php
    $navigations = [
        [
            'title' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'url' => route('dashboard'), 'segment' => Route::is('dashboard'), 'children' => [],
        ], [
            'title' => 'Users', 'icon' => 'fa fa-users', 'url' => route('users.index'), 'segment' => Route::is('users*'), 'children' => [],
        ], [
            'title' => 'Events', 'icon' => 'fa fa-calendar', 'url' => route('events.index'), 'segment' => Route::is('events*'), 'children' => [],
        ], [
            'title' => 'Sponsors', 'icon' => 'fa fa-diamond', 'url' => route('sponsors.index'), 'segment' => Route::is('sponsors*'), 'children' => []
        ], [
            'title' => 'About Us', 'icon' => 'fa fa-photo', 'url' => route('about.index'), 'segment' => Route::is('about*'), 'children' => []
        ], [
            'title' => 'EXTERNAL LINKS', 'type' => 'header'
        ], [
            'title' => 'Website', 'icon' => 'fa fa-laptop', 'url' => url('/'), 'segment' => Route::is('users*'), 'children' => [],
        ]
    ];
@endphp

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/avatar.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->name??'' }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        @foreach ($navigations as $navigation)
            @if (isset($navigation['type']))
                <li class="header">{{ $navigation['title'] }}</li>
            @else
                <li class="{{ count($navigation['children'])?'treeview':'' }} {{ $navigation['segment']? 'active':'' }}">
                <a href="{{ $navigation['url'] }}">
                    <i class="{{ $navigation['icon'] }}"></i> <span>{{ $navigation['title'] }}</span>
                    @if(count($navigation['children']))
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    @endif
                </a>
                @if(count($navigation['children']))
                    <ul class="treeview-menu">
                        @foreach ($navigation['children'] as $navigation)
                            <li class="{{ $navigation['segment']? 'active':'' }}"><a href="{{ $navigation['url'] }}"><i class="fa fa-circle-o"></i> {{ $navigation['title'] }}</a></li>
                        @endforeach
                    </ul>
                @endif
                </li>
            @endif
        @endforeach
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
