<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ecd1873e4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice\Email; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use WC_Email; class Customer extends WC_Email { const iaymqwiukuokuwmi = "\173\x6f\x72\144\145\162\x5f\x64\x61\x74\x65\x7d"; const kkqewaoosgccwoyq = "\x7b\x6f\x72\144\145\x72\x5f\156\165\x6d\x62\145\x72\175"; use TemplateTrait, ComponentTrait; public function __construct() { $this->id = "\160\144\x66\137\143\x75\163\x74\157\x6d\x65\x72\137\151\156\x76\157\151\x63\x65"; $this->enabled = true; $this->customer_email = true; $this->title = __("\103\x75\163\x74\x6f\x6d\x65\162\40\120\104\106\x20\151\156\166\157\x69\143\x65", PR__MDL__WOOCOMMERCE); $this->description = __("\x45\155\x61\x69\154\40\x66\157\x72\x20\x63\x75\x73\164\x6f\x6d\145\162\x20\167\151\x74\150\40\x6f\x72\x64\x65\x72\40\x64\x65\x74\141\151\154\163\40\x61\156\144\40\x50\x44\106\40\x69\156\166\x6f\x69\143\145\x20\141\x74\x74\141\143\x68\145\x64\56", PR__MDL__WOOCOMMERCE); $this->placeholders = [self::iaymqwiukuokuwmi => '', self::kkqewaoosgccwoyq => '']; add_action("\x70\144\x66\137\x69\x6e\166\157\151\x63\x65\x5f\x73\145\156\144\137\143\165\x73\164\x6f\155\145\x72\137\x69\x6e\x76\x6f\151\x63\145\137\156\157\164\151\146\x69\x63\141\164\151\x6f\x6e\40\x30\61\40", [$this, "\153\x67\x69\x6d\145\141\153\x69\163\x69\153\153\x73\x67\143\x65"]); parent::__construct(); WC_Email::__construct(); $this->manual = false; } public function kgimeakisikksgce($umwqusowiqmyseom) { $iiwwoeukeeweaisc = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($umwqusowiqmyseom); if (!$iiwwoeukeeweaisc) { goto mogkoocsoeuyoqqa; } $this->object = $iiwwoeukeeweaisc; $this->recipient = $iiwwoeukeeweaisc->get_billing_email(); $this->placeholders[self::iaymqwiukuokuwmi] = wc_format_datetime($iiwwoeukeeweaisc->get_date_created()); $this->placeholders[self::kkqewaoosgccwoyq] = $iiwwoeukeeweaisc->get_order_number(); if (!($acuayeeoiwokyomo = $this->get_recipient())) { goto wsesqmcqoiyyqkqi; } $iosuwkkwwioumeqg = $this->get_subject(); $ewgwqamkygiqaawc = $this->get_content(); $uykgysuswksgmwqy = $this->get_headers(); $aieaqakyuyewkkwe = $this->get_attachments(); $this->send($acuayeeoiwokyomo, $iosuwkkwwioumeqg, $ewgwqamkygiqaawc, $uykgysuswksgmwqy, $aieaqakyuyewkkwe); wsesqmcqoiyyqkqi: mogkoocsoeuyoqqa: $this->restore_locale(); } public function get_default_subject() { return __("\x59\157\165\162\x20\x69\x6e\166\157\151\143\145\40\146\x6f\x72\x20\x6f\x72\x64\145\x72\x20\x23\x7b\x6f\x72\x64\x65\x72\x5f\x6e\165\155\142\145\x72\x7d\40\x6f\156\40\x7b\x73\151\164\x65\x5f\164\151\164\x6c\x65\175\40\x69\x73\x20\x61\164\x74\x61\143\150\145\144", PR__MDL__WOOCOMMERCE); } public function get_default_heading() { return __("\131\x6f\x75\x72\x20\151\156\166\157\151\143\145\x20\x66\x6f\162\40\157\x72\x64\x65\x72\40\x23\173\x6f\x72\x64\145\162\137\x6e\x75\155\x62\145\x72\175\x20\151\163\x20\141\164\164\x61\143\150\x65\x64", PR__MDL__WOOCOMMERCE); } public function get_subject() { $iosuwkkwwioumeqg = $this->get_option("\163\165\142\x6a\145\143\164", $this->get_default_subject()); return $this->format_string($iosuwkkwwioumeqg); } public function get_heading() { $iuimqckcgwwkgygo = $this->get_option("\x68\145\141\144\x69\156\x67", $this->get_default_heading()); return $this->format_string($iuimqckcgwwkgygo); } public function get_parameters() : array { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($this->object); $qookweymeqawmcwo = []; if (!$umwqusowiqmyseom) { goto oeocukauoyosicso; } if ($umwqusowiqmyseom->has_status(Constants::sgoswgskyiiwkyuo)) { goto wkwamkgkwykeqkec; } $uamcoiueqaamsqma = sprintf(__("\x48\145\162\x65\x20\x61\162\145\40\164\x68\x65\x20\x64\145\164\x61\x69\x6c\163\40\x6f\x66\x20\171\157\165\162\x20\x6f\x72\x64\x65\x72\40\160\x6c\141\x63\145\x64\40\x6f\x6e\x20\45\x73\x3a", PR__MDL__WOOCOMMERCE), wc_format_datetime($umwqusowiqmyseom->get_date_created())); goto oimkeqocuguqqsqk; wkwamkgkwykeqkec: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\x50\x61\171\x20\146\x6f\x72\40\x74\x68\151\x73\40\157\x72\x64\145\x72", PR__MDL__WOOCOMMERCE), $umwqusowiqmyseom->get_checkout_payment_url()); $uamcoiueqaamsqma = sprintf(__("\101\x6e\x20\x6f\x72\144\x65\162\40\150\x61\x73\x20\x62\x65\x65\156\40\x63\162\x65\x61\x74\145\x64\x20\x66\x6f\x72\40\171\157\165\x20\x6f\156\x20\x25\61\44\x73\56\x20\131\x6f\165\162\x20\x69\156\x76\157\x69\143\x65\40\151\163\40\142\x65\x6c\x6f\167\54\40\x77\x69\x74\150\40\x61\40\154\151\156\x6b\40\164\157\40\x6d\141\153\x65\x20\x70\141\171\x6d\145\156\164\40\167\150\x65\x6e\x20\x79\157\x75\342\x80\x99\x72\x65\40\x72\145\141\x64\x79\72\x20\x25\62\44\163", PR__MDL__WOOCOMMERCE), get_bloginfo("\156\x61\x6d\x65", "\x64\151\x73\x70\x6c\141\x79"), $iwywmkygwewiamwm); oimkeqocuguqqsqk: $qookweymeqawmcwo = [Constants::muqaqimusmckkieq => $this, Constants::awkcoioakcaougmq => $umwqusowiqmyseom, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, "\x70\154\141\x69\x6e\137\x74\x65\x78\164" => false, "\163\145\156\x74\x5f\164\157\x5f\141\x64\155\151\x6e" => false, "\x65\155\141\151\154\137\150\145\x61\144\151\x6e\x67" => $this->get_heading(), "\x68\x65\x6c\154\157\x5f\x6d\x65\163\163\x61\x67\x65" => sprintf(__("\x48\151\40\x25\163", PR__MDL__WOOCOMMERCE), $umwqusowiqmyseom->get_billing_first_name()), "\x61\x64\144\x69\x74\x69\157\156\x61\154\x5f\143\x6f\156\x74\x65\156\164" => $this->get_additional_content()]; oeocukauoyosicso: return $qookweymeqawmcwo; } public function get_default_additional_content() { return __("\124\150\141\156\153\163\x20\x66\x6f\162\40\165\x73\151\156\x67\x20\x7b\163\151\164\x65\137\141\x64\x64\162\145\x73\x73\175\x21", PR__MDL__WOOCOMMERCE); } public function get_content_html() { return $this->iuygowkemiiwqmiw("\x69\156\x64\x65\170", $this->get_parameters()); } public function get_content_plain() { return $this->iuygowkemiiwqmiw("\160\x6c\x61\x69\156", $this->get_parameters()); } public function init_form_fields() { $kqmcoiicsmgwaisg = array_keys($this->placeholders); foreach ($kqmcoiicsmgwaisg as $momcykaoccoymeig => $iwiewowoqmoekyqi) { $kqmcoiicsmgwaisg[$momcykaoccoymeig] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\143\157\x64\145", [], $iwiewowoqmoekyqi); yykqaowwsqgqysmq: } suqceasgacskcmkc: $ygoqmwaqmooosysc = sprintf(__("\101\x76\x61\x69\154\x61\142\x6c\145\x20\x70\x6c\x61\x63\x65\150\x6f\x6c\144\145\x72\163\72\x20\45\163", PR__MDL__WOOCOMMERCE), implode("\x2c\40", $kqmcoiicsmgwaisg)); $this->form_fields = ["\x65\x6e\141\x62\154\145\144" => [Constants::squoamkioomemiyi => "\x63\150\x65\143\x6b\x62\157\170", Constants::uissasisiuymwsmu => __("\x45\x6e\x61\142\154\145\x20\x74\150\x69\x73\x20\x65\x6d\141\x69\x6c\x20\x6e\x6f\164\x69\x66\x69\143\x61\x74\151\x6f\x6e", PR__MDL__WOOCOMMERCE), Constants::qescuiwgsyuikume => __("\x45\156\141\x62\x6c\145\57\x44\151\x73\141\x62\154\x65", PR__MDL__WOOCOMMERCE), Constants::wikgqsqysyuoykse => "\x79\x65\163"], "\163\x75\142\x6a\x65\143\x74" => ["\x64\x65\x73\x63\x5f\164\x69\160" => true, Constants::squoamkioomemiyi => "\164\x65\170\x74", Constants::qescuiwgsyuikume => __("\123\x75\142\152\145\143\x74", PR__MDL__WOOCOMMERCE), Constants::wikgqsqysyuoykse => '', Constants::moacsmsigegyweoc => $this->get_default_subject(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\x68\145\x61\x64\x69\156\147" => ["\x64\145\x73\x63\x5f\164\x69\160" => true, Constants::squoamkioomemiyi => "\x74\x65\170\164", Constants::qescuiwgsyuikume => __("\105\155\x61\151\154\x20\150\145\141\144\151\x6e\147", PR__MDL__WOOCOMMERCE), Constants::moacsmsigegyweoc => $this->get_default_heading(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\163\x75\x62\x6a\145\143\x74\137\x70\141\x69\144" => ["\x64\x65\x73\143\137\164\x69\160" => true, Constants::squoamkioomemiyi => "\164\145\x78\164", Constants::qescuiwgsyuikume => __("\123\x75\x62\x6a\145\x63\x74\40\x28\160\x61\x69\x64\x29", PR__MDL__WOOCOMMERCE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_subject()], "\150\x65\141\x64\x69\x6e\x67\137\x70\x61\x69\x64" => ["\144\x65\x73\x63\x5f\164\x69\160" => true, Constants::squoamkioomemiyi => "\x74\145\170\x74", Constants::qescuiwgsyuikume => __("\105\x6d\141\x69\x6c\x20\150\145\141\x64\151\x6e\x67\40\50\x70\141\151\144\x29", PR__MDL__WOOCOMMERCE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_heading()], "\x61\x64\x64\x69\x74\x69\157\156\141\x6c\x5f\x63\157\x6e\164\x65\156\164" => ["\x63\x73\x73" => "\167\x69\144\x74\x68\72\64\x30\60\x70\170\x3b\40\x68\145\x69\147\x68\x74\x3a\40\67\x35\160\170\73", "\x64\x65\x73\143\x5f\x74\x69\x70" => true, Constants::squoamkioomemiyi => "\164\x65\170\164\x61\x72\x65\x61", Constants::qescuiwgsyuikume => __("\101\144\x64\151\164\151\x6f\156\x61\x6c\x20\x63\x6f\x6e\164\x65\156\164", PR__MDL__WOOCOMMERCE), Constants::wikgqsqysyuoykse => $this->get_default_additional_content(), Constants::eqkeooqcsscoggia => __("\124\x65\170\164\x20\164\157\40\x61\x70\x70\x65\x61\x72\40\142\x65\154\x6f\167\40\164\150\x65\x20\x6d\x61\x69\156\x20\145\155\x61\151\154\40\143\x6f\156\x74\x65\x6e\164\x2e", PR__MDL__WOOCOMMERCE) . "\x20" . $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => __("\116\57\x41", PR__MDL__WOOCOMMERCE)], "\x65\155\x61\151\154\x5f\164\x79\160\145" => ["\143\x6c\141\163\163" => "\145\155\x61\151\154\137\164\171\160\x65\x20\x77\x63\55\x65\x6e\x68\x61\x6e\x63\x65\144\55\x73\145\x6c\x65\x63\164", "\x6f\x70\x74\151\x6f\156\163" => $this->get_email_type_options(), "\144\145\x73\x63\137\x74\151\160" => true, Constants::squoamkioomemiyi => "\163\x65\154\145\143\164", Constants::qescuiwgsyuikume => __("\x45\x6d\141\151\154\40\x74\x79\x70\x65", PR__MDL__WOOCOMMERCE), Constants::wikgqsqysyuoykse => "\150\x74\155\154", Constants::eqkeooqcsscoggia => __("\103\150\x6f\x6f\163\145\40\x77\x68\151\143\150\40\x66\x6f\162\155\x61\164\40\157\146\x20\x65\x6d\x61\151\x6c\40\x74\x6f\x20\163\145\156\x64\x2e", PR__MDL__WOOCOMMERCE)]]; } }
