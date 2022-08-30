#Prgoram untuk membantu Ali yang sedang belajar menulis kata
#Program ini menampilkan informasi panjang kata yang diinputkan, huruf depan, dan huruf terakhir

#gunakan input agar bisa menulis kata yang akan di hitung
masukkan_kata = input("Masukan Kata: ")

#Jadikan variable "masukan_kata" menjadi sebuah nilai dalam variable "pisah"
#split() digunakan untuk memisahkan setiap kalimat
pisah = masukkan_kata.split()

#nilai dari variable "pisah" kita masukan ke sebuah variable baru bernama hitung_jumlah_kata.
#Setelah itu len() digunakan untuk menghitung panjang
hitung_jumlah_kata = len(pisah)

#mencetak dan menghitung jumlah kata
print ("Jumlah Kata: ", hitung_jumlah_kata)

#mencetak dan menghitung jumlah karakter
print ("Jumlah Karakter: ", len(masukkan_kata))

#menampilkan huruf pertama dan terakhir
#indeks pertama dalam pemrograman adalah 0
#sedangkan indeks -1 adalah urutan pertama dari belakang
print("huruf pertama : " +masukkan_kata[0])
print("huruf terakhir : " +masukkan_kata[-1])