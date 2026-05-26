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

.sidebar{
    min-height:100vh;
    background: linear-gradient(180deg,var(--navy),var(--navy-light));
    color:white;
    padding:30px 20px;
}

.logo{
    font-size:28px;
    font-weight:700;
    margin-bottom:40px;
    text-align:center;
}

.menu a{
    display:block;
    color:white;
    text-decoration:none;
    padding:14px 18px;
    border-radius:12px;
    margin-bottom:10px;
    transition:.3s;
}

.menu a:hover{
    background: rgba(255,255,255,.15);
    transform: translateX(5px);
}

.topbar{
    background:white;
    padding:20px 30px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

.stat-card{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.3s;
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

.hero{
    background: linear-gradient(135deg,var(--navy),var(--navy-light));
    color:white;
    padding:50px;
    border-radius:25px;
}

.table-box{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}
</style>
</head>
<body>
<div class="container-fluid">
    <div class="row">

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

        <div class="col-lg-10 p-4">
            <div class="topbar d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="mb-0">Carabao Based Enterprise Development</h3>
                    <small class="text-muted">Monitoring Dashboard</small>
                </div>
                <select class="form-select w-auto">
                    <option>Select Year</option>
                    <option>2026</option>
                    <option>2025</option>
                    <option>2024</option>
                </select>
            </div>

            <div class="hero mb-4">
                <h2>Welcome to CBED Dashboard</h2>
                <p>Track farmer productivity, cooperative performance, and livestock development in one place.</p>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fa fa-users"></i></div>
                        <h3>1,250</h3>
                        <p>Total Farmers</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fa fa-cow"></i></div>
                        <h3>3,420</h3>
                        <p>Total Carabao</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fa fa-droplet"></i></div>
                        <h3>8,500L</h3>
                        <p>Milk Production</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fa fa-building"></i></div>
                        <h3>84</h3>
                        <p>Cooperatives</p>
                    </div>
                </div>
            </div>

            <div class="table-box">
                <h4 class="mb-3">Recent Activity</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Farmer</th>
                            <th>Location</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Juan Dela Cruz</td><td>Manila</td><td><span class="badge bg-success">Active</span></td></tr>
                        <tr><td>Maria Santos</td><td>Bulacan</td><td><span class="badge bg-primary">Updated</span></td></tr>
                        <tr><td>Pedro Reyes</td><td>Nueva Ecija</td><td><span class="badge bg-warning text-dark">Pending</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>