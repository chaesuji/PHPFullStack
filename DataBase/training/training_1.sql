-- 사원 정보테이블에 각자의 정보를 적절하게 넣어주세요
INSERT INTO employees (
emp_no,
birth_date,
first_name,
last_name,
gender,
hire_date)
VALUES (
500000,
'20030716',
'채',
'수지',
'F',
NOW());

SELECT * FROM employees
WHERE emp_no = 500000;

-- 월급, 직책, 소속부서 테이블에 각자의 정보를 적절하게 넣어주세요
INSERT INTO salaries (
emp_no,
salary,
from_date,
to_date)
VALUES (
500000,
50000,
'20040101',
'20050101');

INSERT INTO dept_emp (
emp_no,
dept_no,
from_date,
to_date)
VALUES (
500000,
'd003',
'20230228',
NOW());

INSERT INTO titles (
emp_no,
title,
from_date,
to_date)
VALUES (
500000,
'engineer',
'20230228',
NOW());

SELECT * FROM titles
WHERE emp_no = 500000;

-- 짝궁의 [1,2] 것도 넣어주세요
INSERT INTO employees (
emp_no,
birth_date,
first_name,
last_name,
gender,
hire_date)
VALUES (
500002,
'19970311',
'김',
'재성',
'M',
NOW());

INSERT INTO salaries (
emp_no,
salary,
from_date,
to_date)
VALUES (
500002,
60000,
NOW(),
'99990909');

INSERT INTO dept_emp (
emp_no,
dept_no,
from_date,
to_date)
VALUES (
500002,
'd009',
NOW(),
'99990909');

INSERT INTO titles (
emp_no,
title,
from_date,
to_date)
VALUES (
500001,
'unkwon',
NOW(),
'99990909');

SELECT * FROM employees
WHERE emp_no = 500001;

SELECT * FROM salaries
WHERE emp_no = 500001;

SELECT * FROM dept_emp
WHERE emp_no = 500001;

SELECT * FROM titles
WHERE emp_no = 500001;
-- 나와 짝궁의 소속 부서를 d009로 변경해주세요
SELECT * FROM dept_emp
WHERE emp_no = 500000;

UPDATE dept_emp
SET dept_no = 'd003'
WHERE emp_no = 500000;

UPDATE dept_emp
SET to_date = '20230315'
WHERE emp_no = 500000;

INSERT INTO dept_emp (
emp_no,
dept_no,
from_date,
to_date)
VALUES (
500000,
'd009',
NOW(),
'99990909');

UPDATE dept_emp
SET dept_no = 'd009'
WHERE emp_no = 500002;

-- 짝궁의 모든 정보 삭제
DELETE FROM employees
WHERE emp_no = 500002;

DELETE FROM salaries
WHERE emp_no = 500002;

DELETE FROM dept_emp
WHERE emp_no = 500002;

DELETE FROM titles
WHERE emp_no = 500002;

SELECT * FROM titles
WHERE emp_no = 500002;

-- d009 부서의 관리자를 나로 변경
UPDATE dept_manager
SET to_date = '99990101'
WHERE emp_no = 500000;

SELECT * FROM dept_manager
WHERE emp_no = 500000;

SELECT * FROM dept_emp
WHERE emp_no = 500000;

-- 오늘부로 나의 직책을 senior engineer로 변경
-- *
UPDATE titles
SET title = 'senior engineer'
WHERE emp_no = 500000;

SELECT * FROM dept_emp
WHERE emp_no 500000;
INSERT INTO titles (
emp_no,
dept_no,
from_date,
to_date
) VALUES (

NOW(),
'99990101'
);

SELECT * FROM titles
WHERE emp_no = 500000;

-- 최고 연봉 사원과 최저 연봉 사원의 이름 출력
SELECT emp_no, last_name FROM employees 
WHERE emp_no = ( 
SELECT emp_no from salaries
ORDER BY salary 
LIMIT 1
);

SELECT emp_no, last_name FROM employees 
WHERE emp_no = ( 
SELECT emp_no FROM salaries
ORDER BY salary desc
LIMIT 1
);

SELECT emp_no, last_name FROM employees 
WHERE emp_no = 
( SELECT emp_no from salaries ORDER BY salary LIMIT 1 ) OR
( SELECT emp_no FROM salaries ORDER BY salary desc LIMIT 1 );

SELECT emp_no from salaries ORDER BY salary LIMIT 1;
SELECT emp_no FROM salaries ORDER BY salary desc LIMIT 1;

SELECT emp_no, last_name 
FROM employees
WHERE emp_no IN(
SELECT emp_no
FROM salaries
WHERE emp_no IN 
(
	(SELECT MAX(salary) FROM salaries),
	(SELECT MIN(salary) FROM salaries)
));

SELECT emp_no, last_name FROM employees
WHERE emp_no NOT IN (SELECT max(salary), MIN(salary) FROM salaries); 

-- 전체 사원의 평균 연봉
SELECT AVG(salary) FROM salaries;

-- 사번이 499, 975인 사원의 지금까지 평균 연봉을 출력
SELECT emp_no, AVG(salary) FROM salaries
GROUP BY emp_no = 10499, emp_no = 10975;