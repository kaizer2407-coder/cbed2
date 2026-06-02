<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cooperative Dashboard</title>

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
    font-family:Segoe UI;
}

/* SIDEBAR */
.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--navy),var(--navy2));
    padding:30px 20px;
    color:white;
    position:relative;
}

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
}

.user-box{
    text-align:center;
    margin-top:50px;
    margin-bottom:40px;
}

.user-box i{
    font-size:70px;
}

.menu a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px;
    border-radius:12px;
    margin-bottom:10px;
}

.menu a:hover{
    background:rgba(255,255,255,.15);
}

/* DASH CARDS */
.card-box{
    background:white;
    border-radius:18px;
    padding:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.stat-card{
    border:none;
    border-radius:18px;
    padding:20px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.stat-card i{
    font-size:28px;
    margin-bottom:10px;
}

.page-title{
    font-weight:700;
    color:var(--navy);
}
</style>

</head>

<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->
<div class="col-lg-2 sidebar">

    <div class="top-actions">
        <a href="#"><i class="fa fa-gear top-icon"></i></a>
        <a href="{{ route('login') }}"><i class="fa fa-right-from-bracket top-icon"></i></a>
    </div>

    <div class="user-box">
        <i class="fa fa-circle-user"></i>
        <h5>Coop Admin</h5>
        <small>Administrator</small>
    </div>

    <div class="menu">
        <a href="{{ route('coop.dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
        <a href="{{ route('coop.list.farmer') }}"><i class="fa fa-users"></i> Farmer</a>
        <a href="{{ route('coop.animal.inventory') }}"><i class="fa fa-cow"></i> Animal Inventory</a>
        <a href="{{ route('coop.profile') }}"><i class="fa fa-user"></i> Profile</a>
    </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <h3 class="page-title mb-4">Cooperative Dashboard</h3>

    <!-- STATS -->
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="stat-card bg-white">
                <i class="fa fa-users text-primary"></i>
                <h4>120</h4>
                <p class="mb-0">Farmers</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-card bg-white">
                <i class="fa fa-cow text-success"></i>
                <h4>350</h4>
                <p class="mb-0">Animals</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-card bg-white">
                <i class="fa fa-glass-water text-info"></i>
                <h4>1,250L</h4>
                <p class="mb-0">Milk Production</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-card bg-white">
                <i class="fa fa-money-bill text-warning"></i>
                <h4>₱85,000</h4>
                <p class="mb-0">Revenue</p>
            </div>
        </div>

    </div>

    <!-- SECOND ROW -->
    <div class="row g-4">

        <div class="col-md-6">
            <div class="card-box">
                <h5 class="mb-3">Recent Farmers</h5>

                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Herd Code</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Dela Cruz</td>
                            <td>FRM-001</td>
                            <td><span class="badge bg-success">Active</span></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box">
                <h5 class="mb-3">Quick Summary</h5>

                <div class="p-3 border rounded mb-3">
                    <strong>Pregnant Animals:</strong> 8
                </div>

                <div class="p-3 border rounded mb-3">
                    <strong>Lactating Animals:</strong> 10
                </div>

                <div class="p-3 border rounded">
                    <strong>Dead Records:</strong> 2
                </div>

            </div>
        </div>

    </div>

</div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>