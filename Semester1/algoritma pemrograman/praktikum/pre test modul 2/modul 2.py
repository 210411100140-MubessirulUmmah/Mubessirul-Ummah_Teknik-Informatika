print("kasus 1 : menentukan  prima")
angka = int(input("Masukkan angka: "))
if angka > 1:
    for i in range(2,angka):
       if (angka % i) == 0:
           print (angka,"bukan bilangan prima")
           print ("karena",angka,"dibagi",i,"hasilnya adalah",angka//i)
           break
    else:
       print (angka,"adalah bilangan prima")
else:
    print (angka,"bukan bilangan prima")
    
print("                         ")
print("===========================")
print("                         ")

print("kasus 2 : mencari angka kelipatan 4")       
angka = int(input("Masukkan angka: "))
if angka == 0:
    print(angka,"bukan kelipatan 4")
elif angka%4 == 0:
    print(angka,"merupakan kelipatan 4")
else:
    print(angka,"bukan kelipatan 4")
