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
            <a href="{!! route('xrefStatuses.index') !!}">XrefStatuses</a>
        </li>

        <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{!! route('permissions.index') !!}">Permissions</a>
        </li>

        <li class="{{ Request::is('xrefCountries*') ? 'active' : '' }}">
            <a href="{!! route('xrefCountries.index') !!}">XrefCountries</a>
        </li>

        <li class="{{ Request::is('xrefStates*') ? 'active' : '' }}">
            <a href="{!! route('xrefStates.index') !!}">xrefStates</a>
        </li>

        <li class="{{ Request::is('xrefStates*') ? 'active' : '' }}">
            <a href="{!! route('xrefStates.index') !!}">XrefStates</a>
        </li>

        <li class="{{ Request::is('xrefDistricts*') ? 'active' : '' }}">
            <a href="{!! route('xrefDistricts.index') !!}">XrefDistricts</a>
        </li>

        <li class="{{ Request::is('xrefSubdistricts*') ? 'active' : '' }}">
            <a href="{!! route('xrefSubdistricts.index') !!}">XrefSubdistricts</a>
        </li>
        <li class="{{ Request::is('reporters*') ? 'active' : '' }}">
            <a href="{!! route('reporters.index') !!}">Reporters</a>
        </li>

        <li class="{{ Request::is('languageLines*') ? 'active' : '' }}">
            <a href="{!! route('languageLines.index') !!}">LanguageLines</a>
        </li>

        <li class="{{ Request::is('tickets*') ? 'active' : '' }}">
            <a href="{!! route('tickets.index') !!}">Tickets</a>
        </li>

        <li class="{{ Request::is('xrefOptions*') ? 'active' : '' }}">
            <a href="{!! route('xrefOptions.index') !!}">XrefOptions</a>
        </li>
    </ul>
</li>


