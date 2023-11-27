<!--Start Side bar main menu-->
<div class="main_sidebar bring_right">
    <div class="main_sidebar_wrapper">
        <ul>
            {{-- @if (\App\Models\Page::count())
                @foreach (\App\Models\Page::with('subPage')->where('parent', 0)->orderBy('order', 'asc')->get() as $page)
                    <li><span class="{{ $page->icon }}"></span>
                        <a href="{{ count($page->subPage) > 0 ? '#' : url($page->url) }}"
                            style="{{ \Request::segment(2) == $page->url || (\Request::segment(2) == null && $page->url == '/') ? 'color:red' : '' }}">{{ $page->name }}
                        </a>
                        @if (count($page->subPage) > 0)
                            <ul class="drop_main_menu opened" style="display: block">
                                @foreach ($page->subPage as $subPage)
                                    <li><a href="{{ url($subPage->url) }}">{{ $subPage->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endif --}}

            <li class="c-sidebar-nav-item">
                <span class="glyphicon glyphicon-home"></span>

                <a href="{{ url('/') }}">
                    الصفحة الرئيسية
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <span class="glyphicon glyphicon-list"></span>

                <a href="{{ url('/errors') }}">
                    الأعطـــال
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <span class="glyphicon glyphicon-plus"></span>

                <a href="{{ url('/errors/create') }}">
                    اضافه عطل
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <span class="glyphicon glyphicon-list"></span>

                <a href="{{ url('/cars') }}">
                    السيـــارات
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <span class="glyphicon glyphicon-plus"></span>

                <a href="{{ url('/cars/create') }}">
                    اضافه سيارة
                </a>
            </li>


            <li class="c-sidebar-nav-item">
                <span class="glyphicon glyphicon-list"></span>

                <a href="{{ route('admin.cars.check.create') }}">
                    لجنة الفحص
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <span class="glyphicon glyphicon-log-out"></span>

                <a href="{{ url('/admin/logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    تسجيل الخروج
                </a>
            </li>
            <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
    </div>
</div>
<!--/End side bar main menu-->
