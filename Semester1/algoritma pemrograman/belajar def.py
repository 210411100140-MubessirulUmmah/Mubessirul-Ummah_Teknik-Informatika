print("Barisan dan Deret arimetika")
print("1. Rumus suku ke-n")
print("2. Rumus suku tengah barisan aritmetika")
print("3. Rumus n suku pertama deret aritmetika")
aksi = input("rumus apa yang anda pilih (1/2/3) : ")
print("______________________________________")
print("""keterangan :
a = suku pertama
b = beda atau selisih antar suku
n = banyaknya suku
nu = suku ke-
Un = suku ke-n
Ut = suku tengah
Sn = jumlah suku pertama sampai suku ke-n
______________________________________""")

while aksi=="1" or aksi=="2" or aksi=="3":
    if aksi == "1":
        a = int(input("masukkan suku pertama barisan tersebut : "))
        b = int(input("masukkan beda barisan tersebut : "))
        nu = int(input("masukkan suku ke berapa yang anda cari pada barisan tersebut : "))
        Un = a+(nu-1)*b
        print("suku ke-"+str(nu)+" pada barisan tersebut adalah",Un)
      
    
    elif aksi == "2":
        def suku_sisipan():
            a = int(input("masukkan suku pertama barisan tersebut : "))
            b = int(input("masukkan beda barisan tersebut : "))
            n = int(input("masukkan banyaknya suku dalam barisan tersebut : "))
            if n%2 != 0:
                U = int((n+1)/2)
                Un = a+(U-1)*b
                print("suku tengahnya ada pada suku ke-",U,"yakni",Un)
            else:
                U = int(n/2)
                Un = a+(U-1)*b
                U2 = int(n/2)+1
                Un2 = a+(U2-1)*b
                print("suku tengahnya ada pada suku ke-",U,"yakni",Un,"dan suku ke-",U2,"yakni",Un2)
        suku_sisipan()

    elif aksi == "3":
        def n_suku_pertama():
            n = int(input("masukkan banyaknya suku dalam barisan tersebut : "))
            a = int(input("masukkan suku pertama barisan tersebut : "))
            b = int(input("masukkan beda barisan tersebut : "))
            Sn = (n/2)*(2*a+(n-1)*b)
            print("jumlah",n,"suku pertama deret aritmetika tersebut adalah",Sn)
        n_suku_pertama()

    else:
        print("inputan salah")

    aksi = input("rumus apa yang anda pilih (1/2/3) : ")
