<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CBED Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{
    --navy:#083d6f;
    --navy-light:#0d4f8b;
    --white:#ffffff;
    --gray:#f4f7fb;
}

body{
    background: var(--gray);
    font-family: 'Segoe UI', sans-serif;
}

/* SIDEBAR */
.sidebar{
    min-height:100vh;
    background: linear-gradient(180deg,var(--navy),var(--navy-light));
    color:white;
    padding:30px 20px;
    position:relative;
}

/* TOP ACTIONS */
.top-actions{
    position:absolute;
    top:20px;
    right:20px;
    display:flex;
    gap:15px;
}

.top-icon{
    color:white;
    font-size:18px;
    text-decoration:none;
    transition:.3s;
}

.top-icon:hover{
    color:#dbeafe;
    transform:rotate(15deg);
}

/* USER */
.user-box{
    text-align:center;
    margin-top:50px;
    margin-bottom:40px;
}

.user-box i{
    font-size:75px;
    margin-bottom:10px;
}

.user-box h5{
    font-weight:700;
    margin-bottom:5px;
}

.user-box small{
    color:#dbeafe;
}

/* MENU */
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
    background: rgba(255,255,255,.15);
    transform: translateX(5px);
}

/* TOPBAR */
.topbar{
    background:white;
    padding:20px 30px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

/* HERO */
.hero{
    background: linear-gradient(135deg,var(--navy),var(--navy-light));
    color:white;
    padding:50px;
    border-radius:25px;
}

/* STAT CARD */
.stat-card{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.3s;
    border:none;
}

.stat-card:hover{
    transform:translateY(-8px);
}

.stat-icon{
    width:60px;
    height:60px;
    border-radius:50%;
    background:var(--navy);
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
    margin-bottom:15px;
}

/* TABLE */
.table-box{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.table a{
    text-decoration:none;
    font-weight:600;
    color:var(--navy);
}

.table a:hover{
    text-decoration:underline;
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

   <!-- SIDEBAR -->
    <div class="col-lg-2 sidebar">

        <!-- TOP ACTIONS -->
        <div class="top-actions">

            <a href="#" class="top-icon">
                <i class="fa-solid fa-gear"></i>
            </a>

            <a href="{{ route('login') }}" class="top-icon">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>

        </div>

        <!-- USER -->
        <div class="user-box">

            <i class="fa-solid fa-circle-user"></i>

            <h5>John Carlo</h5>

            <small>Administrator</small>

        </div>

        <!-- MENU -->
        <div class="menu">

            <a href="{{ route('dashboard') }}">
                <i class="fa fa-home"></i>
                Dashboard
            </a>

            <a href="{{ route('farmer') }}">
                <i class="fa fa-users"></i>
                Farmer
            </a>

            <a href="{{ route('cooperative') }}">
                <i class="fa fa-building"></i>
                Cooperative
            </a>

            <a href="{{ route('carabao') }}">
                <i class="fa fa-cow"></i>
                Carabao
            </a>

            <a href="#">
                <i class="fa fa-chart-line"></i>
                Reports
            </a>

        </div>

    </div>

    <!-- CONTENT -->
    <div class="col-lg-10 p-4">

        <!-- TOPBAR -->
        <div class="topbar d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

            <div>
                <h3 class="mb-0">
                    Carabao Based Enterprise Development
                </h3>

                <small class="text-muted">
                    Monitoring Dashboard
                </small>
            </div>

            <!-- YEAR -->
            <select class="form-select w-auto">

                <option>Select Year</option>
                <option>2026</option>
                <option>2025</option>
                <option>2024</option>

            </select>

        </div>

        <!-- HERO -->
        <div class="hero mb-4">

            <h2>Welcome to CBED Dashboard</h2>

            <p class="mb-0">
                Track farmer productivity, cooperative performance,
                milk production, and livestock development in one place.
            </p>

        </div>

        <!-- STATS -->
        <div class="row g-4 mb-4">

            <!-- FARMERS -->
            <div class="col-md-3">
                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="fa fa-users"></i>
                    </div>

                    <h3>1,250</h3>

                    <p class="mb-0">Total Farmers</p>

                </div>
            </div>

            <!-- CARABAO -->
            <div class="col-md-3">
                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="fa fa-cow"></i>
                    </div>

                    <h3>3,420</h3>

                    <p class="mb-0">Total Carabao</p>

                </div>
            </div>

            <!-- MILK -->
            <div class="col-md-3">
                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="fa fa-droplet"></i>
                    </div>

                    <h3>8,500L</h3>

                    <p class="mb-0">Milk Production</p>

                </div>
            </div>

            <!-- COOPERATIVE -->
            <div class="col-md-3">
                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="fa fa-building"></i>
                    </div>

                    <h3>84</h3>

                    <p class="mb-0">Cooperatives</p>

                </div>
            </div>

        </div>

        <!-- TABLE -->
        <div class="table-box">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h4 class="mb-0">
                    Recent Activity
                </h4>

                <button class="btn btn-primary">
                    <i class="fa fa-plus me-1"></i>
                    Add Activity
                </button>

            </div>

            <table class="table table-hover align-middle">

                <thead>
                    <tr>
                        <th>Farmer</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>

                        <td>
                            <a href="{{ route('fproifle') }}">
                                Juan Dela Cruz
                            </a>
                        </td>

                        <td>Manila</td>

                        <td>
                            <span class="badge bg-success">
                                Active
                            </span>
                        </td>

                        <td>

                            <button class="btn btn-sm btn-primary">
                                <i class="fa fa-pen"></i>
                            </button>

                            <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>
                            <a href="{{ route('fproifle') }}">
                                Maria Santos
                            </a>
                        </td>

                        <td>Bulacan</td>

                        <td>
                            <span class="badge bg-primary">
                                Updated
                            </span>
                        </td>

                        <td>

                            <button class="btn btn-sm btn-primary">
                                <i class="fa fa-pen"></i>
                            </button>

                            <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>
                            <a href="{{ route('fproifle') }}">
                                Pedro Reyes
                            </a>
                        </td>

                        <td>Nueva Ecija</td>

                        <td>
                            <span class="badge bg-warning text-dark">
                                Pending
                            </span>
                        </td>

                        <td>

                            <button class="btn btn-sm btn-primary">
                                <i class="fa fa-pen"></i>
                            </button>

                            <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>