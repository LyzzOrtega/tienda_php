CREATE TABLE productos(
    id_producto integer PRIMARY KEY AUTOINCREMENT,
    producto varchar(100) NOT NULL,
    precio  float NOT NULL,
    existencias integer NOT NULL );

INSERT INTO productos(producto, precio, existencias) values("Anillo con abalorio Azul Mar", 1595, 15);
INSERT INTO productos(producto, precio, existencias) values("Arete de botón Mi bella flor", 800, 20);

CREATE TABLE tickets(
    id_ticket integer PRIMARY KEY AUTOINCREMENT,
    fecha date NOT NULL,
    hora_venta time NOT NULL,
    cantidad_producto integer NOT NULL,
    producto varchar(100) NOT NULL,
    total_producto float NOT NULL );
