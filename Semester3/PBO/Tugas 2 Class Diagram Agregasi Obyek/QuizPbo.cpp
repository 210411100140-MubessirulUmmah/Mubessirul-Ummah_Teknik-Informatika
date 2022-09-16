#include <iostream>
#include <string>

using namespace std;

/*1. Mata Kuliah*/
class Matakuliah {
    public:
        string name_Matakuliah, code_Matakuliah;
        int semester;
        void setName(string nameMatkul) {
            this->name_Matakuliah = nameMatkul;
        }
        void setCode(string codeMatkul) {
            this->code_Matakuliah = codeMatkul;
        }
        void setSemester(int semesterMatkul){
            this->semester = semesterMatkul;
        }
        string getName(){
            return name_Matakuliah;
        }
        string getCode(){
            return code_Matakuliah;
        }
        int getSmester(){
            return semester;
        }
};


/*2. KHS*/
class KHS {
    private:
        string KHS_Matkul;
        int nilai;
        string mahasiswa;
        Matakuliah matkul;
    public:
        void setMatakuliah(string KHS_Matkul) {
            matkul.setName(KHS_Matkul);
        }
        void setNilai(int nilai) {
            this->nilai = nilai;
        }
        void setMahasiswa(string mahasiswa) {
            this->mahasiswa = mahasiswa;
        }
        string getMatakuliah() {
            return matkul.getName();
        }
        int getNilai() {
            return nilai;
        }
        string getMahasiswa() {
            return mahasiswa;
        }
};

/*3. Student*/
class Mahasiswa {
    private:
        string nama;
        int semester;
        string alamat;
        KHS khs;
    public:
        void setNama(string nama) {
            this->nama = nama;
        }
        void setSemester(int semester) {
            this->semester = semester;
        }
        void setAlamat(string alamat) {
            this->alamat = alamat;
        }
        void setKHS(KHS khs) {
            this->khs = khs;
        }
        string getNama() {
            return nama;
        }
        int getSemester() {
            return semester;
        }
        string getAlamat() {
            return alamat;
        }
        KHS getKHS() {
            return khs;
        }
};

/*4. Program Study*/
class Prodi {
    private:
        string nama;
        string kode;
        Mahasiswa mahasiswa;
    public:
        void setNama(string nama) {
            this->nama = nama;
        }
        void setKode(string kode) {
            this->kode = kode;
        }
        void setMahasiswa(Mahasiswa mahasiswa) {
            this->mahasiswa = mahasiswa;
        }
        string getNama() {
            return nama;
        }
        string getKode() {
            return kode;
        }
        Mahasiswa getMahasiswa() {
            return mahasiswa;
        }
};

/*Input*/
int main() {
    Prodi prodi;
    Mahasiswa mahasiswa;
    KHS khs;

    string nama, alamat, KHS_Matkul;
    int nilai,semester;

    cout << "\n\n===== Class Diagram Agregasi Obyek =====\n";
    /*input nama prodi*/
    cout << "Nama Prodi : ";
    getline(cin, nama);
    prodi.setNama(nama);

    /*input kode prodi*/
    cout << "Kode Prodi : ";
    getline(cin, nama);
    prodi.setKode(nama);

    /*input nama mahasiswa*/
    cout << "Nama Mahasiswa : ";
    getline(cin, nama);
    mahasiswa.setNama(nama);

    /*input semester*/
    cout << "Semester : ";
    cin >> semester;
    mahasiswa.setSemester(semester);

    /*input alamat student*/
    cout << "Alamat : ";
    getline(cin >> ws, alamat);
    mahasiswa.setAlamat(alamat);

    /*input nama mata kuliah*/
    cout << "Mata Kuliah : ";
    getline(cin >> ws, KHS_Matkul);
    khs.setMatakuliah(KHS_Matkul);

    /*input nilai*/
    cout << "Nilai : ";
    cin >> nilai;
    khs.setNilai(nilai);

    mahasiswa.setKHS(khs);
    prodi.setMahasiswa(mahasiswa);

/*Data Akhir*/
    cout << "\n========= Hasil Output ==========\n" << endl;
    cout << "Nama Prodi : " << prodi.getNama() << endl;
    cout << "Kode Prodi : " << prodi.getKode() << endl;
    cout << "Nama Mahasiswa : " << prodi.getMahasiswa().getNama() << endl;
    cout << "Semester : " << prodi.getMahasiswa().getSemester() << endl;
    cout << "Alamat : " << prodi.getMahasiswa().getAlamat() << endl;
    cout << "Mata Kuliah : " << prodi.getMahasiswa().getKHS().getMatakuliah() << endl;
    cout << "Nilai : " << prodi.getMahasiswa().getKHS().getNilai() << endl;

    return 0;
}