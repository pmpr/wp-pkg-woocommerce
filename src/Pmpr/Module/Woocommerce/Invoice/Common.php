<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccfb994adf3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use DateTime; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Woocommerce\Container; use Pmpr\Module\Woocommerce\Invoice\Email\Customer; abstract class Common extends Container { const ogsyeiyceciuikeu = "\166\x69\x65\167"; const ygsicwwgewqkauyo = "\144\157\x77\156\x6c\x6f\141\x64"; const woacsaigwaqsmqaa = "\x70\x64\x66\x5f\x69\x64"; const geeoyiwewgeekiuk = "\160\144\146\x5f\156\x6f\156\143\145"; const ykyaeuqoucqeqoqy = "\x70\144\x66\x5f\155\x65\x74\150\157\x64"; const uqkoiiemwwwicsyu = "\x5f\x69\x6e\166\157\151\143\145\137\155\145\x74\x61"; const mgisuqmqaesqscso = "\137\160\x64\x66\137\x74\151\x74\x6c\145"; const ykqogmimmamwckwe = "\137\x69\x6e\x76\157\x69\x63\145\x5f\144\x61\x74\x65"; const wkuaqkmwcegcgwim = "\137\160\144\x66\x5f\164\x61\170\137\x6e\x75\155\x62\145\162"; const sokaqgmykimmecwq = "\137\160\144\146\137\x76\141\164\137\x6e\165\155\142\145\162"; const sqsaisksswaayayo = "\137\151\156\x76\x6f\151\143\145\x5f\156\165\x6d\x62\x65\x72"; const cekyaeaeeigmwysa = "\137\x69\156\166\x6f\x69\143\x65\137\143\x72\x65\x61\x74\145\144"; const owoskccgqgyycqoe = "\x5f\160\x64\x66\137\143\157\155\x70\x61\x6e\x79\137\151\156\146\x6f"; const cueaooscqucmcseu = "\137\160\144\146\137\x63\157\155\160\141\156\171\x5f\x6e\x61\155\x65"; const occkmmmsugiucmsi = "\137\160\x64\146\137\143\157\155\x70\x61\156\x79\137\x6e\x75\155\x62\145\162"; const yisqmeewaaykaeqg = "\137\160\x64\x66\x5f\162\145\x67\151\x73\164\x65\162\x65\x64\x5f\x6e\141\155\145"; const asmcgcuuyowickgq = "\x5f\160\x64\146\137\x72\145\147\151\163\x74\145\162\x65\x64\x5f\157\x66\x66\x69\143\x65"; const uicuqucwwkscyyyy = "\137\x69\x6e\x76\x6f\151\143\145\x5f\x6e\165\x6d\x62\x65\162\x5f\x64\x69\163\160\154\x61\x79"; const cgsyasqoqekikcue = "\167\x6f\x6f\x63\x6f\155\x6d\145\162\x63\x65\137\x70\x64\146\x5f\x69\x6e\x76\157\151\x63\x65\137\143\x75\162\162\x65\x6e\164\x5f\171\145\x61\x72"; const ccgqyueqwamcquoc = "\x77\x6f\x6f\x63\x6f\155\x6d\145\x72\143\145\x5f\x70\x64\146\x5f\151\156\x76\157\x69\x63\x65\137\x63\165\x72\x72\x65\x6e\164\137\x69\x6e\166\157\151\x63\145"; const auyccywgowgaakuq = "\167\x6f\157\143\x6f\155\x6d\x65\x72\x63\145\x5f\160\144\146\x5f\151\156\166\x6f\151\143\145\x5f\144\145\x6c\x65\164\145\x5f\x66\x69\154\x65\x73"; const kkeuwykwiayqoeko = "\x77\157\x6f\143\x6f\x6d\x6d\x65\162\x63\x65\x5f\x70\x64\x66\x5f\x69\156\x76\157\151\143\145\137\x75\x70\144\141\164\145\137\x70\x61\163\164\x5f\x6f\162\x64\x65\x72\x73"; protected ?Engine $engine = null; public function uykissogmuaaocsg() : ?Engine { if ($this->engine) { goto kqswcsysqawkcgye; } $this->engine = Engine::symcgieuakksimmu(); kqswcsysqawkcgye: return $this->engine; } public function oomocmisomecccym() { $skuyigkowomeowiq = ini_get("\165\x70\x6c\x6f\141\144\x5f\164\155\160\137\144\151\x72") ?: sys_get_temp_dir(); $mkomwsiykqigmqca = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x64\146\137\151\156\166\x6f\x69\143\x65\137\160\x64\x66\137\165\160\x6c\x6f\x61\144\x5f\160\x61\x74\150"), ManipulateArray::get(wp_upload_dir(), "\142\141\163\x65\x64\x69\162")); $miawkwqioaeasiig = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x64\146\137\151\156\x76\x6f\151\x63\x65\x5f\160\144\x66\137\165\x70\154\157\x61\144\137\x64\151\162"), "\167\x6f\157\x63\157\x6d\x6d\x65\162\143\x65\x2d\160\144\146\55\151\156\x76\157\151\x63\x65"); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $mmicssmagyqiooei = untrailingslashit($mkomwsiykqigmqca) . "\x2f{$miawkwqioaeasiig}"; if ($iiaumsgauuyeqksw->exists($mmicssmagyqiooei)) { goto wusciwkkckmqigms; } $iiaumsgauuyeqksw->oquguuiseiwkawkw($mmicssmagyqiooei, $miawkwqioaeasiig); wusciwkkckmqigms: if (!$iiaumsgauuyeqksw->exists($mmicssmagyqiooei)) { goto ukkcmocamwgiqayu; } $skuyigkowomeowiq = $mmicssmagyqiooei; $yuyowiyumyysomoy = strpos($mmicssmagyqiooei, "\72\x5c"); if (!$yuyowiyumyysomoy) { goto iiiccouaaqsyikae; } $skuyigkowomeowiq = str_replace("\57", "\134", $mmicssmagyqiooei); iiiccouaaqsyikae: ukkcmocamwgiqayu: return $skuyigkowomeowiq; } public function ykogmkwyscmsmuki($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if (!($this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\146\x5f\151\x6e\166\x6f\151\x63\x65\137\x63\162\145\141\x74\x65\137\160\x64\146"), true) === true)) { goto mwysseaekcsiesmm; } $this->uykissogmuaaocsg()->oskkikcewyayqmme($gkkgcoiwayaccqgm); $this->uykissogmuaaocsg()->eoagosyscaaqycai($gkkgcoiwayaccqgm); $this->uykissogmuaaocsg()->mwmuaeuyequywmsq($gkkgcoiwayaccqgm); $this->cecaguuoecmccuse("\x77\157\x6f\x63\x6f\155\155\x65\162\143\x65\x5f\145\155\141\x69\x6c\x5f\x61\164\164\141\x63\150\155\145\x6e\164\x73", [$this, "\x71\x79\155\155\165\165\x6b\165\x63\x6f\141\157\153\x67\163\157"], 10, 3); mwysseaekcsiesmm: } public function omyagiccyuacsmyq() : array { return [self::mgisuqmqaesqscso => __("\x49\156\x76\157\151\x63\145\40\124\x69\x74\154\145", PR__MDL__WOOCOMMERCE), self::uqkoiiemwwwicsyu => __("\x49\156\x76\157\x69\143\x65\40\115\145\164\141\x64\x61\164\141", PR__MDL__WOOCOMMERCE), self::sqsaisksswaayayo => __("\x49\156\x76\157\151\x63\145\x20\x4e\165\x6d\x62\x65\x72", PR__MDL__WOOCOMMERCE), self::uicuqucwwkscyyyy => __("\111\x6e\x76\x6f\151\x63\145\40\x4e\x75\155\x62\x65\x72\x20\104\151\x73\x70\x6c\141\x79", PR__MDL__WOOCOMMERCE), self::cekyaeaeeigmwysa => __("\x49\156\166\157\x69\x63\145\x20\103\x72\x65\141\x74\145\x64\x20\x44\x61\x74\145", PR__MDL__WOOCOMMERCE), self::ykqogmimmamwckwe => __("\x49\x6e\x76\157\x69\x63\x65\40\104\x61\164\145", PR__MDL__WOOCOMMERCE), self::wkuaqkmwcegcgwim => __("\x49\x6e\x76\157\151\x63\145\40\124\x61\170\x20\116\x75\x6d\142\x65\x72", PR__MDL__WOOCOMMERCE), self::sokaqgmykimmecwq => __("\x49\x6e\166\157\x69\x63\x65\40\126\x61\164\x20\x4e\165\x6d\142\x65\x72", PR__MDL__WOOCOMMERCE), self::cueaooscqucmcseu => __("\111\156\x76\157\x69\x63\145\40\103\x6f\x6d\160\x61\156\171\40\116\x61\155\145", PR__MDL__WOOCOMMERCE), self::owoskccgqgyycqoe => __("\111\156\x76\157\x69\143\x65\40\x43\x6f\155\160\141\156\x79\x20\111\x6e\146\157", PR__MDL__WOOCOMMERCE), self::occkmmmsugiucmsi => __("\x49\156\x76\x6f\151\143\x65\x20\x43\157\x6d\x70\141\x6e\171\x20\116\x75\155\x62\x65\162", PR__MDL__WOOCOMMERCE), self::yisqmeewaaykaeqg => __("\x49\x6e\166\x6f\151\143\x65\40\x52\145\x67\151\x73\164\145\162\x65\x64\x20\116\x61\155\x65", PR__MDL__WOOCOMMERCE), self::asmcgcuuyowickgq => __("\111\x6e\166\157\151\x63\x65\x20\x52\145\147\x69\163\164\145\162\145\x64\x20\x4f\x66\x66\151\x63\x65", PR__MDL__WOOCOMMERCE)]; } public function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { return Setting::symcgieuakksimmu()->eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee); } public function eacciqkqyiyiawiy($umwqusowiqmyseom, $aiowsaccomcoikus) { $ksaameoqigiaoigg = $this->eiwcuqigayigimak($aiowsaccomcoikus); return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\146\137\x69\x6e\166\x6f\151\x63\145\x5f\x73\x65\164\137{$aiowsaccomcoikus}"), $ksaameoqigiaoigg, $umwqusowiqmyseom); } protected function igawqaomowicuayw($uusmaiomayssaecw, $post = null) { return ManipulatePost::igawqaomowicuayw($uusmaiomayssaecw, $post); } public function oquyoauwcskgeeis($umwqusowiqmyseom, $uusmaiomayssaecw = null) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($uusmaiomayssaecw) { goto amgsueumgaguceaa; } $sogksuscggsicmac = $this->igawqaomowicuayw(self::uqkoiiemwwwicsyu, $gkkgcoiwayaccqgm); goto gygwewcqsmwqismo; amgsueumgaguceaa: $sogksuscggsicmac = $this->igawqaomowicuayw($uusmaiomayssaecw, $gkkgcoiwayaccqgm); gygwewcqsmwqismo: return $sogksuscggsicmac; } public function aioemwomyweyeoug($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); return $this->igawqaomowicuayw(self::uicuqucwwkscyyyy, $gkkgcoiwayaccqgm); } public function cowkagmcecukgoya($umwqusowiqmyseom) : string { $eusockqasqqmoess = ''; if (!$umwqusowiqmyseom) { goto uougwgeyiokewkkm; } $eusockqasqqmoess = esc_html($this->aioemwomyweyeoug($umwqusowiqmyseom)); uougwgeyiokewkkm: return $eusockqasqqmoess; } public function wceqweesyywiouuy($gkkgcoiwayaccqgm = null) : ?string { $oiegiwogmwmawkeo = $this->eiwcuqigayigimak(Setting::yauwwgumiqaqgeco, Setting::kiecoskamwokisyg); $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\x66\137\151\156\x76\157\x69\x63\x65\137\160\x61\x70\145\162\137\163\151\x7a\145"), $oiegiwogmwmawkeo, $gkkgcoiwayaccqgm); if (is_string($oiegiwogmwmawkeo)) { goto gommacygsykyussk; } $oiegiwogmwmawkeo = Setting::kiecoskamwokisyg; gommacygsykyussk: return $oiegiwogmwmawkeo; } public function wqgmukisueesakym($gkkgcoiwayaccqgm = null) : ?string { $gykycuqccwyaeook = $this->eiwcuqigayigimak(Setting::aykcssegkcassmua, Setting::gioiusoscccekmik); $gykycuqccwyaeook = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\146\x5f\x69\x6e\x76\157\x69\143\145\x5f\x70\141\x70\145\162\x5f\x6f\162\151\145\156\x74\x61\x74\151\157\x6e"), $gykycuqccwyaeook, $gkkgcoiwayaccqgm); if (is_string($gykycuqccwyaeook)) { goto ukqocwewouckikso; } $gykycuqccwyaeook = Setting::gioiusoscccekmik; ukqocwewouckikso: return $gykycuqccwyaeook; } public function wmqseywcumycsyyu($umwqusowiqmyseom, $iggccakyiqoywyks = self::amcogigwsaqssuai, $mmeskwecseguqmai = false, $ccamueccusigaaio = "\x69\x6e\x76\x6f\x69\143\145") { $sogksuscggsicmac = null; $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom); if (!$umwqusowiqmyseom) { goto ieqesiiageaauiuw; } $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($ccamueccusigaaio == "\151\x6e\x76\157\151\143\x65" && ($ogegikscwkaowsqa = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gkkgcoiwayaccqgm))) { goto sioekkmekwygemyc; } if ($ccamueccusigaaio == self::awkcoioakcaougmq && ($wmgiiumwscoyqkqa = $umwqusowiqmyseom->get_date_created())) { goto uimeeckqksqeekqq; } if ($iggccakyiqoywyks == self::amcogigwsaqssuai && $umwqusowiqmyseom->get_status() == self::amcogigwsaqssuai) { goto ucqmumuygcywwqma; } $ocogsiouoiuuguym = $umwqusowiqmyseom->get_date_created(); goto uykousayyomcaeaa; ucqmumuygcywwqma: $ocogsiouoiuuguym = $this->sayeeewgsiaaskww($gkkgcoiwayaccqgm); uykousayyomcaeaa: goto iuuuususuuuaieem; uimeeckqksqeekqq: $ocogsiouoiuuguym = $wmgiiumwscoyqkqa; iuuuususuuuaieem: if (!($mmeskwecseguqmai && !$ocogsiouoiuuguym)) { goto kocqqoyymosmuksu; } $ocogsiouoiuuguym = $umwqusowiqmyseom->get_date_created(); kocqqoyymosmuksu: if ($ocogsiouoiuuguym) { goto uqokiksoqcwwqgio; } $sogksuscggsicmac = ''; goto qukocuwgakemmyga; uqokiksoqcwwqgio: $sogksuscggsicmac = $this->cqswciouesmewqke($ocogsiouoiuuguym); qukocuwgakemmyga: goto yiowgigkkwsoqcci; sioekkmekwygemyc: $sogksuscggsicmac = $ogegikscwkaowsqa; yiowgigkkwsoqcci: ieqesiiageaauiuw: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x64\x66\137\x64\151\x73\160\x6c\x61\x79\x5f\x69\156\x76\157\151\143\145\137\x64\141\x74\x65"), $sogksuscggsicmac, $umwqusowiqmyseom, $iggccakyiqoywyks, $mmeskwecseguqmai, $ccamueccusigaaio); } public function sayeeewgsiaaskww($umwqusowiqmyseom) : ?string { $ocogsiouoiuuguym = ManipulateWoocommerce::sayeeewgsiaaskww($umwqusowiqmyseom); if ($ocogsiouoiuuguym) { goto oyeyomcgkmgymogq; } if ($qyiggqswsicqwuyi = $this->oquyoauwcskgeeis($umwqusowiqmyseom)) { goto gamqcwuwkikwqoay; } $egaioscwooawuigc = $this->aioemwomyweyeoug($umwqusowiqmyseom); $eioamqeaccimmisg = ManipulateDatabase::gmogewiwceqokqmy([self::cgiswgcumueqgcmw => 1, self::ugsuecoyuqcamsac => "\143\157\155\155\145\156\164\163", self::iowgsqgiaamyuswi => ["\143\157\x6d\155\145\156\164\x5f\160\x6f\163\x74\x5f\151\x64" => ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom), "\143\157\x6d\x6d\145\156\x74\137\x63\157\x6e\164\145\156\x74" => [self::ciyoccqkiamemcmm => "\x25\x20{$egaioscwooawuigc}\40\45", self::eugyciakiowwcuwm => self::augocsiaqqukkuui], "\x63\157\x6d\x6d\x65\156\164\137\x74\171\x70\145" => [self::ciyoccqkiamemcmm => "\x6f\162\144\x65\162\x5f\156\x6f\x74\x65"]]]); $ocogsiouoiuuguym = ManipulateArray::get($eioamqeaccimmisg, "\x63\157\x6d\x6d\145\156\164\137\144\x61\164\145"); goto mscyggqcesgqqksu; gamqcwuwkikwqoay: $ocogsiouoiuuguym = ManipulateArray::get($qyiggqswsicqwuyi, self::cekyaeaeeigmwysa); mscyggqcesgqqksu: oyeyomcgkmgymogq: return $ocogsiouoiuuguym; } public function cqswciouesmewqke($ocogsiouoiuuguym = null) : ?string { $qquguecmwwmwomew = $this->eiwcuqigayigimak(Setting::omaocaaweuesmwwu, Setting::gocgkgumeiwkkkog); $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq(); $wucumyeqeqigucwy = DateTime::createFromFormat($saqmwwmqiwmkiwaa, $ocogsiouoiuuguym); if (!$wucumyeqeqigucwy) { goto iesekaeqeomeuaui; } $ocogsiouoiuuguym = $wucumyeqeqigucwy->format($qquguecmwwmwomew); iesekaeqeomeuaui: if (!($cqgoimumaewouews = strtotime($ocogsiouoiuuguym))) { goto wsesqmcqoiyyqkqi; } $ocogsiouoiuuguym = date_i18n($saqmwwmqiwmkiwaa, $cqgoimumaewouews); wsesqmcqoiyyqkqi: return $ocogsiouoiuuguym; } public function qymmuukucoaokgso($aiooqyausygaasqm = null, $aokagokqyuysuksm = null, $umwqusowiqmyseom = null) : array { if (!($aokagokqyuysuksm && $umwqusowiqmyseom && $this->ygksyiageqgkwwei() && $this->kyuqiuyumwgmieis())) { goto oeocukauoyosicso; } $wgqagommioaakgak = $this->eiwcuqigayigimak(Setting::qoyosuyaiwgyqmoo, []); $wgqagommioaakgak[] = "\x70\x64\146\137\x63\165\163\164\x6f\x6d\145\x72\137\x69\x6e\x76\x6f\151\x63\x65"; $wgqagommioaakgak[] = "\x63\165\x73\x74\x6f\155\x65\162\x5f\x63\157\155\x70\x6c\x65\x74\x65\144\x5f\157\x72\144\145\162"; $wgqagommioaakgak[] = "\143\165\163\x74\157\155\x65\x72\137\x63\157\x6d\160\154\x65\164\145\144\x5f\x72\x65\156\x65\167\x61\x6c\x5f\x6f\x72\x64\x65\162"; $wgqagommioaakgak = array_unique($wgqagommioaakgak); $wgqagommioaakgak = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\x66\137\x69\x6e\x76\157\151\x63\145\x5f\x65\x6d\x61\151\154\137\151\144\163"), $wgqagommioaakgak, $umwqusowiqmyseom); if (!($wgqagommioaakgak && in_array($aokagokqyuysuksm, $wgqagommioaakgak))) { goto oimkeqocuguqqsqk; } $qouueimogiessisw = [Setting::mgkwuiskoeewkksa, Setting::ygskawocmcykeoea]; if (!in_array($this->eiwcuqigayigimak(Setting::cacuakuykqiumuic), $qouueimogiessisw)) { goto wkwamkgkwykeqkec; } $iymiiogckyomckqk = $this->uykissogmuaaocsg()->siciqscsekqaqess()->imasugowgqyekses($umwqusowiqmyseom); $iymiiogckyomckqk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\146\137\x69\x6e\166\157\x69\x63\145\x5f\155\157\x64\x69\146\x79\137\x61\x74\x74\141\x63\x68\155\x65\x6e\x74"), $iymiiogckyomckqk, $aokagokqyuysuksm, $umwqusowiqmyseom); if (!$iymiiogckyomckqk) { goto mogkoocsoeuyoqqa; } $aiooqyausygaasqm[] = $iymiiogckyomckqk; mogkoocsoeuyoqqa: wkwamkgkwykeqkec: oimkeqocuguqqsqk: oeocukauoyosicso: return array_unique($aiooqyausygaasqm); } public function imuqeaaqmwwkgqui($sociqikgoyemqaac, $qqueccegigsqmmmg = [], $ywmkwiwkosakssii = []) { if ($qqueccegigsqmmmg) { goto suqceasgacskcmkc; } $qqueccegigsqmmmg = $this->iaicueasqoiusuoo($ywmkwiwkosakssii); suqceasgacskcmkc: return str_replace(array_keys($qqueccegigsqmmmg), $qqueccegigsqmmmg, $sociqikgoyemqaac); } public function iaicueasqoiusuoo($ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kumuoysauoagaiiy => null, self::awkcoioakcaougmq => null, self::ackcaikowcokggsc => []]); $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::ackcaikowcokggsc, []); $qqueccegigsqmmmg = []; $kegkegukuqqiakko = ["\110" => "\107", "\x48\110" => "\110", "\104" => "\152", "\x44\x44" => "\144", "\115" => "\x6e", "\116" => "\x69", "\123" => "\163", "\115\x4d" => "\x6d", "\131\131" => "\171", "\x79\x79" => "\171", "\131\x59\131\131" => "\131", "\x79\x65\x61\x72" => "\x59", "\x59\x45\101\122" => "\x59", "\x6d\x6f\156" => "\115", "\155\x6f\x6e\164\x68" => "\x46"]; $ocogsiouoiuuguym = ManipulateArray::get($ywmkwiwkosakssii, self::kumuoysauoagaiiy); foreach ($kegkegukuqqiakko as $uusmaiomayssaecw => $saqmwwmqiwmkiwaa) { if (!($ooiewiwkegguusum && !in_array(strtolower($uusmaiomayssaecw), $ooiewiwkegguusum))) { goto uckewycoogsogwiy; } goto kwiggogcgciwuwqk; uckewycoogsogwiy: if ($ocogsiouoiuuguym) { goto ikuuiauwouuqawuw; } $eqgoocgaqwqcimie = date_i18n($saqmwwmqiwmkiwaa); goto yoqakewookqoqacm; ikuuiauwouuqawuw: $eqgoocgaqwqcimie = date($saqmwwmqiwmkiwaa, strtotime($ocogsiouoiuuguym)); yoqakewookqoqacm: $qqueccegigsqmmmg["\173\173{$uusmaiomayssaecw}\x7d\175"] = $eqgoocgaqwqcimie; kwiggogcgciwuwqk: } yykqaowwsqgqysmq: if (!($umwqusowiqmyseom = ManipulateArray::get($ywmkwiwkosakssii, self::awkcoioakcaougmq))) { goto iwsmmkqaoksmocok; } $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $ogegikscwkaowsqa = $this->wmqseywcumycsyyu($umwqusowiqmyseom, self::amcogigwsaqssuai, true); $egaioscwooawuigc = $this->cowkagmcecukgoya($umwqusowiqmyseom); if ($egaioscwooawuigc) { goto gswcoeiisamakwii; } $egaioscwooawuigc = $gkkgcoiwayaccqgm; gswcoeiisamakwii: $osseiiwmsakcyeqi = $this->eiwcuqigayigimak(Setting::aockomuqgkgqyaki, get_bloginfo("\x6e\x61\x6d\145")); $qgowgcsuycquswmo = ["\143\x6f\x6d\160\x61\156\x79" => $osseiiwmsakcyeqi, "\103\x4f\115\120\x41\116\x59" => $osseiiwmsakcyeqi, "\151\156\166\x6f\151\143\145\137\144\141\164\x65" => $ogegikscwkaowsqa, "\x49\x4e\126\117\111\x43\x45\137\x44\x41\x54\x45" => $ogegikscwkaowsqa, "\151\156\x76\157\x69\x63\145\x5f\x6e\x75\155\x62\145\x72" => $egaioscwooawuigc, "\111\116\126\117\x49\x43\105\137\x4e\x55\x4d\x42\105\x52" => $egaioscwooawuigc]; foreach ($qgowgcsuycquswmo as $uusmaiomayssaecw => $mmomgiqeqykoeukg) { if (!($ooiewiwkegguusum && !in_array(strtolower($uusmaiomayssaecw), $ooiewiwkegguusum))) { goto emqswoaawgeyosmi; } goto ocywegekakimmwcq; emqswoaawgeyosmi: $qqueccegigsqmmmg["\x7b\173{$uusmaiomayssaecw}\175\175"] = $mmomgiqeqykoeukg; ocywegekakimmwcq: } yuimwyoywaiiqacs: iwsmmkqaoksmocok: return $qqueccegigsqmmmg; } public function awwskyoimucwkeoa() : array { $sscaicokimsuuiyw = $this->eiwcuqigayigimak(Setting::cysoyggakakyywwg, self::amcogigwsaqssuai); $oqseeekuqisekiwy = []; switch ($sscaicokimsuuiyw) { case self::eaaqiksmkkksomaa: $oqseeekuqisekiwy = [self::qgmyyeewkieecqck, self::amcogigwsaqssuai, self::sgoswgskyiiwkyuo, self::eaaqiksmkkksomaa]; goto esikeyqyuikmaiek; case self::sgoswgskyiiwkyuo: $oqseeekuqisekiwy = [self::qgmyyeewkieecqck, self::amcogigwsaqssuai, self::sgoswgskyiiwkyuo]; goto esikeyqyuikmaiek; case self::qgmyyeewkieecqck: $oqseeekuqisekiwy = [self::qgmyyeewkieecqck, self::amcogigwsaqssuai]; goto esikeyqyuikmaiek; case self::amcogigwsaqssuai: $oqseeekuqisekiwy = [self::amcogigwsaqssuai]; goto esikeyqyuikmaiek; } okkmcocqokkskasy: esikeyqyuikmaiek: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x64\x66\x5f\151\156\166\157\x69\x63\x65\x5f\157\x72\x64\x65\x72\137\x73\164\141\x74\165\163\145\163"), $oqseeekuqisekiwy, $sscaicokimsuuiyw); } public function yukswyoieqekakke($gkkgcoiwayaccqgm = null) : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x64\x66\137\x69\x6e\x76\157\151\143\145\x5f\150\164\155\154\65\137\160\141\162\163\145\162\137\x65\x6e\x61\x62\154\x65"), true, $gkkgcoiwayaccqgm); } public function ygksyiageqgkwwei() : bool { return extension_loaded("\x6d\x62\163\164\x72\x69\x6e\x67"); } public function kyuqiuyumwgmieis() : bool { return extension_loaded("\151\143\x6f\156\166"); } public function gaisoeyogkaguouo($umwqusowiqmyseom) { $woocommerce = ManipulateWoocommerce::kkewuuisyiscmgyc(); if (!$woocommerce) { goto ikqeeaysmqgcgawq; } $ockoeumsksqeoiyo = $woocommerce->mailer(); if (!$ockoeumsksqeoiyo) { goto esaqcqqwuussiiwo; } $awwassyawiguwyua = $ockoeumsksqeoiyo->emails; $owaiikyuwwwmswgc = ManipulateArray::get($awwassyawiguwyua, $this->mmkekmsmgoyksqcy()); if (!$owaiikyuwwwmswgc instanceof Customer) { goto qiiigwkqeoewsuwm; } $owaiikyuwwwmswgc->kgimeakisikksgce($umwqusowiqmyseom); qiiigwkqeoewsuwm: esaqcqqwuussiiwo: ikqeeaysmqgcgawq: } public function mmkekmsmgoyksqcy() : string { return DecoratorSanitize::key(Customer::class); } public function esokicggweaimaeo() : bool { $mkucggyaiaukqoce = DecoratorUser::immcwcemcmyosyoo(); return $mkucggyaiaukqoce && in_array("\141\x64\155\x69\x6e\x69\163\x74\162\141\164\157\x72", $mkucggyaiaukqoce->roles); } }
