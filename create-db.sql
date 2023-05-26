CREATE TABLE users (
   user_ID INT(4) AUTO_INCREMENT PRIMARY KEY,
   username  VARCHAR(20) NOT NULL,
   password  VARCHAR(30) NOT NULL,
   email VARCHAR(30) NOT NULL
);

CREATE TABLE items(
   item_ID INT AUTO_INCREMENT PRIMARY KEY,
   item_name VARCHAR(50) NOT NULL,
   price  INT(5) NOT NULL,
   description VARCHAR(15),
   img_url VARCHAR(255)
);

CREATE TABLE user_session (
   ID INT AUTO_INCREMENT PRIMARY KEY,
   user_ID INT,
   FOREIGN KEY (user_ID) REFERENCES users(user_ID),
   session_ID VARCHAR(10),
   ip_adress INT(12) NOT NULL,
   login_time INT(50)
);

