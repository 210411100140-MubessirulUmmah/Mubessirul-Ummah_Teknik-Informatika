const form = document.getElementById("form");
const firstname = document.getElementById("Firstname");
const lastname = document.getElementById("Lastname");
const month = document.getElementById("bulan");
const day = document.getElementById("tanggal");
const year = document.getElementById("tahun");
const male = document.getElementById("Male");
const female = document.getElementById("Female");
const email = document.getElementById("email");
const phone = document.getElementById("phone-number");
const adress = document.getElementById("Adress")


form.addEventListener("submit",e=>{e.preventDefault();
CheckForm(firstname,lastname,month,day,year,male,female,email,phone,adress);})

function formatPhoneNumber(value){
    if(!value) return value;
    const phoneNumber=value.replace(/[^\d]/g,'');
    const phoneNumberLength=phoneNumber.length;
    if(phoneNumberLength<4) return phoneNumber;
    if(phoneNumberLength<7){
        return `(${phoneNumber.slice(0,3)}) ${phoneNumber.slice(3)}`;
    }
    return `(${phoneNumber.slice(0,3)}) ${phoneNumber.slice(
        3,
        6,
        )}-${phoneNumber.slice(6,8)}`;
}
function phoneNumberformatter(){
    const inputField=document.getElementById("phone-number");
    const formattedInputValue=formatPhoneNumber(inputField.value);
    inputField.value=formattedInputValue;
}
console.log(inputField.value);

function CheckForm(firstname,lastname,month,day,year,male,female,email,phone,adress){

    var emailvalue=email.value;
    if (emailvalue==''){
        document.getElementById("email_error").innerHTML='Email cannot be blank <label for="email"><u>Fix it</u></label>';
        document.getElementById("email_errortampil").innerHTML='<em>Email cannot be blank </em>';
        document.getElementById('ket').innerHTML='There was an error in your input';
    }else if ((emailvalue.indexOf('@',0)==-1)||(emailvalue.indexOf('.',0)==-1)){
        document.getElementById("email_error").innerHTML='Wrong email format <label for="email"><u>Fix it</u></label>';
        document.getElementById("email_errortampil").innerHTML='<em>Wrong email format</em>';
        document.getElementById('ket').innerHTML='There was an error in your input';}
    else{
        document.getElementById("email_error").innerHTML=" ";
        document.getElementById("email_errortampil").innerHTML=" ";
        document.getElementById('ket').innerHTML=" ";
    }


    var firstnameValue = firstname.value.trim();
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
    
    var lastnameValue = lastname.value.trim();
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
    
    var nophone=phone.value
    if(nophone==""){
        document.getElementById("nohp_error").innerHTML='Number Phone cannot be blank <label for="phone-number"><u> Fix it </u></label>';
        document.getElementById("nohp_errortampil").innerHTML='<em>Number Phone cannot be blank</em>'; 
        document.getElementById('ketphone').innerHTML='There was an error in your input';
    }
    else if(nophone.length<9){
        document.getElementById("nohp_error").innerHTML='Write 9 digit number in the box <label for="phone-number"><u> Fix it </u></label>';
        document.getElementById("nohp_errortampil").innerHTML='<em>Please write 9 digit number in the box</em>'; 
        document.getElementById('ketphone').innerHTML='There was an error in your input';
    }
    else{
        document.getElementById("nohp_error").innerHTML='';
        document.getElementById("nohp_errortampil").innerHTML=''; 
        document.getElementById('ketphone').innerHTML='';
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

    var adresseValue = adress.value.trim();
    if(adresseValue == '') {
        document.getElementById("adress_error").innerHTML='Adress cannot be blank <label for="Adress"><u>Fix it</u></label>';
        document.getElementById("adress_errortampil").innerHTML='<em>Adress cannot be blank</em>';
        document.getElementById('ket').innerHTML='There was an error in your input';}
    else{
        document.getElementById("adress_error").innerHTML='';
        document.getElementById("adress_errortampil").innerHTML='';
        document.getElementById('ket').innerHTML='';
    }
        


    if (firstnameValue == "" || lastnameValue =="" || monthValue =="" || dayValue =="" || yearValue =="" || (male.checked && female.checked == false) || emailvalue =="" || adresseValue =="" && nophone!=""){
        document.getElementById('ket').innerHTML='There was an error in your input';
        document.getElementById('ketphone').innerHTML='';}
    else if(firstnameValue != "" || lastnameValue !="" || monthValue != "" || dayValue !="" || yearValue !="" || (male.checked && female.checked == true) || emailvalue !="" || adresseValue !="" && nophone=="") {
        document.getElementById('ket').innerHTML='';
        document.getElementById('ketphone').innerHTML='There was an error in your input';}

    
    if (firstnameValue != "" && lastnameValue!="" && monthValue !="" && dayValue !="" && yearValue !="" && (male.checked || female.checked == true) && emailvalue !="" && nophone!="" && adresseValue !="") {
        document.getElementById("hasiljawaban").innerHTML=("<h4><div align=center font-size=50>DATA TELAH TERKIRIM</div><div align=center>Profil "+firstnameValue+" "+lastnameValue+"</div><div align=center>----------------------</div><div class=emailhasil>Email : "+emailvalue+"</div><div class=firsthasil>Nama depan : "+firstnameValue+"</div><div class=lasthasil>Nama belakang : "+lastnameValue+"</div><div class=telponhasil>No Telephone : "+nophone+"</div><div class=tanggalhasil>Tanggal lahir : "+monthValue+", "+dayValue+"th "+yearValue+ "</div><div class=kelaminhasil>Jenis Kelamin : "+genderValue+"</div><div class=alamathasil>Alamat : "+adresseValue+"</div></h4>");
        document.getElementById("form").reset();
        document.getElementById("Firstname").reset();
        document.getElementById("Lastname").reset();
        document.getElementById("bulan").reset();
        document.getElementById("tanggal").reset();
        document.getElementById("tahun").reset();
        document.getElementById("Male").reset();
        document.getElementById("Female").reset();
        document.getElementById("email");
        document.getElementById("phone-number");
        document.getElementById("Adress")
    }
    
    else{
        alert("Form harus diisi !!!!!!!")
    } 
}