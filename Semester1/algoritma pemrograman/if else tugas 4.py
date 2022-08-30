#dalam sebuah kelas matakuliah, nilai akhir di tentukan berdasarkan rata-rata nilai tugas1, nilai tugas2, nilai tugas3, nilai uts dan nilai uas.
#seorang mahasiswa dinyatakan lulus jika nilai akhir diatas 55 dan nilai rata2 tugas > 40.
#buat program untuk membantu dosen menentukan kelulusan mahasiswa.

nilai_tugas_1 = int(input("masukkan nilai tugas 1 : "))
nilai_tugas_2 = int(input("masukkan nilai tugas 2 : "))
nilai_tugas_3 = int(input("masukkan nilai tugas 3 : "))
nilai_UTS = int(input("masukkan nilai UTS : "))
nilai_UAS = int(input("masukkan nilai UAS : "))
nilai_akhir = ((nilai_tugas_1 + nilai_tugas_2 + nilai_tugas_3 + nilai_UTS + nilai_UAS)/5)
nilai_rata2_tugas = ((nilai_tugas_1 + nilai_tugas_2 + nilai_tugas_3)/3)
print("nilai akhir siswa adalah : ", nilai_akhir)
print("nilai rata-rata tugas siswa adalah : ", nilai_rata2_tugas)
if nilai_akhir > 55 and nilai_rata2_tugas > 40:
    print("Siswa dinyatakan lulus")
else:
    print("Siswa dinyatakan tidak lulus")