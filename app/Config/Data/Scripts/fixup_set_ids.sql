UPDATE cards
SET `set_info_id` = 1
WHERE short_name like '%T206%';

UPDATE cards
SET `set_info_id` = 2
WHERE short_name like '%1952%';

UPDATE cards
SET `card_wiki_info_id` = cards.card_id;
