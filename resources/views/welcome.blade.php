<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Flood Monitoring & Warning System" />
    <meta name="keywords"
        content="flood-monitoring-system, flood warning system, flood monitoring & warning system, flood alert system" />
    <meta name="author" content="flood-monitoring-system" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Flood Monitoring System</title>

    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('images/flood-logo.jpg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('images/flood-logo.jpg') }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
        }

        .sensor-data {
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
            transform: scale(1.05);
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

        .vehicle-icon {
            font-size: 24px;
        }

        .allow-icon {
            font-size: 20px;
        }

        .allow-icon.allowed {
            color: green;
        }

        .allow-icon.not-allowed {
            color: red;
        }
    </style>

    @livewireStyles
</head>

<body>

    <div class="container">
        <h1 class="text-center p-3 text-primary fw-bold">Flood Monitoring System</h1>

        @livewire('sensor-data')

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

    @livewireScripts
</body>

</html>
