# It's not a Bug, it' a Feature. OneLink

---------------------------------
## OneLinkProxy

eng: The OneLink proxy is a special proxy which virtually localizes websites. A traditional localization plan would involve 
hosting a translated copy of the origin website.  The OneLink Proxy solution obviates this need by proxying the origin 
site and applying translation on-the-fly.

<img src="https://github.com/antistereotip/OneLink/blob/main/proxy.jpg" width="400"/>

srp: OneLink proksi je poseban proksi koji virtuelno lokalizuje veb lokacije. Tradicionalni plan lokalizacije bi uključivao 
hostovanje prevedene kopije izvorne veb stranice. OneLink Proki rešenje otklanja ovu potrebu tako što koristi proksi izvornu 
lokaciju i primenjuje prevod u hodu.

<table class="confluenceTable"><tbody><tr><th class="confluenceTh">Service Name</th><th class="confluenceTh">Description</th></tr><tr><td class="confluenceTd">Apache</td><td class="confluenceTd">The http web-server</td></tr><tr><td class="confluenceTd">TM/SMT/OLTM</td><td class="confluenceTd">The translation memory(s)</td></tr><tr><td class="confluenceTd">lcpagent</td><td class="confluenceTd">Communicates with the OneLink Portal for remote updates</td></tr><tr><td colspan="1" class="confluenceTd">onelink</td><td colspan="1" class="confluenceTd">The onelink software for parsing and translating webpage requests</td></tr></tbody></table>


## OneLink Virtual Machine

eng: The OneLink virtual machine (vm) is the standard deployment of the OneLink proxy.  Every instance of the OneLink proxy is a vm.  For example, there are VM's for OLE work, VM's running as staging servers, and VM's running on the live servers.

srp: OneLink virtuelna mašina (vm) je standardna primena OneLink proksija. Svaka instanca OneLink proksija je vm. Na primer, postoje VM-ovi za OLE rad, VM-ovi koji rade kao scenski serveri, a VM-i rade na živim serverima.

VIRTUAL MACHINE WORKFLOW

Using VM's allows for site-specific configuration to be tested in several environments before being promoted to the live environment.  For OLE work there are three primary environments with increasing scope:
* OLE's VM ( this is a sandbox, only the OLE can see it )
* OneLink Staging VM ( this is a testing server, open to clients but controlled by translations.com domains )
* OneLink Live VM ( this is the live site, the domain is controlled by the client )

Korišćenje VM-a omogućava da se konfiguracija specifična za lokaciju testira u nekoliko okruženja pre nego što se unapredi u živo okruženje. Za OLE rad postoje tri primarna okruženja sa sve većim opsegom:
* OLE-ov VM (ovo je sandbox, samo ga OLE može videti)
* OneLink Staging VM (ovo je server za testiranje, otvoren za klijente, ali kontrolisan od domena translations.com)
* OneLink Live VM (ovo je sajt uživo, domen kontroliše klijent)

### Opšti tok rada
