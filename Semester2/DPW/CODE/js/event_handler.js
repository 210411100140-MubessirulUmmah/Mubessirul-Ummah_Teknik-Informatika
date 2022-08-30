var bgcolors = ['#ffffff',' #f30000','#4E2008', '#A23607', '#EFEACC', '#7A6A46', '#4B4934', '#3DBBED', '#A09C2E', '#E82B27', '#FFDF00', '#D55391', '#4B1431'];
var fontstyle = ['arial','cursive','sans-serif','georgia','monospace','initial','tahoma','verdana','fantasy','gill sans','calibri'];
var warna=0;
var style=0;
var ukuran=30;

function mampir() {
    document.getElementById("activity").value = "Anda mendekati tulisan Triple-C";
}
function jauh() {
    document.getElementById("activity").value = "Anda menjauhi tulisan Triple-C";
}
function warna_before() {
    if(warna == 0) {
        document.getElementById("nama").style.color = bgcolors.length-1;
    } else {
        document.getElementById("nama").style.color = bgcolors[warna--];
    }
    document.getElementById("activity").value = "Anda mengubah warna pada tulisan triple-c";
}
function warna_next() {
    document.getElementById("nama").style.color = bgcolors[warna++];
    if(warna == bgcolors.length) {
        warna = 0;
    }
    document.getElementById("activity").value = "Anda mengubah warna pada tulisan triple-c";
}
function font_before() {
    if(style == 0) {
        document.getElementById("nama").style.fontFamily = fontstyle.length;
    } else {
        document.getElementById("nama").style.fontFamily = fontstyle[style--];
    }
    document.getElementById("activity").value = "Anda mengubah gaya pada tulisan triple-c";
}
function font_next() {
    document.getElementById("nama").style.fontFamily = fontstyle[style++];
    if(style == fontstyle.length) {
        style = 0;
    }
    document.getElementById("activity").value = "Anda mengubah gaya pada tulisan triple-c";
}
function ukuran_min() {
    var nilai = ukuran--
    document.getElementById("nama").style.fontSize = nilai+"px";
    document.getElementById("activity").value = "Anda mengurangi ukuran pada tulisan triple-c";
}
function ukuran_plus() {
    var nilai = ukuran++
    document.getElementById("nama").style.fontSize = nilai+"px";
    document.getElementById("activity").value = "Anda menambah ukuran pada tulisan triple-c";
}