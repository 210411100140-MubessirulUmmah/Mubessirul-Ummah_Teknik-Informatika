const form = document.getElementById("form");
const firstname= document.getElementById("Firstname");
const lastname= document.getElementById("Lastname");
const month=document.getElementById("bulan");
const day=document.getElementById("tanggal");
const year=document.getElementById("tahun");
const male= document.getElementById("Male");
const female= document.getElementById("Female");

form.addEventListener("submit",e=>{e.preventDefault();
CheckForm(firstname,lastname,month,day,year,male,female);})
function CheckForm(firstname,lastname,month,day,year,male,female){
    var firstnameValue= firstname.value.trim();
    if(firstnameValue == '') {
        document.getElementById("firstname_error").innerHTML='Firstname cannot be blank <label for="Firstname"><u>Fix it</u></label>';
        document.getElementById("firstname_errortampil").innerHTML='<em>Firstname cannot be blank</em>';
        document.getElementById('ket').innerHTML='There was an error in your input';} 
    else if(!firstnameValue.match(/^[a-zA-Z]*$/)){
        document.getElementById("firstname_error").innerHTML='Firstname may not contain numbers.<label for="Firstname"><u>Fix it</u></label>';
        document.getElementById("firstname_errortampil").innerHTML='<em>Firstname may not contain numbers </em>';
        document.getElementById('ket').innerHTML='There was an error in your input';}
    else{
        document.getElementById("firstname_error").innerHTML=" ";
        document.getElementById("firstname_errortampil").innerHTML=" ";
        document.getElementById('ket').innerHTML=" ";
    }
    
    var lastnameValue= lastname.value.trim();
    if(lastnameValue=== '') {
        document.getElementById("lastname_error").innerHTML='Lastname cannot be blank <label for="Lastname"><u> Fix it </u></label>';
        document.getElementById("lastname_errortampil").innerHTML='<em>Lastname cannot be blank</em>'; 
        document.getElementById('ket').innerHTML='There was an error in your input ';
    }else if(!lastnameValue.match(/^[a-zA-Z]*$/)){
        document.getElementById("lastname_error").innerHTML='Firstname may not contain numbers <label for="Lastname"><u> Fix it </u></label>';
        document.getElementById("lastname_errortampil").innerHTML='<em>Lastname may not contain numbers</em>';
        document.getElementById('ket').innerHTML='There was an error in your input';}
    else{
        document.getElementById("lastname_error").innerHTML=" ";
        document.getElementById("lastname_errortampil").innerHTML=" ";
        document.getElementById('ket').innerHTML=" ";
    }
    
    var monthValue=month.value;
    var dayValue=day.value;
    var yearValue=year.value;
    if ((monthValue=="") || (dayValue=="") || (yearValue=="")){
        document.getElementById("birth_error").innerHTML='Date of Birth cannot be blank <label for="bulan"><u> Fix it </u></label>';
        document.getElementById("birth_errortampil").innerHTML='<em>Date of Birth cannot be blank</em>'; 
        document.getElementById('ket').innerHTML='There was an error in your input ';}
    else if((monthValue!="") || (dayValue!="") || (yearValue!="")){
        document.getElementById("birth_error").innerHTML=" "
        document.getElementById("birth_errortampil").innerHTML=" "
        document.getElementById('ket').innerHTML=" ";
    }
    
    var genderValue;
    if (male.checked==false && female.checked==false){
        document.getElementById("gender_error").innerHTML='Gender cannot be blank <label for="Male"><u> Fix it </u></label>';
        document.getElementById("gender_errortampil").innerHTML='<em>Gender cannot be blank</em>';
        document.getElementById('ket').innerHTML='There was an error in your input';}
    else if (male.checked==true && female.checked==false){
        genderValue = document.getElementById("Male").value;
        document.getElementById("gender_error").innerHTML=" ";
        document.getElementById("gender_errortampil").innerHTML=" ";
        document.getElementById('ket').innerHTML=" ";
    }else if(male.checked==false && female.checked==true){
        genderValue = document.getElementById("Female").value;
        document.getElementById("gender_error").innerHTML=" ";
        document.getElementById("gender_errortampil").innerHTML=" ";
        document.getElementById('ket').innerHTML=" ";
    }
    

    
    
    
    if (firstnameValue != "" && lastnameValue!="" && monthValue !="" && dayValue !="" && yearValue !="" && genderValue !="") {
        alert("DATA TELAH TERKIRIM\n\nNama depan : "+firstnameValue+"\nNama belakang : "+lastnameValue+"\nTanggal lahir : "+monthValue+", "+dayValue+"th "+yearValue+ "\nGender : "+genderValue);
        document.getElementById("form").reset();
        document.getElementById("Firstname").reset();
        document.getElementById("Lastname").reset();
        document.getElementById("bulan").reset();
        document.getElementById("tanggal").reset();
        document.getElementById("tahun").reset();
        document.getElementById("Male").reset();
        document.getElementById("Female").reset();    
    }
    
    else{
        alert("Form harus diisi !!!!!!!")
    } 
}