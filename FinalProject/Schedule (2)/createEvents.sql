create database events;

grant update, insert, index, delete, select, update, alter, create, drop
	on events.*
	to eventscheduler identified by '123456';

use events;
create table event(
	theEvent nvarchar(50) not null,
	theDate datetime not null
);