SELECT 
	emp_no, 
	last_name, 
	first_name 
FROM employees;

SELECT * FROM titles;

SELECT * FROM employees 
WHERE emp_no <= 10003
or emp_no >= 10005;

SELECT * FROM salaries;

-- 10003 ~ 10005 사이의 값, 실행 속도가 느려짐 
SELECT * FROM employees
WHERE emp_no BETWEEN 10003 AND 10005;

-- 데이터 조회 
SELECT * FROM employees
WHERE emp_no IN(10001, 10005);

SELECT * FROM employees
WHERE first_name LIKE('____m');

SELECT DISTINCT emp_no FROM dept_emp;

SELECT * FROM employees
LIMIT 10 OFFSET 4;

SELECT * FROM employees
ORDER BY emp_no DESC;

-- 집계
SELECT COUNT(*)
from employees;

SELECT COUNT(emp_no)
from employees
WHERE emp_no = 10001;

SELECT * FROM salaries;

SELECT concat(last_name, ' ' ,first_name) AS fullname
FROM employees;

-- 서브 쿼리
-- d004 부서에 있는 사원 사번 
SELECT * FROM dept_manager
WHERE dept_no = 
					( 
						SELECT dept_no FROM dept_manager
						WHERE emp_no = 110344
					);

-- d004
SELECT dept_no FROM dept_manager
WHERE emp_no = 110344;

-- 
SELECT * FROM dept_manager
WHERE emp_no in 
					( 
						SELECT emp_no FROM dept_manager
						WHERE dept_no = 'd009'
					);
					
SELECT * FROM dept_manager
WHERE emp_no = ANY 
					( 
						SELECT emp_no FROM dept_manager
						WHERE dept_no = 'd009'
					);
					
SELECT * FROM dept_manager
WHERE emp_no = all 
					( 
						SELECT emp_no FROM dept_manager
						WHERE dept_no = 'd009'
					);
					
SELECT emp_no FROM dept_manager
WHERE dept_no = 'd009'

SELECT * FROM dept_manager
WHERE dept_no = ANY 
					( 
						SELECT dept_no FROM dept_manager
						WHERE emp_no IN(110344, 111035)
					);
					
-- 사원별 급여 평균이 70,000 이상인 사원의 
-- 사번, 이름, 성, 성별을 조회
SELECT emp_no, first_name, last_name, gender 
FROM employees
WHERE emp_no IN 
					(
						SELECT emp_no FROM salaries
						GROUP BY emp_no 
						HAVING AVG(salary) >= 70000
					);
					
					SELECT AVG(salary) FROM salaries
					GROUP BY emp_no
					HAVING AVG(salary) >= 70000;
					
-- data 타입의 속성 비교 방법
-- 10009 사번 사원의 현재 직책 확인
-- 현재 시간 확인 : now()
SELECT *, NOW() 
FROM titles
WHERE emp_no = 10009
AND to_date >= NOW();			

-- 현재 직책이 senior engineer인 사원의 사원번호,
-- 성을 조회  
SELECT emp_no, last_name FROM employees
WHERE emp_no IN (
						SELECT emp_no FROM titles
						WHERE to_date >= NOW()
						and title = 'senior engineer'
					);	
					
SELECT emp_no, title FROM titles
WHERE to_date >= NOW()
and title = 'senior engineer';

-- 30000 ~ 50000
		SELECT emp_no, avg(salary) AS avg_s
		FROM salaries
		group BY emp_no 
		HAVING avg_s >= 30000
		and avg_s <= 50000;