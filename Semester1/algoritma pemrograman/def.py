print("""
1. Rumus suku ke-n
2. Rumus suku tengah
3. Rumus deret aritemetika""")
aksi = input("rumus mana yang ingin anda pilih (1/2/3) : ")
while aksi=="1" or aksi=="2" or aksi=="3":
    if aksi=="1":
        def suku_ke_n():
            a = int(input("masukkan suku pertama pada barisan tersebut : "))
            b = int(input("masukkan beda atau selisih dari barisan tersebut : "))
            nu = int(input("masukkan suku ke berapa yang ingin dicari : "))
            Un = a+(nu-1)*b
            print("suku ke-",nu,"pada barisan tersebut adalah :",Un)
        suku_ke_n()

    elif aksi=="2":
        def suku_tengah():
            a = int(input("masukkan suku pertama pada barisan tersebut : "))
            b = int(input("masukkan beda atau selisih dari barisan tersebut : "))
            n = int(input("banyaknya suku pada barisan aritmetika tersebut adalah : "))
            if n%2 != 0:
                U = int((n+1)/2)
                Un = a+(U-1)*b
                print("suku tengahnya ada pada suku ke-",U,"yakni",Un)
            else:
                U = int(n/2)
                Un = a+(U-1)*b
                U2 = int((n/2)+1)
                Un2 = a+(U2-1)*b
                print("suku tengahnya ada pada suku ke-",U,"yakni",Un,"dan pada suku ke-",U2,"yakni",Un2)
        suku_tengah()

    elif aksi=="3":
        def jumlah_deret():
            a = int(input("masukkan suku pertama pada barisan tersebut : "))
            b = int(input("masukkan beda atau selisih dari barisan tersebut : "))
            n = int(input("banyaknya suku pada barisan aritmetika tersebut adalah : "))
            Sn = (0.5*n)*((2*a)+(n-1)*b)
            print("jumlah deret aritmetika pada deret tersebut adalah",Sn)
        jumlah_deret()
    else:
        print("inputan salah")
    aksi = input("rumus mana yang ingin anda pilih (1/2/3) : ")
