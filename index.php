<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="sv" xml:lang="sv">
<head>
    <title>Mall för en liten textbaserad hemsida</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset='UTF-8'" />
    <meta name="author" content="Togald Nilsson" />
    <meta name="robots" content="noindex, nofollow" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>HEJ!</h1>
    <p>Detta är en exempeltext. Faktiskt innehåll kan variera. 
    
    <ul>
        <li>Butts
        <li>Butts
        <li>Butts
    </ul>
    
    <h1>Systeminformation</h1>
    <h2>Hårdvara och prestanda</h2>
    <table>
        <caption>Hårdvara</caption>
        <tr>
            <td>CPU</td>
            <td>AMD Althon 64 x2 2,3 GHz</td>
        </tr>
        <tr>
            <td>Minne</td>
            <td>4 GB DDR2 667 MHz</td>
        </tr>
        <tr>
            <td>Grafik</td>
            <td>nVidia GeForce GT 520 passivkylt</td>
        </tr>
        <tr>
            <td>Hårddiskar</td>
            <td>160 GB SATA-disk (systemdisk)<br>250 GB IDE-disk (krypterad med AES)</td>
        </tr>
        <tr>
            <td>Operativsystem</td>
            <td>Arch Linux x86_64</td>
        </tr>
    </table>
    
    <table>
        <caption>Benchmarks</caption>
        <tr>
            <td>Truecrypt AES</td>
            <td>221 MB/s</td>
        </tr>
        <tr>
            <td>Minecraft</td>
            <td>Inga problem</td>
        </tr>
    </table>
    
    <h2>Portar i nätverket</h2>
    <table>
        <tr>
            <th>Port</th>
            <th>Tjänst</th>
        </tr>
        <tr>
            <td>80</td>
            <td>HTTP</td>
        </tr>
        <tr>
            <td>666</td>
            <td>SSH</td>
        </tr>
        <tr>
            <td>9091</td>
            <td>Transmission (endast lokalt)</td>
        </tr>
        <tr>
            <td>1942</td>
            <td>Routerns webbinterface</td>
        </tr>
        <tr>
            <td>25565</td>
            <td>Minecraftserver</td>
        </tr>
    </table>
    
    <h2>Viktiga kataloger</h2>
    <table>
        <tr>
            <td class="tt">/home/&lt;user&gt;/</td>
            <td>Användarens hemkatalog. </td>
        </tr>
        <tr>
            <td class="tt">/media/truecrypt1/</td>
            <td>Torrenters lagringsplats. Denna disk är krypterad, och enbart systemadministratören känner till lösenordet. </td>
        </tr>
        <tr>
            <td class="tt">/media/truecrypt1/.torrent/</td>
            <td>Alla inställningar för Transmission. Om /media/truecrypt1/ inte är monterad, kan inte Transmission köras. </td>
        </tr>
        <tr>
            <td class="tt">/media/truecrypt1/Torrent</td>
            <td>Pågående och färdiga nedladdningar. </td>
        </tr>
        <tr>
            <td class="tt">/media/truecrypt1/Downloads</td>
            <td>Symboliska länkar till filer och mappar i /media/truecrypt1/Torrent/. Dessa länkar skapas så snart en torrent är färdig, och skall tas bort av användaren som lagt till en torrent när torrenten är hämtad. Detta för att kunna fortsätta seeda 
efter behov. </td>
        </tr>
        <tr>
            <td class="tt">/srv/minecraft/</td>
            <td>Alla filer som hör till Minecraftservern. </td>
        </tr>
        <tr>
            <td class="tt">/srv/http/</td>
            <td>Serverns HTTP-root. Detta dokument lagras här. </td>
        </tr>
    </table>
    
    <h1>Guide till tjänster och verktyg</h1>
    <h2>SSH-inloggning</h2>
    <p>Aria nås via kommandot <span class="tt">ssh -p 666 <em>username</em>@aria.mfserver.net</span>. Du ska aldrig använda root-kontot för att ansluta till Aria, utan istället använda <span class="tt">sudo</span> från ditt eget användarkonto. 
    
    <h2>Remote desktop</h2>
    <p>På Aria finns ett antal grafiska verktyg installerade, liksom en implementation av NoMachines NX-server för fjärrskrivbord. Arias standardskrivbord är LXDE med ett antal mindre modifieringar, men för den som vill finns möjlighet att installera en 
