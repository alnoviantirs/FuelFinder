<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel SPBU Page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Your existing styles... */

        /* Additional styles for the navbar */
        .navbar {
            background-color: #4a5568;
            color: #fff;
            padding: 1rem;
            display: flex;
            justify-content: flex-end; /* Move the menu to the right */
            align-items: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-left: 1rem; /* Add margin to each menu item */
            padding: 0.5rem 1rem; /* Add padding for better styling */
            border-radius: 5px; /* Add some border-radius for a modern look */
            transition: background-color 0.3s ease; /* Add smooth transition effect */
        }

        .navbar a:hover {
            background-color: #2d3748; /* Change background color on hover */
        }

        /* Additional styles for SPBU information */
        .spbu-info {
            padding: 2rem;
            text-align: center;
            margin-top: -1rem; /* Adjust the top margin to make it closer to the navbar */
        }

        .spbu-info img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        /* Additional styles for large image */
        .large-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 1rem; /* Adjust the top margin to make it closer to the navbar */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5); /* Add box shadow for a jumbotron-like effect */
        }

        /* Additional styles for footer */
        footer {
            background-color: #2d3748;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Navbar -->
    <div class="navbar">
        <div>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/spbu') }}">Data SPBU</a>
            <a href="{{ route('login') }}">Login Admin</a>
        </div>
    </div>

    <!-- Large Image -->
    <img class="large-image" src="{{ asset('img/SPBU.jpg') }}" alt="Large Image">

    <!-- SPBU Information -->
    <div class="spbu-info">
        <h1>Welcome to SPBU Information Page</h1>
        <p>Explore the latest information about SPBU (Gas Stations) in a creative way!</p>

        <!-- You can add more creative content, images, or anything else here -->
        <img src="https://example.com/spbu-image.jpg" alt="SPBU Image">
        <p>Discover the nearest SPBU locations, promotions, and more!</p>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2023 Laravel SPBU Page. All rights reserved.
    </footer>

    <!-- Your existing content... -->

</body>
</html>
