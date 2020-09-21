<?php
/***********************************************************************/
/** \file   server_admin_strings.inc.php
\brief  The strings displayed in the server administration console (Danish)

This file is part of the Basic Meeting List Toolbox (BMLT).

Find out more at: https://bmlt.app

BMLT is free software: you can redistribute it and/or modify
it under the terms of the MIT License.

BMLT is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
MIT License for more details.

You should have received a copy of the MIT License along with this code.
If not, see <https://opensource.org/licenses/MIT>.*/
defined('BMLT_EXEC') or die('Cannot Execute Directly');    // Makes sure that this file is in the correct context.

$comdef_server_admin_strings = array (
    'server_admin_disclosure'                               =>  'Server Administration',
    'server_admin_naws_spreadsheet_label'                   =>  'Updated World IDs Spreadsheet:',
    'update_world_ids_button_text'                          =>  'Update Meeting World IDs',
    'update_world_ids_from_spreadsheet_dropdown_text'       =>  'Update Meeting World IDs from NAWS Spreadsheet',
    'server_admin_error_no_world_ids_updated'               =>  'No World IDs were updated. This could be because your user does not have permission to update the submitted meetings.',
    'server_admin_error_required_spreadsheet_column'        =>  'Required column does not exist in the spreadsheet: ',
    'server_admin_error_bmlt_id_not_integer'                =>  'The provided bmlt_id is not an integer: ',
    'server_admin_error_could_not_create_reader'            =>  'Could not create reader for file: ',
    'server_admin_error_no_files_uploaded'                  =>  'No files were uploaded.',
    'server_admin_error_service_bodies_already_exist'       =>  'Service bodies with the following World IDs already exist: ',
    'server_admin_error_meetings_already_exist'             =>  'Meetings with the following World IDs already exist: ',
    'server_admin_ui_num_meetings_updated'                  =>  'Number of meetings updated: ',
    'server_admin_ui_num_meetings_not_updated'              =>  'Number of meetings that did not need updating: ',
    'server_admin_ui_warning'                               =>  'WARNING',
    'server_admin_ui_errors'                                =>  'Error(s)',
    'server_admin_ui_meetings_not_found'                    =>  'meetings were found in the spreadsheet that did not exist in the database. This can happen when a meeting is deleted or unpublished. The missing meeting IDs are: ',
    'server_admin_ui_service_bodies_created'                => 'Service bodies created: ',
    'server_admin_ui_meetings_created'                      => 'Meetings created: ',
    'server_admin_ui_users_created'                         => 'Users created: ',
    'server_admin_ui_refresh_ui_text'                       => 'Sign out and then sign in again to see the new service bodies, users, and meetings.',
    'import_service_bodies_and_meetings_button_text'        => 'Import Service Bodies and Meetings',
    'import_service_bodies_and_meetings_dropdown_text'      => 'Import Service Bodies and Meetings from NAWS Export',
    'server_admin_naws_import_spreadsheet_label'            => 'NAWS Import Spreadsheet:',
    'account_disclosure'                                    =>  'Min konto',
    'account_name_label'                                    =>  'Min Kontonavn:',
    'account_login_label'                                   =>  'Mit Login:',
    'account_type_label'                                    =>  'Jeg er en:',
    'account_type_1'                                        =>  'Server Administrator',
    'account_type_2'                                        =>  'Service Body Administrator',
    'ServerMapsURL'                                         =>  'https://maps.googleapis.com/maps/api/geocode/xml?address=##SEARCH_STRING##&sensor=false',
    'account_type_4'                                        =>  'hacker? tilsyneladende ikke',
    'account_type_5'                                        =>  'Service enhed overvåger',
    'change_password_label'                                 =>  'Ændre kodeord Til:',
    'change_password_default_text'                          =>  'Efterlad tomt, hvis du ikke vil ændre dit kodeord',
    'account_email_label'                                   =>  'Min Mail Adresse:',
    'email_address_default_text'                            =>  'Indsæt en Mail Aderesse',
    'account_description_label'                             =>  'My Description:',
    'account_description_default_text'                      =>  'Lav en beskrivelse',
    'account_change_button_text'                            =>  'Skift mine kontoindstillinger',
    'account_change_fader_success_text'                     =>  'Kontooplysningerne blev ændret succesfuldt',
    'account_change_fader_failure_text'                     =>  'Kontooplysningerne blev ikke ændret',
    'meeting_editor_disclosure'                             =>  'Møde Editor',
    'meeting_editor_already_editing_confirm'                =>  'Du redigerer for øjeblikket et andet møde. Ønsker du at miste alle ændringer i det møde?',
    'meeting_change_fader_success_text'                     =>  'Mødet blev succesfuldt ændret',
    'meeting_change_fader_failure_text'                     =>  'Mødet blev ikke ændret',
    'meeting_change_fader_success_delete_text'              =>  'Mødet blev slettet med succes',
    'meeting_change_fader_fail_delete_text'                 =>  'Mødet blev ikke slettet',
    'meeting_change_fader_success_add_text'                 =>  'Det nye møde blev tilføjet succesfuldt',
    'meeting_change_fader_fail_add_text'                    =>  'Det nye møde blev ikke tilføjet',
    'meeting_text_input_label'                              =>  'Søg efter tekst:',
    'access_service_body_label'                             =>  'Jeg har adgang til:',
    'meeting_text_input_default_text'                       =>  'Indtast nogle søgeord',
    'meeting_text_location_label'                           =>  'Dette er en placering eller postkode',
    'meeting_search_weekdays_label'                         =>  'Søg efter udvalgte hverdage:',
    'meeting_search_weekdays_names'                         =>   array('Alle', 'Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag'),
    'meeting_search_service_bodies_label'                   =>  'Søg i valgte service Enhed:',
    'meeting_search_start_time_label'                       =>  'Søg efter møde Starttid:',
    'meeting_search_start_time_all_label'                   =>  'Enhver tid',
    'meeting_search_start_time_morn_label'                  =>  'Morgen',
    'meeting_search_start_time_aft_label'                   =>  'Eftermiddag',
    'meeting_search_start_time_eve_label'                   =>  'Aften',
    'meeting_search_no_results_text'                        =>  'Ingen møder fundet',
    'meeting_editor_tab_specifier_text'                     =>  'Søg efter møder',
    'meeting_editor_tab_editor_text'                        =>  'Rediger møder',
    'meeting_editor_create_new_text'                        =>  'Opret et nyt møde',
    'meeting_editor_location_map_link'                      =>  'Placerings kort',
    'meeting_editor_screen_match_map_button'                =>  'Indstil kort til adresse',
    'meeting_editor_screen_match_ll_button'                 =>  'Indstil længdegrad og breddegrad til adresse',
    'meeting_editor_screen_default_text_prompt'             =>  'Indtast noget tekst eller et nummer',
    'meeting_is_published'                                  =>  'Møde er offentliggjort',
    'meeting_unpublished_note'                              =>  'Note: Unpublishing a meeting indicates a temporary closure. If this meeting has closed permanently, please delete it.',
    'meeting_editor_screen_meeting_name_label'              =>  'Møde navn:',
    'meeting_editor_screen_meeting_name_prompt'             =>  'Indtast et mødenavn',
    'meeting_editor_screen_meeting_weekday_label'           =>  'Ugedag:',
    'meeting_editor_screen_meeting_start_label'             =>  'Møde Starttid:',
    'meeting_editor_screen_meeting_time_zone_label'         =>  'Meeting Time Zone:',
    'meeting_editor_screen_meeting_am_label'                =>  'AM',
    'meeting_editor_screen_meeting_pm_label'                =>  'PM',
    'meeting_editor_screen_meeting_noon_label'              =>  'Middag',
    'meeting_editor_screen_meeting_midnight_label'          =>  'Midnat',
    'meeting_editor_screen_meeting_duration_label'          =>  'Varighed:',
    'meeting_editor_screen_meeting_oe_label'                =>  'Åben-Sluttede',
    'meeting_editor_screen_meeting_cc_label'                =>  'Verdens Komite Kode:',
    'meeting_editor_screen_meeting_cc_prompt'               =>  'indsæt Verdens Komite Kode:',
    'meeting_editor_screen_meeting_contact_label'           =>  'Møde Email Kontakt:',
    'meeting_editor_screen_meeting_contact_prompt'          =>  'Indtast en e-mail for kun en kontakt til dette møde',
    'meeting_editor_screen_meeting_sb_label'                =>  'Service enhed:',
    'meeting_editor_screen_meeting_sb_default_value'        =>  'Ingen Service Body Selected',
    'meeting_editor_screen_meeting_longitude_label'         =>  'Længdegrad:',
    'meeting_editor_screen_meeting_longitude_prompt'        =>  'Indtast en længdegrad',
    'meeting_editor_screen_meeting_latitude_label'          =>  'Højdegrad:',
    'meeting_editor_screen_meeting_latitude_prompt'         =>  'Indtast en Højdegrad',
    'meeting_editor_screen_meeting_location_label'          =>  'Længdegrad:',
    'meeting_editor_screen_meeting_location_prompt'         =>  'Indtast et stednavn (som et bygningsnavn)',
    'meeting_editor_screen_meeting_info_label'              =>  'Ekstra Info:',
    'meeting_editor_screen_meeting_info_prompt'             =>  'Indtast eventuelle yderligere placeringsoplysninger',
    'meeting_editor_screen_meeting_street_label'            =>  'Gade Adresse:',
    'meeting_editor_screen_meeting_street_prompt'           =>  'Indtast et gadenavn',
    'meeting_editor_screen_meeting_neighborhood_label'      =>  'Naboskab:',
    'meeting_editor_screen_meeting_neighborhood_prompt'     =>  'Indtast et naboskab(ikke bydel eller byunderafdeling)',
    'meeting_editor_screen_meeting_borough_label'           =>  'Bydel / By område:',
    'meeting_editor_screen_meeting_borough_prompt'          =>  'Indtast en by eller område(ikke naboskab)',
    'meeting_editor_screen_meeting_city_label'              =>  'By:',
    'meeting_editor_screen_meeting_city_prompt'             =>  'Indtast et by eller bynavn(ikke amt eller by)',
    'meeting_editor_screen_meeting_county_label'            =>  'Amt /provinsen afdeling:',
    'meeting_editor_screen_meeting_county_prompt'           =>  'Indtast et navn på amt eller provinsens afdeling navn',
    'meeting_editor_screen_meeting_state_label'             =>  'Amt / Provins:',
    'meeting_editor_screen_meeting_state_prompt'            =>  'Indtast et amt eller provinsnavn',
    'meeting_editor_screen_meeting_zip_label'               =>  'Postnr:',
    'meeting_editor_screen_meeting_zip_prompt'              =>  'Indtast et postnummer',
    'meeting_editor_screen_meeting_nation_label'            =>  'Nation:',
    'meeting_editor_screen_meeting_nation_prompt'           =>  'Indtast nationens navn',
    'meeting_editor_screen_meeting_comments_label'          =>  'Comments:',
    'meeting_editor_screen_meeting_train_lines_label'       =>  'Train Lines:',
    'meeting_editor_screen_meeting_bus_lines_label'         =>  'Bus Lines:',
    'meeting_editor_screen_meeting_phone_meeting_number_label'      =>  'Phone Meeting Dial-in Number:',
    'meeting_editor_screen_meeting_phone_meeting_number_prompt'     =>  'Enter the dial-in number for a phone or virtual meeting',
    'meeting_editor_screen_meeting_virtual_meeting_link_label'      =>  'Virtual Meeting Link:',
    'meeting_editor_screen_meeting_virtual_meeting_link_prompt'     =>  'Enter the link for a virtual meeting',
    'meeting_editor_screen_meeting_virtual_meeting_additional_info_label'      =>  'Virtual Meeting Additional Information:',
    'meeting_editor_screen_meeting_virtual_meeting_additional_info_prompt'     =>  'Enter any additional information for joining the virtual meeting',
    'meeting_editor_screen_meeting_contact_name_1_label'    =>  'Contact 1 Name:',
    'meeting_editor_screen_meeting_contact_email_1_label'   =>  'Contact 1 Email:',
    'meeting_editor_screen_meeting_contact_phone_1_label'   =>  'Contact 1 Phone:',
    'meeting_editor_screen_meeting_contact_name_2_label'    =>  'Contact 2 Name:',
    'meeting_editor_screen_meeting_contact_email_2_label'   =>  'Contact 2 Email:',
    'meeting_editor_screen_meeting_contact_phone_2_label'   =>  'Contact 2 Phone:',
    'meeting_editor_screen_meeting_publish_search_prompt'   =>  'Se efter:',
    'meeting_editor_screen_meeting_publish_search_pub'      =>  'Kun offentliggjorte møder',
    'meeting_editor_screen_meeting_publish_search_unpub'    =>  'Kun ikke offentliggjorte møder',
    'meeting_editor_screen_meeting_visibility_advice'       =>  'Dette vises aldrig i normale mødesøgninger.',
    'meeting_editor_screen_meeting_publish_search_all'      =>  'Alle møder',
    'meeting_editor_screen_meeting_create_button'           =>  'Opret et nyt møde',
    'meeting_editor_screen_delete_button'                   =>  'Slet dette møde',
    'meeting_editor_screen_delete_button_confirm'           =>  'Er du sikker på, at du vil slette dette møde?',
    'meeting_editor_screen_cancel_button'                   =>  'Annulerer',
    'logout'                                                =>  'Log ud',
    'meeting_editor_screen_cancel_confirm'                  =>  'Er du sikker på at du vil annullere redigering af dette møde og miste alle ændringer?',
    'meeting_lookup_failed'                                 =>  'Adressesøgningen mislykkedes.',
    'meeting_lookup_failed_not_enough_address_info'         =>  'Der er ikke nok gyldige adresseoplysninger til at foretage en søgning.',
    'meeting_create_button_name'                            =>  'Gem dette som nyt møde',
    'meeting_saved_as_a_copy'                               =>  'Gem dette møde som en kopi(opretter et nyt møde)',
    'meeting_save_buttonName'                               =>  'Gem ændringerne til dette møde ',
    'meeting_editor_tab_bar_basic_tab_text'                 =>  'Grundlæggende',
    'meeting_editor_tab_bar_location_tab_text'              =>  'Beliggenhed',
    'meeting_editor_tab_bar_format_tab_text'                =>  'Format',
    'meeting_editor_tab_bar_other_tab_text'                 =>  'Andet',
    'meeting_editor_tab_bar_history_tab_text'               =>  'Historie',
    'meeting_editor_result_count_format'                    =>  '%d Møder fundet',
    'meeting_id_label'                                      =>  'Møde ID:',
    'meeting_editor_default_zoom'                           =>  '13',
    'meeting_editor_default_weekday'                        =>  '2',
    'meeting_editor_default_start_time'                     =>  '20:30:00',
    'meeting_editor_default_duration'                       =>  '01:30:00',
    'login_banner'                                          =>  'Basic Meeting List Toolbox',
    'login_underbanner'                                     =>  'Root Server Administration Console',
    'login'                                                 =>  'Login ID',
    'password'                                              =>  'Kodeord',
    'button'                                                =>  'Log Ind',
    'cookie'                                                =>  'Du skal aktivere cookies for at administrere denne server.',
    'noscript'                                              =>  'Du kan ikke administrere denne side uden JavaScript.',
    'title'                                                 =>  'Log venligst ind for at administrere serveren.',
    'edit_Meeting_object_not_found'                         =>  'FEJL: Mødet blev ikke fundet.',
    'edit_Meeting_object_not_changed'                       =>  'FEJL: Mødet blev ikke ændret.',
    'edit_Meeting_auth_failure'                             =>  'Du har ikke tilladelse til at redigere dette møde.',
    'not_auth_1'                                            =>  'IKKE AUTORISERET',
    'not_auth_2'                                            =>  'Du har ikke tilladelse til at administrere denne server.',
    'not_auth_3'                                            =>  'Der opstod et problem med brugernavnet eller adgangskoden, du indtastede.',
    'email_format_bad'                                      =>  'Den email-adresse, du indtastede, blev ikke formateret korrekt.',
    'history_header_format'                                 =>  '<div class="bmlt_admin_meeting_history_list_item_line_div history_item_header_div"><span class="bmlt_admin_history_list_header_date_span">%s</span><span class="bmlt_admin_history_list_header_user_span">by %s</span></div>',
    'history_no_history_available_text'                     =>  '<h1 class="bmlt_admin_no_history_available_h1">Ingen historie tilgængelig til dette møde</h1>',
    'service_body_editor_disclosure'                        =>  'Service enhed Administration',
    'service_body_change_fader_success_text'                =>  'Service enheden blev succesfuldt ændret',
    'service_body_change_fader_fail_text'                   =>  'Services enhedens ændring mislykkedes',
    'service_body_editor_screen_sb_id_label'                =>  'ID:',
    'service_body_editor_screen_sb_name_label'              =>  'Navn:',
    'service_body_name_default_prompt_text'                 =>  'Indtast navnet på denne service enhed',
    'service_body_parent_popup_label'                       =>  'Service Enhedens forældre:',
    'service_body_parent_popup_no_parent_option'            =>  'Ingen forælder (øverste niveau)',
    'service_body_editor_screen_sb_admin_user_label'        =>  'Primær Administrator:',
    'service_body_editor_screen_sb_admin_description_label' =>  'Beskrivelse:',
    'service_body_description_default_prompt_text'          =>  'Indtast en beskrivelse af denne service enhed',
    'service_body_editor_screen_sb_admin_email_label'       =>  'Kontakt Email:',
    'service_body_email_default_prompt_text'                =>  'Indtast en kontakt-e-mail-adresse for denne service enhed',
    'service_body_editor_screen_sb_admin_uri_label'         =>  'Web Side URL:',
    'service_body_uri_default_prompt_text'                  =>  'Indsæt en Web Side URL for denne Service Enhed',
    'service_body_editor_screen_sb_admin_full_editor_label' =>  'Fuld møde liste redaktører:',
    'service_body_editor_screen_sb_admin_full_editor_desc'  =>  'Disse brugere kan redigere eventuelle møder i denne service enhed.',
    'service_body_editor_screen_sb_admin_editor_label'      =>  'Grundlæggende møde liste redaktører:',
    'service_body_editor_screen_sb_admin_editor_desc'       =>  'Disse brugere kan redigere eventuelle møder i denne service enhed, men kun hvis de er upubliceret.',
    'service_body_editor_screen_sb_admin_observer_label'    =>  'Observatører:',
    'service_body_editor_screen_sb_admin_observer_desc'     =>  'Disse brugere kan se skjult info (som e-mail-adresser), men kan ikke redigere noget.',
    'service_body_dirty_confirm_text'                       =>  'Du har foretaget ændringer til denne service enhed. Ønsker du at miste dine ændringer?',
    'service_body_save_button'                              =>  'Gem disse ændringer for Service Enheden',
    'service_body_create_button'                            =>  'Opret denne service Enhed',
    'service_body_delete_button'                            =>  'Slet denne service Enhed',
    'service_body_delete_perm_checkbox'                     =>  'Slet Denne Service Enhed Permanent',
    'service_body_delete_button_confirm'                    =>  'Er du sikker på, at du vil slette denne service Enhed? Make sure that all meetings are either removed or transferred to another service body before performing this function.',
    'service_body_delete_button_confirm_perm'               =>  'Denne service enhed vil blive slettet permanent!',
    'service_body_change_fader_create_success_text'         =>  'Denne Service Enhed Blev Oprettet Succesfuld ',
    'service_body_change_fader_create_fail_text'            =>  'Oprettelse Service Enheden Mislykkedes',
    'service_body_change_fader_delete_success_text'         =>  'Service Enheden Blev Slettet',
    'service_body_change_fader_delete_fail_text'            =>  'Slettelse Af Service Enheden Mislykkedes',
    'service_body_change_fader_fail_no_data_text'           =>  'Ændring Af Service Enheden Mislykkedes, Fordi Der Ikke Var Nogen Data Leveret',
    'service_body_change_fader_fail_cant_find_sb_text'      =>  'Ændring Af Service Enheden Mislykkedes, Fordi Service Enheden Ikke Blev Fundet',
    'service_body_change_fader_fail_cant_update_text'       =>  'Ændring Af Service Enheden Mislykkedes, Fordi Service Enheden Ikke Blev Opdateret',
    'service_body_change_fader_fail_bad_hierarchy'          =>  'Ændring Af Service Enheden Mislykkedes, Fordi Den Udvalgte Ejerens Service Enhed Er Under Denne Service Enhed Og Kan Ikke Bruges',
    'service_body_cancel_button'                            =>  'Gendan til original',
    'service_body_editor_type_label'                        =>  'Service Enhed Type:',
    'service_body_editor_type_c_comdef_service_body__GRP__' =>  'Gruppe',
    'service_body_editor_type_c_comdef_service_body__COP__' =>  'Samarbejde',
    'service_body_editor_type_c_comdef_service_body__ASC__' =>  'Område Service Komite ',
    'service_body_editor_type_c_comdef_service_body__RSC__' =>  'Regionale service konference',
    'service_body_editor_type_c_comdef_service_body__WSC__' =>  'Verdens Service Konference',
    'service_body_editor_type_c_comdef_service_body__MAS__' =>  'Metroområde',
    'service_body_editor_type_c_comdef_service_body__ZFM__' =>  'Zone',
    'service_body_editor_type_c_comdef_service_body__GSU__' =>  'Gruppe Service Enhed',
    'service_body_editor_type_c_comdef_service_body__LSU__' =>  'Lokal Service Enhed',
    'service_body_editor_screen_helpline_label'             =>  'Helpline:',
    'service_body_editor_screen_helpline_prompt'            =>  'Indtast Telefonnummeret Til Helpline',
    'service_body_editor_uri_naws_format_text'              =>  'Få Møder Til Denne service Enhed Som En NAWS-Kompatibel Fil',
    'edit_Meeting_meeting_id'                               =>  'Møde ID:',
    'service_body_editor_create_new_sb_option'              =>  'Opret En Ny Service Enhed',
    'service_body_editor_screen_world_cc_label'             =>  'Verdens Komite Kode:',
    'service_body_editor_screen_world_cc_prompt'            =>  'Indtast En Verdens Komite Kode',
    'user_editor_disclosure'                                =>  'Bruger Administration',
    'user_editor_create_new_user_option'                    =>  'Opret En Ny Bruger',
    'user_editor_screen_sb_id_label'                        =>  'ID:',
    'user_editor_account_login_label'                       =>  'Bruger Login:',
    'user_editor_login_default_text'                        =>  'Indtast Et Bruger Login',
    'user_editor_account_type_label'                        =>  'Bruger Er En:',
    'user_editor_user_owner_label'                          =>  'Ejet Af: ',
    'user_editor_account_type_1'                            =>  'Server Administrator',
    'user_editor_account_type_2'                            =>  'Service Enheds Administrator',
    'user_editor_account_type_3'                            =>  'Service Enheds Redaktør',
    'user_editor_account_type_5'                            =>  'Service Enheds Observant',
    'user_editor_account_type_4'                            =>  'Deaktiveret bruger',
    'user_editor_account_name_label'                        =>  'Bruger Navn:',
    'user_editor_name_default_text'                         =>  'Indsæt Et Bruger Navn',
    'user_editor_account_description_label'                 =>  'Beskrivelse:',
    'user_editor_description_default_text'                  =>  'Indsæt En Bruger Beskrivelse',
    'user_editor_account_email_label'                       =>  'Email:',
    'user_editor_email_default_text'                        =>  'Indsæt En Bruger Email',
    'user_change_fader_success_text'                        =>  'Brugeren blev ændret succesfuldt',
    'user_change_fader_fail_text'                           =>  'Brugerændringen mislykkedes',
    'user_change_fader_create_success_text'                 =>  'Brugeren blev oprettet',
    'user_change_fader_create_fail_text'                    =>  'Oprettelse Af Bruger Mislykkedes',
    'user_change_fader_create_fail_already_exists'          =>  'En login til den bruger, du forsøger at oprette, eksisterer allerede.',
    'user_change_fader_delete_success_text'                 =>  'Brugeren blev slettet',
    'user_change_fader_delete_fail_text'                    =>  'Sletningen Brugen Mislykkedes',
    'user_save_button'                                      =>  'Gem Ændringer Til Denne Bruger',
    'user_create_button'                                    =>  'Opret Denne Nye Bruger',
    'user_cancel_button'                                    =>  'Gendan til original',
    'user_delete_button'                                    =>  'Slet Denne Bruger',
    'user_delete_perm_checkbox'                             =>  'Slet Denne Bruger Permanent',
    'user_password_label'                                   =>  'Skift Adgangskode Til:',
    'user_new_password_label'                               =>  'Angiv Adgangskode Til:',
    'user_password_default_text'                            =>  'Forlad dette alene, medmindre du vil ændre adgangskoden',
    'user_new_password_default_text'                        =>  'Du skal indtaste et kodeord for en ny bruger',
    'user_dirty_confirm_text'                               =>  'Du har foretaget ændringer til denne bruger. Ønsker du at miste dine ændringer?',
    'user_delete_button_confirm'                            =>  'Er Du Sikker På, At Du Vil Slette Denne Bruger?',
    'user_delete_button_confirm_perm'                       =>  'Denne Bruger Bliver Slettet Permanent!',
    'user_create_password_alert_text'                       =>  'Nye Brugere Skal Have Adgangskode. Du Har Ikke Angivet En Adgangskode Til Denne Bruger.',
    'user_change_fader_fail_no_data_text'                   =>  'Brugerændringen Mislykkedes, Fordi Der Ikke Var Nogen Data Leveret',
    'user_change_fader_fail_cant_find_sb_text'              =>  'Brugerændringen Mislykkedes, Fordi Brugeren Ikke Blev Fundet',
    'user_change_fader_fail_cant_update_text'               =>  'Brugerændringen Mislykkedes, Fordi Brugeren Ikke Blev Opdateret',
    'format_editor_disclosure'                              =>  'Format Administration',
    'format_change_fader_change_success_text'               =>  'Formatet Blev Ændret Succesfuldt',
    'format_change_fader_change_fail_text'                  =>  'Format Ændringen Mislykkedes',
    'format_change_fader_create_success_text'               =>  'Formatet Blev Oprettet Succesfuldt',
    'format_change_fader_create_fail_text'                  =>  'Oprettelse Af Formatet  Mislykkes',
    'format_change_fader_delete_success_text'               =>  'Formatet Blev Slettet',
    'format_change_fader_delete_fail_text'                  =>  'Sletning Af Format Mislykkedes',
    'format_change_fader_fail_no_data_text'                 =>  'Format Ændring Mislykkedes, Fordi Der Ikke Var Data Leveret',
    'format_change_fader_fail_cant_find_sb_text'            =>  'Format Ændring Mislykkes, Fordi Formatet Ikke Blev Fundet',
    'format_change_fader_fail_cant_update_text'             =>  'Format Ændring Mislykkes, Fordi Formatet Ikke Blev Opdateret',
    'format_editor_name_default_text'                       =>  'Indsæt En Meget Kort Beskrivelse',
    'format_editor_description_default_text'                =>  'Indsæt En Mere Detaljeret Beskrivelse',
    'format_editor_create_format_button_text'               =>  'Opret Nyt Format',
    'format_editor_cancel_create_format_button_text'        =>  'Annullere',
    'format_editor_create_this_format_button_text'          =>  'Opret Dette Format',
    'format_editor_change_format_button_text'               =>  'Skift Dette Format',
    'format_editor_delete_format_button_text'               =>  'Slet Dette Format',
    'format_editor_reset_format_button_text'                =>  'Gendan Til Original',
    'need_refresh_message_fader_text'                       =>  'Du bør opdatere denne side, før du bruger denne sektion',
    'need_refresh_message_alert_text'                       =>  'Hvis du har foretaget ændringer i Service Body Administration, User Administration eller Format Administration, kan oplysningerne, der vises i dette afsnit, ikke længere være korrekte, så siden skal opdateres. Den nemmeste måde at gøre dette på er at logge ud og derefter logge på igen.',
    'format_editor_delete_button_confirm'                   =>  'Er du sikker på, at du vil slette dette format?',
    'format_editor_delete_button_confirm_perm'              =>  'Dette format slettes permanent!',
    'min_password_length_string'                            =>  'Adgangskoden er for kort! Det skal være mindst% d tegn langt!',
    'AJAX_Auth_Failure'                                     =>  'Autorisation mislykkedes for denne operation. Der kan være et problem med serverkonfigurationen.',
    'Maps_API_Key_Warning'                                  =>  'ADVARSEL: Der er et problem med API-nøglen til Google Maps.',
    'Maps_API_Key_Not_Set'                                  =>  'ADVARSEL: Google Maps API-nøglen er ikke angivet.',
    'Observer_Link_Text'                                    =>  'Meeting Browser',
    'Data_Transfer_Link_Text'                               =>  'Importer mødedata (ADVARSEL: Erstatter nuværende data!)',
    'MapsURL'                                               =>  'https://maps.google.com/maps?q=##LAT##,##LONG##+(##NAME##)&amp;ll=##LAT##,##LONG##',
    'hidden_value'                                          =>  'Kan ikke vise data - Uautoriseret',
    'Value_Prompts'                                         =>  array (
        'id_bigint' => 'Møde ID',
        'worldid_mixed' => 'Verdens Services ID',
        'service_body' => 'Service Enhed',
        'service_bodies' => 'Service Enheder',
        'weekdays' => 'Ugedage',
        'weekday' => 'Møde samles hver',
        'start_time' => 'Møde begynder kl',
        'duration_time' => 'Møde vare',
        'location' => 'Beliggenhed',
        'duration_time_hour' => 'Time',
        'duration_time_hours' => 'Timer',
        'duration_time_minute' => 'Minut',
        'duration_time_minutes' => 'Minutter',
        'lang_enum' => 'Sprog',
        'formats' => 'Struktur',
        'distance' => 'Afstand fra Centrum',
        'generic' => 'NA Møde',
        'close_title' => 'Luk Dette Mødestruktur Vindue',
        'close_text' => 'Luk Vindue',
        'map_alt' => 'Kort til møde',
        'map' => 'Følg denne link til et kort',
        'title_checkbox_unpub_meeting' => 'Dette møde er ikke udgivet. Det kan ikke ses ved regelmæssige søgninger.',
        'title_checkbox_copy_meeting' => 'Dette møde er et duplikat af et andet møde. Det er ikke udgivet. Det kan ikke ses ved regelmæssige søgninger.'
    ),
    'world_format_codes_prompt'                             =>  'NAWS Format:',
    'world_format_codes'                                    =>  array (
        ''      =>  'None',
        'OPEN'  =>  'Åben',
        'CLOSED'=>  'Lukket',
        'WCHR'  =>  'Kørestolsvenligt',
        'BEG'   =>  'Begynder / Nykommer',
        'BT'    =>  'Basis Tekst',
        'CAN'   =>  'Lysmøde',
        'CPT'   =>  '12 koncepter',
        'CW'    =>  'Børn Er Velkommen',
        'DISC'  =>  'Diskussion / Deltagelse',
        'GL'    =>  'Homoseksuel / lesbisk',
        'IP'    =>  'IP Møde',
        'IW'    =>  'Det Virker Møde',
        'JFT'   =>  'Bare For I Dag Møde',
        'LC'    =>  'Living Clean',
        'LIT'   =>  'Litteratur Møde',
        'M'     =>  'Mandemøde',
        'MED'   =>  'Meditation',
        'NS'    =>  'Ikke Ryger',
        'QA'    =>  'Spørgsmål & Svar',
        'RA'    =>  'Restriktiv Møde',
        'SMOK'  =>  'Ryger',
        'SPK'   =>  'Speaker',
        'STEP'  =>  'Trin',
        'SWG'   =>  'Step Working Guide Møde',
        'TOP'   =>  'Emne',
        'TRAD'  =>  'Tradition',
        'VAR'   =>  'Skiftende Struktur',
        'W'     =>  'Kvinde',
        'Y'     =>  'Ungdoms Møde',
        'LANG'  =>  'Alternativt sprog',
        'GP'    =>  'Guiding Principles', // TODO translate
        'NC'    =>  'No Children', // TODO translate
        'CH'    =>  'Closed Holidays', // TODO translate
        'VM'    =>  'Virtual', // TODO translate
        'HYBR'  =>  'Virtual and In-Person', // TODO translate
        'TC'    =>  'Facility Temporarily Closed' // TODO translate
    ),
    'format_type_prompt' =>  'Format Type:',     // TODO: Translate
    'format_type_codes'  =>  array (
        ''      =>  'None',    // TODO: Translate
        'FC1'  =>  'Meeting Format (Speaker, Book Study, etc.)',    // TODO: Translate
        'FC2'  =>  'Location Code (Wheelchair Accessible, Limited Parking, etc.)',    // TODO: Translate
        'FC3'  =>  'Common Needs and Restrictions (Mens Meeting, LGTBQ, No Children, etc.)',    // TODO: Translate
        'O'    =>  'Attendance by non-addicts (Open, Closed)',    // TODO: Translate
        'LANG' =>  'Language', // TODO: TRANSLATE
        'ALERT'=>  'Format should be especially prominent (Clean requirement, etc.)',// TODO: Translate
    ),
    'cookie_monster'                                        =>  'Dette websted bruger en cookie til at gemme dit foretrukne sprog.',
    'main_prompts'                                          =>  array ( 'id_bigint' => 'ID',
        'worldid_mixed' => 'Verdens ID',
        'shared_group_id_bigint' => 'Ubrugt',
        'service_body_bigint' => 'Service Enhed ID',
        'weekday_tinyint' => 'Ugedag',
        'start_time' => 'Starttidspunkt',
        'duration_time' => 'Retning',
        'time_zone' => 'Time Zone',
        'formats' => 'Struktur',
        'lang_enum' => 'Sprog',
        'longitude' => 'Længdegrad',
        'latitude' => 'Højdergrad',
        'published' => 'Udgivet',
        'email_contact' => 'Email Kontakt',
    ),
    'check_all'                                             => 'Check All',
    'uncheck_all'                                           => 'Uncheck All',
    'automatically_calculated_on_save'                      => 'Automatically calculated on save.'
);

