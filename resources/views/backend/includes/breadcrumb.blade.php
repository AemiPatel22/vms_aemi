
@php
$count = count($header['breadcrumb']);
$temp = 1;
@endphp
@foreach ($header['breadcrumb'] as $key => $value)
@php
$value = (empty($value)) ? 'javascript:;' : $value;
@endphp

@if($temp!=$count)
    <ul class="breadcrumb">
        @if($temp == 1)
        <i class="la la-dashboard mt-1"></i> @endif
        <li class="breadcrumb"><a href="{{ $value }}">{{ $key }} /&nbsp;</a></li>
@else
    <li class="breadcrumb-item active">{{ $key }}</li>
@endif
@php
    $temp = $temp+1;
@endphp
@endforeach
    </ul>
