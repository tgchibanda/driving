
      <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
  
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
  
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
  
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
  
                    <ul class="nav navbar-nav">
                            <li><a href="../about">ABOUT</a></li>
                            <li><a href="../services">SERVICES</a></li>
                            <li><a href="../posts">BLOG</a></li>
                            <li><a href="../findSchools">SCHOOLS</a></li>
                      </ul>
  
  
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px">
                                      <img src="../uploads/avatars/{{Auth::user()->avatar}}" style="width:32px; height:32px; position:absolute; border-radius:50%; top:10px; left:10px">  
                                  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
  
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="../home">Dashboard</a></li>
                                  <li><a href="./profile"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
  
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>