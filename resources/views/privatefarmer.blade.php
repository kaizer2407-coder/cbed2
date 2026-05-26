<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cooperative Management</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<style>
:root {
    --catalina-blue: #083d6f;
    --chamois: #ede6b3;
    --silver-tree: #61b883;
    --ship-cove: #5b6b7c;
    --white: #FFFFFF;
    --dark: #1F2937;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

body {
    background-color: var(--catalina-blue);
    min-height: 100vh;
    color: var(--white);
}

.container-fluid {
    padding: 40px;
}

/* HEADER */
.page-header {
    margin-bottom: 30px;
}

.back-row .btn-back {
    background-color: #6c757d;
    color: #fff;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    text-decoration: none;
    transition: 0.3s;
    margin-bottom: 15px;
}
.back-row .btn-back:hover {
    background-color: #5a6268;
}

.header-left h1 {
    color: var(--white);
    font-size: 28px;
    margin: 0;
}
.header-left p {
    color: var(--chamois);
    font-size: 14px;
    margin: 0;
}

.header-right {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
}

/* Search input */
.search-box input {
    padding: 8px 15px;
    border-radius: 8px;
    border: none;
    outline: none;
}

/* Add Cooperative Button */
.header-button a {
    background-color: var(--silver-tree);
    color: var(--white);
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
    display: inline-block;
}
.header-button a:hover {
    background-color: var(--ship-cove);
}

/* CARDS */
.cards-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

@media (max-width: 1200px) { .cards-container { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 900px) { .cards-container { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px) { .cards-container { grid-template-columns: 1fr; } }

.card {
    background: var(--catalina-blue);
    border-radius: 12px;
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.3s;
    border: 1px solid var(--white); /* white border */
}

.card:hover { transform: translateY(-5px); }

/* Card Title */
.card-title {
    background-color: var(--silver-tree);
    color: var(--white);
    text-align: center;
    padding: 8px 0;
    border-radius: 8px;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Card Details */
.card-details-section p {
    color: var(--white);
    text-align: center;
    margin: 4px 0;
}

/* Card Buttons */
.card-buttons {
    display: flex;
    justify-content: center;
    gap: 8px;
}

.card-buttons a {
    background-color: #6c757d;
    color: var(--white);
    width: 36px;
    height: 36px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border-radius: 6px;
    transition: 0.3s;
}
.card-buttons a:hover {
    background-color: #5a6268;
}

.offcanvas {
    background-color: var(--catalina-blue);
    color: var(--white);
}

.offcanvas .form-control,
.offcanvas .form-select {
    background-color: var(--white);
    color: var(--dark);
}

</style>
</head>
<body>

<div class="container-fluid">

    <!-- BACK BUTTON ROW -->
    <div class="back-row">
        <a href="{{ url()->previous() }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <!-- TITLE AND RIGHT CONTROLS -->
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
        <!-- Title/Subtitle -->
        <div class="header-left">
            <h1>Private Farmer</h1>
            <p>Manage and monitor private farmer records</p>
        </div>

        <!-- Right Controls -->
        <div class="header-right">
            <div class="search-box">
                <input type="text" placeholder="Search private farmer...">
            </div>

            <div class="year-filter">
                <select class="form-select">
                    <option value="">Select Year</option>
                    @for ($year = date('Y'); $year >= 2000; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
            </div>

            <div class="header-button ms-3">
                <button class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#addCoopCanvas">
                    + Add Private Farmer
                </button>
            </div>
        </div>
    </div>

    <!-- CARDS -->
    @php
        $farmers = [
            ['name' => 'Juan Dela Cruz', 'location' => 'Nueva Ecija', 'carabaos' => 3, 'status' => 'Active'],
            ['name' => 'Pedro Santos', 'location' => 'Bulacan', 'carabaos' => 2, 'status' => 'Active'],
            ['name' => 'Maria Lopez', 'location' => 'Pampanga', 'carabaos' => 5, 'status' => 'Inactive'],
            ['name' => 'Jose Reyes', 'location' => 'Tarlac', 'carabaos' => 4, 'status' => 'Active'],
        ];
    @endphp

    <!-- CARDS -->
    <div class="cards-container">
        @foreach ($farmers as $farmer)
        <div class="card">
            <h5 class="card-title">{{ $farmer['name'] }}</h5>

            <div class="card-details-section">
                <p><strong>Location:</strong> {{ $farmer['location'] }}</p>
                <p><strong>Carabaos:</strong> {{ $farmer['carabaos'] }}</p>
                <p><strong>Status:</strong> {{ $farmer['status'] }}</p>
            </div>

            <div class="card-buttons">
                <a href="#"><i class="fas fa-edit"></i></a>
                <a href="#"><i class="fas fa-trash-alt"></i></a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- OFFCANVAS -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addFarmerCanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add Private Farmer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Farmer Name</label>
                    <input type="text" class="form-control" placeholder="Enter farmer name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" placeholder="Enter location">
                </div>

                <div class="mb-3">
                    <label class="form-label">Number of Carabaos</label>
                    <input type="number" class="form-control" placeholder="Enter number of carabaos">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Save Farmer
                </button>
            </form>
        </div>
    </div>


        <!-- OFFCANVAS -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addCoopCanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add Private Farmer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Cooperative Name</label>
                    <input type="text" class="form-control" placeholder="Enter cooperative name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" placeholder="Enter location">
                </div>

                <div class="mb-3">
                    <label class="form-label">Members</label>
                    <input type="number" class="form-control" placeholder="Number of members">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Save Private Farmer
                </button>
            </form>
        </div>
    </div>


</div>

</body>
</html>
