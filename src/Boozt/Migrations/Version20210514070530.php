<?php

declare(strict_types=1);

namespace Boozt\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210514070530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
INSERT INTO `b_customer` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Carter', 'Cruickshank', 'elisabeth.schroeder@example.org'),
(2, 'Graham', 'Witting', 'jedediah.collier@example.net'),
(3, 'Mohamed', 'Stamm', 'carolina.king@example.net'),
(4, 'Karine', 'Schuster', 'renner.joany@example.com'),
(5, 'Kaden', 'Leannon', 'cierra56@example.com'),
(6, 'Glennie', 'Connelly', 'leanna.emard@example.net'),
(7, 'Broderick', 'Jaskolski', 'hintz.roslyn@example.net'),
(8, 'Theodore', 'Dickinson', 'donnelly.riley@example.com'),
(9, 'Roscoe', 'Schowalter', 'gulgowski.lula@example.net'),
(10, 'Jeramie', 'Jakubowski', 'crist.gabrielle@example.com'),
(11, 'Maeve', 'Kuvalis', 'aondricka@example.org'),
(12, 'Conor', 'Koelpin', 'von.dexter@example.com'),
(13, 'Deja', 'Johnston', 'walsh.rhett@example.com'),
(14, 'Austen', 'Jakubowski', 'esther.effertz@example.org'),
(15, 'Palma', 'Dibbert', 'juliana.o\'connell@example.com'),
(16, 'Josephine', 'Toy', 'cristina05@example.com'),
(17, 'Anabelle', 'Feest', 'wiza.jett@example.net'),
(18, 'Dejah', 'Schmidt', 'laverne21@example.com'),
(19, 'Gina', 'Wyman', 'leffler.jovani@example.com'),
(20, 'Alisa', 'Hoppe', 'efeeney@example.com');

