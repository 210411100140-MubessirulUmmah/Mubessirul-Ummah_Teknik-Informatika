print("program menukar nilai variable")
angka_1 = float(input("masukkan angka pertama : "))
angka_2 = float(input("masukkan angka kedua : "))
while(True):
    if angka_1 > angka_2:
        print("angka pertama =",angka_1,"lebih besar dari angka kedua =",angka_2,"maka nilai kedua variable akan ditukar")
        angka_1,angka_2 = angka_2,angka_1
        print("angka pertama adalah =",angka_1,"dan angka kedua adalah =",angka_2)
    else:
        print("angka 1 =",angka_1,"tidak lebih besar dari angka 2 =",angka_2,"maka nilai kedua variable tidak akan ditukar")
        print("angka pertama adalah =",angka_1,"dan angka kedua adalah =",angka_2)
    print("\n")
    angka_1 = float(input("masukkan angka pertama : "))
    angka_2 = float(input("masukkan angka kedua : "))

print("\n")

print("program kapan user berusia 50 tahun")
nama = input("masukkan nama anda : ")
usia = int(input("berapa usia anda : "))
tahun = 2021
umur_tujuan = 50
kurang_berapa_tahun = (umur_tujuan-usia)
kapan = kurang_berapa_tahun+tahun
print(kurang_berapa_tahun,"tahun lagi anda akan berusia 50 tahun yakni pada tahun",kapan)

print("\n")

print("program suit dengan input disembunyikan")
import getpass
player_1 = getpass.getpass("masukkan pilihan suit player 1(gunting/batu/kertas) : ")
player_2 = getpass.getpass("masukkan pilihan suit player 2(gunting/batu/kertas) : ")
while(True):
    if player_1 == "gunting" and player_2 == "batu":
        print("player 2 pemenangnya, karena player 2 yang menginputkan",player_2,"menang atas player 1 yang menginputkan",player_1)
    elif player_1 == "batu" and player_2 == "gunting":
        print("player 1 pemenangnya, karena player 1 yang menginputkan",player_1,"menang atas player 2 yang menginputkan",player_2)
    elif player_1 == "kertas" and player_2 == "batu":
        print("player 1 pemenangnya, karena player 1 yang menginputkan",player_1,"menang atas player 2 yang menginputkan",player_2)
    elif player_1 == "batu" and player_2 == "kertas":
        print("player 2 pemenangnya, karena player 2 yang menginputkan",player_2,"menang atas player 1 yang menginputkan",player_1)
    elif player_1 == "gunting" and player_2 == "kertas":
        print("player 2 pemenangnya, karena player 2 yang menginputkan",player_2,"menang atas player 1 yang menginputkan",player_1)
    elif player_1 == "kertas" and player_2 == "gunting":
        print("player 1 pemenangnya, karena player 1 yang menginputkan",player_1,"menang atas player 2 yang menginputkan",player_2)
    elif player_1 == player_2:
        print("hasil seri, karena player 1 menginputkan",player_1,"dan juga player 2 yang sama menginputkan",player_2)
    else:
        print("pilihan suit salah, masukkan pilhan suit(gunting/batu/kertas) : ")

    player_1 = getpass.getpass("masukkan pilihan suit player 1(gunting/batu/kertas) : ")
    player_2 = getpass.getpass("masukkan pilihan suit player 2(gunting/batu/kertas) : ")
