/* EJERCICIO 1 */

create table categorias(
	id SERIAL primary key,
	nombre VARCHAR(100) unique not null ,
	descripcion TEXT 
);

create table productos(
	id SERIAL primary key,
	nombre VARCHAR(100) unique not null,
	categoria_id INTEGER references categorias(id),
	precio decimal(10,2),
	stock integer
);

create table usuarios(
	id SERIAL primary key,
	nombre VARCHAR(100) unique not null,
	email VARCHAR(50) unique not null,
	contrasena VARCHAR(255) not null
);

create table pedidos(
	id SERIAL primary key,
	usuario_id INTEGER references usuarios(id),
	fecha DATE,
	total decimal(10,2),
	producto_id INTEGER,
	cantidad INTEGER
);

/* EJERCICIO 2 */

INSERT INTO categorias (nombre, descripcion) VALUES
('Electrónica', 'Dispositivos y gadgets tecnológicos'),
('Ropa', 'Ropa, calzado y accesorios de moda'),
('Hogar', 'Artículos para el hogar y decoración'),
('Libros', 'Libros, novelas y material de lectura');

INSERT INTO usuarios (nombre, email, contrasena) VALUES
('juan_perez', 'juan@email.com', 'hash_pass_123'),
('ana_garcia', 'ana.g@email.com', 'hash_pass_456'),
('carlos_lopez', 'c.lopez@email.com', 'hash_pass_789'),
('maria_diaz', 'maria_d@email.com', 'hash_pass_abc');

INSERT INTO productos (nombre, categoria_id, precio, stock) VALUES
('Laptop Pro 15"', 1, 1499.99, 15),
('Smartphone Z', 1, 899.50, 40),
('Auriculares Inalámbricos', 1, 120.00, 75),
('Camiseta Básica Blanca', 2, 19.95, 200),
('Vaqueros Slim Fit', 2, 59.90, 120),
('Sofá 3 Plazas Gris', 3, 450.00, 10),
('Set de Sartenes (3 piezas)', 3, 89.99, 50),
('Lámpara de Escritorio LED', 3, 35.75, 60),
('Elantris (Tapa Dura)', 4, 25.50, 90),
('Cien Años de Soledad', 4, 18.00, 150);

INSERT INTO pedidos (usuario_id, fecha, total, producto_id, cantidad) VALUES
(1, '2025-11-01', 1499.99, 1, 1),  
(2, '2025-11-02', 79.85, 5, 1),    
(2, '2025-11-02', 19.95, 4, 1),    
(1, '2025-11-03', 120.00, 3, 1),   
(3, '2025-11-04', 450.00, 6, 1),   
(3, '2025-11-04', 35.75, 8, 1),    
(4, '2025-11-05', 25.50, 9, 1),    
(4, '2025-11-05', 18.00, 10, 1),  
(2, '2025-11-06', 899.50, 2, 1),   
(1, '2025-11-10', 59.90, 5, 1);   

/* EJERCICIO 3 */

select * from productos order by precio asc;
select * from productos p join categorias c on c.id = p.categoria_id where c.nombre = 'Ropa';
select * from productos where stock < 20;
select SUM(stock) from productos;

/* EJERCICIO 4 */

select p.nombre, precio, c.nombre from productos p join categorias c on p.id = c.id; 

/* EJERCICIO 5 */

update productos set precio = (precio * 0.1) + 1 where categoria_id = 1; 
update productos set stock = stock - ? where id = ?;
//FALTA EL C

/* EJERCICIO 6 */
alter table productos add eliminado integer;
update productos set eliminado = 1 where stock = 0;
select * from productos where eliminado = 0;


/* EJERCICIO 7 */
insert into pedidos VALUES(?, ?, ?, ?, ?, ?);
update producto set stock = stock - ? where id = ?;
select usuario_id, sum(total) from pedidos where fecha = ? group by(?);
//FALTA TRANSACCION Y MANEJO ERRORES

/* EJERCICIO 8 */
(b)
select sum(total), c.nombre from categorias c join productos pr on pr.id = c.id join pedidos pe on pe.producto_id = pr.id group by (c.nombre);
(c)
select * from productos where stock < 10;






