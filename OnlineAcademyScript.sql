DROP database OnlineAcademy;
CREATE DATABASE IF NOT EXISTS OnlineAcademy DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE OnlineAcademy;
CREATE TABLE Courses(
	courseID integer NOT NULL,
    title varchar (500) NOT NULL,
	teacher varchar (255) NOT NULL,
    courseDes  TEXT NOT NULL,
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
    primary key(userID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE  Orders(
	orderID integer NOT NULL,
    orderDate date NOT NULL,
    userIDfk integer NOT NULL,
	totalPrice long,
    primary key(orderID),
    foreign key(userIDfk) references Users (userID) ON DELETE restrict ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE OrderDetails(
	courseIDfk integer NOT NULL,
	orderIDfk integer NOT NULL,
    PRIMARY KEY (courseIDfk,orderIDfk),
    foreign key(courseIDfk) references Courses (courseID) ON DELETE restrict ON UPDATE CASCADE,
    foreign key(orderIDfk) references Orders (orderID) ON DELETE restrict ON UPDATE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE ShoppingCart(
	cartID integer NOT NULL,
    cartDate date NOT NULL,
    userIDfk integer NOT NULL,
    primary key(orderID),
    foreign key(userIDfk) references Users (userID) ON DELETE restrict ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE ShoppingCartDetails(
	courseIDfk integer NOT NULL,
	cartIDfk integer NOT NULL,
    PRIMARY KEY (courseIDfk,cartIDfk),
    foreign key(courseIDfk) references Courses (courseID) ON DELETE restrict ON UPDATE CASCADE,
    foreign key(cartIDfk) references Orders (cartID) ON DELETE restrict ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO Courses(courseID, title, teacher, courseDes, rate, category, imgName, price) VALUES
(1,'Cuaderno artístico para viajes imaginarios','Koi Samsa','Embárcate en un viaje imaginario lleno de creatividad e ilustra tus ideas, inquietudes, alegrías y sueños en un cuaderno artístico. Junto a la artista multidisciplinar Koi Samsa darás vida a un cuaderno único, mezclando el mundo plástico, visual y literario.', 5.0 ,'Ilustración','ff98a0fbbde6f54a3a2190a89d96330d.jpg',10.90),
(2,'Crochet: crea prendas con una sola aguja','Alicia Recio Rodríguez','¿Quieres tejer con tus propias manos prendas a crochet, con diseños sencillos y llenos de color? Aprende junto a Alicia —más conocida como Alimaravillas—, una diseñadora de crochet nórdico y yarnbomber que triunfa en las redes sociales con sus diseños minimal de estilo entre hipster y nórdico, que te guiará para que puedas materializar esa prenda que siempre imaginaste, a golpe de ganchillo.',4.9,'Punto','1aac6062574c2a85aadece2d87d78d0a.jpg',10.90),
(3,'Top-down: prendas a crochet de una sola pieza','Estefa González','Patrones sencillos, prendas sin costuras y una infinidad de posibilidades son las tres claves de una de las técnicas de moda para crear prendas a crochet. Así es el top-down, uno de los métodos favoritos de Estefa González, diseñadora y fundadora de la marca Santa Pazienzia, una comunidad de amantes del crochet en más de 50 países.',4.8,'Punto','667f0d10dd48a02339cbe694a117cc12.jpg',9.80),
(4,'Humor gráfico para principiantes','Raúl Salazar','Convierte tu espíritu crítico en un arma profesional. En este curso, Raúl Salazar, viñetista de El Jueves, te cuenta paso a paso cómo convertirte en un as del humor gráfico. Con el lápiz y el sarcasmo bien afilados aprenderás a crear chistes gráficos sobre noticias de actualidad, conociendo los referentes de la viñeta de opinión político-social.',4.6,'Ilustración','0768550cce27b811ae656bea0f886415.jpg',10.70),
(5,'Aprende punto con agujas redondas','Carmen García de Mora','Tan solo con dos agujas y un hilo, la diseñadora textil y profesora Carmen García de Mora da vida a sus historias entre puntos, vueltas y remates. Únete a ella y descubre su forma de vivir y de comunicarse, creando prendas atemporales con tus propias manos.En este curso aprenderás a tejer con agujas circulares y con el método continental. Seguirás los pasos de Carmen para realizar una prenda top-down sin costuras desde cero. Al terminar, tendrás todos los conocimientos para crear con tus agujas, combinando diferentes materiales, puntos y formas.',4.3,'Punto','ab12c5d3388f80b403221e47202aca38.jpg',9.90);
