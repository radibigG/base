<div id="kt_aside" class="aside aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="/" class="brand-logo">
            <img src="/images/AVRION_RISK_logo.png" alt="avrion-risk-logo" class="h-25px logo">
        </a>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="aside-footer flex-column-auto pt-5 px-5" id="kt_aside_footer">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                    <a href="#">
                        <div class="symbol-label">
                            <img src="/assets/media/avatars/blank.png" alt="Avatar" class="w-100">
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1"> John Doe </a>
                    <span> (Balance: $343.50) </span>
                </div>
            </div>
        </div>
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                        <span class="menu-icon"> <i class="fa fa-th-large" style="font-size: 18px;"></i> </span>
                        <span class="menu-title"> Dashboard </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
