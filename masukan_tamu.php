<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Undangan Digital</title>
    <link rel="icon" type="image/png" sizes="450x450" href="./img/Logo (1).png">
    <!-- Hubungkan dengan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="css/app.css"> -->


    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- animasi aos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4=" crossorigin="anonymous">
    <!-- logo -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" integrity="sha256-HtsXJanqjKTc8vVQjO4YMhiqFoXkfBsjBWcX91T1jr8=" crossorigin="anonymous">
    <!-- JQUERY untuk tampilkan data wishes dan POST data ke DB -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        /* body {
            background-color: #c9af95;
            font-family: Poppins;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        label {
            color: white;
        }

        .custom-label {
            cursor: pointer;
            text-decoration: underline;
            color: blue;
        }

        .btn {
            background-color: #53312D;
            color: white;
        } */
    </style>
</head>

<body>






    <section id="hal-4" class="hal-4 w-100 h-100 mx-auto text-center d-flex justify-content-center align-item-center text-white">

        <main>
            <div class="pembungkus">

                <div class="container mt-5">
                    <div class="form-group">
                        <label for="namaTamu" class="label-default">Masukkan Nama Tamu:</label>
                        <input type="text" class="form-control mt-2" id="namaInput" placeholder="Nama Tamu">

                        <button onclick="tampilkanNama()" type="button" class="btn btn-sm mt-3  btn-block" id="submitBtn">Submit</button>
                        <p id="namaTampil"></p>
                    </div>
                </div>


            </div>


        </main>

    </section>




    <!-- script untuk otomatis ganti text di placeholder -->
    <script>
        const inputNamaTamu = document.getElementById("namaInput");
        // const submitBtn = document.getElementById("submitBtn");

        inputNamaTamu.addEventListener("input", function() {
            const labelNamaTamu = document.querySelector(".label-default");
            if (inputNamaTamu.value.trim() !== "") {
                labelNamaTamu.textContent = "Happy Wedding Yaa🥰";
            } else {
                labelNamaTamu.textContent = "Masukkan Nama Tamu:";
            }
        });
    </script>

    <script>
        function tampilkanNama() {
            const namaInput = document.getElementById("namaInput").value;
            const namaTampil = document.getElementById("namaTampil");

            // Lakukan URL encoding pada nilai namaInput
            const namaEncoded = encodeURIComponent(namaInput);

            // Redirect ke halaman lain dengan parameter nama
            window.location.href = "template1_basic.php?mengundang=" + namaEncoded;
        }
    </script>




    <!-- </div> -->

    <!-- Hubungkan dengan JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" integrity="sha256-pQBbLkFHcP1cy0C8IhoSdxlm0CtcH5yJ2ki9jjgR03c=" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="./index.js"></script>
    <script src="./js/app.js"></script>

</body>

</html>