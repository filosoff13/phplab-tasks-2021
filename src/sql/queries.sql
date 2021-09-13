SELECT price AS cash
FROM purchages AS p
         INNER JOIN goods AS g
                    ON p.goods_id = g.id


-- 2
SELECT price AS cash
FROM purchages AS p
where price > 300
-- 3
SELECT price AS cash
FROM purchages AS p
where price between  150 and 450
limit 1
-- 4
SELECT sum(price) AS cash, count(castomer_id) 'count of customers'
FROM purchages AS p
group by castomer_id
order by castomer_id