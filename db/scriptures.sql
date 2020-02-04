CREATE TABLE public.scriptures
(
	id SERIAL NOT NULL PRIMARY KEY,
	book VARCHAR(100) NOT NULL,
	chapter INT NOT NULL,
	verse INT NOT NULL,
	content TEXT NOT NULL
);