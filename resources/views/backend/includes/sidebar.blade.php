@php

$currentRoute = Route::current()->getName();

@endphp

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ $currentRoute == 'dashboard'  ? 'active' : ''}}">
                    <a href="{{route('dashboard')}}">
                        <i class="la la-dashboard"></i> <span> Dashboard</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'category'  ? 'active' : ''}}">
                    <a href="{{route('category')}}">
                        <i class="la la-object-ungroup"></i> <span> Category</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'doc-type'  ? 'active' : ''}}">
                    <a href="{{route('doc-type')}}">
                        <i class="la la-file-text"></i> <span> Document Type</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'doc-entry'  ? 'active' : ''}}">
                    <a href="{{route('doc-entry')}}">
                        <i class="la la-file-text"></i> <span> Document Entry</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'export-data'  ? 'active' : ''}}">
                    <a href="{{route('export-data')}}">
                        <i class="la la-external-link-square"></i> <span>Export Data</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'import-data'  ? 'active' : ''}}">
                    <a href="{{route('import-data')}}">
                        <i class="la la-external-link-square"></i> <span>Import Data</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'pdfdata'  ? 'active' : ''}}">
                    <a href="{{route('pdfdata')}}">
                        <i class="la la-external-link-square"></i> <span>PDF Data</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</div>
