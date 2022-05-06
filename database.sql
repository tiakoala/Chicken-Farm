CREATE TABLE Farmer ( 
SSN SERIAL, 
Name VARCHAR(255), 
Address VARCHAR(255), 
PhoneNumber NUMERIC(10), 
PRIMARY KEY(SSN)
);

CREATE TABLE Chicken (
ChickenID SERIAL, 
Healthy BOOL, 
FoodConsumed FLOAT, 
PRIMARY KEY(ChickenID)
);


CREATE TABLE Rooster (
ChickenID SERIAL, 
Healthy BOOL, 
FoodConsumed FLOAT, 
PRIMARY KEY(ChickenID),
FOREIGN KEY (ChickenID) REFERENCES Chicken(ChickenID)
ON UPDATE CASCADE
ON DELETE RESTRICT
);

CREATE TABLE Hen (
ChickenID SERIAL, 
Healthy BOOL, 
FoodConsumed FLOAT, 
eggsPerDay INTEGER,
eggsLayed INTEGER,
PRIMARY KEY(ChickenID),
FOREIGN KEY (ChickenID) REFERENCES Chicken(ChickenID)
ON UPDATE CASCADE
ON DELETE RESTRICT
);


CREATE TABLE Coops (
CoopID SERIAL, 
numChickens INTEGER, 
status_of_coop BOOL, 
PRIMARY KEY(CoopID)
);

CREATE TABLE Eggs (
EggID SERIAL, 
Hatchable BOOL, 
Sellable BOOL, 
Cracked BOOL, 
PRIMARY KEY(EggID)
);


/*
CREATE TABLE Feeds (
SSN SERIAL NOT NULL,
ChickenID SERIAL NOT NULL,
FOREIGN KEY (SSN) REFERENCES Farmer(SSN)
ON UPDATE CASCADE
ON DELETE RESTRICT,
FOREIGN KEY (ChickenID) REFERENCES Chicken(ChickenID)
ON UPDATE CASCADE
ON DELETE RESTRICT
);


CREATE TABLE Contains (
CoopID SERIAL NOT NULL,
ChickenID SERIAL NOT NULL,
PRIMARY KEY(CoopID),
FOREIGN KEY (CoopID) REFERENCES Coops(CoopID)
ON UPDATE CASCADE
ON DELETE RESTRICT,
FOREIGN KEY (ChickenID) REFERENCES Chicken(ChickenID)
ON UPDATE CASCADE
ON DELETE RESTRICT
);

CREATE TABLE Hatches (
EggID SERIAL NOT NULL,
ChickenID SERIAL NOT NULL,
FOREIGN KEY (EggID) REFERENCES Eggs(EggID)
ON UPDATE CASCADE
ON DELETE RESTRICT,
FOREIGN KEY (ChickenID) REFERENCES Chicken(ChickenID)
ON UPDATE CASCADE
ON DELETE RESTRICT
);

CREATE TABLE Maintains (
SSN SERIAL NOT NULL,
CoopID SERIAL NOT NULL,
FOREIGN KEY (SSN) REFERENCES Farmer(SSN)
ON UPDATE CASCADE
ON DELETE RESTRICT,
FOREIGN KEY (CoopID) REFERENCES Coops(CoopID)
ON UPDATE CASCADE
ON DELETE RESTRICT
);
*/
INSERT INTO Farmer
VALUES ('123456789', 'Taylor Coffey', '2360 Vandenberg Dr', '7193333333');

INSERT INTO Farmer
VALUES('987654321', 'Tia Kolakowski', '2360 Vandenberg Dr', '7193333333');

INSERT INTO Farmer
VALUES('567891234', 'Peter Ye', '2360 Vandenberg Dr', '7193333333');

INSERT INTO Chicken
VALUES('001', '1', '3.5');

INSERT INTO Chicken
VALUES('002', '1', '4');

INSERT INTO Chicken
VALUES('003', '0', '1');

INSERT INTO Chicken
VALUES('004', '1', '3');

INSERT INTO Rooster
VALUES('001', '1', '3.5');

INSERT INTO Hen
VALUES('002', '1', '4', '1', '15'); 

INSERT INTO Hen
VALUES('003', '0', '1', '0', '4');

INSERT INTO Hen
VALUES('004', '1', '3', '2', '20');
/*
INSERT INTO Feeds
VALUES(123456789, 001)

INSERT INTO Feeds
VALUES(123456789, 002)

INSERT INTO Feeds
VALUES(987654321, 003)

INSERT INTO Feeds
VALUES(567891234, 004)

INSERT INTO Coops
VALUES(69, 420, TRUE);

INSERT INTO Coops
VALUES(20, 23, TRUE);

INSERT INTO Contains
VALUES(69, 001);

INSERT INTO Contains
VALUES(69, 002);

INSERT INTO Contains
VALUES(20, 003);

INSERT INTO Eggs
VALUES(123, TRUE, TRUE, FALSE);

INSERT INTO Eggs
VALUES(321, TRUE, FALSE, FALSE);

INSERT INTO Hatches
VALUES(002, 123);

INSERT INTO Hatches
VALUES(004, 321);

INSERT INTO Maintains
VALUES(123456789, 69);

INSERT INTO Maintains
VALUES(987654321, 20);
*/

INSERT INTO Eggs
VALUES(1, 1, 0, 0);

INSERT INTO Eggs
VALUES(2, 1, 0, 0);

INSERT INTO Eggs
VALUES(3, 0, 1, 0);

INSERT INTO Eggs
VALUES(4, 0, 0, 1);

INSERT INTO Eggs
VALUES(5, 0, 1, 0);

INSERT INTO Eggs
VALUES(6, 1, 0, 0);