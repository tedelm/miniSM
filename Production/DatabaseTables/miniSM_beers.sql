-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
-- Serverversion: 10.3.34-MariaDB-1:10.3.34+maria~focal
-- PHP-version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `myDatabaseName`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `miniSM_beers`
--

CREATE TABLE `miniSM_beers` (
  `id_` int(100) NOT NULL,
  `BEER_IDENTITY` int(10) NOT NULL,
  `BEER_NAME` varchar(100) NOT NULL,
  `STYLE_CODE` varchar(100) NOT NULL,
  `STYLE_DEFINITION` varchar(5000) NOT NULL,
  `STYLE_DEF_SHORT` varchar(1000) NOT NULL,
  `STYLE_DEF_COLOR` varchar(1000) NOT NULL,
  `STYLE_DEF_AROM` varchar(1000) NOT NULL,
  `STYLE_DEF_TASTE` varchar(1000) NOT NULL,
  `STYLE_DEF_MOUTHFEEL` varchar(1000) NOT NULL,
  `STYLE_DEF_EXAMPLES` varchar(1000) NOT NULL,
  `IBU_` varchar(100) NOT NULL,
  `CO2_` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `miniSM_beers`
--

INSERT INTO `miniSM_beers` (`id_`, `BEER_IDENTITY`, `BEER_NAME`, `STYLE_CODE`, `STYLE_DEFINITION`, `STYLE_DEF_SHORT`, `STYLE_DEF_COLOR`, `STYLE_DEF_AROM`, `STYLE_DEF_TASTE`, `STYLE_DEF_MOUTHFEEL`, `STYLE_DEF_EXAMPLES`, `IBU_`, `CO2_`) VALUES
(1, 1, 'Black Ales Matter', '5. E - Black IPA', 'Black IPA är en mycket modern ölstil som såg dagens ljus först i mitten på 00-talet. Black IPA bryggs på pilsnermalt eller neutral pale ale-malt samt några procent rostade maltsorter. <br> De mörka maltsorterna ska bidra med färg samt lättrostade och chokladiga aromer och smaker. Maltkompositionen kompletteras med mindre tillsatser av karamellmalt. <br> Maltkaraktären får dock inte överskugga humlen. Precis som i en vanlig IPA ska humlen dominera. Humlekaraktären ska precis som i vanlig IPA dra åt citrus och tropisk frukt.', 'Humledominerad med lättrostad och chokladiga malttoner. IPA:ns Schwarzbier.', 'Mörkbrun till svart. Köldgrumling är tillåten.', 'Ska ha en stor blommig humledoft med inslag av tropisk frukt och/eller citrus. Rostade men ej brända malttoner och inslag av karamell ska finnas på låg nivå. Alkoholtoner på låg nivå är tillåtet.', 'Kraftigt smakhumlad med moderna humlesorter som drar åt citrus och tropisk frukt.<br> \r\nBeskan ska vara kraftig.<br> \r\n<br> \r\nMaltigheten ska vara rostad och chokladig med inslag av kaffe och karamell. Får vara lätt bränd. Choklad och karamell får inte dominera så att det ger ett sött intryck. Fruktestrar på medium nivå får förekomma.', 'Medium kropp', 'Jämtlands Black IPA 6,0% /Jämtlands bryggeri - Raven Black IPA 6,6% / Thornbridge', 'Medium till Hög', 'Medium till Hög'),
(2, 2, 'Tio över fem', '1 C. Märzen', 'Innan kylmaskinerna kom på 1870-talet var många bryggerier hänvisade till att brygga öl under vinterhalvåret. Säsongens sista öl bryggdes i mars och kallades därför i Bayern för Märzen. <br> Det var lite starkare för att ha en chans att överleva sommaren, tills nästa bryggningssäsong började. Öltypen som vi känner den idag blev känd på oktoberfesten i München 1872, när standardölet tog slut och man istället tog in en lite starkare provbrygd av ljusbrun wienertyp.<br>  Efter denna händelse har Märzen kommit att beteckna ett lite starkare wieneröl, ett typnamn som f ö knappast längre används. Det viktigaste karaktärsdraget är ölets maltighet, som ska dominera men balanseras av någon humle. I våra dagar är Märzen en tämligen marginaliserad öltyp och har exempelvis ersatts av ljus lager på oktoberfesten. Liksom andra traditionella lageröl bör det dekoktionsmäskas samt jäsas kallt och lagras länge.', 'Mellanmörk, mjukt maltig gärna med balanserande humle.', 'Bärnstens- till kopparfärgad.', 'Brödig eller gräddig malt på medium till hög nivå ska finnas. Lättrostade malttoner på låg nivå får finnas. Humledoft av centraleuropeiska humlesorter på låg nivå får finnas.<br>  Karamelltoner på låg nivå får finnas. Alkoholtoner på låg nivå får finnas. Inga brända malttoner får förekomma. Ingen DMS eller diacetyl får förekomma. Inga fruktestrar får förekomma.', 'Brödig eller gräddig maltsmak på medium till hög nivå ska finnas. <br> Humlesmak av centraleuropeiska humlesorter på låg nivå bör förekomma. <br> Humlebeska på låg till medium nivå bör förekomma. Lättrostade malttoner på låg nivå får finnas. <br> Karamelltoner på låg nivå får finnas. Alkoholtoner på låg nivå får finnas. <br> Inga brända malttoner får förekomma. <br> Ingen DMS eller diacetyl får förekomma. <br> Inga fruktestrar får förekomma.', 'Medium till stor kropp. Mjuk med medium kolsyra.', 'Stierberger Märzen, 5.5% - Bräu z´Loh Märzen, 5.4%', 'Låg till medium', 'Medium'),
(3, 3, 'Sandby Pils!', '1 H. Tysk pilsner', 'Pilsnerbryggning spreds snabbt från Pilsen i Böhmen (där den första pilsnern bryggdes) till Tyskland. Främst till norra och mellersta Tyskland, medan det konservativa Bayern med sitt hårda vatten var sist att acceptera pilsnern. <br> Pilsner är idag den dominerande öltypen i hela Tyskland. Den tyska pilsnern är högförjäst och därmed torrare än den böhmiska originalpilsnern. Tysk ädelhumle används generellt och ger beskan en gräsig ton. <br> Det torra och strama ölet ska ge ett rent, uppfriskande och elegant intryck. Liksom andra traditionella lageröl bör tysk pils dekoktionsmäskas samt jäsas kallt och lagras länge.', 'Ljus och torr med tydlig humlebeska.', 'Ljust halmgul till halmgul.', 'Humledoft av centraleuropeiska humlesorter på medel till hög nivå ska finnas. <br> Brödig maltdoft på låg nivå bör finnas. <br> Ingen DMS eller diacetyl får förekomma. <br> Inga fruktestrar får förekomma. <br> Ingen karamelldoft eller doft av söt malt får förekomma.', 'Humlesmak av centraleuropeiska humlesorter på medel till hög nivå ska finnas. <br> Humlebeska på hög till mycket hög nivå ska finnas. <br> Brödig maltsmak på låg nivå bör finnas. <br> Ingen DMS eller diacetyl får förekomma. <br> Inga fruktestrar får förekomma. <br> Ingen karamellsmak eller restsötma får förekomma.', 'Låg till medium kropp. Torrt. Medium till hög kolsyra.', 'Jever Pils, 4.9%', 'Medium till hög', 'Medium till hög'),
(4, 4, 'Original IPA', '5 C. IPA', 'Denna variant av den klassiska engelska IPA:n utvecklades i USA och är numera en av de populäraste ölstilarna. <br> Till skillnad mot den engelska, som ska ha en balanserande maltighet, så ska denna IPA vara torr, besk och lätt i maltkroppen. <br> Små mängder av ljusa karamellmaltsorter ska ge ett litet stöd åt de stora humlegivorna. Humlesorterna ska ge toner av citrus och/eller tropisk frukt. Såväl amerikanska som fruktiga humlesorter från nya världen används.', 'Krispigt torr och besk med stor arom och smak av humlesorter som ger citrus och/eller tropisk fruktkaraktär.', 'Gyllengul till bärnstensfärgad. Disighet är tillåtet.', 'Ska innehålla en stor blommig humledoft med arom av citrus och/eller tropisk frukt. <br> Fruktestrar bör finnas på låg till medium nivå. <br> Maltigheten, som ska vara låg, ska ha karamelliga inslag. <br> Alkoholtoner får förekomma på låga nivåer.', 'Kraftigt smakhumlad. Karakteriseras av en kraftig beska och hög alkoholhalt. <br> Karamell och maltighet på låga till medium nivåer. <br> Fruktestrar på låga till medium nivåer är tillåtna. Alkoholsmak får förekomma men den får ej vara spritig. <br> Hög mineralhalt i vattnet ger ett krispigt torrt öl. Kraftig beska.', 'Medium kropp. Torrt och krispigt.', 'Anniversary ale 5,9% /Sierra Nevada - Indian Tribute 6,8% /Oppigårds', 'Medium till hög', 'Medium till hög'),
(5, 5, 'Foggy Nelson', '5 D. New England IPA - Vermont IPA', 'New England IPA, NEIPA, är en vidareutveckling av amerikansk IPA, där humlekaraktären ökat samtidigt som den upplevda beskan har minskat. <br> Mycket stora smak- och aromgivor samt torrhumling ger ett utmärkande disigt utseende. <br> Jäst med låg flockning och låg förjäsbarhet används ofta för att öka disigheten och höja restsötman. <br> Ölet har en kraftig arom och stor smak av humle, samt en len och fyllig kropp utan hög beska. Smaker och dofter av josig tropisk frukt förekommer i detta öl utan att frukt tillsätts. NEIPA bör konsumeras relativt ung för att det karakteristiskt fräscha humleintrycket ska upplevas.', 'Fräscht, josigt och mjukt öl som bör vara disigt. <br> Mycket kraftig arom och smak av moderna humlesorter, som ger en intensiv tropisk frukt- och citruskaraktär, men med lägre upplevd beska och maltighet än vanlig IPA.', 'Halmgul till gyllengul. Opak och disig av kraftig humling och jäst med låg flockulering. Kraftigt vitt skum.', 'Ska innehålla en mycket stor fräsch och fruktig humledoft med arom av tropisk frukt och/eller citrus. <br> Humledoften ska ej upplevas gräsig eller kryddig. <br> Fruktestrar bör finnas på medium till hög nivå. <br> Neutral maltarom med lätta brödiga inslag får förekomma på låga nivåer. <br> Ingen karamellarom får förekomma. <br> Alkoholtoner får förekomma på låga nivåer.', 'Mycket kraftig smak av tropisk frukt och/eller citrus ska dominera. <br> Fruktestrar på medium till höga nivåer bör finnas. Neutral maltsmak med lätta brödiga inslag får förekomma på låga nivåer. <br> Ingen karamellsmak får förekomma. <br> Alkoholsmak får förekomma men den får ej vara spritig. <br> Ska ej upplevas söt från ojästa sockerarter. Inga kärva eller brännande humlesmaker ska märkas. <br> Beska på låg till medium nivå.', 'Medium till stor kropp. Mjukt, lent och fylligt. Medium kolsyra.', 'Amazing Haze 6,5% /Stigbergets Bryggeri - O/O Narangi IPA 6,8% /O/O Brewing', 'Låg', 'Medium'),
(6, 6, 'Vienna Lager', '1 J. Övriga klassiska i kategori Mild/karaktärsfull Lager', 'Här avses gamla klassiska öltyper som funnits i decennier men som har fallit lite i glömska. Dessa öl kanske bara bryggs av ett fåtal bryggerier i världen och dessutom bryggs de sällan av hembryggare.\r\nÖl inlämnade i denna kategori ska alltså inte vara experimentvarianter av en känd ölstil, inte heller nya öltyper som håller på att bli populära - dessa ska lämnas in i klass 11D Modifierade öl.', 'In 1841 Dreher released the bottom-fermented “Klein-Schwechater Lagerbier” which would soon be called Vienna Lager. It was an immediate hit and something that earned him the title “the beer king.” Named after the city in which it originated, a traditional Vienna Lager is brewed using a three step decoction boiling process. Munich, Pilsner, Vienna, and dextrin malts are used, as well wheat in some cases. Its color reliably falls between pale amber and medium amber—there should be a reddish hue to examples of this style. Noble hops are used subtly, with the resulting beer having a crisp quality, a toasty flavor and some residual caramel-like sweetness. Vienna Lager and German Märzen have much in common. Although Austrian in origin and rare these days, some classic examples come from Mexico, such as Dos Equis Amber, the result of late 19th century brewers immigrating from Austria.', 'Gyllengul till bärnstensfärgad', '-', '-', '-', 'Negra Modelo', 'Medium till hög', 'Medium till hög'),
(7, 7, 'Italo Pils!', '11 D. Modifierade öl', 'I denna underklass placeras klassiska öltyper som är svårplacerade på grund av exempelvis inblandning av kryddor och frukt, samt de som ligger utanför definitionsgränserna på annat sätt. Det kan också vara rena experimentbrygder. \r\n<br> \r\n<br> OBS! Öl som kan placeras i en vanlig underkaterogi skall inplaceras där. Träinfluerade öl lämnas in i egen klass, se nedan. Specificera på bryggprotokollet vilken öltyp som använts som grund till det modifierade ölet samt ge information om hur det är modifierat. Udda extraktgivare som t ex melass, kandisocker, muscovadosocker, majs och ris betraktas normalt inte som modifiering. Däremot om man har använt så pass mycket av sin extraktgivare att den tydligt förändrat karaktären av den öltyp man bryggt, då bör man absolut lämna in sin öl i klass 11D – Modifierade öl.', 'In 1996, Agostino Arioli — founder of a brewery in Como, Italy, called Birrificio Italiano — set out to make a northern German pilsner. Fond of the style at the time, Arioli strove to brew something similar to a Jever Pils from Saxony’s Friesisches Brauhaus zu Jever. However, the final result was something new.Dry hopping is really the big differentiator in Italian pilsners, with noble hops imparting a characteristic aroma and bitterness. Traditionally, Arioli used hops such as Tettnang Tettnanger in Tipopils, while others implemented Spalter Select or Hallertau Mittelfrüh.', 'Ljust halmgul till halmgul.', '-', '-', '-', 'Italopils', 'Medium till hög', 'Medium till hög');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `miniSM_beers`
--
ALTER TABLE `miniSM_beers`
  ADD PRIMARY KEY (`id_`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `miniSM_beers`
--
ALTER TABLE `miniSM_beers`
  MODIFY `id_` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
