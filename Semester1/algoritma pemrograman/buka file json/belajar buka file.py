dbuku = ['mtk','bindo','ipa']
textfile = open('dbuku.txt','w')
for element in dbuku :
    textfile.write(element + '\n')
textfile.close()

dbuku = []
with open('dbuku.txt') as file :
    for baris in file :
        baris = baris.strip()
        dbuku.append(baris)
print(dbuku)

variable = open('data.txt','w')
variable.write('bacot')
variable.close()
