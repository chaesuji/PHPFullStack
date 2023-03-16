-- 사원의 사원 번호, 풀네임, 직책 명을 출력해주세요
SELECT emp.emp_no, tit.title, CONCAT(emp.last_name, ' ', emp.FIRST_name) AS fullname
FROM employees emp
	INNER JOIN titles tit
	ON emp.emp_no = tit.emp_no
	WHERE tit.to_date = '99990101';
-- 사원의 사원 번호, 성별, 현재 월급을 출력해주세요
SELECT emp.emp_no, emp.gender, sal.salary
FROM employees emp
	INNER JOIN salaries sal
	ON emp.emp_no = sal.emp_no
	WHERE to_date = '99990101'; 
-- 10010 사원의 풀네임, 과거부터 현재까지의 월급 이력을 출력해주세요
SELECT emp.emp_no, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname, sal.salary
FROM employees emp
	INNER JOIN salaries sal
	ON emp.emp_no = sal.emp_no 
	WHERE emp.emp_no = 10010;
-- 사원의 사원 번호, 사원 퓰네임, 소속 부서명을 출력해주세요
SELECT emp.emp_no, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname, dept_no
FROM employees emp
	INNER JOIN dept_emp demp
	ON emp.emp_no = demp.emp_no
	WHERE to_date = '99990101';
-- 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력해주세요
SELECT emp.emp_no, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname, 
sal.salary, RANK() over(ORDER BY sal.salary desc) AS salary_top
-- over : rank를 통해 순위를 매길 조건 
FROM employees emp
	INNER JOIN salaries sal
	ON emp.emp_no = sal.emp_no
	WHERE sal.to_date = '99990101'
	LIMIT 10;
-- 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해주세요
SELECT dept_m.dept_no, concat(emp.last_name, ' ', emp.first_name) AS fullname, 
emp.hire_date
FROM employees emp
	INNER JOIN dept_manager dept_m
	ON emp.emp_no = dept_m.emp_no
	WHERE dept_m.to_date = '99990101';
-- 현재 직책이 "staff"인 사원의 현재 평균 월급을 출력해주세요
SELECT avg(sal.salary)
FROM titles tit
	INNER JOIN salaries sal
	ON tit.emp_no = sal.emp_no
	WHERE tit.to_date ='99990101' and tit.title = 'Staff';
-- 부서장직을 익임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력해주세요
SELECT emp.emp_no, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname,
dept_m.dept_no, emp.hire_date
FROM employees emp
	INNER JOIN dept_manager dept_m
	ON emp.emp_no = dept_m.emp_no
	WHERE dept_m.to_date != '99990101';
-- 현재 각 직급별 평균월급 중 60,000 이상인 직급명, 평균월급(정수)를 내림차순으로 출력
SELECT tit.title, ceiling(avg(sal.salary)) AS avg_salary
FROM titles tit
	INNER JOIN salaries sal
	ON tit.emp_no = sal.emp_no
	WHERE sal.to_date = '99990101'
	GROUP BY title
	HAVING avg_salary >= 60000
	ORDER BY avg_salary desc;
		
-- 성별이 여자인 사원들의 직급별 사원수를 출력해 주세요
SELECT tit.title, SUM(emp.gender = 'F')
FROM employees emp
	INNER JOIN titles tit
	ON emp.emp_no = tit.emp_no
--	WHERE gender = 'F'
	GROUP BY tit.title;

-- SELECT tit.title, emp.gender
-- FROM employees emp
-- 	INNER JOIN titles tit
-- 	ON emp.emp_no = tit.emp_no
-- 	WHERE gender = 'F'
-- 	ORDER BY title desc;

-- 직급별 퇴사한 여자 사원의 수
-- SELECT A.gender, COUNT(A.gender) AS cnt
-- FROM employees A
-- INNER JOIN (
-- 	SELECT distinct emp_no
-- 	FROM titles
-- 	WHERE to_date < NOW()
-- 	cnt(emp_no, to_date) in
-- 	(
-- 		SELECT emp_no, MAX(to_date)
-- 		FROM titles
-- 		GROUP BY emp_no
-- 	)
-- ) B
-- ON A.emp_no = B.emp_no
-- GROUP BY A.gender;

SELECT A.gender, COUNT(A.gender)
FROM employees A
INNER JOIN (
	SELECT emp_no
	FROM titles -- titles > emp_no 
	GROUP BY emp_no -- emp_no 그룹화 
	HAVING MAX(to_date) != date('9999-01-01') -- titles의 최댓값이 99990101이 아닌 emp_no 선택
) B 
ON A.emp_no = B.emp_no -- 
GROUP BY A.gender;