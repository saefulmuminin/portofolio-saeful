
 
 <aside
     class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
     id="sidenav-main">
     <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>     
         <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
             target="_blank">
             <img src="/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
             <span class="ms-1 font-weight-bold text-white">E-commers</span>
         </a>
     </div>
     <hr class="horizontal light mt-0 mb-2">
     <div class="collapse navbar-collapse  w-auto  height-600" id="sidenav-collapse-main">
         <ul class="navbar-nav">
             <li class="nav-item">
                 <a class="nav-link text-white active bg-gradient-primary" href="../pages/dashboard.html">
                     <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="material-icons opacity-10">dashboard</i>
                     </div>
                     <span class="nav-link-text ms-1">Dashboard</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-white " href="../pages/tables.html">
                     <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="material-icons opacity-10">table_view</i>
                     </div>
                     <span class="nav-link-text ms-1">Category Product</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-white " href="../pages/billing.html">
                     <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="material-icons opacity-10">shopping_cart</i>
                     </div>
                     <span class="nav-link-text ms-1">Product</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-white " href="../pages/virtual-reality.html">
                     <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="material-icons opacity-10">account_balance_wallet</i>
                     </div>
                     <span class="nav-link-text ms-1">Transaksion</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-white" href="../pages/pemesanan.html">
                     <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="material-icons opacity-10">receipt_long</i>
                     </div>
                     <span class="nav-link-text ms-1">Pemesanan</span>
                 </a>
             </li>

             <li class="nav-item">
                 <a class="nav-link text-white " href="../pages/notifications.html">
                     <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="material-icons opacity-10">notifications</i>
                     </div>
                     <span class="nav-link-text ms-1">Notifications</span>
                 </a>
             </li>
             <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-white " href="../pages/profile.html">
                     <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="material-icons opacity-10">person</i>
                     </div>
                     <span class="nav-link-text ms-1">Profile</span>
                 </a>
             </li>
             <li class="nav-item">
                <a class="nav-link text-white" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            
         </ul>
          <div class="sidenav-footer position-absolute w-100 bottom-0" >
             <div class="mx-3 ">
                 <img src="{{ asset('img/illustrations/3d-rendering-cartoon-like-woman-hijab.png') }}"
                     class="img-fluid mt-4 w-80 h-80" alt="Admin Image">
             </div>
         </div> 
     </div>
 </aside>
