delimiter $$
CREATE FUNCTION fc_sum(num INT)
	RETURNS int
BEGIN
	RETURNS num+num+num;
END $$
delimeter;

SELECT fc_sum(2);

DROP FUNCTION fc_sum;