<fieldset>
    <legend><h1>Formulir Pendaftaran Nikah</h1></legend>
    <form action="tujuan.php" method="POST" name="form_user">
        
        <!--Data Suami-->
        <div class="suami">
            <h2>Data Calon Suami :</h2>

            <div class="atur">
                <label class="label1">Nama Depan</label>
                <input class="kotakinput" name="firstNm" type="text" size="30" required oninvalid="this.setCustomValidity('Nama depan tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Mubessirul"/>
            </div>

            <div class="atur">
                <label class="label2">Nama Belakang</label>
                <input class="kotakinput" name="lastNm" type="text" size="30" required oninvalid="this.setCustomValidity('Nama belakang tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Ummah"/>
            </div>

            <div class="atur">
                <label class="label3">Nama Ayah</label>
                <input class="kotakinput" name="Father" type="text" size="30" required oninvalid="this.setCustomValidity('Nama ayah tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Surya Paloh"/>
            </div>

            <div class="atur">
                <label class="label4">Tempat dan tanggal lahir</label>
                <input class="kotakinput" name="tempat" type="text" size="30" required oninvalid="this.setCustomValidity('Tempat lahir tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Bangkalan"/>
                <input class="kotakinput" name="tanggal" type="date" size="30" required oninvalid="this.setCustomValidity('Tanggal lahir tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : 02/10/2004"/>
            </div>
         
            <div class="atur">
                <label class="label5">Kewarganegaraan</label>
                <input class="kotakinput" name="negara" type="text" size="30" required oninvalid="this.setCustomValidity('Kewarganegaraan tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Indonesia"/>
            </div>

            <div class="atur">
                <label class="label6">Agama</label>
                <input class="kotakinput" name="agama" type="text" size="30" required oninvalid="this.setCustomValidity('Agama tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Islam"/>
            </div>

            <div class="atur">
                <label class="label7">Pekerjaan</label>
                <input class="kotakinput" name="pekerjaan" type="text" size="30" required oninvalid="this.setCustomValidity('Pekerjaan tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Pilot"/>
            </div>

            <div class="atur">
                <label class="label8">Alamat</label>
                <input class="kotakinput" name="alamat" type="text" size="30" required oninvalid="this.setCustomValidity('Alamat tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Jl. Attack On Titan, Bangkalan"/>
            </div>

            <div class="atur">
                <label class="label9">Status perkawinan</label>
                    <select class="kotakinput" required oninvalid="this.setCustomValidity('Status tidak boleh kosong')" oninput="setCustomValidity('')" name="status">
                        <option value="" selected disabled> status perkawinan </option>
                        <option value="Jejaka">Jejaka</option>
                        <option value="Duda">Duda</option>
                        <option value="Beristri">Beristri</option>
                    </select>
            </div>
        </div>


        <!--Data isteri-->
        <div class="isteri">
            <h2>Data Calon Isteri :</h2>

            <div class="atur">
                <label class="label1">Nama Depan</label>
                <input class="kotakinput" name="firstNm2" type="text" size="30" required oninvalid="this.setCustomValidity('Nama depan tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Sandrina"/>
            </div>

            <div class="atur">
                <label class="label2">Nama Belakang</label>
                <input class="kotakinput" name="lastNm2" type="text" size="30" required oninvalid="this.setCustomValidity('Nama belakang tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Michael"/>
            </div>

            <div class="atur">
                <label class="label3">Nama Ayah</label>
                <input class="kotakinput" name="Father2" type="text" size="30" required oninvalid="this.setCustomValidity('Nama ayah tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Prabowo Subiyanto"/>
            </div>

            <div class="atur">
                <label class="label4">Tempat dan tanggal lahir</label>
                <input class="kotakinput" name="tempat2" type="text" size="30" required oninvalid="this.setCustomValidity('Tempat lahir tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Bangkalan"/>
                <input class="kotakinput" name="tanggal2" type="date" size="30" required oninvalid="this.setCustomValidity('Tanggal lahir tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : 17/10/2004"/>
            </div>
         
            <div class="atur">
                <label class="label5">Kewarganegaraan</label>
                <input class="kotakinput" name="negara2" type="text" size="30" required oninvalid="this.setCustomValidity('Kewarganegaraan tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Indonesia"/>
            </div>

            <div class="atur">
                <label class="label6">Agama</label>
                <input class="kotakinput" name="agama2" type="text" size="30" required oninvalid="this.setCustomValidity('Agama tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Islam"/>
            </div>

            <div class="atur">
                <label class="label7">Pekerjaan</label>
                <input class="kotakinput" name="pekerjaan2" type="text" size="30" required oninvalid="this.setCustomValidity('Pekerjaan tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Perawat"/>
            </div>

            <div class="atur">
                <label class="label8">Alamat</label>
                <input class="kotakinput" name="alamat2" type="text" size="30" required oninvalid="this.setCustomValidity('Alamat tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="ex : Jl. Attack On Titan, Bangkalan"/>
            </div>

            <div class="atur">
                <label class="label9">Status perkawinan</label>
                    <select class="kotakinput" required oninvalid="this.setCustomValidity('Status tidak boleh kosong')" oninput="setCustomValidity('')" name="status2">
                        <option value="" selected disabled> status perkawinan </option>
                        <option value="Perawan">Perawan</option>
                        <option value="Janda">Janda</option>
                    </select>
            </div>
        </div>


        <input class="labelcap" name="cekrobot" type="radio" required oninvalid="this.setCustomValidity('Captcha harus diisi')" oninput="setCustomValidity('')" value="NotRobot"/>
            <label for="Captcha" class="Captcha">
                <img src="captcha.png" alt="Captcha">Captcha
            </label>
        <div class="simpan">
        <input type="submit" name="submit" value="kirim">
        </div>
    </form>  
