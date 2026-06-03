<!DOCTYPE html>
<html>
<head>
<title>Coop Farmer List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="icon" href="{{ asset('images/pcclogo.jpg') }}" type="image/png">

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

.page-title{
    font-weight:700;
    color:var(--navy);
}

.table-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:15px;
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

<h3 class="mb-4 text-primary fw-bold">Farmer List</h3>

<div class="table-box">

<!-- SEARCH -->
<div class="table-header">
    <h5 class="mb-0">Farmers</h5>

    <div class="input-group" style="width:260px;">
        <span class="input-group-text"><i class="fa fa-search"></i></span>
        <input type="text" id="searchInput" class="form-control" placeholder="Search...">
    </div>
</div>

<div class="table-responsive">
<table class="table table-hover align-middle" id="farmerTable">

<thead class="table-light">
<tr>
    <th>ID</th>
    <th>Farmer</th>
    <th>Herd Code</th>
    <th>Location</th>
    <th>Status</th>
</tr>
</thead>

<tbody id="tableBody">

<tr>
    <td>1</td>
    <td><div class="fw-semibold">Juan Dela Cruz</div><small class="text-muted">Farmer</small></td>
    <td><span class="badge bg-primary">FRM-001</span></td>
    <td>Pampanga - San Fernando</td>
    <td><span class="badge bg-success">Active</span></td>
</tr>

<tr>
    <td>2</td>
    <td><div class="fw-semibold">Pedro Santos</div></td>
    <td><span class="badge bg-primary">FRM-002</span></td>
    <td>Bulacan - Baliwag</td>
    <td><span class="badge bg-success">Active</span></td>
</tr>

<tr>
    <td>3</td>
    <td>Maria Lopez</td>
    <td><span class="badge bg-primary">FRM-003</span></td>
    <td>Tarlac City</td>
    <td><span class="badge bg-warning text-dark">Inactive</span></td>
</tr>

<tr>
    <td>4</td>
    <td>Jose Reyes</td>
    <td><span class="badge bg-primary">FRM-004</span></td>
    <td>Nueva Ecija</td>
    <td><span class="badge bg-success">Active</span></td>
</tr>

<tr>
    <td>5</td>
    <td>Anna Cruz</td>
    <td><span class="badge bg-primary">FRM-005</span></td>
    <td>Pampanga</td>
    <td><span class="badge bg-success">Active</span></td>
</tr>

</tbody>

</table>
</div>

<!-- PAGINATION -->
<div class="d-flex justify-content-end mt-3">
    <nav>
        <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
    </nav>
</div>

</div>
</div>

</div>
</div>

<script>
const rowsPerPage = 3;
let currentPage = 1;

const tableBody = document.getElementById("tableBody");
const allRows = Array.from(tableBody.querySelectorAll("tr"));
const pagination = document.getElementById("pagination");

let filteredRows = [...allRows];

function displayTable() {
    tableBody.innerHTML = "";

    let start = (currentPage - 1) * rowsPerPage;
    let end = start + rowsPerPage;

    let pageRows = filteredRows.slice(start, end);

    pageRows.forEach(row => tableBody.appendChild(row));

    renderPagination();
}

function renderPagination() {
    pagination.innerHTML = "";

    let pageCount = Math.ceil(filteredRows.length / rowsPerPage);

    pagination.innerHTML += `
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">&lt;</a>
        </li>
    `;

    for (let i = 1; i <= pageCount; i++) {
        pagination.innerHTML += `
            <li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
            </li>
        `;
    }

    pagination.innerHTML += `
        <li class="page-item ${currentPage === pageCount ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">&gt;</a>
        </li>
    `;
}

function changePage(page) {
    let pageCount = Math.ceil(filteredRows.length / rowsPerPage);
    if (page < 1 || page > pageCount) return;

    currentPage = page;
    displayTable();
}

/* SEARCH */
document.getElementById("searchInput").addEventListener("keyup", function () {
    let value = this.value.toLowerCase();

    filteredRows = allRows.filter(row =>
        row.textContent.toLowerCase().includes(value)
    );

    currentPage = 1;
    displayTable();
});

/* INIT */
displayTable();
</script>

</body>
</html>