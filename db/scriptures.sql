CREATE TABLE public.scriptures
(
	id SERIAL NOT NULL PRIMARY KEY,
	book VARCHAR(100) NOT NULL,
	chapter INT NOT NULL,
	verse INT NOT NULL,
	content TEXT NOT NULL
);

INSERT INTO scripture(book, chapter, verse, content)values ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehend it not.');

INSERT INTO scripture(book, chapter, verse, content)values ('Doctrine and Covenants', 88, 49, 'And the light shineth in darkness; and the darkness comprehend it not.');

INSERT INTO scripture(book, chapter, verse, content)values ('Doctrine and Covenants', 93, 28, 'He that keepeth his commandments receiveth truth and light,');

INSERT INTO scriptures(book, chapter, verse, content)values ('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless,');

CREATE USER ta_user WITH PASSWORD 'ta_pass';
GRANT SELECT, INSERT, UPDATE ON scripture TO ta_user;