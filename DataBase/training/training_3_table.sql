CREATE TABLE employees_1 (
	emp_no INT(11) NOT null,
	birth_date DATE,
	first_name VARCHAR(14),
	last_name VARCHAR(16),
	gender ENUM('M','F'),
	hire_date DATE,
	CONSTRAINT PK_test_tbl_employees_1 PRIMARY KEY(emp_no));
	
CREATE TABLE salaries_1 (
	emp_no INT(11) NOT null,
	salary INT(11),
	from_date DATE NOT null,
	to_date DATE,
	CONSTRAINT PK_test_tbl_salaries_1 PRIMARY KEY(emp_no ,from_date),
	CONSTRAINT FK_test_tbl_salaries_1 FOREIGN KEY(emp_no) 
	REFERENCES employees_1(emp_no)
);

CREATE INDEX idx_employees_1_emp_no ON salaries_1(emp_no);	
	
CREATE TABLE titles_1 (
	emp_no INT(11) NOT null,
	title VARCHAR(50) NOT null,
	from_date DATE NOT null,
	to_date DATE,
	CONSTRAINT PK_test_tbl_titles_1 PRIMARY KEY(emp_no, title, from_date),
	CONSTRAINT FK_test_tbl_titles_1 FOREIGN KEY(emp_no) REFERENCES employees_1(emp_no)
);

CREATE INDEX idx_employees_1_emp_no_1 ON titles_1(emp_no);

SELECT * FROM employees_1;
SELECT * FROM salaries_1;
SELECT * FROM titles_1;

COMMIT;