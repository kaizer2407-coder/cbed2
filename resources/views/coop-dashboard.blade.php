<!DOCTYPE html>
<html>
<head>
<title>Coop Dashboard</title>
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

.card-box{
    background:white;
    border-radius:18px;
    padding:20px;
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
        <a href="{{ route('coop.dashboard') }}"><i class="fa fa-home me-2"></i> Dashboard</a>
        <a href="{{ route('coop.farmers') }}"><i class="fa fa-users me-2"></i> Farmers</a>
        <a href="{{ route('coop.animals') }}"><i class="fa fa-cow me-2"></i> Animals</a>
    </div>
</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <h3 class="mb-4 text-primary">Cooperative Dashboard</h3>

    <div class="row g-3">

        <div class="col-md-4">
            <div class="card-box text-center">
                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                <h4>120</h4>
                <p>Total Farmers</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-box text-center">
                <i class="fa fa-cow fa-2x text-success mb-2"></i>
                <h4>350</h4>
                <p>Animals</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-box text-center">
                <i class="fa fa-glass-water fa-2x text-info mb-2"></i>
                <h4>2,500L</h4>
                <p>Milk Collection</p>
            </div>
        </div>

    </div>

</div>
</div>
</div>

</body>
</html>