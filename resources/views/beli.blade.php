@extends('layout.base')
@section('content')

<body>
<div class="content">
    <div class="container">
        <h2 class="mb-5">Pembelian Buku</h2>
        <div class="row">
            <div class="col-md-6">
                <!-- Display airline ticket information from local storage -->
                <h3 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);color: rgb(0, 0, 0);">Detail Buku</h3>
                <p>judul: <span id="judul"></span></p>
                <p>penulis: <span id="penulis"></span></p>
                <p>harga: <span id="harga"></span></p>
            </div>
            <div class="col-md-6">
                <!-- Create the form for name, age, and phone number -->
                <h3 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Informasi Pembelian</h3>
                <form class="form" action="/beli/store" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Nama:</label>
                        <input type="text" class="form-control" id="name" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Nomor Telepon:</label>
                        <input type="tel" class="form-control" id="phone" name="telp" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>

                    <input type="hidden" class="form-control" id="judul_input" name="judul" required>
                    <input type="hidden" class="form-control" id="penulis_input" name="penulis" required>
                    <input type="hidden" class="form-control" id="harga_input" name="harga" required>
                    <input type="hidden" name="action" value="beli post">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tiketDataString = localStorage.getItem("tiketData");
        if (tiketDataString) {
            const tiketData = JSON.parse(tiketDataString);

            // Display the retrieved ticket data on the page
            document.getElementById("judul").textContent = tiketData.judul;
            document.getElementById("penulis").textContent = tiketData.penulis;
            document.getElementById("harga").textContent = tiketData.harga;

            // Set the value of hidden input fields
            document.getElementById("judul_input").value = tiketData.judul;
            document.getElementById("penulis_input").value = tiketData.penulis;
            document.getElementById("harga_input").value = tiketData.harga;
        }
    });
</script>

<script src="css2/js/jquery-3.3.1.min.js"></script>
<script src="css2/js/popper.min.js"></script>
<script src="css2/js/bootstrap.min.js"></script>
<script src="css2/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"80cb2487880f6be2","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}' crossorigin="anonymous"></script>
</body>
@endsection
