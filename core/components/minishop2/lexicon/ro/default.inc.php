<?php

/**
 * Romanian Lexicon Entries for miniShop2
 *
 * @package minishop2
 * @subpackage lexicon
 */

include_once('setting.inc.php');
$files = scandir(dirname(__FILE__));
foreach ($files as $file) {
    if (strpos($file, 'msp.') === 0) {
        @include_once($file);
    }
}

$_lang['minishop2'] = 'miniShop2';
$_lang['ms2_menu_desc'] = 'Magazin online avansat';
$_lang['ms2_order'] = 'Comandă';
$_lang['ms2_orders'] = 'Comenzi';
$_lang['ms2_orders_intro'] = 'Panou de gestionare a comenzilor. Puteți selecta mai multe comenzi simultan prin Shift sau Ctrl (Cmd).';
$_lang['ms2_orders_desc'] = 'Gestionarea proiectelor';
$_lang['ms2_settings'] = 'Setări';
$_lang['ms2_settings_intro'] = 'Panou de gestionare a setărilor magazinului. Aici puteți specifica metodele de achitare, livrare și starea comenzilor.';
$_lang['ms2_settings_desc'] = 'Starea comenzilor, opțiunile de plată și de livrare';
$_lang['ms2_system_settings'] = 'Setări de sistem';
$_lang['ms2_system_settings_desc'] = 'Setări de sistem miniShop2';
$_lang['ms2_payment'] = 'Achitare';
$_lang['ms2_payments'] = 'Metode de plată';
$_lang['ms2_payments_intro'] = 'Puteți crea orice metode de plată a comenzilor. Logica achitării (direcționarea cumpărătorului către serviciu la distanță, primirea plății etc. ) este implementată în clasa pe care o specificați. <br/> Pentru metodele de plată, parametrul "clasă" este obligatoriu. ';
$_lang['ms2_delivery'] = 'Livrare';
$_lang['ms2_deliveries'] = 'Metode de livrare';
$_lang['ms2_deliveries_intro'] = 'Posibile metode de livrare. Logica calculării costului livrării în funcție de distanță și greutate este implementată de clasa pe care o specificați în setări. <br/> Dacă nu precizați clasa, calculele vor fi efectuate prin algoritmul implicit.';
$_lang['ms2_statuses'] = 'Starea comenzii';
$_lang['ms2_statuses_intro'] = 'Există mai multe stări de comandă obligatorii: "nou", "achitat", "expediat" și "anulat". Ele pot fi editate, dar nu pot fi șterse, deoarece sunt necesare pentru funcționarea magazinului. Puteți specifica personal stările pentru logica avansată de lucru cu comenzi. <br/> Starea poate fi finală, ceea ce înseamnă că nu poate fi schimbată cu alta, de exemplu "expediat" și "anulat". Starea poate fi fixată, adică nu poate fi trecută la starea anterioară, de exemplu, "achitat" nu poate fi trecut la "nou" ".';
$_lang['ms2_vendors'] = 'Producătorii produselor';
$_lang['ms2_vendors_intro'] = 'Lista posibililor producători de produse. Ceea ce adăugați aici, puteți alege în cîmpul "vendor" al produsului.';
$_lang['ms2_link'] = 'Legătura produselor';
$_lang['ms2_links'] = 'Legăturile produselor';
$_lang['ms2_links_intro'] = 'Lista posibilelor legături ale mărfurilor între ele. Tipul de legătură caracterizează modul în care va funcționa, el nu poate fi creat, numai ales din listă.';
$_lang['ms2_option'] = 'Proprietatea produsului';
$_lang['ms2_options'] = 'Proprietățile produselor';
$_lang['ms2_options_intro'] = 'Lista posibilelor proprietăți ale produselor. Arborele de categorii este utilizat pentru a filtra proprietățile categoriilor selectate. <br/> Pentru a atribui categoriilor mai multe opțiuni in același timp, selectați-le cu Ctrl (Cmd) sau Shift.';
$_lang['ms2_options_category_intro'] = 'Lista posibilelor proprietăți ale produselor din aceasta categorie.';
$_lang['ms2_default_value'] = 'Valoare implicită';
$_lang['ms2_customer'] = 'Cumpărător';
$_lang['ms2_all'] = 'Toate';
$_lang['ms2_type'] = 'Tip';

