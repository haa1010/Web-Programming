CREATE Database mydatabase;
USE mydatabase;

CREATE TABLE Product_Office(
    ProductID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Publisher VARCHAR(100) NOT NULL,
    SKU VARCHAR(10) NOT NULL,
    Platform VARCHAR(20) NOT NULL,
    Image VARCHAR(50) NOT NULL
);
INSERT INTO Product_Office(ProductID, Name, Publisher, SKU, Platform, Image)
VALUES(1, 'Word 2019', 'Microsoft Corp', '0001', 'Windows', 'word.jpeg');

INSERT INTO Product_Office(ProductID, Name, Publisher, SKU, Platform, Image)
VALUES(2, 'Excel 2019', 'Microsoft Corp', '0002', 'Windows', 'excel.jpeg');

INSERT INTO Product_Office(ProductID, Name, Publisher, SKU, Platform, Image)
VALUES(3, 'Power Point 2019', 'Microsoft Corp', '0003', 'Windows', 'power_point.jpeg');

INSERT INTO Product_Office(ProductID, Name, Publisher, SKU, Platform, Image)
VALUES(4, 'Outlook 2019', 'Microsoft Corp', '0004', 'Windows', 'outlook.jpeg');

INSERT INTO Product_Office(ProductID, Name, Publisher, SKU, Platform, Image)
VALUES(1, 'Publisher 2019', 'Microsoft Corp', '0005', 'Windows', 'publisher.jpeg');

INSERT INTO Product_Office(ProductID, Name, Publisher, SKU, Platform, Image)
VALUES(1, 'Visio 2019', 'Microsoft Corp', '0006', 'Windows', 'visio.jpeg');

INSERT INTO Product_Office(ProductID, Name, Publisher, SKU, Platform, Image)
VALUES(1, 'Access 2019', 'Microsoft Corp', '0007', 'Windows', 'access.jpeg');

INSERT INTO Product_Office(ProductID, Name, Publisher, SKU, Platform, Image)
VALUES(1, 'Note 2019', 'Microsoft Corp', '0008', 'Windows', 'note.jpeg');