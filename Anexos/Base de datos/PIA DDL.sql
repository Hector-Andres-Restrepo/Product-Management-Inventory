create database product_management_inventory;
use product_management_inventory;

create table registros(
	nombre varchar(50)not null,
    email varchar(50) primary key,
    contraseña varchar(50) not null
);

create table categoria(
	id_cat int primary key,
    nombre_cat  varchar(50) not null,
    descripcion_cat varchar(100) not null
);

create table producto(
	id_prod int primary key,
    nombre_prod varchar(50) not null,
    descripcion_prod varchar(100) not null,
    precio_unidad int not null,
    cantidad int not null,
    id_cat int not null,
    foreign key(id_cat) references categoria(id_cat)
);

create table proveedor(
	id_prov int primary key,
    nombre_prov  varchar(50) not null,
    telefono varchar(100) not null,
    direccion varchar(50) not null,
    email_prov varchar(50) not null,
    pagina_web varchar(50) not null
);

create table producto_proveedor(
	id_prod int not null,
    foreign key(id_prod) references producto(id_prod),
    id_prov int not null,
    foreign key(id_prov) references proveedor(id_prov)
);









 