</fieldset>

<style>
    body{
        background-image: url(background.png);
        background-repeat: no-repeat;
        background-size: cover;
    }
    img{
        width: 25px;
    }
    fieldset{
        margin: auto;
        padding-left: 50px;
        padding-right: 50px;
        display: grid;
        width:fit-content;
        border-radius: 20px;
        border: 2px rgb(241, 241, 190);
        box-shadow: 0px 0px 30px rgb(0, 0, 0);
        background-color:rgb(241, 241, 190);
        box-shadow: 0px 0px 30px rgb(0, 0, 0);
    }
    h1{
        color: rgb(14, 34, 46);
        text-shadow:0px -1px 3px rgb(255, 255, 255) ;
        background-color:darkkhaki;
        border-radius: 10px;
        padding: 2px;
        font-size: 30px;
        font-weight:bolder;
    }
    .atur{
        margin-bottom: 10px;
    }
    .kotakinput::before{
        margin-right: 500px;
        color: black solid;
    }
    .label1::after{
        content: ":";
        margin-left: 87px;
    }
    .label2::after{
        content: ":";
        margin-left: 68px;
    }
    .label3::after{
        content: ":";
        margin-left: 96px;
    }
    .label4::after{
        content: ":";
        margin-left: 11px;
    }
    .label5::after{
        content: ":";
        margin-left: 55px;
    }
    .label6::after{
        content: ":";
        margin-left: 124px;
    }
    .label7::after{
        content: ":";
        margin-left: 107px;
    }
    .label8::after{
        content: ":";
        margin-left: 123px;
    }
    .label9::after{
        content: ":";
        margin-left: 53px;
    }
    input{
    border-radius: 10px;
    }
    select{
        border-radius: 10px;
        background-color:white;
        width: 240px;
        height: 30px;
        color: rgb(114, 114, 114);
        border: 1px solid darkgray;
    }
    input{
        background-color:white;
        padding: 5px;
        color: rgb(114, 114, 114);
        border: 1px darkgrey solid;
    }
    .labelcap{
        margin-top: 20px;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
</style>