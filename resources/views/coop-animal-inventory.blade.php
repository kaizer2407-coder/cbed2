<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coop Animal Inventory</title>

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
}

.menu a{
    display:block;
    color:white;
    text-decoration:none;
    padding:12px;
    border-radius:10px;
    margin-bottom:8px;
}

.menu a:hover{
    background:rgba(255,255,255,.15);
}

/* MAIN BOX */
.box{
    background:white;
    padding:25px;
    border-radius:18px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.page-title{
    font-weight:700;
    color:var(--navy);
}

/* BUTTON */
.btn-navy{
    background:var(--navy);
    color:white;
}
.btn-navy:hover{
    background:var(--navy2);
    color:white;
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->
<div class="col-lg-2 sidebar">

    <h5 class="mb-4">COOP PANEL</h5>

    <div class="menu">
        <a href="{{ route('coop.dashboard') }}"><i class="fa fa-home me-2"></i> Dashboard</a>
        <a href="{{ route('coop.farmers') }}"><i class="fa fa-users me-2"></i> Farmers</a>
        <a href="{{ route('coop.animals') }}"><i class="fa fa-cow me-2"></i> Animals</a>
    </div>

</div>

<!-- CONTENT -->
<div class="col-lg-10 p-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="page-title">Cooperative Animal Inventory</h3>

        <button class="btn btn-navy"
                data-bs-toggle="offcanvas"
                data-bs-target="#addAnimalOffcanvas">
            <i class="fa fa-plus me-1"></i> Add Animal
        </button>
    </div>

    <!-- TABLE -->
    <div class="box">

        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Carabao ID</th>
                    <th>Breed</th>
                    <th>Sex</th>
                    <th>Owner</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>5PAN23110</td>
                    <td>Murrah</td>
                    <td>Female</td>
                    <td>Juan Dela Cruz</td>
                    <td>Dolores</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary">
                            <i class="fa fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-warning">
                            <i class="fa fa-edit"></i>
                        </button>

                        <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div>

</div>
</div>

<!-- OFFCANVAS -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="addAnimalOffcanvas">

    <div class="offcanvas-header">
        <h5>Add Animal</h5>
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

        <label class="form-label">Carabao ID</label>
        <input class="form-control">

        <label class="form-label">Breed</label>
        <select class="form-select">
            <option>Murrah</option>
            <option>Native</option>
            <option>Crossbreed</option>
        </select>

        <label class="form-label">Sex</label>
        <select class="form-select">
            <option>Male</option>
            <option>Female</option>
        </select>

        <label class="form-label">Owner</label>
        <input class="form-control">

        <label class="form-label">Location</label>
        <input class="form-control">

        <label class="form-label">Status</label>
        <select class="form-select">
            <option>Active</option>
            <option>Sold</option>
            <option>Dead</option>
        </select>

        <button class="btn btn-navy w-100 mt-3">
            Save Animal
        </button>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>