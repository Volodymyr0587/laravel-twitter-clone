<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('admin.dashboard') }}">
                    <span>{{ __("Dashboard") }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.users') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('admin.users') }}">
                    <span>{{ __("Users") }}</span></a>
            </li>

        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm {{ session()->get('locale') == 'en' ? 'text-white bg-primary rounded' : '' }}" href="{{ route('lang', 'en') }}">EN</a>
        <a class="btn btn-link btn-sm {{ session()->get('locale') == 'uk' ? 'text-white bg-primary rounded' : '' }}" href="{{ route('lang', 'uk') }}">UA</a>

    </div>
</div>
