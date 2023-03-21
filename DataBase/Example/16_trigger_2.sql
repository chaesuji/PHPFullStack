	DELIMITER $$
	CREATE TRIGGER test_update_2
	AFTER UPDATE
	ON departments
	FOR EACH ROW 

	BEGIN
		UPDATE titles
		SET dept_name = 'trigger test'
		WHERE emp_no = '10001';
	END $$
	DELIMITER ;
	
	SHOW TRIGGERs;
	
	DROP TRIGGER test_update_2;