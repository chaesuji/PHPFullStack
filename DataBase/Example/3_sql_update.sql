UPDATE departments 
SET dept_name = '1000'
WHERE dept_no = 'd001';

SELECT * FROM departments
WHERE dept_no = 'd001';

SELECT * FROM departments;

ROLLBACK;

UPDATE departments 
SET 
WHERE dept_no = 'd001';

SELECT * FROM departments
WHERE dept_no = 'd001';

-- 생일, 이름, 성 
-- now
UPDATE employees
SET  first_name = 'B', last_name = 'A', birth_date = NOW()
WHERE emp_no = 500000;

-- date
UPDATE employees
SET first_name = 'B', last_name = 'A', birth_date = DATE(20030716)
WHERE emp_no = 500000;

SELECT * FROM employees
WHERE emp_no = 500000;

UPDATE departments
SET dept_name = '2000'
WHERE dept_no = 'd001' or dept_no = 'd002';

SELECT * FROM departments
ORDER BY dept_no;