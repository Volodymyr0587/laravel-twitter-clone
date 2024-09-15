<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('dashboard') }}">
                    <span>{{ __('sidebar.home') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>{{ __('sidebar.explore') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('feed') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('feed') }}">
                    <span>{{ __('sidebar.feed') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('terms') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('terms') }}">
                    <span>{{ __('sidebar.terms') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>{{ __('sidebar.support') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>{{ __('sidebar.settings') }}</span></a>
            </li>
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm {{ session()->get('locale') == 'en' ? 'text-white bg-primary rounded' : '' }}" href="{{ route('lang', 'en') }}">EN</a>
        <a class="btn btn-link btn-sm {{ session()->get('locale') == 'uk' ? 'text-white bg-primary rounded' : '' }}" href="{{ route('lang', 'uk') }}">UA</a>

    </div>
</div>
