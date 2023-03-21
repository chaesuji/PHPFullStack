-- 프로시저 생성 
delimiter $$
CREATE PROCEDURE test_proc (
	IN in_num INT
) 
BEGIN 
	SELECT * FROM employees
	LIMIT in_num;
END $$ 
delimiter;