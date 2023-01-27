<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<title>Jsscoin - @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="@php echo csrf_token(); @endphp">
<link rel="stylesheet" href="{{asset('backend/assets/app/bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body>
<div class="area" >
  <ul class="circles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
@include('header')

<div class="page-main">

    @yield('content')

</div>

<div class="copyright-outer text-center">
  <p>© 2018 JSSCOIN. All Rights Reserved.</p>
</div>
<!--scripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('backend/assets/js/global/global.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart_js/Chart.bundle.min.js')}}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{asset('backend/assets/js/peity/jquery.peity.min.js')}}"></script>
    <!-- Dashboard 1 -->
    <script src="{{asset('backend/assets/js/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>
    <script src="{{asset('backend/assets/js/deznav-init.js')}}"></script>
    <script src="{{asset('backend/assets/js/demo.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js"
        integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="{{asset('backend/assets/js/idoTest.js')}}?<?php echo time(); ?>"></script>
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.datatable').DataTable();
        });
    </script>
    <script src="{{asset('backend/assets/js/jquery.toaster.js')}}"></script>

    <script type="text/javascript">
        checkAllowance();

        function deposit_new(valPara){
            var amt   = $("#amt_"+valPara).val();
            // var limit = $("#limit_"+valPara).val();
            deposit(amt);
        }

        setTimeout(() => {
            checkuser();
        }, 2000);

      function copyElementText(id) {
        var dummyLink = $("#"+id).html();
        var dummy = $('<input>').val(dummyLink).appendTo('body').select();
        dummy.focus();
        document.execCommand('copy');
        $.toaster({ priority : 'success', title : 'Copy Alert !', message :  "Copied" });
      }


    </script>

    <script type="text/javascript">
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
        $('.main-header').addClass('active');
        } else {
        $('.main-header').removeClass('active');
        }
    });
</script>
</body>
</html>
