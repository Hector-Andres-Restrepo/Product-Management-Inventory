select *from registros;
select *from categoria;
select *from producto;
select *from proveedor;
select *from producto_proveedor;

insert into registros values("admin", "admin1@gmail.com", "123");

insert into categoria values(23, "Bombillos", "");

insert into producto values(101, "Bombillo led Sylvania", "Potencia 10w;color de luz fría;voltaje 100-240;rosca E27,dimerizable", 15000, 1, 23);

insert into proveedor values(201, "Homecenter", "01-800-0127373", "Ak 68 #80-77", "homecenter@hotmail.com", "Homecenter.com");

insert into producto_proveedor values(101, 201);