annan skrivbordsmiljö eller window manager. 
    
    <table>
        <caption>Inställningar för att ansluta till SSH-servern</caption>
        <tr>
            <td>Användarnamn</td>
            <td><em>Ditt vanliga användarnamn</em></td>
        </tr>
        <tr>
            <td>Lösenord</td>
            <td><em>Ditt vanliga lösenord</em></td>
        </tr>
        <tr>
            <td>Host</td>
            <td>aria.mfserver.net</td>
        </tr>
        <tr>
            <td>Port</td>
            <td>666</td>
        </tr>
        <tr>
            <td>Key...</td>
            <td>Du skall använda NoMachines standardnyckel tillsvidare. Du trycker då Key... -> Default -> save. Detta kan komma att ändras i framtiden. </td>
        </tr>
        <tr>
            <td>Skrivbord</td>
            <td>Inställningarna i denna ruta beror på din skrivbordsmiljö. För standardskrivbordet fungerar Unix :: Custom :: Settings -> "Run the following command" -> "exec startlxde"</td>
        </tr>
    </table>
    <p>Övriga inställningar kan anpassas efter värddatorns egenskaper. Alla andra flikar i konfigurationsfönstret bör lämnas orörda. 
    
    <h2>FTP-server</h2>
    <p>På Aria finns en FTP-server installerad. Som standard ger den dig tillgång till hela systemet som om du hade varit inloggad via SSH, förutom att du inte kan använda <span class="tt">sudo</span>. FTP kan nås av alla användare på servern, men med varierande privillegier beroende på vilka grupper användaren tillhör. 
    
    <p>FTP-serverns anslutning är krypterad med SSH, vilket innebär att alla anslutningar är lika säkra som SSH-terminalen är. Det innebär också att SSH-porten <span class="tt">666</span> används för FTP-anslutningar, istället för standardporten <span 
class="tt">22</span>. 
    
    <h2>Minecraftserver</h2>
    <p>Minecraftservern är en onlineserver med whitelist, så enbart användare som har ett äkta konto hos Mojang, har en äkta kopia av spelet, och finns med i whitelisten, kan spela. Det är fritt fram att bjuda in fler spelare till Minecraft, skicka då deras 
användarnamn till Togald Nilsson eller Joakim Boström. 
    
    <h2>HTTP-server</h2>
    <p>Aria har Lighttpd och PHP installerat, vilket ger henne möjlighet att bland annat visa denna webbsida. HTTP-rooten är som standard <span class="tt">/srv/http/</span>, och där finns en mapp för varje användare på servern, avsedd för en egen personlig webbsida. <span class="tt">/srv/http/</span> är skrivskyddad som standard, för att skydda detta dokument från att tas bort av misstag. Din egen HTTP-root nås via <span 
class="tt">http://aria.mfserver.net/<em>användarnamn</em></span>. 
    
    <h2>BitTorrent - Transmission</h2>
    <p>Systemadministratören har i sin outgrundliga visdom valt Transmission som Arias BitTorrent-klient. Transmission kan styras via SSH genom programmet <span class="tt">transmission-remote-cli</span>, eller via det grafiska gränssnittet genom att öppna 
transmission-qt (LXDE-menyn -> Internet -> Transmission). Du kan även använda webbinterfacet till transmission via remote desktop. Det nås på <span class="tt">http://localhost:9091</span>. Det går inte att använda transmissions webbinterface över internet, 
eftersom det inte erbjuder någon krypterad anslutning, och inte heller någon säker autentiseringsmetod. 
    
    <p>För att kunna använda Transmission, lägga till torrenter, och hämta de färdiga filerna, måste du vara medlem i gruppen <span class="tt">transmission</span>. Detta för att alla transmissions filer ägs av den gruppen, och inte är läs/skrivbara av någon 
annan än ägare och grupp. 
    
    <p>Transmission är konfigurerat så att alla anslutningar till tracker, peers och leechers kräver att anslutningen är krypterad. Detta för att inte storebror ska se vad som överförs. Hårddisken som Transmission använder sig av är dessutom krypterad med 
TrueCrypt. Konfigurationsfiler, resume-filer, torrents och data ligger på den krypterade disken. Konfigurationsfilen ägs av användaren <span class="tt">transmission</span>, och är endast läsbar, för att förhindra att någon inställning ändras av misstag. 
Transmission är konfigurerad så att alla hjälpsystem för att hitta fler peers är avstängda, detta för att kunna användas med privata trackers, som ofta har det som krav av säkerhetsskäl. 
    
    <p>Eftersom Transmissions inställningar lagras på en extern krypterad hårddisk, måste systemadministratören montera den krypterade disken och starta transmission manuellt om Aria varit offline. Detta är för att en angripare som tillskansar sig fysisk 
tillgång till maskinen inte ska kunna rota fram en keyfile eller ett sparat lösenord någonstans på henne. 
</body>
</html>