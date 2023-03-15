SELECT CAST('1234' AS INT);
SELECT CAST(1234 AS CHAR(4));

SELECT CONVERT(1234, CHAR(4));

SELECT if(1 > 2, '참', '거짓');
SELECT if(1 < 2, '참', '거짓');
SELECT emp_no, if(emp_no = 10001, first_name, birth_date)
FROM employees;

SELECT IFNULL(NULL, 'aa');
SELECT IFNULL('bb', 'aa');
-- space = 공백X 문자열
SELECT IFNULL(' ', 'aa');

-- 수식1과 수식2가 같으면  null
-- 다르면 수식1
SELECT NULLIF(1, 1);

SELECT emp_no, gender,
case gender
	when 'M' then '남자' 
	when 'F' then '여자'
	ELSE ' '
END
FROM employees LIMIT 10;

SELECT emp_no, gender,
case gender
	when 'M' then '남자' 
	ELSE '여자'
END
FROM employees LIMIT 10;

-- 직책이 'senior engineer'일 경우는 "관리자" 
-- 그 외의 직책은 "팀원"으로 해서 사번하고 분기 결과를 출력
SELECT emp_no,
	case title 
		when 'senior engineer' then '관리자'
		ELSE '팀원'
	END AS k_title
FROM titles;