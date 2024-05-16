
ALTER TABLE `orders`
ADD `street` VARCHAR(95) NOT NULL,
ADD `city` VARCHAR(200) NOT NULL,
ADD `country` VARCHAR(90) NOT NULL,
ADD `state` VARCHAR(90) NOT NULL,
ADD `phone` VARCHAR(15) NOT NULL,
ADD `zip_code` VARCHAR(20) NOT NULL;

UPDATE orders AS o
JOIN addresses AS a ON o.user_id = a.user_id
SET o.street = a.street,
    o.city = a.city,
    o.country = a.country,
    o.state = a.state,
    o.phone = a.phone,
    o.zip_code = a.zip_code;



