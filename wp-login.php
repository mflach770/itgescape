<!DOCTYPE html>
<html lang="de-DE">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Anmelden &lsaquo; itgescape &#8212; WordPress</title>
	<meta name="robots" content="noindex, nofollow, noarchive">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="stylesheet" id="dashicons-css" href="https://mflach770.github.io/itgescape/wp-includes/css/dashicons.min.css?ver=6.0" media="all">
<link rel="stylesheet" id="buttons-css" href="https://mflach770.github.io/itgescape/wp-includes/css/buttons.min.css?ver=6.0" media="all">
<link rel="stylesheet" id="forms-css" href="https://mflach770.github.io/itgescape/wp-admin/css/forms.min.css?ver=6.0" media="all">
<link rel="stylesheet" id="l10n-css" href="https://mflach770.github.io/itgescape/wp-admin/css/l10n.min.css?ver=6.0" media="all">
<link rel="stylesheet" id="login-css" href="https://mflach770.github.io/itgescape/wp-admin/css/login.min.css?ver=6.0" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-de-de">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://de.wordpress.org/">Powered by WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="https://mflach770.github.io/itgescape/wp-login.php" method="post">
			<p>
				<label for="user_login">Benutzername oder E-Mail-Adresse</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Passwort</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Passwort anzeigen">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Angemeldet bleiben</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Anmelden">
									<input type="hidden" name="redirect_to" value="https://mflach770.github.io/itgescape/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
								<a href="https://mflach770.github.io/itgescape/wp-login.php?action=lostpassword">Passwort vergessen?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog">
			<a href="https://mflach770.github.io/itgescape/">&larr; Zurück zu itgescape</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">Sprache</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="de_DE" lang="de" selected data-installed="1">Deutsch</option></select>
					
					
					
						<input type="submit" class="button" value="Wechseln">

					</form>
				</div>
				<script src="https://mflach770.github.io/itgescape/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script src="https://mflach770.github.io/itgescape/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script id="zxcvbn-async-js-extra">
var _zxcvbnSettings = {"src":"https:\/\/mflach770.github.io\/itgescape\/wp-includes\/js\/zxcvbn.min.js"};
</script>
<script src="https://mflach770.github.io/itgescape/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script src="https://mflach770.github.io/itgescape/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script src="https://mflach770.github.io/itgescape/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="https://mflach770.github.io/itgescape/wp-includes/js/dist/hooks.min.js?ver=c6d64f2cb8f5c6bb49caca37f8828ce3" id="wp-hooks-js"></script>
<script src="https://mflach770.github.io/itgescape/wp-includes/js/dist/i18n.min.js?ver=ebee46757c6a411e38fd079a7ac71d94" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script id="password-strength-meter-js-extra">
var pwsL10n = {"unknown":"Passwort-Stärke unbekannt","short":"Ganz schwach","bad":"Schwach","good":"Mittel","strong":"Stark","mismatch":"Keine Übereinstimmung"};
</script>
<script id="password-strength-meter-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-05-10 07:30:26+0000","generator":"GlotPress\/4.0.0-alpha.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"de"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s ist seit Version %2$s veraltet! Benutze stattdessen %3$s. Bitte erwäge, inklusiveren Code zu schreiben."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
</script>
<script src="https://mflach770.github.io/itgescape/wp-admin/js/password-strength-meter.min.js?ver=6.0" id="password-strength-meter-js"></script>
<script src="https://mflach770.github.io/itgescape/wp-includes/js/underscore.min.js?ver=1.13.3" id="underscore-js"></script>
<script id="wp-util-js-extra">
var _wpUtilSettings = {"ajax":{"url":"\/itgescaperoom\/wp-admin\/admin-ajax.php"}};
</script>
<script src="https://mflach770.github.io/itgescape/wp-includes/js/wp-util.min.js?ver=6.0" id="wp-util-js"></script>
<script id="user-profile-js-extra">
var userProfileL10n = {"user_id":"0","nonce":"b0a4f1f371"};
</script>
<script id="user-profile-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-05-10 07:30:26+0000","generator":"GlotPress\/4.0.0-alpha.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"de"},"Your new password has not been saved.":["Dein neues Passwort wurde nicht gespeichert."],"Hide":["Verstecken"],"Show":["Anzeigen"],"Confirm use of weak password":["Bestätige die Verwendung eines schwachen Passworts"],"Hide password":["Passwort verbergen"],"Show password":["Passwort anzeigen"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
</script>
<script src="https://mflach770.github.io/itgescape/wp-admin/js/user-profile.min.js?ver=6.0" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>