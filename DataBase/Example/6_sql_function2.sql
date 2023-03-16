-- 문자열 함수

SELECT CONCAT('안녕하세요', ' 좋은 아침입니다');

-- 성, 이름을 concat을 이용해 출력
SELECT CONCAT(last_name, ' ', first_name) AS NAME 
FROM employees
WHERE emp_no = 500000;

-- concat_ws(구분자, 문자열1, 문자열2, ...) : 문자열 사이에 구분자를 넣음
SELECT CONCAT_WS('/', 'a', 'b', 'c');

SELECT FORMAT(123456, 0);
SELECT FORMAT(123456, 2);

SELECT LEFT('abcdefg', 3);
SELECT LEFT('abcdefg', 1);

SELECT RIGHT('abcdefg', 3);
SELECT RIGHT('abcdefg', 1);

SELECT UPPER('abC');

SELECT LOWER('AbC');

-- lpad(문자열, 길이, 채울 문자열) : 문자열을 길이만큼 늘린 후 빈 곳에 채울 문자열로 채움
SELECT LPAD('abc', 5, '@');
SELECT LPAD('956', 6, '0');

SELECT RPAD('abc', 5, '^');

-- trim : 문자열 앞/뒤의 공백 삭제
SELECT TRIM('  a b c ');

SELECT LTRIM(' abc ');
SELECT RTRIM(' abc ');

-- 문자열 자르기 
SELECT TRIM(LEADING 'abc' FROM 'abcdefg');
SELECT TRIM(TRAILING 'abc' FROM 'abcdefg');
SELECT TRIM(TRAILING 'abcdefg' FROM 'abc');

-- substring(문자열, 시작위치, 횟수)
SELECT SUBSTRING('abcdef', 1, 4);

-- substring_index(문자열, 구분자, 횟수) : 구분자가 왼쪽부터 횟수만큼 나오면 그 뒤의 문자열은 자름 
SELECT SUBSTRING_index('ab.cd.ef.gh', '.', 2);

-- 수학 함수

SELECT CEILING(1.1);
SELECT FLOOR(1.9);
SELECT FLOOR(1.2);
SELECT ROUND(1.9);
SELECT ROUND(1.2);


SELECT TRUNCATE(1.11, 1);

-- 날짜 및 시간 함수
SELECT NOW();

-- 년월일 
SELECT DATE(NOW());
-- 년월일 시간
SELECT DATETIME(NOW());

-- (날짜, 차이) : 날짜를 기준으로 차이를 더함
SELECT ADDDATE(NOW(), INTERVAL 1 MONTH);
SELECT ADDDATE(NOW(), INTERVAL 1 DAY);
SELECT ADDDATE(NOW(), INTERVAL -1 DAY);

-- (날짜, 차이) : 날짜를 기준으로 차이를 뺌
SELECT SUBDATE(NOW(), INTERVAL 1 DAY);

-- (날짜, 시:분:초) : 날짜를 기준으로 시간을 더하거나 뺌
SELECT ADDTIME(NOW(), '1:1:1');
SELECT ADDTIME(NOW(), '-1:1:1');

SELECT SUBTIME(NOW(), '1:1:1');

-- 순위 함수
SELECT emp_no, salary, RANK() over(ORDER BY salary ASC)
FROM salaries;

SELECT emp_no, salary, ROW_NUMBER() over(ORDER BY salary ASC)
FROM salaries;