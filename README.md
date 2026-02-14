<p align="center"><a href="https://sobrare.com.br" target="_blank"><img src="https://sobrare.com.br/storage/iKHGtMP4DTTQMQniwnotX0J8YH9jpc-metaTE9HT19TQlJfUFJFVE9fMDMucG5n-.png" width="400" alt="SOBRARE Logo"></a></p>


## About SOBRARE's Neurodiv App

<h3>SOBRARE</h3>

<p> The Sociedade Brasileira de Resiliência (SOBRARE) has sponsored the development of a system of psychological tests in the field of neurodiversity.</p>

<p>This application implements psychological tests and reports, according with the studies from George Barbosa, PhD.</p>

## Developer

<p>This app was developed by Dawel Web Solutions: (mailto:info@dawelwebsolutions.com)</p>

## LEGAL AND COPYRIGHT

<p>This application cannot be copied, even small parts, without consent of the SOBRARE, which has the legal rights over this app and the whole code.</p>


# Change Log
All notable changes to this project will be documented in this file.
 
The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).
 
## [00.07.02] - 2026-02-12
### Added
- included timer progress bar in the recuperarSenha
 
## [00.07.01] - 2026-02-12
### Added
- alert timer changed to 5000 in the recuperarSenha.

## [00.07.00] - 2026-02-12
### Added
- pt_BR Laravel translation. E-mail from Laravel, like passowrd reset, are now located to pt_BR.
- added /lang/pt_BR files

### Fixed
- rel_06-ansieddbsc - some text removed from the subtitles as per client request.
- rel_07-depressbsc - some text removed from the subtitles as per client request.
- text (stripe) removed from the checkout. Replaced by "cartão de crédito".
- home page now allows the user to add images to the groups of tests by the admin control panel.
- .env - system information changed from "SOBRARE" to "NEURODIV".
- .env - Email configured to hostinger, as per user request.

## [00.06.04] - 2026-01-28
### Fixed
- rel_03-OrdncAsst - changes in the graph title (ControladorRelatorios). Subtitle added as per client request.

## [00.06.03] - 2026-01-27
### Fixed
- rel_08-CmptRpttv - minor changed in the legend of the table. Moved out of the table.

## [00.06.02] - 2026-01-27
### Changed
* User requested changes in reports:
- rel_03-OrdncAsst - changes in the graph title (ControladorRelatorios)
- rel_05-AnsddDthd - no change in code required. TextoResposta spreadsheet updated by user.
- rel_07-Depressbsc - changes in subtitles.
- rel_08-CmptRpttv - minor changed in the legend of the table. Moved to a separated row.
- rel_09-InvetrTDA_TDAH - no change in code required. TextoResposta spreadsheet updated by user.

## [00.06.01] - 2025-11-24
### Fixed
- relat-02-prcpstrss mistyped in the logo name caused missing neurodiv logo in the pdf report.

## [00.06.00] - 2025-11-24
### Changed
- Hero texts updated according to the client's request.
- Added whatsapp support number to the buttom in the Home Page.
- Moved the SOBRARE main site access link as a new menu item in the navbar.
- Changed text "Entrar" by "Começar" in the navbar, according to the client's request.
- Changed the logo in the navbar to a new one sent by the client.
- Changed the favicon to the new favicon sent by the client.
- Changed neurodiv_logo in all pdf reports.

### Fixed
- Fix user's name the "ver-testes" by the auth()->user()->name. 
- Fix font contrast in the user's name in the "Meus Pedidos" for the dark mode.



## [00.05.11] - 2025-10-09
- Fix text aligment in the footer.
- Enable "Entrar" buttom in navbar, so the clients can have access to the system.

## [00.05.10] - 2025-10-09
- This is a devepment beta version, ready for client to test.
- The first version to be released will have the version updated to [1.0.0].

### Changed
- Controle de Relatorios on admin panel: 
=> added exclusion of a specific report or a bulk selection of reports.
=> added sorting columns by report name, user name, report status or creation date.

## [00.05.09] - 2025-10-08
- This is a devepment beta version, ready for client to test.
- The first version to be released will have the version updated to [1.0.0].

### Changed
- Fixed missing textoFecha e textoRodape on report #08.

## [00.05.08] - 2025-10-08
- This is a devepment beta version, ready for client to test.
- The first version to be released will have the version updated to [1.0.0].

