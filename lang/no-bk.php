<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 *
	 * Norwegian bokmål translation courtesy of myself.
	 */
	$lang = array(

		// Navigation bar
		"home" => "Hjem",
		"store" => "Butikk",
		"buy_credits" => "Kjøp credits",
		"raffles" => "Loddtrekning",
		"profile" => "Profil",
		"support" => "Support",
		"admin" => "Admin",
		"sign_out" => "Logg ut",
		"sign_in" => "Logg inn",

		// Header errors and messages
		"not_setup" => "Du har ikke satt opp sysemet ordentlig! <a href='admin.php?a=gen&settings'>Klikk her</a> [Admin -> General Settings -> Settings]",
		"header_sandbox" => "PayPal sandkasse modus er aktivert. Bare bruk sandkasse for testing! Du kan deaktivere det <a href='admin.php?a=gen&settings'>her</a>",
		"missing_action" => "En eller flere pakker mangler en aksjon!",
		"unfinished_action" => "Du har en aksjon på 'Profil' siden som ikke er fullført, <a href='profile.php'>her</a>",

		// Frontpage
		"welcome" => "Velkommen - Logg inn",
		"welcome_text" => "Logg inn via Steam for å bruke vår enkele donasjons portal.",

		// News
		"news" => "Nyheter",
		"by" => "Av",
		"no_news" => "Ingen nyheter",
		"no_news_text" => "Det er for øyeblikket ingen nyheter.",
		"no_news_articles" => "Ingen nyhets artikkeler.",

		// Footer
		"tos" => "Terms of Service",
		"powered_by" => "Drives av Steam",

		// Store
		"credits" => "Credits",
		"featured_pkg" => "Utvalgt pakke",
		"permanent" => "Permanent",
		"non_permanent" => "Ikke Permanent",

		"select_credit" => "Velg Credit Pakke",
		"select_raffle" => "Velg lodd Pakke",
		"global_packages" => "Globale Pakker",

		// Raffles
		"raffle_ticket" => "Kjøp lodd",
		"raffle_ended" => "Loddtrekningen har sluttet, vinneren er: ",
		"raffle_not_compatible" => "Denne pakken er ikke kompatibel med en du eier. Tilgang til loddtrekningen nektet.",
		"raffle_already_own" => "Du eier allerede denne pakken. Tilgang til loddtrekningen nektet.",
		"raffle_reached_max" => "Du har nådd maks antall lodd. Tilgang til loddtrekningen nektet.",

		// Support
		"create_ticket" => "Lag ticket",
		"ticket_closed" => "Denne ticketen er låst.",
		"reply" => "Svar",
		"create" => "Lag",

		// Terms of Service
		"tos_edited" => "ToS har blitt redigert. <a href='tos.php'>Terms of Service</a> aksepter den før du kjøper en pakke!",
		"tos_must_accept" => "Du må akseptere ToS før du kjøper en pakke!!",
		"tos_accept" => "Aksepter",

		// Purchase buttons
		"purchase_paypal" => "Kjøp med Paypal",
		"purchase_credits" => "Kjøp med Credits",
		"purchase" => "Kjøp",
		"buy_sign_in" => "Du må logge inn før du kjøper!",
		"buy_already_own" => "Du eier allerede denne pakken!",
		"buy_not_compatible" => "Denne pakken er ikke kompatibel med en du eier!",
		"buy_they_already_own" => "Denne personen eier allerede denne pakken!",
		"buy_they_not_compatible" => "Denne pakken er ikke kompatibel med en pakke de eier!",

		// Packages
		"buying_someone_else" => "Kjøper du for noen andre?",
		"buying_yourself" => "Du kjøper for øyeblikket for deg selv",
		"buying_for" => "Du kjøper for øyeblikket for",
		"packages_custom_amount" => "Egendefinert antall",

		"packages_not_available" => "Ingen pakker tilgjengelig for denne serveren.",
		"raffle_not_available" => "Ingen lotteri pakker tilgjengelig for øyeblikket.",
		"credit_not_available" => "Ingen credit pakker tilgjengelig for øyeblikket.",

		// Buttons
		"submit" => "Send inn",

		// Profile
		"non_perm_pkg" => "Ikke-Permanent Pakke",
		"perm_pkg" => "Permanent(e) pakke(r)",
		"acc_info" => "Bruker Informasjon",
		"pkg_history" => "Pakke Historikk",
		"acc_credits" => "Credits",
		"transfer_credits" => "Overfør Credits",
		"package" => "Pakke",

		// Tables
		"id" => "ID",
		"user" => "Bruker",
		"description" => "Beskrivelse",
		"timestamp" => "Tidsstempel",
		"action" => "Aksjon",
		"replies" => "Svar",
		"view" => "Vis",

		// Select boxes
		"select_server" => "Velg server:",
		"select_currency" => "Velg valuta:",
		"select_category" => "Velg kategori:",
		"none" => "Ingen",

		// Modals
		"yes" => "Ja",
		"no" => "Nei",
		"sure" => "Er du sikker?",
		"sure_cur" => "Er du sikker på at du vil slette denne valutaen?",
		"sure_srv" => "Er du sikker på at du vil slette denne serveren?",
		"sure_cat" => "Er du sikker på at du vil slette denne kategorien?",

		// Dangerous settings
		"dangerous" => "Farlige innstillinger",
		"danger_cur" => "Eller, så kan du slette denne valutaen.",
		"danger_srv" => "Ikke slett denne serveren ved mindre ingen pakker er tilordnet den!",
		"danger_cat" => "Ikke slett denne kategorien ved mindre ingen pakker er tilordnet den!",
		"delete" => "Slett",

		// Admin nav
		"dashboard" => "Dashbord",
		"general_settings" => "Generelle innstillinger",
		"support_tickets" => "Support tickets",
		"servers" => "Servere",
		"currencies" => "Valuter",
		"categories" => "Kategorier",
		"packages_and_actions" => "Pakker & aksjoner",
		"credit_packages" => "Credit pakker",
		"raffles" => "Loddtrekninger",
		"theme_editor" => "Theme editor",
		"documentation" => "Dokumentasjon",

		// General Settings
		"settings" => "Innstillinger",
		"main_page" => "Hovedside",
		"integration_settings" => "Integrerings Instillinger",
		"ingame_notifications" => "Spill Notifikasjoner",

		// Servers page
		"add_srv" => "Legg til server",
		"edit_srv" => "Rediger server",
		"server_name" => "Server Navn",
		"featured_pkg_short" => "Utvalgt pkg",

		// Currency page
		"add_cur" => "Legg til valuta",
		"edit_cur" => "Rediger valuta",
		"cc" => "Valuta Kode",

		// Category page
		"add_cat" => "Legg til kategori",
		"edit_cat" => "Rediger kategori",
		"cat_name" => "Kategori Navn",

		// Dashboard nav
		"main_dashboard" => "Hoved dashbord",
		"sale" => "Salg",
		"transactions" => "Transaksjoner",
		"users" => "Brukere",
		"logs" => "Logger",
		"update_sql" => "Oppdater SQL",
		"other_features" => "Andre Funksjoner",

		// Admin dashboard
		"total" => "Total",
		"full_total" => "Full total",
		"dashboard_text" => "Velkommen til admin dashbordet, dette er hvor du kan se fancy statistikker over din eller dine servere sin donasjons aktivitet.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Velkommen",
		"need_credits" => "Trenger mer credits? <a href='store.php?credits'>Klikk her!</a>",
		"no_history" => "Ingen historikk",
		"amount" => "Antall",
		"you_have_none" => "Du har ingen!",

		"add_cre" => "Legg til credit pakke",
		"edit_cre" => "Rediger credit pakke",
		"pack_title" => "Pakke tittel",
		"price" => "Pris",
		"currency" => "Valuta",
		"sure_cre" => "Er du sikker på at du vil slette denne credit pakka?",
		"danger_cre" => "Eller, så kan du slette denne credit pakka.",
		"select_package" => "Velg pakke:",
		"choose_cre" => "Velg credit pakke",
		"brief_desc" => "Liten beskrivelse",
		"amt_of_cre" => "Antall credits",
		"price_of_pkg" => "Pris av pakke",
		"no_support" => "Du har ingen support tickets!",
		"no_other_available" => "Ingen andre pakker er tilgjengelig",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Få denne pakken gratis!",
		"dashboard_revenuegraph" => "Fortjenelse tabell",
		"dashboard_revenuecurrency" => "Vist i hovedvalutaen din",
		"dashboard_packagesgraph" => "Pakke salg",
		"dashboard_serversgraph" => "Server salg",
		"between" => "Mellom",
		"and" => "Og",

		/** 
		 * New in 1.4.9
		 */
		"free" => "Gratis",
		"buy_own_free" => "Du eier allerede denne pakken. Du kan ikke få den to ganger!",
	);

?>
