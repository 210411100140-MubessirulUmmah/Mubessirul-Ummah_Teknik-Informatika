dbuku = ["matematika","laskar pelangi","belajar shalat"]
textfile = open("dbuku.txt", "w")
for element in dbuku:
    textfile.write(element + "/n")
textfile.close()
