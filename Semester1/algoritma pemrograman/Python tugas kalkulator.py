print ("hello world")
#include.h
# Program Penjumlahan Dua Bilangan 
# Meminta inputan dari user

bil1 = input('Masukkan bilangan 1: ')
bil2 = input('Masukkan bilangan 2: ')
perintah = input('masukkan perintah : ')
# Menjumlahkan bilangan 
if perintah == "a":
    jumlah = float(bil1) + float(bil2)
print('Jumlah {0} + {1} adalah {2}'.format(bil1, bil2, jumlah))

# pengurangan bilangan
jumlah = float(bil1) - float(bil2)
print('Jumlah {0} - {1} adalah {2}'.format(bil1, bil2, jumlah))

# perkalian bilangan
jumlah = float(bil1) * float(bil2)
print('Jumlah {0} * {1} adalah {2}'.format(bil1, bil2, jumlah))

# pembagian bilangan 
jumlah = float(bil1) / float(bil2)
print('Jumlah {0} / {1} adalah {2}'.format(bil1, bil2, jumlah))

# sisa bagi
jumlah = float(bil1) % float(bil2)
print('Jumlah {0} % {1} adalah {2}'.format(bil1, bil2, jumlah))


