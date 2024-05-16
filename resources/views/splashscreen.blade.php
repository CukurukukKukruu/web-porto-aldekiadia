<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Laravel App</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Copperplate -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: #000;
        }
        #content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 5;
            text-align: center;
            color: #fff; /* Ubah warna teks menjadi putih */
        }
        .jumbotron {
            background-color: transparent !important;
        }
        .display-4 {
            font-size: 3.1rem; /* Perbesar ukuran font */
            font-weight: bold;
            font-family: Copperplate, sans-serif; /* Menggunakan font Copperplate */
            color: yellow !important; /* Ubah warna teks menjadi kuning */
        }
        .lead {
            font-size: 1.2rem; /* Perbesar ukuran font */
            font-weight: bold;
            font-family: Copperplate, sans-serif; /* Menggunakan font Copperplate */
        }
        .form-control {
            font-family: Copperplate, sans-serif; /* Menggunakan font Copperplate untuk input */
            color: #fff; /* Ubah warna teks input menjadi putih */
            background-color: transparent !important; /* Buat background input transparan */
            border: none; /* Hilangkan border input */
            outline: none; /* Hilangkan outline saat input di-focus */
            text-align: center; /* Pusatkan teks input */
            width: 200px; /* Perkecil lebar input */
            margin: 0 auto; /* Pusatkan input */
        }
        .form-control:focus {
            color: #fff; /* Ubah warna teks menjadi putih saat input di-fokus */
        }
        .btn-submit {
            border-radius: 50%; /* Membuat tombol sepenuhnya bulat */
            background-color: transparent; /* Menghapus latar belakang */
            border: 2px solid #fff; /* Menambahkan border putih */
            color: #fff; /* Mengatur warna teks menjadi putih */
            padding: 10px; /* Mengatur padding */
            font-size: 1rem; /* Ukuran font */
            cursor: pointer; /* Mengubah kursor saat diarahkan ke tombol */
            transition: all 0.3s ease; /* Efek transisi */
            width: 100px; /* Menentukan lebar */
            height: 100px; /* Menentukan tinggi */
            position: relative; /* Menetapkan posisi tombol */
            bottom: -50px; /* Mengatur posisi bawah */
            opacity: 0; /* Atur ke opasitas nol untuk memulai */
        }
        .btn-submit.show {
            bottom: 0; /* Mengubah posisi menjadi nol saat ditampilkan */
            opacity: 1; /* Mengatur opasitas menjadi satu saat ditampilkan */
        }
        .btn-submit:hover {
            background-color: #fff; /* Mengubah warna latar belakang saat hover */
            color: #000; /* Mengubah warna teks menjadi hitam saat hover */
        }
    </style>
</head>
<body>

<div id="particles-js"></div>

<div id="content">
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Hii My Name Is <span style="color: #fff;">Aldeki Adia</span></h1>
            <form action="/depan" method="GET">
                <p class="lead">Before we get started. What is your name?</p>
                <div class="form-group">
                    <input
                        id="name-input"
                        type="text"
                        class="form-control"
                        placeholder="insert your name here"
                        required
                    />
                </div>
                <button id="submit-btn" type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": ["#FF6633", "#FFB399", "#FF33FF", "#FFFF99", "#00B3E6",
                    "#E6B333", "#3366E6", "#999966", "#99FF99", "#B34D4D",
                    "#80B300", "#809900", "#E6B3B3", "#6680B3", "#66991A",
                    "#FF99E6", "#CCFF1A", "#FF1A66", "#E6331A", "#33FFCC",
                    "#66994D", "#B366CC", "#4D8000", "#B33300", "#CC80CC",
                    "#66664D", "#991AFF", "#E666FF", "#4DB3FF", "#1AB399",
                    "#E666B3", "#33991A", "#CC9999", "#B3B31A", "#00E680",
                    "#4D8066", "#809980", "#E6FF80", "#1AFF33", "#999933",
                    "#FF3380", "#CCCC00", "#66E64D", "#4D80CC", "#9900B3",
                    "#E64D66", "#4DB380", "#FF4D4D", "#99E6E6", "#6666FF"],
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
            },
            "size": {
                "value": 2,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });

    // Menambahkan event listener untuk memeriksa input
    document.getElementById("name-input").addEventListener("input", function() {
        var nameInput = this.value.trim(); // Mendapatkan nilai input dan menghapus spasi di awal dan akhir

        // Menentukan apakah input kosong atau tidak
        if (nameInput === "") {
            // Jika input kosong, sembunyikan tombol submit dengan transisi memudar dari bawah ke atas
            document.getElementById("submit-btn").classList.remove("show");
        } else {
            // Jika input tidak kosong, tampilkan tombol submit dengan transisi muncul dari bawah ke atas
            document.getElementById("submit-btn").classList.add("show");
        }
    });
</script>

</body>
</html>
