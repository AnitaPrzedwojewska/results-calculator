<?
if (!($_COOKIE['jezyk'])) setcookie('jezyk', 'PL');
$jezyk = $_COOKIE['jezyk'];

if (!($_COOKIE['wielkosc'])) setcookie('wielkosc', '10');
$wielkosc = $_COOKIE['wielkosc'];
if (!$wielkosc) $wielkosc = '14';

if (!($_GET['wybor'])) $wybor = 'kalkulator';
else $wybor = $_GET['wybor'];
?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<?
switch($jezyk) {
	case 'PL': print("<html lang=\"pl-PL\">");
		   break;
	case 'EN': print("<html lang=\"en-EN\">");
		   break;
	case 'FR': print("<html lang=\"fr-FR\">");
		   break;
	case 'DE': print("<html lang=\"de-DE\">");
		   break;
	default:   print("<html lang=\"pl-PL\">");
		   break;
}
?>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">
<?
include("_php/naglowek.php");
include("_php/style.php");
include("_funkcje/baza.php");

print("<title>$STOPKA_LEWY</title>");

switch($jezyk) {
	case 'PL': $n_dyscypliny = "dyscypliny.nazwa";
		   $n_kw = "kw.nazwa";
		   include("_tekst/tekst_PL.php");
		   break;
	case 'EN': $n_dyscypliny = "dyscypliny.nazwa1";
		   $n_kw = "kw.nazwa1";
		   include("_tekst/tekst_EN.php");
		   break;
	case 'FR': $n_dyscypliny = "dyscypliny.nazwa3";
		   $n_kw = "kw.nazwa3";
		   include("_tekst/tekst_FR.php");
		   break;
	case 'DE': $n_dyscypliny = "dyscypliny.nazwa2";
		   $n_kw = "kw.nazwa2";
		   include("_tekst/tekst_DE.php");
		   break;
	default:   $n_dyscypliny = "dyscypliny.nazwa";
		   $n_kw = "kw.nazwa";
		   include("_tekst/tekst_PL.php");
		   break;
}
?>
</head>

<body>
<?
$wybor = $_GET['wybor'];
?>
<div class="container all">
<div class="container calc fluid">
<div class="container frame fluid">
<?
include("_php/tytul.php");
include("kalk/kalk.php");
include("_php/pomoc.php");
include("_php/stopka.php");
if ($conn) mysql_close($conn);
?>
</div>
</div>
</div>
</body>

</html>
