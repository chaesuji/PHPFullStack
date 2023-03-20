-- auto_increment(자동 증가) 생성
CREATE TABLE test_member (
mem_no INT(11) PRIMARY KEY AUTO_INCREMENT,
mem_name VARCHAR(50)
);

INSERT INTO test_member(mem_name)
VALUES ('cotnwl');
INSERT INTO test_member(mem_name)
VALUES ('cotnwl2');

SELECT * FROM test_member;

DELETE FROM test_member 
WHERE mem_no = 2;

DELETE FROM test_member;
COMMIT;

-- auto_increment 초기화 1  
TRUNCATE table test_member;

CREATE TABLE test_member (
mem_no INT(11) PRIMARY KEY,
mem_name VARCHAR(50)
);

INSERT INTO test_member(mem_name)
VALUES ('cotnwl');

ALTER TABLE test_member MODIFY mem_no INT(11) AUTO_INCREMENT;

SELECT * FROM test_member;

-- auto_increment 값 변경  
ALTER TABLE test_member AUTO_INCREMENT=10;