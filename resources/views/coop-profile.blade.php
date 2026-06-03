<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cooperative Profile - CBED</title>

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


.user-box{
    text-align:center;
    margin-top:50px;
    margin-bottom:40px;
}

.user-box i{
    font-size:70px;
    margin-bottom:10px;
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

/* PROFILE */
.profile-box{
    background:white;
    border-radius:22px;
    padding:30px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.profile-header{
    background:linear-gradient(135deg,var(--navy),var(--navy2));
    color:white;
    padding:25px;
    border-radius:18px;
    margin-bottom:25px;
}

.label{
    font-size:12px;
    color:#6c757d;
    text-transform:uppercase;
}

.value{
    font-size:16px;
    font-weight:600;
    color:var(--navy);
}

/* TAB BOX */
.tab-content-box{
    background:white;
    padding:25px;
    border-radius:18px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
    margin-top:20px;
}

.btn-navy{
    background:var(--navy);
    color:white;
}

.btn-navy:hover{
    background:var(--navy2);
    color:white;
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
        <i class="fa fa-circle-user"></i>
        <h5>John Carlo</h5>
        <small>Administrator</small>
    </div>

    <div class="menu">
        <a href="{{ route('coop.dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
        <a href="{{ route('coop.profile') }}"><i class="fa fa-user"></i> Profile</a>
        <a href="{{ route('coop.list.farmer') }}"><i class="fa fa-users"></i> Farmer</a>
        <a href="{{ route('coop.animal.inventory') }}"><i class="fa fa-cow"></i> Animal Invetory</a>
        <a href="{{ route('coop.income.statement') }}"><i class="fa-solid fa-money-bill-wave"></i> Income Statement</a>
        <a href="{{ route('coop.balance.sheet') }}"><i class="fa-solid fa-scale-balanced"></i> Balance Sheet</a>
    </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-primary">Cooperative Profile</h3>
        <a href="{{ route('cooperative') }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left me-1"></i> Back
        </a>
    </div>

    <!-- PROFILE -->
    <div class="profile-box">

        <div class="profile-header">
            <h4>Central Luzon Dairy Cooperative</h4>
            <small>Coop ID: COOP-001</small>
        </div>

        <div class="row">

            <div class="col-md-6 mb-3">
                <div class="label">Cooperative Code</div>
                <div class="value">COOP-001</div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="label">Province</div>
                <div class="value">Pampanga</div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="label">Municipality</div>
                <div class="value">San Fernando</div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="label">Barangay</div>
                <div class="value">Dolores</div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="label">Members</div>
                <div class="value">120 Farmers</div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="label">Year Established</div>
                <div class="value">2020</div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="label">Status</div>
                <div class="value">
                    <span class="badge bg-success">Active</span>
                </div>
            </div>

        </div>

    </div>

    <!-- OPTIONAL TAB AREA -->
    <div class="tab-content-box">
        <h5>Cooperative Summary</h5>
        <p class="text-muted mb-0">
            Manage cooperative members, milk collection, expenses, and livestock distribution.
        </p>
    </div>

</div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>