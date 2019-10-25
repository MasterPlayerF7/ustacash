CREATE DATABASE ustacash;

USE ustacash;

CREATE TABLE alliances (
  alliance_id INT UNSIGNED AUTO_INCREMENT,
  alliance_name VARCHAR(100),
  alliance_entity VARCHAR(100),
  alliance_creation_date DATE,
  alliance_finalization_date DATE,

  PRIMARY KEY (alliance_id)
);

CREATE TABLE administrators (
  admin_id INT UNSIGNED AUTO_INCREMENT,
  alliance_id INT UNSIGNED,
  admin_nickname VARCHAR(100),
  admin_password VARCHAR(30),

  PRIMARY KEY (admin_id),
  FOREIGN KEY fk_administrators_alliance_id (alliance_id)
  REFERENCES alliances (alliance_id)
);

CREATE TABLE locations (
  location_name VARCHAR(70) UNIQUE,
  location_code VARCHAR(4) UNIQUE,
  PRIMARY KEY (location_code)
);

CREATE TABLE users (
  user_id INT UNSIGNED AUTO_INCREMENT,
  user_name VARCHAR(60),
  user_surname VARCHAR(60),
  user_identification VARCHAR(14) UNIQUE,
  user_email VARCHAR(70) UNIQUE,
  user_password VARCHAR(30),
  user_mobile VARCHAR(10) UNIQUE,
  user_location VARCHAR(4),
  user_deposit BIGINT,
  user_validated BOOL,
  user_verification_code VARCHAR(4),

  PRIMARY KEY (user_id),
  FOREIGN KEY fk_users_user_location (user_location)
  REFERENCES locations (location_code)
);

CREATE TABLE transactions (
  transaction_id INT UNSIGNED AUTO_INCREMENT,
  transaction_type VARCHAR(30),
  transaction_admin INT UNSIGNED,
  transaction_user_source INT UNSIGNED,
  transaction_user_target INT UNSIGNED,
  transaction_alliance INT UNSIGNED,
  transaction_amount INT UNSIGNED,
  transaction_date TIMESTAMP,

  PRIMARY KEY (transaction_id),

  FOREIGN KEY fk_transactions_transaction_admin (transaction_admin)
  REFERENCES administrators (admin_id),

  FOREIGN KEY fk_transactions_transaction_user_source (transaction_user_source)
  REFERENCES users (user_id),

  FOREIGN KEY fk_transactions_transaction_user_target (transaction_user_target)
  REFERENCES users (user_id),

  FOREIGN KEY fk_transactions_transaction_alliance (transaction_alliance)
  REFERENCES alliances (alliance_id)
);
