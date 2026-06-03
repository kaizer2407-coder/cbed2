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
    text-decoration:none;
    transition:.3s;
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

/* SEARCH */
.table-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:15px;
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
        <a href="{{ route('coop.profile') }}"><i class="fa fa-user"></i> Profile</a>
        <a href="{{ route('coop.list.farmer') }}"><i class="fa fa-users"></i> Farmer</a>
        <a href="{{ route('coop.animal.inventory') }}"><i class="fa fa-cow"></i> Animal Inventory</a>
        <a href="{{ route('coop.income.statement') }}"><i class="fa-solid fa-money-bill-wave"></i> Income Statement</a>
        <a href="{{ route('coop.balance.sheet') }}"><i class="fa-solid fa-scale-balanced"></i> Balance Sheet</a>
    </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="page-title">Animal Inventory</h3>
    </div>

    <div class="table-box">

        <!-- SEARCH -->
        <div class="table-header">
            <h5 class="mb-0">List of Animals</h5>

            <div class="input-group" style="width:260px;">
                <span class="input-group-text">
                    <i class="fa fa-search"></i>
                </span>
                <input type="text" id="searchInput" class="form-control" placeholder="Search...">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle" id="animalTable">

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

                <tbody id="tableBody">

                    <!-- SAMPLE DATA (ADDED MORE ROWS) -->
                    <tr>
                        <td>1</td>
                        <td><div class="fw-semibold">5PAN23110</div><small class="text-muted">Bolus: 123445678</small></td>
                        <td>Murrah</td>
                        <td><span class="badge bg-info text-dark">Female</span></td>
                        <td>01-Jan-2026</td>
                        <td><span class="badge bg-secondary">Heifer</span></td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="action-icons"><a href="#" class="text-primary"><i class="fa fa-pen-to-square"></i></a><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><div class="fw-semibold">5PAN23111</div><small class="text-muted">Bolus: 111222333</small></td>
                        <td>Native</td>
                        <td><span class="badge bg-info text-dark">Male</span></td>
                        <td>10-Feb-2026</td>
                        <td><span class="badge bg-secondary">Bull</span></td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="action-icons"><a href="#" class="text-primary"><i class="fa fa-pen-to-square"></i></a><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>5PAN23112</td>
                        <td>Murrah</td>
                        <td><span class="badge bg-info text-dark">Female</span></td>
                        <td>12-Mar-2026</td>
                        <td>Heifer</td>
                        <td><span class="badge bg-warning text-dark">Monitoring</span></td>
                        <td class="action-icons"><a href="#" class="text-primary"><i class="fa fa-pen-to-square"></i></a><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>5PAN23113</td>
                        <td>Crossbreed</td>
                        <td>Male</td>
                        <td>05-Apr-2026</td>
                        <td>Calf</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="action-icons"><a href="#" class="text-primary"><i class="fa fa-pen-to-square"></i></a><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>5PAN23114</td>
                        <td>Native</td>
                        <td>Female</td>
                        <td>20-May-2026</td>
                        <td>Heifer</td>
                        <td><span class="badge bg-danger">Inactive</span></td>
                        <td class="action-icons"><a href="#" class="text-primary"><i class="fa fa-pen-to-square"></i></a><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- PAGINATION (BOTTOM RIGHT) -->
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
const rowsPerPage = 10;
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

    // PREVIOUS
    pagination.innerHTML += `
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">&lt;</a>
        </li>
    `;

    // NUMBERS
    for (let i = 1; i <= pageCount; i++) {
        pagination.innerHTML += `
            <li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
            </li>
        `;
    }

    // NEXT
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>