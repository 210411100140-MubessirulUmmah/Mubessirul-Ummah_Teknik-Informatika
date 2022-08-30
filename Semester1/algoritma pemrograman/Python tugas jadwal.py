#Jadwal kuliah Mubessirul Ummah
#untuk menampilkan jadwal mata kuliah mubes dalam 1 minggu

#Menginput hari (Senin/Selasa/Rabu/Kamis/Jumat/Sabtu/Minggu)
hari_ini = (input('Masukkan nilai: '))

#Hari selasa mubes ada mata kuliah, 
#maka program akan menampilkan "Mubes masuk kuliah, ada matkul PTI JAM 07.00 - 09.30 WIB dan BAHASA INGGRIS JAM 09.30 - 12.00 WIB"
if(hari_ini == "Selasa"):
    print("Mubes masuk kuliah,ada matkul PENGANTAR TEKNOLOGI INFORMASI JAM 07.00 - 09.30 WIB dan BAHASA INGGRIS JAM 09.30 - 12.00 WIB")


#Hari rabu mubes ada mata kuliah, maka program akan menampilkan "Mubes masuk kuliah, ada matkul MATEMATIKA TEKNIK JAM 09.30 - 12.00 WIB"
elif(hari_ini == "Rabu"):
    print("Mubes masuk kuliah, ada matkul MATEMATIKA TEKNIK JAM 09.30 - 12.00 WIB")


#Hari kamis mubes ada mata kuliah, maka program akan menampilkan "Mubes masuk kuliah, ada matkul BAHASA INDONESIA JAM 10.20 - 12.00 WIB"
elif(hari_ini == "Kamis"):
    print("Mubes masuk kuliah, ada matkul BAHASA INDONESIA JAM 10.20 - 12.00 WIB")


#HARI jumat mubes ada mata kuliah, 
# maka program akan menampilka "Mubes masuk kuliah, ada matkul LE JAM 07.00 - 08.40 WIB dan ALPRO DASAR JAM 13.00 -15.30 WIB"
elif(hari_ini == "Jumat"):
    print("Mubes masuk kuliah, ada matkul LOGIKA ENGINEERINGK JAM 07.00 - 08.40 WIB dan ALGORITMA DAN PEMROGRAMAN DASAR JAM 13.00 -15.30 WIB")


#Hari sabtu mubes tidak ada jadwal mata kuliah, maka program akan menampilkan "Mubes libur, Tidak ada jadwal mata kuliah"
elif(hari_ini == "Sabtu"):
    print("Mubes libur, Tidak ada jadwal mata kuliah")


#Hari minggu mubes tidak ada jadwal mata kuliah, maka program akan menampilkan "Mubes libur, Tidak ada jadwal mata kuliah"
elif(hari_ini == "Minggu"):
    print("Mubes libur, Tidak ada jadwal mata kuliah")


#Hari senin mubes tidak ada jadwal mata kuliah, maka program akan menampilkan "Mubes libur, Tidak ada jadwal mata kuliah"
elif(hari_ini == "Senin"):
    print("Mubes libur, Tidak ada jadwal mata kuliah")