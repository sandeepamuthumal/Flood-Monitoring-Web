<div>
    <div class="sensor-data">
        <div class="row mb-5">
            <div class="col-lg-4">
                <select name="city" id="city" class="form-select">
                    <option value="">Choose City</option>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row" style="justify-content: center">
                    <!-- River Water Level -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">River Water Level</h5>
                                <p class="card-text">Current Level: <span id="river-level" class="fw-bold">0 cm</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Road Water Level -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Road Water Level</h5>
                                <p class="card-text">Current Level: <span id="road-level" class="fw-bold">0 cm</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Rain Status -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Rain Status</h5>
                                <p class="card-text">Rain Level: <span id="rain-status" class="fw-bold">No Rain</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Temperature -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Temperature</h5>
                                <p class="card-text">Current Temperature: <span id="temperature"
                                        class="fw-bold">0&deg;C</span>
                                </p>
                            </div>
                        </div>
                    </div>

                      <!-- Flood Gate Status -->
                      <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Flood Gate Status</h5>
                                <p class="card-text">Status: <span id="flood-gate-status"
                                        class="status-indicator status-closed">Closed</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Vehicles Status -->
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="card shadow-sm" style="height: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Vehicles Allowed</h5>
                        {{-- <ul id="vehicles-list" class="list-group">
                        <li class="list-group-item">No vehicles allowed</li>
                    </ul> --}}


                        <table class="table table-bordered text-center mt-5">
                            <tbody>
                                <tr>
                                    <td><i class="fas fa-car vehicle-icon"></i></td>
                                    <td>Car</td>
                                    <td><i class="fas fa-check-circle allow-icon allowed"></i></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-bus vehicle-icon"></i></td>
                                    <td>Bus</td>
                                    <td><i class="fas fa-times-circle allow-icon not-allowed"></i></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-motorcycle vehicle-icon"></i></td>
                                    <td>Motorcycle</td>
                                    <td><i class="fas fa-check-circle allow-icon allowed"></i></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-truck vehicle-icon"></i></td>
                                    <td>Truck</td>
                                    <td><i class="fas fa-times-circle allow-icon not-allowed"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
