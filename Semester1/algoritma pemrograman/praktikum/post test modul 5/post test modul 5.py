order = input("login aplikasi\nklik pilihan menu : ")
while(True):
    if order == "pilihan menu":
        print("pilihan : ","1. Menu Makanan dan Minuman","2.Order","3. Keluar")
        pilihan = int(input("Masukkan pilihan (1. Menu Makanan dan Minuman, 2.Order, 3. Keluar) : "))
         
        while (True):
            if pilihan == 1:
                print("\nDaftar menu makanan dan minuman\n")
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
                print("\nsilahkan lakukan pemesanan\n")
                inpaksi = input("apa yang ingin anda pesan? 1. makanan 2. minuman : ")
                if inpaksi == "1":
                    import json
                    with open("makanan.json") as jsonya:
                        lihat_menu = json.loads(jsonya.read())
                        for menu_makanan in lihat_menu:
                            print(menu_makanan)
                        print("----------------")
                        for makanan in lihat_menu["foods"]:
                            print(makanan)
                    nama = input("\nmasukkan nama anda : ")
                    pilih = input("pilih makanan yang ingin dibeli : ")
                    jumlah = input("ingin beli berapa bungkus : ")
                    makanan = ["nasi pecel","nasi goreng","rawon","soto babi","mie goreng"]
                    harga = [5000,8000,15000,20000,4000]
                    pesan_makanan = {"nama": [nama], "makanan": [pilih+" "+jumlah+" bungkus"]}
                    index_harga = makanan.index(pilih)
                    tagihan = int((harga[index_harga])*(int(jumlah)))
                    with open("pesan_makanan.json", "w") as json_file:
                        json.dump(pesan_makanan, json_file)
                    with open("pesan_makanan.json") as jsonya:
                        data_pesanan = json.loads(jsonya.read())
                        for data in data_pesanan["nama"]:
                            print("nama : ",data)
                        for data in data_pesanan["makanan"]:
                            print("pesanan : ",data)
                    print("Tagihan sebesar Rp.",tagihan)
                    pembayaran = int(input("lakukan pembayaran : "))
                    while(True):
                        if pembayaran == tagihan:
                            print("pembayaran berhasil\n....Lunas....\nsilahkan nikmati pesanan anda:-)")
                            break
                        elif pembayaran > tagihan:
                            print("kembalian Rp.",pembayaran-tagihan)
                            print("pembayaran berhasil\n....Lunas....\nsilahkan nikmati pesanan anda:-)")
                            break
                        elif pembayaran < tagihan:
                            while pembayaran < tagihan:
                                tagihan = tagihan-pembayaran
                                print("uang anda kurang Rp.",tagihan)
                                print("silahkan lengkapi pembayaran")
                                pembayaran = int(input("lakukan pembayaran : "))
                                if tagihan==0:
                                    print("pembayaran berhasil\n....Lunas....\nsilahkan nikmati pesanan anda:-)")
                                    break
                    print("\n")
                elif inpaksi == "2":
                    import json
                    with open("minuman.json") as jsonya:
                        lihat_menu = json.loads(jsonya.read())
                        for menu_minuman in lihat_menu:
                            print(menu_minuman)
                        print("----------------")
                        for minuman in lihat_menu["drinks"]:
                            print(minuman)
                    nama = input("\nmasukkan nama anda : ")
                    pilih = input("pilih minuman yang ingin dibeli : ")
                    jumlah = input("ingin beli berapa bungkus : ")
                    minuman = ["coffe","tea","water","milk","juz","es cokelat"]
                    harga = [5000,4000,2000,5000,7000,10000]
                    pesan_minuman = {"nama": [nama], "minuman": [pilih+" "+jumlah+" bungkus"]}
                    index_harga = minuman.index(pilih)
                    tagihan = int((harga[index_harga])*(int(jumlah)))
                    with open("pesan_minuman.json", "w") as json_file:
                        json.dump(pesan_minuman, json_file)
                    with open("pesan_minuman.json") as jsonya:
                        data_pesanan = json.loads(jsonya.read())
                        for data in data_pesanan["nama"]:
                            print("nama : ",data)
                        for data in data_pesanan["minuman"]:
                            print("pesanan : ",data)
                    print("Tagihan sebesar Rp.",tagihan)
                    pembayaran = int(input("lakukan pembayaran : "))
                    while(True):
                        if pembayaran == tagihan:
                            print("pembayaran berhasil\n....Lunas....\nsilahkan nikmati pesanan anda:-)")
                            break
                        elif pembayaran > tagihan:
                            print("kembalian Rp.",pembayaran-tagihan)
                            print("pembayaran berhasil\n....Lunas....\nsilahkan nikmati pesanan anda:-)")
                            break
                        elif pembayaran < tagihan:
                            while pembayaran < tagihan:
                                tagihan = tagihan-pembayaran
                                print("uang anda kurang Rp.",tagihan)
                                print("silahkan lengkapi pembayaran")
                                pembayaran = int(input("lakukan pembayaran : "))
                                if tagihan==0:
                                    print("pembayaran berhasil\n....Lunas....\nsilahkan nikmati pesanan anda:-)")
                                    break
                            
                    print("\n")

            elif pilihan == 3:
                print("pemesanan selesai")
                break
            pilihan = int(input("Masukkan pilihan (1. Menu Makanan dan Minuman, 2.Order, 3. Keluar) : "))
    else:
        print("anda telah keluar dari aplikasi\nselamat datang di restaurantnya mubes")
    order = input("login aplikasi\nklik pilihan menu : ")
