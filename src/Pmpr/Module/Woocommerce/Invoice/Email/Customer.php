<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11f075210             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice\Email; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use WC_Email; class Customer extends WC_Email { const iaymqwiukuokuwmi = "\x7b\x6f\162\144\145\x72\x5f\144\141\164\145\175"; const kkqewaoosgccwoyq = "\x7b\x6f\162\144\145\x72\x5f\156\165\x6d\x62\145\162\x7d"; use TemplateTrait, ComponentTrait; public function __construct() { $this->id = "\160\x64\x66\137\x63\165\163\x74\x6f\x6d\x65\162\x5f\151\156\166\x6f\x69\143\x65"; $this->enabled = true; $this->customer_email = true; $this->title = __("\x43\x75\163\x74\x6f\x6d\145\162\40\120\x44\106\40\151\x6e\166\157\x69\x63\145", PR__MDL__WOOCOMMERCE); $this->description = __("\105\x6d\141\151\x6c\40\x66\157\162\40\x63\165\163\164\157\155\x65\162\40\167\x69\x74\150\x20\157\x72\144\145\x72\40\x64\145\x74\141\x69\154\x73\x20\x61\156\144\x20\x50\x44\106\40\x69\x6e\166\157\151\143\x65\40\x61\x74\x74\x61\x63\x68\x65\x64\x2e", PR__MDL__WOOCOMMERCE); $this->placeholders = [self::iaymqwiukuokuwmi => '', self::kkqewaoosgccwoyq => '']; add_action("\x70\x64\146\x5f\151\156\x76\157\x69\x63\x65\x5f\163\x65\156\144\x5f\143\x75\163\x74\x6f\155\x65\162\x5f\x69\x6e\166\x6f\x69\x63\145\137\156\x6f\164\x69\146\x69\x63\x61\x74\151\157\x6e\40\x30\61\x20", [$this, "\x6b\147\x69\155\145\141\x6b\151\163\x69\153\x6b\163\147\x63\x65"]); parent::__construct(); WC_Email::__construct(); $this->manual = false; } public function kgimeakisikksgce($umwqusowiqmyseom) { $iiwwoeukeeweaisc = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($umwqusowiqmyseom); if (!$iiwwoeukeeweaisc) { goto yykqaowwsqgqysmq; } $this->object = $iiwwoeukeeweaisc; $this->recipient = $iiwwoeukeeweaisc->get_billing_email(); $this->placeholders[self::iaymqwiukuokuwmi] = wc_format_datetime($iiwwoeukeeweaisc->get_date_created()); $this->placeholders[self::kkqewaoosgccwoyq] = $iiwwoeukeeweaisc->get_order_number(); if (!($acuayeeoiwokyomo = $this->get_recipient())) { goto suqceasgacskcmkc; } $iosuwkkwwioumeqg = $this->get_subject(); $ewgwqamkygiqaawc = $this->get_content(); $uykgysuswksgmwqy = $this->get_headers(); $aieaqakyuyewkkwe = $this->get_attachments(); $this->send($acuayeeoiwokyomo, $iosuwkkwwioumeqg, $ewgwqamkygiqaawc, $uykgysuswksgmwqy, $aieaqakyuyewkkwe); suqceasgacskcmkc: yykqaowwsqgqysmq: $this->restore_locale(); } public function get_default_subject() { return __("\131\157\x75\162\x20\x69\156\166\157\151\x63\x65\40\x66\157\x72\x20\x6f\162\x64\145\162\40\43\x7b\157\162\144\x65\162\x5f\156\165\155\142\x65\x72\175\40\157\156\40\173\163\x69\x74\x65\137\164\x69\164\x6c\145\175\x20\x69\x73\40\x61\x74\164\141\x63\150\x65\x64", PR__MDL__WOOCOMMERCE); } public function get_default_heading() { return __("\131\157\165\162\40\151\x6e\166\x6f\x69\x63\x65\x20\146\157\x72\40\x6f\x72\144\145\x72\x20\43\173\x6f\162\144\x65\x72\x5f\156\x75\x6d\142\x65\162\x7d\x20\151\x73\40\141\164\164\x61\x63\x68\x65\x64", PR__MDL__WOOCOMMERCE); } public function get_subject() { $iosuwkkwwioumeqg = $this->get_option("\x73\x75\x62\x6a\x65\x63\x74", $this->get_default_subject()); return $this->format_string($iosuwkkwwioumeqg); } public function get_heading() { $iuimqckcgwwkgygo = $this->get_option("\150\145\x61\144\151\x6e\147", $this->get_default_heading()); return $this->format_string($iuimqckcgwwkgygo); } public function get_parameters() : array { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($this->object); $qookweymeqawmcwo = []; if (!$umwqusowiqmyseom) { goto ikuuiauwouuqawuw; } if ($umwqusowiqmyseom->has_status(Constants::sgoswgskyiiwkyuo)) { goto kwiggogcgciwuwqk; } $uamcoiueqaamsqma = sprintf(__("\110\x65\162\x65\x20\141\162\x65\x20\164\x68\145\40\x64\x65\x74\141\x69\154\x73\x20\157\146\40\x79\x6f\165\x72\40\x6f\162\144\145\162\40\160\154\x61\x63\145\144\40\x6f\x6e\40\45\x73\72", PR__MDL__WOOCOMMERCE), wc_format_datetime($umwqusowiqmyseom->get_date_created())); goto uckewycoogsogwiy; kwiggogcgciwuwqk: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\120\141\x79\40\x66\x6f\162\x20\x74\x68\x69\163\40\157\x72\x64\145\x72", PR__MDL__WOOCOMMERCE), $umwqusowiqmyseom->get_checkout_payment_url()); $uamcoiueqaamsqma = sprintf(__("\101\156\40\157\x72\144\145\162\40\x68\141\163\40\x62\x65\145\156\x20\143\x72\x65\x61\x74\x65\144\40\146\157\x72\40\x79\x6f\x75\40\157\156\x20\45\61\44\163\x2e\x20\x59\x6f\x75\x72\x20\151\156\x76\157\x69\143\145\40\151\x73\x20\x62\145\154\157\167\x2c\40\167\x69\164\150\40\141\40\x6c\151\x6e\x6b\40\x74\157\x20\155\141\153\145\40\160\141\x79\x6d\145\156\164\40\167\x68\145\156\x20\171\x6f\x75\xe2\200\231\x72\x65\x20\162\145\141\x64\171\72\40\45\62\x24\163", PR__MDL__WOOCOMMERCE), get_bloginfo("\156\x61\x6d\x65", "\144\151\x73\x70\154\141\171"), $iwywmkygwewiamwm); uckewycoogsogwiy: $qookweymeqawmcwo = [Constants::muqaqimusmckkieq => $this, Constants::awkcoioakcaougmq => $umwqusowiqmyseom, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, "\160\x6c\141\x69\x6e\137\164\x65\170\164" => false, "\163\x65\x6e\164\137\x74\x6f\x5f\x61\144\155\x69\156" => false, "\145\155\x61\151\x6c\137\150\145\x61\144\151\x6e\147" => $this->get_heading(), "\x68\x65\154\154\157\137\155\145\x73\x73\141\x67\x65" => sprintf(__("\110\151\40\45\x73", PR__MDL__WOOCOMMERCE), $umwqusowiqmyseom->get_billing_first_name()), "\141\144\144\x69\164\151\157\x6e\141\x6c\137\x63\157\156\x74\145\156\x74" => $this->get_additional_content()]; ikuuiauwouuqawuw: return $qookweymeqawmcwo; } public function get_default_additional_content() { return __("\124\x68\x61\x6e\153\163\40\x66\157\162\40\165\163\151\x6e\x67\40\x7b\163\151\x74\x65\137\x61\144\x64\x72\x65\163\163\x7d\41", PR__MDL__WOOCOMMERCE); } public function get_content_html() { return $this->iuygowkemiiwqmiw("\151\156\x64\x65\170", $this->get_parameters()); } public function get_content_plain() { return $this->iuygowkemiiwqmiw("\x70\154\141\151\156", $this->get_parameters()); } public function init_form_fields() { $kqmcoiicsmgwaisg = array_keys($this->placeholders); foreach ($kqmcoiicsmgwaisg as $momcykaoccoymeig => $iwiewowoqmoekyqi) { $kqmcoiicsmgwaisg[$momcykaoccoymeig] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\143\x6f\x64\x65", [], $iwiewowoqmoekyqi); gswcoeiisamakwii: } yoqakewookqoqacm: $ygoqmwaqmooosysc = sprintf(__("\101\x76\x61\151\154\x61\142\154\145\40\x70\154\x61\143\145\x68\157\154\144\145\162\x73\72\x20\x25\x73", PR__MDL__WOOCOMMERCE), implode("\54\x20", $kqmcoiicsmgwaisg)); $this->form_fields = ["\145\156\141\x62\x6c\x65\144" => [Constants::squoamkioomemiyi => "\143\x68\x65\x63\x6b\x62\x6f\x78", Constants::uissasisiuymwsmu => __("\105\156\141\x62\x6c\x65\40\x74\x68\151\x73\40\x65\155\141\151\x6c\x20\156\x6f\x74\151\146\151\x63\x61\x74\x69\x6f\x6e", PR__MDL__WOOCOMMERCE), Constants::qescuiwgsyuikume => __("\x45\x6e\141\142\154\145\57\x44\151\x73\x61\x62\x6c\x65", PR__MDL__WOOCOMMERCE), Constants::wikgqsqysyuoykse => "\x79\x65\x73"], "\x73\165\142\152\x65\143\164" => ["\144\x65\163\143\137\x74\151\x70" => true, Constants::squoamkioomemiyi => "\x74\145\170\164", Constants::qescuiwgsyuikume => __("\x53\x75\x62\152\145\143\164", PR__MDL__WOOCOMMERCE), Constants::wikgqsqysyuoykse => '', Constants::moacsmsigegyweoc => $this->get_default_subject(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\x68\x65\x61\x64\151\x6e\147" => ["\144\x65\163\143\137\x74\151\160" => true, Constants::squoamkioomemiyi => "\x74\145\x78\x74", Constants::qescuiwgsyuikume => __("\105\x6d\141\151\154\x20\x68\145\141\144\151\x6e\147", PR__MDL__WOOCOMMERCE), Constants::moacsmsigegyweoc => $this->get_default_heading(), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\x73\x75\x62\x6a\145\143\x74\137\160\x61\151\x64" => ["\144\145\x73\143\137\164\151\160" => true, Constants::squoamkioomemiyi => "\164\145\x78\164", Constants::qescuiwgsyuikume => __("\123\x75\142\152\x65\x63\164\40\50\x70\141\151\x64\x29", PR__MDL__WOOCOMMERCE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_subject()], "\150\145\x61\x64\x69\x6e\147\x5f\x70\141\151\144" => ["\144\145\x73\x63\137\164\x69\x70" => true, Constants::squoamkioomemiyi => "\x74\145\x78\164", Constants::qescuiwgsyuikume => __("\105\x6d\x61\x69\x6c\40\150\x65\x61\144\x69\156\x67\40\50\160\x61\151\x64\51", PR__MDL__WOOCOMMERCE), Constants::eqkeooqcsscoggia => $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => $this->get_default_heading()], "\141\x64\144\x69\x74\151\x6f\156\141\x6c\x5f\143\x6f\x6e\x74\145\x6e\164" => ["\x63\x73\x73" => "\x77\151\x64\x74\x68\x3a\64\60\60\160\170\73\x20\150\145\151\x67\150\x74\72\x20\x37\x35\x70\170\73", "\144\145\x73\x63\137\164\151\160" => true, Constants::squoamkioomemiyi => "\x74\x65\x78\164\141\x72\x65\x61", Constants::qescuiwgsyuikume => __("\x41\x64\x64\x69\x74\151\x6f\x6e\x61\x6c\x20\x63\x6f\x6e\x74\145\156\164", PR__MDL__WOOCOMMERCE), Constants::wikgqsqysyuoykse => $this->get_default_additional_content(), Constants::eqkeooqcsscoggia => __("\x54\145\170\x74\40\x74\157\40\141\160\x70\145\x61\x72\40\142\145\154\x6f\x77\40\164\150\x65\40\155\x61\151\156\40\x65\x6d\141\151\x6c\x20\143\157\x6e\164\145\156\164\x2e", PR__MDL__WOOCOMMERCE) . "\40" . $ygoqmwaqmooosysc, Constants::moacsmsigegyweoc => __("\x4e\57\101", PR__MDL__WOOCOMMERCE)], "\145\155\x61\151\154\x5f\x74\171\x70\145" => ["\x63\x6c\141\163\x73" => "\x65\x6d\x61\151\154\x5f\164\x79\x70\x65\x20\x77\x63\55\x65\x6e\x68\x61\x6e\143\x65\144\x2d\x73\145\x6c\145\143\x74", "\157\x70\164\151\157\x6e\163" => $this->get_email_type_options(), "\144\145\163\x63\x5f\164\x69\160" => true, Constants::squoamkioomemiyi => "\x73\x65\x6c\x65\143\x74", Constants::qescuiwgsyuikume => __("\105\155\141\151\154\40\164\171\160\x65", PR__MDL__WOOCOMMERCE), Constants::wikgqsqysyuoykse => "\150\x74\x6d\154", Constants::eqkeooqcsscoggia => __("\103\150\157\x6f\163\145\x20\x77\x68\151\x63\150\40\x66\157\162\x6d\141\x74\x20\157\146\x20\x65\155\x61\x69\154\40\164\157\40\x73\x65\x6e\x64\56", PR__MDL__WOOCOMMERCE)]]; } }
