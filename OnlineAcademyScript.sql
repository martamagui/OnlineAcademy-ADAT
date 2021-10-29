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
    primary key(cartID),
    foreign key(userIDfk) references Users (userID) ON DELETE restrict ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE ShoppingCartDetails(
	courseIDfk integer NOT NULL,
	cartIDfk integer NOT NULL,
    PRIMARY KEY (courseIDfk,cartIDfk),
    foreign key(courseIDfk) references Courses (courseID) ON DELETE restrict ON UPDATE CASCADE,
    foreign key(cartIDfk) references ShoppingCart (cartID) ON DELETE restrict ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO Courses(courseID, title, teacher, courseDes, rate, category, imgName, price) VALUES
(1,'Cuaderno artístico para viajes imaginarios','Koi Samsa','Embárcate en un viaje imaginario lleno de creatividad e ilustra tus ideas, inquietudes, alegrías y sueños en un cuaderno artístico. Junto a la artista multidisciplinar Koi Samsa darás vida a un cuaderno único, mezclando el mundo plástico, visual y literario.', 5.0 ,'Ilustración','ff98a0fbbde6f54a3a2190a89d96330d.jpg',10.90),
(2,'Crochet: crea prendas con una sola aguja','Alicia Recio Rodríguez','¿Quieres tejer con tus propias manos prendas a crochet, con diseños sencillos y llenos de color? Aprende junto a Alicia —más conocida como Alimaravillas—, una diseñadora de crochet nórdico y yarnbomber que triunfa en las redes sociales con sus diseños minimal de estilo entre hipster y nórdico, que te guiará para que puedas materializar esa prenda que siempre imaginaste, a golpe de ganchillo.',4.9,'Punto','1aac6062574c2a85aadece2d87d78d0a.jpg',10.90),
(3,'Top-down: prendas a crochet de una sola pieza','Estefa González','Patrones sencillos, prendas sin costuras y una infinidad de posibilidades son las tres claves de una de las técnicas de moda para crear prendas a crochet. Así es el top-down, uno de los métodos favoritos de Estefa González, diseñadora y fundadora de la marca Santa Pazienzia, una comunidad de amantes del crochet en más de 50 países.',4.8,'Punto','667f0d10dd48a02339cbe694a117cc12.jpg',9.80),
(4,'Humor gráfico para principiantes','Raúl Salazar','Convierte tu espíritu crítico en un arma profesional. En este curso, Raúl Salazar, viñetista de El Jueves, te cuenta paso a paso cómo convertirte en un as del humor gráfico. Con el lápiz y el sarcasmo bien afilados aprenderás a crear chistes gráficos sobre noticias de actualidad, conociendo los referentes de la viñeta de opinión político-social.',4.6,'Ilustración','0768550cce27b811ae656bea0f886415.jpg',10.70),
(5,'Aprende punto con agujas redondas','Carmen García de Mora','Tan solo con dos agujas y un hilo, la diseñadora textil y profesora Carmen García de Mora da vida a sus historias entre puntos, vueltas y remates. Únete a ella y descubre su forma de vivir y de comunicarse, creando prendas atemporales con tus propias manos.En este curso aprenderás a tejer con agujas circulares y con el método continental. Seguirás los pasos de Carmen para realizar una prenda top-down sin costuras desde cero. Al terminar, tendrás todos los conocimientos para crear con tus agujas, combinando diferentes materiales, puntos y formas.',4.3,'Punto','ab12c5d3388f80b403221e47202aca38.jpg',9.90),
(6,'Upcycling creativo de muebles para principiantes','Joanne Connen','El upcycling es una oportunidad para darle a un mueble una segunda oportunidad y vivir de forma más sostenible. La artista de mobiliario y upcycler Joanne Condon cree que se puede crear arte a partir de muebles abandonados. Esto es a lo que se dedica en su tienda de muebles y lo que la ha llevado a ganar múltiples premios y a publicar su propio libro sobre upcycling.',5.0,'Reciclaje','b771e7654e304f67a2220fb8f777ee10.jpg',10.90),
(7,'Pintura decorativa sobre muebles',' LUCAS RISE','Imagina poder convertir un mueble cotidiano, como un armario, en una pieza artística que llene de alegría las estancias de tu hogar. Eso es lo que hace Lucas Rise, uniendo sus dos especialidades: diseño y pintura, para crear maravillosas piezas decorativas llenas de personalidad y potentes diseños gráficos.',4.9,'Reciclaje','248f1efc043738c39d78e94e9586e585.jpg',19.90),
(8,'Macramé: decora tus zapatillas y sandalias','Isabel (Macramé Compostela)','Una simple cuerda, combinada con tu creatividad, puede dar lugar a piezas de moda increíbles. Isabel Vidal, artista textil experta en la técnica del macramé que ha trabajado con marcas como Wild West, te enseñará a experimentar libremente con la cuerda trenzando todas tus ideas.',5.0,'Reciclaje','5467e99fff83055860da7660567ca6d1.jpg',9.90),
(9,'Bordado: reparación de prendas','Ofelia & Antelmo','Si cuando algo ya no funciona lo intentamos arreglar, ¿por qué no hacer lo mismo con la ropa? Este es el foco de la técnica Visible Mending: poder enmendar cualquier prenda en desuso o dañada, para poder alargar su uso muchos años más, como hacían nuestras abuelas años atrás. Y es que esta no es una técnica nueva; se trata de volver a tener esa relación con las prendas y de poder ser capaz de darles una nueva vida, ¡y siempre con estilo! Gabriela Martínez, es una especialista en bordado y arte textil, muy popular gracias a su proyecto Ofelia & Antelmo.',5.0,'Reciclaje','40e403bbc832a4a845b0d598ebd97bc6.jpg',10.90),
(10,'Diseño de patrones en crochet: encuentra tu propio estilo','Molla Mills','A través del crochet, es posible expresar tu mundo interior. Puedes crear a mano piezas únicas y originales que reflejen tu personalidad, inspirándote en lo que te rodea. Molla Mills es una artista de crochet famosa por su colorida colección de diseños y, en este curso, te enseñará a encontrar tu estilo personal a través de este arte textil.',5.0,'Punto','11176bb7c8ad51fc0da6f27962189b03.jpg',10.90),
(11,'Diseño y creación de amigurumis','Príncipe del Crochet','¿Quieres diseñar y tejer divertidos personajes de ganchillo? Aprende a crear amigurumis junto a un experto, Marcelo Javier Cortés, más conocido en redes sociales como Príncipe del Crochet.En este curso, aprenderás a diseñar y confeccionar tu propio amigurumi. Verás cómo leer un patrón y cómo tejer formas simples y complejas, que te servirán para la construcción de un personajes concreto, o bien para aplicar a tus propias creaciones',4.8,'Punto','ee0dd8fb96e64f107caa61e64564e6e8.jpg',10.20),
(12,'Renovación de interiores DIY: reinventa un espacio','Dan Lovatt','Con un espacio interior puedes transmitir rasgos de tu personalidad y tu forma de ver el mundo. Dan Lovatt es un diseñador especializado en utilizar técnicas innovadoras de bricolaje para personalizar y dar una nueva vida a estas áreas. Sus colaboraciones con marcas le permiten diseñar espacios interiores con estilo y compartir sus creaciones con sus miles de seguidores en Instagram.',3.5,'Reciclaje','d95fc05bb7a3bc5d1b10cdaad661f833.jpg',8.75),
(13,'Retrato ilustrado en acuarela','Ana Santos','En este curso, la ilustradora y artista plástica Ana Santos te enseñará, paso a paso, la técnica que utiliza para crear sus maravillosos retratos ilustrados en acuarela –una disciplina que a Ana le interesa especialmente por su inmediatez, el azar de los resultados y su idoneidad a la hora de mezclarla con otros materiales– y otras técnicas mixtas.',5.0,'Ilustración','5f9042326b6760b31a2a50289a12de8f.jpg',10.65),
(14,'Diario ilustrado: una práctica diaria y consciente','Kate Sutton','¿Y si pudieras mejorar tus habilidades de dibujo mientras te relajas y reflexionas sobre tu día? Para la artista freelance Kate Sutton, realizar un diario ilustrado es una práctica que invita a la inspiración y a la tranquilidad. Kate afirma que es una excelente forma de documentar tus experiencias y apreciar las pequeñas cosas cotidianas.Con esta técnica, descubrirás maneras divertidas de rellenar tu cuaderno cada día. Kate te mostrará sus propuestas y trucos favoritos para iniciarte en la práctica consciente de plasmar con dibujos tu vida cotidiana y encontrar nuevas maneras de expresara tu creatividad.',4.7,'Ilustración','eda87000db8488db0bddd3ece8661f2c.jpg',10.90),
(15,'Retrato en acuarela a partir de una fotografía','Sol Barrios','Con el agua como elemento principal, la técnica de la acuarela está estrechamente relacionada con las emociones y el movimiento. La acuarelista y muralista chilena Sol Barrios busca expresar en sus retratos la variedad y complejidad de las emociones humanas, por medio de técnicas de pintura y contrastes de colores oscuros y claros que logran poner en valor los rostros de cada persona.En este curso aprenderás a hacer un retrato en acuarela que sea capaz de reflejar el carácter de una persona o personaje a partir de una fotografía. Sol te enseñará a crear tus propios colores y te guiará paso a paso en la realización de tu retrato, desde los primeros trazos, pasando por las capas de pintura del rostro, hasta finalizar con el cabello y la ropa. Además conocerás algunos consejos para enmarcar tu pieza y dar por finalizado tu retrato.',5.0,'Ilustración','002c191f7569a5b855188ed0abcf1736.jpg',16.90),
(16,'Técnicas de upcycling para un armario sostenible','Gaia Segattini','Reparar siempre es mejor que consumir: este concepto de upcycling se puede aplicar también a la moda y, de forma individual, al armario. Minimizar el impacto ambiental y tomar decisiones sostenibles es posible incluso en el caso de la ropa. ¿Cómo? Con pequeños gestos y con una buena dosis de inspiración y fantasía.En este curso, Gaia Segattini, diseñadora de moda y fundadora de la marca Gaia Segattini Knotwear, te explicará cómo emplear técnicas de reutilización en prendas viejas que ya no usas.',5.0,'Reciclaje','e7ca4d116a6b116714b6312445b4c577.jpg',9.90),
(17,'Upcycling con bordado','Kseniia Guseva','Kseniia Guseva, también conocida como @faimyxstitch, cree firmemente que el bordado hace que todo sea mejor, desde esa pared vacía de tu apartamento hasta las zapatillas que llevas ahora mismo. Combinando el upcycling y el bordado, Kseniia da una nueva vida y más divertida a prendas viejas, bordando patrones sobre ellas, especialmente patrones que representan algunas de sus ciudades favoritas alrededor del mundo.En este curso, Kseniia te enseñará técnicas básicas de bordado para reciclar tu ropa o tus zapatillas. Aprenderás sobre los materiales, la transferencia, las puntadas y cómo elegir los colores. Al final del curso, serás capaz de bordar sobre cualquier tipo de prenda.',4.4,'Reciclaje','8a05d727f4090ae74a9e2affaaa7e4ab.jpg',9.90);