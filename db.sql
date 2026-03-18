CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pickup_address TEXT NOT NULL,
  dropoff_address TEXT NOT NULL,
  item_description TEXT,
  status VARCHAR(20) DEFAULT 'pending',
  price_pkr INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
