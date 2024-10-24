import React, { useState, useEffect } from 'react';
import axios from 'axios';
import BookItem from './components/BookItem'; // Import BookItem
import './styles/App.css'; // Tambahkan file CSS untuk styling umum

function App() {
  const [books, setBooks] = useState([]);
  const [newBook, setNewBook] = useState({ title: '', author: '', year: '' });
  const [editBook, setEditBook] = useState(null);

  useEffect(() => {
    fetchBooks();
  }, []);

  const fetchBooks = () => {
    axios.get('http://localhost:8000/api/books')
      .then(response => setBooks(response.data))
      .catch(error => console.log(error));
  };

  const addBook = () => {
    axios.post('http://localhost:8000/api/books', newBook)
      .then(response => {
        setBooks([...books, response.data]);
        setNewBook({ title: '', author: '', year: '' });
      })
      .catch(error => console.log(error));
  };

  const deleteBook = (id) => {
    axios.delete(`http://localhost:8000/api/books/${id}`)
      .then(() => {
        setBooks(books.filter(book => book.id !== id));
      })
      .catch(error => console.log(error));
  };

  const updateBook = () => {
    axios.put(`http://localhost:8000/api/books/${editBook.id}`, editBook)
      .then(response => {
        setBooks(books.map(book => (book.id === editBook.id ? response.data : book)));
        setEditBook(null);
      })
      .catch(error => console.log(error));
  };

  return (
    <div className="app">
      <h1 className='text-center'>Library Books</h1>

      <div className="add-book-form">
        <h2>Add New Book</h2>
        <input
          type="text"
          placeholder="Title"
          value={newBook.title}
          onChange={e => setNewBook({ ...newBook, title: e.target.value })}
        />
        <input
          type="text"
          placeholder="Author"
          value={newBook.author}
          onChange={e => setNewBook({ ...newBook, author: e.target.value })}
        />
        <input
          type="number"
          placeholder="Year"
          value={newBook.year}
          onChange={e => setNewBook({ ...newBook, year: e.target.value })}
        />
        <button onClick={addBook}>Add Book</button>
      </div>

      <div className="book-list">
        {books.map(book => (
          <BookItem
            key={book.id}
            book={book}
            onEdit={setEditBook}
            onDelete={deleteBook}
          />
        ))}
      </div>

      {editBook && (
        <div className="edit-book-form">
          <h2>Edit Book</h2>
          <input
            type="text"
            placeholder="Title"
            value={editBook.title}
            onChange={e => setEditBook({ ...editBook, title: e.target.value })}
          />
          <input
            type="text"
            placeholder="Author"
            value={editBook.author}
            onChange={e => setEditBook({ ...editBook, author: e.target.value })}
          />
          <input
            type="number"
            placeholder="Year"
            value={editBook.year}
            onChange={e => setEditBook({ ...editBook, year: e.target.value })}
          />
          <button onClick={updateBook}>Update Book</button>
          <button onClick={() => setEditBook(null)}>Cancel</button>
        </div>
      )}
    </div>
  );
}

export default App;
