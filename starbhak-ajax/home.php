<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    #resultlist{
    position: absolute;
    width: 81%;
    max-width: 89%;
    cursor: pointer;
    overflow-y: auto;
    max-height: 400px;
    box-sizing: border-box;
    z-index: 1001;
    }

    .link-class:hover{
    background-color: #f1f1f1;
    cursor: pointer;
    }
    </style>

    <title>belajar autocomplete</title>
  </head>
  <body>
    <div class="container">
        <h1 align="center">PHP AJAX SMK Taruna Bhakti</h1>
        <h2 align="center" class="mb-4 mt-4">Autocomplete Dengan Gambar Dan Ajax</h2>
        <div align="center"> 
            <input type="text" id="nama_siswa" placeholder="Cari Nama Mahasiswa..." class="form-control">
        </div>
        <ul class="list-group" id="resultlist"></ul>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
			  src="https://code.jquery.com/jquery-3.5.0.js"
			  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
			  crossorigin="anonymous"></script>
    <script src="script.js"></script>          
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>