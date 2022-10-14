SELECT *
FROM products as pd
WHERE pd.brand = 'APpl';

SELECT *
FROM products as pd
WHERE pd.brand LIKE 'app%';

SELECT *
FROM products as pd
WHERE pd.brand LIKE '%app%'
  AND pd.categoryId = '1';

SELECT *
FROM products as pd
WHERE pd.brand LIKE '%app%'
  AND (pd.categoryId = '1'
    OR pd.categoryId = '2' OR pd.categoryId = '3');

SELECT *
FROM products as pd
         LEFT JOIN categories as ct ON ct.id = pd.categoryId
WHERE pd.brand LIKE '%tea%'
   OR pd.title LIKE '%tea%'
   OR pd.description LIKE '%tea%'
   OR ct.title LIKE '%tea%';

SELECT pd.id, pd.title, im.url, ct.title
FROM products as pd
         LEFT JOIN images as im ON im.productId = pd.id
         LEFT JOIN categories as ct ON ct.id = pd.categoryId;

SELECT pd.id,
       pd.title,
       ct.title,
       GROUP_CONCAT(im.url)
FROM products as pd
         LEFT JOIN images as im ON im.productId = pd.id
         LEFT JOIN categories as ct ON ct.id = pd.categoryId
WHERE ct.id = 1
GROUP BY pd.id, pd.title, ct.title

ORDER BY pd.title ASC;


SELECT pd.id , pd.title, ct.title,
       GROUP_CONCAT( DISTINCT im.url SEPARATOR ';')
FROM products as pd
         LEFT JOIN images as im ON im.productId = pd.id
         LEFT JOIN categories as ct ON ct.id = pd.categoryId
GROUP BY pd.id, pd.title, ct.title;

