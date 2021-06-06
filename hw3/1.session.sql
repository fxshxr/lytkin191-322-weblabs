
SELECT names.firstname , addresses.adr
from names INNER join addresses
on addresses.id = names.id
where names.firstname = "igor"