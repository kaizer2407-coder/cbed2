<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Settings - CBED</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="icon" href="{{ asset('images/pcclogo.jpg') }}" type="image/png">

<style>

:root{
    --navy:#083d6f;
    --navy-light:#0d4f8b;
    --white:#ffffff;
    --gray:#f4f7fb;
}

body{
    background:var(--gray);
    font-family:'Segoe UI',sans-serif;
}

/* SIDEBAR */
.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--navy),var(--navy-light));
    color:white;
    padding:30px 20px;
    position:relative;
}

/* TOP ACTIONS */
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

.menu a i{
    margin-right:10px;
}

.menu a:hover{
    background:rgba(255,255,255,.15);
    transform:translateX(5px);
}

/* TOPBAR */
.topbar{
    background:white;
    padding:20px 30px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

/* CARD */
.account-card{
    background:white;
    border-radius:20px;
    padding:35px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

/* PROFILE */
.profile-image{
    width:120px;
    height:120px;
    border-radius:50%;
    background:var(--navy);
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:60px;
    margin:auto;
}

.form-control{
    height:48px;
    border-radius:12px;
}

.btn-navy{
    background:var(--navy);
    color:white;
    border:none;
    border-radius:12px;
    padding:12px 25px;
    transition:.3s;
}

.btn-navy:hover{
    background:var(--navy-light);
    color:white;
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

            <a href="{{ route('dashboard') }}" class="top-icon">
                <i class="fa-solid fa-house"></i>
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

            <a href="{{ route('account') }}"
               style="background:rgba(255,255,255,.15);">
                <i class="fa fa-user-gear"></i>
                Account
            </a>

        </div>

    </div>

    <!-- CONTENT -->
    <div class="col-lg-10 p-4">

        <!-- TOPBAR -->
        <div class="topbar d-flex justify-content-between align-items-center mb-4">

            <div>
                <h3 class="mb-0">
                    Account Settings
                </h3>

                <small class="text-muted">
                    Manage your profile and account information
                </small>
            </div>

        </div>

        <!-- ACCOUNT CARD -->
        <div class="account-card">

            <div class="text-center mb-5">

                <div class="profile-image mb-3">
                    <i class="fa-solid fa-user"></i>
                </div>

                <h4>John Carlo</h4>

                <p class="text-muted mb-0">
                    Administrator Account
                </p>

            </div>

            <!-- FORM -->
            <form>

                <div class="row g-4">

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            First Name
                        </label>

                        <input type="text"
                               class="form-control"
                               value="John">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Last Name
                        </label>

                        <input type="text"
                               class="form-control"
                               value="Carlo">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Email Address
                        </label>

                        <input type="email"
                               class="form-control"
                               value="admin@cbed.com">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Username
                        </label>

                        <input type="text"
                               class="form-control"
                               value="administrator">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            New Password
                        </label>

                        <input type="password"
                               class="form-control"
                               placeholder="Enter new password">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Confirm Password
                        </label>

                        <input type="password"
                               class="form-control"
                               placeholder="Confirm password">
                    </div>

                </div>

                <!-- BUTTONS -->
                <div class="mt-5 d-flex gap-3">

                    <button type="submit" class="btn btn-navy">
                        <i class="fa fa-save me-2"></i>
                        Save Changes
                    </button>

                    <button type="reset" class="btn btn-light border">
                        Cancel
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>