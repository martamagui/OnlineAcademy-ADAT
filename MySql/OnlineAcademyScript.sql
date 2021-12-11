DROP database OnlineAcademy;
CREATE DATABASE IF NOT EXISTS OnlineAcademy DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE OnlineAcademy;
CREATE TABLE Courses(
  courseID integer NOT NULL AUTO_INCREMENT,
  title varchar (500) NOT NULL,
  teacher varchar (255) NOT NULL,
  courseDes TEXT NOT NULL,
  rate double,
  category varchar (255) NOT NULL,
  imgName varchar (255),
  price double NOT NULL,
  PRIMARY KEY (courseID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_spanish_ci;
CREATE TABLE Users(
  email varchar(355) NOT NULL,
  firstName varchar (255) NOT NULL,
  lastName varchar (255) NOT NULL,
  clientPass varchar(255),
  primary key(email)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_spanish_ci;
CREATE TABLE Orders(
  orderID varchar(50) NOT NULL,
  orderDate date NOT NULL,
  emailFk varchar(355) NOT NULL,
  totalPrice long,
  primary key(orderID),
  foreign key(emailFk) references Users (email) ON DELETE restrict ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_spanish_ci;
CREATE TABLE OrderDetails(
  courseIDfk integer NOT NULL,
  orderIDfk varchar(50) NOT NULL,
  PRIMARY KEY (courseIDfk, orderIDfk),
  foreign key(courseIDfk) references Courses (courseID) ON DELETE restrict ON UPDATE CASCADE,
  foreign key(orderIDfk) references Orders (orderID) ON DELETE restrict ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_spanish_ci;
CREATE TABLE ShoppingCart(
  cartID varchar(50) NOT NULL,
  cartDate date NOT NULL,
  emailFk varchar(355) NOT NULL,
  primary key(cartID),
  foreign key(emailFk) references Users (email) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_spanish_ci;
CREATE TABLE ShoppingCartDetails(
  courseIDfk integer NOT NULL,
  cartIDfk varchar(50) NOT NULL,
  PRIMARY KEY (courseIDfk, cartIDfk),
  foreign key(courseIDfk) references Courses (courseID) ON DELETE no action ON UPDATE CASCADE,
  foreign key(cartIDfk) references ShoppingCart (cartID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_spanish_ci;