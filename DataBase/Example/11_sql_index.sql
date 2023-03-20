-- index 확인 
SHOW INDEX FROM employees;

-- index 생성 
CREATE INDEX idx_employees_last_name ON employees(last_name);

-- 컬럼 2개를 묶어서 인덱스를 만듬 
CREATE INDEX idx_employees_last_name ON employees(last_name, first_name);

-- index 제거 
DROP INDEX idx_employees_last_name ON employees;

SELECT * FROM employees WHERE last_name = 'Swan';

