@extends('app')
@section('content')
<x-layout.inner class="text-royal py-16 lg:py-32">
  <div class="max-w-prose privacy">
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
  </div>
</x-layout.inner>
@endsection
