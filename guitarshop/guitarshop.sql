-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 11:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guitarshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikli`
--

CREATE TABLE IF NOT EXISTS `artikli` (
  `id` int(11) NOT NULL,
  `kategorija` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `opis` text NOT NULL,
  `slika` text NOT NULL,
  `istaknuto` int(1) NOT NULL,
  `brisan` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikli`
--

INSERT INTO `artikli` (`id`, `kategorija`, `cena`, `naziv`, `opis`, `slika`, `istaknuto`, `brisan`) VALUES
(1, 1, 6900, 'El. gitara Shadow', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara1.jpg', 1, 0),
(2, 1, 7999, 'El. gitara Danube', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara2.jpg', 4, 0),
(3, 1, 4999, 'El. gitara Sawa ', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara3.jpg', 1, 0),
(4, 1, 8490, 'El. gitara Maximus', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara4.jpg', 0, 0),
(5, 1, 9990, 'El. gitara Rossa', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara5.jpg', 1, 0),
(6, 1, 7490, 'El. gitara Mr Black', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara6.jpg', 0, 0),
(7, 2, 4900, 'Ak. gitara Fender 125', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara-ak-1.jpg', 0, 0),
(8, 2, 6900, 'Ak. gitara Ultimate', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara-ak-2.jpg', 1, 0),
(9, 2, 3990, 'Ak. gitara Simfony', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara-ak-3.jpg', 0, 0),
(10, 2, 6690, 'Ak. gitara Vitara', 'Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.\r\n\r\nCu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.\r\n\r\nReque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.\r\n\r\nAt voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.\r\n\r\nPericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.', 'shop-gitara-ak-4.jpg', 1, 0),
(11, 2, 8999, 'Ak. gitara Ibanez V50', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-gitara-ak-5.jpg', 0, 0),
(12, 2, 11790, 'Ak. gitara Ibanez V90', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-gitara-ak-6.jpg', 1, 0),
(13, 3, 7990, 'Bas gitara Dean ', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-gitara-bas-1.jpg', 0, 0),
(14, 3, 6850, 'Bas gitara Ilda', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-gitara-bas-2.jpg\r\n', 0, 0),
(15, 3, 8850, 'Bas gitara Icon', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-gitara-bas-3.jpg', 0, 0),
(16, 3, 11950, 'Bas gitara Hero', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-gitara-bas-4.jpg', 0, 0),
(17, 3, 9950, 'Bas gitara Max 1', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-gitara-bas-5.jpg', 0, 0),
(18, 3, 19950, 'Bas gitara A-Plus', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-gitara-bas-6.jpg', 1, 0),
(19, 4, 4950, 'Pojačalo Akada 1', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-pojacalo-1.jpg', 0, 0),
(20, 4, 4950, 'Pojačalo Cintia', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-pojacalo-2.jpg', 0, 0),
(21, 4, 8900, 'Pojačalo Exina', 'Lorem ipsum dolor sit amet, et eam wisi modus consequuntur, denique tincidunt pro cu, ius natum causae ad. Modus cetero volutpat has ea. Per purto aliquip reformidans id, omnis detracto deterruisset ne mel. Option viderer tacimates sit id. Nec te iracundia consectetuer, vim an tota veniam pertinacia, eam an tantas mediocrem.\r\n\r\nProbatus salutandi ei ius. Pro ut etiam latine interpretaris, brute illud eripuit ne mei. Ut pri harum accusam, ad velit dicunt mediocrem vix. Facer honestatis sit ea, quem intellegebat in vis. Eum porro laoreet id.\r\n\r\nDuis phaedrum volutpat sed ea, dicta expetenda mnesarchum an eos, te veritus appellantur mel. Nam fabulas inimicus constituam no, pro elit quodsi perfecto in. Dolore putant percipitur per an. Qui ceteros aliquando consequuntur ea.\r\n\r\nExpetenda dissentiet et vix, porro movet perpetua duo ex. Aperiri omittam voluptaria est at, mei ne detraxit accusata interpretaris, cum ne graeco epicurei iracundia. Pro tamquam fabellas deserunt ea. Cetero habemus deseruisse est id, amet iudico per ea, duo cu sumo alia simul. Nam ne vero nostrum legendos, no cum veritus delectus imperdiet, an est ponderum similique. Melius expetenda ut vis, ei noluisse epicurei pri.\r\n\r\nEirmod vulputate abhorreant quo cu, illud utinam fierent vis et, usu ei dicit quidam scripta. Ex usu tractatos disputationi. In sit alia ceteros, omittam intellegebat at eos, ea eum vocent sapientem maiestatis. Dolores expetendis sit eu, quot magna assueverit has at, id vel nonumy splendide. Amet vivendum eu est. Ullum noluisse praesent ad per.', 'shop-pojacalo-3.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE IF NOT EXISTS `kategorije` (
  `id` int(11) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`id`, `naziv`, `opis`) VALUES
(1, 'Električne gitare', 'Električna gitara je instrument moderne muzike kao što je rock, metal, punk, rock and roll itd., ali primenjuje se i u ostalim žanrovima (blues, jazz...)<br/><br/>  Koristi elektromagnetske pick-upove koji "prikupljaju" titranje žice i pretvaraju ih u signale koje šalju pojačalu. Mogu biti šupljih ili čvrstih tela. Najpoznatije marke su Fender, Gibson, Ibanez, Jackson... Neke od njih imaju tremolu ručku kojom se ručno natežu ili otpuštaju lagano sve žice i tako stvaraju vibriranje tona. Taj se efekt puno koristi u bluesu i jazzu.'),
(2, 'Akustične gitare', 'Akustična gitara je gitara koja je nalik klasičnoj gitari, ali ima metalne žice i uži vrat. Prva moderna akustična gitara nastala je u drugoj polovini 20. vekaZvuk akustične gitare nastaje u njenom telu, koje je u osnovi zvučna kutija. Zvuk odsviranih žica ulazi u tijelo kroz zvučnu rupu koja se nalazi ispod samih žica, te se tamo pojačava glasnoća rezonancijom u telu.'),
(3, 'Bas gitare', 'Električna bas gitara (također zvana električni bas ili bas) je električno pojačan žičani instrument koji se svira prstima ili trzalicom. Izgled basa je sličan električnoj gitari, ali ima veće tijelo, duži vrat i duljinu tijela, i obično četiri žice naštimane oktavu niže.<br/><br/>  Od 1950-ih električni bas je zamenio kontrabas u popularnoj muzici. Bas se obično koristi za sviranje niskih bas dionica u popularnoj glazbi i jazzu. Električni bas se također koristi kao solo instrument u jazzu, Latino i funk stilovima.'),
(4, 'Pojačala', 'Prva pojačala nastala su u ranim 1930-im kao proizvod primene ispravljačkih cevi i elektrolitskih kondenzatora u elektronici, što je dovelo do skore izrade ekonomičnih napojnih jedinica i osnovnog polazišta za izradu pojačala. Opštoj potražnji i upotrebi pojačala uveliko je zaslužan i Leo Fender kad je 1949. godine predstavio svoj Fender Telecaster model električne gitare. U početku gitarska pojačala su se koristila za pojačavnje zvuka akustičnih gitara. ');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `email`, `password`) VALUES
(6, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `porudzbine`
--

CREATE TABLE IF NOT EXISTS `porudzbine` (
  `id` int(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `porudzbine`
--

INSERT INTO `porudzbine` (`id`, `code`, `ime`, `adresa`, `telefon`, `email`, `datum`) VALUES
(1, 'KN4JA7', 'Darko Petrovic', 'Bogica Vasovica, 29', '0658888178', 'drkljenko@gmail.com', '2018-06-24 09:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `porudzbine_detalji`
--

CREATE TABLE IF NOT EXISTS `porudzbine_detalji` (
  `id` int(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  `artikal` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `porudzbine_detalji`
--

INSERT INTO `porudzbine_detalji` (`id`, `code`, `artikal`, `kolicina`, `cena`) VALUES
(1, 'QP1AWM', 2, 1, 7999),
(2, 'QP1AWM', 3, 1, 4999),
(3, 'QP1AWM', 9, 1, 3990),
(4, 'ZF45A7', 1, 1, 6900),
(5, 'ZF45A7', 9, 1, 3990),
(6, 'ZF45A7', 15, 1, 8850),
(7, 'FGNT34', 20, 1, 4950),
(8, 'KDKUV3', 14, 2, 6850),
(12, 'KDKUV3', 21, 1, 8900),
(13, 'KDKUV3', 3, 2, 4999),
(14, 'KDKUV3', 1, 1, 6900),
(17, 'VDTQKS', 9, 1, 3990),
(18, 'S6747M', 8, 1, 6900),
(19, 'S6747M', 3, 1, 4999),
(20, 'JC3XJM', 1, 1, 6900),
(21, 'CHI1RW', 2, 1, 7999),
(22, 'CHI1RW', 16, 1, 11950),
(23, 'X5V3KW', 8, 1, 6900),
(24, 'LEH6F4', 10, 1, 6690),
(25, 'EWRQ6Y', 8, 1, 6900),
(26, 'EWRQ6Y', 21, 1, 8900),
(27, 'KN4JA7', 1, 1, 6900),
(28, 'KN4JA7', 15, 1, 8850),
(29, 'KN4JA7', 21, 1, 8900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikli`
--
ALTER TABLE `artikli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porudzbine`
--
ALTER TABLE `porudzbine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porudzbine_detalji`
--
ALTER TABLE `porudzbine_detalji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikli`
--
ALTER TABLE `artikli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `porudzbine`
--
ALTER TABLE `porudzbine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `porudzbine_detalji`
--
ALTER TABLE `porudzbine_detalji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
