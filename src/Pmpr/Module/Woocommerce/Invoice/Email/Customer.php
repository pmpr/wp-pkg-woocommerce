<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662cf7a1c41c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice\Email; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use WC_Email; class Customer extends WC_Email implements ConstantInterface { const iaymqwiukuokuwmi = "\x7b\157\162\144\x65\162\137\x64\x61\x74\x65\175"; const kkqewaoosgccwoyq = "\x7b\157\162\144\x65\162\x5f\156\165\x6d\142\x65\162\175"; use TemplateTrait, ComponentTrait; public function __construct() { $this->id = "\160\x64\146\x5f\x63\x75\x73\x74\157\x6d\145\162\x5f\x69\156\166\x6f\x69\x63\x65"; $this->enabled = true; $this->customer_email = true; $this->title = __("\103\165\x73\164\x6f\x6d\145\x72\40\x50\x44\106\x20\151\156\166\157\151\x63\145", PR__MDL__WOOCOMMERCE); $this->description = __("\x45\155\x61\151\x6c\x20\146\x6f\x72\40\143\165\x73\x74\157\155\x65\x72\40\x77\x69\x74\150\x20\157\x72\x64\145\x72\40\x64\145\164\x61\x69\154\x73\40\141\156\x64\40\120\104\106\40\151\156\x76\x6f\x69\x63\x65\x20\x61\164\x74\x61\143\x68\x65\x64\x2e", PR__MDL__WOOCOMMERCE); $this->placeholders = [self::iaymqwiukuokuwmi => '', self::kkqewaoosgccwoyq => '']; DecoratorHook::qcsmikeggeemccuu("\x70\144\146\x5f\151\x6e\166\x6f\151\x63\145\x5f\x73\145\156\x64\x5f\143\165\163\164\157\x6d\x65\162\x5f\151\x6e\x76\x6f\151\143\145\x5f\156\x6f\x74\151\x66\x69\x63\x61\164\151\x6f\156\x20\60\61\x20", [$this, "\x6b\147\151\155\x65\141\153\x69\x73\x69\153\153\x73\147\x63\145"]); parent::__construct(); WC_Email::__construct(); $this->manual = false; } public function kgimeakisikksgce($umwqusowiqmyseom) { $iiwwoeukeeweaisc = ManipulateWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom); if (!$iiwwoeukeeweaisc) { goto ocokwuuquaokmasc; } $this->object = $iiwwoeukeeweaisc; $this->recipient = $iiwwoeukeeweaisc->get_billing_email(); $this->placeholders[self::iaymqwiukuokuwmi] = wc_format_datetime($iiwwoeukeeweaisc->get_date_created()); $this->placeholders[self::kkqewaoosgccwoyq] = $iiwwoeukeeweaisc->get_order_number(); if (!($acuayeeoiwokyomo = $this->get_recipient())) { goto cggowoquuiwqkyew; } $iosuwkkwwioumeqg = $this->get_subject(); $ewgwqamkygiqaawc = $this->get_content(); $uykgysuswksgmwqy = $this->get_headers(); $aieaqakyuyewkkwe = $this->get_attachments(); $this->send($acuayeeoiwokyomo, $iosuwkkwwioumeqg, $ewgwqamkygiqaawc, $uykgysuswksgmwqy, $aieaqakyuyewkkwe); cggowoquuiwqkyew: ocokwuuquaokmasc: $this->restore_locale(); } public function get_default_subject() { return __("\x59\157\165\x72\40\x69\x6e\x76\157\x69\x63\145\40\146\157\162\40\x6f\x72\x64\x65\x72\x20\43\x7b\157\x72\144\x65\x72\x5f\x6e\165\155\x62\145\162\175\x20\x6f\x6e\x20\x7b\x73\x69\x74\x65\137\164\x69\164\x6c\145\x7d\40\x69\163\x20\141\164\164\141\x63\x68\x65\144", PR__MDL__WOOCOMMERCE); } public function get_default_heading() { return __("\x59\x6f\165\162\40\x69\x6e\166\157\x69\143\x65\x20\x66\157\x72\40\x6f\162\144\145\162\40\43\173\157\162\x64\x65\x72\137\156\165\x6d\x62\145\162\175\40\x69\x73\40\x61\x74\x74\141\x63\150\145\x64", PR__MDL__WOOCOMMERCE); } public function get_subject() { $iosuwkkwwioumeqg = $this->get_option("\x73\165\142\152\145\143\164", $this->get_default_subject()); return $this->format_string($iosuwkkwwioumeqg); } public function get_heading() { $iuimqckcgwwkgygo = $this->get_option("\150\x65\x61\144\x69\156\147", $this->get_default_heading()); return $this->format_string($iuimqckcgwwkgygo); } public function get_parameters() : array { $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($this->object); $qookweymeqawmcwo = []; if (!$umwqusowiqmyseom) { goto meawswgwagoqgkye; } if ($umwqusowiqmyseom->has_status(self::sgoswgskyiiwkyuo)) { goto yiwiqaqmwiogawym; } $uamcoiueqaamsqma = sprintf(__("\x48\x65\x72\145\x20\x61\162\x65\40\x74\150\x65\x20\x64\x65\164\x61\151\154\163\x20\157\x66\40\171\x6f\165\x72\40\x6f\x72\144\x65\x72\x20\x70\154\x61\143\145\x64\40\157\156\40\45\163\x3a", PR__MDL__WOOCOMMERCE), wc_format_datetime($umwqusowiqmyseom->get_date_created())); goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $iwywmkygwewiamwm = ManipulateHTML::yuawgssgauywkiia(__("\x50\141\x79\40\x66\157\x72\40\x74\x68\x69\x73\x20\x6f\162\144\145\162", PR__MDL__WOOCOMMERCE), $umwqusowiqmyseom->get_checkout_payment_url()); $uamcoiueqaamsqma = sprintf(__("\101\156\x20\x6f\x72\144\x65\162\40\150\141\163\x20\142\145\x65\156\x20\143\162\145\141\x74\x65\x64\40\x66\x6f\x72\40\171\x6f\165\40\157\156\40\45\x31\x24\163\56\40\x59\157\165\x72\40\151\x6e\166\x6f\x69\x63\x65\x20\x69\x73\40\142\145\154\x6f\x77\54\40\167\151\164\x68\40\141\x20\154\151\156\x6b\40\164\157\40\x6d\x61\153\x65\x20\x70\141\171\x6d\x65\156\164\x20\x77\150\145\x6e\40\171\x6f\x75\342\x80\x99\x72\145\x20\162\x65\x61\x64\171\x3a\x20\45\x32\44\163", PR__MDL__WOOCOMMERCE), get_bloginfo("\x6e\x61\155\x65", "\144\x69\x73\x70\154\x61\x79"), $iwywmkygwewiamwm); goacqqsgaaigyuaw: $qookweymeqawmcwo = [self::muqaqimusmckkieq => $this, self::awkcoioakcaougmq => $umwqusowiqmyseom, "\160\154\141\x69\156\x5f\164\x65\x78\x74" => false, self::eoskkkieowogacws => $uamcoiueqaamsqma, "\x73\145\156\x74\137\164\157\x5f\x61\144\155\151\x6e" => false, "\145\x6d\x61\x69\x6c\x5f\150\x65\x61\144\151\156\147" => $this->get_heading(), "\x68\x65\154\x6c\x6f\x5f\x6d\x65\x73\x73\141\147\x65" => sprintf(__("\110\x69\x20\x25\163", PR__MDL__WOOCOMMERCE), $umwqusowiqmyseom->get_billing_first_name()), "\141\x64\144\x69\164\151\x6f\156\141\x6c\x5f\x63\x6f\156\x74\145\156\x74" => $this->get_additional_content()]; meawswgwagoqgkye: return $qookweymeqawmcwo; } public function get_default_additional_content() { return __("\x54\150\x61\156\153\163\40\x66\x6f\x72\40\x75\163\151\x6e\x67\40\173\x73\x69\x74\145\x5f\141\144\x64\x72\145\163\163\175\41", PR__MDL__WOOCOMMERCE); } public function get_content_html() { return $this->iuygowkemiiwqmiw("\x69\156\x64\145\x78", $this->get_parameters()); } public function get_content_plain() { return $this->iuygowkemiiwqmiw("\x70\154\141\x69\156", $this->get_parameters()); } public function init_form_fields() { $kqmcoiicsmgwaisg = array_keys($this->placeholders); foreach ($kqmcoiicsmgwaisg as $momcykaoccoymeig => $iwiewowoqmoekyqi) { $kqmcoiicsmgwaisg[$momcykaoccoymeig] = ManipulateHTML::uuccukgasskgimsq("\x63\157\144\x65", [], $iwiewowoqmoekyqi); usqgaogkqgemuima: } wcesymwqykqoyuqk: $ygoqmwaqmooosysc = sprintf(__("\x41\x76\x61\x69\x6c\141\142\x6c\145\x20\160\154\x61\143\x65\x68\x6f\154\x64\145\x72\163\x3a\40\45\163", PR__MDL__WOOCOMMERCE), implode("\x2c\40", $kqmcoiicsmgwaisg)); $this->form_fields = ["\145\156\x61\x62\x6c\145\x64" => [self::squoamkioomemiyi => "\x63\150\145\x63\153\x62\157\170", self::uissasisiuymwsmu => __("\x45\x6e\141\x62\x6c\145\40\164\x68\x69\x73\x20\145\155\x61\x69\x6c\40\156\157\x74\151\146\x69\143\141\x74\151\157\156", PR__MDL__WOOCOMMERCE), self::qescuiwgsyuikume => __("\105\156\141\x62\x6c\145\x2f\x44\151\x73\x61\x62\x6c\x65", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => "\x79\145\163"], "\163\165\142\152\145\x63\164" => ["\x64\145\x73\143\137\164\x69\160" => true, self::squoamkioomemiyi => "\164\x65\170\x74", self::qescuiwgsyuikume => __("\123\x75\x62\x6a\x65\x63\x74", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => '', self::moacsmsigegyweoc => $this->get_default_subject(), self::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\150\x65\141\x64\151\x6e\147" => ["\x64\x65\x73\x63\x5f\164\151\x70" => true, self::squoamkioomemiyi => "\x74\x65\170\x74", self::qescuiwgsyuikume => __("\105\155\x61\151\154\40\150\x65\141\144\151\x6e\147", PR__MDL__WOOCOMMERCE), self::moacsmsigegyweoc => $this->get_default_heading(), self::eqkeooqcsscoggia => $ygoqmwaqmooosysc], "\x73\x75\142\152\145\x63\x74\x5f\160\x61\x69\x64" => ["\x64\145\163\143\137\x74\151\x70" => true, self::squoamkioomemiyi => "\x74\x65\x78\164", self::qescuiwgsyuikume => __("\123\165\142\152\145\x63\x74\x20\x28\x70\x61\151\144\51", PR__MDL__WOOCOMMERCE), self::eqkeooqcsscoggia => $ygoqmwaqmooosysc, self::moacsmsigegyweoc => $this->get_default_subject()], "\x68\145\x61\x64\x69\x6e\147\x5f\x70\x61\x69\144" => ["\x64\145\163\143\137\x74\x69\x70" => true, self::squoamkioomemiyi => "\164\x65\170\x74", self::qescuiwgsyuikume => __("\105\x6d\x61\x69\x6c\x20\x68\x65\141\144\x69\156\147\40\x28\x70\141\x69\144\51", PR__MDL__WOOCOMMERCE), self::eqkeooqcsscoggia => $ygoqmwaqmooosysc, self::moacsmsigegyweoc => $this->get_default_heading()], "\x61\144\144\x69\x74\x69\157\156\141\154\x5f\x63\x6f\x6e\x74\145\x6e\164" => ["\x63\x73\163" => "\167\151\x64\164\x68\x3a\64\60\x30\x70\x78\73\40\x68\x65\x69\147\150\x74\x3a\40\67\x35\x70\x78\x3b", "\144\145\x73\143\x5f\x74\151\160" => true, self::squoamkioomemiyi => "\x74\145\x78\164\x61\162\145\141", self::qescuiwgsyuikume => __("\x41\x64\x64\x69\164\151\x6f\156\x61\154\x20\143\157\x6e\x74\x65\156\x74", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => $this->get_default_additional_content(), self::eqkeooqcsscoggia => __("\124\x65\170\164\40\164\x6f\x20\x61\x70\160\145\141\162\x20\x62\x65\x6c\157\x77\40\164\x68\x65\40\x6d\141\x69\156\40\x65\155\141\x69\x6c\x20\x63\157\156\x74\145\156\x74\56", PR__MDL__WOOCOMMERCE) . "\40" . $ygoqmwaqmooosysc, self::moacsmsigegyweoc => __("\x4e\57\101", PR__MDL__WOOCOMMERCE)], "\145\x6d\x61\151\x6c\137\x74\171\x70\x65" => ["\x63\154\141\163\163" => "\145\155\141\151\x6c\137\164\171\x70\145\40\167\143\x2d\x65\156\150\141\x6e\143\x65\x64\55\x73\145\x6c\x65\143\164", "\157\160\164\151\157\x6e\163" => $this->get_email_type_options(), "\x64\x65\x73\x63\137\x74\x69\160" => true, self::squoamkioomemiyi => "\163\145\x6c\x65\x63\164", self::qescuiwgsyuikume => __("\x45\x6d\141\x69\x6c\40\x74\x79\x70\145", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => "\x68\164\155\154", self::eqkeooqcsscoggia => __("\103\x68\157\x6f\163\x65\x20\x77\150\x69\x63\x68\x20\146\x6f\162\155\141\164\x20\x6f\x66\40\x65\155\141\151\154\x20\164\x6f\40\163\145\156\x64\x2e", PR__MDL__WOOCOMMERCE)]]; } }
