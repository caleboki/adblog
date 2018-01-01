<nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-start">

                    <a class="navbar-item" href="{{route('home')}}">

                        <img src="{{asset('images/devmarketer-logo.png')}}" alt="AdBlog Logo" />

                    </a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>

                </div>

                <div class="navbar-end" style="overflow: visible;">
                    @if(Auth::guest())

                    <a href="{{route('login')}}" class="navbar-item is-tab is-hidden-mobile">
                        <i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>&nbsp; Login
                    </a>
                    <a href="{{route('register')}}" class="navbar-item is-tab is-hidden-mobile">
                        <i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>&nbsp; Join the Community
                    </a>

                    @else
                    <div class="dropdown is-hoverable is-right">
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="#">
                                <figure class="image is-24x24" style="margin-right: 8px;">
                                    <img src="http://bulma.io/images/jgthms.png">
                                </figure> Hey {{ Auth::user()->name }}
                            </a>
                        </div>
                        <div class="dropdown-menu">
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user-circle-o fa-fw m-r-5" aria-hidden="true"></i>&nbsp; Profile
                                </a>
                                <a class="dropdown-item is-active" href="#">
                                    <i class="fa fa-bell fa-fw m-r-5" aria-hidden="true"></i>&nbsp; Notifications
                                </a>
                                <a class="dropdown-item" href="{{route('manage.dashboard')}}">
                                    <i class="fa fa-fw fa-cog m-r-5" aria-hidden="true"></i>&nbsp; Manage
                                </a>
                                <hr class="m-t-5 m-b-5">
                                 <a class="dropdown-item" href="{{ route('logout') }}"
            
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw fa-sign-out m-r-5" aria-hidden="true"></i>&nbsp; Logout
        
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>



            </div>
        </nav>