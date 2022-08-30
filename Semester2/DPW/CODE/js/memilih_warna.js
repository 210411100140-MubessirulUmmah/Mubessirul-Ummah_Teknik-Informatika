document.getElementById('ubah').style.background = '#fff';

var bgcolors = ['#4E2008', '#A23607', '#EFEACC', '#7A6A46', '#4B4934', '#3DBBED', '#A09C2E', '#E82B27', '#FFDF00', '#D55391', '#4B1431'];
var i = 0;
function change(){  
    document.getElementById("ubah").style.backgroundColor = bgcolors[i++];
    if(i == bgcolhex.length) {
        i = 0;
    }
}

var bgcolhex = ['#4E2008', '#A23607', '#EFEACC', '#7A6A46', '#4B4934', '#3DBBED', '#A09C2E', '#E82B27', '#FFDF00', '#D55391', '#4B1431'];
function changeText(){
    document.getElementById("colorvalue").innerHTML = bgcolhex[i++];
    if(i == bgcolhex.length) {
        i = 0;
    }
}