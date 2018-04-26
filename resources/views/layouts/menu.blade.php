<li class="">
    <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Utama</span></a>
</li>
<li class="">
    <a href="#">
        <i class="fa fa-gears"></i>
        <span class="nav-label">{{__('Administrator')}}</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="nav nav-second-level collapse" style="">
        <li class="{{ Request::is('xrefStatuses*') ? 'active' : '' }}">
            <a href="{!! route('admin.xrefStatuses.index') !!}">{{ __('xrefStatuses.title') }}</a>
        </li>

        <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{!! route('admin.permissions.index') !!}">{{ __('permissions.title') }}</a>
        </li>

        <li class="{{ Request::is('xrefCountries*') ? 'active' : '' }}">
            <a href="{!! route('admin.xrefCountries.index') !!}">{{ __('xrefCountries.title') }}</a>
        </li>

        <li class="{{ Request::is('xrefStates*') ? 'active' : '' }}">
            <a href="{!! route('admin.xrefStates.index') !!}">{{ __('xrefStates.title') }}</a>
        </li>

        <li class="{{ Request::is('xrefDistricts*') ? 'active' : '' }}">
            <a href="{!! route('admin.xrefDistricts.index') !!}">{{ __('xrefDistricts.title') }}</a>
        </li>

        <li class="{{ Request::is('xrefSubdistricts*') ? 'active' : '' }}">
            <a href="{!! route('admin.xrefSubdistricts.index') !!}">{{ __('xrefSubdistricts.title') }}</a>
        </li>

        <li class="{{ Request::is('languageLines*') ? 'active' : '' }}">
            <a href="{!! route('admin.languageLines.index') !!}">{{ __('languageLines.title') }}</a>
        </li>
    </ul>
</li>


