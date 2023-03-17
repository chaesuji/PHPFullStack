CREATE VIEW test_view
AS
SELECT ti.title, COUNT(*) cnt
FROM employees emp
	INNER JOIN titles ti
	ON emp.emp_no = ti.emp_no
	WHERE emp.gender = 'f'
	AND ti.to_date = '99990101'
	GROUP BY ti.title;
	
SELECT * FROM test_view;

SELECT * FROM test_view WHERE title = 'engineer';

-- or replace : 기존의 뷰가 있을 경우 덮어쓰기 
CREATE or replace VIEW test_view
AS
SELECT ti.title, COUNT(*) cnt
FROM employees emp
	INNER JOIN titles ti
	ON emp.emp_no = ti.emp_no
	WHERE emp.gender = 'f'
	AND ti.to_date = '99990101'
	GROUP BY ti.title;
	
-- drop view [view 이름] 
DROP view test_view;

CREATE OR replace VIEW test_view2
AS
SELECT emp.emp_no, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname,
dept.dept_no, dept.dept_name
FROM employees emp
	INNER JOIN dept_emp demp ON emp.emp_no = demp.emp_no
	INNER JOIN departments dept ON demp.dept_no = dept.dept_no
	WHERE demp.to_date = '99990101'
	ORDER BY dept.dept_no;
	
SELECT * FROM test_view2;