-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 07:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kpi_master`
--

CREATE TABLE `tbl_kpi_master` (
  `kpi_id` int(11) NOT NULL,
  `kpi_month` varchar(50) DEFAULT NULL,
  `kpi_year` varchar(50) DEFAULT NULL,
  `kpi_month_year` varchar(50) DEFAULT NULL,
  `kpi_name` varchar(50) DEFAULT NULL,
  `team_name` varchar(50) DEFAULT NULL,
  `sub_team_name` varchar(50) DEFAULT NULL,
  `frequency` varchar(50) DEFAULT NULL,
  `target` varchar(50) DEFAULT NULL,
  `target_type` varchar(50) DEFAULT NULL,
  `actual` varchar(50) DEFAULT NULL,
  `tat_status` varchar(50) DEFAULT NULL,
  `comments` varchar(150) DEFAULT NULL,
  `record_status` varchar(50) DEFAULT NULL,
  `requester_updated_date` date DEFAULT NULL,
  `requester_updated_time` time DEFAULT NULL,
  `approval_updated_date` date DEFAULT NULL,
  `approval_updated_time` time DEFAULT NULL,
  `requestor` varchar(50) DEFAULT NULL,
  `approver` varchar(50) DEFAULT NULL,
  `missed_type` varchar(50) DEFAULT NULL,
  `opco` varchar(50) DEFAULT NULL,
  `kpi_category` varchar(10) DEFAULT NULL,
  `coe` varchar(10) DEFAULT NULL,
  `domain` varchar(50) DEFAULT NULL,
  `requestor_id` int(11) DEFAULT NULL,
  `approver_id` int(11) DEFAULT NULL,
  `primary_requestor_name` varchar(50) DEFAULT NULL,
  `secondary_requestor_name` varchar(50) DEFAULT NULL,
  `root_cause` varchar(250) DEFAULT NULL,
  `corrective_action` varchar(250) DEFAULT NULL,
  `approve_reject` varchar(15) DEFAULT NULL,
  `supervisor_comments` varchar(105) DEFAULT NULL,
  `approver1_name` varchar(15) DEFAULT NULL,
  `approver2_name` varchar(15) DEFAULT NULL,
  `approver_comments` varchar(15) DEFAULT NULL,
  `approved_by` varchar(15) DEFAULT NULL,
  `approve_reject_date_time` binary(8) NOT NULL,
  `role` varchar(15) DEFAULT NULL,
  `target_form` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kpi_master`
--

