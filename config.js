const mysql = require('mysql');
const redis = require('redis');
const { MongoClient } = require('mongodb');

// MySQL
const mysqlConnection = mysql.createConnection({
  host: 'mysql-master',
  user: 'root',
  password: 'rootpassword',
  database: 'mydatabase'
});

mysqlConnection.connect((err) => {
  if (err) {
    console.error('MySQL connection failed: ' + err.stack);
    return;
  }
  console.log('Connected to MySQL as id ' + mysqlConnection.threadId);
});

// Redis
const redisClient = redis.createClient({
  host: 'redis',
  port: 6379
});

redisClient.on('connect', function() {
  console.log('Connected to Redis successfully.');
});

// MongoDB
const mongoUrl = 'mongodb://mongodb:27017';
MongoClient.connect(mongoUrl, { useUnifiedTopology: true }, (err, client) => {
  if (err) {
    console.error('MongoDB connection failed: ' + err.stack);
    return;
  }
  const db = client.db('mydatabase');
  console.log('Connected to MongoDB successfully.');
});
