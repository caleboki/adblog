<nav class="navbar has-shadow">
    <div class="container">
        {{-- Logo starts here --}}
        <div class="navbar-brand">

            <a class="navbar-item is-paddingless" href="{{route('home')}}">
                <img src="{{asset('images/devmarketer-logo.png')}}" alt="AdBlog Logo" />
            </a>

            @if (Request::segment(1) == "manage")
                <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
                 <span class="icon">
                <i class="fa fa-arrow-circle-right"></i>
                </span>
                </a>
            @endif

            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
              <span></span>
              <span></span>
              <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item is-tab m-l-10" href="#">
                    Learn
                </a>
                <a class="navbar-item is-tab m-l-10" href="#">
                    Discuss
                </a>
                <a class="navbar-item is-tab m-l-10" href="#">
                    Share
                </a>
              {{-- <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="/documentation/overview/start/">
                  Docs
                </a>
                <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" href="/documentation/overview/start/">
                    Overview
                  </a>
                  <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                    Modifiers
                  </a>
                  <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                    Columns
                  </a>
                  <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                    Layout
                  </a>
                  <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                    Form
                  </a>
                  <hr class="navbar-divider">
                  <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                    Elements
                  </a>
                  <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                    Components
                  </a>
                </div> 
                </div> --}}
            
            </div> {{-- End of navbar-start --}}

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        @if (Auth::guest())
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

                                    </div>{{-- End of dropdown-content --}}
                                </div>{{-- End of dropdown-menu --}}
                            </div>
                        @endif
                       
                          
                    </div>
                </div>
            </div> {{-- End of navbar-end --}}
        </div>  {{-- End of navbar-menu --}}
    </div>
    
</nav>