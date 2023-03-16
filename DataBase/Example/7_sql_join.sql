-- join : 테이블과 테이블 간의 연결
-- inner join  
-- on : join을 하기 전 필터링 (on 조건으로 필터링이 된 레코드 간의 join이 이뤄짐 
-- where : join을 한 후 필터링 (join을 한 결과에서 where 조건절로 필터링이 이뤄짐
SELECT emp.emp_no, demp.dept_no, emp.first_name 
FROM employees emp
INNER JOIN dept_emp demp
ON emp.emp_no = demp.emp_no
LIMIT 10;

-- outer join
INSERT INTO departments
VALUES (
'd010',
'test' );

SELECT * FROM departments;

COMMIT;

-- left outer join
-- departments 테이블과 dept.dept_no 기준
SELECT dept.dept_no, dept.dept_name, dept_m.emp_no
FROM departments dept 
	left OUTER JOIN dept_manager dept_m
		ON dept.dept_no = dept_m.dept_no;

-- right outer join
-- dept_manager 테이블과 dept_m.dept_no 기준		
SELECT dept.dept_no, dept.dept_name, dept_m.emp_no
FROM departments dept 
	right OUTER JOIN dept_manager dept_m
		ON dept.dept_no = dept_m.dept_no;

-- full outer join
SELECT dept.dept_no, dept.dept_name, dept_m.emp_no
FROM departments dept 
	left OUTER JOIN dept_manager dept_m
		ON dept.dept_no = dept_m.dept_no
	right OUTER JOIN dept_manager dept_m
		ON dept.dept_no = dept_m.dept_no;
		
-- cross join
SELECT dept.dept_no, dept.dept_name, dept_m.emp_no
FROM departments dept 
	cross JOIN dept_manager dept_m;
	
-- self join
ALTER TABLE employees ADD COLUMN sup_no INT(11);

SELECT emp2.* FROM employees emp1
	INNER JOIN employees emp2
		ON emp1.sup_no = emp2.emp_no
		WHERE emp1.emp_no = 10001;
-- emp1.emp_no 의 10001을 찾은 후에 
-- emp1.emp_no의 emp1.sup_no 와 emp2.emp_no 가 같을 때 그 값을 출력 

-- 중복된 레코드 제거한 후에 두 쿼리의 결과를 행으로 합침
SELECT * FROM employees WHERE emp_no = 10001
union
SELECT * FROM employees WHERE emp_no = 10005;

SELECT * FROM employees WHERE emp_no = 10001 OR emp_no = 10005
UNION all
SELECT * FROM employees WHERE emp_no = 10005;

-- 중복된 레코드를 제거하지 않음 
SELECT * FROM employees WHERE emp_no = 10001
UNION all
SELECT * FROM employees WHERE emp_no = 10005;

