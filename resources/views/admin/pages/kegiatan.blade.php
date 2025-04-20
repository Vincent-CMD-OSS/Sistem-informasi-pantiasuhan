<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kegiatan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/kebutuhan.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    @include('admin.partials.asidebar', ['activeMenu' => 'kegiatan'])

    <!-- Main Content -->
    <div class="main-content">
        @include('admin.partials.topbar')
        
        <div class="content-container">
            <!-- Content Header -->
            <div class="content-header">
                <h2>Daftar Kegiatan</h2>
            </div>
            
            <!-- <div class="content-area">
                <p style="color: #999; text-align: center; padding-top: 180px;">
                    This area is left empty for your custom components
                </p>
            </div> -->

            <div class="content-area">
                <!-- <button id="btnShowForm" class="btn btn-success">Tambah Galeri</button> -->

                <!-- Daftar Kegiatan -->
                <div id="listKegiatan">
                    @include('admin.kegiatan.list')
                </div>

                <!-- Form Tambah Kegiatan -->
                <div id="formTambah" style="display: none;">
                    @include('admin.kegiatan.form')
                </div>

                <!-- Form Edit -->
                <div id="formEdit" style="display: none;">
                    <!-- {{-- Akan dimuat dengan AJAX --}} -->
                </div>

                <script>
                    document.getElementById("btnShowForm").addEventListener("click", function () {
                        document.getElementById("listKegiatan").style.display = "none";
                        document.getElementById("formEdit").style.display = "none";
                        document.getElementById("formTambah").style.display = "block";
                    });

                    function showEditForm(kegiatanId) {
                        fetch(`/admin/kegiatan/${kegiatanId}/edit`)
                            .then(response => response.text())
                            .then(html => {
                                document.getElementById("formEdit").innerHTML = html;
                                document.getElementById("formTambah").style.display = "none";
                                document.getElementById("listKegiatan").style.display = "none";
                                document.getElementById("formEdit").style.display = "block";
                            });
                    }

                    function backToList() {
                        document.getElementById("formTambah").style.display = "none";
                        document.getElementById("formEdit").style.display = "none";
                        document.getElementById("listKegiatan").style.display = "block";
                    }

                    // document.getElementById("btnBackToList").addEventListener("click", function () {
                    //     document.getElementById("formTambah").style.display = "none";
                    //     document.getElementById("formEdit").style.display = "none";
                    //     document.getElementById("listKegiatan").style.display = "block";
                    // });
                </script>

                <script>
                    function previewImage(input) {
                        const preview = document.getElementById('image-preview');
                        const fileNameDisplay = document.getElementById('file-name-display');
                        
                        if (input.files && input.files[0]) {
                            const reader = new FileReader();
                            
                            reader.onload = function(e) {
                                // Display file name
                                fileNameDisplay.textContent = input.files[0].name;
                                
                                // Show preview
                                preview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
                                
                                // Add to thumbnails
                                const thumbnailContainer = document.getElementById('thumbnail-container');
                                thumbnailContainer.innerHTML = `
                                    <div class="thumbnail-item">
                                        <img src="${e.target.result}" alt="Thumbnail">
                                        <span class="remove-thumbnail" onclick="removeThumbnail(this)">×</span>
                                    </div>
                                `;
                            }
                            
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    
                    function removeThumbnail(element) {
                        element.parentElement.remove();
                        document.getElementById('gambar_utama').value = '';
                        document.getElementById('file-name-display').textContent = '';
                        document.getElementById('image-preview').innerHTML = '';
                    }
                </script>

            </div>
        </div>
    </div>
</body>
</html>