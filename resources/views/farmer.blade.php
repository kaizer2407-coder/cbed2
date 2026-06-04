<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Farmer Dashboard - CBED</title>

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

.user-box i{font-size:75px;margin-bottom:10px;}
.user-box h5{font-weight:700;margin-bottom:5px;}
.user-box small{color:#dbeafe;}

.menu a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px 20px;
    border-radius:12px;
    margin-bottom:10px;
    transition:.3s;
}

.menu a i{margin-right:10px;}

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

.action-icons a{
    font-size:18px;
    transition:0.2s;
}

.action-icons a:hover{
    transform:scale(1.2);
}

.offcanvas-body{
    padding: 25px !important;
}

.form-control, .form-select{
    border-radius: 10px;
    padding: 10px 12px;
    margin-bottom: 12px;
}

.form-label{
    font-weight: 600;
    margin-top: 10px;
    margin-bottom: 6px;
    color: #083d6f;
}

.section-title{
    font-size: 12px;
    font-weight: 700;
    color: #6c757d;
    margin-top: 15px;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
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
    <a href="{{ route('login') }}" class="top-icon">
        <i class="fa-solid fa-right-from-bracket"></i>
    </a>
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
    <a href="{{ route('login.information') }}"><i class="fa fa-user-lock"></i> Login Information</a>
</div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

<h3 class="page-title mb-4">Farmer Dashboard</h3>

<!-- STATS -->
<div class="row g-4 mb-4">

    <div class="col-md-4">
        <div class="card stat-card p-4 text-center">
            <h3>1,250</h3>
            <p>Total Farmers</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card stat-card p-4 text-center">
            <h3>820</h3>
            <p>Active Farmers</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card stat-card p-4 text-center">
            <h3>430</h3>
            <p>Pending Farmers</p>
        </div>
    </div>

</div>

<!-- REGION CARDS -->
<h5 class="mb-3">Region 3 - Farmers per Province</h5>

<div class="card p-4 mb-4">
    <div class="row g-4">

        <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Pampanga</h6><h4>220</h4></div></div>
        <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bataan</h6><h4>140</h4></div></div>
        <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Bulacan</h6><h4>310</h4></div></div>
        <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Ecija</h6><h4>400</h4></div></div>
        <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Tarlac</h6><h4>180</h4></div></div>
        <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Zambales</h6><h4>120</h4></div></div>
        <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Angeles City</h6><h4>90</h4></div></div>
        <div class="col-md-3"><div class="province-card p-3 text-center"><h6>Nueva Vizcaya</h6><h4>150</h4></div></div>

    </div>
</div>

<!-- TABLE BOX -->
<div class="table-box">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
        <h4 class="mb-0">Farmer List</h4>

        <div class="d-flex align-items-center gap-2">

            <!-- ADD BUTTON -->
            <button class="btn btn-navy btn-sm"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addFarmerOffcanvas">
                <i class="fa fa-plus me-1"></i> Add Farmer
            </button>

            <!-- SEARCH -->
            <div class="input-group input-group-sm" style="width:280px; height:38px;">
                <span class="input-group-text d-flex align-items-center justify-content-center"
                    style="width:38px; height:38px;">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text"
                    id="searchInput"
                    class="form-control h-100"
                    placeholder="Search farmers..."
                    value="{{ request('search') }}">
            </div>

        </div>
    </div>

    <!-- TABLE -->
    <div class="table-responsive">
        <table id="farmerTable" class="table table-hover align-middle">

            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Farmer Name</th>
                    <th>Cooperative</th>
                    <th>Province</th>
                    <th>Municipality</th>
                    <th>Barangay</th>
                    <th>Position</th>
                    <th>Year</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($farmers as $farmer)
                    <tr>
                        <td>{{ $farmer->id }}</td>

                        <td>
                            {{ $farmer->first_name }} {{ $farmer->last_name }}
                        </td>

                        <td>
                            {{ $farmer->cooperative->cooperative_name ?? 'N/A' }}
                        </td>

                        <td>{{ $farmer->province }}</td>
                        <td>{{ $farmer->municipality }}</td>
                        <td>{{ $farmer->barangay }}</td>
                        <td>{{ $farmer->position }}</td>
                        <td>{{ $farmer->year }}</td>

                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>

                        <td class="text-center action-icons">
                            <a href="#" class="text-primary me-3">
                                <i class="fa fa-pen-to-square"></i>
                            </a>
                            <a href="#" class="text-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center text-muted py-4">
                            No farmers found
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

    <!-- PAGINATION -->
    <div class="d-flex justify-content-end mt-3">
        {{ $farmers->links('pagination::bootstrap-5') }}
        <ul class="pagination justify-content-end mt-3" id="pagination"></ul>
    </div>

</div>

</div>
</div>

<!-- OFFCANVAS -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="addFarmerOffcanvas">
    <div class="offcanvas-header">
        <h5>Add Farmer</h5>
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

    <form method="POST" action="{{ route('farmers.store') }}">
    @csrf

    <!-- NAME -->
    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-6">
            <label class="form-label">Middle Name</label>
            <input type="text" name="middle_name" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Birthday</label>
            <input type="date" name="birthday" class="form-control">
        </div>
    </div>

    <!-- CONTACT -->
    <div class="row mt-2">
        <div class="col-md-6">
            <label class="form-label">Contact Number</label>
            <input type="text" name="contact_number" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Civil Status</label>
            <select name="civil_status" class="form-select">
                <option value="">Select Status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widow/Widower">Widow/Widower</option>
                <option value="Separated">Separated</option>
            </select>
        </div>
    </div>

    <!-- ADDRESS -->
    <div class="row mt-2">

        <!-- REGION -->
        <div class="col-md-6">
            <label class="form-label">Region</label>

            <select name="region" class="form-select">
                <option value="">Select Region</option>
                <option value="Region 3">Region 3</option>
            </select>
        </div>

        <!-- PROVINCE -->
        <div class="col-md-6">
            <label class="form-label">Province</label>

            <select name="province" class="form-select">
                <option value="">Select Province</option>

                <option value="Bataan">Bataan</option>
                <option value="Zambales">Zambales</option>
                <option value="Tarlac">Tarlac</option>
                <option value="Pampanga">Pampanga</option>
                <option value="Bulacan">Bulacan</option>
                <option value="Nueva Ecija">Nueva Ecija</option>
                <option value="Aurora">Aurora</option>
                <option value="Nueva Vizcaya">Nueva Vizcaya</option>
            </select>
        </div>

    </div>

    <!-- CITY / MUNICIPALITY -->
    <div class="row mt-2">

        <div class="col-md-6">
            <label class="form-label">City / Municipality</label>
            <input type="text" name="municipality" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Barangay</label>
            <input type="text" name="barangay" class="form-control">
        </div>

    </div>

    <!-- COOPERATIVE -->
    <div class="row mt-2">

        <div class="col-md-12">
            <label class="form-label">Cooperative</label>

            <select name="cooperative_id" class="form-select">
                <option value="">Select Cooperative</option>

                @forelse($cooperatives ?? [] as $coop)
                    <option value="{{ $coop->id }}">
                        {{ $coop->cooperative_name }}
                    </option>
                @empty
                    <option disabled>No cooperative found</option>
                @endforelse

            </select>
        </div>

    </div>

    <!-- POSITION / WORK -->
    <div class="row mt-2">

        <div class="col-md-6">
            <label class="form-label">Position</label>
            <input type="text" name="position" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Work</label>
            <input type="text" name="work" class="form-control">
        </div>

    </div>

    <!-- SPOUSE -->
    <div class="row mt-2">

        <div class="col-md-6">
            <label class="form-label">Spouse</label>
            <input type="text" name="spouse" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Spouse Occupation</label>
            <input type="text" name="spouse_occupation" class="form-control">
        </div>

    </div>

    <!-- YEAR -->
    <div class="row mt-2">

        <div class="col-md-12">
            <label class="form-label">Year</label>
            <input type="text" name="year" class="form-control">
        </div>

    </div>

    <!-- BUTTON -->
    <button type="submit" class="btn btn-navy w-100 mt-3">
        Save Farmer
    </button>

    </form>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script>

document.addEventListener("DOMContentLoaded", function () {

    const rowsPerPage = 10;

    const table = document.getElementById('farmerTable');
    const tbody = table.querySelector('tbody');
    const pagination = document.getElementById('pagination');
    const searchInput = document.getElementById('searchInput');

    let allRows = Array.from(tbody.querySelectorAll('tr'));
    let filteredRows = [...allRows];
    let currentPage = 1;

    // GET CELL TEXT SAFE
    function getCellText(row, index) {
        return (row.cells[index]?.textContent || "").toLowerCase();
    }

    function displayRows() {

        tbody.innerHTML = "";

        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        const paginatedRows = filteredRows.slice(start, end);

        if (paginatedRows.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="10" class="text-center text-muted py-4">
                        No data found
                    </td>
                </tr>
            `;
        } else {
            paginatedRows.forEach(row => tbody.appendChild(row));
        }

        renderPagination();
    }

    function renderPagination() {

        pagination.innerHTML = "";

        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);

        if (totalPages <= 1) return;

        // PREV
        let prev = document.createElement('li');
        prev.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
        prev.innerHTML = `<a class="page-link" href="#">&lt;</a>`;

        prev.onclick = (e) => {
            e.preventDefault();
            if (currentPage > 1) {
                currentPage--;
                displayRows();
            }
        };

        pagination.appendChild(prev);

        // NUMBERS
        for (let i = 1; i <= totalPages; i++) {

            let li = document.createElement('li');
            li.className = `page-item ${currentPage === i ? 'active' : ''}`;
            li.innerHTML = `<a class="page-link" href="#">${i}</a>`;

            li.onclick = (e) => {
                e.preventDefault();
                currentPage = i;
                displayRows();
            };

            pagination.appendChild(li);
        }

        // NEXT
        let next = document.createElement('li');
        next.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
        next.innerHTML = `<a class="page-link" href="#">&gt;</a>`;

        next.onclick = (e) => {
            e.preventDefault();
            if (currentPage < totalPages) {
                currentPage++;
                displayRows();
            }
        };

        pagination.appendChild(next);
    }

    // 🔥 REAL SEARCH (ALL COLUMNS FIXED)
    searchInput.addEventListener('input', function () {

        const value = this.value.toLowerCase().trim();

        filteredRows = allRows.filter(row => {

            return (
                getCellText(row, 1).includes(value) || // name
                getCellText(row, 2).includes(value) || // coop
                getCellText(row, 3).includes(value) || // province
                getCellText(row, 4).includes(value) || // municipality
                getCellText(row, 5).includes(value) || // barangay
                getCellText(row, 6).includes(value) || // position
                getCellText(row, 7).includes(value)    // year
            );

        });

        currentPage = 1;
        displayRows();
    });

    displayRows();

});

</script>

</body>
</html>