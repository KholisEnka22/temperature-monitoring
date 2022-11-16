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


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/template/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <script src="https://kit.fontawesome.com/1503e969c9.js" crossorigin="anonymous"></script>

    <script src="{{asset('admin/template/js/socket.io.js')}}"></script>


    <!-- Date Picker -->


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
    <!-- <script src="{{asset('admin/template/vendors/chart.js/Chart.min.js')}}"></script> -->
    <script src="{{asset('admin/template/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('admin/template/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/template/js/hoverable-collapse.js')}}"></script>
    <!-- <script src="{{asset('admin/template/js/template.js')}}"></script> -->
    <script src="{{asset('admin/template/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin/template/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <script>
    var socket = io('http://localhost:3000');
    var messages = document.getElementById('messages');
    var room = "data";
    socket.on(room, function(msg) {
        console.log(msg);
        var nilai1 = document.getElementById('nilai1');
        nilai1.textContent = msg.nilai1;
        var nilai2 = document.getElementById('nilai2');
        nilai2.textContent = msg.nilai2;
        var nilai3 = document.getElementById('nilai3');
        nilai3.textContent = msg.nilai3;
        var nilai4 = document.getElementById('nilai4');
        nilai4.textContent = msg.nilai4;
    });
    </script>

    <!-- DateTime -->

    <script>
    $(function() {
        $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'DD MMMM YYYY - HH.MM'
            }
        });
    });
    </script>

    <!-- <script>
        function tableSearch() {
        let input, filter, table, tr, td, txtValue;

        console.log("sukses");
        input = document.getElementById("myInput");
        filter = input.value.topUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (let i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.topUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script> -->

    <!-- <script>
    var searchFilter = () => {
        let selectedColor = document.getElementById("filterByTemp").value;

        var sensor = [{
            "sensor": "cold-1",
            "data": {
                "tanggal": "16 Januari 2022 - 13.00 WIB",
                "suhu": "-10cc"
            }
        }, {
            "sensor": "cold-2",
            "data": {
                "tanggal": "16 Januari 2022 - 13.00 WIB",
                "suhu": "-10cc"
            }
        }, {
            "sensor": "cold-3",
            "data": {
                "tanggal": "16 Januari 2022 - 13.00 WIB",
                "suhu": "-10cc"
            }
        }, {
            "sensor": "cold-4",
            "data": {
                "tanggal": "16 Januari 2022 - 13.00 WIB",
                "suhu": "-10cc"
            }

        }]
        var datasensor = sensor.filter(p => p.sensor == selectedColor);


        // if (sensor[selectedColor]) {
        //     console.log("ke 1");
        if (selectedColor == "cold") {

            document.getElementById("temperatur").innerHTML = "<tr><td>" + sensor[0]["data"]["tanggal"] +
                "</td><td>" + sensor[0]["sensor"] + "</td><td>" + sensor[0]["data"]["suhu"] + "</td></tr>";

            document.getElementById("temperatur1").innerHTML = "<tr><td>" + sensor[1]["data"]["tanggal"] +
                "</td><td>" + sensor[1]["sensor"] + "</td><td>" + sensor[1]["data"]["suhu"] + "</td></tr>";

            document.getElementById("temperatur2").innerHTML = "<tr><td>" + sensor[2]["data"]["tanggal"] +
                "</td><td>" + sensor[2]["sensor"] + "</td><td>" + sensor[2]["data"]["suhu"] + "</td></tr>";


            document.getElementById("temperatur3").innerHTML = "<tr><td>" + sensor[3]["data"]["tanggal"] +
                "</td><td>" + sensor[3]["sensor"] + "</td><td>" + sensor[3]["data"]["suhu"] + "</td></tr>";


        } else {
            document.getElementById("temperatur").innerHTML = "<tr><td>" + datasensor[0]["data"]["tanggal"] +
                "</td><td>" + datasensor[0]["sensor"] + "</td><td>" + datasensor[0]["data"]["suhu"] + "</td></tr>";
        }

        // }
        // const input = document.querySelector(".form-select");
        // const tr = document.getElementsByClassName("tr");
        // console.log(tr[1])
        // let textBox = input.value;
        // for (let i = 0; i < tr.length; i++) {
        //     let title = tr[i].querySelector(".card-body");
        //     if ((tr[i].classList.contains(selectedColor) || selectedColor == "") && title.innerText.toLowerCase()
        //         .indexOf(textBox.toLowerCase()) > -1) {
        //         tr[i].classList.remove("d-none");
        //     } else {
        //         tr[i].classList.add("d-none");
        //     }
        // }
    }
    </script> -->

</body>

</html>