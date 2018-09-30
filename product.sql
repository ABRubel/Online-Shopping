drop TABLE Product;
CREATE TABLE Product(
   Model_No  VARCHAR (30) NOT NULL,
   Price int,
   Stock int NOT NULL,
   Brand_Name VARCHAR (30) NOT NULL,
   RAM VARCHAR (50),
   ROM VARCHAR (50),
   Camera VARCHAR (50) ,
   Processor VARCHAR (50),
   DiscountFromCompany decimal(18,2),
   DiscountFromWebsite decimal(18,2),
   Discount_Date date,
   Release_Date date NOT NULL,
   image longblob NOT NULL,
   buys int,
   PRIMARY KEY (Model_No)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


