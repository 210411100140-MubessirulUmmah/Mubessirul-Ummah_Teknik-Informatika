print("membaca sebuah angka dengan batas inputan 3 digit angka")
def terbilang(angka):
    list_terbilang=("","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh", "Delapan","Sembilan","Sepuluh","Sebelas")
    baca = " "
    angka = int(angka)
    if angka >= 0 and angka <= 11:
        baca = list_terbilang[angka]
    elif angka < 20:
        baca = terbilang(angka % 10) + " belas "
    elif angka < 100:
        baca = terbilang(angka / 10) + " Puluh " + terbilang(angka % 10)
    elif angka < 200:
        baca = "Seratus" + terbilang(angka - 100)
    elif angka < 1000:
        baca = terbilang(angka / 100) + " Ratus " + terbilang(angka %100)
    else:
        baca = "inputan salah, masukkan hanya 3 digit angka !"
    return baca
masukkan_angka = input("Masukkan sebuah angka yang ingin dibaca ! : ")
dibaca = terbilang(masukkan_angka)
print("input : ",masukkan_angka)
print("digit angka ke-1 adalah : ", masukkan_angka[0])
print("digit angka ke-2 adalah : ", masukkan_angka[1])
print("digit angka ke-3 adalah : ", masukkan_angka[2])
print("angka tersebut dibaca : ", dibaca)
