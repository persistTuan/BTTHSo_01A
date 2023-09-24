--1 
SELECT baiviet.* FROM baiviet
WHERE baiviet.ma_tloai in (SELECT theloai.ma_tloai FROM theloai WHERE theloai.ten_tloai = 'Phoeniconaias minor');
--2
SELECT baiviet.* FROM baiviet
WHERE baiviet.ma_tgia in (SELECT tacgia.ma_tgia FROM tacgia WHERE tacgia.ten_tgia = 'lwilloughway0 minor');

--3
SELECT theloai.* FROM theloai
WHERE theloai.ma_tloai NOT IN  (SELECT baiviet.ma_tloai FROM baiviet);

--4
SELECT DISTINCT * FROM baiviet 
INNER JOIN theloai, tacgia WHERE baiviet.ma_tloai = theloai.ma_tloai || baiviet.ma_tgia = tacgia.ma_tgia;

--5 
SELECT baiviet.ma_tloai FROM baiviet
GROUP BY baiviet.ma_tloai
HAVING COUNT(baiviet.ma_tloai) >= ALL (SELECT COUNT(baiviet.ma_tloai) FROM baiviet
													GROUP BY baiviet.ma_tloai)

--6
SELECT DISTINCT baiviet.ma_tloai FROM baiviet
GROUP BY baiviet.ma_tloai
LIMIT 2;

--7
SELECT * FROM baiviet 
WHERE baiviet.ten_bhat LIKE '%yêu%' OR baiviet.ten_bhat LIKE '%thương%' OR baiviet.ten_bhat LIKE '%anh%'
 
--8



													
													
													
													
													
														