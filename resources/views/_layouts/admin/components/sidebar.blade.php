<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <div class="brand flex-column-auto" id="kt_brand" style="justify-content: center;">
        <a href="/" class="brand-logo" style="color: #181c32; font-weight: bold; font-size: 28px;"> Crypteris </a>
    </div>
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="aside-menu my-4 scroll ps ps--active-y" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <ul class="menu-nav">
                <li class="menu-item {{ Request::is('admin') ? 'menu-item-active' : '' }}">
                    <a class="menu-link" href="/admin">
                        <span class="menu-icon"> <i class="fa fa-th"></i> </span> <span class="menu-text"> Dashboard </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
