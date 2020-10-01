-- app.sql for a mysql database
BEGIN;

	CREATE TABLE users (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		email VARCHAR(255) NOT NULL UNIQUE,
		password VARCHAR(255) NOT NULL,
		role VARCHAR(20) NOT NULL,
		created DATETIME DEFAULT CURRENT_TIMESTAMP,
		modified DATETIME DEFAULT CURRENT_TIMESTAMP 
	);

	CREATE TABLE companies (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(255) NOT NULL,
		location VARCHAR(255),
		created DATETIME DEFAULT CURRENT_TIMESTAMP,
		modified DATETIME DEFAULT CURRENT_TIMESTAMP 
	);

	CREATE TABLE visits (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		company_id INT REFERENCES companies(id),
		user_id INT REFERENCES users(id),
		checkin_time DATETIME,
		checkout_time DATETIME,
		created DATETIME DEFAULT CURRENT_TIMESTAMP,
		modified DATETIME DEFAULT CURRENT_TIMESTAMP 
	);

COMMIT;
