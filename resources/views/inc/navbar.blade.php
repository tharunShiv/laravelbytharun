

<nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
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
                         <li>
                            <a class="nav-link" href="/about">About</a>
                          </li>
                          <li>
                            <a class="nav-link" href="/services">Services</a>
                          </li>
                          <li>
                            <a class="nav-link" href="/posts">Blog</a>
                          </li>
                        </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                

                                <ul class="dropdown-menu">
                                    <!--User added Dashboard link -->
                                    <li>
                                      <a href="/home" >Dashboard</a>
                                    </li>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




<!--   THE NAVBAR WE USED EARLIER
<nav class="navbar navbar-inverse navbar-expand-md navbar-dark bg-dark ">
  <div class="container">
      <a class="navbar-brand" href="/">{{config('app.name', 'Shiv')}}</a>
      

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="nav navbar-nav">
          
          <li>
            <a class="nav-link" href="/about">About</a>
          </li>
          <li>
            <a class="nav-link" href="/services">Services</a>
          </li>
          <li>
            <a class="nav-link" href="/posts">Blog</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a class="nav-link" href="/posts/create">Create a Post</a> 
          </li>
        </ul>
        </div>
     </div>
    </nav>
-->