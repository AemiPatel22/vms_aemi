<script src="{{ asset('public/backend/assets/js/jquery-3.6.0.min.js') }}"></script>
{{-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
{{-- <script src="assets/js/jquery-3.6.0.min.js"></script> --}}

<script src="{{ asset('public/backend/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('public/backend/assets/js/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('public/backend/assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('public/backend/assets/plugins/raphael/raphael.min.js') }}"></script>

<script src="{{ asset('public/backend/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/backend/assets/js/chart.js') }}"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<script src="{{ asset('public/backend/assets/js/app.js') }}"></script>
@if (!empty($js))
    @foreach ($js as $value)
        <script src="{{ asset('public/backend/assets/js/customjs/'.$value) }}" type="text/javascript"></script>
    @endforeach
@endif



@if (!empty($pluginjs))
    @foreach ($pluginjs as $value)
        <script src="{{ asset('public/backend/assets/js/'.$value) }}" type="text/javascript"></script>
    @endforeach
@endif

<script type="text/javascript">
    jQuery(document).ready(function () {
        $('#loader').show();
        $('#loader').fadeOut(1000);
    });
</script>


<script>
jQuery(document).ready(function () {
    @if (!empty($funinit))
            @foreach ($funinit as $value)
                {{  $value }}
            @endforeach
    @endif
});
</script>


