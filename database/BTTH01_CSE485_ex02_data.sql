CREATE DATABASE  BTTH01_CSE485;
USE  BTTH01_CSE485;
CREATE TABLE tacgia(
ma_tgia INT UNSIGNED NOT NULL PRIMARY KEY,
ten_tgia VARCHAR(100) NOT NULL ,
hinh_tgia VARCHAR(100)
)
ALTER TABLE tacgia CHANGE COLUMN ma_tgia ma_tgia INT UNSIGNED NOT NULL AUTO_INCREMENT;

CREATE TABLE baiviet(
ma_bviet INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
tieude VARCHAR(200) NOT NULL ,
ten_bhat VARCHAR(100) NOT NULL,
ma_tloai INT UNSIGNED NOT NULL,
tomtat TEXT ,
noidung TEXT ,
ma_tgia INT UNSIGNED NOT NULL,
ngayviet DATETIME DEFAULT CURRENT_TIMESTAMP,
hinhanh VARCHAR(200),
FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai),
FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia)
)


CREATE TABLE theloai (
ma_tloai INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
ten_tloai VARCHAR(50) NOT NULL
)

insert into tacgia (ten_tgia, hinh_tgia) values ('lwilloughway0', 'Luna');
insert into tacgia (ten_tgia, hinh_tgia) values ('ghansford1', 'Cigebrok');
insert into tacgia (ten_tgia, hinh_tgia) values ('ebehan2', 'Mekarsari');
insert into tacgia (ten_tgia, hinh_tgia) values ('byanov3', 'Gafanha da Encarnação');
insert into tacgia (ten_tgia, hinh_tgia) values ('oweems4', 'Bobigny');
insert into tacgia (ten_tgia, hinh_tgia) values ('scirlos5', 'Laowobao');
insert into tacgia (ten_tgia, hinh_tgia) values ('oslott6', 'Fuyo');
insert into tacgia (ten_tgia, hinh_tgia) values ('mmcaughtrie7', 'Dresden');
insert into tacgia (ten_tgia, hinh_tgia) values ('jdurtnal8', 'Ordzhonikidzevskaya');
insert into tacgia (ten_tgia, hinh_tgia) values ('agibbin9', 'Pilar');
insert into tacgia (ten_tgia, hinh_tgia) values ('fmorebya', 'Cigintung');
insert into tacgia (ten_tgia, hinh_tgia) values ('sradenhurstb', 'Matsushima');
insert into tacgia (ten_tgia, hinh_tgia) values ('dmapamc', 'Pata');
insert into tacgia (ten_tgia, hinh_tgia) values ('dhandysided', 'Kristiansund N');
insert into tacgia (ten_tgia, hinh_tgia) values ('amoverleye', 'Černožice');
insert into tacgia (ten_tgia, hinh_tgia) values ('sbiaggionif', 'Husów');
insert into tacgia (ten_tgia, hinh_tgia) values ('nvaarg', 'Bunutan');
insert into tacgia (ten_tgia, hinh_tgia) values ('stownendh', 'Shūsh');
insert into tacgia (ten_tgia, hinh_tgia) values ('tgilsthorpei', 'Tmourghout');
insert into tacgia (ten_tgia, hinh_tgia) values ('skachelerj', 'Roubaix');
insert into tacgia (ten_tgia, hinh_tgia) values ('sdunnank', 'Riangbao');
insert into tacgia (ten_tgia, hinh_tgia) values ('agreenhalfl', 'Bila Krynytsya');
insert into tacgia (ten_tgia, hinh_tgia) values ('ntrayesm', 'Hengzhou');
insert into tacgia (ten_tgia, hinh_tgia) values ('gstainsn', 'Tagbilaran City');
insert into tacgia (ten_tgia, hinh_tgia) values ('pgroucocko', 'Lanxi');
insert into tacgia (ten_tgia, hinh_tgia) values ('mbishellp', 'Cicuco');
insert into tacgia (ten_tgia, hinh_tgia) values ('dporttq', 'Chilmāri');
insert into tacgia (ten_tgia, hinh_tgia) values ('acarsonr', 'Bromma');
insert into tacgia (ten_tgia, hinh_tgia) values ('ashippeys', 'Nikolayevsk');
insert into tacgia (ten_tgia, hinh_tgia) values ('bskoylest', 'Batubantar');
insert into tacgia (ten_tgia, hinh_tgia) values ('vneadsu', 'Yaojiagou');
insert into tacgia (ten_tgia, hinh_tgia) values ('gattewv', 'Kumla');
insert into tacgia (ten_tgia, hinh_tgia) values ('acoww', 'Camrose');
insert into tacgia (ten_tgia, hinh_tgia) values ('mhubnerx', 'Cẩm Phả Mines');
insert into tacgia (ten_tgia, hinh_tgia) values ('ascroggiey', 'Yinying');
insert into tacgia (ten_tgia, hinh_tgia) values ('rheamz', 'Youhao');
insert into tacgia (ten_tgia, hinh_tgia) values ('vsmaling10', 'Kota Kinabalu');
insert into tacgia (ten_tgia, hinh_tgia) values ('pbastie11', 'Žrnovnica');
insert into tacgia (ten_tgia, hinh_tgia) values ('cspurrior12', 'Qingshuihe');
insert into tacgia (ten_tgia, hinh_tgia) values ('pbiskupek13', 'Plaridel');
insert into tacgia (ten_tgia, hinh_tgia) values ('gupstell14', 'Majagual');
insert into tacgia (ten_tgia, hinh_tgia) values ('tromanski15', 'Leitões');
insert into tacgia (ten_tgia, hinh_tgia) values ('mkillgus16', 'Nanaimo');
insert into tacgia (ten_tgia, hinh_tgia) values ('lkerrey17', 'Okpo');
insert into tacgia (ten_tgia, hinh_tgia) values ('mcasper18', 'Qimeng');
insert into tacgia (ten_tgia, hinh_tgia) values ('dpeteri19', 'Antsiranana');
insert into tacgia (ten_tgia, hinh_tgia) values ('jhumphries1a', 'Lau');
insert into tacgia (ten_tgia, hinh_tgia) values ('medwicker1b', 'Morales');
insert into tacgia (ten_tgia, hinh_tgia) values ('ckubas1c', 'Vrbovec');
insert into tacgia (ten_tgia, hinh_tgia) values ('rgouly1d', 'Kashar');

