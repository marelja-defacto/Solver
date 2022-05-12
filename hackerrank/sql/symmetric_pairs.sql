SELECT f1.x, f1.y FROM Functions f1
INNER JOIN Functions f2 ON f1.x = f2.y
AND f1.y = f2.x
GROUP BY f1.x, f1.y
-- Must be at least two records and matching remainded pairs
HAVING COUNT(f1.x) > 1 OR f1.x < f1.y
ORDER BY f1.x
