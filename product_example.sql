CREATE DATABASE scenttopia_candles;
use scenttopia_candles;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(10) unsigned DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `unit_price` float(8,2) DEFAULT NULL,
  `unit_size` varchar(15) DEFAULT NULL,
  `unit_weight` varchar(10)  DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET DEFINE OFF;
-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES (1000, 'Amazonian Grape Candle', 14.00, 'Small', '100 g');
INSERT INTO `products` VALUES (1001, 'Amazonian Grape Candle', 19.00, 'Medium', '150 g');
INSERT INTO `products` VALUES (1002, 'Amazonian Grape Candle', 30.00, 'Large', '280 g');
INSERT INTO `products` VALUES (1003, 'Amazonian Grape Candle', 38.00, 'X-Large', '400 g');

INSERT INTO `products` VALUES (1004, 'Japanese Honey Suckle Candle', 14.00, 'Small', '100 g');
INSERT INTO `products` VALUES (1005, 'Japanese Honey Suckle Candle', 19.00, 'Medium', '150 g');
INSERT INTO `products` VALUES (1006, 'Japanese Honey Suckle Candle', 30.00, 'Large', '280 g');
INSERT INTO `products` VALUES (1007, 'Japanese Honey Suckle Candle', 38.00, 'X-Large', '400 g');

INSERT INTO `products` VALUES (1008, 'Ms Dior Candle', 14.00, 'Small', '100 g');
INSERT INTO `products` VALUES (1009, 'Ms Dior Candle', 19.00, 'Medium', '150 g');
INSERT INTO `products` VALUES (1010, 'Ms Dior Candle', 30.00, 'Large', '280 g');
INSERT INTO `products` VALUES (1011, 'Ms Dior Candle', 38.00, 'X-Large', '400 g');

INSERT INTO `products` VALUES (1012, 'Oriental Blossom Candle', 14.00, 'Small', '100 g');
INSERT INTO `products` VALUES (1013, 'Oriental Blossom Candle', 19.00, 'Medium', '150 g');
INSERT INTO `products` VALUES (1014, 'Oriental Blossom Candle', 30.00, 'Large', '280 g');
INSERT INTO `products` VALUES (1015, 'Oriental Blossom Candle', 38.00, 'X-Large', '400 g');

INSERT INTO `products` VALUES (1016, 'Cinamon Apple Candle', 14.00, 'Small', '100g' );
INSERT INTO `products` VALUES (1017, 'Cinamon Apple Candle', 19.00, 'Medium', '150 g');
INSERT INTO `products` VALUES (1018, 'Cinamon Apple Candle', 30.00, 'Large', '280 g');
INSERT INTO `products` VALUES (1019, 'Cinamon Apple Candle', 38.00, 'X-Large', '400 g');

INSERT INTO `products` VALUES (1020, 'Frankincense and Myrrh Candle', 14.00, 'Small', '100 g');
INSERT INTO `products` VALUES (1021, 'Frankincense and Myrrh Candle', 19.00, 'Medium', '150 g');
INSERT INTO `products` VALUES (1022, 'Frankincense and Myrrh Candle', 30.00, 'Large', '280 g');
INSERT INTO `products` VALUES (1023, 'Frankincense and Myrrh Candle', 38.00, 'X-Large', '400 g');

INSERT INTO `products` VALUES (1024, 'Pink Cloud Bubble Candle', 4.50, 'Small', '60 g');
INSERT INTO `products` VALUES (1025, 'Pink Cloud Bubble Candle', 10.00, 'Large', '150 g');

INSERT INTO `products` VALUES (1026, 'White Cloud Bubble Candle', 4.50, 'Small', '60 g');
INSERT INTO `products` VALUES (1027, 'White Cloud Bubble Candle', 10.00, 'Large', '150 g');

INSERT INTO `products` VALUES (1028, 'Lady Pink Candle', 14.00, 'Small', '100 g');
INSERT INTO `products` VALUES (1029, 'Lady Pink Candle', 19.00, 'Medium', '150 g');
INSERT INTO `products` VALUES (1030, 'Lady Pink Candle', 30.00, 'Large', '280 g');
INSERT INTO `products` VALUES (1031, 'Lady Pink Candle', 38.00, 'X-Large', '400 g');

INSERT INTO `products` VALUES (1032, 'Japanese Honey Suckle Diffuser', 11.50, 'Small', '100 ml');
INSERT INTO `products` VALUES (1033, 'Japanese Honey Suckle Diffuser', 25.00, 'Large', '180 ml');

INSERT INTO `products` VALUES (1034, 'Ms Dior Diffuser', 11.50, 'Small', '100 ml');
INSERT INTO `products` VALUES (1035, 'Ms Dior Diffuser', 25.00, 'Large', '180 ml');

INSERT INTO `products` VALUES (1036, 'Oriental Blossom Diffuser', 11.50, 'Small', '100 ml');
INSERT INTO `products` VALUES (1037, 'Oriental Blossom Diffuser', 25.00, 'Large', '180 ml');


COMMIT;
