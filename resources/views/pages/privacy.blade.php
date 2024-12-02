@extends('app')
@section('content')
<x-layout.inner class="text-royal py-16 lg:py-32">
  <div class="max-w-prose privacy">
    @if (locale() === 'de')
      <h1 class="text-lg lg:text-4xl mb-4 lg:mb-10">{{ __('Datenschutz') }}</h1>
      <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.</p>
      <p>Die Nutzung unserer Website ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder E-Mail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden gemäss dieser Datenschutzerklärung teilweise an Dritte weitergegeben.</p>
      <p>Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>
      <h2 class="mt-32 lg:mt-48">Cookies</h2>
      <p>Die Internetseiten verwenden teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner keinen Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot nutzerfreundlicher, effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden und die Ihr Browser speichert.</p>
      <p>Die meisten der von uns verwendeten Cookies sind so genannte «Session-Cookies». Sie werden nach Ende Ihres Besuchs automatisch gelöscht. Andere Cookies bleiben auf Ihrem Endgerät gespeichert, bis Sie diese löschen. Diese Cookies ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen.</p>
      <p>Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte Fälle oder generell ausschliessen sowie das automatische Löschen der Cookies beim Schliessen des Browser aktivieren. Bei der Deaktivierung von Cookies kann die Funktionalität dieser Website eingeschränkt sein.</p>
      <h2>Mapbox</h2>
      <p>Diese Webseite verwendet Mapbox zur Nutzung von Karten und zur Erstellung von Anfahrtsplänen. Es handelt sich hierbei um einen Dienst der Mapbox Inc., 740 15th Street NW, 5th Floor, Washington, DC 20005 USA, nachfolgend nur „Mapbox" genannt. Durch die Zertifizierung nach dem EU-US-Datenschutzschild („EU-US Privacy Shield") garantiert Mapbox, dass die Datenschutzvorgaben der EU auch bei der Verarbeitung von Daten in den USA eingehalten werden.</p>
      <p>Sofern Sie auf dieser Webseite Mapbox aufrufen, speichert Mapbox über Ihren Internet-Browser ein Cookie auf Ihrem Endgerät. Um den Standort anzuzeigen, werden Ihre Nutzereinstellungen und -daten verarbeitet. Hierbei kann nicht ausgeschlossen werden, dass Mapbox Server in den USA einsetzt. Die Verarbeitung beruht auf dem berechtigten Interesse des Webseitenbetreibers. Das berechtigte Interesse liegt in der Optimierung der Funktionalität des Internetauftritts.</p>
      <h3>Dauer der Speicherung und Widerspruchsrecht</h3>
      <p>Sofern Sie mit dieser Verarbeitung nicht einverstanden sind, haben Sie die Möglichkeit, die Installation der Cookies durch die entsprechenden Einstellungen in Ihrem Internet-Browser zu verhindern.</p>
      <p>Zudem erfolgt die Nutzung von Mapbox sowie der über Mapbox erlangten Informationen nach den <a href="https://www.mapbox.com/legal/tos" target="_blank" class="hover:text-coral transition-colors">Mapbox-Nutzungsbedingungen</a> und den <a href="https://www.mapbox.com/legal/privacy" target="_blank" class="hover:text-coral transition-colors">Datenschutzrichtlinien</a>.</p>
      <h2>Hosting Provider & Server-LogFiles</h2>
      <p>Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten Server-Log Files, die Ihr Browser automatisch an uns übermittelt. Dies sind:</p>
      <ul>
      <li>IP-Adresse</li>
      <li>Browsertyp und Browserversion</li>
      <li>verwendetes Betriebssystem</li>
      <li>Referrer URL</li>
      <li>Hostname des zugreifenden Rechners</li>
      <li>Uhrzeit der Serveranfrage</li>
      </ul>
      <p>Diese Daten können nicht direkt bestimmten Personen zugeordnet werden. Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen. Wir behalten uns vor, diese Daten nachträglich zu prüfen, wenn uns konkrete Anhaltspunkte für eine rechtswidrige Nutzung bekannt werden.</p>
      <p>Diese Daten sowie alle Daten dieser Website werden bei unserem Hosting-Provider Hostpoint AG, Rapperswil, Schweiz gespeichert, deren Datenschutzerklärung Sie <a href="https://www.hostpoint.ch/hostpoint/kontakt-agb.html#datenschutz" target="_blank" class="hover:text-coral transition-colors">hier</a> finden.</p>
      <h2>Recht auf Auskunft, Löschung, Sperrung</h2>
      <p>Sie haben jederzeit das Recht auf unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den Zweck der Datenverarbeitung sowie ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden oder eine E-Mail an <a href="mailto:info@nicoleseiler.com" class="hover:text-coral transition-colors">info@nicoleseiler.com</a> senden.</p>
    @endif

    @if (locale() === 'en')
      <h1 class="text-lg lg:text-4xl mb-4 lg:mb-10">{{ __('Privacy Policy') }}</h1>
      <p>The operators of these pages take the protection of your personal data very seriously. We treat your personal data confidentially and in accordance with the statutory data protection regulations and this privacy policy.</p>
      <p>It is generally possible to use our website without providing personal data. If personal data (e.g. name, address or e-mail addresses) is collected on our website, this is always done on a voluntary basis as far as possible. Some of this data is passed on to third parties in accordance with this privacy policy.</p>
      <p>We would like to point out that data transmission over the Internet (e.g. when communicating by e-mail) may be subject to security vulnerabilities. Complete protection of data against access by third parties is not possible.</p>
      <h2 class="mt-32 lg:mt-48">Cookies</h2>
      <p>Some of the Internet pages use so-called cookies. Cookies do not damage your computer and do not contain viruses. Cookies are used to make our website more user-friendly, effective and secure. Cookies are small text files that are stored on your computer and saved by your browser.</p>
      <p>Most of the cookies we use are so-called "session cookies". They are automatically deleted at the end of your visit. Other cookies remain stored on your end device until you delete them. These cookies enable us to recognize your browser on your next visit.</p>
      <p>You can set your browser so that you are informed about the setting of cookies and only allow cookies in individual cases, exclude the acceptance of cookies for certain cases or in general and activate the automatic deletion of cookies when closing the browser. If cookies are deactivated, the functionality of this website may be restricted.</p>
      <h2>Mapbox</h2>
      <p>This website uses Mapbox to use maps and to create directions. This is a service provided by Mapbox Inc, 740 15th Street NW, 5th Floor, Washington, DC 20005 USA, hereinafter referred to as "Mapbox". Through certification in accordance with the EU-US Privacy Shield, Mapbox guarantees that the data protection requirements of the EU are also complied with when processing data in the USA.</p>
      <p>If you call up Mapbox on this website, Mapbox stores a cookie on your end device via your Internet browser. Your user settings and data are processed in order to display the location. It cannot be ruled out that Mapbox uses servers in the USA. The processing is based on the legitimate interest of the website operator. The legitimate interest lies in optimizing the functionality of the website.</p>
      <h3>Duration of Storage and Right of Objection</h3>
      <p>If you do not agree to this processing, you have the option of preventing the installation of cookies by making the appropriate settings in your Internet browser.</p>
      <p>In addition, the use of Mapbox and the information obtained via Mapbox is governed by the <a href="https://www.mapbox.com/legal/tos" target="_blank" class="hover:text-coral transition-colors">Mapbox Terms of Use</a> and <a href="https://www.mapbox.com/legal/privacy" target="_blank" class="hover:text-coral transition-colors">Privacy Policy</a>.</p>
      <h2>Hosting Provider & Server Log Files</h2>
      <p>The provider of the pages automatically collects and stores information in so-called server log files, which your browser automatically transmits to us. These are:</p>
      <ul>
        <li>IP address</li>
        <li>Browser type and browser version</li>
        <li>Operating system used</li>
        <li>Referrer URL</li>
        <li>Host name of the accessing computer</li>
        <li>Time of the server request</li>
      </ul>
      <p>This data cannot be directly assigned to specific persons. This data is not merged with other data sources. We reserve the right to check this data retrospectively if we become aware of specific indications of unlawful use.</p>
      <p>This data and all data on this website is stored by our hosting provider Hostpoint AG, Rapperswil, Switzerland, whose privacy policy can be found <a href="https://www.hostpoint.ch/hostpoint/kontakt-agb.html#datenschutz" target="_blank" class="hover:text-coral transition-colors">here</a>.</p>
      <h2>Right to Information, Deletion, Blocking</h2>
      <p>You have the right to free information about your stored personal data, its origin and recipients and the purpose of data processing as well as a right to rectification, blocking or erasure of this data at any time. You can contact us at any time at the address given in the Imprint or send an e-mail to <a href="mailto:info@nicoleseiler.com" class="hover:text-coral transition-colors">info@nicoleseiler.com</a> if you have any further questions on the subject of personal data.</p>
    @endif

    @if (locale() === 'fr')
      <h1 class="text-lg lg:text-4xl mb-4 lg:mb-10">{{ __('Politique de confidentialité') }}</h1>
      <p>Les exploitants de ces pages prennent très au sérieux la protection de vos données personnelles. Nous traitons vos données personnelles de manière confidentielle et conformément aux dispositions légales en matière de protection des données ainsi qu'à la présente déclaration de protection des données.</p>
      <p>En règle générale, l'utilisation de notre site Internet est possible sans indication de données personnelles. Dans la mesure où des données personnelles (par exemple nom, adresse ou adresses e-mail) sont collectées sur notre site, cela se fait toujours, dans la mesure du possible, sur une base volontaire. Ces données sont en partie transmises à des tiers conformément à la présente déclaration de protection des données.</p>
      <p>Nous attirons votre attention sur le fait que la transmission de données sur Internet (par ex. lors de la communication par e-mail) peut présenter des failles de sécurité. Une protection sans faille des données contre l'accès par des tiers n'est pas possible.</p>
      <h2 class="mt-32 lg:mt-48">Cookies</h2>
      <p>Les pages Internet utilisent en partie des cookies. Les cookies n'endommagent pas votre ordinateur et ne contiennent pas de virus. Les cookies servent à rendre notre offre plus conviviale, plus efficace et plus sûre. Les cookies sont de petits fichiers texte qui sont déposés sur votre ordinateur et que votre navigateur enregistre.</p>
      <p>La plupart des cookies que nous utilisons sont des « cookies de session ». Ils sont automatiquement supprimés à la fin de votre visite. D'autres cookies restent enregistrés sur votre terminal jusqu'à ce que vous les supprimiez. Ces cookies nous permettent de reconnaître votre navigateur lors de votre prochaine visite.</p>
      <p>Vous pouvez configurer votre navigateur de manière à être informé de l'installation de cookies et à n'autoriser les cookies qu'au cas par cas, à exclure l'acceptation de cookies pour certains cas ou de manière générale, et à activer la suppression automatique des cookies à la fermeture du navigateur. En cas de désactivation des cookies, la fonctionnalité de ce site web peut être limitée.</p>
      <h2>Mapbox</h2>
      <p>Ce site web utilise Mapbox pour l'utilisation de cartes et la création de plans d'accès. Il s'agit d'un service de Mapbox Inc, 740 15th Street NW, 5th Floor, Washington, DC 20005 USA, ci-après dénommé simplement «Mapbox». Grâce à la certification selon le bouclier de protection des données UE-États-Unis («EU-US Privacy Shield»), Mapbox garantit que les prescriptions de l'UE en matière de protection des données sont également respectées lors du traitement des données aux États-Unis.</p>
      <p>Si vous consultez Mapbox sur ce site web, Mapbox enregistre un cookie sur votre terminal via votre navigateur Internet. Pour afficher la localisation, vos paramètres et données d'utilisateur sont traités. À cet égard, il ne peut être exclu que Mapbox utilise des serveurs situés aux États-Unis. Le traitement repose sur l'intérêt légitime de l'exploitant du site web. L'intérêt légitime réside dans l'optimisation de la fonctionnalité du site Internet.</p>
      <p>Si vous n'êtes pas d'accord avec ce traitement, vous avez la possibilité d'empêcher l'installation des cookies en sélectionnant les paramètres correspondants dans votre navigateur Internet.</p>
      <p>En outre, l'utilisation de Mapbox ainsi que des informations obtenues par le biais de Mapbox est soumise aux <a href="https://www.mapbox.com/legal/tos" target="_blank" class="hover:text-coral transition-colors">conditions d'utilisation de Mapbox</a> et aux <a href="https://www.mapbox.com/legal/privacy" target="_blank" class="hover:text-coral transition-colors">directives de protection des données</a>.</p>
      <h2>Fournisseur d'hébergement & fichiers journaux du serveur</h2>
      <p>L'hébergeur des pages collecte et enregistre automatiquement des informations dans ce que l'on appelle des fichiers journaux du serveur, que votre navigateur nous transmet automatiquement. Il s'agit de :</p>
      <ul>
        <li>adresse IP</li>
        <li>type et version du navigateur</li>
        <li>système d'exploitation utilisé</li>
        <li>URL de référence</li>
        <li>Nom d'hôte de l'ordinateur qui accède au site</li>
        <li>Heure de la demande du serveur</li>
      </ul>
      <p>Ces données ne peuvent pas être directement attribuées à des personnes précises. Nous ne procédons pas à un regroupement de ces données avec d'autres sources de données. Nous nous réservons le droit de vérifier ces données ultérieurement si nous avons connaissance d'indices concrets d'une utilisation illégale.</p>
      <p>Ces données ainsi que toutes les données de ce site web sont enregistrées chez notre fournisseur d'hébergement Hostpoint AG, Rapperswil, Suisse, dont vous trouverez la déclaration de protection des données <a href="https://www.hostpoint.ch/hostpoint/kontakt-agb.html#datenschutz" target="_blank" class="hover:text-coral transition-colors">ici</a>.</p>
      <h2>Droit à l'information, à la suppression, au blocage</h2>
      <p>Vous avez à tout moment le droit d'obtenir gratuitement des informations sur vos données personnelles enregistrées, sur leur origine et leur destinataire et sur la finalité du traitement des données, ainsi qu'un droit de rectification, de blocage ou de suppression de ces données. À ce sujet, ainsi que pour toute autre question relative aux données personnelles, vous pouvez nous contacter à tout moment à l'adresse indiquée dans les mentions légales ou nous envoyer un e-mail à <a href="mailto:info@nicoleseiler.com" class="hover:text-coral transition-colors">info@nicoleseiler.com</a>.</p>
    @endif
  </div>
</x-layout.inner>
@endsection