$_lang['ms2_btn_create'] = 'Creați';
$_lang['ms2_btn_copy'] = 'Copiați';
$_lang['ms2_btn_save'] = 'Salvați';
$_lang['ms2_btn_edit'] = 'Modificare';
$_lang['ms2_btn_view'] = 'Vedeți';
$_lang['ms2_btn_delete'] = 'Ștergeți';
$_lang['ms2_btn_undelete'] = 'Restabilire';
$_lang['ms2_btn_publish'] = 'Activați';
$_lang['ms2_btn_unpublish'] = 'Dezactivați';
$_lang['ms2_btn_cancel'] = 'Anulare';
$_lang['ms2_btn_back'] = 'Înapoi (alt + &uarr;)';
$_lang['ms2_btn_prev'] = 'Produsul precedent (alt + &larr;)';
$_lang['ms2_btn_next'] = 'Produsul următor (alt + &rarr;)';
$_lang['ms2_btn_help'] = 'Ajutor';
$_lang['ms2_btn_duplicate'] = 'Duplica produsul';
$_lang['ms2_btn_addoption'] = 'Adaugă';
$_lang['ms2_btn_assign'] = 'Atribuiți';

$_lang['ms2_actions'] = 'Acțiuni';
$_lang['ms2_search'] = 'Căutare';
$_lang['ms2_search_clear'] = 'Ștergeți';

$_lang['ms2_category'] = 'Categoria de produse';
$_lang['ms2_category_tree'] = 'Lista categoriilor';
$_lang['ms2_category_type'] = 'Categoria de produse';
$_lang['ms2_category_create'] = 'Adăugați categoria';
$_lang['ms2_category_create_here'] = 'Categoria de produse';
$_lang['ms2_category_manage'] = 'Managementul produselor';
$_lang['ms2_category_duplicate'] = 'Copiați categoria';
$_lang['ms2_category_publish'] = 'Publicați categorie';
$_lang['ms2_category_unpublish'] = 'Retragerea din publicație';
$_lang['ms2_category_delete'] = 'Ștergeți categoria';
$_lang['ms2_category_undelete'] = 'Restabili categoria';
$_lang['ms2_category_view'] = 'Vezi online';
$_lang['ms2_category_new'] = 'Categoria nouă';
$_lang['ms2_category_option_add'] = 'Adăugați o opțiune';
$_lang['ms2_category_option_rank'] = 'Ordinea sortării';
$_lang['ms2_category_show_nested'] = 'Afișarea produsele incluse';

$_lang['ms2_product'] = 'Produs';
$_lang['ms2_product_type'] = 'Produs';
$_lang['ms2_product_create_here'] = 'Produs';
$_lang['ms2_product_create'] = 'Adăugați produsul';

$_lang['ms2_option_type'] = 'Tipul caracteristicilor';

$_lang['ms2_frontend_currency'] = 'RUB';
$_lang['ms2_frontend_weight_unit'] = 'kg.';
$_lang['ms2_frontend_count_unit'] = 'buc.';
$_lang['ms2_frontend_add_to_cart'] = 'Adăugați în coș';
$_lang['ms2_frontend_tags'] = 'Tagg-uri';
$_lang['ms2_frontend_colors'] = 'Culori';
$_lang['ms2_frontend_color'] = 'Culoare';
$_lang['ms2_frontend_sizes'] = 'Dimensiuni';
$_lang['ms2_frontend_size'] = 'Dimensiune';
$_lang['ms2_frontend_popular'] = 'Produs popular';
$_lang['ms2_frontend_favorite'] = 'Recomandăm';
$_lang['ms2_frontend_new'] = 'Nou';
$_lang['ms2_frontend_deliveries'] = 'Metode de livrare';
$_lang['ms2_frontend_delivery'] = 'Livrare';
$_lang['ms2_frontend_payments'] = 'Metode de plată';
$_lang['ms2_frontend_payment'] = 'Plata';
$_lang['ms2_frontend_delivery_select'] = 'Selectați o metodă de livrare';
$_lang['ms2_frontend_payment_select'] = 'Selectați o metodă de plată';
$_lang['ms2_frontend_credentials'] = 'Datele destinatarului';
$_lang['ms2_frontend_address'] = 'Adresa livrării';

$_lang['ms2_frontend_comment'] = 'Comentariu';
$_lang['ms2_frontend_receiver'] = 'Destinatar';
$_lang['ms2_frontend_email'] = 'Email';
$_lang['ms2_frontend_phone'] = 'Telefon';
$_lang['ms2_frontend_index'] = 'Codul poștal';
$_lang['ms2_frontend_country'] = 'Țară';
$_lang['ms2_frontend_region'] = 'Regiune';
$_lang['ms2_frontend_city'] = 'Oraș';
$_lang['ms2_frontend_street'] = 'Stradă';
$_lang['ms2_frontend_building'] = 'Casa';
$_lang['ms2_frontend_room'] = 'Ap.';
$_lang['ms2_frontend_entrance'] = 'Intrare';
$_lang['ms2_frontend_floor'] = 'Etaj';
$_lang['ms2_frontend_text_address'] = 'Adresa';

