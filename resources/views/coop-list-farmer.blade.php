<!DOCTYPE html>
<html>
<head>
<title>Coop Farmer List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{--navy:#083d6f;--navy2:#0d4f8b;--bg:#f4f7fb;}

body{background:var(--bg);font-family:Segoe UI;}

.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--navy),var(--navy2));
    padding:30px 20px;
    color:white;
    position:relative;
}

.top-actions{position:absolute;top:20px;right:20px;display:flex;gap:15px;}
.top-icon{color:white;}

.user-box{text-align:center;margin-top:50px;margin-bottom:40px;}
.user-box i{font-size:70px;}

.menu a{
    display:block;
    color:white;
    padding:15px;
    text-decoration:none;
    border-radius:12px;
    margin-bottom:10px;
}
.menu a:hover{background:rgba(255,255,255,.15);}

.table-box{
    background:white;
    padding:25px;
    border-radius:18px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
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

<h3 class="mb-4 text-primary fw-bold">Farmer List</h3>

<div class="table-box">

<div class="table-responsive">
<table class="table table-hover align-middle">

<thead class="table-light">
<tr>
    <th>ID</th>
    <th>Farmer</th>
    <th>Herd Code</th>
    <th>Location</th>
    <th>Status</th>
</tr>
</thead>

<tbody>

<tr>
    <td>1</td>

    <td>
        <div class="fw-semibold">Juan Dela Cruz</div>
        <small class="text-muted">Farmer</small>
    </td>

    <td><span class="badge bg-primary">FRM-001</span></td>

    <td>
        Pampanga - San Fernando - Dolores
    </td>

    <td>
        <span class="badge bg-success">Active</span>
    </td>
</tr>

</tbody>

</table>
</div>

</div>

</div>
</div>
</div>
</body>
</html>