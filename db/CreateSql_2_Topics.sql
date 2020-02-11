CREATE TABLE public.topic
(
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(100) NOT NULL
);

INSERT INTO topic (name) VALUES ('Faith');
INSERT INTO topic (name) VALUES ('Sacrifice');
INSERT INTO topic (name) VALUES ('Charity');

CREATE TABLE public.scripture_topic
(
	scriptureId int NOT NULL REFERENCES scriptures(id),
	topicId int NOT NULL REFERENCES topic(id)
);

GRANT SELECT, INSERT, UPDATE ON topic TO ta_user;
GRANT SELECT, INSERT, UPDATE ON scripture_topic TO ta_user;

GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA public TO ta_user;
