<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Information - CBED</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="icon" href="{{ asset('images/pcclogo.jpg') }}" type="image/png">

<style>

:root{
    --navy:#083d6f;
    --navy-light:#0d4f8b;
    --white:#ffffff;
    --gray:#f4f7fb;
}

body{
    background: var(--gray);
    font-family: 'Segoe UI', sans-serif;
}

/* SIDEBAR */
.sidebar{
    min-height:100vh;
    background: linear-gradient(180deg,var(--navy),var(--navy-light));
    color:white;
    padding:30px 20px;
    position:relative;
}

/* TOP ACTIONS */
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

/* USER */
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

/* MENU */
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

.menu a:hover,
.menu a.active{
    background: rgba(255,255,255,.15);
    transform: translateX(5px);
}

/* TOPBAR */
.topbar{
    background:white;
    padding:20px 30px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

/* TABLE BOX */
.table-box{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

/* BUTTON */
.btn-navy{
    background:var(--navy);
    color:white;
    border:none;
}

.btn-navy:hover{
    background:var(--navy-light);
    color:white;
}

/* PAGINATION */
.page-item.active .page-link{
    background:var(--navy);
    border-color:var(--navy);
}

.page-link{
    color:var(--navy);
}

.table a{
    text-decoration:none;
    font-weight:600;
    color:var(--navy);
}

.table a:hover{
    text-decoration:underline;
}

</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

    <!-- SIDEBAR -->
    <div class="col-lg-2 sidebar">

        <!-- TOP ACTIONS -->
        <div class="top-actions">

            <a href="{{ route('login') }}" class="top-icon">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>

        </div>

        <!-- USER -->
        <div class="user-box">

            <i class="fa-solid fa-circle-user"></i>

            <h5>John Carlo</h5>

            <small>Administrator</small>

        </div>

        <!-- MENU -->
        <div class="menu">

            <a href="{{ route('dashboard') }}">
                <i class="fa fa-home"></i>
                Dashboard
            </a>

            <a href="{{ route('farmer') }}">
                <i class="fa fa-users"></i>
                Farmer
            </a>

            <a href="{{ route('cooperative') }}">
                <i class="fa fa-building"></i>
                Cooperative
            </a>

            <a href="{{ route('carabao') }}">
                <i class="fa fa-cow"></i>
                Carabao
            </a>

            <a href="{{ route('login.information') }}" class="active">
                <i class="fa fa-user-lock"></i>
                Login Information
            </a>

        </div>

    </div>

    <!-- CONTENT -->
    <div class="col-lg-10 p-4">

        <!-- TOPBAR -->
        <div class="topbar d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

            <div>

                <h3 class="mb-0">
                    Login Information
                </h3>

                <small class="text-muted">
                    Manage login accounts and system access
                </small>

            </div>

            <!-- ADD BUTTON -->
            <button class="btn btn-navy"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#addLoginOffcanvas">

                <i class="fa fa-plus me-1"></i>
                Add Account

            </button>

        </div>

        <!-- TABLE -->
        <div class="table-box">

            <!-- SEARCH -->
            <div class="d-flex justify-content-end mb-3">

                <div class="input-group input-group-sm"
                     style="width:280px;height:38px;">

                    <span class="input-group-text d-flex align-items-center justify-content-center"
                          style="width:38px;height:38px;">

                        <i class="fa fa-search"></i>

                    </span>

                    <input type="text"
                           id="searchInput"
                           class="form-control h-100"
                           placeholder="Search Account...">

                </div>

            </div>

            <!-- TABLE -->
            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th width="120">Action</th>
                        </tr>

                    </thead>

                    <tbody id="tableBody">

                        <tr>

                            <td>1</td>
                            <td>John Carlo</td>
                            <td>admin@gmail.com</td>
                            <td>Administrator</td>

                            <td>
                                <span class="badge bg-success">
                                    Active
                                </span>
                            </td>

                            <td>

                                <button class="btn btn-sm btn-primary"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#editLoginOffcanvas">

                                    <i class="fa fa-pen"></i>

                                </button>

                                <button class="btn btn-sm btn-danger delete-btn">

                                    <i class="fa fa-trash"></i>

                                </button>

                            </td>

                        </tr>

                        <tr>

                            <td>2</td>
                            <td>Maria Santos</td>
                            <td>staff@gmail.com</td>
                            <td>Staff</td>

                            <td>
                                <span class="badge bg-primary">
                                    Active
                                </span>
                            </td>

                            <td>

                                <button class="btn btn-sm btn-primary"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#editLoginOffcanvas">

                                    <i class="fa fa-pen"></i>

                                </button>

                                <button class="btn btn-sm btn-danger delete-btn">

                                    <i class="fa fa-trash"></i>

                                </button>

                            </td>

                        </tr>

                        <tr>

                            <td>3</td>
                            <td>Pedro Reyes</td>
                            <td>user@gmail.com</td>
                            <td>User</td>

                            <td>
                                <span class="badge bg-warning text-dark">
                                    Pending
                                </span>
                            </td>

                            <td>

                                <button class="btn btn-sm btn-primary"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#editLoginOffcanvas">

                                    <i class="fa fa-pen"></i>

                                </button>

                                <button class="btn btn-sm btn-danger delete-btn">

                                    <i class="fa fa-trash"></i>

                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <!-- PAGINATION -->
            <div class="d-flex justify-content-end mt-3">

                <ul class="pagination pagination-sm"
                    id="pagination">
                </ul>

            </div>

        </div>

    </div>

</div>
</div>

<!-- ADD OFFCANVAS -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="addLoginOffcanvas">

    <div class="offcanvas-header border-bottom">

        <h5 class="offcanvas-title">
            Add Account
        </h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>

    </div>

    <div class="offcanvas-body">

        <form>

            <div class="mb-3">

                <label class="form-label">
                    Full Name
                </label>

                <input type="text"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <input type="email"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Role
                </label>

                <select class="form-select">

                    <option>Administrator</option>
                    <option>Staff</option>
                    <option>User</option>

                </select>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Password
                </label>

                <input type="password"
                       class="form-control">

            </div>

            <button type="submit"
                    class="btn btn-navy w-100">

                <i class="fa fa-save me-1"></i>
                Save Account

            </button>

        </form>

    </div>

</div>

<!-- EDIT OFFCANVAS -->
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="editLoginOffcanvas">

    <div class="offcanvas-header border-bottom">

        <h5 class="offcanvas-title">
            Update Account
        </h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>

    </div>

    <div class="offcanvas-body">

        <form>

            <div class="mb-3">

                <label class="form-label">
                    Full Name
                </label>

                <input type="text"
                       class="form-control"
                       value="John Carlo">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <input type="email"
                       class="form-control"
                       value="admin@gmail.com">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Role
                </label>

                <select class="form-select">

                    <option selected>
                        Administrator
                    </option>

                    <option>Staff</option>
                    <option>User</option>

                </select>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Password
                </label>

                <input type="password"
                       class="form-control"
                       value="123456">

            </div>

            <button type="submit"
                    class="btn btn-primary w-100">

                <i class="fa fa-save me-1"></i>
                Update Account

            </button>

        </form>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script>

/* DELETE */
document.querySelectorAll('.delete-btn').forEach(button => {

    button.addEventListener('click', function () {

        if(confirm('Delete this account?')){

            this.closest('tr').remove();

        }

    });

});

/* SEARCH + PAGINATION */
const rowsPerPage = 5;
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

    if(pageRows.length === 0){

        tableBody.innerHTML = `
            <tr>
                <td colspan="6" class="text-center text-muted">
                    No data found
                </td>
            </tr>
        `;

    }else{

        pageRows.forEach(row => tableBody.appendChild(row));

    }

    renderPagination();
}

function renderPagination() {

    pagination.innerHTML = "";

    let pageCount = Math.ceil(filteredRows.length / rowsPerPage);

    if(pageCount <= 1) return;

    pagination.innerHTML += `
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">
                &laquo;
            </a>
        </li>
    `;

    for(let i = 1; i <= pageCount; i++){

        pagination.innerHTML += `
            <li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage(${i})">
                    ${i}
                </a>
            </li>
        `;
    }

    pagination.innerHTML += `
        <li class="page-item ${currentPage === pageCount ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">
                &raquo;
            </a>
        </li>
    `;
}

function changePage(page){

    let pageCount = Math.ceil(filteredRows.length / rowsPerPage);

    if(page < 1 || page > pageCount) return;

    currentPage = page;

    displayTable();
}

document.getElementById("searchInput")
.addEventListener("keyup", function(){

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