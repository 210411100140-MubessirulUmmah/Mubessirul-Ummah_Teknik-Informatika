import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
import datetime
import seaborn as sns

import json
with open("ketentuan.json") as jsonya:
    katentuan = json.loads(jsonya.read())
    for baca in katentuan["KETENTUAN"]:
        print(baca)
inpaksi = (input("\n1. Tentang Aplikasi\n2. Saya Setuju\n=> "))
while(True):
    if inpaksi=="1":
        import json
        with open("tentang aplikasi.json") as jsonya:
            tentang_aplikasi = json.loads(jsonya.read())
            for baca in tentang_aplikasi["SIREKAP"]:
                print(baca)
            inpaksi = (input("\n1. Tentang Aplikasi\n2. Saya Setuju\n=> "))
            
    elif inpaksi=="2":
        print("\nSelamat",end=" ")
        print("datang",end=" ")
        print("di",end=" ")
        print("aplikasi SIREKAP\nsilahkan LOGIN terlebih dahulu untuk memulai aplikasi")
        while(True):
            try:
                nama = input("Masukkan Nama Anda : ")
                NIK = int(input("masukkan Nomor Induk Kependudukan : "))
            except:
                print("NIK harus berupa angka")
            else:
                break
        import getpass
        kata_sandi = getpass.getpass("masukkan kata sandi : ")
        kata_sandi2 = getpass.getpass("masukkan kata sandi anda kembali : ")
        import datetime
        waktu = datetime.datetime.now()
        while kata_sandi2!=kata_sandi:
            print("\nkata sandi salah")
            lihat=input("apakah anda lupa sandi?\n(Y)cek kata sandi\n(T)Coba Kembali\n=> ")
            if lihat=="Y":
                print("kata sandi anda :",kata_sandi)
                kata_sandi2 = input("\nsilahkan masukkan kata sandi anda kembali : ")
            elif lihat=="T":
                kata_sandi2 = input("\nsilahkan masukkan kata sandi anda kembali : ")
                if kata_sandi2==kata_sandi:
                    break
        print("\npada",waktu,"login berhasil dilakukan")
        print("anda Login sebagai "+nama+"(",NIK,")")
        break
def fitur():
    print("\n==============Aplikasi Sirekap===============")
    print("FITUR APLIKASI :\n1. Simulasi Pencoblosan dan Pengolahan Hasil Suara\n2. Cek Pemilih\n3. Cek Calon\n4. Cek Hasil\n5. Cek Hoax\n6. Logout")

