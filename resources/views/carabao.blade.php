<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carabao Dashboard - CBED</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{ asset('images/pcclogo.jpg') }}" type="image/png">

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
            position: relative;
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
            font-weight:500;
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

        /* TOP ACTIONS FIX */
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
            transform:scale(1.1);
        }

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

        <!-- HEADER -->
        <div class="mb-4">
            <h3 class="page-title">Carabao Dashboard</h3>
        </div>

        <!-- 3 MAIN CARDS -->
        <div class="row g-4 mb-4">

            <div class="col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h3>1,250</h3>
                    <p>Total Carabaos</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h3>980</h3>
                    <p>Active Carabaos</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h3>270</h3>
                    <p>For Monitoring</p>
                </div>
            </div>

        </div>

        <!-- REGION 3 -->
        <h5 class="mb-3">Region 3 - Carabao Population per Province</h5>

        <div class="card p-4 mb-4">
            <div class="row g-4">

                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Pampanga</h6><h4>320</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bataan</h6><h4>150</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bulacan</h6><h4>210</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Ecija</h6><h4>280</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Tarlac</h6><h4>120</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Zambales</h6><h4>95</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Angeles City</h6><h4>60</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Vizcaya</h6><h4>85</h4></div></div>

            </div>
        </div>

        <!-- TABLE -->
        <div class="table-box">

            <h4 class="mb-3">Carabao Records</h4>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Owner</th>
                        <th>Province</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Juan Dela Cruz</td>
                        <td>Pampanga</td>
                        <td><span class="badge bg-success">Active</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Maria Santos</td>
                        <td>Bulacan</td>
                        <td><span class="badge bg-warning text-dark">Monitoring</span></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</div>
</div>

</body>
</html>