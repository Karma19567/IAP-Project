const books = [];

exports.getAllBooks = (req, res) => {
  res.json(books);
};

exports.addBook = (req, res) => {
  const book = req.body;
  books.push(book);
  res.status(201).json({ message: "Book added!", book });
};
