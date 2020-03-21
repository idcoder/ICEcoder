<?php
// Italian language translation
// by: @pietrondo (GitHub)
//     @pietrobravo (Twitter)
//     blog.pietrocapriata.me (sito web)

// Please preserve formatting, line breaks, special characters, anything in <tags> and HTML equivalents (eg &amp;). Translations on right side.

$text = [

// / [ROOT LEVEL]

    "editor" =>
    [
    "server"                                       => "server",
    "Server name, OS..."                           => "Nome server, Sistema operativo e indirizzo IP...",
    "Root"                                         => "Root:",
        "ICEcoder root"                            => "ICEcoder root:",
        "PHP version"                              => "Versione PHP",
        "Date & time"                              => "Ora e data:",
        "your device"                              => "dispositivo in uso",
        "Browser"                                  => "Browser:",
        "Your IP"                                  => "Il tuo IP:",
        "files"                                    => "file",
        "Last 10 files..."                         => "Ultimi 10 file aperti:",
        "none"                                     => "[none]",
    ],

    "files" =>
    [
        "Lock"                                     => "Blocca",
        "Refresh"                                  => "Aggiorna",
        "Plugins"                                  => "Plugins",
        "ROOT"                                     => "[ROOT]"
    ],

    "index" =>
    [
        "UPDATE INFO"                              => "INFORMAZIONI AGGIORNAMENTO",
        "now available"                            => "&Egrave;ora disponibile",
        "Your version is"                          => "La tua versione Egrave;",
        "Update now"                               => "Aggiorna ora",
        "You have some..."                         => "Ci sono modifiche non salvate",
        "Are you sure you want to close?"          => "Are you sure you want to close?",
        "working"                                  => "working",
        "Color picker"                             => "Selettore di colore",
        "Plugins Manager"                          => "Plugins Manager",
        "New File"                                 => "Nuovo file",
        "New Folder"                               => "Nuova cartella",
        "Upload File(s)"                           => "Carica File",
        "Paste"                                    => "Incolla",
        "Open"                                     => "Apri",
        "Copy"                                     => "Copia",
        "Duplicate"                                => "Duplica",
        "Delete"                                   => "Elimina",
        "Rename"                                   => "Rinomina",
        "View Webpage"                             => "Visualizza la pagina web",
        "Download"                                 => "Download",
        "Properties"                               => "Propiet&agrave;",
        "File"                                     => "File",
        "Edit"                                     => "Modifica",
        "Remote"                                   => "Remoto",
        "Help"                                     => "Aiuto",
        "Save"                                     => "Salva",
        "Save As"                                  => "Salva come",
        "Live Preview"                             => "Anteprima",
        "Upload"                                   => "Upload",
        "Zip"                                      => "Comprimi",
        "Print"                                    => "Stampa",
        "Fullscreen toggle"                        => "Modalit&agrave; schermo intero",
        "Logout"                                   => "Logout",
        "Undo"                                     => "Annulla",
        "Redo"                                     => "Riesegui",
        "Indent more"                              => "Aumenta rientro",
        "Indent less"                              => "Riduci rientro",
        "Autocomplete"                             => "Autocompleta",
        "Comment/Uncomment"                        => "Commenta/Rimuovi commento",
        "Jump to Definition"                       => "Vai alla Definizione",
        "Manual"                                   => "Manuale",
        "Shortcuts"                                => "Scorciatorie",
        "Settings"                                 => "Configurazione",
        "Search for selected"                      => "Cerca selezionato",
        "website"                                  => "sito web",
        "Close all tabs"                           => "Chiudi tutte le schede",
        "Alphabetize tabs"                         => "Ordina le schede",
        "Find"                                     => "Trova",
        "in"                                       => "in",
        "and"                                      => "e",
        "replace"                                  => "sostituisci",
        "replace all"                              => "sostituisci tutto",
        "this document"                            => "questo documento",
        "open documents"                           => "apri documenti",
        "all files"                                => "tutti i file",
        "all filenames"                            => "tutti i nomi",
        "Go to Line"                               => "Vai alla linea",
        "View"                                     => "Visualizza",
        "Bug reporting not active"                 => "Segnalazione bug non attiva",
        "Single pane"                              => "Pannello singolo",
        "Diff pane also"                           => "Pannello delle differenze"
    ],

// /LIB

    "bug-files-check" =>
    [
        "Found in"                                 => "Trovato in:"
    ],

    "file-control" =>
    [
        "Sorry"                                    => "Spiacente",
        "does not seem..."                         => "non sembra esistere sul server",
        "Sorry, could not..."                      => "Siamo spiacenti, non è possibile ottenere i contenuti di",
        "Sorry, cannot create..."                  => "Siamo spiacenti, non è possibile creare una cartella a",
        "Sorry, cannot copy"                       => "Siamo spiacenti, non è possibile copiare",
        "into"                                     => "into",
        "Uploaded file(s) OK"                      => "Upload file Ok",
        "Sorry, cannot upload"                     => "Siamo spiacenti, non è possibile caricare",
        "Sorry, cannot upload..."                  => "Siamo spiacenti , non è possibile caricare mentre in modalità demo",
        "Sorry, cannot rename"                     => "Siamo spiacenti , non è possibile rinominare",
        "Maybe public write..."                    => "Forse sono necessari permessi di scrittura pubblica su questa o sulla cartella principale??",
        "Sorry, cannot move"                       => "Siamo spiacenti, non è possibile muovere",
        "Sorry, cannot save"                       => "Siamo spiacenti, non è possibile salvare",
        "Sorry, cannot replace..."                 => "Siamo spiacenti, non è possibile sostituire il testo",
        "Sorry, cannot change..."                  => "Siamo spiacenti, non è possibile cambiare i permessi",
        "Sorry, cannot delete..."                  => "Siamo spiacenti, non è possibile cancellare la cartella root",
        "Sorry, cannot delete"                     => "Siamo spiacenti, non è possibile cancellare",
        "Sorry, this file..."                      => "Siamo spiacenti, questo file è stato cambiato, non è possibile salvarlo",
        "Reload this file..."                      => "Ricarica questo file e copia la tua versione in un pannello differente",
        "There was a..."                           => "C\'è stato un problema tecnico, probabilmente qualcosa che non era ancora pronto. Così ICEcoder ha  ricaricato di nuovo il file.",
        "displayed at"                             => "visualizzato in",
        "Enter filename to..."                     => "Inserisci il nome del file da salvare in",
        "That file exists..."                      => "Questo file esiste già, sovrascrivere??",
        "Saving"                                   => "Stiamo salvando"
    ],

    "get-branch" => [],

    "headers" =>
    [
        "Bad CSRF token..."                        => "Bad CSRF token. Per favore riporta l\'errore a https://github.com/icecoder/ICEcoder così che possa essere fixato."
    ],

    "help" =>
    [
        "shortcuts"                                => "shortcuts",
        "Within document"                          => "all\'interno del documento",
        "On Tabs"                                  => "Sulle Tabs",
        "Within file manager"                      => "All\'interno del file manager",
        "Anywhere"                                 => "Dappertutto",
        "Space"                                    => "Spazio",
        "Click"                                    => "Click",
        "or"                                       => "o",
        "Left click"                               => "Click Sinistro",
        "Middle click"                             => "Click centrale",
        "Double click tap..."                      => "Doppio click / tap (mobile)",
        "Right click"                              => "Click Destro",
        "Middle scrollwheel"                       => "scrollwheel Medio",
        "Drag"                                     => "Trascina",
        "Autocomplete add snippet"                 => "Completamento automatico / aggiungi snippet",
        "Multiple select"                          => "Selezione multiple",
        "Move line up"                             => "Vai alla linea sopra",
        "Move line down"                           => "Vai alla linea sotto",
        "Duplicate lines"                          => "Duplica linea(e)",
        "Remove lines"                             => "Rimuovi linea(e)",
        "Insert line before"                       => "Inserisci linea prima di",
        "Insert line after"                        => "Inserisci linea dopo di",
        "Search for selected"                      => "Cerca selezionati",
        "Jump to definition"                       => "Vai a definizione / torna indietro",
        "Comment uncomment"                        => "Commento / decommenta",
        "Insert tab indent"                        => "Inserisci tab / rientro selezionato",
        "Wrap with div"                            => "Includi con &lt;div&gt;",
        "Wrap with span"                           => "Includi &lt;span&gt;",
        "Wrap unwrap p"                            => "Includi / escludi con  &lt;p&gt;",
        "Wrap unwrap a"                            => "Includi / escludi con &lt;a&gt;",
        "Wrap unwrap b"                            => "Includi / escludi con &lt;b&gt;",
        "Wrap unwrap i"                            => "Includi / escludi con &lt;i&gt;",
        "Wrap unwrap strong"                       => "Includi / escludi con &lt;strong&gt;",
        "Wrap unwrap em"                           => "Includi / escludi con &lt;em&gt;",
        "Wrap unwrap li"                           => "Includi / escludi con &lt;li&gt;",
        "Wrap unwrap h1..."                        => "Includi / escludi con &lt;h1&gt; - &lt;h3&gt;",
        "End line with..."                         => "Finisci la linea con &lt;br&gt;",
        "Close tab"                                => "Chiudi tab",
        "Select file folder"                       => "Seleziona file, cartella",
        "Open file"                                => "Apri file",
        "Range select"                             => "Seleziona range",
        "Options for selected"                     => "Opzioni per selezionati",
        "Delete selected"                          => "Elimina selezionati",
        "Next previous tab"                        => "Tab successiva / precedente",
        "Next tab"                                 => "Tab successiva",
        "Previous tab"                             => "Tab precedente",
        "New tab"                                  => "Nuova tab",
        "Close current tab"                        => "Chiudi tab corrente",
        "Open file prompt"                         => "Open file prompt",
        "Find"                                     => "Trova",
        "Focus on Go..."                           => "Focus on Go to line input",
        "Save"                                     => "Salva",
        "Save as"                                  => "Salva come...",
        "View webpage"                             => "Vedi pagina web",
        "Contract expand file..."                  => "Contrai / espandi file manager",
        "Fold unfold current..."                   => "Piega / dispiega riga corrente",
        "Refocus on document"                      => "Refocus sul documento",
        "Cancel tasks"                             => "Cancella compito"
    ],

    "icecoder" =>
    [
        "results"                                  => "risultati",
        "No text selected..."                      => "Nessun testo selezionato per la ricerc",
        "all files"                                => "tutti i file",
        "all filenames"                            => "tutti i nomi dei file",
        "selected files"                           => "seleziona file",
        "selected filenames"                       => "seleziona nomi dei file",
        "Creating Folder"                          => "Sto creando una cartla",
        "Sorry you can..."                         => "Spiacente, puoi avere solo 100 file aperti a volta!",
        "Opening File"                             => "Apertura file",
        "Enter relative file..."                   => "Digita il percorso relativo (con / di prefisso) o l\'url remoto",
        "Getting"                                  => "Getting",
        "Please enter the..."                      => "Per favore digita un nuovo nome per",
        "Renaming to"                              => "Rinominando a ",
        "Moving to"                                => "Muovendo a",
        "Deleting File"                            => "Eliminando file",
        "Pasting File"                             => "Incollando file",
        "Sorry cannot paste..."                    => "Spiacente, ma non puoi copiare un intera radice",
        "Nothing to paste..."                      => "Niente da copiare, copia prima un file o una cartella!",
        "and"                                      => "e",
        "this document"                            => "questo documento",
        "replace"                                  => "sostituisci",
        "replace all"                              => "sostituisci tutto",
        "file"                                     => "file",
        "Replacing text in"                        => "Sostituisci il testo con",
        "Cancelled tasks"                          => "Compiti cancellati",
        "Open previous files"                      => "Aprire i file precedenti?",
        "Please note for..."                       => "Si prega di notare: affinche l\'aggiornamento funzioni correttamente, è necessario disporre dei permessi di scrittura e cancellazione su tutti le cartelle e file di ICEcoder e. Se è necessario ripristinare questa versione di ICEcoder per qualsiasi motivo, lo troverete nella directory / tmp dir. Fare clic su OK per procedere con l\'aggiornamento automatico o annullare a visitare il sito ICEcoder in modo da poter utilizzare la zip e aggiornare manualmente.",
        "You can start..."                         => "Puoi ripoertare il bug in Help >  Settings",
        "Error cannot find..."                     => "Error: cannot find/access the error file paths",
        "No new errors..."                         => "Nessun nuovo errore trovato",
        "You have made..."                         => "Hai fatto alcuni cambiamenti. Sei sicuro che vuoi chiudere senza prima salvare?",
        "Close all tabs"                           => "Chiudere tutte le tabs?",
        "results"                                  => "risultati"
    ],

    "login" =>
    [
        "set password"                             => "imposta password",
        "login"                                    => "login",
        "To disable registration..."               => "Per disattivare la modalità di registrazione, apri il menu delle impostazioni o aprire data/config-settings.php e cambia enableRegistration in false quindi ricarica questa pagina",
        "Registration mode enabled"                => "Modalità di registrazione abilitata",
        "auto-check for updates"                   => "auto-check per aggiornamenti",
        "To put into..."                           => "Per mettere in modalità multi-utente, aprire il menu delle impostazioni o apri data/config-settings.php e cambiare multiutente su true quindi ricarica questa pagina",
        "multi-user"                               => "multi-user"
    ],

    "multiple-results" =>
    [
        "rename all"                               => "rename all",
        "replace all"                              => "replace all",
        "document"                                 => "document",
        "Found"                                    => "Found",
        "times"                                    => "times",
        "replace"                                  => "replace",
        "file folder"                              => "file/folder",
        "rename to"                                => "rename to",
        "rename"                                   => "rename",
        "file"                                     => "file",
        "No matches found"                         => "No matches found",
        "selected"                                 => "selected",
        "found in"                                 => "found in",
        "Replaced"                                 => "Replaced"
    ],

    "plugins-manager" =>
    [
        "ICEcoder needs to..."                     => "ICEcoder needs to reload to make this plugin usable. Reload now?",
        "saving plugins"                           => "saving plugins...",
        "Cannot update config..."                  => "Cannot update config file. Please set public write permissions on",
        "and try again"                            => "and try again",
        "couldnt delete dir"                       => "could not delete dir",
        "couldnt delete file"                      => "could not delete file",
        "plugins"                                  => "plugins",
        "Guide to writing..."                      => "Guide to writing plugins",
        "Manage Installed"                         => "Manage Installed",
        "URL"                                      => "URL",
        "Target"                                   => "Target",
        "Timer"                                    => "Timer",
        "Update"                                   => "Update",
        "Install"                                  => "Install",
        "Uninstall"                                => "Uninstall",
        "Reload after install..."                  => "Reload after install required"
    ],

    "properties" =>
    [
        "properties"                               => "Proprietà",
        "Size"                                     => "Dimensione",
        "Modified"                                 => "Modificato",
        "Last access"                              => "Ultimo accesso",
        "Type"                                     => "Type",
        "Readable Writeable"                       => "Leggibile / Scrivibile",
        "Relative path"                            => "Percorso relativo",
        "Absolute path"                            => "Percorso assoluto",
        "Contains"                                 => "Contiene",
        "Permissions"                              => "Permessi",
        "Owner"                                    => "Proprietario",
        "Group"                                    => "Gruppo",
        "Public"                                   => "Pubblico",
        "Read"                                     => "Lettura",
        "Write"                                    => "Scrittura",
        "Execute"                                  => "Esecuzione",
        "Change to"                                => "Cambia a",
        "update"                                   => "aggiorna"
    ],

    "settings-common" =>
    [
        "Your document does..."                    => "Il tuo documento non sembra essere  in formato UTF-8 per questo viene corretto"
    ],

    "settings-save-current-files" =>
    [
        "Cannot update config..."                  => "Impossibile aggiornare il file di configurazione. Si prega di impostare i permessi di scrittura pubblica su",
        "and try again"                            => "e prova ancora"
    ],

    "settings-screen" =>
    [
        "settings"                                 => "settings",
        "version"                                  => "versione",
        "website"                                  => "sito web",
        "git"                                      => "git",
        "codemirror dir"                           => "dir codemirror ",
        "codemirror version"                       => "versione codemirror ",
        "file manager root"                        => "root di file manager ",
        "Free to use..."                           => "Libero di usarlo per i propri scopi, commerciali e non, facendomelo solo sapere per eventuali nuovi e interessanti utilizzi o personalizzazioni. :) <br> Nessuna garanzia o responsabilità, tutte le responsabilità di utilizzo è vostra. <br> Un sacco di aziende e persone fantastiche hanno contribuito a costruire ICEcoder e ce ne sarebbero troppi da ringraziare. Si prega di consultare la lista completa a",
        "functionality"                            => "funzionalità",
        "check for updates..."                     => "controlla aggiornamenti all\'avvio",
        "auto open last..."                        => "Apri automaticamente ultimi file al login",
        "when finding in..."                       => "quando trovi nei file, escludi",
        "assisting"                                => "assisting",
        "code assist"                              => "code assist",
        "visible tabs"                             => "tab visibili",
        "locked nav"                               => "navigazione bloccata",
        "tag wrapper command"                      => "tag wrapper command",
        "auto-complete on"                         => "auto-completamento attivo",
        "security"                                 => "sicurezza",
        "new password"                             => "nuova password",
        "8 chars min"                              => "8 caratteri minimo",
        "confirm password"                         => "conferma password",
        "banned files/folders"                     => "file e cartelle vietati",
        "banned paths"                             => "percorsi vietati",
        "ip addresses"                             => "indirizzo ip",
        "Slash prefixed comma..."                  => "slash di prefisso, delimitato da virgole",
        "Comma delimited"                          => "delimitato da virgole",
        "style"                                    => "style",
        "theme"                                    => "tema",
        "line wrapping"                            => "a capo automatico",
        "scrollbars"                               => "barre di scorrimento",
        "indent type"                              => "tipo di rientro",
        "indent size"                              => "dimensioni rientro",
        "font size"                                => "dimensione font ",
        "auto indent"                              => "auto indent",
        "layout"                                   => "layout",
        "plugin panel aligned"                     => "Pannello plug inallineato",
        "file manager"                             => "file manager",
        "root"                                     => "root",
        "Slash prefixed"                           => "barra obliqua prefisso",
        "bug reporting"                            => "bug reporting",
        "check in files"                           => "check in files",
        "every"                                    => "ogni",
        "secs getting last"                        => "secs, getting last",
        "lines"                                    => "linee",
        "multi-user"                               => "multi-user",
        "Make sure you..."                         => "Assicurati di non bloccarti fuori",
        "Registration"                             => "Registrazione",
        "update"                                   => "aggiorna"
    ],

    "settings-update" =>
    [
        "Cannot update config..."                  => "Non posso aggiornare il file config. Per favore permetti l\'accesso pubblico di scrittura",
        "and try again"                            => "e prova ancora",
        "and press refresh"                        => "e premi aggiorna"
    ],

    "updater" =>
    [
        "Update appears to..."                     => "L\'aggiornamento sembra andato bene"
    ],

    "find-in-files" =>
    [
        "Enter path to search in"                  => "Inserire il percorso in cui ricercare",
        "Enter semicolon-separated masks..."       => "Inserisci maschere separate da punto e virgola i dei file da cercare (e.s. *.php;*.html;*.js)",
        "Type of text"                             => "Tipo di testo",
        "Fixed text"                               => "Testo fisso",
        "Regular expression"                       => "Espressione regolare",
        "Case sensitive"                           => "Case sensitive",
        "Yes"                                      => "Si",
        "No"                                       => "No",
        "Search"                                   => "Cerca",
    ]

];
