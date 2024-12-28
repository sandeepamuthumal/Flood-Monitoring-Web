<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flood Monitoring System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
        }

        .sensor-data{
            height: 80vh;
            margin: auto
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-weight: bold;
            color: #4a4a8a;
        }

        .card-text {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .status-open {
            color: #28a745;
            /* Green */
            font-weight: bold;
        }

        .status-closed {
            color: #dc3545;
            /* Red */
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center p-3 text-primary fw-bold">Flood Monitoring System</h1>

        <div class="sensor-data">
            <div class="row">
                <!-- River Water Level -->
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">River Water Level</h5>
                            <p class="card-text">Current Level: <span id="river-level" class="fw-bold">0 cm</span></p>
                        </div>
                    </div>
                </div>

                <!-- Road Water Level -->
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Road Water Level</h5>
                            <p class="card-text">Current Level: <span id="road-level" class="fw-bold">0 cm</span></p>
                        </div>
                    </div>
                </div>

                <!-- Flood Gate Status -->
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Flood Gate Status</h5>
                            <p class="card-text">Status: <span id="flood-gate-status"
                                    class="status-indicator status-closed">Closed</span></p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <!-- Rain Status -->
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Rain Status</h5>
                            <p class="card-text">Rain Level: <span id="rain-status" class="fw-bold">No Rain</span></p>
                        </div>
                    </div>
                </div>

                <!-- Temperature -->
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Temperature</h5>
                            <p class="card-text">Current Temperature: <span id="temperature" class="fw-bold">0&deg;C</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Vehicles Status -->
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Vehicles Allowed</h5>
                            <ul id="vehicles-list" class="list-group">
                                <li class="list-group-item">No vehicles allowed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
