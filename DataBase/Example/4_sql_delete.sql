DELETE FROM departments;

SELECT * FROM departments;

-- 조건에 맞는 컬럼 삭제
DELETE FROM employees
WHERE emp_no = 500000;

SELECT * FROM employees
WHERE emp_no = 500000; 