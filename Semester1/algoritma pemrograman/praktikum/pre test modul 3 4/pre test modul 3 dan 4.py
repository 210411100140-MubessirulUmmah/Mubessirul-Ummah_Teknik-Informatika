print("program menentukan kelipatan 3, mulai dari angka ke-3 sampai ke-n")
print("\n")
print("menggunakan modulus")
angka_tujuan = int(input("masukkan batas atas angka kelipatan 3 : "))
for angka in range(3,angka_tujuan+1):
    if angka%3 == 0:
        print(angka)

print("\n")

#atau bisa langsung rentang dan interval
print("menggunakan range dan interval")
angka_tujuan = int(input("Masukkan batas atas angka kelipatan 3 : "))
for angka in range (3,angka_tujuan+1,3):
    print(angka)

print("\n")

list_nama = ["mubes","fajar","rian","anto","herman","abdul","nita","viola","dina","endah"
        ,"bela","kiky","vita","anita","pratiwi","nasihin","rio","ina","ika","fina"]
list_nilai = [33,55,35,64,64,38,67,85,96,46,23,87,90,32,76,46,88,65,15,89]

def nilai_tertinggi(list_nilai):
  nilai_terbesar = list_nilai[0]
  for nilai in list_nilai:
    if nilai > nilai_terbesar:
      nilai_terbesar = nilai

  return nilai_terbesar
print("nilai tertingginya adalah =",nilai_tertinggi(list_nilai))

def nilai_terendah(list_nilai):
  nilai_terkecil = list_nilai[0]
  for nilai in list_nilai:
    if nilai < nilai_terkecil:
      nilai_terkecil = nilai

  return nilai_terkecil
print("nilai terendahnya adalah =",nilai_terendah(list_nilai))

for list_nama,list_nilai in zip(list_nama,list_nilai):
    print(list_nama, "mendapat nilai =", list_nilai)
