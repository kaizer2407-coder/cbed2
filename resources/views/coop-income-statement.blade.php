<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Income Statement</title>

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
}

.menu a i{ margin-right:10px; }

.menu a:hover{
    background:rgba(255,255,255,.15);
    transform:translateX(5px);
}

.card-box{
    background:white;
    border-radius:18px;
    padding:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.page-title{
    font-weight:700;
    color:var(--navy);
}

.stat-card{
    border:none;
    border-radius:18px;
    padding:20px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
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

    <!-- TITLE + YEAR -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="page-title mb-0">
            Income Statement (<span id="yearText">2026</span>)
        </h3>

        <select class="form-select w-auto" id="yearSelect" onchange="changeYear()">
            <option value="2026">2026</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
        </select>

    </div>

    <!-- SUMMARY CARDS -->
    <div class="row g-4 mb-4">

        <div class="col-md-4">
            <div class="stat-card">
                <i class="fa fa-coins text-success"></i>
                <h4 id="income">₱120,000</h4>
                <p class="mb-0">Total Income</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <i class="fa fa-wallet text-danger"></i>
                <h4 id="expenses">₱45,000</h4>
                <p class="mb-0">Total Expenses</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <i class="fa fa-chart-line text-primary"></i>
                <h4 id="profit">₱75,000</h4>
                <p class="mb-0">Net Profit</p>
            </div>
        </div>

    </div>

    <!-- TABLE -->
    <div class="card-box">

        <h5 class="mb-3">Income Records</h5>

        <div class="table-responsive">
            <table class="table table-hover align-middle">

                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody id="incomeTable">

                    <tr>
                        <td>02-Jun-26</td>
                        <td>Milk Sales</td>
                        <td>Product</td>
                        <td>₱25,000</td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>

                    <tr>
                        <td>01-Jun-26</td>
                        <td>Carabao Sale</td>
                        <td>Livestock</td>
                        <td>₱40,000</td>
                        <td><span class="badge bg-success">Completed</span></td>
                    </tr>

                    <tr>
                        <td>30-May-26</td>
                        <td>Milk Sales</td>
                        <td>Product</td>
                        <td>₱15,000</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                    </tr>

                </tbody>

            </table>
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
        document.getElementById("income").innerText = "₱120,000";
        document.getElementById("expenses").innerText = "₱45,000";
        document.getElementById("profit").innerText = "₱75,000";
    }

    if(year == "2025"){
        document.getElementById("income").innerText = "₱90,000";
        document.getElementById("expenses").innerText = "₱35,000";
        document.getElementById("profit").innerText = "₱55,000";
    }

    if(year == "2024"){
        document.getElementById("income").innerText = "₱60,000";
        document.getElementById("expenses").innerText = "₱25,000";
        document.getElementById("profit").innerText = "₱35,000";
    }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>