<div>
    <div wire:poll.5000ms>
    </div>
    <div class="sensor-data">
        <div class="row mb-5">
            <div class="col-lg-4">
                <select wire:model.live="city" id="city" class="form-select">
                    <option value="">Choose City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-8 text-end mt-lg-0 mt-2">
                <span class="text-black text-end">Last Updated At : {{ $last_recorded_at }}</span>
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
                                <p class="card-text">Current Level: <span id="river-level"
                                        class="fw-bold">{{ $river_level }} cm</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Road Water Level -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Road Water Level</h5>
                                <p class="card-text">Current Level: <span id="road-level"
                                        class="fw-bold">{{ $road_level }} cm</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Rain Status -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Rain Status</h5>
                                <p class="card-text">Rain Level:
                                    <span class="badge
                                            @if ($rain_status == 'No Rain (Clear)') bg-success
                                            @elseif($rain_status == 'Light Rain') bg-info
                                            @elseif($rain_status == 'Moderate Rain') bg-warning
                                            @elseif($rain_status == 'Heavy Rain') bg-danger @endif">
                                        {{ $rain_status }}
                                    </span>
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
                                        class="fw-bold">{{ $temperature }}&deg;C</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Flood Gate Status -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Flood Gate Status</h5>
                                <p class="card-text">Status:
                                    @if ($gate_status == 1)
                                        <span class="status-indicator status-open">Open</span>
                                    @else
                                        <span class="status-indicator status-closed">Closed</span>
                                    @endif
                                </p>
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
                                    <td>
                                        @if ($vehicles['Car'] == true)
                                            <i class="fas fa-check-circle allow-icon allowed"></i>
                                        @else
                                            <i class="fas fa-times-circle allow-icon not-allowed">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-bus vehicle-icon"></i></td>
                                    <td>Bus</td>
                                    <td>
                                        @if ($vehicles['Bus'] == true)
                                            <i class="fas fa-check-circle allow-icon allowed"></i>
                                        @else
                                            <i class="fas fa-times-circle allow-icon not-allowed">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-motorcycle vehicle-icon"></i></td>
                                    <td>Motorcycle</td>
                                    <td>
                                        @if ($vehicles['Motorcycle'] == true)
                                            <i class="fas fa-check-circle allow-icon allowed"></i>
                                        @else
                                            <i class="fas fa-times-circle allow-icon not-allowed">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-truck vehicle-icon"></i></td>
                                    <td>Truck</td>
                                    <td>
                                        @if ($vehicles['Truck'] == true)
                                            <i class="fas fa-check-circle allow-icon allowed"></i>
                                        @else
                                            <i class="fas fa-times-circle allow-icon not-allowed">
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
