print("Program untuk membantu andi yang sedang belajar menghitung luas segitiga")
#Program luas segitiga
#Program ini dibuat untuk membantu andi menghitung luas segitiga
#Rumus luas segitiga adalah = ((Alas*Tinggi)/2) yakni dengan mengalikan panjang alas dengan tinggi segitiga lalu dibagi 2 

#masukkan data panjang alas dan tinggi segitiga
#saya menggunakan float karena kemungkinan hasil yang dikeluarkan adalah dalam bentuk desimal
Alas = float(input("Masukkan Panjang Alas Segitiga : "))
Tinggi = float(input("Masukkan Tinggi Segitiga: "))

#rumus untuk menghitung luas segitiga
luas = (Alas*Tinggi)/2

#hasil luas segitiga
print("Luas segitiga adalah :", luas)