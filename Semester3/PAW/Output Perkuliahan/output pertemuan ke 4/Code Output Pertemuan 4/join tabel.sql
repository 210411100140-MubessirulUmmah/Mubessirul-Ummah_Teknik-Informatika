SELECT * FROM tbl_mhs
INNER JOIN fakultas ON tbl_mhs.id_fakultas = fakultas.id_fakultas

SELECT * FROM tbl_mhs LEFT JOIN fakultas 
ON tbl_mhs.id_fakultas=fakultas.id_fakultas;

SELECT * FROM fakultas RIGHT JOIN tbl_mhs 
ON fakultas.id_fakultas=tbl_mhs.id_fakultas;