<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px; /* Adjust top margin as needed */
            text-align: center;
        }
        .invoice-image {
            max-width: 100%; /* Ensure the image is responsive */
            height: auto; /* Maintain aspect ratio */
        }
        .redirect-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Header inclusion -->
    @include('dashboard.header')

    <!-- Main Content -->
    <div class="container">
        <h1 class="mb-4">Invoice</h1>
        <img src="invoice.png" alt="Invoice Image" class="invoice-image">
        <div class="mt-4">
            <a href="{{ route('transactions') }}" class="btn btn-primary redirect-button">Back to Transactions</a>
        </div>
    </div>

    <!-- Footer inclusion -->
    @include('dashboard.footer')

    <!-- Optional: include Bootstrap JS for additional functionality -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