INSERT INTO `b_order` (`id`, `purchase_date`, `country`, `device`, `customer_id`) VALUES
(1, '2021-05-12', 'Dominican Republic', 1, 8),
(2, '2021-05-09', 'Libya', 1, 5),
(3, '2021-05-09', 'Cape Verde', 2, 18),
(4, '2021-05-01', 'Mozambique', 1, 18),
(5, '2021-04-14', 'Jersey', 1, 9),
(6, '2021-04-17', 'Christmas Island', 1, 20),
(7, '2021-05-12', 'Martinique', 2, 13),
(8, '2021-05-01', 'Australia', 1, 13),
(9, '2021-04-21', 'Mauritania', 3, 6),
(10, '2021-04-24', 'Bosnia and Herzegovina', 2, 20),
(11, '2021-05-11', 'Palestine, State of', 3, 7),
(12, '2021-04-29', 'Bahrain', 3, 15),
(13, '2021-04-27', 'Zimbabwe', 1, 3),
(14, '2021-04-30', 'Senegal', 1, 15),
(15, '2021-04-24', 'Congo (Brazzaville)', 1, 11),
(16, '2021-04-23', 'Vanuatu', 3, 8),
(17, '2021-05-08', 'Paraguay', 1, 16),
(18, '2021-05-14', 'Guyana', 2, 19),
(19, '2021-05-01', 'Palestine, State of', 3, 6),
(20, '2021-05-09', 'Gabon', 1, 11),
(21, '2021-04-15', 'Saint Martin', 2, 3),
(22, '2021-05-08', 'Bhutan', 3, 10),
(23, '2021-04-28', 'Lesotho', 1, 17),
(24, '2021-05-10', 'Latvia', 3, 1),
(25, '2021-05-07', 'Mali', 1, 8),
(26, '2021-04-28', 'Mauritania', 1, 5),
(27, '2021-04-20', 'Mauritania', 3, 3),
(28, '2021-04-26', 'Macao', 3, 16),
(29, '2021-04-15', 'Libya', 2, 6),
(30, '2021-05-07', 'Venezuela', 1, 6),
(31, '2021-04-21', 'Montenegro', 1, 9),
(32, '2021-04-26', 'Angola', 2, 1),
(33, '2021-05-14', 'Guinea', 1, 15),
(34, '2021-05-03', 'Micronesia', 2, 6),
(35, '2021-05-05', 'French Guiana', 3, 12),
(36, '2021-05-02', 'Burundi', 1, 16),
(37, '2021-04-17', 'Iraq', 1, 7),
(38, '2021-04-19', 'Togo', 3, 17),
(39, '2021-05-13', 'Tonga', 1, 17),
(40, '2021-05-05', 'Slovenia', 2, 6),
(41, '2021-04-26', 'Samoa', 1, 3),
(42, '2021-04-28', 'China', 1, 10),
(43, '2021-04-20', 'Tajikistan', 3, 7),
(44, '2021-04-17', 'French Polynesia', 2, 2),
(45, '2021-04-29', 'Svalbard and Jan Mayen Islands', 2, 2),
(46, '2021-05-01', 'Côte D\'Ivoire (Ivory Coast)', 3, 18),
(47, '2021-05-09', 'Saint Barthélemy', 1, 12),
(48, '2021-05-09', 'Burkina Faso', 2, 6),
(49, '2021-04-21', 'Thailand', 2, 5),
(50, '2021-05-11', 'Reunion', 2, 12),
(51, '2021-05-07', 'British Indian Ocean Territory', 3, 2),
(52, '2021-05-09', 'Belarus', 3, 3),
(53, '2021-04-27', 'Bangladesh', 1, 16),
(54, '2021-05-03', 'Switzerland', 2, 10),
(55, '2021-05-12', 'Togo', 2, 8),
(56, '2021-05-08', 'Ghana', 1, 7),
(57, '2021-05-13', 'New Caledonia', 2, 7),
(58, '2021-04-14', 'Peru', 1, 7),
(59, '2021-04-15', 'Saint Pierre and Miquelon', 2, 12),
(60, '2021-04-17', 'Lebanon', 3, 13),
(61, '2021-05-03', 'Micronesia', 3, 17),
(62, '2021-04-14', 'Syria', 1, 7),
(63, '2021-04-21', 'Christmas Island', 1, 18),
(64, '2021-04-23', 'Guinea-Bissau', 1, 4),
(65, '2021-05-05', 'Sint Maarten', 3, 14),
(66, '2021-04-14', 'Bosnia and Herzegovina', 3, 17),
(67, '2021-05-05', 'Argentina', 3, 1),
(68, '2021-04-24', 'Yemen', 2, 6),
(69, '2021-05-01', 'South Georgia and The South Sandwich Islands', 2, 11),
(70, '2021-04-24', 'Nauru', 1, 19),
(71, '2021-04-24', 'Tonga', 3, 8),
(72, '2021-04-23', 'Eritrea', 1, 20),
(73, '2021-05-11', 'Zimbabwe', 2, 4),
(74, '2021-04-22', 'Solomon Islands', 3, 1),
(75, '2021-04-15', 'Burundi', 3, 13),
(76, '2021-05-09', 'Guatemala', 3, 12),
(77, '2021-05-05', 'Ecuador', 1, 8),
(78, '2021-04-29', 'Portugal', 2, 17),
(79, '2021-04-29', 'Djibouti', 3, 14),
(80, '2021-04-23', 'United States', 3, 6),
(81, '2021-04-15', 'Haiti', 3, 13),
(82, '2021-04-22', 'India', 3, 12),
(83, '2021-05-02', 'Jordan', 2, 12),
(84, '2021-05-09', 'Paraguay', 3, 9),
(85, '2021-05-07', 'Mauritania', 2, 12),
(86, '2021-04-16', 'Hungary', 1, 6),
(87, '2021-05-03', 'Mongolia', 3, 2),
(88, '2021-04-29', 'Bouvet Island', 1, 4),
(89, '2021-04-24', 'Solomon Islands', 3, 17),
(90, '2021-04-17', 'Congo (Brazzaville)', 1, 4),
(91, '2021-04-27', 'Montenegro', 3, 19),
(92, '2021-04-17', 'Morocco', 2, 14),
(93, '2021-05-06', 'Svalbard and Jan Mayen Islands', 1, 2),
(94, '2021-04-18', 'South Africa', 1, 5),
(95, '2021-04-15', 'Jamaica', 1, 7),
(96, '2021-04-20', 'Djibouti', 2, 2),
(97, '2021-04-30', 'Belgium', 1, 20),
(98, '2021-05-05', 'Guadeloupe', 3, 18),
(99, '2021-05-06', 'France', 2, 6),
(100, '2021-05-03', 'Ireland', 3, 20),
(101, '2021-04-20', 'Saint Martin', 2, 17),
(102, '2021-05-04', 'Bolivia', 2, 15),
(103, '2021-04-24', 'Nepal', 2, 14),
(104, '2021-05-08', 'Georgia', 1, 14),
(105, '2021-05-04', 'Cayman Islands', 2, 17),
(106, '2021-05-11', 'Denmark', 2, 3),
(107, '2021-05-14', 'Argentina', 1, 11),
(108, '2021-05-12', 'Thailand', 3, 3),
(109, '2021-04-22', 'Bahrain', 1, 19),
(110, '2021-04-17', 'Equatorial Guinea', 1, 12),
(111, '2021-04-28', 'Andorra', 3, 8),
(112, '2021-05-12', 'Timor-Leste', 3, 2),
(113, '2021-04-27', 'Fiji', 1, 20),
(114, '2021-05-03', 'Viet Nam', 3, 17),
(115, '2021-04-23', 'Slovakia', 2, 6),
(116, '2021-04-17', 'French Southern Territories', 1, 17),
(117, '2021-04-29', 'Gambia', 1, 12),
(118, '2021-04-20', 'Martinique', 3, 15),
(119, '2021-04-24', 'Algeria', 2, 17),
(120, '2021-04-27', 'Netherlands', 2, 3),
(121, '2021-05-01', 'Reunion', 1, 8),
(122, '2021-05-04', 'Samoa', 2, 13),
(123, '2021-05-07', 'Guernsey', 2, 7),
(124, '2021-05-02', 'Barbados', 2, 12),
(125, '2021-05-04', 'Saint Martin', 3, 11),
(126, '2021-05-07', 'Pitcairn Islands', 1, 20),
(127, '2021-04-14', 'Svalbard and Jan Mayen Islands', 2, 2),
(128, '2021-05-05', 'Kiribati', 1, 16),
(129, '2021-04-15', 'French Southern Territories', 2, 11),
(130, '2021-04-16', 'Ukraine', 3, 10),
(131, '2021-04-24', 'Taiwan', 2, 5),
(132, '2021-04-28', 'Belgium', 2, 12),
(133, '2021-05-12', 'Tajikistan', 1, 19),
(134, '2021-04-18', 'Philippines', 1, 17),
(135, '2021-04-25', 'Sint Maarten', 3, 11),
(136, '2021-05-10', 'Saint Lucia', 2, 2),
(137, '2021-04-25', 'Swaziland', 1, 18),
(138, '2021-04-17', 'Maldives', 1, 19),
(139, '2021-04-29', 'Saint Helena, Ascension and Tristan da Cunha', 1, 18),
(140, '2021-04-26', 'Sri Lanka', 1, 13),
(141, '2021-04-18', 'Macao', 1, 5),
(142, '2021-05-11', 'Saint Pierre and Miquelon', 3, 12),
(143, '2021-04-20', 'San Marino', 1, 3),
(144, '2021-05-09', 'Niue', 1, 9),
(145, '2021-05-03', 'Thailand', 1, 13),
(146, '2021-04-14', 'Chad', 2, 3),
(147, '2021-04-14', 'Laos', 3, 15),
(148, '2021-04-21', 'United Arab Emirates', 2, 15),
(149, '2021-05-14', 'Kenya', 3, 9),
(150, '2021-05-08', 'Angola', 2, 5),
(151, '2021-04-19', 'Guernsey', 2, 14),
(152, '2021-04-16', 'Marshall Islands', 3, 1),
(153, '2021-04-30', 'Tokelau', 1, 14),
(154, '2021-04-25', 'Comoros', 2, 15),
(155, '2021-05-07', 'Reunion', 1, 18),
(156, '2021-05-09', 'Congo, the Democratic Republic of the', 3, 13),
(157, '2021-04-24', 'Cyprus', 3, 8),
(158, '2021-05-05', 'Isle of Man', 2, 6),
(159, '2021-05-11', 'Iran', 1, 4),
(160, '2021-04-29', 'Burkina Faso', 1, 20),
(161, '2021-05-03', 'Seychelles', 2, 12),
(162, '2021-05-03', 'Mayotte', 1, 8),
(163, '2021-04-20', 'Macedonia', 1, 6),
(164, '2021-04-30', 'United Kingdom (Great Britain)', 2, 19),
(165, '2021-04-29', 'United States', 3, 2),
(166, '2021-05-07', 'Laos', 1, 13),
(167, '2021-05-09', 'Macao', 3, 20),
(168, '2021-04-21', 'Marshall Islands', 1, 4),
(169, '2021-05-04', 'Portugal', 1, 3),
(170, '2021-04-20', 'Guatemala', 3, 12),
(171, '2021-04-21', 'Fiji', 2, 19),
(172, '2021-04-30', 'Northern Mariana Islands', 2, 17),
(173, '2021-04-21', 'Isle of Man', 2, 7),
(174, '2021-04-20', 'Tunisia', 3, 7),
(175, '2021-05-08', 'Cameroon', 3, 14),
(176, '2021-04-29', 'Macedonia', 2, 3),
(177, '2021-04-22', 'Costa Rica', 1, 12),
(178, '2021-04-20', 'Saint Kitts and Nevis', 1, 12),
(179, '2021-04-20', 'Nepal', 1, 2),
(180, '2021-05-14', 'Guadeloupe', 3, 14),
(181, '2021-05-08', 'Sweden', 1, 1),
(182, '2021-05-01', 'Faroe Islands', 3, 8),
(183, '2021-05-12', 'Korea, South', 1, 8),
(184, '2021-04-27', 'Andorra', 1, 16),
(185, '2021-05-10', 'Gibraltar', 1, 11),
(186, '2021-05-06', 'Mauritius', 3, 8),
(187, '2021-04-25', 'Malta', 1, 9),
(188, '2021-04-25', 'Australia', 3, 15),
(189, '2021-05-01', 'British Indian Ocean Territory', 2, 10),
(190, '2021-05-09', 'Malawi', 2, 1),
(191, '2021-04-19', 'Mozambique', 3, 19),
(192, '2021-04-29', 'Myanmar', 3, 12),
(193, '2021-04-19', 'Panama', 2, 7),
(194, '2021-04-30', 'Nepal', 2, 2),
(195, '2021-05-06', 'Singapore', 1, 10),
(196, '2021-04-14', 'Djibouti', 3, 20),
(197, '2021-05-10', 'French Polynesia', 1, 13),
(198, '2021-04-29', 'Zambia', 1, 11),
(199, '2021-04-17', 'Cuba', 3, 12),
(200, '2021-04-15', 'Saint Pierre and Miquelon', 3, 5);

