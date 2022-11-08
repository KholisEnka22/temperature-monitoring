@extends('layouts.master')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card2">
                    <div class="card-body">
                        <h6 class="card-title" style="color: white;">Temperature Cold Storage 1</h6>
                        <div class="d-flex flex-column" style="color: white;">
                            <h3 id="nilai1" class="text-center mt-3"></h3>
                            <i class="text-center fas fa-temperature-low fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card2">
                    <div class="card-body">
                        <h6 class="card-title" style="color: white;">Temperature Cold Storage 2</h6>
                        <div class="d-flex flex-column" style="color: white;">
                            <h3 id="nilai2" class="text-center mt-3"></h3>
                            <i class="text-center fas fa-temperature-low fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card2">
                    <div class="card-body">
                        <h6 class="card-title" style="color: white;">Temperature Cold Storage 3</h6>
                        <div class="d-flex flex-column" style="color: white;">
                            <h3 id="nilai3" class="text-center mt-3"></h3>
                            <i class="text-center fas fa-temperature-low fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card2">
                    <div class="card-body">
                        <h6 class="card-title" style="color: white;">Temperature Cold Storage 4</h6>
                        <div class="d-flex flex-column" style="color: white;">
                            <h3 id="nilai4" class="text-center mt-3"></h3>
                            <i class="text-center fas fa-temperature-low fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="col mx-3">
                                <!-- <input type="text" class="form-control datepicker-here" autocomplete="off"
                                    data-language="en" data-date-format="yyyy-mm-dd" name="min" id="min"> -->
                                <input type="text" class="form-control datepicker-here" name=" tgl" id="tgl"
                                    placeholder="DD-MM-YYYY" data-language='id' data-multiple-dates-separator=", "
                                    data-position='top left' />
                            </div>
                            <div class="col mx-3">
                                <!-- <input type="text" class="form-control datepicker-here" autocomplete="off"
                                    data-language="en" data-date-format="yyyy-mm-dd" name="max" id="max"> -->
                                <input type="text" placeholder="End date" aria-label="Last name"
                                    class="form-control end-date">
                            </div>
                            <div class="col mx-3">
                                <button id="btn-filter" class="btn btn-info">Filter</button>
                            </div>
                            <div class="col mx-3">
                                <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                <select class="form-select" id="specificSizeSelect">
                                    <option value="1">Cold Storage1</option>
                                    <option value="2">Cold Storage2</option>
                                    <option value="3">Cold Storage3</option>
                                    <option value="3">Cold Storage4</option>
                                </select>
                            </div>
                            <div class="col mx-3">
                                <button type="export" class="btn btn-primary bd-highlight">Export data</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead align="center">
                                <tr>
                                    <th>Date/Time</th>
                                    <th>Area Name</th>
                                    <th>Temperature</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                <tr>
                                    <td>16 Januari 2022 - 13.00 WIB</td>
                                    <td>Cold Storage 1</td>
                                    <td>-10.0°C</td>
                                </tr>
                                <tr>
                                    <td>20 Februari 2022 - 13.00 WIB</td>
                                    <td>Cold Storage 1</td>
                                    <td>-10.0°C</td>
                                </tr>
                                <tr>
                                    <td>20 Juni 2022 - 13.00 WIB</td>
                                    <td>Cold Storage 2</td>
                                    <td>-10.0°C</td>
                                </tr>
                                <tr>
                                    <td>26 Juni 2022 - 13.00 WIB</td>
                                    <td>Cold Storage 2</td>
                                    <td>-10.0°C</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection