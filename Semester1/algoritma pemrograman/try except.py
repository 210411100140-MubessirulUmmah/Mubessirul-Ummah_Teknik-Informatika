"""while True:
    try:
        angka = int(input("masukkan sebuah angka : "))
        print(angka)
    except:
        print("inputan salah / input kosong, silahkan masukkan input yang benar")
    else:
        print("tidak ada kesalahan input")
    finally:
        print("program selesai")


while True:
    try:
        nama = input("masukkan nama anda : ")
        nilai = int(input("masukkan nilai ujian anda : "))
        print(nama+" mendapat nilai "+nilai+" dalam ujian matematika")
    except:
        print("hanya dapat menggabungkan string ke string")
    else:
        print("konversi sukses")
    finally:
        print("program selesai")


while True:
    try:
        penyebut = int(input("masukkan angka penyebut : "))
        pembilang = int(input("masukkan angka pembilang : "))
        hitung = penyebut/pembilang
        print(penyebut,"dibagi",pembilang,"hasilnya adalah",hitung)
    except:
        print("tidak bisa dibagi 0, bagi dengan angka lainnya !")
    else:
        print("pembagian sukses")
    finally:
        print("program selesai")
"""
while True:
    print("nama filenya adalah (karakter_anime)")
    try:
        namafile = input("masukkan nama file anda : ")
        buka = open(namafile+".txt", "r")
        print(buka.read())
    except:
        print("nama file salah, masukkan nama file yang benar !")
    else:
        print("file berhasil dibuka")
    finally:
        print("program selesai")