fitur()
menu = int(input("hei "+nama+", masukkan pilihan menu : "))
while(True):
    if menu==1:
        print("Simulasi Pencoblosan")
        import json
        with open("SURAT SUARA.json") as jsonya:
            SURAT_SUARA = json.loads(jsonya.read())
            for baca in SURAT_SUARA["SURAT_SUARA"]:
                print(baca)
        paslon1 = 0
        paslon2 = 0
        SURAT_TIDAK_SAH = 0
        DPT = ["Naruto","Nishinoya","Kageyama","Redeus","Origawa sayu","Miko","Syota Nagisa"]
        for DPT in(DPT):
            print("\n======================")
            print("Pemilih :",DPT)
            import getpass
            coblos = getpass.getpass("1. Jokowi-Makruf\n2. Prabowo-Sandiaga\nPasangan manakah yang akan kamu coblos? : ")
            if coblos=="1":
                paslon1+=1
            elif coblos=="2":
                paslon2+=1
            else:
                SURAT_TIDAK_SAH+=1
                print("Surat suara tidak sah")
        a=paslon1
        b=paslon2
        c=SURAT_TIDAK_SAH
        print("\n")
        hasil = {"PASLON 01":[a],"PASLON 02": [b],"TIDAK SAH":[c]}
        with open("hasil.json", "w") as json_file:
            json.dump(hasil, json_file)
        with open("hasil.json") as jsonya:
            lihat = json.loads(jsonya.read())
            for data in lihat ["PASLON 01"]:
                print("PASLON 01 MENDAPAT TOTAL SUARA SEBANYAK : ",data,"SUARA")
            for data in lihat ["PASLON 02"]:
                print("PASLON 02 MENDAPAT TOTAL SUARA SEBANYAK : ",data,"SUARA")
            for data in lihat ["TIDAK SAH"]:
                print("SURAT SUARA RUSAK / TIDAK SAH SEBANYAK : ",data,"SURAT SUARA")

        print("\n")
        fitur()
        menu = int(input("hei "+nama+", masukkan pilihan menu : "))
        
    elif menu==2:
        print("Cek Pemilih")
        pilih=input("1. Grafik Pemilik Hak Suara Tiap Provinsi\n2. Lihat data keseluruhan\n3. lihat data keseluruhan berdasar provinsi\nHei "+nama+", menu apa yang ingin anda pilih?=> ")
        if pilih=="1":
            print("Grafik Pemilik Hak Suara Tiap Provinsi")
            data = pd.read_csv("Indonesian Registered Voters for 2019 Election - Sheet1.csv")
            data.sort_values("Total Registered Voters")
            plt.figure(figsize=(12,7))
            plt.bar(data["Province"], data["Total Registered Voters"], width=0.8, color="lightcoral")
            plt.title("TOTAL PEMILIH", fontsize=20)
            plt.xlabel("PROVINSI")
            plt.ylabel("JUMLAH PEMILIH")
            plt.xticks(rotation=90)
            plt.xticks(size=6)
            plt.yticks(size=6)
            plt.show()
        elif pilih=="2":
            print("Lihat data keseluruhan")
            data = pd.read_csv("Indonesian Registered Voters for 2019 Election - Sheet1.csv")
            data.sort_values("Total Registered Voters")
            pd.set_option('display.max_columns', None)
            print(data)
        elif pilih=="3":
            print("lihat data keseluruhan berdasar provins")
            data = pd.read_csv("Indonesian Registered Voters for 2019 Election - Sheet1.csv")
            while(True):
                try:
                    x=input("masukkan nama provinsi : ")
                    jumlah=data[data["Province"]==x]
                    pd.set_option('display.max_columns', None)
                except:
                    print("Provinsi yang anda masukkan tidak terdata, silahkan input nama provinsi dengan huruf kapital.")
                else:
                    print(jumlah)
                    break
        print("\n")
        fitur()
        menu = int(input("hei "+nama+", masukkan pilihan menu : "))

    elif menu==3:
        print("Cek Calon")
        pilih = input("1. Lihat paslon 1 (Jokowi-Makruf)\n2. Lihat paslon 2 (Prabowo-Sandi)\nHei "+nama+", menu apa yang ingin anda pilih?=> ")
        if pilih=="1":
            print("Lihat paslon 1 (Jokowi-Makruf)")
            import matplotlib.image as mpimg
            img = mpimg.imread("paslon1.jpg")
            imgplot = plt.imshow(img)
            plt.title("PASANGAN CALON NOMOR URUT 1\nJoko Widodo-Makruf Amin", fontsize=20)
            plt.show()
                        
        elif pilih=="2":
            print("Lihat paslon 2 (Prabowo-Sandi)")
            import matplotlib.image as mpimg
            img = mpimg.imread("paslon2.jpg")
            imgplot = plt.imshow(img)
            plt.title("PASANGAN CALON NOMOR URUT 2\nPrabowo Subianto-Sandiaga Uno", fontsize=20)
            plt.show()
        print("\n")
        fitur()
        menu = int(input("hei "+nama+", masukkan pilihan menu : "))
                    
                    
    elif menu==4:
        print("Cek Hasil")
        pilih=input("1. Cek hasil voting keseluruhan\n2. berdasar provinsi\n3. berdasar kabopaten/kota\nHei "+nama+", menu apa yang ingin anda pilih?=> ")
        if pilih=="1":
            print("Cek hasil voting keseluruhan")
            data = pd.read_excel("0433bfc9813002b2a507873f20f1e572.xlsx")
            total1 = sum(data["NOMOR 01"])
            total2 = sum(data["NOMOR 02"])
            print(data)
            print("paslon 01 mendapat total suara sebanyak",total1)
            print("paslon 02 mendapat total suara sebanyak",total2)
            series = [total1,total2]
            names=["PASLON 01", "PASLON 02"]
            fig=plt.figure()
            fig = plt.figure(figsize = (10, 10))
            plt.pie(series, labels=names, wedgeprops={'edgecolor':'black', 'linewidth': '2'}, autopct='%1.1f%%')
            plt.show()
        elif pilih=="2":
            print("Lihat hasil akhir berdasar provinsi")
            data = pd.read_excel("0433bfc9813002b2a507873f20f1e572.xlsx")
            while(True):
                try:
                    x=input("masukkan nama provinsi : ")
                    provinsi=data[data["NAMA_PROV"]==x]
                    total1 = sum(provinsi["NOMOR 01"])
                    total2 = sum(provinsi["NOMOR 02"])
                    print(provinsi)
                    print("paslon 01 di kabupaten/kota "+x+" mendapat total suara sebanyak",total1)
                    print("paslon 02 di kabupaten/kota "+x+" mendapat total suara sebanyak",total2)
                    series = [total1,total2]
                    names=["PASLON 01", "PASLON 02"]
                    fig=plt.figure()
                    fig = plt.figure(figsize = (10, 10))
                    plt.pie(series, labels=names, wedgeprops={'edgecolor':'black', 'linewidth': '2'}, autopct='%1.1f%%')
                    plt.show()  
                except:
                    print("Provinsi yang anda masukkan tidak terdata, silahkan input nama provinsi dengan huruf kapital.")
                else:
                    break

        elif pilih=="3":
            print("Lihat hasil akhir berdasar kabopaten/kota")
            data = pd.read_excel("0433bfc9813002b2a507873f20f1e572.xlsx")
            while(True):
                try:
                    x=input("masukkan nama kabupaten/kota : ")
                    kabkot=data[data["NAMA_KAB/KOTA"]==x]
                    total1 = sum(kabkot["NOMOR 01"])
                    total2 = sum(kabkot["NOMOR 02"])
                    print(kabkot)
                    print("paslon 01 di kabupaten/kota "+x+" mendapat total suara sebanyak",total1)
                    print("paslon 02 di kabupaten/kota "+x+" mendapat total suara sebanyak",total2)
                    series = [total1,total2]
                    names=["PASLON 01", "PASLON 02"]
                    fig = plt.figure(figsize = (10, 10))
                    plt.pie(series, labels=names, wedgeprops={'edgecolor':'black', 'linewidth': '2'}, autopct='%1.1f%%')
                    plt.show()
                except:
                    print("Kabupate/Kota yang anda masukkan tidak terdata, silahkan input nama Kabupaten/Kota dengan huruf kapital.")
                else:
                    break
        print("\n")
        fitur()
        menu = int(input("hei "+nama+", masukkan pilihan menu : "))

    elif menu==5:
        print("Cek Hoax Pemilu")
        with open("hoax.json") as jsonya:
            hoax = json.loads(jsonya.read())
            for baca in hoax["HOAX PEMILU"]:
                print(baca)
        print("\n")
        fitur()
        menu = int(input("hei "+nama+", masukkan pilihan menu : "))

    elif menu==6:
        print("Anda telah keluar dari aplikasi")
        break
    else:
        print("Pilihan menu yang anda masukkan salah")
        fitur()
        menu = int(input("hei "+nama+", masukkan pilihan menu : "))

