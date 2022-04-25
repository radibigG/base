<div id="kt_header" class="header header-fixed">
    <div class="container-fluid d-flex justify-content-end">
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <infinite-slide-bar duration="40s" class="mt-7">
                    <div class="items" style="display: flex; justify-content: space-around;">
                        @foreach($coins as $coin)
                            @if($coin->percentChange24Hours > 0)
                                <span class="menu-text text-success">
                                    <icon-crypto coinname="{{ $coin->symbol }}" format="svg"></icon-crypto>
                                    <span class="font-weight-bolder ml-2"> {!! $coin->symbol.'&nbsp;$'.$coin->marketPrice !!}</span>
                                    <span> <i class="fa fa-caret-up text-success"></i> ({!! $coin->percentChange24Hours!!}%) </span>
                                </span>
                            @elseif($coin->percentChange24Hours == 0)
                                <span class="menu-text text-secondary">
                                    <icon-crypto coinname="{{ $coin->symbol }}" format="svg"></icon-crypto>
                                    <span class="font-weight-bolder ml-2"> {!! $coin->symbol.'&nbsp;$'.$coin->marketPrice !!}</span>
                                    <span> (0%) </span>
                                </span>
                            @else
                                <span class="menu-text text-danger">
                                    <icon-crypto coinname="{{ $coin->symbol }}" format="svg"></icon-crypto>
                                    <span class="font-weight-bolder ml-2"> {!! $coin->symbol.'&nbsp;$'.$coin->marketPrice !!}</span>
                                    <span> <i class="fa fa-caret-down text-danger"></i> ({!! $coin->percentChange24Hours!!}%) </span>
                                </span>
                            @endif
                        @endforeach
                    </div>
                </infinite-slide-bar>
            </div>
        </div>
        <div class="topbar">
            <div class="dropdown">
                <div class="topbar-item ml-4">
                    <a href="/admin/admins/{{ Auth::guard('admin')->user()->id }}" class="btn btn-light-primary" style="min-width: 135px;">
                        <span class="font-weight-bolder"> <i class="fa fa-user-circle"></i> My&nbsp;Account </span>
                    </a>
                </div>
                <div class="topbar-item ml-4">
                    <a href="/admin/logout" class="btn btn-icon btn-light-danger p-0">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
