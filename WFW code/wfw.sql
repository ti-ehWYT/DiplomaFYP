CREATE TABLE locations (
id INT(10) NOT NULL AUTO_INCREMENT,
name VARCHAR(150) NOT NULL,
email varchar(30) NOT NULL,
address VARCHAR(255) NOT NULL,
lat DECIMAL(10,6) NOT NULL,
lng DECIMAL(10,6) NOT NULL,
description TEXT NOT NULL,
phone varchar(30),
status varchar(20),
PRIMARY KEY (id)
);

INSERT INTO locations  (Name,Email,Address,Lat,Lng,Description,phone,status)
VALUES 
('Ping Pong','ping@yahoo.com','Persiaran Korporat KLIA, 64000 Sepang, Selangor',2.7413,101.7015,'No income.. need food.. allergic to peanut..thank you','0122222222','done'),
('Dura Ian','du@lol.com','Genting Highlands, 69000 Genting Highlands, Pahang',3.4236,101.7916,'Need a shelter for 3 people.. me, my wife and my daughter..thank you','0122121121','done');

CREATE TABLE staff (
sid INT(10) NOT NULL,
sname VARCHAR(150) NOT NULL,
pwd INT(20) NOT NULL,
PRIMARY KEY (sid)
)；

INSERT INTO staff (sid,sname,pwd)
VALUES 
(001,'Wanyen', 001),
(002,'Chua', 002); 

CREATE TABLE foodbank (
  id int(255) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  hour varchar(255) NOT NULL,
  number int(255) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO foodbank (id, name, address, hour, number) VALUES
(1, 'Chui Bin Chua', '31, Lorong Seri Setali 115,Jalan Air Putih', 'Monday- Sunday 9am - 5pm', 199893438),
(2, 'Derek Chua', '31, Lorong Seri Setali 115', 'Monday- Sunday 9am - 5pm', 1131203086),
(3, 'Chua Zhong Hong', '31, Lorong Seri Setali 115', 'Monday- Sunday 9am - 5pm', 1131203086),
(4, 'chua', '31, Lorong Seri Setali 115', 'Monday- Sunday 9am - 5pm', 1131203086);