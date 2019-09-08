-- Create Database

CREATE DATABASE glassesRus;


-- Table structure for customers table

CREATE TABLE customers (
    Id int AUTO_INCREMENT,
    Title varchar(50),
    Surname varchar(50) NOT NULL,
    Firstname varchar(50) NOT NULL,
    PRIMARY KEY (Id)
);

-- Insert values in customers table

INSERT INTO customers (`Title`, `Surname`, `Firstname`) VALUES
('Mrs', 'Smith', 'Lynne'),
('Miss', 'Jones', 'Ann'),
('Mr', 'Brown', 'Simon'),
('Mr', 'Smith', 'David'),
('Mr', 'Bell', 'Peter'),
('Ms', 'Hall', 'Elizabeth'),
('Mr', 'Smith', 'Kevin'),
('Mr', 'Jones', 'Jack'),
('Mr', 'Green', 'Wiliam'),
('Mrs', 'Smith', 'Lynne'),
('Mr', 'Bell', 'Simon'),
('Mr', 'Brown', 'Ian');


-- Table structure for purchases table

CREATE TABLE purchases (
    Id int AUTO_INCREMENT,
    Customers_Id int NOT NULL,
    Day int (10),
    Month int (10),
    Year int (10),
    PRIMARY KEY (Id),
    FOREIGN KEY (Customers_Id) REFERENCES customers(Id)
    
);

-- Insert values in purchases table 

INSERT INTO purchases (`Customers_Id`, `Day`, `Month`, `Year`) VALUES
(2, 3, 9, 2005),
(4, 6, 9, 2005),
(6, 13, 9, 2005),
(2, 22, 9, 2005),
(1, 28, 9, 2005),
(9, 1, 10, 2005),
(7, 1, 10, 2005);


-- TABLE structure in products table

CREATE TABLE products (
    Id int AUTO_INCREMENT,
    Name varchar (50),
    Description varchar (50),
    Quantity int,
    Cost float,
    PRIMARY KEY (Id)
);

-- Insert values in products table

INSERT INTO products (Name, Description, Quantity, Cost) VALUES
('Beer Glass', '600 ml Beer Glass', 345, 3.99),
('Wine Glass', '125 ml Wine Glass', 236, 2.99),
('Wine Glass', '175 ml Wine Glass', 436, 3.5),
('Shot Glass', '50 ml Small Glass', 132, 1.5),
('Spirit Glass', '100 ml Short Glass', 489, 2.5),
('Long Glass', '200 ml Tall Glass', 263, 2.5),
('Beer Glass', '300 ml Beer Glass', 247, 2.99),
('Wine Glass', '225 ml Wine Glass', 96, 3.99);


-- Table structure in purchaseproducts

CREATE TABLE purchaseproducts (
    products_Id int NOT NULL,
    purchases_Id int NOT NULL,
    Quantity int (10),
    Cost float(10),
    FOREIGN KEY (products_Id) REFERENCES products(Id),
    FOREIGN KEY (purchases_Id) REFERENCES purchases(Id)
);

-- Insert values in purchaseproducts table

INSERT INTO purchaseproducts (products_Id, purchases_Id, Quantity, Cost) VALUES
(2, 1, 20, 2.99),
(3, 2, 10, 3),
(8, 2, 30, 4.5),
(6, 3, 25, 2.5),
(3, 4, 10, 3.5),
(4, 4, 100, 1.5),
(5, 4, 40, 3),
(1, 5, 22, 3.99),
(1, 6, 5, 3.99),
(3, 7, 15, 3.5),
(4, 7, 25, 2),
(5, 7, 10, 2.5),
(7, 7, 55, 2.5),
(8, 7, 1, 3.99);

