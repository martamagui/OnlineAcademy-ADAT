DROP database OnlineAcademy;
CREATE DATABASE IF NOT EXISTS OnlineAcademy DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE OnlineAcademy;
CREATE TABLE Courses(
	courseID integer auto_increment NOT NULL,
    title varchar (255) NOT NULL,
    courseDes TEXT NOT NULL,
    rate double,
    category varchar (255) NOT NULL,
    imgName  varchar (255),
    price double NOT NULL,
    PRIMARY KEY (courseID)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE Users(
	userID integer NOT NULL,
    firstName varchar (255) NOT NULL,
	lastName varchar (255) NOT NULL,
	email  varchar(255),
    clientPass  varchar(255),
    primary key(clientID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE  Orders(
	orderID integer NOT NULL,
    orderDate date NOT NULL,
    userIDfk integer NOT NULL,
	totalPrice long,
    primary key(orderID),
    foreign key(userIDfk) references Clients (userID) ON DELETE restrict ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE OrderDetails(
	courseIDfk integer NOT NULL,
	orderIDfk integer NOT NULL,
    PRIMARY KEY (bookIDfk,orderIDFK),
    foreign key(courseIDfk) references Books (courseID) ON DELETE restrict ON UPDATE CASCADE,
    foreign key(orderIDfk) references Orders (orderID) ON DELETE restrict ON UPDATE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;