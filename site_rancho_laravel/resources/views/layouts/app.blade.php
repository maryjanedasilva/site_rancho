<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rancho Tubara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e3f2fd; /* azul clarinho de fundo */
        }
        .header {
            background-color: #0d6efd;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .card-blue {
            background-color: #bbdefb;
        }
    </style>
    @livewireStyles
</head>
<body>
    <div class="container mt-4">
        <div class="header text-center">
            <h1>Rancho Tubara</h1>
        </div>

        {{ $slot ?? '' }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>
</html>

