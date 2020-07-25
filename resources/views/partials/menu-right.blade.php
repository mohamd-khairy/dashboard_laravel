@if(\App\Models\Page::count())
<!--Start Side bar main menu-->
<div class="main_sidebar bring_right">
    <div class="main_sidebar_wrapper">
        <form class="form-inline search_box text-center">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="كلمة البحث">
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
                </button>
            </div>
        </form>

        <ul>
            @foreach(\App\Models\Page::with('subPage')->where('parent',0)->orderBy('order','asc')->get() as $page)
            <li><span class="{{$page->icon}}"></span>
            <a href="{{count($page->subPage) > 0 ? '#' : url('/admin/'.$page->url)}}">{{ app()->getLocale() == 'en' ? $page->name_en : $page->name_ar}}</a>
                @if(count($page->subPage) > 0)
                <ul class="drop_main_menu">
                    @foreach($page->subPage as $subPage)
                    <li><a href="{{url('/admin/'.$subPage->url)}}">{{ app()->getLocale() == 'en' ? $subPage->name_en : $subPage->name_ar}}</a></li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!--/End side bar main menu-->
@endif