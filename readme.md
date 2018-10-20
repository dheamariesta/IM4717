menu
name: varchar(255) primary
price: float(5,2)

sales
id: int(11) primary
date: datetime() current_timestamp
total: float(5,2) default 0

transaction
id: int(11)
menu: varchar(255)
price: float(5,2)
quantity: int(11)
subtotal: float(5,2)
relation view:
sales_update
