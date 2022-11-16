@extends('layouts.master')

@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        @include('layouts.include._cardtemperature')
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="col-lg-5">
                                <!-- <input class="form-control text-center" format="dd mmmm yyyy" type="text"
                                    name="datetimes" id="myInput" onkeyup="tableSearch()" /> -->
                                <input type="text" id="myInput" onkeyup="tableSearch()">
                            </div>
                            <div class="col">
                                <button class="btn btn-info">Filter</button>
                            </div>
                            <div class="col">
                                <label class="visually-hidden">Preference</label>
                                <select class="form-select" id="filterByTemp" onchange="searchFilter()">
                                    <option value="cold">Cold Storage</option>
                                    <option value="cold-1">Cold Storage 1</option>
                                    <option value="cold-2">Cold Storage 2</option>
                                    <option value="cold-3">Cold Storage 3</option>
                                    <option value="cold-4">Cold Storage 4</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="export" class="btn btn-primary bd-highlight">Export data</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="myTable" data-filter-control="true"
                            data-show-search-clear-button="true">
                            <thead align="center">
                                <tr>
                                    <th>No</th>
                                    <th>Date/Time</th>
                                    <th>Area Name</th>
                                    <th>Temperature</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                @foreach($logging as $no => $t)
                                <tr>
                                    <th scope="row">{{ ++$no }}</th>
                                    <td>{{ date_format($t->created_at, "d-F-Y H:i:s") }}</td>
                                    <td>{{ $t->name }}</td>
                                    <td>{{ $t->value }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <!-- <tbody id="temperatur1" align="center"></tbody>
                            <tbody id="temperatur2" align="center"></tbody>
                            <tbody id="temperatur3" align="center"></tbody> -->
                        </table>
                        <div class="pagination mt-3 mx-3">
                            {{ $logging->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
<script type="text/javascript">
function tableSearch() {
    let input, filter, table, tr, td, txtValue;

    console.log("sukses");
}
</script>