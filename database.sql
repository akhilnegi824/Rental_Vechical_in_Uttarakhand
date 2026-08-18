-- ==========================================================================
-- 1. DATABASE CREATION & INITIALIZATION
-- ==========================================================================

CREATE DATABASE IF NOT EXISTS `rental_vichal` 
  CHARACTER SET utf8mb4 
  COLLATE utf8mb4_unicode_ci;

USE `rental_vichal`;

-- ==========================================================================
-- 2. CORE BOOKINGS REPOSITORY SCHEMA
-- ==========================================================================

CREATE TABLE IF NOT EXISTS `bookings` (
  -- Unique Identifiers
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  
  -- Vehicle Allocation Specs
  `vehicle` VARCHAR(100) NOT NULL,
  `vehicle_type` VARCHAR(20) NOT NULL,
  `pickup_date` DATE NOT NULL,
  `rental_days` INT NOT NULL,
  
  -- Customer Profiles
  `full_name` VARCHAR(120) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `email` VARCHAR(120) DEFAULT NULL,
  `dob` DATE NOT NULL,
  
  -- Mandatory Gov KYC Verification References
  `driving_license` VARCHAR(50) NOT NULL,
  `aadhaar` VARCHAR(20) NOT NULL,
  `pan` VARCHAR(20) NOT NULL,
  
  -- Logistic Meta Data
  `pickup_location` VARCHAR(80) NOT NULL,
  `address` TEXT NOT NULL,
  
  -- Operational System Timestamps
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
