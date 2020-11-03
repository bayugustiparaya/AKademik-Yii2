CREATE TABLE dosen (
nip varchar(18) NOT NULL PRIMARY KEY,
nama varchar(50) NOT NULL,
alamat varchar(50) NOT NULL, 
nohp varchar(13) );

INSERT INTO dosen VALUES ('198104152006041002', 'Deddy Prayama', 'Padang', '085376419700');
INSERT INTO dosen (nip, nama, alamat) VALUES ('198104152006041009', 'Deddy Prayama', 'Padang');
INSERT INTO dosen VALUES ('1811082018', 'Bayu Gusti Parya', 'Payakumbuh', '081271077073');
INSERT INTO dosen (nip, nama, alamat) VALUES ('01811082018', 'Bayu Gusti Paraya', 'Payakumbuah');