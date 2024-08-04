INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$lIXvdHGvtypJq5CsOdEXqOPhyVjQYm9aY3RcJhbirysZvDUkcQdky', NULL, NULL, NULL, 'ADM', '2024-04-12 09:18:02', '2024-04-12 09:18:02'),
(2, 'Menuka Deshan', 'user@gmail.com', NULL, '$2y$12$FP2qVD5lFWEjlgAdV/nj0OR7NcoFAyFmXbvp5KRwZpM8kqPVhhGQa', NULL, NULL, NULL, 'USR', '2024-04-12 09:18:45', '2024-04-28 09:21:40');

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(28, 'Smart phones', 'smart-phones', '2024-07-29 06:49:32', '2024-07-29 06:49:32'),
(29, 'Labtops', 'labtops', '2024-07-29 06:51:05', '2024-07-29 06:51:05'),
(30, 'Soft Drinks', 'soft-drinks', '2024-07-29 06:52:42', '2024-07-29 06:52:42');

INSERT INTO `home_categories` (`id`, `sel_categories`, `no_of_products`, `created_at`, `updated_at`) VALUES
(1, '30', 5, NULL, '2024-07-29 07:20:15');

INSERT INTO `home_sliders` (`id`, `title`, `subtitle`, `price`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Sale', 'Sales', '100', 'ss', '1722257301.png', 1, '2024-07-29 07:18:21', '2024-07-29 07:18:21'),
(5, 'Sale', 'Sale', '100', 'ss', '1722257326.png', 1, '2024-07-29 07:18:46', '2024-07-29 07:18:46'),
(6, 'Sale', 'sale', '100', 'ss', '1722257350.png', 1, '2024-07-29 07:19:10', '2024-07-29 07:19:10'),
(7, 'SoftDrinks', 'sd', '180', 'd', '1722257383.jpg', 1, '2024-07-29 07:19:43', '2024-07-29 07:19:43');

INSERT INTO `settings` (`id`, `email`, `phone`, `phone2`, `address`, `map`, `twiter`, `facebook`, `pinterest`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '0770445566', '', 'No 54 Colombo , Sri Lanka', '', '', '', '', '', '', NULL, NULL),
(2, 'admin@gmail.com', '0770445566', '', 'No 54 Colombo , Sri Lanka', '', '', '', '', '', '', NULL, NULL);

INSERT INTO `subcategories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(19, 'Samsung', 'samsung', 28, '2024-07-29 06:50:12', '2024-07-29 06:50:12'),
(20, 'Apple', 'apple', 28, '2024-07-29 06:50:23', '2024-07-29 06:50:23'),
(21, 'Google', 'google', 28, '2024-07-29 06:50:29', '2024-07-29 06:50:29'),
(22, 'Xiaomi', 'xiaomi', 28, '2024-07-29 06:50:38', '2024-07-29 06:50:38'),
(23, 'OnePlus', 'oneplus', 28, '2024-07-29 06:50:47', '2024-07-29 06:50:47'),
(24, 'Dell', 'dell', 29, '2024-07-29 06:51:14', '2024-07-29 06:51:14'),
(25, 'Lenovo', 'lenovo', 29, '2024-07-29 06:51:20', '2024-07-29 06:51:20'),
(26, 'Acer', 'acer', 29, '2024-07-29 06:51:25', '2024-07-29 06:51:25'),
(27, 'Asus', 'asus', 29, '2024-07-29 06:51:29', '2024-07-29 06:51:29'),
(28, 'MSI', 'msi', 29, '2024-07-29 06:51:33', '2024-07-29 06:51:33'),
(29, 'Microsoft', 'microsoft', 29, '2024-07-29 06:51:40', '2024-07-29 06:51:40'),
(30, 'Razer', 'razer', 29, '2024-07-29 06:51:45', '2024-07-29 06:51:45'),
(31, 'Apple', 'apple', 29, '2024-07-29 06:51:49', '2024-07-29 06:51:49'),
(32, 'Coca Cola', 'coca-cola', 30, '2024-07-29 06:52:52', '2024-07-29 06:52:52'),
(33, 'Fanta', 'fanta', 30, '2024-07-29 06:52:57', '2024-07-29 06:52:57'),
(34, 'Sprite', 'sprite', 30, '2024-07-29 06:53:02', '2024-07-29 06:53:02');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$lIXvdHGvtypJq5CsOdEXqOPhyVjQYm9aY3RcJhbirysZvDUkcQdky', NULL, NULL, NULL, 'ADM', '2024-04-12 09:18:02', '2024-04-12 09:18:02'),
(2, 'Menuka Deshan', 'user@gmail.com', NULL, '$2y$12$FP2qVD5lFWEjlgAdV/nj0OR7NcoFAyFmXbvp5KRwZpM8kqPVhhGQa', NULL, NULL, NULL, 'USR', '2024-04-12 09:18:45', '2024-04-28 09:21:40');

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`, `subcategory_id`) VALUES
(57, 'Sprite', 'sprite', 'The lemon-lime soda that started it all—classic', 'The lemon-lime soda that started it all—classic', 120.00, 100.00, 'sprite-1', 'instock', 1, 100, '1722256086.jpg', NULL, 30, '2024-07-29 06:58:06', '2024-07-29 06:58:06', 34),
(58, 'Fanta Orange', 'fanta-orange', 'Fanta - Fruit Flavours & Ingredients | Coca-Cola GB', 'Fanta - Fruit Flavours & Ingredients', 120.00, 100.00, 'fanta-1', 'instock', 1, 100, '1722256335.webp', NULL, 30, '2024-07-29 07:02:15', '2024-07-29 07:02:15', 33),
(59, 'Fanta Strawberry Fruit Soda,', 'fanta-strawberry-fruit-soda', 'Refreshing Fanta Strawberry Fruit Soda, 2L Bottle', 'Refreshing Fanta Strawberry Fruit Soda, 2L Bottle', 700.00, 600.00, 'fanta-s1', 'instock', 1, 100, '1722256409.webp', NULL, 30, '2024-07-29 07:03:29', '2024-07-29 07:03:29', 33),
(61, 'Coca Cola Original 500ml Bottle', 'coca-cola-original-500ml-bottle', 'Coca Cola Original 500ml Bottle', 'Coca Cola Original 500ml Bottle', 170.00, 160.00, 'coke1', 'instock', 1, 100, '1722256550.jpg', NULL, 30, '2024-07-29 07:05:50', '2024-07-29 07:05:50', 32);

INSERT INTO `sales` (`id`, `sale_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-07-31 20:44:25', 1, NULL, NULL);
