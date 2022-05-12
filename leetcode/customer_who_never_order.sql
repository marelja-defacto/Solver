SELECT customers.name AS "Customers" FROM customers
WHERE customers.Id NOT IN
(select customerId FROM orders);
