SELECT id, movie, description, rating
FROM cinema
WHERE id % 2 != 0
AND NOT description = 'boring' ORDER BY rating DESC;
