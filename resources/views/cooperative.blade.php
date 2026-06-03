<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cooperative Dashboard - CBED</title>

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

/* SIDEBAR */
.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--navy),var(--navy2));
    padding:30px 20px;
    color:white;
    position: relative;
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

/* CARDS */
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

/* TABLE */
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

.form-control, .form-select{
    border-radius:10px;
    padding:10px;
    margin-bottom:12px;
}

.form-label{
    font-weight:600;
    margin-bottom:6px;
    color:#083d6f;
}

.btn-navy{
    background: var(--navy);
    color: white;
    border: none;
}

.btn-navy:hover{
    background: var(--navy2);
    color: white;
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

<!-- MENU -->
        <div class="menu">
            <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
            <a href="{{ route('farmer') }}"><i class="fa fa-users"></i> Farmer</a>
            <a href="{{ route('cooperative') }}"><i class="fa fa-building"></i> Cooperative</a>
            <a href="{{ route('carabao') }}"><i class="fa fa-cow"></i> Carabao</a>
            <a href="{{ route('login.information') }}"><i class="fa fa-user-lock"></i></i> Login Information</a>
        </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <h3 class="page-title mb-4">Cooperative Dashboard</h3>

    <!-- CARDS (UNCHANGED) -->
    <div class="row g-4 mb-4">

        <div class="col-md-4">
            <div class="card stat-card p-4 text-center">
                <h3>{{ $totalCooperatives}}</h3>
                <p>Total Cooperatives</p>
            </div>
        </div>

    </div>

    <!-- REGION (UNCHANGED) -->
    <h5 class="mb-3">Region 3 - Cooperatives per Province</h5>

    <div class="card p-4 mb-4">
        <div class="row g-4">

            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Pampanga</h6><h4>{{ $pampangaCount ?? 0 }}</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bataan</h6><h4>{{ $bataanCount ?? 0 }}</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bulacan</h6><h4>{{ $bulacanCount ?? 0 }}</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Ecija</h6><h4>{{ $neCount ?? 0 }}</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Tarlac</h6><h4>{{ $tarlacCount ?? 0 }}</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Zambales</h6><h4>{{ $zambalesCount ?? 0 }}</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Aurora</h6><h4>{{ $aaCount ?? 0 }}</h4></div></div>
            <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Vizcaya</h6><h4>{{ $nvCount ?? 0 }}</h4></div></div>

        </div>
    </div>

<!-- TABLE -->
<div class="table-box">

    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">

        <h4 class="mb-0">Cooperative List</h4>

        <div class="d-flex align-items-center gap-2">

            <!-- ADD BUTTON -->
            <button class="btn btn-navy btn-sm"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addCoopOffcanvas">
                <i class="fa fa-plus me-1"></i>
                Add Cooperative
            </button>

            <!-- SEARCH -->
            <div class="d-flex align-items-center" style="width:280px;">
                <div class="input-group input-group-sm" style="width:280px; height:38px;">

                    <span class="input-group-text d-flex align-items-center justify-content-center"
                          style="width:38px; height:38px;">
                        <i class="fa fa-search"></i>
                    </span>

                    <input type="text"
                           id="searchInput"
                           class="form-control h-100"
                           placeholder="Search...">

                </div>
            </div>

        </div>

    </div>

    <table class="table table-hover align-middle" id="coopTable">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Herd Code</th>
                <th>Province</th>
                <th>Municipality</th>
                <th>Barangay</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($cooperatives as $coop)
                <tr>

                    <!-- REAL DATABASE ID -->
                    <td>{{ $coop->id }}</td>

                    <td>
                        <a href="#" class="text-primary text-decoration-none fw-semibold">
                            {{ $coop->cooperative_name }}
                        </a>
                    </td>

                    <td>{{ $coop->herd_code }}</td>
                    <td>{{ $coop->province }}</td>
                    <td>{{ $coop->city_municipality }}</td>
                    <td>{{ $coop->barangay }}</td>

                    <td>
                        <span class="badge bg-success">
                            {{ $coop->accreditation_status }}
                        </span>
                    </td>

                    <td>
                        <button class="btn btn-sm btn-primary">
                            <i class="fa fa-pen-to-square"></i>
                        </button>

                        <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center text-muted">
                        No cooperatives found
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>

    <!-- PAGINATION -->
    <div class="d-flex justify-content-end mt-3">
        <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
    </div>

</div>

<!-- ADD COOPERATIVE OFFCANVAS -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addCoopOffcanvas">

    <div class="offcanvas-header">

        <h5 class="offcanvas-title">Add Cooperative</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>

    </div>

    <div class="offcanvas-body">

        <form method="POST" action="{{ route('cooperative.store') }}">
@csrf

<div class="row">

    <div class="col-md-6 mb-3">
        <label>CDA Registration No.</label>
        <input type="text" name="cda_registration_no" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Herd Code</label>
        <input type="text" name="herd_code" class="form-control">
    </div>

</div>

<div class="mb-3">
    <label>Cooperative Name</label>
    <input type="text" name="cooperative_name" class="form-control">
</div>

<div class="row">

    <div class="col-md-6 mb-3">
        <label>Accreditation Status</label>
        <select name="accreditation_status" class="form-select">
            <option disabled selected>Select Status</option>
            <option>Accredited</option>
            <option>Not Accredited</option>
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label>Cooperative Type</label>
        <select name="cooperative_type" class="form-select">
            <option disabled selected>Select Type</option>
            <option>Credit</option>
            <option>Multipurpose</option>
            <option>Dairy</option>
        </select>
    </div>

</div>

<div class="row">

    <div class="col-md-6 mb-3">
        <label>Category</label>
        <select name="category" class="form-select">
            <option disabled selected>Select Category</option>
            <option>Primary</option>
            <option>Secondary</option>
            <option>Tertiary</option>
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label>Date Established</label>
        <input type="date" name="date_established" class="form-control">
    </div>

</div>

<div class="row">

    <div class="col-md-6 mb-3">
        <label>Region</label>
        <select name="region" class="form-select">
            <option disabled selected>Select Region</option>
            <option>Region 3</option>
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label>Province</label>
        <select name="province" class="form-select">
            <option disabled selected>Select Province</option>
            <option>Bataan</option>
            <option>Zambales</option>
            <option>Tarlac</option>
            <option>Pampanga</option>
            <option>Bulacan</option>
            <option>Nueva Ecija</option>
            <option>Aurora</option>
        </select>
    </div>

</div>

<div class="row">

    <div class="col-md-6 mb-3">
        <label>City/Municipality</label>
        <input type="text" name="city_municipality" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Barangay</label>
        <input type="text" name="barangay" class="form-control">
    </div>

</div>

<div class="mb-3">
    <label>Address Line</label>
    <input type="text" name="address_line" class="form-control">
</div>

<div class="mb-3">
    <label>Year</label>
    <input type="text" name="year" class="form-control">
</div>

<button type="submit" class="btn btn-navy w-100">
    Save Cooperative
</button>

</form>

    </div>
</div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script>
const rowsPerPage = 5;

const table = document.getElementById('coopTable');
const tbody = table.querySelector('tbody');

const rows = Array.from(tbody.querySelectorAll('tr'));

const pagination = document.getElementById('pagination');
const searchInput = document.getElementById('searchInput');

let filteredRows = [...rows];
let currentPage = 1;

function displayRows() {

    tbody.innerHTML = "";

    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    const paginatedRows = filteredRows.slice(start, end);

    if (paginatedRows.length === 0) {

        tbody.innerHTML = `
            <tr>
                <td colspan="9" class="text-center text-muted py-4">
                    No data found
                </td>
            </tr>
        `;

    } else {

        paginatedRows.forEach(row => {
            tbody.appendChild(row);
        });

    }

    renderPagination();
}

function renderPagination() {

    pagination.innerHTML = "";

    const totalPages = Math.ceil(filteredRows.length / rowsPerPage);

    if (totalPages <= 1) return;

    // PREVIOUS
    let prev = document.createElement('li');

    prev.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;

    prev.innerHTML = `
        <a class="page-link" href="#">&lt;</a>
    `;

    prev.addEventListener('click', function(e){

        e.preventDefault();

        if(currentPage > 1){
            currentPage--;
            displayRows();
        }

    });

    pagination.appendChild(prev);

    // PAGE NUMBERS
    for(let i = 1; i <= totalPages; i++){

        let li = document.createElement('li');

        li.className = `page-item ${currentPage === i ? 'active' : ''}`;

        li.innerHTML = `
            <a class="page-link" href="#">${i}</a>
        `;

        li.addEventListener('click', function(e){

            e.preventDefault();

            currentPage = i;

            displayRows();

        });

        pagination.appendChild(li);

    }

    // NEXT
    let next = document.createElement('li');

    next.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;

    next.innerHTML = `
        <a class="page-link" href="#">&gt;</a>
    `;

    next.addEventListener('click', function(e){

        e.preventDefault();

        if(currentPage < totalPages){
            currentPage++;
            displayRows();
        }

    });

    pagination.appendChild(next);
}

// SEARCH
searchInput.addEventListener('keyup', function(){

    const value = this.value.toLowerCase();

    filteredRows = rows.filter(row =>
        row.textContent.toLowerCase().includes(value)
    );

    currentPage = 1;

    displayRows();

});

// INITIAL LOAD
displayRows();
</script>

</body>
</html>