<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Farmer Account - CBED</title>

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

/* PROFILE */
.profile-box{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.profile-header{
    background:linear-gradient(135deg,var(--navy),var(--navy2));
    color:white;
    padding:20px;
    border-radius:15px;
    margin-bottom:20px;
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
</style>

</head>

<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->
<div class="col-lg-2 sidebar">

    <div class="top-actions">
        <a href="#"><i class="fa-solid fa-gear top-icon"></i></a>
        <a href="{{ route('login') }}"><i class="fa-solid fa-right-from-bracket top-icon"></i></a>
    </div>

    <div class="user-box">
        <i class="fa-solid fa-circle-user"></i>
        <h5>John Carlo</h5>
        <small>Administrator</small>
    </div>

    <div class="menu">
        <a href="{{ route('fstats') }}"><i class="fa fa-home"></i> Dashboard</a>
        <a href="{{ route('fprofile') }}"><i class="fa fa-users"></i> Animal Inventory</a>
        <a href="{{ route('faccount') }}"><i class="fa fa-building"></i> Account</a>
    </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-primary fw-bold">Farmer Account</h3>

    </div>

    <!-- PROFILE -->
    <div class="profile-box">

        <div class="profile-header">
            <h4>Juan Dela Cruz</h4>
            <small>Farmer ID: FRM-001</small>
        </div>

        <div class="row">

            <div class="col-md-6 mb-3">
                <div class="label">Herd Code</div>
                <div class="value">FRM-001</div>
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
                <div class="label">Status</div>
                <div class="value">
                    <span class="badge bg-success">Active</span>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="label">Year Added</div>
                <div class="value">2026</div>
            </div>

        </div>

    </div>

</div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>