@php
// $moment_time_format = App\Models\System::getProperty('time_format') == '12' ? 'hh:mm A' : 'HH:mm';
$moment_time_format = 'hh:mm A';
@endphp
<script>
    var moment_time_format = "{{ $moment_time_format }}";
</script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
<script src="{{ asset('js/js.cookie.min.js') }}"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/accounting.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>




<script src="{{ asset('js/vendor/bootstrap-4.1.3.min.js') }}"></script>
<script src="{{ asset('js/vendor/wow.min.js') }}"></script>
<script src="{{ asset('js/vendor/owl-carousel.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.datetimepicker.full.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>