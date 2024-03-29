


--passwrod=sa123456
--MSSQLSERVER
--click on  database engine  or browse and choose any data base 
---------------------------------------------------------------------------
---------------------------------------------------------------------------


-- to create and drop data base

create database company;
drop database company;


---------------------------------------------------------------------------
---------------------------------------------------------------------------

--to  create table

create table employee
(
id int primary key,
name varchar(50) not null,
address varchar(50) not null,
phone int not null 
);


---------------------------------------------------------------------------
---------------------------------------------------------------------------

--to insert data

insert into employee(id , name , address , phone)
values (1 , "ali" , "alex" , 0123684632),
       (2 , "hamo" , "giza" , 01383838938932),
       (3 , "mazen" , "mansoura" , 0178027824632),
       (4 , "alaraby" , "luxor" , 0023528732);

---------------------------------------------------------------------------
---------------------------------------------------------------------------

-- to display data

select * from employee ;

--------------------------------

select (id, name)
  from employee

---------------------------------------------------------------------------
---------------------------------------------------------------------------

--relation one to  one useing foreign key

create table employee1
(
id int primary key,
name varchar(50) not null,
address varchar(50) not null,
phone int not null
);


create table orderes1
(
id_o int primary key,
name varchar(50) not null,
address varchar(50) not null,
price int not null,
foreign key id_o references employee(id)
);

---------------------------------------------------------------------------
---------------------------------------------------------------------------

--relation one to  many useing foreign key

create table employee3
(
id int primary key,
name varchar(50) not null,
address varchar(50) not null,
phone int not null
);


create table orderes3
(
id_o int primary key,
name varchar(50) not null,
address varchar(50) not null,
price int not null,
id_e int not null,
foreign key id_e references employee(id)
);

---------------------------------------------------------------------------
---------------------------------------------------------------------------

--relation many to  many useing foreign key

create table employee2
(
id_e int primary key,
name varchar(50) not null,
address varchar(50) not null,
phone int not null
);


create table orderes2
(
id_o int primary key,
name varchar(50) not null,
address varchar(50) not null,
price int not null,
id_e int not null,
foreign key id_e references employee(id)
);


CREATE TABLE employee_orders2 (
  e_id INT FOREIGN KEY REFERENCES employee(id_e),
  o_id INT FOREIGN KEY REFERENCES order(id_o),
  PRIMARY KEY (e_id, o_id)  -- Composite primary key for uniqueness
);

---------------------------------------------------------------------------
---------------------------------------------------------------------------


