print("program cetak")
price1 = "1.45"
price2 = "2.38"
print("price 1 : $"+price1+"\n"+"price 2 : $"+price2)

print("\n")

print("program untuk menghitung harga diskon Barang")
nama_barang = input("masukkan nama barang : ")
harga_barang = float(input("masukkan harga "+nama_barang+" : "))
jumlah_diskon = float(input("Masukkan besaran diskon : "))
diskon = jumlah_diskon/100
harga_setelah_diskon = harga_barang-(harga_barang * diskon)
print("jadi harga dari",nama_barang,"yang saya beli setelah mendapat diskon sebesar ",jumlah_diskon,"% adalah Rp.",harga_setelah_diskon)

print("\n")

print("program untuk menghitung nilai mata uang Rupiah ke dollar dan sebaliknya")
print("=================PILIHAN MENU=================")
print("1. Menghitung Nilai Mata Uang Rupiah ke Dolar")
print("2. Menghitung Nilai Mata Uang Dolar ke Rupiah")

menu = int(input("Masukkan pilihan anda (1/2): "))
while(True):
    if menu == 1:
        rupiah = int(input("Masukkan nilai mata uang rupiah : "))
        RP_KE_DR = rupiah*0.000071
        print(rupiah, "rupiah =",RP_KE_DR, "dolar")
    elif menu == 2:
        dolar = int(input("Masukkan nilai mata uang dollar : "))
        DR_KE_RP = dolar*14191.20
        print(dolar, "dolar =",DR_KE_RP, "rupiah")
    else:
        print("pilhan menu salah Masukkan pilihan anda (1/2)")

    print("\n")
    print("=================PILIHAN MENU=================")
    print("1. Menghitung Nilai Mata Uang Rupiah ke Dolar")
    print("2. Menghitung Nilai Mata Uang Dolar ke Rupiah")

    menu = int(input("Masukkan pilihan anda (1/2): "))
