list_nama = ["mubes","fajar","rian","anto","herman","abdul","nita","viola","dina","endah"
        ,"bela","kiky","vita","anita","pratiwi","nasihin","rio","ina","ika","fina"]
list_nilai = [33,55,35,64,64,38,67,85,96,46,23,87,90,32,76,46,88,65,15,89]
soal = input("masukkan jenis soal : ")
while(True):
    if soal=="a":
        def nilai_tertinggi(list_nilai):
          nilai_terbesar = list_nilai[0]
          for nilai in list_nilai:
            if nilai > nilai_terbesar:
              nilai_terbesar = nilai

          return nilai_terbesar
        tertinggi = max(list_nilai)
        index_a = list_nilai.index(tertinggi)
        print(list_nama[index_a],"memperoleh nilai tertinggi dengan nilai =",nilai_tertinggi(list_nilai))

        def nilai_terendah(list_nilai):
          nilai_terkecil = list_nilai[0]
          for nilai in list_nilai:
            if nilai < nilai_terkecil:
              nilai_terkecil = nilai

          return nilai_terkecil
        terendah = min (list_nilai)
        index_b = list_nilai.index(terendah)
        print(list_nama[index_b],"memperoleh nilai terendah dengan nilai =",nilai_terendah(list_nilai))

        for list_nama,list_nilai in zip(list_nama,list_nilai):
            print(list_nama,"mendapat nilai =", list_nilai)
            
    elif soal=="b":
        list_nama = ["mubes","fajar","rian","anto","herman","abdul","nita","viola","dina","endah"
        ,"bela","kiky","vita","anita","pratiwi","nasihin","rio","ina","ika","fina"]
        list_nilai = [33,55,35,64,64,38,67,85,96,46,23,87,90,32,76,46,88,65,15,89]
        for list_nama,list_nilai in zip(list_nama,list_nilai):
            if list_nilai > 65:
                print(list_nama,"lulus dengan nilai",list_nilai)
            else:
                continue
    
    elif soal=="c":
        list_nama = ["mubes","fajar","rian","anto","herman","abdul","nita","viola","dina","endah"
        ,"bela","kiky","vita","anita","pratiwi","nasihin","rio","ina","ika","fina"]
        list_nilai = [33,55,35,64,64,38,67,85,96,46,23,87,90,32,76,46,88,65,15,89]
        for list_nama,list_nilai in zip(list_nama,list_nilai):
            if list_nilai <= 65:
                print(list_nama,"tidak lulus karena mendapat nilai",list_nilai)
            else:
                continue

    elif soal == "d":
        list_nama = ["mubes","fajar","rian","anto","herman","abdul","nita","viola","dina","endah"
        ,"bela","kiky","vita","anita","pratiwi","nasihin","rio","ina","ika","fina"]
        list_nilai = [33,55,35,64,64,38,67,85,96,46,23,87,90,32,76,46,88,65,15,89]
        nilai = [33,55,35,64,64,38,67,85,96,46,23,87,90,32,76,46,88,65,15,89]
        list_nilai.sort()
        list_nilai.reverse()
        cek_peringkat = 0
        ranking = 0
        print ("Peringkat 1-10 :")
        for i in range (0,10):
            ranking = ranking+1
            nilainya = list_nilai[cek_peringkat]
            index_nilai = nilai.index(nilainya)
            print (ranking,".",list_nama[index_nilai],":",nilainya)
            cek_peringkat = cek_peringkat+1
    print("================")
    soal = input("masukkan jenis soal : ")

