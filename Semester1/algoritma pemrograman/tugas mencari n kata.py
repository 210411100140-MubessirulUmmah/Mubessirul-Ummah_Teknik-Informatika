masukkan_kata = str(input("masukkan kata : "))
jumlah_karakter = len(masukkan_kata)
jumlah_karakter_n_pertama = int(input("masukkan jumlah huruf pertama yang ingin dicari : "))
karakter_akhir = int(input("masukkan jumlah huruf pertama yang ingin dicari : "))
n = karakter_akhir
print ("jumlah huruf dalam kalimat tersebut sebanyak : ",jumlah_karakter)
print ("karakter awal dari kata yang anda cari : ", masukkan_kata[0:jumlah_karakter_n_pertama])
print ("karakter akhir dari kata yang anda cari : ", (masukkan_kata[-n:-1])+(masukkan_kata[-1]))
