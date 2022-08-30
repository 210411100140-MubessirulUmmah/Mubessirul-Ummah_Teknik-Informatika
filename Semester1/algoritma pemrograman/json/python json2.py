makanan = []
minuman = []
pesan_makanan = []
pesan_minuman = []
print("pilihan : ","1. Menu Makanan dan Minuman","2.Pemesanan","3. Keluar")
pilihan = int(input("Masukkan pilihan (1. Menu Makanan dan Minuman,2.Pemesanan,3. Keluar) : "))

while (True):
    if pilihan == 1:
        print("MENU MAKANAN")
##        import json
##        with open("makanan.json") as jsonya:
##            lihat_menu = json.loads(jsonya.read())
##            for menu_makanan in lihat_menu:
##                print(menu_makanan)
##            print("----------------")
##            for makanan in lihat_menu["foods"]:
##                print(makanan)
        import json
        file_json = open("makanan.json")
        data = json.loads(file_json.read())
        print(data)
                
        print("\n")
        
##        print("MENU MINUMAN")            
##        import json
##        with open("minuman.json") as jsonya:
##            lihat_menu = json.loads(jsonya.read())
##            for menu_minuman in lihat_menu:
##                print(menu_minuman)
##            print("----------------")
##            for minuman in lihat_menu["drinks"]:
##                print(minuman)
        print("\n")
    elif pilihan == 2:
        inpaksi = input("1. makanan 2. minuman : ")
        if inpaksi == "1":
            print("pesan makanan")
            import json
            with open("makanan.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                for menu_makanan in lihat_menu:
                    print(menu_makanan)
                print("----------------")
                for makanan in lihat_menu["foods"]:
                    print(makanan)
            nama = input("masukkan nama anda : ")
            pilih = input("pilih makanan yang ingi dibeli : ")
            jumlah = input("ingin beli berapa bungkus : ")
            pesan_makanan = {"nama": [nama], "makanan": [pilih+" "+ jumlah+" bungkus"]}
            with open("pesan_makanan.json", "w") as json_file:
                json.dump(pesan_makanan, json_file)
            with open("pesan_makanan.json") as jsonya:
                data_pesanan = json.loads(jsonya.read())
                for data in data_pesanan["nama"]:
                    print("nama : ",data)
                for data in data_pesanan["makanan"]:
                    print("pesanan : ",data)
            print("pemesanan selesai")
            print("\n")
        elif inpaksi == "2":
            print("pesan minuman")
            import json
            with open("minuman.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                for menu_minuman in lihat_menu:
                    print(menu_minuman)
                print("----------------")
                for minuman in lihat_menu["drinks"]:
                    print(minuman)
            nama = input("masukkan nama anda : ")
            pilih = input("pilih minuman yang ingin dibeli : ")
            jumlah = input("ingin beli berapa bungkus : ")
            pesan_minuman = {"nama": [nama], "minuman": [pilih+" "+ jumlah+" bungkus"]}
            with open("pesan_minuman.json", "w") as json_file:
                json.dump(pesan_minuman, json_file)
            with open("pesan_minuman.json") as jsonya:
                data_pesanan = json.loads(jsonya.read())
                for data in data_pesanan["nama"]:
                    print("nama : ",data)
                for data in data_pesanan["minuman"]:
                    print("pesanan : ",data)
            print("pemesanan selesai")
            print("\n")

    elif pilihan == 3:
        print("pemesanan selesai")
        break
    pilihan = int(input("Masukkan pilihan (1. Menu Makanan dan Minuman,2.Pemesanan,3. Keluar) : "))
