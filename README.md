# event_overlap_counter
This is a quick and dirty script that reads through a huge list of events and determines the maximum number of events that were occurring at the same time
offlist_items.mysql = query that produced the list of events
offlist_items.csv   = output from query
item_period_max_overlaps.php = where all the magic happens
Invoked using
php item_period_max_overlaps.php <offlist_items.csv
