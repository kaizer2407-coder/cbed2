<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carabao Dashboard - CBED</title>

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
            font-family:'Segoe UI',sans-serif;
        }

        .sidebar{
            min-height:100vh;
            background:linear-gradient(180deg,var(--navy),var(--navy2));
            padding:30px 20px;
            color:white;
            position: relative;
        }

        .logo{
            font-size:28px;
            font-weight:700;
            text-align:center;
            margin-bottom:40px;
        }

        .menu a{
            display:block;
            color:white;
            text-decoration:none;
            padding:15px 20px;
            border-radius:12px;
            margin-bottom:10px;
            transition:.3s;
            font-weight:500;
        }

        .menu a i{ margin-right:10px; }

        .menu a:hover{
            background:rgba(255,255,255,.15);
            transform:translateX(5px);
        }

        .card{
            border:none;
            border-radius:20px;
            box-shadow:0 8px 25px rgba(0,0,0,.08);
        }

        .stat-card{
            border:none;
            border-radius:18px;
            box-shadow:0 6px 20px rgba(0,0,0,.08);
        }

        .province-card{
            border:none;
            border-radius:18px;
            background:#fff;
            box-shadow:0 6px 18px rgba(0,0,0,.08);
            transition:.3s;
        }

        .province-card:hover{
            transform:translateY(-5px);
            background:var(--navy);
            color:white;
        }

        .table-box{
            background:white;
            border-radius:20px;
            padding:30px;
            box-shadow:0 8px 25px rgba(0,0,0,.08);
        }

        .page-title{
            font-weight:700;
            color:var(--navy);
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
            transition:.3s;
        }

        .top-icon:hover{
            color:#dbeafe;
            transform:scale(1.1);
        }

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
    </style>
</head>

<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->
<div class="col-lg-2 sidebar">

    <div class="top-actions">
        <a href="{{ route('login') }}" class="top-icon"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>

    <div class="user-box">
        <i class="fa-solid fa-circle-user"></i>
        <h5>John Carlo</h5>
        <small>Administrator</small>
    </div>

    <div class="menu">
        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
        <a href="{{ route('farmer') }}"><i class="fa fa-users"></i> Farmer</a>
        <a href="{{ route('cooperative') }}"><i class="fa fa-building"></i> Cooperative</a>
        <a href="{{ route('carabao') }}"><i class="fa fa-cow"></i> Carabao</a>
        <a href="#"><i class="fa fa-chart-line"></i> Reports</a>
    </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <h3 class="page-title mb-4">Carabao Dashboard</h3>

    <!-- CARDS -->
    <div class="row g-4 mb-4">

        <div class="col-md-4">
            <div class="card stat-card p-4 text-center">
                <h3>1,250</h3>
                <p>Total Carabaos</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stat-card p-4 text-center">
                <h3>980</h3>
                <p>Active Carabaos</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stat-card p-4 text-center">
                <h3>270</h3>
                <p>For Monitoring</p>
            </div>
        </div>

    </div>

    <!-- REGION -->
    <h5 class="mb-3">Region 3 - Carabao Population per Province</h5>

    <div class="card p-4 mb-4">
        <div class="row g-4">

            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Pampanga</h6><h4>320</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bataan</h6><h4>150</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bulacan</h6><h4>210</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Ecija</h6><h4>280</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Tarlac</h6><h4>120</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Zambales</h6><h4>95</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Angeles City</h6><h4>60</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Vizcaya</h6><h4>85</h4></div></div>

        </div>
    </div>

    <!-- TABLE -->
    <div class="table-box">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h4 class="mb-0">Carabao Records</h4>

            <!-- SEARCH -->
            <div class="input-group" style="width:280px;">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
                <input type="text" id="searchInput" class="form-control" placeholder="Search...">
            </div>

        </div>

        <table class="table table-hover" id="carabaoTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Province</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan Dela Cruz</td>
                    <td>Pampanga</td>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Maria Santos</td>
                    <td>Bulacan</td>
                    <td><span class="badge bg-warning text-dark">Monitoring</span></td>
                </tr>

                @for($i = 3; $i <= 15; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>Owner {{ $i }}</td>
                    <td>Pampanga</td>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>
                @endfor
            </tbody>
        </table>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-end mt-3">
            <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
        </div>

    </div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script>
const rowsPerPage = 10;

const table = document.getElementById("carabaoTable");
const tbody = table.querySelector("tbody");
const rows = Array.from(tbody.querySelectorAll("tr"));

const searchInput = document.getElementById("searchInput");
const pagination = document.getElementById("pagination");

let currentPage = 1;
let filteredRows = rows;

// SEARCH
searchInput.addEventListener("keyup", function () {
    const value = this.value.toLowerCase();

    filteredRows = rows.filter(row =>
        row.textContent.toLowerCase().includes(value)
    );

    currentPage = 1;
    renderTable();
});

// TABLE RENDER
function renderTable() {
    tbody.innerHTML = "";

    let start = (currentPage - 1) * rowsPerPage;
    let end = start + rowsPerPage;

    filteredRows.slice(start, end).forEach(row => tbody.appendChild(row));

    renderPagination();
}

// PAGINATION
function renderPagination() {
    pagination.innerHTML = "";

    let pageCount = Math.ceil(filteredRows.length / rowsPerPage);

    for (let i = 1; i <= pageCount; i++) {
        let li = document.createElement("li");
        li.className = "page-item" + (i === currentPage ? " active" : "");

        li.innerHTML = `<a class="page-link" href="#">${i}</a>`;

        li.addEventListener("click", (e) => {
            e.preventDefault();
            currentPage = i;
            renderTable();
        });

        pagination.appendChild(li);
    }
}

// INIT
renderTable();
</script>

</body>
</html>