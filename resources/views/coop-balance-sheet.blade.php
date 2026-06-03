<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Balance Sheet</title>

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

.page-title{
    font-weight:700;
    color:var(--navy);
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
        <a href="{{ route('coop.profile') }}"><i class="fa fa-user"></i> Profile</a>
        <a href="{{ route('coop.list.farmer') }}"><i class="fa fa-users"></i> Farmer</a>
        <a href="{{ route('coop.animal.inventory') }}"><i class="fa fa-cow"></i> Animal Inventory</a>
        <a href="{{ route('coop.income.statement') }}"><i class="fa-solid fa-money-bill-wave"></i> Income Statement</a>
        <a href="{{ route('coop.balance.sheet') }}"><i class="fa-solid fa-scale-balanced"></i> Balance Sheet</a>
    </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <h3 class="page-title mb-4">Balance Sheet</h3>

    <!-- SUMMARY -->
    <div class="row g-4 mb-4">

        <div class="col-md-4">
            <div class="stat-card">
                <i class="fa fa-building text-primary"></i>
                <h4>₱200,000</h4>
                <p class="mb-0">Total Assets</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <i class="fa fa-credit-card text-danger"></i>
                <h4>₱80,000</h4>
                <p class="mb-0">Liabilities</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <i class="fa fa-scale-balanced text-success"></i>
                <h4>₱120,000</h4>
                <p class="mb-0">Equity</p>
            </div>
        </div>

    </div>

    <!-- TABLES -->
    <div class="row g-4">

        <!-- ASSETS -->
        <div class="col-md-4">
            <div class="card-box">
                <h5 class="mb-3 text-primary">Assets</h5>

                <table class="table table-sm">
                    <tr>
                        <td>Cash</td>
                        <td>₱50,000</td>
                    </tr>
                    <tr>
                        <td>Milk Inventory</td>
                        <td>₱30,000</td>
                    </tr>
                    <tr>
                        <td>Livestock</td>
                        <td>₱120,000</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- LIABILITIES -->
        <div class="col-md-4">
            <div class="card-box">
                <h5 class="mb-3 text-danger">Liabilities</h5>

                <table class="table table-sm">
                    <tr>
                        <td>Loans Payable</td>
                        <td>₱50,000</td>
                    </tr>
                    <tr>
                        <td>Accounts Payable</td>
                        <td>₱30,000</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- EQUITY -->
        <div class="col-md-4">
            <div class="card-box">
                <h5 class="mb-3 text-success">Equity</h5>

                <table class="table table-sm">
                    <tr>
                        <td>Capital</td>
                        <td>₱100,000</td>
                    </tr>
                    <tr>
                        <td>Retained Earnings</td>
                        <td>₱20,000</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

</div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>