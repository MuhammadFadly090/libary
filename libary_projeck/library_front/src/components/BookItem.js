import React from 'react';
import './BookItem.css'; // Import CSS khusus untuk komponen ini

const BookItem = ({ book, onEdit, onDelete }) => {
  return (
    <div className="book-item">
      <h3>{book.title}</h3>
      <p>Author: {book.author}</p>
      <p>Year: {book.year}</p>
      <button className="edit-btn" onClick={() => onEdit(book)}>Edit</button>
      <button className="delete-btn" onClick={() => onDelete(book.id)}>Delete</button>
    </div>
  );
};

export default BookItem;
