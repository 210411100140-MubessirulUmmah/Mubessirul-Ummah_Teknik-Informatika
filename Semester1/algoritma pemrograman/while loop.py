print("Tombol p untuk melanjutkan hitungan")
print("Tombol r untuk mereset hitungan menjadi 0")
penghitung = 0
while (True):
 Tombol = (input("Tekan tombol (p/r) ! : "))
 if Tombol == "p" :
     #penghitung += 1
     print (penghitung+=1)
 elif Tombol == "r" :
     penghitung = 0
     print(penghitung)
 else :
     print("Tombol salah, tekan tombol (p/r)!")
