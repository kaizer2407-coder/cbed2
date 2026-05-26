<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooperative Dashboard - CBED</title>

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

        .menu a i{ margin-right:10px; }

        .menu a:hover{
            background:rgba(255,255,255,.15);
            transform:translateX(5px);
        }

        .card{
            border:none;
            border-radius:20px;
            box-shadow:0 8px 25px rgba(0,0,0,.08);
        }

        .stat-card{
            border:none;
            border-radius:18px;
            box-shadow:0 6px 20px rgba(0,0,0,.08);
        }

        .province-card{
            border:none;
            border-radius:18px;
            background:#fff;
            box-shadow:0 6px 18px rgba(0,0,0,.08);
            transition:.3s;
        }

        .province-card:hover{
            transform:translateY(-5px);
            background:var(--navy);
            color:white;
        }

        .table-box{
            background:white;
            border-radius:20px;
            padding:30px;
            box-shadow:0 8px 25px rgba(0,0,0,.08);
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
            <h3 class="page-title">Cooperative Dashboard</h3>
        </div>

        <!-- 3 MAIN CARDS -->
        <div class="row g-4 mb-4">

            <div class="col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h3>84</h3>
                    <p>Total Cooperatives</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h3>72</h3>
                    <p>Active Cooperatives</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h3>12</h3>
                    <p>Pending Cooperatives</p>
                </div>
            </div>

        </div>

        <!-- 🌍 REGION 3 -->
        <h5 class="mb-3">Region 3 - Cooperatives per Province</h5>

        <div class="card p-4 mb-4" style="border-radius:20px;">

            <div class="row g-4">

                <div class="col-md-3">
                    <div class="province-card p-3 text-center">
                        <h6>Pampanga</h6>
                        <h4 class="text-primary">12</h4>
                        <small>Cooperatives</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="province-card p-3 text-center">
                        <h6>Bataan</h6>
                        <h4 class="text-primary">8</h4>
                        <small>Cooperatives</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="province-card p-3 text-center">
                        <h6>Bulacan</h6>
                        <h4 class="text-primary">18</h4>
                        <small>Cooperatives</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="province-card p-3 text-center">
                        <h6>Nueva Ecija</h6>
                        <h4 class="text-primary">22</h4>
                        <small>Cooperatives</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="province-card p-3 text-center">
                        <h6>Tarlac</h6>
                        <h4 class="text-primary">10</h4>
                        <small>Cooperatives</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="province-card p-3 text-center">
                        <h6>Zambales</h6>
                        <h4 class="text-primary">6</h4>
                        <small>Cooperatives</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="province-card p-3 text-center">
                        <h6>Angeles City</h6>
                        <h4 class="text-primary">4</h4>
                        <small>Cooperatives</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="province-card p-3 text-center">
                        <h6>Nueva Vizcaya</h6>
                        <h4 class="text-primary">7</h4>
                        <small>Cooperatives</small>
                    </div>
                </div>

            </div>

        </div>

        <!-- TABLE -->
        <div class="table-box">

            <h4 class="mb-3">Cooperative List</h4>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cooperative Name</th>
                        <th>Herd Code</th>
                        <th>Province</th>
                        <th>Municipality</th>
                        <th>Barangay</th>
                        <th>Year</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Agri Coop 1</td>
                        <td>Agri Coop 1</td>
                        <td>Agri Coop 1</td>
                        <td>Agri Coop 1</td>
                        <td>Pampanga</td>
                        <td>2026</td>
                        <td><span class="badge bg-success">Active</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Dairy Coop 2</td>
                        <td>Dairy Coop 2</td>
                        <td>Dairy Coop 2</td>
                        <td>Dairy Coop 2</td>
                        <td>Bulacan</td>
                        <td>2025</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</div>
</div>

</body>
</html>