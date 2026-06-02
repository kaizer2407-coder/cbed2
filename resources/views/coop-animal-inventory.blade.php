<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coop Animal Inventory</title>

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
    font-family:Segoe UI;
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
}

.user-box{
    text-align:center;
    margin-top:50px;
    margin-bottom:40px;
}

.user-box i{
    font-size:70px;
}

.menu a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px;
    border-radius:12px;
    margin-bottom:10px;
}

.menu a:hover{
    background:rgba(255,255,255,.15);
}

/* TABLE BOX */
.table-box{
    background:white;
    border-radius:18px;
    padding:25px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.page-title{
    font-weight:700;
    color:var(--navy);
}

/* ACTION ICONS */
.action-icons a{
    font-size:18px;
    margin-right:10px;
    transition:0.2s;
}

.action-icons a:hover{
    transform:scale(1.2);
}
</style>

</head>

<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->
<div class="col-lg-2 sidebar">

    <div class="top-actions">
        <a href="#"><i class="fa fa-gear top-icon"></i></a>
        <a href="{{ route('login') }}"><i class="fa fa-right-from-bracket top-icon"></i></a>
    </div>

    <div class="user-box">
        <i class="fa fa-circle-user"></i>
        <h5>Coop Admin</h5>
        <small>Administrator</small>
    </div>

    <div class="menu">
        <a href="{{ route('coop.dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
        <a href="{{ route('coop.list.farmer') }}"><i class="fa fa-users"></i> Farmer</a>
        <a href="{{ route('coop.animal.inventory') }}"><i class="fa fa-cow"></i> Animal Inventory</a>
        <a href="{{ route('coop.profile') }}"><i class="fa fa-user"></i> Profile</a>
    </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="page-title">Animal Inventory</h3>

        <button class="btn btn-primary">
            <i class="fa fa-plus me-1"></i> Add Animal
        </button>
    </div>

    <div class="table-box">

        <div class="table-responsive">
            <table class="table table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Eartag / Bolus</th>
                        <th>Breed</th>
                        <th>Sex</th>
                        <th>Birthdate</th>
                        <th>Classification</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>

                        <td>
                            <div class="fw-semibold">5PAN23110</div>
                            <small class="text-muted">Bolus: 123445678</small>
                        </td>

                        <td>Murrah</td>

                        <td>
                            <span class="badge bg-info text-dark">Female</span>
                        </td>

                        <td>01-Jan-2026</td>

                        <td>
                            <span class="badge bg-secondary">Heifer</span>
                        </td>

                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>

                        <td class="action-icons">
                            <a href="#" class="text-primary">
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>