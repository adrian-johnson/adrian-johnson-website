CREATE TABLE "visitors" (
	"id"	INTEGER NOT NULL UNIQUE,
	"visit_date" TEXT,
	"ip_address"	TEXT,
	"user_agent"	TEXT,
	"referrer"	TEXT,
	"current_page"	TEXT,
	"query_string"	TEXT,
	"request_method"	TEXT,
	"geo_info"	TEXT,
	"city"	TEXT,
	"country"	TEXT,
	PRIMARY KEY("id" AUTOINCREMENT)
)

DELETE FROM visitors;    
--DELETE FROM sqlite_sequence WHERE name = 'visitors';
UPDATE sqlite_sequence SET SEQ = 0 WHERE NAME='visitors';