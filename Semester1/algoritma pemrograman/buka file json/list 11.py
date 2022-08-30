karakter_anime = []

print('-----MENU-----')
print("""
1. Melihat isi list
2. Menambah isi list
3. Menghapus isi list
4. selesai
""")

inp_aksi = int(input("Pilihan menu (1/2/3/4)! : "))
while(True):
    if inp_aksi == 1:
        with open("karakter_anime.txt") as file :
            for list in file:
                list = list.strip()
                karakter_anime.append(list)
        print(karakter_anime)
                
    elif inp_aksi == 2:
        data = str(input("Tambahkan karakter anime : "))
        karakter_anime.append(data)
        list_file = open("karakter_anime.txt", "w")
        for list in karakter_anime:
            list_file.write(list + "\n")
        list_file.close
        print(karakter_anime)
        
    elif inp_aksi == 3:
        data = str(input("hapus karakter anime : "))
        karakter_anime.remove(data)
        list_file = open("karakter_anime.txt", "w")
        for list in karakter_anime:
            list_file.write(list + "\n")
        list_file.close
        print(karakter_anime)

    elif inp_aksi == 4:
        text = open ("karakter_anime","w")
        for h in karakter_anime:
            text.write(h+"\n")
        text.close()
    else:
        break
        
    inp_aksi = int(input("Pilihan menu (1/2/3/4/5)! : "))
