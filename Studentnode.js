const mysql = require('mysql');

// Create a connection to the database
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'your_username',
  password: 'your_password',
  database: 'your_database',
});

// Connect to the database
connection.connect((err) => {
  if (err) {
    console.error('Error connecting to the database:', err);
    return;
  }
  console.log('Connected to the database');

  // Define an array of student records to insert
  const students = [
    { name: 'John Doe', age: 20 },
    { name: 'Jane Smith', age: 22 },
    { name: 'Michael Johnson', age: 21 },
  ];

  // SQL query to insert multiple records
  const query = 'INSERT INTO student (name, age) VALUES ?';

  // Execute the query with the array of student records
  connection.query(query, [students.map((student) => [student.name, student.age])], (err, result) => {
    if (err) {
      console.error('Error inserting records:', err);
      return;
    }
    console.log('Records inserted successfully');
    console.log('Result:', result);

    // Close the database connection
    connection.end();
  });
});
