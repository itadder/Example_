# Author: Justino Garcia
Drop database if exists HRAttendanceTracker;
create database HRAttendanceTracker;
<<<<<<< HEAD
use HRAttendanceTracker;
drop table if exists `employees`;
create table `employees` (
employeesID int(10) primary key not null auto_increment,
=======
use 635Example;
#drop table if exists `employees`;
create table `employees` 
(employeesID int(10) primary key not null auto_increment,
>>>>>>> 3f9c4f09eb0e47b39ef251aa1cd5d8f1f2c39dd7
fname varchar(255),
mname varchar(255),
lname varchar(255)

);

insert into `employees`(
	fname,
  mname,
	lname)
	values(
	"Justino",
	"JR",
	"Garcia"
);


# adding employees into database	
