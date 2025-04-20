<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kebutuhan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/kebutuhan.css" rel="stylesheet">
    <link href="../assets/css/kebutuhanPanti.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    @include('admin.partials.asidebar', ['activeMenu' => 'kebutuhanPanti'])

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar with Breadcrumb and Search -->
        <div class="top-bar">
            <div class="breadcrumb">
                <a href="#" class="breadcrumb-item">Pages</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-item active">Kegiatan</span>
            </div>
            
            <div class="top-bar-actions">
                <input type="text" class="search-bar" placeholder="Type here...">
                <button class="action-btn">Online Builder</button>
                <button class="icon-btn">
                    <i class="fas fa-star"></i>
                </button>
                <button class="icon-btn">
                    <i class="fas fa-cog"></i>
                </button>
                <button class="icon-btn">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="icon-btn">
                    <i class="fas fa-user-circle"></i>
                </button>
            </div>
        </div>
        
        <div class="content-container">
            <!-- Content Header -->
            <div class="content-header">
                <h2>Daftar Kebutuhan</h2>
            </div>
            
            <!-- Content Area - Left Empty as Requested -->

            <div class="content-area">
                <button id="btnShowForm" class="btn btn-success mb-3">Tambah Kebutuhan</button>

                <!-- List -->
                <div id="listKebutuhan">
                    @include('admin.kebutuhan.index')
                </div>

                <!-- Form Tambah -->
                <div id="formTambah" style="display: none;">
                    @include('admin.kebutuhan.create')
                </div>

                <!-- Form Edit -->
                <div id="formEdit" style="display: none;">
                    <!-- AKAN DIMUAT OLEH AJAX -->
                </div>

                <!-- Form Edit (akan dimuat lewat AJAX) -->
                <div id="formEdit" style="display: none;"></div>

                <script>
                    document.getElementById("btnShowForm").addEventListener("click", function () {
                        document.getElementById("listKebutuhan").style.display = "none";
                        document.getElementById("formEdit").style.display = "none";
                        document.getElementById("formTambah").style.display = "block";
                    });

                    function showEditForm(id) {
                        fetch(`/admin/kebutuhan/${id}/edit`)
                            .then(res => res.text())
                            .then(html => {
                                document.getElementById("formEdit").innerHTML = html;
                                document.getElementById("formTambah").style.display = "none";
                                document.getElementById("listKebutuhan").style.display = "none";
                                document.getElementById("formEdit").style.display = "block";
                            });
                    }

                    function backToList() {
                        document.getElementById("formTambah").style.display = "none";
                        document.getElementById("formEdit").style.display = "none";
                        document.getElementById("listKebutuhan").style.display = "block";
                    }
                </script>

            </div>


        </div>
    </div>
</body>
</html>