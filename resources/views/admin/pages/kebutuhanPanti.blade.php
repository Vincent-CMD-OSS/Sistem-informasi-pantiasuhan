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
    @include('admin.partials.topbar')
        
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
                <div id="formEdit" style="display: none;">
                    <!-- AKAN DIMUAT DARI AJAX -->
                </div>

                <!-- Form Detail -->
                <div id="formDetail" style="display: none;">
                    <!-- AKAN DIMUAT DARI AJAX -->
                </div>


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

                    function showDetail(id) {
                        fetch(`/admin/kebutuhan/${id}`)
                            .then(res => res.text())
                            .then(html => {
                                document.getElementById("formDetail").innerHTML = html;
                                document.getElementById("formTambah").style.display = "none";
                                document.getElementById("formEdit").style.display = "none";
                                document.getElementById("listKebutuhan").style.display = "none";
                                document.getElementById("formDetail").style.display = "block";
                            });
                    }
                </script>

            </div>


        </div>
    </div>
</body>
</html>