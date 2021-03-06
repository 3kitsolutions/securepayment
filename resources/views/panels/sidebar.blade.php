<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="javascript:;"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">S-Epayments</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item {{ ($menu_item == 'admin_dashboard' || $menu_item == 'merchant_dashboard') ?'active':''}}"><a class="d-flex align-items-center" href="{{ $menu_item == 'admin_dashboard' ? route('admin.dashboard')  : route('merchant.dashboard')}}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Email">Dashboard</span></a></li>
                <!-- START: Super Admin Main Menu-->
                @if(Auth::user()->role_id == 1)
                <li class=" nav-item {{ ($menu_item == 'merchant_list' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('admin.merchants') }}"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Email">Merchants</span></a></li>
                <li class=" nav-item {{ ($menu_item == 'user_list' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('admin.users') }}"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Email">Users</span></a></li>
                <li class=" nav-item {{ ($menu_item == 'mid_list' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('admin.mids') }}"><i data-feather='codesandbox'></i><span class="menu-title text-truncate" data-i18n="Email">Manage MID</span></a></li>
                <li class=" nav-item {{ ($menu_item == 'order_list' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('admin.orders') }}"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="Email">Orders</span></a></li>
                <li class=" nav-item {{ ($menu_item == 'token_transections' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('admin.token_transections') }}"><i data-feather="codepen"></i><span class="menu-title text-truncate" data-i18n="Email">Token Transaction</span></a></li>
                <li class=" nav-item {{ ($menu_item == 'pending_cash_out' ) ?'active':''}}" ><a class="d-flex align-items-center" href="{{ route('admin.pending_cash_out') }}"><i data-feather="dollar-sign"></i><span class="menu-title text-truncate" data-i18n="Email">Pending Cash Outs</span></a></li>
                @endif
                <!-- END: Super Admin Main Menu-->

                <!-- START: Merchant Main Menu-->
                @if(Auth::user()->role_id == 3)
                <li class=" nav-item {{ ($menu_item == 'order_list' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('merchant.orders') }}"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="Email">Orders</span></a></li>
                <li class=" nav-item {{ ($menu_item == 'access_key' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('merchant.access_key') }}"><i data-feather="key"></i><span class="menu-title text-truncate" data-i18n="Email">Access Key</span></a></li>
                <li class=" nav-item {{ ($menu_item == 'plan_list' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('merchant.plan_list') }}"><i data-feather="layers"></i><span class="menu-title text-truncate" data-i18n="Email">Plans</span></a></li>
                <li class=" nav-item {{ ($menu_item == 'token_to_money' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('merchant.token_to_money') }}"><i data-feather="refresh-cw"></i><span class="menu-title text-truncate" data-i18n="Email">Token To Money</span></a></li>
                <li class=" nav-item {{ ($menu_item == 'token_transections' ) ?'active':''}}"><a class="d-flex align-items-center" href="{{ route('merchant.token_transections') }}"><i data-feather="codepen"></i><span class="menu-title text-truncate" data-i18n="Email">Token Transaction</span></a></li>
                @endif
                <!-- END: Merchant Main Menu-->
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->