#include <iostream>
#include <list>
#include <iterator>
#include "Student.h"

using namespace std;


class Prodi 
{
    private :
        string namaProdi,kodeProdi;
        list<Student> mahasiswa;

    public :
        Prodi(string nama = "default" , string kode ="P-000", Student mhs = {"210411100000","default","default",1})
        {
            this->namaProdi = nama;
            this->kodeProdi = kode;
            //this->mahasiswa.insert(this->mahasiswa.begin(),mhs);
        }

        void setDataNama(char mthd = 'i', string nama="default")
        {
            string inputNamaProdi;

            if(mthd == 'i')
            {
                cout<< "-> Inputkan Nama Prodi : ";
                getline(cin >> ws,inputNamaProdi);   
            }
            else
            {
                inputNamaProdi = nama;
            }
            this->namaProdi = inputNamaProdi;
        }

        void setDataKode(char mthd = 'i', string kode="P-000")
        {
            string inputKodeProdi;

            if(mthd == 'i')
            {
                cout<< "-> Inputkan Kode Prodi : ";
                getline(cin >> ws,inputKodeProdi);   
            }
            else
            {
                inputKodeProdi = kode;
            }
            this->kodeProdi = inputKodeProdi;
        }

        void setDataAll()
        {
            this->setDataNama('i');
            this->setDataKode('i');
        }

        void addStudent(Student mhs)
        {
            mhs.setDataAll();
            this->mahasiswa.insert(this->mahasiswa.begin(), mhs);
        }

        void displayStudents()
        {
            typedef list<Student>::iterator mhsIt;
            for(mhsIt i=this->mahasiswa.begin();i != this->mahasiswa.end();++i)
            {
                i->printStudentData();
            }
        }
        void editStudent(string idKeyword)
        {
            typedef list<Student>::iterator mhsIt;
            for(mhsIt i=this->mahasiswa.begin();i != this->mahasiswa.end();++i)
            {
                if(idKeyword == i->getDataId())
                {
                    i->printStudentData();
                    i->setDataAll();
                }
                
            }
        }

        bool searchStudent(string idKeyword)
        {
            bool a = false;
            typedef list<Student>::iterator mhsIt;
            for(mhsIt i=this->mahasiswa.begin();i != this->mahasiswa.end();++i)
            {
                if(idKeyword == i->getDataId())
                {
                    i->printStudentData();
                    a = true;
                }
            }
            return a;
        }

        string getDataNama()
        {
            return this->namaProdi;
        }
        string getKodeProdi()
        {
            return this->kodeProdi;
        }
        void addStudentKhs(string idKeyword)
        {
            typedef list<Student>::iterator mhsIt;
            for(mhsIt i=this->mahasiswa.begin();i != this->mahasiswa.end();++i)
            {
                if(idKeyword == i->getDataId())
                {
                    i->addDataKhs('i');
                }
            }
        }
        void getKhs(string idKeyword)
        {
            typedef list<Student>::iterator mhsIt;
            for(mhsIt i=this->mahasiswa.begin();i != this->mahasiswa.end();++i)
            {
                if(idKeyword == i->getDataId())
                {
                    i->printDataKhs(idKeyword);
                }
            }

        }



};
