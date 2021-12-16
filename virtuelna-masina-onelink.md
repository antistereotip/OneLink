# OneLink Virtualna Masina (VM)

## Uvod

Def: Virtuelna mašina n.s.m. 1) Softverska emulacija fizičkog računara. 2) [sic. OneLink] OneLink veb proksi.

OneLink virtuelna mašina (vm) je standardna primena OneLink proksija. Svaka instanca OneLink proksija je vm. 
Na primer, postoje VM-ovi za OLE rad, VM-ovi koji rade kao scenski serveri, a VM-i rade na živim serverima.

## TOK RADA VIRTUELNE MAŠINE

Korišćenje VM-a omogućava da se konfiguracija specifična za lokaciju testira u nekoliko okruženja pre nego što se unapredi u živo okruženje. Za OLE rad postoje tri primarna okruženja sa sve većim opsegom:

* OLE-ov VM (ovo je sandbok, samo ga OLE može videti)
* OneLink Staging VM (ovo je server za testiranje, otvoren za klijente, ali kontrolisan od domena translations.com)
* OneLink Live VM (ovo je sajt uživo, domen kontroliše klijent)

OneLink konfiguracijama, tkml i pomoćnim datotekama koje su potrebne za proksi upravlja sistem za kontrolu izvora, SVN.


### Opšti tok rada

Tok rada je sledeći:

1. Prijavljena je greška
2. Greška se reprodukuje na OLE VM
3. Greška je ispravljena na OLE VM-u i ispravka je posvećena SVN-u
4. Nova konfiguracija je raspoređena na OneLink Staging VM iz SVN-a
5. Ispravka greške je potvrđena na OneLink Staging VM
6. Nova konfiguracija raspoređena na OneLink Live VM od SVN-a
7. Ispravka greške je potvrđena na OneLink Live VM
8. Greška je zatvorena
