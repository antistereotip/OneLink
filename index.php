<?php
require_once("db.php");
?>
<html>
<head>
<title>Antistereotip - at its best - Seatbelt Please</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
    color: #444;
    width:1280px;
    font-family:arial;
    letter-spacing:1px;
    line-height:20px;
    margin: 0 auto;
}
.tbl-qa{
    width: 100%;
    font-size:0.9em;
    background-color: #f5f5f5;
}
.tbl-qa th.table-header {
    padding: 5px;
    text-align: left;
    padding:10px;
}
.tbl-qa .table-row td {
    padding:10px;
    background-color: #FDFDFD;
    vertical-align:top;
}
.button_link {
    color:#FFF;
    text-decoration:none; 
    background-color:#428a8e;
    padding:10px;
}
td img {padding: 10px;}
.table-row td {text-align: justify;
            text-justify: inter-word;}
.header {
    padding-top: 30px;
    padding-bottom: 30px;
    text-align: center; 
    margin: 0 auto;
}
.header h4 {color: #6b96b5;}
.footer {
    padding-top: 30px;
    padding-bottom: 30px;
    text-align: center; 
    margin: 0 auto;
}
.naslov {padding: 10px;}
.podnaslov {padding: 10px;}
.paragraf {padding: 20px;
            text-align: justify;
            text-justify: inter-word;
    
}
strong, b {color: #777;}
.paragraf b {color: #6b96b5;}
.animacija {
-webkit-animation: cssAnimation 1s 1 ease;
-moz-animation: cssAnimation 1s 1 ease;
-o-animation: cssAnimation 1s 1 ease;
}
@-webkit-keyframes cssAnimation {
from { -webkit-transform: rotate(0deg) scale(0.100) skew(0deg) translate(0px); }
to { -webkit-transform: rotate(0deg) scale(0.999) skew(0deg) translate(0px); }
}
@-moz-keyframes cssAnimation {
from { -moz-transform: rotate(0deg) scale(0.100) skew(0deg) translate(0px); }
to { -moz-transform: rotate(0deg) scale(0.999) skew(0deg) translate(0px); }
}
@-o-keyframes cssAnimation {
from { -o-transform: rotate(0deg) scale(0.100) skew(0deg) translate(0px); }
to { -o-transform: rotate(0deg) scale(0.999) skew(0deg) translate(0px); }
</style>
<link rel="shortcut icon" type="image/png" href="logo.png"/>
</head>
<body>
<?php	
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
	
?>
<div class="header">
    <h1 class="naslov" id="naslov"><img src="img/logo.jpg" width="180" height="auto"></h1>
    
    <h2 class="podnaslov animacija">NAJBOLJI MEĐU NAJBOLJIMA, ZNANJE JE MOĆ...</h2>
    <h4>"Nije znanje znanje znati, već je znanje znanje dati" - J.J.Zmaj</h4>
    <p class="paragraf">Da skrenem pažnju na samom početku: Sajt je u eksperimentalnoj fazi i pun je grešaka, ali smo se potrudili da iste svedemo na minimum. 
    Cilj je da dostignemo sam vrh vodećih industrija <strong><b>(IOT, Lifestyle, IT, Entertainment, ART, Blockchain...)</b></strong>. Biramo <strong><b>kvalitet</b></strong> 
    umesto kvantiteta. Da biste se našli na listi nas i naših partnera, trebate imati potpuno (ili većinsko) poslovanje u našim rukama. Ovo nije portfolio, već 
    <em>nova generacija oglasne table</em>. Nema paginacije, nema drugih strana, sve je one-page. Biti na našem sajtu nije samo privilegija, to je i stil života, nešto kao potpis. 
    Kako naplaćujemo oglasni prostor ? <strong><b>Jedan piksel košta jedan RSD</b></strong>, dakle 1280 x 200 iznose <b>256000 RSD</b> (jedan red visine 200px). Da biste radili 
    sa nama, potrebno je potpuno poverenje i saradnja na duže staze. Ne umemo brza rešenja, niti ih želimo. Osnivač Antistereotip-a je <strong>Milutin Gavrilović</strong>. 
    Suosnivač i tehnički direktor Antistereotip-a <strong>Danilo Bogdanov</strong> je nažalost tragično nastradao i preminuo. Postoji upravni odbor i par članova entuzijasta. 
    Statut možete pogledati <a href="statut"><b>[ovde]</b></a>, a osnivački akt na ovom <a href="osnivacki-akt"><b>[linku]</b></a>. Izdali smo i prvi broj Dinovog zabavnika 
    u 32 bita, možete ga preuzeti <a href="https://antistereotip.net/DinovZabavnik.pdf"><b>[ovde]</b></a>.Imamo viziju da stvorimo <strong>Prvi Slobodni i Besplatni IT 
    univerzitet u Srbiji</strong>. I da, uspećemo u tome. Nije pitanje - možemo li ? Pitanje je hoćemo li ? U timu ima mesta za 1111 programera i IT entuzijasta. 
    Postoji matrica koja oblikuje tim. To će biti tim iz snova. I da, <strong>Nikad ne odustaj</strong> - RIP Danilo Bogdanov... Još nešto - <strong>Snovi nas čine živim</strong> - M.
    </p>
    <p><img src="img/me4.jpg" width="150"/></p>
    <p><b>Pozovite: +381659511404</b></p>
    <p class="paragraf">Tehnički deo za sada je <b>PHP</b> programski jezik i <b>MySQL</b> baza podataka sa <b>PHP PDO</b> drajverom, dok u budućnosti planiramo <b>NoDB</b> 
    rešenje sa <b>LISP</b>-om ili <b>ANSI-C</b>-om. Trenutno je nemoguće pristupiti administratorskom panelu bez hardverskog ključa <b>(USB)</b>. Takav pristup štiti sajt od 
    bilo kakvog napada. Biće uključen <b>ZigBEE</b> i <b>HIPERMAN</b> u mrežni deo infrastrukture čim zakupimo <b><em></em>Dedicated server</em></b>. Sajt je tek počeo tehnički da se 
    razvija, stoga, molimo vas budite strpljivi. Ovaj fantastičan projekat će ugledati svetlost dana. Poželite nam sreću. Ali i vežite pojaseve, jer polećemo.
    Srdačno. <strong>Admin</strong>.</p>
    <hr />
</div>
<table class="tbl-qa">
  
  <tbody id="table-body">
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><a href='view.php?id=<?php echo $row['id']; ?>'>
		<?php echo $row["post_title"]; ?></a></td>
		<td><?php echo $row["sum"]; ?></td>
		<td><?php echo $row["description"]; ?></td>
		<td><img src='<?php echo $row["img"]; ?>' width='150' height='auto'/></td>
		<td><a href='<?php echo $row["link"]; ?>'><?php echo $row["link"]; ?></a></td>
		<td><?php echo $row["post_at"]; ?></td>
		
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>

<div class="footer">
    <h1>2012 - 2077 Cyberpunk</h1>
    <p class="paragraf">Cena <b>animiranog logotipa</b> u futeru iznosi <strong>99 EUR plus PDV</strong>. Mesta su takođe limitirana. Sav prikupljen novac ide u izgradnju projekta. Svaki RSD ili EURO 
    će biti transparentno objavljen na sajtu i svako će moći da vidi šta se dešava sa njegovim novcem. Deo će ići za infrastrukturu a deo za stručni kadar.</p>
    <p><img src="img/gavrilovic.gif" width="400"><img src="img/ghost.gif" width="400"></p>
    <p><img src="img/aska.gif" width="400"><img src="img/lili.gif" width="400"></p>
    <p><img src="img/goranzarubica.gif" width="400"><img src="img/animatedjaca4.gif" width="400"></p>
    <p></p><p><img src="img/logo-shadowserver1.png" width="220"></p>
    
    <h4>Follow The White Rabbit</h4>
    <p><img src="img/rabbit.png" width="220"></p>
    
<p><img src="img/gia.png" width="128"><img src="img/uskrs-logo.jpg" width="128"><img src="img/ghost3.png" width="128"><img src="img/uskrs2-logo.jpg" width="128">
</p>
<?php
function folderSize($dir){
$count_size = 0;
$count = 0;
$dir_array = scandir($dir);
  foreach($dir_array as $key=>$filename){
    if($filename!=".." && $filename!="."){
       if(is_dir($dir."/".$filename)){
          $new_foldersize = foldersize($dir."/".$filename);
          $count_size = $count_size+ $new_foldersize;
        }else if(is_file($dir."/".$filename)){
          $count_size = $count_size + filesize($dir."/".$filename);
          $count++;
        }
   }
 }
return $count_size;
}
$folder_name = "./img";
echo 'img folder size: ' . folderSize($folder_name);   
?>
</div>


</body>
</html>





