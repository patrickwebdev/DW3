/* Most common SQL commands */

--1-Create a database
CREATE DATABASE users;

--2-Use a database
USE users;

--3-Create a table: to add the columns, their datatype and size, key, default value and other characteristics
CREATE TABLE teachers( 
    id INT(5) PRIMARY KEY AUTO_INCREMENT, 
    fname VARCHAR(50) NOT NULL, 
    lname VARCHAR(50) NOT NULL, 
    birthday DATE NOT NULL, 
    email VARCHAR(40) NOT NULL, 
    phone VARCHAR(15) NOT NULL,
    department VARCHAR(50) NOT NULL 
); 

--4-Describe a database: to view the table’s columns and data types
DESCRIBE teachers;
DESC teachers;

--5-Insert a row: to insert 1 set of data in the columns of a table
INSERT INTO teachers(fname, lname, birthday, email, phone,department)
VALUES('Patrick','Saint-Louis','1804-01-01','psl@psl.ca','514-000-0000','IT'); 

INSERT INTO teachers(fname, lname, birthday, email, phone,department)
VALUES('Mickael','Jourdain','2004-12-12','mj@mj.ca','418-000-0000','Sports');

INSERT INTO teachers(fname, lname, birthday, email, phone,department)
VALUES('Hello','Canada','1909-09-09','hc@hc.ca','000-000-0000','IT');

--6-Update a record: to replace a value saved for a row in a column
UPDATE teachers SET lname='Jordan' WHERE birthday='2004-12-12';

--7-Delete a row: to remove a row from the records
DELETE FROM teachers WHERE phone='000-000-0000'; 

--8-Select data: to extract data from a table corresponding to the query used
SELECT * FROM teachers;
SELECT fname, lname FROM teachers;
SELECT fname, lname FROM teachers ORDER BY id;
SELECT fname, lname FROM teachers GROUP BY department;
SELECT DISTINCT fname, lname FROM teachers;
SELECT COUNT(*) FROM teachers; 
SELECT * FROM teachers WHERE birthday='2004-12-12';

--9-Drop: to delete a table or database
DROP TABLE teachers;
DROP DATABASE users;
