<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Deze waarde mag niet waar zijn.',
    'This value should be true.' => 'Deze waarde moet waar zijn.',
    'This value should be of type {{ type }}.' => 'Deze waarde moet van het type {{ type }} zijn.',
    'This value should be blank.' => 'Deze waarde moet leeg zijn.',
    'The value you selected is not a valid choice.' => 'De geselecteerde waarde is geen geldige optie.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Selecteer ten minste {{ limit }} optie.|Selecteer ten minste {{ limit }} opties.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Selecteer maximaal {{ limit }} optie.|Selecteer maximaal {{ limit }} opties.',
    'One or more of the given values is invalid.' => 'Eén of meer van de ingegeven waarden zijn ongeldig.',
    'This field was not expected.' => 'Dit veld was niet verwacht.',
    'This field is missing.' => 'Dit veld ontbreekt.',
    'This value is not a valid date.' => 'Deze waarde is geen geldige datum.',
    'This value is not a valid datetime.' => 'Deze waarde is geen geldige datum en tijd.',
    'This value is not a valid email address.' => 'Deze waarde is geen geldig e-mailadres.',
    'The file could not be found.' => 'Het bestand is niet gevonden.',
    'The file is not readable.' => 'Het bestand is niet leesbaar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Het bestand is te groot ({{ size }} {{ suffix }}). Toegestane maximum grootte is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Het mime type van het bestand is ongeldig ({{ type }}). Toegestane mime types zijn {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Deze waarde moet {{ limit }} of minder zijn.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Deze waarde is te lang. Hij mag maximaal {{ limit }} teken bevatten.|Deze waarde is te lang. Hij mag maximaal {{ limit }} tekens bevatten.',
    'This value should be {{ limit }} or more.' => 'Deze waarde moet {{ limit }} of meer zijn.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Deze waarde is te kort. Hij moet tenminste {{ limit }} teken bevatten.|Deze waarde is te kort. Hij moet tenminste {{ limit }} tekens bevatten.',
    'This value should not be blank.' => 'Deze waarde mag niet leeg zijn.',
    'This value should not be null.' => 'Deze waarde mag niet null zijn.',
    'This value should be null.' => 'Deze waarde moet null zijn.',
    'This value is not valid.' => 'Deze waarde is ongeldig.',
    'This value is not a valid time.' => 'Deze waarde is geen geldige tijd.',
    'This value is not a valid URL.' => 'Deze waarde is geen geldige URL.',
    'The two values should be equal.' => 'De twee waarden moeten gelijk zijn.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Het bestand is te groot. Toegestane maximum grootte is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Het bestand is te groot.',
    'The file could not be uploaded.' => 'Het bestand kon niet geüpload worden.',
    'This value should be a valid number.' => 'Deze waarde moet een geldig getal zijn.',
    'This file is not a valid image.' => 'Dit bestand is geen geldige afbeelding.',
    'This is not a valid IP address.' => 'Dit is geen geldig IP-adres.',
    'This value is not a valid language.' => 'Deze waarde representeert geen geldige taal.',
    'This value is not a valid locale.' => 'Deze waarde representeert geen geldige lokalisering.',
    'This value is not a valid country.' => 'Deze waarde representeert geen geldig land.',
    'This value is already used.' => 'Deze waarde wordt al gebruikt.',
    'The size of the image could not be detected.' => 'De grootte van de afbeelding kon niet bepaald worden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'De afbeelding is te breed ({{ width }}px). De maximaal toegestane breedte is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'De afbeelding is niet breed genoeg ({{ width }}px). De minimaal verwachte breedte is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'De afbeelding is te hoog ({{ height }}px). De maximaal toegestane hoogte is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'De afbeelding is niet hoog genoeg ({{ height }}px). De minimaal verwachte hoogte is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Deze waarde moet het huidige wachtwoord van de gebruiker zijn.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Deze waarde moet exact {{ limit }} teken lang zijn.|Deze waarde moet exact {{ limit }} tekens lang zijn.',
    'The file was only partially uploaded.' => 'Het bestand is niet geheel geüpload.',
    'No file was uploaded.' => 'Er is geen bestand geüpload.',
    'No temporary folder was configured in php.ini.' => 'Er is geen tijdelijke map geconfigureerd in php.ini.',
    'Cannot write temporary file to disk.' => 'Kan het tijdelijke bestand niet wegschrijven op disk.',
    'A PHP extension caused the upload to fail.' => 'De upload is mislukt vanwege een PHP-extensie.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Deze collectie moet {{ limit }} element of meer bevatten.|Deze collectie moet {{ limit }} elementen of meer bevatten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Deze collectie moet {{ limit }} element of minder bevatten.|Deze collectie moet {{ limit }} elementen of minder bevatten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Deze collectie moet exact {{ limit }} element bevatten.|Deze collectie moet exact {{ limit }} elementen bevatten.',
    'Invalid card number.' => 'Ongeldig creditcardnummer.',
    'Unsupported card type or invalid card number.' => 'Niet-ondersteund type creditcard of ongeldig nummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dit is geen geldig internationaal bankrekeningnummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Deze waarde is geen geldige ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Deze waarde is geen geldige ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Deze waarde is geen geldige ISBN-10 of ISBN-13 waarde.',
    'This value is not a valid ISSN.' => 'Deze waarde is geen geldige ISSN waarde.',
    'This value is not a valid currency.' => 'Deze waarde is geen geldige valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Deze waarde moet gelijk zijn aan {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Deze waarde moet groter zijn dan {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Deze waarde moet groter dan of gelijk aan {{ compared_value }} zijn.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Deze waarde moet identiek zijn aan {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Deze waarde moet minder zijn dan {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Deze waarde moet minder dan of gelijk aan {{ compared_value }} zijn.',
    'This value should not be equal to {{ compared_value }}.' => 'Deze waarde mag niet gelijk zijn aan {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Deze waarde mag niet identiek zijn aan {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'De afbeeldingsverhouding is te groot ({{ ratio }}). Maximale verhouding is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'De afbeeldingsverhouding is te klein ({{ ratio }}). Minimale verhouding is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'De afbeelding is vierkant ({{ width }}x{{ height }}px). Vierkante afbeeldingen zijn niet toegestaan.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'De afbeelding is liggend ({{ width }}x{{ height }}px). Liggende afbeeldingen zijn niet toegestaan.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'De afbeelding is staand ({{ width }}x{{ height }}px). Staande afbeeldingen zijn niet toegestaan.',
    'An empty file is not allowed.' => 'Lege bestanden zijn niet toegestaan.',
    'This value does not match the expected {{ charset }} charset.' => 'Deze waarde is niet in de verwachte tekencodering {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dit is geen geldige bedrijfsidentificatiecode (BIC/SWIFT).',
    'This form should not contain extra fields.' => 'Dit formulier mag geen extra velden bevatten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Het geüploade bestand is te groot. Probeer een kleiner bestand te uploaden.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'De CSRF-token is ongeldig. Probeer het formulier opnieuw te versturen.',
    'fos_user.username.already_used' => 'De gebruikersnaam is al in gebruik',
    'fos_user.username.blank' => 'Voer een gebruikersnaam in',
    'fos_user.username.short' => '[-Inf,Inf]De gebruikersnaam is te kort',
    'fos_user.username.long' => '[-Inf,Inf]De gebruikersnaam is te lang',
    'fos_user.email.already_used' => 'Het e-mailadres is al in gebruik',
    'fos_user.email.blank' => 'Voer een e-mailadres in',
    'fos_user.email.short' => '[-Inf,Inf]Het e-mailadres is te kort',
    'fos_user.email.long' => '[-Inf,Inf]Het e-mailadres is te lang',
    'fos_user.email.invalid' => 'Het e-mailadres is ongeldig',
    'fos_user.password.blank' => 'Voer een wachtwoord in',
    'fos_user.password.short' => '[-Inf,Inf]Het wachtwoord is te kort',
    'fos_user.password.mismatch' => 'Het ingevoerde wachtwoord komt niet overeen',
    'fos_user.new_password.blank' => 'Voer een nieuw wachtwoord in',
    'fos_user.new_password.short' => '[-Inf,Inf]Het nieuwe wachtwoord is te kort',
    'fos_user.current_password.invalid' => 'Het ingevulde wachtwoord is ongeldig',
    'fos_user.group.blank' => 'Voer een naam in',
    'fos_user.group.short' => '[-Inf,Inf]De naam is te kort',
    'fos_user.group.long' => '[-Inf,Inf]De naam is te lang',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Er heeft zich een authenticatieprobleem voorgedaan.',
    'Authentication credentials could not be found.' => 'Authenticatiegegevens konden niet worden gevonden.',
    'Authentication request could not be processed due to a system problem.' => 'Authenticatieaanvraag kon niet worden verwerkt door een technisch probleem.',
    'Invalid credentials.' => 'Ongeldige inloggegevens.',
    'Cookie has already been used by someone else.' => 'Cookie is al door een ander persoon gebruikt.',
    'Not privileged to request the resource.' => 'Onvoldoende rechten om de aanvraag te verwerken.',
    'Invalid CSRF token.' => 'CSRF-code is ongeldig.',
    'Digest nonce has expired.' => 'Serverauthenticatiesleutel (digest nonce) is verlopen.',
    'No authentication provider found to support the authentication token.' => 'Geen authenticatieprovider gevonden die de authenticatietoken ondersteunt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Geen sessie beschikbaar, mogelijk is deze verlopen of cookies zijn uitgeschakeld.',
    'No token could be found.' => 'Er kon geen authenticatietoken worden gevonden.',
    'Username could not be found.' => 'Gebruikersnaam kon niet worden gevonden.',
    'Account has expired.' => 'Account is verlopen.',
    'Credentials have expired.' => 'Authenticatiegegevens zijn verlopen.',
    'Account is disabled.' => 'Account is gedeactiveerd.',
    'Account is locked.' => 'Account is geblokkeerd.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Groep bijwerken',
    'group.show.name' => 'Groep naam',
    'group.new.submit' => 'Groep aanmaken',
    'group.flash.updated' => 'De groep is bijgewerkt',
    'group.flash.created' => 'De groep is aangemaakt',
    'group.flash.deleted' => 'De groep is verwijderd',
    'security.login.username' => 'Gebruikersnaam',
    'security.login.password' => 'Wachtwoord',
    'security.login.remember_me' => 'Onthoud mijn gegevens',
    'security.login.submit' => 'Inloggen',
    'profile.show.username' => 'Gebruikersnaam',
    'profile.show.email' => 'E-mail',
    'profile.edit.submit' => 'Bijwerken',
    'profile.flash.updated' => 'Het profiel is bijgewerkt',
    'change_password.submit' => 'Wachtwoord wijzigen',
    'change_password.flash.success' => 'Het wachtwoord is gewijzigd',
    'registration.check_email' => 'Er is een e-mail verstuurd naar %email%, met een link om uw account te activeren.',
    'registration.confirmed' => 'Gefeliciteerd %username%, uw account is nu geactiveerd.',
    'registration.back' => 'Terug naar de oorspronkelijke pagina.',
    'registration.submit' => 'Registreer',
    'registration.flash.user_created' => 'De gebruiker is succesvol aangemaakt',
    'registration.email.subject' => 'Welkom %username%!',
    'registration.email.message' => 'Hallo %username%!

