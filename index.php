?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="gambar" href="gambar/logo.jpg" sizes="16x16" />
    <title>Ngoding di Jadikoding | Platform Kursus Online</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Jadikoding</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Product</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a id="loginLink" href="login.html" class="tbl-pink">Masuk</a></li>
                    <li id="registerListItem"><a id="registerLink" href="register.html" class="tbl-biru">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- HOME -->
        <section id="home">
            <img src="gambar/gambar2.jpg"/>
            <div class="kolom">
                <p class="deskripsi">Belajar Programming #dirumahaja</p>
                <h2>Tetap Sehat, Tetap Semangat</h2>
                <p>Persiapkan dirimu dari sekarang. Dimulai dari belajar skill yang dibutuhkan oleh startup dan industri saat ini. Yuk, tingkatkan skillmu sekarang juga.</p>
                <p><a href="belajar.html" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- COURSES -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Kenapa Kamu Harus Upgrade Skill  Digital Sekarang?</p>
                <h2>Ayo Upgrade !!</h2>
                <p>Pada tahun 2030, diperkirakan akan ada kekurangan sebanyak 9 juta tenaga ahli di bidang digital, yang berpotensi menimbulkan masalah serius. Selain itu, riset yang dilakukan oleh McKinsey & Company menunjukkan bahwa dalam kurun waktu 10 tahun ke depan, Indonesia berpotensi kehilangan 23 juta lapangan pekerjaan akibat dampak disrupsi teknologi.</p>
                <p>Kondisi ini memunculkan pertanyaan penting: Apakah kita sudah siap untuk menghadapi tantangan ini agar dapat bertahan di era digital yang semakin berkembang? Jika kamu tidak upgrade skill digitalmu dari sekarang, kapan lagi?</p>
                <p><a href="belajar.html" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="gambar/gambar4.jpg"/>
        </section>

        <!-- INSTRUKTUR -->
        <section id="Intruktur">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Instructor</p>
                    <h2>Instructor</h2>
                    <p>Beberapa Instruktur Berpengalaman yang bekerja di Jadikoding</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="gambar/jakwan.jpg"/>
                        <h3>Dzakwan</h3>
                        <h4>NPM.234311019</h4>
                    </div>
                    <div class="kartu-tutor">
                        <img src="gambar/salva.jpg"/>
                        <h3>Salva</h3>
                        <h4>NPM.234311026</h4>
                    </div>
                    <div class="kartu-tutor">
                        <img src="gambar/adit.jpg"/>
                        <h3>Aditya</h3>
                        <h4>NPM.234311003</h4>
                    </div>
                
                    </div>
                </div>
            </div>
        </section>

        <!-- PARTNER -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Partner</p>
                    <h2>Partners</h2>
                    <p>Jadikoding.id Telah Bekerja sama dengan :</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="gambar/gogle.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="gambar/pnm.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="gambar/havard.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="gambar/universitas_brawijaya.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="gambar/vscode.png"/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="footer">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Jadikoding adalah platform belajar yang didirikan oleh 3 anak muda pada tahun 2024. Setelah banyak mengikuti berbagai pengalaman organisasi, pendidikan di kampus dan kerja . Para founder merasa bahwa Indonesia memiliki potensi yang sangat besar untuk semakin maju di bidang teknologi mengingat pertumbuhan startup IT yang sangat pesat di beberapa tahun silam..</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p><img src="gambar/location.png" alt="Lokasi">Jl.Serayu No.84 Kota Madiun </p>
                    <p><img src="gambar/email.png" alt="Kode Pos"> Kode Pos: 63133</p>                    
                    <p><img src="gambar/telephone.png" alt="No telp">(0351)452960</p>
                    <p><img src="gambar/telephone.png" alt="No telp">(0351)452970</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b><img src="gambar/youtube.png" alt="Youtube">YouTube: </b>Ngoding di Jadikoding</p>
                    <p><b><img src="gambar/instagram.png" alt="Instagram">Instagram: </b>Jadikoding_id</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>Jadikoding.id</b> All Rights Reserved.
        </div>
    </div>
    <script>
        // Cek apakah pengguna sudah login
        window.onload = function() {
            if (localStorage.getItem("username")) {
                document.getElementById("loginLink").innerText = "Logout";
                document.getElementById("loginLink").href = "#"; 
                document.getElementById("registerListItem").style.display = "none";
                document.getElementById("loginLink").addEventListener("click", function() {
                    localStorage.removeItem("username");
                    document.getElementById("loginLink").innerText = "Login";
                    document.getElementById("loginLink").href = "login.html";
                    document.getElementById("registerListItem").style.display = "block";
                });
            }
        };
    </script>
</body>
</html>
?>