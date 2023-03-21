SELECT emp.emp_no , demp.dept_no, deptm.dept_name,
CONCAT(emp.FIRST_name, ' ', emp.last_name) AS FULLname
FROM employees emp
	INNER JOIN dept_emp demp
	ON emp.emp_no = demp.emp_no
	INNER JOIN departments deptm
	ON demp.dept_no = deptm.dept_no
	WHERE emp.emp_no = 10001;