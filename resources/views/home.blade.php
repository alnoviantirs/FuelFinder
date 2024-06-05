@extends('adminlte::page')

@section('title', 'Dashboard Admin - Welcome')

@section('content_header')
    <h1 class="m-0 text-dark"></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- Welcome Card Section -->
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h1 class="card-title text-center">WELCOME TO DASHBOARD ADMIN!</h1>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <!-- Dynamic Card Section -->
            <div class="row mt-3">
                <div class="col-lg-3 col-6">
                    <!-- Total Gas Stations Box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ \App\Models\SPBU::count() }}</h3>
                            <p>Total SPBU Di Bandung</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-gas-pump"></i>
                        </div>
                        <a href="{{ route('welcome') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Fuel Types Card Section -->
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ketersediaan BBM Di SPBU</h3>
                            <!-- Dropdown for SPBU selection -->
                            <div class="float-right">
                                <select class="form-control" id="spbuDropdown">
                                    <option>SPBU Pertamina Sukagalih</option>
                                    <option>SPBU Pertamina 34.40135</option>
                                    <option>SPBU Pertamina 34.40123</option>
                                    <option>SPBU Pertamina 34.40134 Pasirkaliki</option>
                                    <option>SPBU Pertamina Setiabudi</option>
                                    <option>SPBU Pertamina 34.40116</option>
                                    <option>SPBU Pertamina 34-40111</option>
                                    <option>SPBU Pertamina Cihampelas</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul>
                                <li>Pertamax Racing
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                    </div>
                                </li>
                                <li>Pertamax Turbo
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </li>
                                <li>Pertamax 
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                    </div>
                                </li>
                                <li>Pertalite
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                    </div>
                                </li>
                                <li>Premium 
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </li>
                                <li>Pertamina Dex
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                </li>
                                <li>Dexlite
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </li>
                                <li>Solar 
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                    </div>
                                </li>
                                <!-- Add more fuel types with percentages and colors here -->
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@stop
