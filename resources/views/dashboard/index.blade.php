@extends('layouts.master')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        @include('layouts.include._cardtemperature')
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-around align-items-center">
                    <div>
                        <h4 style="color: #696F7B;" class="font-weight-bold mb-0">Grafik Temperature Cold Storage 1</h4>
                    </div>
                    <div>
                        <h4 style="color: #696F7B;" class="font-weight-bold mb-0">Grafik Temperature Cold Storage 2</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card1">
                    <div class="card-body">
                        <h4 class="card-title text-center">Grafik Laju masa air-COP</h4>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card1">
                    <div class="card-body">
                        <h4 class="card-title text-center">Grafik Laju masa air-COP</h4>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-around align-items-center">
                    <div>
                        <h4 style="color: #696F7B;" class="font-weight-bold mb-0">Grafik Temperature Cold Storage 3</h4>
                    </div>
                    <div>
                        <h4 style="color: #696F7B;" class="font-weight-bold mb-0">Grafik Temperature Cold Storage 4</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card1">
                    <div class="card-body">
                        <h4 class="card-title text-center">Grafik Laju masa air-COP</h4>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card1">
                    <div class="card-body">
                        <h4 class="card-title text-center">Grafik Laju masa air-COP</h4>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                        href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a
                        href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
            </div>
        </footer>
        <!-- partial -->
    </div>

    @endsection