-- ------------------------------------------


insert into theloai (ma_tloai,ten_tloai) VALUES (1,'Phoeniconaias minor');

insert into theloai (ten_tloai) values ('Ovibos moschatus');
insert into theloai (ten_tloai) values ('Ephippiorhynchus mycteria');
insert into theloai (ten_tloai) values ('Equus hemionus');
insert into theloai (ten_tloai) values ('Alopex lagopus');
insert into theloai (ten_tloai) values ('Nucifraga columbiana');
insert into theloai (ten_tloai) values ('Bison bison');
insert into theloai (ten_tloai) values ('unavailable');
insert into theloai (ten_tloai) values ('Felis rufus');
insert into theloai (ten_tloai) values ('Kobus vardonii vardoni');
insert into theloai (ten_tloai) values ('Acridotheres tristis');
insert into theloai (ten_tloai) values ('Cervus duvauceli');
insert into theloai (ten_tloai) values ('Felis concolor');
insert into theloai (ten_tloai) values ('Felis chaus');
insert into theloai (ten_tloai) values ('Grus rubicundus');
insert into theloai (ten_tloai) values ('Zosterops pallidus');
insert into theloai (ten_tloai) values ('Cervus unicolor');
insert into theloai (ten_tloai) values ('Melophus lathami');
insert into theloai (ten_tloai) values ('Tragelaphus strepsiceros');
insert into theloai (ten_tloai) values ('Marmota flaviventris');
insert into theloai (ten_tloai) values ('Cervus canadensis');
insert into theloai (ten_tloai) values ('Merops bullockoides');
insert into theloai (ten_tloai) values ('Litrocranius walleri');
insert into theloai (ten_tloai) values ('Crotalus triseriatus');
insert into theloai (ten_tloai) values ('Streptopelia senegalensis');
insert into theloai (ten_tloai) values ('Cordylus giganteus');
insert into theloai (ten_tloai) values ('Francolinus leucoscepus');
insert into theloai (ten_tloai) values ('Chelodina longicollis');
insert into theloai (ten_tloai) values ('Macaca mulatta');
insert into theloai (ten_tloai) values ('unavailable');
insert into theloai (ten_tloai) values ('Estrilda erythronotos');
insert into theloai (ten_tloai) values ('Lycosa godeffroyi');
insert into theloai (ten_tloai) values ('Ciconia ciconia');
insert into theloai (ten_tloai) values ('Caiman crocodilus');
insert into theloai (ten_tloai) values ('Coluber constrictor');
insert into theloai (ten_tloai) values ('Varanus komodensis');
insert into theloai (ten_tloai) values ('Crotalus cerastes');
insert into theloai (ten_tloai) values ('Aegypius tracheliotus');
insert into theloai (ten_tloai) values ('Sula dactylatra');
insert into theloai (ten_tloai) values ('Carduelis uropygialis');
insert into theloai (ten_tloai) values ('Naja nivea');
insert into theloai (ten_tloai) values ('Connochaetus taurinus');
insert into theloai (ten_tloai) values ('Varanus sp.');
insert into theloai (ten_tloai) values ('Petaurus breviceps');
insert into theloai (ten_tloai) values ('Cracticus nigroagularis');
insert into theloai (ten_tloai) values ('Morelia spilotes variegata');
insert into theloai (ten_tloai) values ('Varanus salvator');
insert into theloai (ten_tloai) values ('Otaria flavescens');
insert into theloai (ten_tloai) values ('Canis aureus');
insert into theloai (ten_tloai) values ('Aegypius occipitalis');
truncate table theloai;

---------------------------------------------------------------------

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) 
VALUES ('Tình yêu', 'I Will Always Love You', 01, 'Nói về tình yêu ...', 'abcdef', 02, 'picture004' );

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) 
VALUES ('Hy vọng', 'Yêu', 01, 'Nói về tình yêu ...', 'abcdef', 02, 'picture004' );

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, ma_tgia, hinhanh) 
VALUES ('Tình yêu', 'Anh yêu em', 01, 'abcdef', 03, 'picture004' );

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) 
VALUES ('Sông', 'Anh không thương em', 02, 'Nói về tình yêu ...', 'abcdef', 03, 'picture004' );

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) 
VALUES ('Thương nhau', 'I Will Always Love You', 03, 'Nói về tình yêu ...', 'abcdef', 01, 'picture004' );