INSERT INTO `b_order_items` (`id`, `EAN`, `quantity`, `price`, `order_id`) VALUES
(1, '2432670677374', 5, 270, 133),
(2, '2226983621143', 5, 222, 49),
(3, '9180834913153', 7, 228, 1),
(4, '4464478578024', 9, 988, 84),
(5, '7740252606847', 3, 303, 44),
(6, '6749424262576', 5, 715, 154),
(7, '2330296647479', 9, 961, 114),
(8, '6035015932042', 8, 684, 167),
(9, '9772243269536', 4, 676, 15),
(10, '8921952275218', 8, 855, 164),
(11, '6708646931840', 10, 511, 169),
(12, '4657075732375', 7, 308, 189),
(13, '7995145197376', 10, 857, 83),
(14, '4629700771296', 1, 721, 114),
(15, '4160660703873', 4, 643, 116),
(16, '2676627746479', 9, 798, 19),
(17, '6393263542018', 7, 472, 155),
(18, '8534495559362', 7, 335, 67),
(19, '5565122289394', 7, 214, 171),
(20, '6070667284266', 3, 168, 188),
(21, '2141481705913', 4, 400, 104),
(22, '1130475887805', 5, 898, 75),
(23, '8833803738182', 3, 97, 158),
(24, '8938115614031', 5, 630, 132),
(25, '4031910845318', 1, 543, 35),
(26, '4476367356524', 10, 56, 115),
(27, '8828995509571', 10, 501, 51),
(28, '5273073089074', 8, 697, 79),
(29, '3384903526478', 3, 358, 173),
(30, '7057611642001', 10, 502, 5),
(31, '8603149680563', 9, 812, 145),
(32, '3517924943637', 3, 364, 59),
(33, '6207225449530', 2, 488, 82),
(34, '4539435936501', 4, 136, 76),
(35, '8195117909212', 3, 885, 40),
(36, '3498608040006', 4, 778, 163),
(37, '3244187568719', 4, 92, 57),
(38, '5593666359678', 10, 159, 172),
(39, '6171352716609', 10, 145, 7),
(40, '4287141722868', 6, 465, 40),
(41, '8892006489879', 10, 67, 81),
(42, '1774100180986', 4, 878, 182),
(43, '2085165426300', 9, 556, 24),
(44, '8806993194958', 2, 629, 99),
(45, '5146631542483', 5, 536, 120),
(46, '4736942903520', 9, 679, 158),
(47, '3080236500538', 8, 757, 104),
(48, '5010954652541', 2, 801, 49),
(49, '9701764603719', 1, 899, 100),
(50, '6696063552028', 7, 912, 105),
(51, '7331925238020', 10, 665, 119),
(52, '1440480700332', 5, 707, 170),
(53, '4469299639274', 6, 772, 34),
(54, '2996420363832', 8, 944, 191),
(55, '8675724345780', 4, 559, 74),
(56, '3778952431158', 7, 781, 25),
(57, '3116486717092', 5, 711, 110),
(58, '9836102079305', 3, 142, 189),
(59, '8379793600862', 2, 738, 176),
(60, '7553137903355', 9, 704, 19),
(61, '2060705499840', 2, 902, 31),
(62, '2900595590727', 10, 671, 104),
(63, '1447647287069', 10, 603, 156),
(64, '8859029698307', 5, 585, 182),
(65, '9583785141451', 10, 354, 181),
(66, '5135600792953', 1, 84, 157),
(67, '8947050262056', 2, 411, 129),
(68, '9343895691016', 5, 613, 162),
(69, '2647406510562', 5, 366, 94),
(70, '2425369827243', 2, 409, 106),
(71, '5696650129186', 2, 406, 167),
(72, '5881597970425', 5, 295, 132),
(73, '8725118913345', 1, 437, 6),
(74, '6181404149699', 6, 250, 125),
(75, '6310977113409', 10, 383, 108),
(76, '4940572676395', 2, 383, 198),
(77, '4050811234028', 2, 671, 98),
(78, '7540446389535', 1, 739, 34),
(79, '6211963146798', 2, 734, 185),
(80, '6917857834617', 10, 247, 194),
(81, '8914349641795', 8, 53, 128),
(82, '4061972821888', 3, 948, 111),
(83, '4584041286863', 3, 93, 64),
(84, '5269424407116', 9, 454, 92),
(85, '2937312219728', 8, 517, 61),
(86, '2343941113355', 5, 234, 14),
(87, '4860927240085', 5, 488, 121),
(88, '4696559533260', 8, 351, 179),
(89, '4271275638195', 6, 361, 99),
(90, '5187422579473', 2, 577, 179),
(91, '8483889599780', 9, 301, 42),
(92, '8282663392258', 4, 133, 129),
(93, '5729429385716', 8, 612, 190),
(94, '7247768703154', 7, 720, 144),
(95, '2264476913477', 2, 459, 116),
(96, '1728256465281', 10, 63, 22),
(97, '1472227345331', 2, 79, 5),
(98, '6175352201661', 3, 402, 118),
(99, '2655996576107', 2, 829, 183),
(100, '6411785049594', 5, 259, 181),
(101, '6248178536105', 2, 314, 80),
(102, '2062858162684', 8, 451, 34),
(103, '7032761913681', 10, 427, 91),
(104, '8437552878320', 10, 420, 60),
(105, '2144304863683', 5, 595, 59),
(106, '9695063813653', 6, 70, 177),
(107, '1206413091996', 5, 669, 151),
(108, '1547500141781', 3, 757, 161),
(109, '6389988987221', 3, 570, 153),
(110, '9825916556273', 8, 791, 108),
(111, '1976847997960', 4, 538, 24),
(112, '2427458108521', 2, 350, 193),
(113, '9578385302825', 9, 902, 171),
(114, '8998349212921', 3, 264, 171),
(115, '4471662248874', 7, 947, 184),
(116, '5192844965481', 1, 512, 149),
(117, '7809156458515', 10, 236, 157),
(118, '3763848533754', 1, 530, 81),
(119, '9344162207344', 2, 737, 34),
(120, '4533302586638', 1, 144, 127),
(121, '8501766507118', 10, 241, 12),
(122, '6452368339775', 2, 536, 42),
(123, '6276368414336', 10, 763, 170),
(124, '4301753756913', 6, 799, 191),
(125, '4645168462086', 7, 312, 183),
(126, '9918500274843', 10, 486, 5),
(127, '9166372451775', 7, 728, 108),
(128, '7308987933040', 5, 689, 78),
(129, '9150424499597', 1, 542, 97),
(130, '7963373930867', 1, 376, 189),
(131, '1326444224950', 4, 980, 172),
(132, '4876073564023', 8, 138, 184),
(133, '1378159923035', 4, 898, 96),
(134, '7190132223889', 1, 275, 173),
(135, '4452441177887', 7, 206, 15),
(136, '5947194545528', 10, 348, 142),
(137, '7446765839086', 3, 459, 53),
(138, '4839230664750', 4, 190, 8),
(139, '6345853991329', 8, 241, 171),
(140, '7765553907986', 7, 483, 142),
(141, '3080495912208', 1, 995, 135),
(142, '4770219171502', 4, 715, 52),
(143, '2335128023049', 2, 378, 30),
(144, '7006936497738', 6, 517, 58),
(145, '8645871480940', 4, 944, 134),
(146, '6710091188791', 4, 99, 126),
(147, '9472093815327', 2, 355, 148),
(148, '1174968146604', 1, 397, 130),
(149, '6193397512060', 8, 796, 158),
(150, '4169372381452', 3, 316, 36),
(151, '4679160047543', 3, 367, 151),
(152, '7334146855876', 9, 904, 113),
(153, '1843375512012', 1, 546, 31),
(154, '3443529210486', 9, 826, 128),
(155, '7045847858530', 4, 458, 89),
(156, '6010108580541', 10, 198, 114),
(157, '9428101373364', 9, 343, 147),
(158, '3606692462316', 7, 219, 69),
(159, '4240107268320', 3, 742, 40),
(160, '7904058263280', 3, 224, 149),
(161, '7314494986363', 9, 604, 170),
(162, '4595356593046', 2, 323, 179),
(163, '5866267006577', 1, 774, 195),
(164, '7678257774217', 8, 833, 188),
(165, '4067642146053', 5, 181, 75),
(166, '5029124590857', 7, 903, 162),
(167, '2096820589755', 8, 788, 199),
(168, '5833723228347', 9, 168, 14),
(169, '1726277801565', 8, 348, 106),
(170, '2292099726104', 3, 534, 84),
(171, '8826368325073', 10, 347, 42),
(172, '1869646865464', 6, 977, 70),
(173, '4525836014707', 9, 483, 120),
(174, '9522898496107', 6, 893, 133),
(175, '2723076573614', 8, 819, 45),
(176, '9847127834409', 2, 597, 141),
(177, '9543488931378', 8, 624, 124),
(178, '4662341053304', 6, 889, 185),
(179, '1870077377386', 8, 600, 61),
(180, '5180337057728', 3, 389, 68),
(181, '8875650790175', 10, 957, 80),
(182, '9503703967947', 4, 290, 82),
(183, '9432781165535', 6, 418, 41),
(184, '8893221205913', 7, 235, 170),
(185, '7837157938792', 9, 574, 123),
(186, '5598701981591', 10, 351, 148),
(187, '6059551533515', 2, 764, 49),
(188, '9494992362293', 3, 411, 34),
(189, '8485788403107', 8, 640, 181),
(190, '3511091035986', 2, 614, 1),
(191, '6715149495057', 10, 91, 26),
(192, '6800439078042', 4, 506, 7),
(193, '8964425549682', 9, 926, 5),
(194, '1474766128207', 10, 561, 63),
(195, '2926480840206', 10, 376, 117),
(196, '5978278341134', 1, 248, 164),
(197, '2990988801866', 10, 908, 197),
(198, '8447266514705', 7, 868, 141),
(199, '9818222316199', 2, 434, 165),
(200, '4304255314237', 7, 198, 72);
COMMIT;

        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql('SET FOREIGN_KEY_CHECKS = 0;');
        $this->addSql('TRUNCATE TABLE `b_customer`;');
        $this->addSql('TRUNCATE TABLE `b_order_items`;');
        $this->addSql('TRUNCATE TABLE `b_order`;');
        $this->addSql('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
