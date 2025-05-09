<!-- JADWAL KUNJUNGAN STYLE -->
<style>
  /* Import fonts only once */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
  
  /* Properly scoped styles for jadwal-kunjungan section only */
  section#jadwal-kunjungan {
    font-family: 'Poppins', sans-serif;
    color: #333;
    line-height: 1.6;
    padding: 50px 0;
    position: relative;
    overflow: hidden;
    height: 100vh;
    max-height: 100vh;
    box-sizing: border-box;
  }
  
  section#jadwal-kunjungan::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 40%;
    background-color: #e8f6ff;
    border-radius: 0 0 0 100px;
    z-index: -1;
  }
  
  section#jadwal-kunjungan .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  section#jadwal-kunjungan .row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 40px;
  }
  
  section#jadwal-kunjungan .jadwal-content {
    flex: 1;
    min-width: 300px;
  }
  
  section#jadwal-kunjungan .subtitle {
    display: inline-block;
    color: #4a6bff;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    position: relative;
    margin-bottom: 10px;
    padding-left: 45px;
  }
  
  section#jadwal-kunjungan .subtitle::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 35px;
    height: 2px;
    background-color: #4a6bff;
  }
  
  section#jadwal-kunjungan .jadwal-title {
    font-size: 32px;
    font-weight: 700;
    color: #112b4a;
    margin-bottom: 15px;
    line-height: 1.2;
  }
  
  section#jadwal-kunjungan .lead {
    font-size: 16px;
    color: #546e7a;
    margin-bottom: 25px;
  }
  
  section#jadwal-kunjungan .jadwal-items {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    max-height: calc(100vh - 250px);
    overflow-y: auto;
    padding-right: 5px;
  }
  
  section#jadwal-kunjungan .jadwal-item {
    display: flex;
    align-items: flex-start;
    background-color: white;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }
  
  section#jadwal-kunjungan .jadwal-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  }
  
  section#jadwal-kunjungan .icon-box {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    flex-shrink: 0;
  }
  
  section#jadwal-kunjungan .icon-box i {
    font-size: 20px;
    color: white;
  }
  
  section#jadwal-kunjungan .yellow-bg {
    background: linear-gradient(135deg, #ffca28, #ff9800);
  }
  
  section#jadwal-kunjungan .orange-bg {
    background: linear-gradient(135deg, #ff7043, #f4511e);
  }
  
  section#jadwal-kunjungan .black-bg {
    background: linear-gradient(135deg, #546e7a, #37474f);
  }
  
  section#jadwal-kunjungan .green-bg {
    background: linear-gradient(135deg, #66bb6a, #43a047);
  }
  
  section#jadwal-kunjungan .blue-bg {
    background: linear-gradient(135deg, #42a5f5, #1976d2);
  }
  
  section#jadwal-kunjungan .jadwal-text h4 {
    font-size: 18px;
    font-weight: 600;
    color: #112b4a;
    margin-bottom: 8px;
  }
  
  section#jadwal-kunjungan .jadwal-text p {
    font-size: 14px;
    color: #546e7a;
    margin-bottom: 10px;
  }
  
  section#jadwal-kunjungan .contact-icons {
    display: flex;
    list-style: none;
    gap: 12px;
    margin-top: 10px;
    padding-left: 0;
  }
  
  section#jadwal-kunjungan .contact-icons li a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background-color: #f5f8ff;
    transition: all 0.3s ease;
  }
  
  section#jadwal-kunjungan .contact-icons li a:hover {
    background-color: #e8f0fe;
    transform: translateY(-3px);
  }
  
  section#jadwal-kunjungan .contact-icons li a img {
    width: 20px;
    height: 20px;
    object-fit: contain;
  }
  
  section#jadwal-kunjungan .jadwal-image-container {
    flex: 1;
    min-width: 300px;
    position: relative;
  }
  
  section#jadwal-kunjungan .jadwal-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
  }
  
  section#jadwal-kunjungan .jadwal-image {
    width: 100%;
    height: 380px;
    object-fit: cover;
    transition: transform 0.7s ease;
  }
  
  section#jadwal-kunjungan .jadwal-image-wrapper:hover .jadwal-image {
    transform: scale(1.05);
  }
  
  section#jadwal-kunjungan .jadwal-image-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 30px 20px;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
    text-align: center;
  }
  
  section#jadwal-kunjungan .jadwal-image-caption h3 {
    color: white;
    font-size: 24px;
    font-weight: 600;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    margin: 0;
  }
  
  section#jadwal-kunjungan .btn-wrap {
    margin-top: 30px;
    text-align: center;
  }
  
  section#jadwal-kunjungan .btn-donasi {
    display: inline-flex;
    align-items: center;
    padding: 14px 32px;
    background: linear-gradient(135deg, #4a6bff, #2a4df5);
    color: white;
    font-size: 16px;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 10px 20px rgba(74, 107, 255, 0.3);
    transition: all 0.3s ease;
  }
  
  section#jadwal-kunjungan .btn-donasi:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px rgba(74, 107, 255, 0.4);
  }
  
  section#jadwal-kunjungan .btn-donasi i {
    margin-left: 8px;
    transition: transform 0.3s ease;
  }
  
  section#jadwal-kunjungan .btn-donasi:hover i {
    transform: translateX(5px);
  }
  
  /* Font Icons for jadwal-kunjungan only */
  section#jadwal-kunjungan .icon {
    display: inline-block;
    width: 24px;
    height: 24px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
  }
  
  section#jadwal-kunjungan .icon-calendar {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M9 10H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z'/%3E%3C/svg%3E");
  }
  
  section#jadwal-kunjungan .icon-clock {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z'/%3E%3C/svg%3E");
  }
  
  section#jadwal-kunjungan .icon-users {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z'/%3E%3C/svg%3E");
  }
  
  section#jadwal-kunjungan .icon-info {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z'/%3E%3C/svg%3E");
  }
  
  section#jadwal-kunjungan .icon-location {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z'/%3E%3C/svg%3E");
  }
  
  section#jadwal-kunjungan .icon-arrow-right {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z'/%3E%3C/svg%3E");
    width: 16px;
    height: 16px;
  }
  
  /* Responsive styles for jadwal-kunjungan only */
  @media screen and (max-width: 992px) {
    section#jadwal-kunjungan .row {
      flex-direction: column;
    }
    
    section#jadwal-kunjungan::before {
      width: 100%;
      height: 40%;
    }
    
    section#jadwal-kunjungan {
      height: auto;
      max-height: none;
      padding: 50px 0;
    }
    
    section#jadwal-kunjungan .jadwal-items {
      max-height: none;
      overflow-y: visible;
    }
  }
  
  @media screen and (max-width: 768px) {
    section#jadwal-kunjungan .jadwal-title {
      font-size: 28px;
    }
    
    section#jadwal-kunjungan {
      padding: 40px 0;
    }
    
    section#jadwal-kunjungan .jadwal-image {
      height: 320px;
    }
  }
  
  @media screen and (max-width: 576px) {
    section#jadwal-kunjungan .jadwal-item {
      padding: 12px;
    }
    
    section#jadwal-kunjungan .icon-box {
      width: 36px;
      height: 36px;
    }
    
    section#jadwal-kunjungan .jadwal-title {
      font-size: 24px;
    }
    
    section#jadwal-kunjungan .jadwal-text h4 {
      font-size: 16px;
    }
    
    section#jadwal-kunjungan .jadwal-text p {
      font-size: 13px;
    }
  }
