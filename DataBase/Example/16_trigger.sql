DELIMITER $$
CREATE TRIGGER test_update
AFTER UPDATE 
ON departments
FOR EACH ROW
BEGIN 
	UPDATE titles
	SET dept_name = 'trigger test'
	WHERE emp_no = '10001';
END $$
DELIMITER;

SHOW TRIGGERS;

DELETE TRIGGER test_update;