U moet uw account nog valideren, ga naar %confirmationUrl%

Vriendelijke groeten,
het Team.
',
    'resetting.password_already_requested' => 'Het wachtwoord voor deze gebruiker is al aangevraagd binnen de laatste 24 uur.',
    'resetting.check_email' => 'Er is een e-mail verstuurd naar %email%, met een link om uw wachtwoord te resetten.',
    'resetting.request.invalid_username' => 'De gebruiker "%username%" bestaat niet.',
    'resetting.request.username' => 'Gebruikersnaam of e-mailadres',
    'resetting.request.submit' => 'Reset wachtwoord',
    'resetting.reset.submit' => 'Wijzig wachtwoord',
    'resetting.flash.success' => 'Het wachtwoord is succesvol gereset',
    'resetting.email.subject' => 'Reset wachtwoord',
    'resetting.email.message' => 'Hallo %username%!

Om uw wachtwoord te resetten, klikt u op de volgende link %confirmationUrl%

Met vriendelijke groet,
het Team.
',
    'layout.logout' => 'Uitloggen',
    'layout.login' => 'Inloggen',
    'layout.register' => 'Registreer',
    'layout.logged_in_as' => 'Ingelogd als %username%',
    'form.group_name' => 'Groep naam',
    'form.username' => 'Gebruikersnaam',
    'form.email' => 'E-mail',
    'form.current_password' => 'Huidig wachtwoord',
    'form.password' => 'Wachtwoord',
    'form.password_confirmation' => 'Wachtwoord controle',
    'form.new_password' => 'Nieuw wachtwoord',
    'form.new_password_confirmation' => 'Wachtwoord controle',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait',
    'fos_user.username.short' => '[-Inf,Inf]Le nom d\'utilisateur est trop court',
    'fos_user.username.long' => '[-Inf,Inf]Le nom d\'utilisateur est trop long',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait',
    'fos_user.email.short' => '[-Inf,Inf]L\'adresse e-mail est trop courte',
    'fos_user.email.long' => '[-Inf,Inf]L\'adresse e-mail est trop longue',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait',
    'fos_user.password.short' => '[-Inf,Inf]Le mot de passe est trop court',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait',
    'fos_user.new_password.short' => '[-Inf,Inf]Le nouveau mot de passe est trop court',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait',
    'fos_user.group.short' => '[-Inf,Inf]Le nom est trop court',
    'fos_user.group.long' => '[-Inf,Inf]Le nom est trop long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour',
    'group.flash.created' => 'Le groupe a été créé',
    'group.flash.deleted' => 'Le groupe a été supprimé',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Enregistrer',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'resetting.password_already_requested' => 'Un nouveau mot de passe a déjà été demandé pour cet utilisateur dans les dernières 24 heures.',
    'resetting.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien sur lequel il vous faudra cliquer afin de réinitialiser votre mot de passe.',
    'resetting.request.invalid_username' => 'Le nom d\'utilisateur ou l\'adresse e-mail "%username%" n\'existe pas.',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Vérification',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Vérification',
  ),
  'messages' => 
  array (
    'hello' => 'Bonjour %name% !',
    'coresphere_console.headline.index' => 'Console',
    'coresphere_console.working_directory' => 'Répertoire de travail',
    'coresphere_console.environment' => 'Environnement',
    'coresphere_console.welcome_message' => 'Tapez %command% pour obtenir la liste de toutes les commandes.',
    'coresphere_console.loading' => 'Chargement en cours...',
    'coresphere_console.suggestion_head' => 'Essayez plutôt :',
    'coresphere_console.empty_response' => 'Commande exécutée ! (Mais réponse vide)',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
