create database GolanBrothers;

grant update, insert, index, delete, select, update, alter, create, drop
	on GolanBrothers.*
	to administrator identified by 'E6Z570tbYF4plNEhabIF';

use GolanBrothers;
create table Users(
	username nvarchar(50) not null primary key,
	password nvarchar(20) not null,
	name nvarchar(50) not null,
	isCaptain nvarchar(1) not null,
	avatar nvarchar(50)
);

create table captainMessages(
	messageID nvarchar(1000) not null, 
	content nvarchar(10000) not null,
	posterID nvarchar(50) not null,
	datePosted datetime not null
);

CREATE TABLE IF NOT EXISTS `messages` (
  `messageID` bigint(255) NOT NULL AUTO_INCREMENT,
  `content` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `datePosted` datetime NOT NULL,
  `posterId` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`messageID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

create table comments(
	messageID nvarchar(1000) not null,
	commentID nvarchar(1000) not null,
	content nvarchar(10000) not null,
	datePosted datetime not null,
	posterID nvarchar(50) not null
);

create table pMessages(
	content nvarchar(10000) not null,
	sender nvarchar(50) not null,
	receiver nvarchar(50) not null,
	dateSent datetime not null
);

create table calendar(
	eventname nvarchar(150) not null,
	theDate datetime not null,
	description nvarchar(500) not null,
	eventID nvarchar(1000) not null
);

create table uploadedFiles(
	name nvarchar(150) not null,
	filename nvarchar(300) not null,
	uploaderID nvarchar(50) not null
);

INSERT INTO Users
VALUES('Aiendar', 'TestPassword', 'Samuel Golan', 'y', null);

INSERT INTO Users
VALUES('theColourC', 'iLoveAmy', 'Pete Larson', 'y', null);

INSERT INTO Users
VALUES('Turarthdur', 'iLikeADC', 'Caleb Potts', 'n', null);

INSERT INTO Users
VALUES('Brother Grizzly', 'aWildSteveAppeared', 'Steve Hinkle', 'n', null);

INSERT INTO Users
VALUES('zeptar', 'littleBrother', 'Peter Golan', 'n', null);