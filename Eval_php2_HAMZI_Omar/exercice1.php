<!-- REQUÊTE SQL EXERCICE 1-->

SELECT u.fistname,u.lastname,a.title
FROM users u , articles a
WHERE u.id = a.id
AND a.id_user = 10;
