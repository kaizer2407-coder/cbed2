<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Farmer Profile - CBED</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{
    --navy:#083d6f;
    --navy2:#0d4f8b;
    --bg:#f4f7fb;
}

body{
    background:var(--bg);
    font-family:'Segoe UI',sans-serif;
}

/* SIDEBAR */
.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--navy),var(--navy2));
    padding:30px 20px;
    color:white;
}

.logo{
    font-size:28px;
    font-weight:700;
    text-align:center;
    margin-bottom:40px;
}

.menu a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px 20px;
    border-radius:12px;
    margin-bottom:10px;
    transition:.3s;
}

.menu a i{
    margin-right:10px;
}

.menu a:hover{
    background:rgba(255,255,255,.15);
    transform:translateX(5px);
}

/* PROFILE */
.profile-box{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.profile-header{
    background:var(--navy);
    color:white;
    padding:20px;
    border-radius:15px;
    margin-bottom:25px;
}

.label{
    font-size:12px;
    color:#6c757d;
    text-transform:uppercase;
}

.value{
    font-size:16px;
    font-weight:600;
    color:var(--navy);
}

/* CARDS */
.card{
    border:none;
    border-radius:18px;
    transition:.3s;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.card:hover{
    transform:translateY(-5px);
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

    <!-- SIDEBAR -->
    <div class="col-lg-2 sidebar">
        <div class="logo">CBED</div>

        <div class="menu">
            <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
            <a href="{{ route('farmer') }}"><i class="fa fa-users"></i> Farmer</a>
            <a href="{{ route('cooperative') }}"><i class="fa fa-building"></i> Cooperative</a>
            <a href="{{ route('carabao') }}"><i class="fa fa-cow"></i> Carabao</a>
            <a href="#"><i class="fa fa-chart-line"></i> Reports</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="col-lg-10 p-4">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 style="color:#083d6f; font-weight:700;">Farmer Profile</h3>

            <a href="{{ route('farmer') }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <!-- PROFILE BOX -->
        <div class="profile-box mb-4">

            <div class="profile-header">
                <h4 class="mb-1">Juan Dela Cruz</h4>
                <small>Farmer ID: FRM-001</small>
            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <div class="label">Herd Code</div>
                    <div class="value">FRM-001</div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Province</div>
                    <div class="value">Pampanga</div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Municipality</div>
                    <div class="value">San Fernando</div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Barangay</div>
                    <div class="value">Dolores</div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Status</div>
                    <div class="value">
                        <span class="badge bg-success">Active</span>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Year Added</div>
                    <div class="value">2026</div>
                </div>

            </div>

        </div>

        <!-- STATS CARDS BELOW PROFILE -->
        <div class="row g-4">

            <div class="col-md-4 col-lg-2">
                <div class="card p-3 text-center">
                    <i class="fa-solid fa-cow fa-2x text-primary mb-2"></i>
                    <h4>25</h4>
                    <p class="mb-0">Carabao</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card p-3 text-center">
                    <i class="fa-solid fa-glass-water fa-2x text-info mb-2"></i>
                    <h4>120L</h4>
                    <p class="mb-0">Milk</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card p-3 text-center">
                    <i class="fa-solid fa-baby fa-2x text-warning mb-2"></i>
                    <h4>8</h4>
                    <p class="mb-0">Pregnant</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card p-3 text-center">
                    <i class="fa-solid fa-hand-holding-water fa-2x text-success mb-2"></i>
                    <h4>10</h4>
                    <p class="mb-0">Lactating</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card p-3 text-center">
                    <i class="fa-solid fa-skull fa-2x text-danger mb-2"></i>
                    <h4>2</h4>
                    <p class="mb-0">Dead</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card p-3 text-center">
                    <i class="fa-solid fa-money-bill-wave fa-2x text-secondary mb-2"></i>
                    <h4>6</h4>
                    <p class="mb-0">Sold</p>
                </div>
            </div>

        </div>

    </div>
</div>
</div>

</body>
</html>