</style>
<!-- END JADWAL KUNJUNGAN STYLE -->

<!-- BAGIAN JADWAL KUNJUNGAN -->
<section id="jadwal-kunjungan" class="scrollspy-section jadwal-section">
  <div class="container">
    <div class="jadwal-wrapper">
      <div class="row">
        <div class="jadwal-content">
          <div class="jadwal-header">
            <span class="subtitle">Tumbuh Dengan Harapan</span>
            <h2 class="jadwal-title">Jadwal Kunjungan Panti</h2>
            <p class="lead">Silakan jadwalkan kunjungan Anda ke Panti Asuhan Rumah Harapan dengan mengikuti informasi di bawah ini.</p>
          </div>

          <div class="jadwal-items">
            <div class="jadwal-item">
              <div class="icon-box yellow-bg">
                <i class="icon icon-calendar"></i>
              </div>
              <div class="jadwal-text">
                <h4>Hari Kunjungan</h4>
                <p>Senin - Sabtu</p>
              </div>
            </div>

            <div class="jadwal-item">
              <div class="icon-box orange-bg">
                <i class="icon icon-clock"></i>
              </div>
              <div class="jadwal-text">
                <h4>Jam Kunjungan</h4>
                <p>10.00 - 12.00 WIB<br>14.00 - 17.00 WIB</p>
              </div>
            </div>

            <div class="jadwal-item">
              <div class="icon-box black-bg">
                <i class="icon icon-users"></i>
              </div>
              <div class="jadwal-text">
                <h4>Reservasi</h4>
                <p>Kunjungan wajib reservasi minimal 4 hari sebelumnya melalui:</p>
                
                <ul class="contact-icons">
                  <li>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Yayasanrumahharapan2008@gmail.com" target="_blank" title="Email ke Admin">
                      <img src="assets/images/gmail.jpg" alt="Gmail" />
                    </a>
                  </li>
                  <li>
                    <a href="https://wa.me/6281265455903" target="_blank" title="Chat Admin di WhatsApp">
                      <img src="assets/images/whatsapp.jpg" alt="WhatsApp" />
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="jadwal-item">
              <div class="icon-box green-bg">
                <i class="icon icon-info"></i>
              </div>
              <div class="jadwal-text">
                <h4>Ketentuan Kunjungan</h4>
                <p>- Maks. 10 orang per kunjungan<br>- Bawa identitas diri<br>- Patuhi protokol kesehatan</p>
              </div>
            </div>

            <div class="jadwal-item">
              <div class="icon-box blue-bg">
                <i class="icon icon-location"></i>
              </div>
              <div class="jadwal-text">
                <h4>Lokasi</h4>
                <p>Jl. Harapan Baru No.123, Kel. Sukamaju, Kec. Sejahtera,<br>Kota Bahagia, 12345</p>
              </div>
            </div>
          </div>
        </div>

        <div class="jadwal-image-container">
          <div class="jadwal-image-wrapper">
            <img src="assets/images/pp.jpg" alt="Jadwal Kunjungan Panti Asuhan Rumah Harapan" class="jadwal-image">
            <div class="jadwal-image-caption">
              <h3>Selamat Datang di Rumah Harapan</h3>
            </div>
          </div>
          <div class="btn-wrap">
            <a href="operasional" class="btn-donasi">Selengkapnya <i class="icon icon-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- AKHIR BAGIAN JADWAL KUNJUNGAN -->