$email_contact_strings = array (
    'meeting_contact_form_subject_format'   =>  "[MØDE LISTE KONTAKT] %s",
    'meeting_contact_message_format'        =>  "%s\n--\nDenne meddelelse vedrører mødet navngivet \"%s\", der mødes %s, on %s.\nBrowser Link: %s\nRedigere Link: %s\nDen blev sendt direkte fra mødelisten webserver, og afsenderen er ikke bekendt med din e-mail-adresse.\nVær opmærksom på, at svaret vil afsløre din e-mail-adresse.\nHvis du bruger \"Svar alle\", og der er flere e-mailmodtagere, kan du udsætte andres e-mailadresser.\nVær venlig at respektere folks privatliv og anonymitet; herunder den oprindelige afsender af denne meddelelse."
);

$change_type_strings = array (
    '__THE_MEETING_WAS_CHANGED__' => 'Mødet blev ændret.',
    '__THE_MEETING_WAS_CREATED__' => 'Mødet blev oprettet.',
    '__THE_MEETING_WAS_DELETED__' => 'Mødet blev slettet.',
    '__THE_MEETING_WAS_ROLLED_BACK__' => 'Mødet blev rullet tilbage til en tidligere version.',

    '__THE_FORMAT_WAS_CHANGED__' => 'Strukturen Blev Ændret.',
    '__THE_FORMAT_WAS_CREATED__' => 'Strukturen Blev Oprettet.',
    '__THE_FORMAT_WAS_DELETED__' => 'Strukturen Blev Slettet.',
    '__THE_FORMAT_WAS_ROLLED_BACK__' => 'Strukturen blev rullet tilbage til en tidligere version.',

    '__THE_SERVICE_BODY_WAS_CHANGED__' => 'Service enheden blev ændret.',
    '__THE_SERVICE_BODY_WAS_CREATED__' => 'Service enheden blev Oprettet.',
    '__THE_SERVICE_BODY_WAS_DELETED__' => 'Service enheden blev Slettet.',
    '__THE_SERVICE_BODY_WAS_ROLLED_BACK__' => 'Service Enheden blev rullet tilbage til en tidligere version.',

    '__THE_USER_WAS_CHANGED__' => 'Brugeren Blev Ændret.',
    '__THE_USER_WAS_CREATED__' => 'Brugeren Blev Oprettet.',
    '__THE_USER_WAS_DELETED__' => 'Brugeren Blev Slettet.',
    '__THE_USER_WAS_ROLLED_BACK__' => 'Brugeren Blev Ruller Tilbage Til En Tidligere Version.',

    '__BY__' => 'fra',
    '__FOR__' => 'til'
);

$detailed_change_strings = array (
    'was_changed_from' => 'blev ændret fra',
    'to' => 'Til',
    'was_changed' => 'blev ændret',
    'was_added_as' => 'blev tilføjet som',
    'was_deleted' => 'Blev Slettet',
    'was_published' => 'Mødet Blev Udhivet',
    'was_unpublished' => 'Mødet Blev Ikke Udgivet',
    'formats_prompt' => 'Møde Strukturen',
    'duration_time' => 'Møde varigheden',
    'start_time' => 'Mødetidspunktet',
    'longitude' => 'Mødets Længdegrad',
    'latitude' => 'Mødets Højdegrad',
    'sb_prompt' => 'Mødet ændrede sin service enhed fra',
    'id_bigint' => 'Møde ID',
    'lang_enum' => 'Møde sproget',
    'worldid_mixed' => 'Den delte gruppe ID',
    'weekday_tinyint' => 'Den dag i ugen, hvor mødet holdes',
    'non_existent_service_body' => 'Service enheden findes ikke længere',
);

defined('_END_CHANGE_REPORT') or define('_END_CHANGE_REPORT', '.');
