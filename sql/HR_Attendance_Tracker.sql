# Author: Justino Garcia
Drop database if exists HRAttendanceTracker;
create database HRAttendanceTracker;
use 635Example;
#drop table if exists `employees`;
create table `employees` 
(employeesID int(10) primary key not null auto_increment,
fname varchar(255),
mname varchar(255),
lname varchar(255),
);

insert into `employees`(
	fname,
        mname,	
	lname,
	values(
	"Justino",
	"JR",
	"Garcia"
);


# adding employees into database	