### Changed
- Shortened placeholder message on "Comentários" to fit the space on mobile.
- ResponderTeste: fixed error on intensidade (intval) on finalizarTeste method.

## [00.05.07] - 2025-10-07 
- This is a devepment beta version, ready for client to test.
- The first version to be released will have the version updated to [1.0.0].

### Changed
- Fixed Testes page on admin.

## [00.05.06] - 2025-10-05 
- This is a devepment beta version, ready for client to test.
- The first version to be released will have the version updated to [1.0.0].

### Changed
- New mobile version design for "Meus Pedidos" and "Ver Testes" pages.

## [00.05.05] - 2025-10-03 
- This is a devepment beta version, ready for client to test.
- The first version to be released will have the version updated to [1.0.0].

### Changed
- Products page fix: standard logo not showing if image is not set for the testgroup.

## [00.05.04] - 2025-10-03 
- This is a devepment beta version, ready for client to test.
- The first version to be released will have the version updated to [1.0.0].

### Changed
- Allow admins to change order item to "Pendente", so the user can generate the report again.

## [00.05.03] - 2025-10-03 
- This is a devepment beta version, ready for client to test.
- The first version to be released will have the version updated to [1.0.0].

### Changed
- Minor change in pedido-sucesso page to adjust endpoint for the home page.
- composer.jason was changed to adjust the livewire version in last commit called v. 00.05.02.

## [00.05.01] - 2025-10-02 
- This is a devepment version. The first version to be released will have the version updated to [1.0.0].

### Changed
- User profile received LGPD complience message to erase sensative and personal data, if asked.
- Added a alert message in the buttom "Relatorio Inexistente" so the user can check if the test was answered or skipped by admin

### Added
- Admin Panel statistics

## [00.04.01] - 2025-09-22 
- This is a devepment version. The first version to be released will have the version updated to [1.0.0].

### Changed
- Changed the alert message for the users when waiting pdf generation, to make it more clear.

## [00.04.00] - 2025-09-21 
- This is a devepment version. The first version to be released will have the version updated to [1.0.0].

### Added
- User profile is now implemented via navbar "Minha Conta". Users can update their information.
- Admin can see all reports from all users and can download any of the reports generated by the user.

### Changed
- All reports went a completely design makeover. All have the same design starndard.
- Changed pdf generation to DOMPDF and pdf generation is online. Users receive an alert to wait.
- PDF's reports are stored in the file system. Users can download the reports via "Meus Pedidos" in the navbar.
- Footer was updated with contact information.
- Layout for "Responder Testes" was improved to provide a better user experience.
- Minor fixes in the code.


## [00.03.00] - 2025-09-17 
- This is a devepment version. The first version to be released will have the version updated to [1.0.0].
- This version changed the pdf background generation to a library compatible with Hostinger (no installation needed).

### Changed
All reports is now going into a completely design makeover.
- Report #01: revised and tested. New design was implemented. 
- Report #02: revised and tested. New design was implemented.


### Fixed
- Loading on old Controllers and Resources

## [00.02.02] - 2025-09-15 
- This is a devepment version. The first version to be released will have the version updated to [1.0.0].

### Fixed
- Loading on old Controllers and Resources

## [00.02.01] - 2025-09-15 
- This is a devepment version. The first version to be released will have the version updated to [1.0.0].

## [Unreleased] - 2025-09-15
- By this date the project is under a restructuring demanded by the owner, to separate this app to run in a separate domain from the main site.
- Also, developers are revising, adjusting and cleaning the code.
- This is the latest sync with github in order to upload the app to a new temporary subdomain to test the app in a real shared hosting.

 
### Added
- PDF reports are now generated in background, using Laravel queue job.
- Once the user finished to answer all questions of a test, the report generation request is sent to queue. The user now has the buttom to download the report.
- A Report Control resource was added to the admin panel, so admin can filter, see report status and download any report generated.
 
### Changed
- The database was renamed and reestructured to fit the new app version to run on a separate domain.
- Several migrations was copied to a temporary backup folder under database->migrations.
- All unnecessary FilamentPHP resources of the old version were renamed to a bkp name and wil be deleted in the future.
- Routes were updated. Some were deactivated and new ones were created to provide PDF report generation.
- Report #01: revised and tested. 
- Report #02: revised and tested. 
- Report #03: revised and tested. 

### Fixed
- Several minor fix were performed into the code.


  