INSERT INTO `tbl_kpi_master` (`kpi_id`, `kpi_month`, `kpi_year`, `kpi_month_year`, `kpi_name`, `team_name`, `sub_team_name`, `frequency`, `target`, `target_type`, `actual`, `tat_status`, `comments`, `record_status`, `requester_updated_date`, `requester_updated_time`, `approval_updated_date`, `approval_updated_time`, `requestor`, `approver`, `missed_type`, `opco`, `kpi_category`, `coe`, `domain`, `requestor_id`, `approver_id`, `primary_requestor_name`, `secondary_requestor_name`, `root_cause`, `corrective_action`, `approve_reject`, `supervisor_comments`, `approver1_name`, `approver2_name`, `approver_comments`, `approved_by`, `approve_reject_date_time`, `role`, `target_form`) VALUES
(64, 'Dec', '2022', 'Dec-2022', 'Team_Quality', 'Team_C', 'rose', 'monthly', '98%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008c1, NULL, 'higher the better'),
(65, 'Dec', '2022', 'Dec-2022', 'TAT', 'Team_C', 'rose', 'monthly', '100%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008c2, NULL, 'higher the better'),
(66, 'Dec', '2022', 'Dec-2022', 'No of Invoices Processed', 'Team_C', 'rose', 'monthly', '95', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008c3, NULL, 'higher the better'),
(67, 'Dec', '2022', 'Dec-2022', 'No of Errors', 'Team_C', 'rose', 'monthly', '5', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'lb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008c4, NULL, 'lower the better'),
(68, 'Dec', '2022', 'Dec-2022', 'Customer Feedback', 'Team_C', 'rose', 'monthly', '(R:0-4);(A:5-7);(G:8-10);', 'RAG', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'rag', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008c5, NULL, ''),
(69, 'Dec', '2022', 'Dec-2022', 'Team_Quality', 'Team_C', 'lotus', 'monthly', '100%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008c6, NULL, 'higher the better'),
(70, 'Dec', '2022', 'Dec-2022', 'TAT', 'Team_C', 'lotus', 'monthly', '100%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008c7, NULL, 'higher the better'),
(71, 'Dec', '2022', 'Dec-2022', 'No of Invoices Processed', 'Team_C', 'lotus', 'monthly', '100', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008c8, NULL, 'higher the better'),
(72, 'Dec', '2022', 'Dec-2022', 'No of Errors', 'Team_C', 'lotus', 'monthly', '10', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'lb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008c9, NULL, 'lower the better'),
(73, 'Dec', '2022', 'Dec-2022', 'Customer Feedback', 'Team_C', 'lotus', 'monthly', '(R:0-2);(A:3-5);(G:6-10)', 'RAG', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'rag', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008ca, NULL, ''),
(74, 'Dec', '2022', 'Dec-2022', 'Team_Quality', 'Team_C', 'jasmine', 'monthly', '98%', 'Percent', '', '', '', 'pending', NULL, NULL, NULL, NULL, NULL, NULL, '', 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', '', '', NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008cb, NULL, 'higher the better'),
(75, 'Dec', '2022', 'Dec-2022', 'TAT', 'Team_C', 'jasmine', 'monthly', '98%', 'Percent', '99', 'Met', '', 'pending for approval', NULL, NULL, NULL, NULL, NULL, NULL, '', 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', '', '', NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008cc, NULL, 'higher the better'),
(76, 'Dec', '2022', 'Dec-2022', 'No of Invoices Processed', 'Team_C', 'jasmine', 'monthly', '95', 'Number', '99', 'Met', 'done on time', 'pending for approval', NULL, NULL, NULL, NULL, NULL, NULL, 'NA', 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', 'na', 'na', NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008cd, NULL, 'higher the better'),
(77, 'Dec', '2022', 'Dec-2022', 'No of Errors', 'Team_C', 'jasmine', 'monthly', '5', 'Number', '5', 'Met', '', 'pending for approval', NULL, NULL, NULL, NULL, NULL, NULL, '', 'Copernic', 'lb', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', '', '', NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008ce, NULL, 'lower the better'),
(78, 'Dec', '2022', 'Dec-2022', 'Customer Feedback', 'Team_C', 'jasmine', 'monthly', '(R:0-2);(A:3-5);(G:6-10)', 'RAG', '11', 'Met', '', 'pending for approval', NULL, NULL, NULL, NULL, NULL, NULL, '', 'Copernic', 'rag', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', '', '', NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008cf, NULL, ''),
(79, 'Dec', '2022', 'Dec-2022', 'Team_Quality', 'Team_C', 'Lily', 'monthly', '95%', 'Percent', '99', 'Met', '', 'pending for approval', NULL, NULL, NULL, NULL, NULL, NULL, '', 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', '', '', NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d0, NULL, 'higher the better'),
(80, 'Dec', '2022', 'Dec-2022', 'TAT', 'Team_C', 'Lily', 'monthly', '100%', 'Percent', '100', 'Met', '', 'pending', NULL, NULL, NULL, NULL, NULL, NULL, '', 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', '', '', NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d1, NULL, 'higher the better'),
(81, 'Dec', '2022', 'Dec-2022', 'No of Invoices Processed', 'Team_C', 'Lily', 'monthly', '93', 'Number', '95', 'Met', '', 'pending', NULL, NULL, NULL, NULL, NULL, NULL, '', 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', '', '', NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d2, NULL, 'higher the better'),
(82, 'Dec', '2022', 'Dec-2022', 'No of Errors', 'Team_C', 'Lily', 'monthly', '22:00', 'time', '', '', '', 'pending', NULL, NULL, NULL, NULL, NULL, NULL, '', 'Copernic', 'lb', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', '', '', NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d3, NULL, ''),
(83, 'Dec', '2022', 'Dec-2022', 'Customer Feedback', 'Team_C', 'Lily', 'monthly', '22:00', 'time', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'lb', 'FinOps', 'RTR', NULL, NULL, 'Amir', 'Hritik', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d4, NULL, ''),
(151, 'Dec', '2022', 'Dec-2022', 'Team_Quality', 'Team_C', 'rose', 'monthly', '98%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d5, NULL, 'higher the better'),
(152, 'Dec', '2022', 'Dec-2022', 'TAT', 'Team_C', 'rose', 'monthly', '100%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d6, NULL, 'higher the better'),
(153, 'Dec', '2022', 'Dec-2022', 'No of Invoices Processed', 'Team_C', 'rose', 'monthly', '95', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d7, NULL, 'higher the better'),
(154, 'Dec', '2022', 'Dec-2022', 'No of Errors', 'Team_C', 'rose', 'monthly', '5', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'lb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d8, NULL, 'lower the better'),
(155, 'Dec', '2022', 'Dec-2022', 'Customer Feedback', 'Team_C', 'rose', 'monthly', '(R:0-4);(A:5-7);(G:8-10);', 'RAG', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'rag', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008d9, NULL, ''),
(156, 'Dec', '2022', 'Dec-2022', 'Team_Quality', 'Team_C', 'lotus', 'monthly', '100%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008da, NULL, 'higher the better'),
(157, 'Dec', '2022', 'Dec-2022', 'TAT', 'Team_C', 'lotus', 'monthly', '100%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008db, NULL, 'higher the better'),
(158, 'Dec', '2022', 'Dec-2022', 'No of Invoices Processed', 'Team_C', 'lotus', 'monthly', '100', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008dc, NULL, 'higher the better'),
(159, 'Dec', '2022', 'Dec-2022', 'No of Errors', 'Team_C', 'lotus', 'monthly', '10', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'lb', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008dd, NULL, 'lower the better'),
(160, 'Dec', '2022', 'Dec-2022', 'Customer Feedback', 'Team_C', 'lotus', 'monthly', '(R:0-4);(A:5-7);(G:8-10);', 'RAG', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'rag', 'FinOps', 'SL', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008de, NULL, ''),
(161, 'Dec', '2022', 'Dec-2022', 'Team_Quality', 'Team_C', 'jasmine', 'monthly', '98%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008df, NULL, 'higher the better'),
(162, 'Dec', '2022', 'Dec-2022', 'TAT', 'Team_C', 'jasmine', 'monthly', '98%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e0, NULL, 'higher the better'),
(163, 'Dec', '2022', 'Dec-2022', 'No of Invoices Processed', 'Team_C', 'jasmine', 'monthly', '95', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e1, NULL, 'higher the better'),
(164, 'Dec', '2022', 'Dec-2022', 'No of Errors', 'Team_C', 'jasmine', 'monthly', '5', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'lb', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e2, NULL, 'lower the better'),
(165, 'Dec', '2022', 'Dec-2022', 'Customer Feedback', 'Team_C', 'jasmine', 'monthly', '(R:0-4);(A:5-7);(G:8-10);', 'RAG', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'rag', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e3, NULL, ''),
(166, 'Dec', '2022', 'Dec-2022', 'Team_Quality', 'Team_C', 'Lily', 'monthly', '95%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e4, NULL, 'higher the better'),
(167, 'Dec', '2022', 'Dec-2022', 'TAT', 'Team_C', 'Lily', 'monthly', '100%', 'Percent', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e5, NULL, 'higher the better'),
(168, 'Dec', '2022', 'Dec-2022', 'No of Invoices Processed', 'Team_C', 'Lily', 'monthly', '93', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'hb', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e6, NULL, 'higher the better'),
(169, 'Dec', '2022', 'Dec-2022', 'No of Errors', 'Team_C', 'Lily', 'monthly', '3', 'Number', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'lb', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e7, NULL, 'lower the better'),
(170, 'Dec', '2022', 'Dec-2022', 'Customer Feedback', 'Team_C', 'Lily', 'monthly', '(R:0-4);(A:5-7);(G:8-10);', 'RAG', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copernic', 'rag', 'FinOps', 'RTR', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e8, NULL, ''),
(171, 'Dec', ' ', 'Dec-2022', ' ', 'Team_C', ' ', ' ', ' ', ' ', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', ' ', ' ', NULL, NULL, 'Salman', 'Amir', NULL, NULL, NULL, NULL, 'Sam', 'Amitabh', NULL, NULL, 0x00000000000008e9, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_master`
--

CREATE TABLE `tbl_role_master` (
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role_master`
--

INSERT INTO `tbl_role_master` (`role`) VALUES
('Admin'),
('Approver'),
('MI'),
('Requestor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_master`
--

CREATE TABLE `tbl_team_master` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_team_master`
--

INSERT INTO `tbl_team_master` (`team_id`, `team_name`) VALUES
(1, 'Team_A'),
(2, 'Team_B'),
(3, 'Team_C'),
(4, 'Team_D'),
(5, 'Team_E');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_master`
--

CREATE TABLE `tbl_user_master` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL,
  `team_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emp_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_master`
--

INSERT INTO `tbl_user_master` (`emp_id`, `emp_name`, `password`, `status`, `role`, `team_id`, `email`, `emp_type`) VALUES
(1, 'Sam', 'sam@123', 'Active', 'Approver', 2, 'sam@gmail.com', 'Non-Admin'),
(2, 'Amir Khan', 'amir@123', 'Active', 'Approver', 1, 'amir@gmail.com', 'Non-Admin'),
(3, 'Hritik', 'hritik@123', 'Active', 'Requestor', 2, 'hritik@gmail.com', 'Non-Admin'),
(5, 'Shahrukh', 'shahrukh@123', 'Active', 'Admin', 2, 'sharukh@gmail.com', 'Admin'),
(6, 'Amitabh', 'amir@123', 'Active', 'Approver', 1, 'amitabh@gmail.com', 'Non-Admin'),
(7, 'Sunil', 'amir@123', 'Active', 'Requestor', 3, 'sunil@gmail.com', 'Non-Admin'),
(8, 'rohit', 'amir@123', NULL, 'Preparer', 1, 'rohit@gmail.com', 'Non-Admin'),
(9, 'Shreyas', 'amir@123', NULL, 'Preparer', 2, 'shreyas@gmail.com', 'Non-Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_team_master`
--

CREATE TABLE `tbl_user_team_master` (
  `emp_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `opco` varchar(50) DEFAULT NULL,
  `domain` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_team_master`
--

INSERT INTO `tbl_user_team_master` (`emp_id`, `team_id`, `opco`, `domain`) VALUES
(1, 1, 'SHIP', 'IAR'),
(2, 1, 'SHIP', 'IAR'),
(3, 1, 'SHIP', 'IAR'),
(4, 3, 'Copernic', 'SL'),
(5, 3, 'Copernic', 'SL'),
(6, 2, 'SHIP', 'TAS'),
(7, 2, 'SHIP', 'TAS'),
(1, 2, 'SHIP', 'TAS'),
(1, 2, 'Copernic', 'SL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_role_master`
--
ALTER TABLE `tbl_role_master`
  ADD UNIQUE KEY `UK_role_master_role` (`role`);

--
-- Indexes for table `tbl_team_master`
--
ALTER TABLE `tbl_team_master`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `tbl_user_master`
--
ALTER TABLE `tbl_user_master`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_team_master`
--
ALTER TABLE `tbl_team_master`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_master`
--
ALTER TABLE `tbl_user_master`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
