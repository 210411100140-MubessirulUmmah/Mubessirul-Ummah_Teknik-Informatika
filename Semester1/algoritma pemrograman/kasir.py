nama_barang = input("masukkan nama susu : ")
harga = float (input("masukkan harga susu : "))
print("jika kita membeli susu : ", nama_barang)
print("maka kita harus membayar dengan harga: ", harga)
jumlah_beli = int(input("masukan jumlah barang yang anda beli: "))
total = harga * jumlah_beli   
diskon_akhir_pekan = (total-total*(10/100))
promo_akhir_bulan = jumlah_beli*(30/100)
tambahan_kotak_susu = promo_akhir_bulan
total_kotak_susu_promo_akhir_bulan = (tambahan_kotak_susu+jumlah_beli)
print("harga total = ",total)
print("saat akhir minggu, ada diskon sebesar 10%, anda cukup membayar = ", diskon_akhir_pekan)
print("total tambahan kotak susu :", tambahan_kotak_susu)
print("ada promo akhir bulan, anda mendapat kotak susu sebanyak = ", total_kotak_susu_promo_akhir_bulan)