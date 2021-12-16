# OneLink

## OneLink Proksi

Def: Proksi server, n.s.m. 1) server koji je posrednik između zahteva i resursa. 2) [sic. OneLink] server koji isporučuje lokalizovanu verziju traženog resursa.

OneLink proksi je poseban proksi koji virtuelno lokalizuje veb lokacije. Tradicionalni plan lokalizacije bi uključivao hostovanje prevedene kopije izvorne veb 
stranice. OneLink Proki rešenje otklanja ovu potrebu tako što koristi proksi izvornu lokaciju i primenjuje prevod u hodu.

### DIJAGRAM PROKSI SAOBRAĆAJA

Sledeći dijagram ilustruje različite permutacije OneLink proksija:

<img src="https://github.com/antistereotip/OneLink/blob/main/proxy.jpg" width="400"/>

### Proksi

Sam proksi je VM (ili kolekcija VM) koji pokreće nekoliko usluga. Usluge relevantne za OLE su:

<table class="confluenceTable"><tbody><tr><th class="confluenceTh">Ime usluge</th><th class="confluenceTh">Opis</th>
  </tr><tr><td class="confluenceTd">Apache</td><td class="confluenceTd">http web server</td></tr><tr><td class="confluenceTd">
  TM/SMT/OLTM</td><td class="confluenceTd">Prevodilačka memorija(s)</td></tr><tr><td class="confluenceTd">lcpagent</td><td class="confluenceTd">
  Komunicira sa OneLink portalom za udaljena ažuriranja</td></tr><tr><td colspan="1" class="confluenceTd">onelink</td><td colspan="1" 
  class="confluenceTd">Onelink softver za raščlanjivanje i prevođenje zahteva za veb stranicu</td></tr></tbody></table>
