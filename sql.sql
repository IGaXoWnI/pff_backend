SELECT boxsrestaucat.* , 1 as favorite 1 FROM boxsrestaucat
INNER JOIN favorite ON favorite.favorite_boxsid = boxsrestaucat.boxs_id AND favorite.favorite_usersid = 33
UNION ALL
SELECT * , 0 as favorite FROM boxsrestaucat
WHERE boxs_id != (SELECT boxsrestaucat.* , 1 as favorite 1 FROM boxsrestaucat
INNER JOIN favorite ON favorite.favorite_boxsid = boxsrestaucat.boxs_id AND favorite.favorite_usersid = 33) ;





SELECT orders.* , users.* , boxs.* , favorite.* FROM orders
INNER JOIN users on users.users_id = orders.orders_usersid
INNER JOIN favorite on favorite.favorite_usersid = users.users_id
INNER JOIN boxs on boxs.boxs_id = favorite.favorite_boxsid
