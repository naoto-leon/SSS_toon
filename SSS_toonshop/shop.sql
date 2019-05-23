drop database if exists SSS_toon;
create database SSS_toon default character set utf8 collate utf8_general_ci;
grant all on SSS_toon.* to 'staff'@'localhost' identified by 'password';
use SSS_toon;

create table product (
	id int auto_increment primary key, 
	name varchar(200) not null, 
	price int not null
);

create table customer (
	id int auto_increment primary key, 
	name varchar(100) not null, 
	address varchar(200) not null, 
	login varchar(100) not null unique, 
	nintendo varchar(100) not null, 
	rank int(100) not null, 
	game_a varchar(100) not null, 
	game_e varchar(100) not null, 
	game_h varchar(100) not null, 
	game_y varchar(100) not null,
	memo varchar(200) not null,
	password varchar(100) not null
	
	
);

create table purchase (
	id int not null primary key, 
	customer_id int not null, 
	foreign key(customer_id) references customer(id)
);

create table purchase_detail (
	purchase_id int not null, 
	product_id int not null, 
	count int not null, 
	primary key(purchase_id, product_id), 
	foreign key(purchase_id) references purchase(id), 
	foreign key(product_id) references product(id)
);

create table favorite (
	customer_id int not null, 
	product_id int not null, 
	primary key(customer_id, product_id), 
	foreign key(customer_id) references customer(id), 
	foreign key(product_id) references product(id)
);

insert into product values(null, '松の実', 700);
insert into product values(null, 'くるみ', 270);
insert into product values(null, 'ひまわりの種', 210);
insert into product values(null, 'アーモンド', 220);
insert into product values(null, 'カシューナッツ', 250);
insert into product values(null, 'ジャイアントコーン', 180);
insert into product values(null, 'ピスタチオ', 310);
insert into product values(null, 'マカダミアナッツ', 600);
insert into product values(null, 'かぼちゃの種', 180);
insert into product values(null, 'ピーナッツ', 150);
insert into product values(null, 'クコの実', 400);

insert into customer values(null, '熊木 和夫', '東京都新宿区西新宿2-8-1', 'kumaki','nintendo','89','A','A','A','A','mmmmmm','BearTree1');
insert into customer values(null, '鳥居 健二', '神奈川県横浜市中区日本大通1', 'torii','nintendo_1','89','A-','A-','A-','A-','mmmlmmm',, 'BirdStay2');