$_lang['ms2_frontend_order_cost'] = 'Total, cu livrare';
$_lang['ms2_frontend_order_submit'] = 'Plasați o comandă!';
$_lang['ms2_frontend_order_cancel'] = 'Curățați forma';
$_lang['ms2_frontend_order_success'] = 'Vă mulțumim pentru plasarea comenzii dvs. <b>#[[+num]]</b> pe site-ul nostru <b>[[++site_name]]</b>!';

$_lang['ms2_message_close_all'] = 'închideți toate';
$_lang['ms2_err_unknown'] = 'Eroare necunoscută';
$_lang['ms2_err_ns'] = 'Acest câmp este obligatoriu';
$_lang['ms2_err_ae'] = 'Acest câmp trebuie să fie unic';
$_lang['ms2_err_json'] = 'Acest câmp necesită JSON';

$_lang['ms2_err_user_nf'] = 'Utilizatorul nu a fost găsit.';
$_lang['ms2_err_order_nf'] = 'Comanda cu acest identificator nu a fost găsită.';
$_lang['ms2_err_status_nf'] = 'Statutul cu acest identificator nu a fost găsit.';
$_lang['ms2_err_delivery_nf'] = 'Metoda de livrare cu acest identificator nu a fost găsită.';
$_lang['ms2_err_payment_nf'] = 'Metoda de achitare cu acest identificator nu a fost găsită.';
$_lang['ms2_err_status_final'] = 'A fost instalat statutul final. Nu poate fi schimbat.';
$_lang['ms2_err_status_fixed'] = 'A fost instalat statutul de fixare. Nu poate fi schimbat la varianta anterioară.';
$_lang['ms2_err_status_wrong'] = 'Statutul comenzii este incorect.';
$_lang['ms2_err_status_same'] = 'Acest statut este deja instalat.';
$_lang['ms2_err_register_globals'] = 'Eroare: parametru php <b>register_globals</b> trebuie să fie dezactivat.';
$_lang['ms2_err_link_equal'] = 'Incercați să adăugați același link al produsului';
$_lang['ms2_err_value_duplicate'] = 'Nu ați introdus o valoare sau ați introdus o repetare.';

$_lang['ms2_err_gallery_save'] = 'File-ul nu a fost salvat (vezi sistem log).';
$_lang['ms2_err_gallery_ns'] = 'Fișierul expediat este gol';
$_lang['ms2_err_gallery_ext'] = 'Format de fișier nevalid';
$_lang['ms2_err_gallery_exists'] = 'Această imagine deja este în galeria produsului.';
$_lang['ms2_err_gallery_thumb'] = 'Nu s-au putut genera miniaturi. Priviți sistem log.';
$_lang['ms2_err_wrong_image'] = 'Fișierul nu este o imagine validă.';

$_lang['ms2_email_subject_new_user'] = 'Ați făcut comanda #[[+num]] pe site-ul [[++site_name]]';
$_lang['ms2_email_subject_new_manager'] = 'Aveți comanda nouă #[[+num]]';
$_lang['ms2_email_subject_paid_user'] = 'Ați achitat comanda #[[+num]]';
$_lang['ms2_email_subject_paid_manager'] = 'Comanda #[[+num]] a fost achitată';
$_lang['ms2_email_subject_sent_user'] = 'Comanda Dvs #[[+num]] a fost expediată';
$_lang['ms2_email_subject_cancelled_user'] = 'Comanda Dvs #[[+num]] a fost anulată';

$_lang['ms2_payment_link'] = 'Dacă ați întrerupt accidental procedura de plată, puteți să o continuați oricînd <a href="[[+link]]" style="color:#348eda;"> urmînd acest link</a>.';

$_lang['ms2_category_err_ns'] = 'Categoria nu a fost selectată';
$_lang['ms2_option_err_ns'] = 'Opțiunea nu a fost selectată';
$_lang['ms2_option_err_nf'] = 'Opțiunea nu a fost găsită';
$_lang['ms2_option_err_ae'] = 'Opțiunea deja există';
$_lang['ms2_option_err_save'] = 'Eroare de salvare a opțiunii';
$_lang['ms2_option_err_reserved_key'] = 'Această cheie de opțiune nu poate fi utilizată';
$_lang['ms2_option_err_invalid_key'] = 'Cheia de opțiune incorectă';
