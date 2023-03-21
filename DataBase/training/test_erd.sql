CREATE TABLE `members` (
	`mem_no`	int(11)	NOT NULL	COMMENT 'pk',
	`mem_id`	varchar(20)	NULL	COMMENT 'not null, unique key',
	`mem_name`	varchar(30)	NULL	COMMENT 'not null',
	`mem_addr`	varchar(100)	NULL	COMMENT 'not null'
);

CREATE TABLE `product_list` (
	`prod_no`	int(20)	NOT NULL	COMMENT 'pk',
	`prod-frice`	int(10)	NULL	COMMENT 'not null',
	`prod_name`	varchar(100)	NULL	COMMENT 'not null'
);

CREATE TABLE `order_list` (
	`order_no`	int(20)	NOT NULL	COMMENT 'pk',
	`prod_no`	int(20)	NOT NULL	COMMENT 'fk',
	`delvy_info`	enum('배송 전',  '배송 중',  '배송 완료')	NULL	COMMENT 'not null',
	`mem_no`	int(11)	NOT NULL	COMMENT 'fk'
);

CREATE TABLE `point` (
	`mem_no`	int(11)	NOT NULL	COMMENT 'pk',
	`mem_point`	int(10)	NULL	COMMENT 'default(0), not null'
);

ALTER TABLE `members` ADD CONSTRAINT `PK_MEMBERS` PRIMARY KEY (
	`mem_no`
);

ALTER TABLE `product_list` ADD CONSTRAINT `PK_PRODUCT_LIST` PRIMARY KEY (
	`prod_no`
);

ALTER TABLE `order_list` ADD CONSTRAINT `PK_ORDER_LIST` PRIMARY KEY (
	`order_no`
);

ALTER TABLE `point` ADD CONSTRAINT `PK_POINT` PRIMARY KEY (
	`mem_no`
);

ALTER TABLE `point` ADD CONSTRAINT `FK_members_TO_point_1` FOREIGN KEY (
	`mem_no`
)
REFERENCES `members` (
	`mem_no`
);

