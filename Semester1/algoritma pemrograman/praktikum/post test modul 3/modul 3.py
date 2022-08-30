"""
x = int(input('Masukan Nilai :'))
for i in range (x,0,-1):
    p=i*x
    print(p)
x = int(input("masukkan angka : "))
angka=x**2
while(True):
    if angka >= 1:
        print(angka)
        angka-=x
"""
"""
z = int(input('Masukan Nilai :'))
for i in range (z,0,-1):
    print(i)
z = int(input("masukkan angka : "))
while(True):
    if z>=1:
        print(z)
        z-=1
"""
print("=====KETERANGAN======")
print("Y = iya\nT = tidak")

hitungan = 0
inpaksi = input("ingin menghitung? iya atau tidak (Y/T) : ")
while(True):
    if inpaksi == "Y":
        hitungan+=1
        print("hitungan ke-",hitungan)
    elif inpaksi == "T":
        break
    else:
        print("inputan salah")
    inpaksi = input("ingin melanjutkan hitungan? iya atau tidak (Y/T) : ")

##stop = False
##temp = ''
##while not(stop):
##    num = int(input("Masukkan Angka : "))
##    temp=temp+' '+str(num)
##    user = input("Lagi? y/t ")
##    if user == 't':
##        stop = True
##    print(temp)

