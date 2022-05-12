SELECT CONCAT(name, CONCAT("(",CONCAT(SUBSTR(occupation, 1, 1), ")"))) FROM occupations ORDER BY name ASC;
SELECT "There are a total of ", COUNT(occupation), CONCAT(LOWER(occupation), "s.") FROM occupations
GROUP BY occupation
ORDER BY COUNT(occupation), occupation ASC;
