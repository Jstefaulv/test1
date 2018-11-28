<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class=""><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>Panel</span></a></li>
        </ul><!-- /.sidebar-menu -->
        @useradmin
        {!! Menu::render(OptionMenu::orderBy('orden')->get()) !!}
        @else
        {!! Menu::render(Auth::user()->opciones()->orderBy('orden')->get()) !!}
        @enduseradmin
    </section>
    <!-- /.sidebar -->
</aside>
