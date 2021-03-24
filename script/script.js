
let nama = prompt("Masukkan nama Anda ?");
document.getElementById('nama-user').innerHTML = nama;

let silinder = document.getElementById('silinder-form');
let kerucut = document.getElementById('kerucut-form');
let bola = document.getElementById('bola-form');



let swSilin = () => {
    silinder.style.display = 'flex';
    kerucut.style.display = 'none';
    bola.style.display = 'none';
    document.getElementById("luassilinder").value = '';
    document.getElementById("volumesilinder").value = '';
    document.getElementById("jarisilinder").value = '';
    document.getElementById("tinggisilinder").value = '';

}

let swKerucut = () => {
    silinder.style.display = 'none';
    kerucut.style.display = 'flex';
    bola.style.display = 'none';
    document.getElementById("luaskerucut").value = '';
    document.getElementById("volumekerucut").value = '';
    document.getElementById("jarikerucut").value = '';
    document.getElementById("tinggikerucut").value = '';
    document.getElementById("gariskerucut").value = '';

}

let swBola = () => {
    silinder.style.display = 'none';
    kerucut.style.display = 'none';
    bola.style.display = 'flex';
    document.getElementById("luasbola").value = '';
    document.getElementById("volumebola").value = '';
    document.getElementById("jaribola").value = '';
}

let hitungKerucut = (jari, garis, tinggi) => {
    let luas = document.getElementById("luaskerucut");
    luas.value = Math.PI * jari.value * (jari.value + garis.value);
    let volume = document.getElementById("volumekerucut");
    volume.value = 1 / 3 * Math.PI * (jari.value * jari.value) * tinggi.value;
}


let hitungSilinder = (jari, tinggi) => {
    let luas = document.getElementById("luassilinder");
    luas.value = 2 * Math.PI * jari.value * (jari.value * tinggi.value);
    let volume = document.getElementById("volumesilinder");
    volume.value = Math.PI * (jari.value * jari.value) * tinggi.value;

}

let hitungBola = (jari) => {
    let luas = document.getElementById("luasbola");
    luas.value = 4 * Math.PI * jari.value * jari.value;
    let volume = document.getElementById("volumebola");
    volume.value = 4 / 3 * Math.PI * jari.value * jari.value * jari.value;
}

swSilin();



let calculate = () => {
    if (kerucut.style.display === 'flex') {
        let jari = document.getElementById("jarikerucut");
        let garis = document.getElementById("gariskerucut");
        let tinggi = document.getElementById("tinggikerucut");
        hitungKerucut(jari, garis, tinggi);
    } else if (silinder.style.display === 'flex') {
        let jari = document.getElementById("jarisilinder");
        let tinggi = document.getElementById("tinggisilinder");
        hitungSilinder(jari, tinggi);
    } else {
        let jari = document.getElementById("jaribola");
        hitungBola(jari);
    }

}



