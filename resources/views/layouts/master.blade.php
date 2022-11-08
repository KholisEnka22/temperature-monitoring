<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/template/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/template/vendors/base/vendor.bundle.base.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/template/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <script src="https://kit.fontawesome.com/1503e969c9.js" crossorigin="anonymous"></script>

    <script src="{{asset('admin/template/js/socket.io.js')}}"></script>
    <script src="{{asset('admin/template/js/search.js')}}"></script>

    <!-- Date Picker -->
    <link href="{{asset('admin/datepicker/dist/datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('admin')}}\air-datepicker\dist\css\datepicker.css"></script>
    <script src="{{asset('admin')}}\air-datepicker\dist\css\datepicker.min.js"></script>


</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.include._navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('layouts.include._sidebar')
            <!-- partial -->
            @yield('content')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('admin/template/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('admin/template/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="j{{asset('admin/template/s/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('admin/template/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/template/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/template/js/template.js')}}"></script>
    <script src="{{asset('admin/template/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin/template/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->

    <script src="{{asset('admin/datepicker/i18n/datepicker.en.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{asset('admin')}}/air-datepicker\dist\js\datepicker.js"></script>
    <script src="{{asset('admin')}}/air-datepicker\dist\js\i18n\datepicker.en.js""></script>

    <script>
    var socket = io('http://localhost:3000');
    var messages = document.getElementById('messages');
    var room = " data"; socket.on(room, function(msg) { console.log(msg); var nilai1=document.getElementById('nilai1');
        nilai1.textContent=msg.nilai1 var nilai2=document.getElementById('nilai2'); nilai2.textContent=msg.nilai2 var
        nilai3=document.getElementById('nilai3'); nilai3.textContent=msg.nilai3 var
        nilai4=document.getElementById('nilai4'); nilai4.textContent=msg.nilai4 }); </script>
    <!-- DateTime 
    -->
    <script>
    $(function() {
        var $startDate = $('.start-date');
        var $endDate = $('.end-date');

        $startDate.datepicker({
            autoHide: true,
        });
        $endDate.datepicker({
            autoHide: true,
            startDate: $startDate.datepicker('getDate'),
        });

        $startDate.on('change', function() {
            $endDate.datepicker('setStartDate', $startDate.datepicker('getDate'));
        });
    });
    </script>

</body>

</html>