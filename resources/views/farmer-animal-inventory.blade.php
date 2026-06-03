<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Farmer Profile - CBED</title>

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

/* TOP RIGHT ICONS */
.top-actions{
    position:absolute;
    top:20px;
    right:20px;
    display:flex;
    gap:15px;
}

.top-bar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    width:100%;
}

.top-icon{
    color:white;
    font-size:18px;
    text-decoration:none;
    transition:.3s ease;
    display:flex;
    align-items:center;
    justify-content:center;
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

@media (min-width: 1200px) {
    .custom-col-5 {
        width: 20%;
        flex: 0 0 20%;
    }
}

</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

    <!-- SIDEBAR -->
    <div class="col-lg-2 sidebar">

        <div class="top-bar">

            <!-- LEFT -->
            <a href="{{ route('dashboard') }}" class="top-icon">
                <i class="fa fa-home"></i>
            </a>

            <!-- RIGHT -->
            <a href="{{ route('login') }}" class="top-icon">
                <i class="fa fa-right-from-bracket"></i>
            </a>

        </div>

        <div class="user-box">
            <i class="fa-solid fa-circle-user"></i>
            <h5>John Carlo</h5>
            <small>Administrator</small>
        </div>

        <div class="menu">
            <a href="{{ route('farmer-dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
            <a href="{{ route('farmer-animal-inventory') }}"><i class="fa fa-users"></i> Animal Inventory</a>
            <a href="{{ route('farmer.profile') }}"><i class="fa fa-building"></i> Account</a>
        </div>

    </div>

    <!-- CONTENT -->
    <div class="col-lg-10 p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="page-title">Animal Inventory</h3>
        </div>

        <!-- STATS (CLICKABLE TABS) -->
        <div class="row g-3 mb-4">

            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center active tab-btn" data-tab="carabao">
                    <i class="fa-solid fa-cow fa-2x text-primary mb-2"></i>
                    <h5>25</h5>
                    <p class="mb-0 small">Carabao</p>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="milk">
                    <i class="fa-solid fa-glass-water fa-2x text-info mb-2"></i>
                    <h5>120L</h5>
                    <p class="mb-0 small">Milk</p>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="pregnant">
                    <i class="fa-solid fa-baby fa-2x text-warning mb-2"></i>
                    <h5>8</h5>
                    <p class="mb-0 small">Pregnant</p>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="lactating">
                    <i class="fa-solid fa-hand-holding-water fa-2x text-success mb-2"></i>
                    <h5>10</h5>
                    <p class="mb-0 small">Lactating</p>
                </div>
            </div>

            <!-- ARTIFICIAL INSEMINATION -->
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="ai">
                    <i class="fa-solid fa-syringe fa-2x text-danger mb-2"></i>
                    <h5>12</h5>
                    <p class="mb-0 small">Mating</p>
                </div>
            </div>

            <!-- HEALTH & NUTRITION -->
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="health"> 
                    <i class="fa-solid fa-heart-pulse fa-2x text-danger mb-2"></i> 
                    <h5>23</h5> 
                    <p class="mb-0 small">Health & Nutrition</p> 
                </div> 
            </div>

            <!-- CALF DROP -->
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="calfdrop">
                    <i class="fa-solid fa-baby-carriage fa-2x text-primary mb-2"></i>
                    <h5>6</h5>
                    <p class="mb-0 small">Calf Drop</p>
                </div>
            </div>

            <!-- DEAD -->
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="dead">
                    <i class="fa-solid fa-skull fa-2x text-danger mb-2"></i>
                    <h5>2</h5>
                    <p class="mb-0 small">Dead</p>
                </div>
            </div>

            <!-- DEAD -->
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="sold">
                    <i class="fa-solid fa-money-bill-wave fa-2x text-secondary mb-2"></i>
                    <h5>6</h5>
                    <p class="mb-0 small">Sold</p>
                </div>
            </div>

            <!-- EXPENSES -->
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 custom-col-5">
                <div class="card stat-card p-3 text-center tab-btn" data-tab="expenses">
                    <i class="fa-solid fa-wallet fa-2x text-dark mb-2"></i>
                    <h5>₱15K</h5>
                    <p class="mb-0 small">Expenses</p>
                </div>
            </div>

        </div>
        <!--end -->


 <!-- TAB CONTENT -->
<div class="tab-content-box">

<!-- CARABAO -->
<div id="carabao" class="tab-content-item">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Carabao List</h5>

        <button class="btn btn-navy btn-sm"
                data-bs-toggle="offcanvas"
                data-bs-target="#addCarabaoOffcanvas">
            <i class="fa fa-plus me-1"></i> Add Carabao
        </button>
    </div>

    <!-- SEARCH (STYLED) -->
    <div class="d-flex justify-content-end mb-3">
        <div class="input-group input-group-sm" style="width:280px; height:38px;">

            <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                <i class="fa fa-search"></i>
            </span>

            <input type="text"
                   class="form-control table-search h-100"
                   placeholder="Search Carabao Record...">

        </div>
    </div>

    <!-- TABLE -->
    <div class="table-responsive">
        <table class="table table-hover align-middle data-table">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Eartag/ID</th>
                    <th>Bolus</th>
                    <th>Sex</th>
                    <th>Birthdate</th>
                    <th>Classification</th>
                    <th>Year</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>5PAN23110</td>
                    <td>123445678</td>
                    <td>Female</td>
                    <td>01-Jan-26</td>
                    <td>Heifer</td>
                    <td>2026</td>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- PAGINATION -->
    <div class="d-flex justify-content-end mt-3 pagination-box"></div>

    </div>

    <!-- MILK -->
    <div id="milk" class="tab-content-item d-none">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5>Milk Records</h5>

            <button class="btn btn-navy btn-sm"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addMilkOffcanvas">
                <i class="fa fa-plus me-1"></i> Add Milk
            </button>
        </div>

        <!-- SEARCH (STYLED) -->
        <div class="d-flex justify-content-end mb-3">
            <div class="input-group input-group-sm" style="width:280px; height:38px;">

                <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text"
                    class="form-control table-search h-100"
                    placeholder="Search Milk Record...">

            </div>
        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-hover align-middle data-table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Carabao ID</th>
                        <th>Breed</th>
                        <th>Milk Produced</th>
                        <th>Session</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>02-Jun-26</td>
                        <td>5PAN23110</td>
                        <td>Murrah</td>
                        <td>15 Liters</td>
                        <td>Morning</td>
                        <td><span class="badge bg-success">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-end mt-3 pagination-box"></div>

    </div>

    <!-- PREGNANT -->
    <div id="pregnant" class="tab-content-item d-none">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5>Pregnant Carabaos</h5>

            <button class="btn btn-navy btn-sm"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addPregnantOffcanvas">
                <i class="fa fa-plus me-1"></i> Add Pregnant
            </button>
        </div>

        <!-- SEARCH -->
        <div class="d-flex justify-content-end mb-3">
            <div class="input-group input-group-sm" style="width:280px; height:38px;">

                <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text"
                    class="form-control table-search h-100"
                    placeholder="Search Pregnant Record...">

            </div>
        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-hover align-middle data-table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Eartag/ID</th>
                        <th>Breed</th>
                        <th>Sex</th>
                        <th>Breeding Date</th>
                        <th>Expected Delivery</th>
                        <th>Months Pregnant</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>5PAN23110</td>
                        <td>Murrah</td>
                        <td>Female</td>
                        <td>15-Jan-26</td>
                        <td>15-Oct-26</td>
                        <td>5 Months</td>
                        <td><span class="badge bg-success">Healthy</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-end mt-3 pagination-box"></div>

    </div>

        <!-- LACTATING -->
        <div id="lactating" class="tab-content-item d-none">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5>Lactating Carabaos</h5>

                <button class="btn btn-navy btn-sm"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#addLactatingOffcanvas">
                    <i class="fa fa-plus me-1"></i> Add Lactating
                </button>
            </div>

            <!-- SEARCH -->
            <div class="d-flex justify-content-end mb-3">
                <div class="input-group input-group-sm" style="width:280px; height:38px;">
                    <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i></span>
                    <input type="text" class="form-control table-search" placeholder="Search Lactating Record...">
                </div>
            </div>

            <!-- TABLE -->
            <div class="table-responsive">
                <table class="table table-hover align-middle data-table">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Eartag/ID</th>
                            <th>Breed</th>
                            <th>Birth Date</th>
                            <th>Lactation Start</th>
                            <th>Milk Yield</th>
                            <th>Lactation Stage</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>5PAN23110</td>
                            <td>Murrah</td>
                            <td>10-Dec-25</td>
                            <td>15-Dec-25</td>
                            <td>15 Liters/day</td>
                            <td>Early</td>
                            <td><span class="badge bg-success">Active</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- PAGINATION -->
            <div class="d-flex justify-content-end mt-3 pagination-box"></div>

        </div>

    <!-- DEAD -->
    <div id="dead" class="tab-content-item d-none">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5>Dead Records</h5>

            <button class="btn btn-navy btn-sm"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addDeadOffcanvas">
                <i class="fa fa-plus me-1"></i> Add Dead
            </button>
        </div>

        <!-- SEARCH (STYLED) -->
        <div class="d-flex justify-content-end mb-3">
            <div class="input-group input-group-sm" style="width:280px; height:38px;">

                <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text"
                    class="form-control table-search h-100"
                    placeholder="Search Dead Record...">

            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle data-table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Eartag/ID</th>
                        <th>Breed</th>
                        <th>Sex</th>
                        <th>Date of Death</th>
                        <th>Cause</th>
                        <th>Age</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>5PAN23110</td>
                        <td>Murrah</td>
                        <td>Female</td>
                        <td>20-May-26</td>
                        <td>Illness</td>
                        <td>5 Years</td>
                        <td><span class="badge bg-danger">Deceased</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end mt-3 pagination-box"></div>

    </div>

    <!-- SOLD -->
    <div id="sold" class="tab-content-item d-none">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5>Sold Records</h5>

            <button class="btn btn-navy btn-sm"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addSoldOffcanvas">
                <i class="fa fa-plus me-1"></i> Add Sold
            </button>
        </div>

        <!-- SEARCH -->
        <div class="d-flex justify-content-end mb-3">
            <div class="input-group input-group-sm" style="width:280px;">
                <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text"
                    class="form-control table-search"
                    placeholder="Search Sold Records...">
            </div>
        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Eartag/ID</th>
                        <th>Breed</th>
                        <th>Sex</th>
                        <th>Date Sold</th>
                        <th>Buyer</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>5PAN23110</td>
                        <td>Murrah</td>
                        <td>Female</td>
                        <td>15-May-26</td>
                        <td>Juan Dela Cruz</td>
                        <td>₱85,000</td>
                        <td><span class="badge bg-success">Sold</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-end mt-3 pagination-box"></div>

    </div>

    <!-- EXPENSES -->
    <div id="expenses" class="tab-content-item d-none">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5>Expense Records</h5>

            <button class="btn btn-navy btn-sm"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addExpenseOffcanvas">
                <i class="fa fa-plus me-1"></i> Add Expense
            </button>
        </div>

        <!-- SEARCH -->
        <div class="d-flex justify-content-end mb-3">
            <div class="input-group input-group-sm" style="width:280px;">
                <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text"
                    class="form-control table-search"
                    placeholder="Search Expense Records...">
            </div>
        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Recorded By</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>02-Jun-26</td>
                        <td>Feeds</td>
                        <td>Purchased animal feeds</td>
                        <td>₱5,000</td>
                        <td>Admin</td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-end mt-3 pagination-box"></div>

    </div>

    <!-- AI -->
    <div id="ai" class="tab-content-item d-none">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5>Mating Records</h5>

            <button class="btn btn-navy btn-sm"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addAIOffcanvas">
                <i class="fa fa-plus me-1"></i> Add Mating
            </button>
        </div>

        <!-- SEARCH (STYLED) -->
        <div class="d-flex justify-content-end mb-3">
            <div class="input-group input-group-sm" style="width:280px; height:38px;">

                <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text"
                    class="form-control table-search h-100"
                    placeholder="Search Mating Record...">

            </div>
        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-hover align-middle data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Carabao ID</th>
                        <th>Breed</th>
                        <th>Insemination Date</th>
                        <th>Semen Type</th>
                        <th>Technician</th>
                        <th>Result</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>5PAN23110</td>
                        <td>Murrah</td>
                        <td>01-Jun-26</td>
                        <td>Frozen</td>
                        <td>Dr. Santos</td>
                        <td>Successful</td>
                        <td><span class="badge bg-success">Pregnant</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-end mt-3 pagination-box"></div>
    </div>


    <!-- CALF DROP -->
    <div id="calfdrop" class="tab-content-item d-none">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5>Calf Drop Records</h5>

        <button class="btn btn-navy btn-sm"
            data-bs-toggle="offcanvas"
            data-bs-target="#addCalfDropOffcanvas">
            <i class="fa fa-plus me-1"></i> Add Calf Drop
        </button>
    </div>

    <!-- SEARCH (STYLED) -->
        <div class="d-flex justify-content-end mb-3">
            <div class="input-group input-group-sm" style="width:280px; height:38px;">

                <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text"
                    class="form-control table-search h-100"
                    placeholder="Search Calf Drop Record...">

            </div>
        </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mother ID</th>
                    <th>Calf ID</th>
                    <th>Birth Date</th>
                    <th>Breed</th>
                    <th>Sex</th>
                    <th>Weight</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>5PAN23110</td>
                    <td>CALF-001</td>
                    <td>10-Jun-26</td>
                    <td>Murrah</td>
                    <td>Female</td>
                    <td>28 kg</td>
                    <td><span class="badge bg-success">Healthy</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end mt-3 pagination-box"></div>
</div>


    <!-- HEALTH -->
  <div id="health" class="tab-content-item d-none">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5>Health Records</h5>
        <button class="btn btn-navy btn-sm"
            data-bs-toggle="offcanvas"
            data-bs-target="#addHealthOffcanvas">
            <i class="fa fa-plus me-1"></i> Add Health Record
        </button>
    </div>

    <!-- SEARCH (STYLED) -->
        <div class="d-flex justify-content-end mb-3">
            <div class="input-group input-group-sm" style="width:280px; height:38px;">

                <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text"
                    class="form-control table-search h-100"
                    placeholder="Search Health & Nutrition Record...">

            </div>
        </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Carabao ID</th>
                    <th>Date</th>
                    <th>Condition</th>
                    <th>Diagnosis</th>
                    <th>Treatment</th>
                    <th>Veterinarian</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>5PAN23110</td>
                    <td>02-Jun-26</td>
                    <td>Fever</td>
                    <td>Viral Infection</td>
                    <td>Antibiotics</td>
                    <td>Dr. Santos</td>
                    <td><span class="badge bg-warning text-dark">Under Treatment</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end mt-3 pagination-box"></div>
</div>

</div>
<!-- END TAB CONTENT -->
         
    </div>
</div>
</div>


<!-- ================= OFFCANVAS : CARABAO ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addCarabaoOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Carabao</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Breed</label>
        <select class="form-select mb-3">
            <option selected disabled>Select Breed</option>
            <option>RV</option>
            <option>SP</option>
            <option>ItMB</option>
            <option>USMB</option>
            <option>CB50</option>
        </select>

        <label class="form-label">Eartag/ID</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Sex</label>
        <select class="form-select mb-3">
            <option>Male</option>
            <option>Female</option>
        </select>

        <label class="form-label">Birthday</label>
        <input type="date" class="form-control mb-3">

        <label class="form-label">Classification</label>
        <select class="form-select mb-3">
            <option selected disabled>Select Classification</option>
            <option>Female Calf</option>
            <option>Yearling Heifer</option>
            <option>Heifer</option>
            <option>Cow Lactating</option>
            <option>Junior Bull</option>
        </select>

        <button class="btn btn-navy w-100">
            Save Carabao
        </button>

    </div>

</div>
<!-- ================= END CARABAO ================= -->


<!-- ================= OFFCANVAS : MILK ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addMilkOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Milk Record</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Date</label>
        <input type="date" class="form-control mb-3">

        <label class="form-label">Carabao ID</label>
        <input type="text"
               class="form-control mb-3"
               placeholder="Enter Eartag">

        <label class="form-label">Milk Produced</label>
        <input type="number"
               class="form-control mb-3"
               placeholder="Liters">

        <label class="form-label">Session</label>
        <select class="form-select mb-3">
            <option>Morning</option>
            <option>Afternoon</option>
            <option>Evening</option>
        </select>

        <button class="btn btn-navy w-100">
            Save Milk Record
        </button>

    </div>

</div>
<!-- ================= END MILK ================= -->


<!-- ================= OFFCANVAS : PREGNANT ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addPregnantOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Pregnant Record</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Eartag/ID</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Breeding Date</label>
        <input type="date" class="form-control mb-3">

        <label class="form-label">Expected Delivery</label>
        <input type="date" class="form-control mb-3">

        <button class="btn btn-navy w-100">
            Save Record
        </button>

    </div>

</div>
<!-- ================= END PREGNANT ================= -->


<!-- ================= OFFCANVAS : LACTATING ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addLactatingOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Lactating Record</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Eartag/ID</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Milk Yield</label>
        <input type="text"
               class="form-control mb-3"
               placeholder="15 Liters/day">

        <label class="form-label">Lactation Stage</label>
        <select class="form-select mb-3">
            <option>Early</option>
            <option>Mid</option>
            <option>Late</option>
        </select>

        <button class="btn btn-navy w-100">
            Save Record
        </button>

    </div>

</div>
<!-- ================= END LACTATING ================= -->


<!-- ================= OFFCANVAS : DEAD ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addDeadOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Dead Record</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Eartag/ID</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Date of Death</label>
        <input type="date" class="form-control mb-3">

        <label class="form-label">Cause</label>
        <input type="text" class="form-control mb-3">

        <button class="btn btn-navy w-100">
            Save Record
        </button>

    </div>

</div>
<!-- ================= END DEAD ================= -->


<!-- ================= OFFCANVAS : SOLD ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addSoldOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Sold Record</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Buyer</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Amount</label>
        <input type="number" class="form-control mb-3">

        <label class="form-label">Date Sold</label>
        <input type="date" class="form-control mb-3">

        <button class="btn btn-navy w-100">
            Save Record
        </button>

    </div>

</div>
<!-- ================= END SOLD ================= -->


<!-- ================= OFFCANVAS : EXPENSE ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addExpenseOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Expense</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Category</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Amount</label>
        <input type="number" class="form-control mb-3">

        <label class="form-label">Description</label>
        <textarea class="form-control mb-3"></textarea>

        <button class="btn btn-navy w-100">
            Save Expense
        </button>

    </div>

</div>
<!-- ================= END EXPENSE ================= -->


<!-- ================= OFFCANVAS : AI ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addAIOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add AI Record</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Carabao ID</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Insemination Date</label>
        <input type="date" class="form-control mb-3">

        <label class="form-label">Technician</label>
        <input type="text" class="form-control mb-3">

        <button class="btn btn-navy w-100">
            Save AI Record
        </button>

    </div>

</div>
<!-- ================= END AI ================= -->


<!-- ================= OFFCANVAS : CALF DROP ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addCalfDropOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Calf Drop</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Mother ID</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Calf ID</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Birth Date</label>
        <input type="date" class="form-control mb-3">

        <button class="btn btn-navy w-100">
            Save Calf Record
        </button>

    </div>

</div>
<!-- ================= END CALF DROP ================= -->

<!-- ================= OFFCANVAS : HEALTH ================= -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addHealthOffcanvas">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Add Health Record</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Carabao ID</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Date</label>
        <input type="date" class="form-control mb-3">

        <label class="form-label">Condition</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Diagnosis</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Treatment</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Veterinarian</label>
        <input type="text" class="form-control mb-3">

        <label class="form-label">Status</label>
        <input type="text" class="form-control mb-3">

        <button class="btn btn-navy w-100">
            Save Health Record
        </button>

    </div>

</div>
<!-- ================= END HEALTH ================= -->


<script>
const tabs = document.querySelectorAll('.tab-btn');
const contents = document.querySelectorAll('.tab-content-item');

tabs.forEach(tab => {

    tab.addEventListener('click', function () {

        tabs.forEach(t => t.classList.remove('active'));

        this.classList.add('active');

        let target = this.getAttribute('data-tab');

        contents.forEach(c => {
            c.classList.add('d-none');
        });

        document.getElementById(target).classList.remove('d-none');

    });

});


document.querySelectorAll('.tab-content-item').forEach(container => {

    const table = container.querySelector('table');
    const searchInput = container.querySelector('.table-search');
    const paginationBox = container.querySelector('.pagination-box');

    if (!table || !searchInput || !paginationBox) return;

    const tbody = table.querySelector('tbody');

    // store ORIGINAL rows only once
    const originalRows = Array.from(tbody.querySelectorAll('tr'));

    let filteredRows = [...originalRows];
    let currentPage = 1;
    const rowsPerPage = 5;

    function renderTable() {

        tbody.innerHTML = "";

        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        const pageRows = filteredRows.slice(start, end);

        if (pageRows.length === 0) {
            const colspan = table.querySelectorAll('thead th').length;

            tbody.innerHTML = `
                <tr>
                    <td colspan="${colspan}" class="text-center text-muted">
                        No data found
                    </td>
                </tr>
            `;
        } else {
            pageRows.forEach(row => tbody.appendChild(row));
        }

        renderPagination();
    }

    function renderPagination() {

        paginationBox.innerHTML = "";

        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);

        if (totalPages <= 1) return;

        const ul = document.createElement('ul');
        ul.className = "pagination pagination-sm";

        // PREV
        const prevLi = document.createElement('li');
        prevLi.className = "page-item " + (currentPage === 1 ? "disabled" : "");
        prevLi.innerHTML = `<a class="page-link" href="#">&laquo;</a>`;
        prevLi.addEventListener('click', (e) => {
            e.preventDefault();
            if (currentPage > 1) {
                currentPage--;
                renderTable();
            }
        });
        ul.appendChild(prevLi);

        // PAGES
        for (let i = 1; i <= totalPages; i++) {
            const li = document.createElement('li');
            li.className = "page-item " + (i === currentPage ? "active" : "");
            li.innerHTML = `<a class="page-link" href="#">${i}</a>`;

            li.addEventListener('click', (e) => {
                e.preventDefault();
                currentPage = i;
                renderTable();
            });

            ul.appendChild(li);
        }

        // NEXT
        const nextLi = document.createElement('li');
        nextLi.className = "page-item " + (currentPage === totalPages ? "disabled" : "");
        nextLi.innerHTML = `<a class="page-link" href="#">&raquo;</a>`;
        nextLi.addEventListener('click', (e) => {
            e.preventDefault();
            if (currentPage < totalPages) {
                currentPage++;
                renderTable();
            }
        });

        ul.appendChild(nextLi);

        paginationBox.appendChild(ul);
    }

    function applySearch(value) {

        value = value.toLowerCase();

        // IMPORTANT: always reset from ORIGINAL rows
        filteredRows = originalRows.filter(row =>
            row.textContent.toLowerCase().includes(value)
        );

        currentPage = 1;
        renderTable();
    }

    searchInput.addEventListener('input', function () {
        applySearch(this.value);
    });

    // INIT
    renderTable();
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
