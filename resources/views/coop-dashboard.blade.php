<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cooperative Dashboard</title>

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

.table-box{
    background:white;
    padding:25px;
    border-radius:18px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.card-box{
    background:white;
    border-radius:18px;
    padding:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.stat-card{
    border:none;
    border-radius:18px;
    padding:20px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.page-title{
    font-weight:700;
    color:var(--navy);
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
        <h5>Coop Admin</h5>
        <small>Administrator</small>
    </div>

    <div class="menu">
        <a href="{{ route('coop.dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
        <a href="{{ route('coop.profile') }}"><i class="fa fa-user"></i> Profile</a>
        <a href="{{ route('coop.list.farmer') }}"><i class="fa fa-users"></i> Farmer</a>
        <a href="{{ route('coop.animal.inventory') }}"><i class="fa fa-cow"></i> Animal Inventory</a>
        <a href="{{ route('coop.income.statement') }}"><i class="fa-solid fa-money-bill-wave"></i> Income Statement</a>
        <a href="{{ route('coop.balance.sheet') }}"><i class="fa-solid fa-scale-balanced"></i> Balance Sheet</a>
    </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <!-- TITLE + YEAR SELECT -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="page-title mb-0">
            Cooperative Dashboard (<span id="yearText">2026</span>)
        </h3>

        <select class="form-select w-auto" id="yearSelect" onchange="changeYear()">
            <option value="2026">2026</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
        </select>

    </div>

    <!-- STATS -->
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="stat-card bg-white">
                <i class="fa fa-users text-primary"></i>
                <h4 id="farmers">120</h4>
                <p class="mb-0">Farmers</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-card bg-white">
                <i class="fa fa-cow text-success"></i>
                <h4 id="animals">350</h4>
                <p class="mb-0">Animals</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-card bg-white">
                <i class="fa fa-glass-water text-info"></i>
                <h4 id="milk">1250L</h4>
                <p class="mb-0">Milk Production</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-card bg-white">
                <i class="fa fa-money-bill text-warning"></i>
                <h4 id="revenue">₱85,000</h4>
                <p class="mb-0">Revenue</p>
            </div>
        </div>

    </div>

    <!-- QUICK SUMMARY -->
    <div class="row g-4">

        <div class="col-md-6">
            <div class="card-box">
                <h5 class="mb-3">Recent Farmers</h5>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Dela Cruz</td>
                            <td>Chairman</td>
                            <td><span class="badge bg-success">Active</span></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box">
                <h5 class="mb-3">Quick Summary</h5>

                <div class="p-3 border rounded mb-3">
                    <strong>Pregnant Animals:</strong> <span id="pregnant">8</span>
                </div>

                <div class="p-3 border rounded mb-3">
                    <strong>Lactating Animals:</strong> <span id="lactating">10</span>
                </div>

                <div class="p-3 border rounded">
                    <strong>Dead Records:</strong> <span id="dead">2</span>
                </div>

            </div>
        </div>

    </div>

</div>

</div>
</div>

<script>
function changeYear(){
    let year = document.getElementById("yearSelect").value;
    document.getElementById("yearText").innerText = year;

    if(year == "2026"){
        document.getElementById("farmers").innerText = "120";
        document.getElementById("animals").innerText = "350";
        document.getElementById("milk").innerText = "1250L";
        document.getElementById("revenue").innerText = "₱85,000";
        document.getElementById("pregnant").innerText = "8";
        document.getElementById("lactating").innerText = "10";
        document.getElementById("dead").innerText = "2";
    }

    if(year == "2025"){
        document.getElementById("farmers").innerText = "95";
        document.getElementById("animals").innerText = "280";
        document.getElementById("milk").innerText = "980L";
        document.getElementById("revenue").innerText = "₱60,000";
        document.getElementById("pregnant").innerText = "6";
        document.getElementById("lactating").innerText = "7";
        document.getElementById("dead").innerText = "3";
    }

    if(year == "2024"){
        document.getElementById("farmers").innerText = "70";
        document.getElementById("animals").innerText = "200";
        document.getElementById("milk").innerText = "650L";
        document.getElementById("revenue").innerText = "₱40,000";
        document.getElementById("pregnant").innerText = "4";
        document.getElementById("lactating").innerText = "5";
        document.getElementById("dead").innerText = "1";
    }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>