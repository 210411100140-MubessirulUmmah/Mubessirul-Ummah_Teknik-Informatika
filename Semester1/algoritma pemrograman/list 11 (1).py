buah = ['Jeruk', 'Melon', 'Apel', 'Anggur', 'Semangka', 'Manggis', 'Pisang',
        'Durian', 'Nangka', 'Semangka', 'Nanas', 'Kiwi', 'Manggis', 'Mangga',
        'Stroberi', 'Pepaya', 'Alpukat', 'Ceri', 'Jambu', 'Kurma', 'Sirsak']

print('-----MENU-----')
print("","1. Melihat isi list\n","2. Menambah isi list\n",
      "3. Menghapus isi list\n","4. Menyimpan list ke file\n",
      "5. Keluar dari menu\n")

y = int(input("Pilih menu (1/2/3/4/5) : "))
z = True
while(z):
    if y==1:
        print(buah)
    elif y==2:
        a = int(input("Masukkan index list : "))
        b = str(input("Masukkan list yang ingin ditambahkan : "))
        buah.insert(a-1,b)
        print("Isi list setelah ditambahkan : ", buah)
    elif y==3:
        m = int(input("Masukkan index list : "))
        del buah[m-1]
        print("Isi list setelah dihapus : ")
    elif y==4:
        text=open ("List buah","w")
        for h in buah:
            text.write(h+"\n")
        text.close()
    else:
        break
        
