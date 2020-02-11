CREATE TABLE topicOC
(
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(100) NOT NULL
);

INSERT INTO topicOC (name) VALUES ('Faith');
INSERT INTO topicOC (name) VALUES ('Sacrifice');
INSERT INTO topicOC (name) VALUES ('Charity');

CREATE TABLE scripture_topicOC
(
	scriptureId int NOT NULL REFERENCES scripturesOC(id),
	topicId int NOT NULL REFERENCES topicOC(id)
);

GRANT SELECT, INSERT, UPDATE ON topic TO ta_user;
GRANT SELECT, INSERT, UPDATE ON scripture_topic TO ta_user;

GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA public TO ta_user;
