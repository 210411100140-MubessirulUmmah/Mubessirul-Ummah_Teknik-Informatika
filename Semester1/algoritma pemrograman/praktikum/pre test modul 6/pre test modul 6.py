print("pilihan : ","1. Menu Makanan dan Minuman","2. menambahkan menu","3. menghapus menu, 4. try except, 5. keluar")
pilihan = int(input("Masukkan pilihan (1. Menu Makanan dan Minuman,2.menambhakan menu,3. menghapus menu, try except, 5. keluar) : "))

while (True):
    if pilihan == 1:
        print("MENU MAKANAN")
        import json
        with open("makanan.json") as jsonya:
            lihat_menu = json.loads(jsonya.read())
            for menu_makanan in lihat_menu:
                print(menu_makanan)
            print("----------------")
            for makanan in lihat_menu["foods"]:
                print(makanan)
                
        print("\n")
        
        print("MENU MINUMAN")            
        import json
        with open("minuman.json") as jsonya:
            lihat_menu = json.loads(jsonya.read())
            for menu_minuman in lihat_menu:
                print(menu_minuman)
            print("----------------")
            for minuman in lihat_menu["drinks"]:
                print(minuman)
        print("\n")
    elif pilihan == 2:
        inpaksi = input("ingin menambah menu apa? 1. makanan 2. minuman : ")
        if inpaksi == "1":
            print("Makanan")
            import json
            with open("makanan.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                for menu_makanan in lihat_menu:
                    print(menu_makanan)
                print("----------------")
                for makanan in lihat_menu["foods"]:
                    print(makanan)
            with open("makanan.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                print("\n")
                print("Tambah menu makanan")
                tambah_makan = input("ingin menambahkan makanan apa :")
                lihat_menu["foods"].append(tambah_makan)
                for makanan in lihat_menu["foods"]:
                    print(makanan)
            print("=================")
            print("penambahan menu selesai")
            print("\n")
        elif inpaksi == "2":
            print("Minuman")
            import json
            with open("minuman.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                for menu_minuman in lihat_menu:
                    print(menu_minuman)
                print("----------------")
                for minuman in lihat_menu["drinks"]:
                    print(minuman)
            with open("minuman.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                print("Tambah menu makanan")
                print("\n")
                tambah_minum = input("ingin menambahkan makanan apa :")
                lihat_menu["drinks"].append(tambah_minum)
                for minuman in lihat_menu["drinks"]:
                    print(minuman)
            print("=================")
            print("penambahan menu selesai")
            print("\n")

    elif pilihan==3:
        inpaksi = input("ingin menghapus menu apa? 1. makanan 2. minuman : ")
        if inpaksi == "1":
            print("Makanan")
            import json
            with open("makanan.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                for menu_makanan in lihat_menu:
                    print(menu_makanan)
                print("----------------")
                for makanan in lihat_menu["foods"]:
                    print(makanan)
            with open("makanan.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                print("\n")
                print("Hapus menu makanan")
                kurang_makan = input("ingin menghapus makanan apa :")
                lihat_menu["foods"].remove(kurang_makan)
                for makanan in lihat_menu["foods"]:
                    print(makanan)
            print("=================")
            print("penambahan menu selesai")
            print("\n")
        if inpaksi == "2":
            print("Minuman")
            import json
            with open("minuman.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                for menu_minuman in lihat_menu:
                    print(menu_minuman)
                print("----------------")
                for minuman in lihat_menu["drinks"]:
                    print(minuman)
            with open("minuman.json") as jsonya:
                lihat_menu = json.loads(jsonya.read())
                print("\n")
                print("Hapus menu minuman")
                kurang_minum = input("ingin menghapus makanan apa :")
                lihat_menu["drinks"].remove(kurang_minum)
                for minuman in lihat_menu["drinks"]:
                    print(minuman)
            print("=================")
            print("penambahan menu selesai")
            print("\n")

    elif pilihan == 4:
        menu = (input("Masukkan menu yang ingin ditambahkan : "))
        try:
            angka = int(input("masukkan harga : "))
            print(menu,"seharga :",angka)
        except:
            print("inputan salah, silahkan masukkan input yang benar (sebuah angka)")
        else:
            print("tidak ada kesalahan input")
        finally:
            print("program selesai")
        
    elif pilihan == 5:
        print("pemesanan selesai")
        break
    pilihan = int(input("Masukkan pilihan (1. Menu Makanan dan Minuman,2.menambhakan menu,3. menghapus menu, try except, 5. keluar) : "))
