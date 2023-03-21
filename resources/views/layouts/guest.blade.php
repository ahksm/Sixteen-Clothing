<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        .loader {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
        }

        .spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 40px;
            height: 40px;
            margin-top: -20px;
            margin-left: -20px;
            border-radius: 50%;
            border-top: solid #f33f3f;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .spinner {
            animation-name: spin;
            animation-duration: .8s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        #cameraIcon {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 33.33%;
            padding-top: 8px;
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            transition: 0.2s ease-in-out;
            transform: translateY(100%);
        }

        #profileImage:hover+#cameraIcon,
        #cameraIcon:hover {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>

</html>
