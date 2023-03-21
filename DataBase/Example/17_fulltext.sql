CREATE TABLE test_text (
txt_no INt PRIMARY KEY auto_increment,
f_text VARCHAR(4000),
FULLTEXT idx_full_test_text_f_text(f_text)
);

SELECT * FROM test_text;

INSERT INTO test_text (f_text) 
VALUES 
('동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세');
INSERT INTO test_text (f_text) 
VALUES 
('무궁화 삼천리 화려강산 대한 사람 대한으로 길이 보전하세');
INSERT INTO test_text (f_text) 
VALUES 
('남산 위에 저 소나무 철갑을 두른듯 바람서리 불변함은 우리기상일세');
INSERT INTO test_text (f_text) 
VALUES 
('무궁화 삼천리 화려강산 대한사람 대한으로 길이 보전하세');
INSERT INTO test_text (f_text) 
VALUES 
('가을 하늘 공활한데 높고 구름없이 괴로우나 즐거우나 나라 사랑하세');
INSERT INTO test_text (f_text) 
VALUES 
('이 기상과 이 맘으로 충성을 다하여 괴로우나 즐거우나 나라 사랑하세');
INSERT INTO test_text (f_text) 
VALUES 
('무궁화 삼천리 화려 강산 대한 사람 대한으로 길이 보전하세');

-- 띄어쓰기 기준으로 검색 
SELECT * FROM test_text
WHERE MATCH(f_text) AGAINST('동해물과');

