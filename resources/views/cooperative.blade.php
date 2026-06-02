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

/* SIDEBAR */
.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--navy),var(--navy2));
    padding:30px 20px;
    color:white;
    position: relative;
}

/* ADDED FROM FPROFILE STYLE */
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

/* CARDS */
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

/* TABLE */
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

/* OFFCANVAS */
.form-control, .form-select{
    border-radius:10px;
    padding:10px;
    margin-bottom:12px;
}

.form-label{
    font-weight:600;
    margin-bottom:6px;
    color:#083d6f;
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR (REPLACED ONLY) -->
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
        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
        <a href="{{ route('farmer') }}"><i class="fa fa-users"></i> Farmer</a>
        <a href="{{ route('cooperative') }}"><i class="fa fa-building"></i> Cooperative</a>
        <a href="{{ route('carabao') }}"><i class="fa fa-cow"></i> Carabao</a>
        <a href="#"><i class="fa fa-chart-line"></i> Reports</a>
    </div>

</div>

<!-- CONTENT (UNCHANGED) -->
<div class="col-lg-10 p-4">

    <h3 class="page-title mb-4">Cooperative Dashboard</h3>

    <!-- 3 CARDS -->
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

    <!-- REGION -->
    <h5 class="mb-3">Region 3 - Cooperatives per Province</h5>

    <div class="card p-4 mb-4">
        <div class="row g-4">

            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Pampanga</h6><h4>12</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bataan</h6><h4>8</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bulacan</h6><h4>18</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Ecija</h6><h4>22</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Tarlac</h6><h4>10</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Zambales</h6><h4>6</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Angeles City</h6><h4>4</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Vizcaya</h6><h4>7</h4></div></div>

        </div>
    </div>

    <!-- TABLE -->
    <div class="table-box">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h4 class="mb-0">Cooperative List</h4>

            <button class="btn btn-primary"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addCoop">
                <i class="fa fa-plus me-1"></i> Add Cooperative
            </button>

        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Herd Code</th>
                    <th>Province</th>
                    <th>Municipality</th>
                    <th>Barangay</th>
                    <th>Year</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <a href="{{ url('/coop-profile') }}" class="text-primary text-decoration-none fw-semibold">
                         Cooperative 1
                        </a>
                    </td>
                    <td>AC-001</td>
                    <td>Pampanga</td>
                    <td>San Fernando</td>
                    <td>Brgy 1</td>
                    <td>2026</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                        <a href="#"
                        class="text-primary me-3"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#editCoop">
                            <i class="fa fa-pen-to-square"></i>
                        </a>

                        <a href="#" class="text-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>

        </table>

    </div>

</div>
</div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="addCoop">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Cooperative</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

        <!-- ROW: 2 INPUTS -->
        <div class="row">
            <div class="col-md-6">
                <label class="form-label">CDA Registration No.</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Cooperative Code</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <!-- SINGLE INPUT -->
        <div class="mt-1">
            <label class="form-label">Cooperative Name</label>
            <input type="text" class="form-control">
        </div>

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Accreditation Status</label>
                <select class="form-select">
                    <option selected disabled>Select Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Coop Type:</label>
                <select class="form-select">
                    <option selected disabled>Select Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Category</label>
                <select class="form-select">
                    <option selected disabled>Select Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Date Established</label>
                <select class="form-select">
                    <option selected disabled>Select Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Region</label>
                <select class="form-select">
                    <option selected disabled>Select Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Province</label>
                <select class="form-select">
                    <option selected disabled>Select Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">City/Town/Municipality</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Barangay</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <!-- SINGLE INPUT -->
        <div class="mt-1">
            <label class="form-label">Address Specifics</label>
            <input type="text" class="form-control">
        </div>

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Network</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Year</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <button class="btn btn-primary w-100 mt-4">
            Save Cooperative
        </button>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>