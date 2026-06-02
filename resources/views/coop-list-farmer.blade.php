<!DOCTYPE html>
<html>
<head>
<title>Coop Farmers</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{--navy:#083d6f;--navy2:#0d4f8b;}
body{background:#f4f7fb;}

.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--navy),var(--navy2));
    color:white;
    padding:20px;
}

.menu a{
    display:block;
    color:white;
    padding:12px;
    text-decoration:none;
    border-radius:10px;
    margin-bottom:8px;
}
.menu a:hover{background:rgba(255,255,255,.15);}

.box{
    background:white;
    padding:20px;
    border-radius:18px;
    box-shadow:0 6px 20px rgba(0,0,0,.08);
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->
<div class="col-lg-2 sidebar">
    <h5 class="mb-4">COOP PANEL</h5>
    <div class="menu">
        <a href="{{ route('coop.dashboard') }}">Dashboard</a>
        <a href="{{ route('coop.farmers') }}">Farmers</a>
        <a href="{{ route('coop.animals') }}">Animals</a>
    </div>
</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>Cooperative Farmers</h3>
        <button class="btn btn-primary"><i class="fa fa-plus me-1"></i> Add Farmer</button>
    </div>

    <div class="box">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Herd Code</th>
                    <th>Barangay</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan Dela Cruz</td>
                    <td>FRM-001</td>
                    <td>Dolores</td>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>
            </tbody>
        </table>

    </div>

</div>

</div>
</div>

</body>
</html>