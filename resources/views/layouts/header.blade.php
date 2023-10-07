 <header class="mb-4 header header-sticky">
     <div class="container-fluid">
         <button class="header-toggler px-md-0 me-md-3" type="button"
             onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
             <svg class="icon icon-lg">
                 <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
             </svg>
         </button><a class="header-brand d-md-none" href="#">
             <img src="{{ asset('assets/logo-d.png') }}" class="sidebar-brand-full" width="200" height="46" /></a>

         <ul class="header-nav ms-auto">
             <li class="nav-item"><a class="nav-link" href="#">
                     <svg class="icon icon-lg">
                         <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                     </svg></a></li>

         </ul>
         <ul class="header-nav ms-3">
             <li class="nav-item dropdown"><a class="py-0 nav-link" data-coreui-toggle="dropdown" href="#"
                     role="button" aria-haspopup="true" aria-expanded="false">
                     <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('assets/profile.png') }}"
                             alt="user@email.com"></div>
                 </a>
                 <div class="pt-0 dropdown-menu dropdown-menu-end">
                    
                       
                     <div class="py-2 dropdown-header bg-light">
                         <div class="fw-semibold">Settings</div>
                     </div><a class="dropdown-item" href="#">
                         <svg class="icon me-2">
                             <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                         </svg> Settings</a>
                     <div class="dropdown-divider"></div><a class="dropdown-item" href="#">

                         <svg class="icon me-2">
                             <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                         </svg>    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form></a>
                 </div>
             </li>
         </ul>
     </div>
     <div class="header-divider"></div>
     <div class="container-fluid">
         <nav aria-label="breadcrumb">
             <ol class="my-0 breadcrumb ms-2">
                 <li class="breadcrumb-item">
                     <!-- if breadcrumb is single--><span>Home</span>
                 </li>
                 <li class="breadcrumb-item active"><span>Dashboard</span></li>
             </ol>
         </nav>
     </div>
 </header>
