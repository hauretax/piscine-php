SELECT UPPER(last_name) AS "NAME", first_name,price
FROM user_card
INNER JOIN member
INNER JOIN subscription
ON member.id_sub = subscription.id_sub
ON user_card.id_user = member.id_member
WHERE price > 42
ORDER BY last_name ASC, first_name ASC;
