<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Farmer Dashboard - CBED</title>

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

/* SIDEBAR */
.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--navy),var(--navy2));
    padding:30px 20px;
    color:white;
    position:relative;
}

.logo{
    font-size:28px;
    font-weight:700;
    text-align:center;
    margin-bottom:40px;
}

/* TOP ACTIONS (FROM DASHBOARD) */
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

/* USER BOX (FROM DASHBOARD) */
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

/* ACTION ICONS */
.action-icons a{
    font-size:18px;
    transition:0.2s;
}

.action-icons a:hover{
    transform:scale(1.2);
}

/* OFFCANVAS STYLING */
.offcanvas-body{
    padding: 25px !important;
}

.form-control, .form-select{
    border-radius: 10px;
    padding: 10px 12px;
    margin-bottom: 12px;
}

.form-label{
    font-weight: 600;
    margin-top: 10px;
    margin-bottom: 6px;
    color: #083d6f;
}

.section-title{
    font-size: 12px;
    font-weight: 700;
    color: #6c757d;
    margin-top: 15px;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn{
    border-radius: 10px;
    padding: 10px;
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

    <!-- SIDEBAR (UPDATED ONLY) -->
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

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="page-title">Farmer Dashboard</h3>
        </div>

        <!-- STATS -->
        <div class="row g-4 mb-4">

            <div class="col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h3>1,250</h3>
                    <p>Total Farmers</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h3>820</h3>
                    <p>Active Farmers</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h3>430</h3>
                    <p>Pending Farmers</p>
                </div>
            </div>

        </div>

        <!-- REGION -->
        <h5 class="mb-3">Region 3 - Farmers per Province</h5>

        <div class="card p-4 mb-4">
            <div class="row g-4">

                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Pampanga</h6><h4>220</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bataan</h6><h4>140</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bulacan</h6><h4>310</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Ecija</h6><h4>400</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Tarlac</h6><h4>180</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Zambales</h6><h4>120</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Angeles City</h6><h4>90</h4></div></div>
                <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Vizcaya</h6><h4>150</h4></div></div>

            </div>
        </div>

        <!-- TABLE -->
        <div class="table-box">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Farmer List</h4>

                <!-- SEARCH ADDED -->
                <div class="d-flex align-items-center" style="width:280px;">
                    <div class="input-group input-group-sm" style="width:280px; height:38px;">
                        <span class="input-group-text d-flex align-items-center justify-content-center"
                            style="width:38px; height:38px;">
                            <i class="fa fa-search"></i>
                        </span>

                        <input type="text"
                            id="searchInput"
                            class="form-control h-100"
                            placeholder="Search...">
                    </div>
                </div>
            </div>

            <table class="table table-hover" id="farmerTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Farmer Name</th>
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

                    <!-- ORIGINAL ROW -->
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="{{ route('farmer.profile') }}" class="text-primary text-decoration-none fw-semibold">
                                Juan Dela Cruz
                            </a>
                        </td>
                        <td>FRM-001</td>
                        <td>Pampanga</td>
                        <td>San Fernando</td>
                        <td>Dolores</td>
                        <td>2026</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="action-icons">
                            <a href="#" class="text-primary me-3"><i class="fa fa-pen-to-square"></i></a>
                            <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>

                    <!-- EXTRA ROWS (FOR PAGINATION DEMO) -->
                    @for($i = 2; $i <= 12; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>Farmer {{ $i }}</td>
                        <td>FRM-00{{ $i }}</td>
                        <td>Pampanga</td>
                        <td>City {{ $i }}</td>
                        <td>Barangay {{ $i }}</td>
                        <td>2026</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="action-icons">
                            <a href="#" class="text-primary me-3"><i class="fa fa-pen-to-square"></i></a>
                            <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endfor

                </tbody>
            </table>

            <!-- PAGINATION ADDED -->
            <div class="d-flex justify-content-end mt-3">
                <nav>
                    <ul class="pagination pagination-sm mb-0" id="pagination">

                        <li class="page-item disabled">
                            <a class="page-link" href="#">«</a>
                        </li>

                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>

                        <li class="page-item">
                            <a class="page-link" href="#">»</a>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>

    </div>
</div>
</div>

<!-- OFFCANVAS (UNCHANGED) -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="addFarmerOffcanvas">
    <div class="offcanvas-header">
        <h5>Add Farmer</h5>
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Middle Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Birthday</label>
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Contact Number</label>
                <input type="number" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Civil Status</label>
                    <select class="form-select">
                        <option></option>
                        <option>Sigle</option>
                        <option>Married</option>
                        <option>Widow/Widower</option>
                        <option>Seperated</option>
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

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Region</label>
                    <select class="form-select">
                        <option></option>
                        <option>Married</option>
                        <option>Widow/Widower</option>
                        <option>Seperated</option>
                    </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Province</label>
                    <select class="form-select">
                        <option></option>
                        <option>Married</option>
                        <option>Widow/Widower</option>
                        <option>Seperated</option>
                    </select>
            </div>
        </div>

        <label class="form-label">Address Line</label>
        <input class="form-control">

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Cooperative</label>
                    <select class="form-select">
                        <option></option>
                        <option>Married</option>
                        <option>Widow/Widower</option>
                        <option>Seperated</option>
                    </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Position</label>
                    <select class="form-select">
                        <option></option>
                        <option>Married</option>
                        <option>Widow/Widower</option>
                        <option>Seperated</option>
                    </select>
            </div>
        </div>

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Work</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Spouse</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="row">
            <!-- SELECT -->
            <div class="col-md-6">
                <label class="form-label">Spouse's Occupation</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Year</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <button class="btn btn-success w-100 mt-3">Save Farmer</button>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="editFarmerOffcanvas">
    <div class="offcanvas-header">
        <h5>Update Farmer</h5>
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <div class="section-title">Edit Farmer Info</div>

        <label class="form-label">Name</label>
        <input class="form-control" value="Juan Dela Cruz">

        <label class="form-label">Herd Code</label>
        <input class="form-control" value="FRM-001">

        <div class="section-title">Location</div>

        <label class="form-label">Municipality</label>
        <input class="form-control" value="San Fernando">

        <label class="form-label">Barangay</label>
        <input class="form-control" value="Dolores">

        <div class="section-title">Other</div>

        <label class="form-label">Year</label>
        <input class="form-control" value="2026">

        <label class="form-label">Status</label>
        <select class="form-select">
            <option selected>Active</option>
            <option>Pending</option>
        </select>

        <button class="btn btn-primary w-100 mt-3">Update Farmer</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script>
const searchInput = document.getElementById("searchInput");
const table = document.getElementById("farmerTable");

searchInput.addEventListener("keyup", function () {
    let value = this.value.toLowerCase();
    let rows = table.querySelectorAll("tbody tr");

    rows.forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(value)
            ? ""
            : "none";
    });
});
</script>
</body>
</html>