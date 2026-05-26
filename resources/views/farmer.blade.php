<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Dashboard - CBED</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        :root{
            --navy:#083d6f;
            --navy2:#0d4f8b;
            --bg:#f4f7fb;
            --white:#fff;
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
            font-weight:500;
        }

        .menu a i{
            margin-right:10px;
        }

        .menu a:hover{
            background:rgba(255,255,255,.15);
            transform:translateX(5px);
        }

        /* CONTENT */
        .card{
            border:none;
            border-radius:20px;
            box-shadow:0 8px 25px rgba(0,0,0,.08);
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
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <h3 class="page-title mb-0">Farmer Dashboard</h3>

                <!-- YEAR FILTER -->
                <form method="GET">
                    <select name="year" class="form-select" onchange="this.form.submit()">
                        <option value="">Select Year</option>
                        @for ($year = date('Y'); $year >= 2000; $year--)
                            <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                                {{ $year }}
                            </option>
                        @endfor
                    </select>
                </form>
            </div>

            <!-- STATS -->
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <h3>120</h3>
                        <p>Male Farmers</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <h3>250</h3>
                        <p>Female Farmers</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <h3>
                            {{ request('year') ? 85 : 320 }}
                        </h3>
                        <p>Farmers Added {{ request('year') ? 'in ' . request('year') : 'Total' }}</p>
                    </div>
                </div>
            </div>

            <!-- TABLE -->
            <div class="table-box">

                <h4 class="mb-3">
                    Farmers List
                    @if(request('year'))
                        - {{ request('year') }}
                    @endif
                </h4>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Year Added</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Juan Dela Cruz</td>
                            <td>Male</td>
                            <td>2026</td>
                            <td><span class="badge bg-success">Active</span></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Maria Santos</td>
                            <td>Female</td>
                            <td>2025</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Pedro Reyes</td>
                            <td>Male</td>
                            <td>2024</td>
                            <td><span class="badge bg-primary">Updated</span></td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

</body>
</html>