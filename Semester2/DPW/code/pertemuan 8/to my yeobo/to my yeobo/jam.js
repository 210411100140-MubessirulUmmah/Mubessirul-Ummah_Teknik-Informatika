window.onload = function() {bulan();jam();button()}

//menampilkan tanggal, bulan, dan tahun
function bulan() {
    var a = document.getElementById('tanggal'),
    waktu = new Date ();
    var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
        bulann = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]
        tnggal = waktu.getDate();
        tahun = waktu.getFullYear();

        a.innerHTML = hari[waktu.getDay()] + ", " + tnggal + " " + bulann[waktu.getMonth()]  + " " + tahun;
}

//menampilkan jam digital
function jam() {
    var a = document.getElementById('jam'),
    waktu = new Date ();
    jamm = waktu.getHours();
    if ( jamm > 12 ){
        sesi = "pm"
    } else {
        sesi = "am"
    }
    menit = waktu.getMinutes();
    detik = waktu.getSeconds();

    a.innerHTML = jamm + ":" + menit + ":" + detik + " " + sesi;

    setTimeout('jam()', 1000)
}

function set(a) {
    a = a < 10 ? '0' + a : a;
    return a;
}

//konversi jam digital menjadi teks
function button() {
    var b = document.getElementById("button")
    b.addEventListener("click", function(){

        var a = document.getElementById('baca'),
        waktu = new Date();

        //baca bilangan jam
        var angka=new Array("","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan","Sepuluh","Sebelas");
        var konverterjam;
        var jam = waktu.getHours();
        if(jam < 12){jam2 = jam
            konverterjam = angka[jam2];}else
        if(jam < 20 & jam >= 12 ){jam -= 10
            konverterjam = angka[jam] + " Belas";}else
        if(jam < 60 & jam >= 20){jam1 = Math.floor(jam/10)
            jam2 = (jam%10)
            konverterjam = angka[jam1]+ " Puluh " + angka[jam2]
            jam = jam;}else

        //baca bilangan menit
        var konvertermnt;
        var menit  = waktu.getMinutes();
        if(menit < 12){menit2 = menit
            konvertermnt = angka[menit2];}else
        if(menit < 20 & menit >= 12 ){menit -= 10
            konvertermnt = angka[menit] + " Belas";}else
        if(menit < 60 & menit >= 20){menit1 = Math.floor(menit/10)
            menit2 = (menit % 10)
            konvertermnt = angka[menit1]+ " Puluh " + angka[menit2]
            menit = menit;}else
            
        //baca bilangan setik
        var konverterdtk;
        var detik =waktu.getSeconds();
        if(detik < 12 ){
            detik2 = detik
            konverterdtk = angka[detik2] }
        if(detik < 20 & detik >= 12){detik -= 10
            konverterdtk = angka[detik] +" Belas";}
        if(detik < 60 & detik >= 20){
            detik1 = Math.floor(detik/10)
            detik2 = detik % 10
            konverterdtk = angka[detik1]+" Puluh "+ angka[detik2]
            detik = detik;}

        var hari = " ";
        if (sesi = "am"){
            if(jam >= 1){hari = "Dini";}
            if(jam < 11){hari = "Pagi";}
            if(jam > 11){hari = "Siang";}}
        if(sesi="pm"){
            if(jam < 15){hari = "Siang";}
            if(jam > 15){hari = "Sore";}
            if(jam > 19){hari = "Malam";}}  

        a.innerHTML = "Jam " + konverterjam + " Lebih " + konvertermnt + " Menit, " + konverterdtk + " Detik " + "( " + hari + " Hari " + ")"
    });
}