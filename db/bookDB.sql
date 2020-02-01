
CREATE TABLE public.bookRepository
(
	id SERIAL NOT NULL PRIMARY KEY,
	genre VARCHAR(100) NOT NULL,
	title VARCHAR(100) NOT NULL,
	purpose VARCHAR(100) NOT NULL,
	description TEXT NOT NULL
	
);

CREATE TABLE public.worldGenreTable
(
	id SERIAL NOT NULL PRIMARY KEY,
	bookRepository_id INT NOT NULL REFERENCES public.bookRepository(id),
	bookRepository_genre VARCHAR(100)  NOT NULL REFERENCES public.bookRepository(genre),
	bookRepository_title VARCHAR (100) NOT NULL REFERENCES public.bookRepository(title),
	worldGenre TEXT NOT NULL
);

