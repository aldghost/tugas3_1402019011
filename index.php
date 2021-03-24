<!DOCTYPE html>
<html>

<head>
    <title>3D Kalkulator - Aldin / 1402019011</title>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body>
    <header>
        <nav>
            <h3 class="title-navbar">3D Kalkulator</h3>
            <ul>
                <li>Home</li>
                <li>About Me</li>
            </ul>
        </nav>

        <div class="title-header">
            <div class="isi-header">
                <h1>3D Kalkulator</h1>
                <h3>Created by Aldin Gans / 1402019011</h3>
            </div>
        </div>

    </header>

    <section>
        <ul class="menu-pilihan">
            <li onclick="swSilin()">Silinder</li>
            <li onclick="swKerucut()">Kerucut</li>
            <li onclick="swBola()">Bola</li>
        </ul>

        <h2>Hi <span id="nama-user">Guest</span></h2>

        <div id='silinder-form' class="calculator">
            <div class="form-calculator">
                <h2>Silinder</h2>
                <label for="jarijari">Jari-Jari ( Meter )</label>
                <input type="text" name="jarijari" id="jarisilinder">
                <br>
                <label for="tinggi">Tinggi ( Meter )</label>
                <input type="text" name="tinggi" id="tinggisilinder">
            </div>
            <div class="result-calculator">
                <h2>Hasil Perhitungan</h2>
                <label for="luaspermukaan">Luas Permukaan</label>
                <input type="text" name="luaspermukaan" id="luassilinder">
                <br>
                <label for="volume">Volume</label>
                <input type="text" name="volume" id="volumesilinder">
            </div>


        </div>

        <div id='kerucut-form' class="calculator">
            <div class="form-calculator">
                <h2>Kerucut</h2>
                <label for="jarijari">Jari-Jari ( Meter )</label>
                <input type="text" name="jarijari" id="jarikerucut">
                <br>
                <label for="garispelukis">Garis Pelukis ( Meter )</label>
                <input type="text" name="garispelukis" id="gariskerucut">
                <br>
                <label for="tinggi">Tinggi ( Meter )</label>
                <input type="text" name="tinggi" id="tinggikerucut">
            </div>
            <div class="result-calculator">
                <h2>Hasil Perhitungan</h2>
                <label for="luaspermukaan">Luas Permukaan</label>
                <input type="text" name="luaspermukaan" id="luaskerucut">
                <br>
                <label for="volume">Volume</label>
                <input type="text" name="volume" id="volumekerucut">
            </div>


        </div>

        <div id='bola-form' class="calculator">
            <div class="form-calculator">
                <h2>Bola</h2>
                <label for="jarijari">Jari-Jari ( Meter )</label>
                <input type="text" name="jarijari" id="jaribola">
            </div>
            <div class="result-calculator">
                <h2>Hasil Perhitungan</h2>
                <label for="luaspermukaan">Luas Permukaan</label>
                <input type="text" name="luaspermukaan" id="luasbola">
                <br>
                <label for="volume">Volume</label>
                <input type="text" name="volume" id="volumebola">
            </div>
        </div>

        <button id="calculateBtn" onclick="calculate()">Calculate</button>
    </section>

    <footer>
        <ul>
            <li>Github</li>
            <li>Heroku</li>
        </ul>
    </footer>


    <script src="script/script.js"></script>

</body>

</html>