<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a1f95885f8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Admin extends Common { const kiumkuawagkiqyyo = "\160\x64\x66\x5f\151\156\x76\157\x69\x63\x65\137\x6e\x75\155"; const uiyyaciimwoaokgo = "\x70\144\146\x5f\145\155\141\151\x6c\137\151\156\x76\157\x69\x63\x65"; const cysoyggakakyywwg = "\x70\144\x66\x5f\143\162\145\x61\164\145\x5f\151\x6e\166\x6f\151\143\145"; const kykiacaosyqigmgm = "\x70\144\x66\x5f\143\162\x65\x61\164\145\137\145\x6d\141\x69\154\x5f\x69\156\166\157\x69\x63\145"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\x6e\x5f\x69\156\x69\x74", [$this, "\151\x69\x67\x79\153\x79\171\157\143\x6d\161\141\157\x77\155\x6d"])->qcsmikeggeemccuu("\x6d\141\156\141\x67\x65\137\163\x68\x6f\160\137\x6f\x72\144\145\x72\x5f\x70\x6f\163\x74\163\137\143\x75\x73\164\157\155\137\x63\x6f\154\165\x6d\156", [$this, "\163\157\143\x61\x73\x71\x67\x6d\x75\143\161\151\x73\157\x79\161"], 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\142\x75\x6c\x6b\137\141\x63\x74\x69\157\156\x73\55\x65\144\x69\164\55\x73\x68\x6f\160\x5f\157\162\144\145\162", [$this, "\x75\x73\x71\x73\151\171\x73\145\x67\x77\x6f\x61\x6f\x67\x6d\x61"])->cecaguuoecmccuse("\155\x61\x6e\141\147\x65\137\145\x64\151\164\x2d\163\x68\157\160\x5f\x6f\162\x64\x65\162\x5f\143\x6f\x6c\165\155\156\163", [$this, "\x6d\151\x79\x6b\147\171\165\x6f\x75\163\x6d\x71\x79\151\145\171"]); $this->cecaguuoecmccuse("\150\x61\156\x64\154\145\137\142\x75\x6c\x6b\137\141\x63\x74\x69\x6f\x6e\x73\x2d\145\144\x69\x74\55\163\150\157\x70\x5f\x6f\162\144\145\x72", [$this, "\147\x77\x69\161\x79\x67\153\x73\x6f\x6b\x63\x79\145\x63\x6b\x71"], 10, 3); $this->cecaguuoecmccuse("\167\x6f\157\143\x6f\155\155\x65\162\x63\x65\x5f\x61\x64\155\x69\x6e\137\157\x72\144\145\162\137\x61\x63\x74\x69\157\156\163", [$this, "\143\x71\x6f\x67\x69\x71\x69\x71\x65\x67\x67\171\171\x77\x6b\x71"], 11, 2); } public function ayyeiqikwseeegqg($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($gkkgcoiwayaccqgm) { goto sycygoiaiqqageym; } global $post; $gkkgcoiwayaccqgm = ManipulatePost::mwikyscisascoeea($post); sycygoiaiqqageym: return $gkkgcoiwayaccqgm; } public function yiqqcseogewckugw($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm)) { goto gygawoqywkukmqee; } $ccowyogiqwikkkie["\163\145\156\x64\55\x70\x64\x66"] = [ "\165\162\x6c" => "\43", "\x6e\x61\155\x65" => __("\x53\145\156\144\x20\120\x44\106", PR__MDL__WOOCOMMERCE), "\x61\x63\x74\x69\157\x6e" => "\163\x65\x6e\144\55\x70\144\x66", ]; gygawoqywkukmqee: return $ccowyogiqwikkkie; } public function cqogiqiqeggyywkq($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); $musqmgugskoycykq = true; if (!($this->eiwcuqigayigimak(Setting::cysoyggakakyywwg) == self::ayeiaucmmgooomya && !$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm))) { goto kciouyuaqkyqomam; } $musqmgugskoycykq = false; kciouyuaqkyqomam: if (!$musqmgugskoycykq) { goto wwkgkaecgiwggcck; } $ccowyogiqwikkkie["\144\x6f\167\x6e\x6c\x6f\x61\x64\137\x70\x64\x66"] = [self::auqoykcmsiauccao => DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gkkgcoiwayaccqgm, ManipulateServer::ekcymmyqoceukosc()), self::NAME => __("\104\x6f\x77\156\x6c\157\141\144\40\x50\104\x46", PR__MDL__WOOCOMMERCE), self::uqgcmmosieyimiku => "\x64\x6f\x77\156\x6c\x6f\x61\144\55\x70\144\x66"]; wwkgkaecgiwggcck: return $ccowyogiqwikkkie; } public function iigykyyocmqaowmm() { $cgsaiiokwycueeeo = ManipulateServer::get(self::woacsaigwaqsmqaa); if (!($cgsaiiokwycueeeo && is_admin())) { goto qsygcycwieukkgwc; } $cgsaiiokwycueeeo = stripslashes($cgsaiiokwycueeeo); $iiwwoeukeeweaisc = ManipulateWoocommerce::mmmcswscsiecscwg($cgsaiiokwycueeeo); if (!$iiwwoeukeeweaisc) { goto umgaesggesswoaqe; } $this->uykissogmuaaocsg()->siciqscsekqaqess()->imasugowgqyekses($iiwwoeukeeweaisc, true); umgaesggesswoaqe: qsygcycwieukkgwc: } public function gwiqygksokcyeckq($cekycuiyagyouawk, $aiamqeawckcsuaou, $oysoyeaucuawyaky) : string { $kuuugksiksqcaaaa = in_array($aiamqeawckcsuaou, [self::uiyyaciimwoaokgo, self::cysoyggakakyywwg, self::kykiacaosyqigmgm]); if (!($kuuugksiksqcaaaa && is_array($oysoyeaucuawyaky) && $oysoyeaucuawyaky)) { goto cmqucgoewuyieoyk; } $oysoyeaucuawyaky = array_map("\x61\142\x73\151\156\x74", $oysoyeaucuawyaky); sort($oysoyeaucuawyaky); foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) { switch ($aiamqeawckcsuaou) { case self::uiyyaciimwoaokgo: $this->kmmqugkowuimgwuk($aokagokqyuysuksm); goto iqcogmsguwoikame; case self::cysoyggakakyywwg: $this->iseiakqweswykkys($aokagokqyuysuksm); goto iqcogmsguwoikame; case self::kykiacaosyqigmgm: $this->aqimiwwqygqeiuqk($aokagokqyuysuksm); goto iqcogmsguwoikame; } gimmuoqwckiseaik: iqcogmsguwoikame: quwcqmyokicssyew: } kiwqkcaekqqyuegq: cmqucgoewuyieoyk: return esc_url_raw($cekycuiyagyouawk); } public function kmmqugkowuimgwuk($aokagokqyuysuksm) { if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto yqykqysmiquwoasu; } $this->gaisoeyogkaguouo($aokagokqyuysuksm); yqykqysmiquwoasu: } public function iseiakqweswykkys($aokagokqyuysuksm) { if ($this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto ayyweymyuuiauamo; } $this->ykogmkwyscmsmuki($aokagokqyuysuksm); ayyweymyuuiauamo: } public function aqimiwwqygqeiuqk($aokagokqyuysuksm) { $this->iseiakqweswykkys($aokagokqyuysuksm); $this->kmmqugkowuimgwuk($aokagokqyuysuksm); } public function usqsiysegwoaogma($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\x65\x64\x69\164"); $ccowyogiqwikkkie[self::cysoyggakakyywwg] = __("\103\162\x65\141\x74\x65\40\111\x6e\166\x6f\x69\143\145\50\163\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::kykiacaosyqigmgm] = __("\x43\x72\x65\x61\164\x65\40\141\156\144\40\x45\x6d\141\151\154\40\111\156\x76\x6f\151\x63\145\50\x73\51", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::uiyyaciimwoaokgo] = __("\105\x6d\141\x69\154\40\x49\x6e\166\x6f\x69\143\x65\x28\x73\x29", PR__MDL__WOOCOMMERCE); return $ccowyogiqwikkkie; } public function socasqgmucqisoyq($qgoqiacsiccwoawi) { global $post; $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post); if (!($gcqseksiskwueksc && $qgoqiacsiccwoawi == self::kiumkuawagkiqyyo)) { goto omugkkesagcyagmk; } if (!($eusockqasqqmoess = ManipulatePost::igawqaomowicuayw(self::uicuqucwwkscyyyy, $gcqseksiskwueksc))) { goto mosqsmqimqgqoase; } $ocogsiouoiuuguym = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gcqseksiskwueksc); $aqykuigiuwmmcieu = ManipulateHTML::yuawgssgauywkiia("{$eusockqasqqmoess}\74\142\162\x3e{$ocogsiouoiuuguym}", DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gcqseksiskwueksc, ManipulateServer::ekcymmyqoceukosc())); echo $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\x66\x5f\151\x6e\x76\x6f\x69\x63\145\137\156\165\x6d\x62\x65\162\137\157\162\144\145\x72\x5f\x73\143\x72\x65\x65\156\x5f\x6f\x75\164\160\x75\x74"), $aqykuigiuwmmcieu, $eusockqasqqmoess, $ocogsiouoiuuguym, $gcqseksiskwueksc); mosqsmqimqgqoase: omugkkesagcyagmk: } public function miykgyuousmqyiey($wkkweuacukumqmya) : array { return ManipulateArray::ooskewwqwieyucec($wkkweuacukumqmya, [self::kiumkuawagkiqyyo => __("\111\156\x76\157\x69\143\x65", PR__MDL__WOOCOMMERCE)], 2); } }
