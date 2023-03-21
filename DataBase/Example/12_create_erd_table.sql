-- pk는 이름 설정 안됨(contraint X) / primary key () 

CREATE TABLE student_info (
std_no INT(11),
std_name VARCHAR(30) NOT NULL,
STD_birth DATE NOT NULL,
std_addr VARCHAR(100) NOT NULL,
std_phone CHAR(11) NOT NULL,
std_todate DATE NOT NULL,
std_fromdate DATE,
std_state ENUM('A', 'B', 'C') NOT NULL,
std_gender ENUM('F', 'M'),
constraint pk_student_std_no PRIMARY KEY(std_no)
);

CREATE TABLE professor_info (
pro_no INT(11),
pro_name VARCHAR(30) NOT NULL,
pro_brith DATE NOT NULL,
degree_no VARCHAR(11) NOT NULL,
pro_position ENUM('D', 'E', 'F') NOT null,
pro_gender ENUM('F', 'M') NOT null,
pro_email VARCHAR(30) NOT NULL,
hire_date DATE NOT NULL,
room_no INT(10),
CONSTRAINT pk_professor_pro_no PRIMARY KEY(pro_no)
);

CREATE TABLE book_info (
book_no INT(11),
book_name VARCHAR(50) UNIQUE KEY,
CONSTRAINT pk_book_book_no PRIMARY KEY(book_no)
);

CREATE TABLE subject_info (
subj_no INT(11),
subj_name VARCHAR(30) UNIQUE KEY,
max_student INT DEFAULT 20,
semester VARCHAR(30) NOT NULL,
start_time TIME NOT NULL,
end_time TIME NOT NULL,
com_score INT(5),
book_no INT(11),
pro_no INT(11),
CONSTRAINT pk_subject_subj_no PRIMARY KEY(subj_no),
CONSTRAINT fk_subject_book_no FOREIGN KEY(book_no)
references book_info(book_no),
CONSTRAINT fk_subject_pro_no FOREIGN KEY(pro_no)
REFERENCES professor_info(pro_no)
);

CREATE TABLE score_info (
std_no INT(11),
subj_no INT(11),
std_score VARCHAR(3) NOT NULL,
subj_avg VARCHAR(10) NOT NULL,
std_end_date DATE NOT NULL,
CONSTRAINT pk_score_std_subj_no PRIMARY KEY(std_no, subj_no)
);

SELECT * FROM student_info;
SELECT * FROM professor_info;
SELECT * FROM book_info;
SELECT * FROM subject_info;
SELECT * FROM score_info;