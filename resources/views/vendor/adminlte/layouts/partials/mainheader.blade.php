<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><i class="fa fa-home"></i></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{config('app.nombre_negocio')}}</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu" id="user_menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        @if($user->plUimages->count()>0)
                        @foreach($user->plUimages as $key => $image)
                        <img src="{{srcImgBynary($image)}}" alt="{{$image->name}}" class="user-image">
                        @endforeach
                        @else
                        <img src="{{ $user->email ? Gravatar::get($user->email) : asset('img/avatar_none.png') }}" class="user-image" alt="User Image"/>
                        @endif
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            @if($user->plUimages->count()>0)
                            @foreach($user->plUimages as $key => $image)
                            <img src="{{srcImgBynary($image)}}" alt="{{$image->name}}" class="img-circle">
                            @endforeach
                            @else
                            <img src="{{ $user->email ? Gravatar::get($user->email) : asset('img/avatar_none.png') }}" class="img-circle" alt="User Image" />
                            @endif
                            <p>
                                {{ Auth::user()->name }}
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('user.edit.profile',Auth::user()->id) }}" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.profile') }}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ trans('adminlte_lang::message.signout') }}
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                <input type="submit" value="logout" style="display: none;">
                            </form>

                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</header>