DROP TABLE IF EXISTS `cake`;
CREATE TABLE `cake`
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(255),
    description TEXT DEFAULT NULL,
    image VARCHAR(255) DEFAULT NULL,
    price NUMBER,
    created_at DATETIME
);

INSERT INTO `cake` 
(id , name                       , image                          , price , created_at) VALUES
(1  , 'Chocolate Blackout Cake'  , 'uploads/chocblackoutcake.jpg'  , 40.00 , datetime('now'))   ,
(2  , 'Chocolate Raspberry Cake' , 'uploads/chocraspberrycake.jpg' , 30.00 , datetime('now'))   ,
(3  , 'Chocolate Coconut Cake'   , 'uploads/choccoconutcake.jpg'   , 32.00 , datetime('now'))
;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`
(
    id INT PRIMARY KEY NOT NULL,
    name VARCHAR(255)
);

INSERT INTO `category`
(id , name) VALUES
(1  , 'Chocolate'),
(2  , 'Raspberry'),
(3  , 'Coconut')
;

DROP TABLE IF EXISTS `cake_category`;
CREATE TABLE `cake_category`
(
    cake_id INT NOT NULL,
    category_id INT NOT NULL,
    PRIMARY KEY (cake_id, category_id),
    FOREIGN KEY (cake_id) REFERENCES cake(id),
    FOREIGN KEY (category_id) REFERENCES category(id)
);

INSERT INTO `cake_category`
(cake_id , category_id) VALUES
(1       , 1)                  ,
(2       , 1)                  ,
(3       , 1)                  ,
(2       , 2)                  ,
(3       , 3)
;
