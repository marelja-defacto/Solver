SELECT cont.contest_id, cont.hacker_id, cont.name, SUM(total_submissions), SUM(total_accepted_submissions), SUM(total_views),
SUM(total_unique_views) FROM contests cont
INNER JOIN colleges col ON cont.contest_id = col.contest_id
INNER JOIN challenges chall ON col.college_id = chall.college_id
-- for each challenge, there could be no views or submissions
LEFT JOIN
(SELECT challenge_id, SUM(total_views) as total_views, SUM(total_unique_views) AS total_unique_views
FROM view_stats GROUP BY challenge_id) vs on chall.challenge_id = vs.challenge_id
LEFT JOIN
(SELECT challenge_id, SUM(total_submissions) as total_submissions, SUM(total_accepted_submissions) AS total_accepted_submissions FROM submission_stats GROUP BY challenge_id) ss ON chall.challenge_id = ss.challenge_id
GROUP BY cont.contest_id, cont.hacker_id, cont.name
HAVING SUM(total_submissions) != 0 OR
SUM(total_accepted_submissions) != 0 OR
SUM(total_views) != 0 OR
SUM(total_unique_views) != 0
ORDER BY contest_id;
