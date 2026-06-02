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
    position:relative;
}

.logo{
    font-size:28px;
    font-weight:700;
    text-align:center;
    margin-bottom:40px;
}

/* TOP RIGHT ICONS */
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
    margin-bottom:12px;
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
    background:rgba(255,255,255,.15);
    transform:translateX(5px);
}

/* PROFILE BOX */
.profile-box{
    background:white;
    border-radius:22px;
    padding:30px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

/* PROFILE HEADER */
.profile-header{
    background:linear-gradient(135deg,var(--navy),var(--navy2));
    color:white;
    padding:25px;
    border-radius:18px;
    margin-bottom:25px;
}

/* INFO */
.label{
    font-size:12px;
    color:#6c757d;
    text-transform:uppercase;
    margin-bottom:5px;
}

.value{
    font-size:16px;
    font-weight:600;
    color:var(--navy);
}

/* STAT CARDS */
.stat-card{
    border:none;
    border-radius:18px;
    transition:.3s;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
    cursor:pointer;
}

/* ACTIVE TAB */
.stat-card.active{
    background:var(--navy);
    color:white;
    transform:translateY(-6px);
}

.stat-card.active i{
    color:white !important;
}

.page-title{
    color:var(--navy);
    font-weight:700;
}

/* TAB CONTENT */
.tab-content-box{
    background:white;
    padding:25px;
    border-radius:18px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
    margin-top:20px;
}

.btn-navy{
    background: var(--navy);
    color: white;
    border: none;
}

.btn-navy:hover{
    background: var(--navy2);
    color: white;
}


</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

    <!-- SIDEBAR -->
    <div class="col-lg-2 sidebar">

        <div class="top-actions">
            <a href="#" class="top-icon"><i class="fa-solid fa-gear"></i></a>
            <a href="{{ route('login') }}" class="top-icon"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>

        <div class="user-box">
            <i class="fa-solid fa-circle-user"></i>
            <h5>John Carlo</h5>
            <small>Administrator</small>
        </div>

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

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="page-title">Farmer Profile</h3>
            <a href="{{ route('farmer') }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left me-1"></i> Back
            </a>
        </div>

        <!-- PROFILE -->
        <div class="profile-box mb-4">

            <div class="profile-header">
                <h4>Juan Dela Cruz</h4>
                <small>Farmer ID: FRM-001</small>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3"><div class="label">Herd Code</div><div class="value">FRM-001</div></div>
                <div class="col-md-6 mb-3"><div class="label">Province</div><div class="value">Pampanga</div></div>
                <div class="col-md-6 mb-3"><div class="label">Municipality</div><div class="value">San Fernando</div></div>
                <div class="col-md-6 mb-3"><div class="label">Barangay</div><div class="value">Dolores</div></div>
                <div class="col-md-6 mb-3"> <div class="label">Status</div> <div class="value"> <span class="badge bg-success"> Active </span> </div> </div>
                <div class="col-md-6 mb-3"> <div class="label">Year Added</div> <div class="value">2026</div> </div>
            </div>

        </div>

        <!-- STATS (CLICKABLE TABS) -->
        <div class="row g-4 mb-4">

            <div class="col-md-4 col-lg-2">
                <div class="card stat-card p-3 text-center active tab-btn" data-tab="carabao">
                    <i class="fa-solid fa-cow fa-2x text-primary mb-2"></i>
                    <h4>25</h4>
                    <p class="mb-0">Carabao</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="milk">
                    <i class="fa-solid fa-glass-water fa-2x text-info mb-2"></i>
                    <h4>120L</h4>
                    <p class="mb-0">Milk</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="pregnant">
                    <i class="fa-solid fa-baby fa-2x text-warning mb-2"></i>
                    <h4>8</h4>
                    <p class="mb-0">Pregnant</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="lactating">
                    <i class="fa-solid fa-hand-holding-water fa-2x text-success mb-2"></i>
                    <h4>10</h4>
                    <p class="mb-0">Lactating</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="dead">
                    <i class="fa-solid fa-skull fa-2x text-danger mb-2"></i>
                    <h4>2</h4>
                    <p class="mb-0">Dead</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="sold">
                    <i class="fa-solid fa-money-bill-wave fa-2x text-secondary mb-2"></i>
                    <h4>6</h4>
                    <p class="mb-0">Sold</p>
                </div>
            </div>

        </div>

        <!-- TAB CONTENT -->
        <div class="tab-content-box">

            <div id="carabao" class="tab-content-item">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5>Carabao List</h5>

                    <!-- OFFCANVAS BUTTON -->
                    <button class="btn btn-navy btn-sm"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#addCarabaoOffcanvas">
                        <i class="fa fa-plus me-1"></i> Add Carabao
                    </button>
                </div>

                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Carabao A</td>
                        <td>Active</td>
                    </tr>
                </table>
            </div>

            <div id="milk" class="tab-content-item d-none">
                <h5>Milk Records</h5>
                <p>120 Liters Total</p>
            </div>

            <div id="pregnant" class="tab-content-item d-none">
                <h5>Pregnant Carabaos</h5>
            </div>

            <div id="lactating" class="tab-content-item d-none">
                <h5>Lactating Carabaos</h5>
            </div>

            <div id="dead" class="tab-content-item d-none">
                <h5>Dead Records</h5>
            </div>

            <div id="sold" class="tab-content-item d-none">
                <h5>Sold Records</h5>
            </div>

        </div>

    </div>
</div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="addCarabaoOffcanvas">

    <div class="offcanvas-header">
        <h5>Add Carabao</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Breed</label>
        <select class="form-select">
            <option value="" disabled selected>Select Breed</option>
            <option>RV</option>
            <option>SP</option>
            <option>ItMB</option>
            <option>USMB</option>
            <option>CB50</option>
            <option>CB75</option>
            <option>CB87</option>
            <option>CB93</option>
        </select>

        <label class="form-label">Eartag/ID</label>
        <input type="text" class="form-control">

        <label class="form-label">Sex</label>
        <select class="form-select">
            <option>Male</option>
            <option>Female</option>
        </select>

        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>

        <label class="form-label">Classification</label>
        <select class="form-select">
            <option value="" disabled selected>Select Animal Classification</option>
            <option>Female Calf</option>
            <option>Yearling Heifer</option>
            <option>Heifer</option>
            <option>Cow Dry</option>
            <option>Cow Dry Pregnant</option>
            <option>Cow Lactating</option>
            <option>Cow Lactating Pregnant</option>
            <option>Male Calf</option>
            <option>Yearling Bull</option>
            <option>Junior Bull</option>
            <option>Senior Bull</option>
        </select>

        <div class="mb-3">
            <label for="estimated_amount" class="form-label">Estimated Amount</label>
            <input type="number" class="form-control" id="estimated_amount" name="estimated_amount">
        </div>

        <label class="form-label">Ownership Type</label>
        <select class="form-select">
            <option value="" disabled selected>Select Ownership Type</option>
            <option>PCC-Owned</option>
            <option>Farmer-Owned</option>
            <option>Co-Owned</option>
            <option>LGU-Owned</option>
            <option>Coop-Owned</option>
        </select>

        <label class="form-label">Animal Source</label>
        <select class="form-select">
            <option value="" disabled selected>Select Source</option>
            <option>Purchased by Farmer</option>
            <option>Purchased by Coop</option>
            <option>Purchased by LGU</option>
            <option>Under Contract with PCC (Farmer)</option>
            <option>Under Contract with PCC (Coop)</option>
            <option>Under Contract with PCC (LGU)</option>
        </select>

        <label class="form-label">Year</label>
        <input type="text" class="form-control">

        <button class="btn btn-navy w-100 mt-3">
            Save Carabao
        </button>

    </div>
</div>

<script>
const tabs = document.querySelectorAll('.tab-btn');
const contents = document.querySelectorAll('.tab-content-item');

tabs.forEach(tab => {
    tab.addEventListener('click', function () {

        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        let target = this.getAttribute('data-tab');

        contents.forEach(c => c.classList.add('d-none'));

        document.getElementById(target).classList.remove('d-none');
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>