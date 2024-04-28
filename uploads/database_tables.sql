-- Database: loginsystemtut

CREATE TABLE users (
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
uidUsers TINYTEXT NOT NULL,
emailUsers TINYTEXT NOT NULL,
pwdUsers LONGTEXT NOT NULL
);


CREATE TABLE imgupload (
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	status int(11) NOT NULL
);