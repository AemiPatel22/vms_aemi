@php

$currentRoute = Route::current()->getName();

@endphp

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ $currentRoute == 'dashboard'  ? 'active' : ''}}">
                    <a href="{{route('dashboard')}}">
                        <i class="fa fa-dashboard"></i> <span> Dashboard</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'category'  ? 'active' : ''}}">
                    <a href="{{route('category')}}">
                        <i class="fa fa-list-alt"></i> <span> Category</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'doc-type'  ? 'active' : ''}}">
                    <a href="{{route('doc-type')}}">
                        <i class="fa fa-file"></i> <span> Document Type</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'doc-entry'  ? 'active' : ''}}">
                    <a href="{{route('doc-entry')}}">
                        <i class="fa fa-file-text-o"></i> <span> Document Entry</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'export-data'  ? 'active' : ''}}">
                    <a href="{{route('export-data')}}">
                        <i class="fa fa-file"></i> <span>Export Data</span>
                    </a>

                </li>
                <li class="{{ $currentRoute == 'import-data'  ? 'active' : ''}}">
                    <a href="{{route('import-data')}}">
                        <i class="fa fa-file"></i> <span>Import Data</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'pdfdata'  ? 'active' : ''}}">
                    <a href="{{route('pdfdata')}}">
                        <i class="fa fa-file-pdf-o"></i> <span>PDF Data</span>
                    </a>
                </li>
                <li class="{{ $currentRoute == 'qrcode'  ? 'active' : ''}}">
                    <a href="{{route('qrcode')}}">
                        <i class="fa fa-qrcode"></i> <span>QR Code</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</div>
