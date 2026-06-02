<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Farmer Statistics - CBED</title>

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
}

/* MAIN */
.page-title{
    font-weight:700;
    color:var(--navy);
}

.card-box{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.stat-card{
    border:none;
    border-radius:18px;
    box-shadow:0 6px 20px rgba(0,0,0,.08);
}

/* CHART */
.chart-container{
    height:350px;
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

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="page-title">Farmer Statistics</h3>
    </div>

    <!-- STATS -->
    <div class="row g-4 mb-4">

        <div class="col-md-4">
            <div class="card stat-card p-4 text-center">
                <i class="fa-solid fa-glass-water fa-2x text-primary mb-2"></i>
                <h3>3,250L</h3>
                <p>Total Milk</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stat-card p-4 text-center">
                <i class="fa-solid fa-cow fa-2x text-success mb-2"></i>
                <h3>25</h3>
                <p>Carabaos</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stat-card p-4 text-center">
                <i class="fa-solid fa-money-bill-wave fa-2x text-warning mb-2"></i>
                <h3>₱150,000</h3>
                <p>Income</p>
            </div>
        </div>

    </div>

    <!-- CHARTS -->
    <div class="row g-4">

        <!-- MILK -->
        <div class="col-lg-8">
            <div class="card-box">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="mb-0">Milk Production Per Month</h5>
                        <small class="text-muted">Yearly Analytics</small>
                    </div>

                    <select class="form-select w-auto" id="yearSelect">
                        <option value="2026" selected>2026</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                    </select>
                </div>

                <div class="chart-container">
                    <canvas id="milkChart"></canvas>
                </div>

            </div>
        </div>

        <!-- PREGNANT -->
        <div class="col-lg-4">
            <div class="card-box">

                <h5 class="mb-3">Pregnant Carabaos</h5>
                <small class="text-muted">Status Overview</small>

                <div class="chart-container mt-3">
                    <canvas id="pregnantChart"></canvas>
                </div>

            </div>
        </div>

    </div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const dataByYear = {
    2026: {
        milk: [120,150,180,170,210,240,230,250,270,260,300,320],
        pregnant: [18,5,2]
    },
    2025: {
        milk: [90,110,130,140,160,180,170,190,200,210,220,240],
        pregnant: [15,7,3]
    },
    2024: {
        milk: [60,80,90,100,120,140,150,160,170,180,190,200],
        pregnant: [10,6,4]
    }
};

/* MILK CHART */
const milkChart = new Chart(document.getElementById('milkChart'), {
    type: 'bar',
    data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        datasets: [{
            label: 'Milk (Liters)',
            data: dataByYear[2026].milk,
            backgroundColor: '#083d6f',
            borderRadius: 8
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

/* PREGNANT CHART */
const pregnantChart = new Chart(document.getElementById('pregnantChart'), {
    type: 'doughnut',
    data: {
        labels: ['Healthy','Monitoring','Critical'],
        datasets: [{
            data: dataByYear[2026].pregnant,
            backgroundColor: ['#198754','#ffc107','#dc3545']
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { position: 'bottom' }
        }
    }
});

/* YEAR CHANGE EVENT */
document.getElementById('yearSelect').addEventListener('change', function () {

    const year = this.value;

    milkChart.data.datasets[0].data = dataByYear[year].milk;
    milkChart.update();

    pregnantChart.data.datasets[0].data = dataByYear[year].pregnant;
    pregnantChart.update();

});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>