<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d875f399c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Engine extends Common { protected ?Generator $generator = null; public function siciqscsekqaqess() : ?Generator { if ($this->generator) { goto kocqqoyymosmuksu; } $this->generator = Generator::symcgieuakksimmu(); kocqqoyymosmuksu: return $this->generator; } public function sywqsimcesscwamc() { $yeacayasgueouoqc = null; $wsgaqoyasieoiwuw = $this->eiwcuqigayigimak(Setting::aegqguumccieqwyk); $seauiwyeoycowegg = [self::ugsuecoyuqcamsac => "\x70\157\x73\164\x6d\x65\164\141", self::cgiswgcumueqgcmw => 1, self::cqcimoqckgmaacyw => "\x43\101\123\124\x28\x6d\145\x74\141\x5f\x76\141\154\165\x65\x73\40\101\123\x20\x53\111\107\116\105\x44\51", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::sqsaisksswaayayo]]; if (!$wsgaqoyasieoiwuw) { goto uqokiksoqcwwqgio; } $yooaaeuioeawcqms = date("\131\x2d\x30\61\55\60\61"); $seusouwwgeqagsce = date("\131\x2d\61\x32\55\63\x31"); $seauiwyeoycowegg[self::iowgsqgiaamyuswi]["\x70\157\x73\164\137\151\x64"] = [self::ugsuecoyuqcamsac => "\x70\x6f\163\164\x6d\145\x74\x61", self::soquiwyuimckgiow => "\160\x6f\x73\164\x5f\x69\144", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::cekyaeaeeigmwysa, [self::ciyoccqkiamemcmm => $yooaaeuioeawcqms, self::meisqwykgaymauka => self::iwmgegikocuwggua, self::eugyciakiowwcuwm => "\x3e\x3d"], [self::ciyoccqkiamemcmm => $seusouwwgeqagsce, self::meisqwykgaymauka => self::iwmgegikocuwggua, self::eugyciakiowwcuwm => "\x3c\75"]]]; uqokiksoqcwwqgio: $eioamqeaccimmisg = ManipulateDatabase::gmogewiwceqokqmy($seauiwyeoycowegg); if (!$eioamqeaccimmisg) { goto qukocuwgakemmyga; } $yeacayasgueouoqc = ManipulateArray::get($eioamqeaccimmisg, self::iwmgegikocuwggua); qukocuwgakemmyga: if (!$yeacayasgueouoqc) { goto ieqesiiageaauiuw; } $mmwoqcwiwemokkue = $yeacayasgueouoqc + 1; goto gamqcwuwkikwqoay; ieqesiiageaauiuw: $occuycyyyycsosao = ManipulateDatabase::qaumqeeagueuqkcg([self::ugsuecoyuqcamsac => "\x70\x6f\x73\164\x6d\145\x74\x61", self::soquiwyuimckgiow => "\x63\157\165\x6e\x74\50\52\x29", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::sqsaisksswaayayo]]); $mmwoqcwiwemokkue = 1; $mesieoomaagsgyqe = $this->eiwcuqigayigimak(Setting::uumqsyagoeuaaimw, 0); if (!$mesieoomaagsgyqe) { goto yiowgigkkwsoqcci; } if (!(!$wsgaqoyasieoiwuw || $occuycyyyycsosao == 0)) { goto sioekkmekwygemyc; } $mmwoqcwiwemokkue = $mesieoomaagsgyqe; sioekkmekwygemyc: yiowgigkkwsoqcci: gamqcwuwkikwqoay: $acwmgkosiwekkosk = $this->eiwcuqigayigimak(Setting::ysoqycicuciiyuaw, 0); if (!(!$wsgaqoyasieoiwuw && $acwmgkosiwekkosk > $mmwoqcwiwemokkue)) { goto mscyggqcesgqqksu; } $mmwoqcwiwemokkue = $acwmgkosiwekkosk; mscyggqcesgqqksu: return $mmwoqcwiwemokkue; } public function ywgkowokogikyoem($umwqusowiqmyseom) : string { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $egaioscwooawuigc = ManipulatePost::igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); $qqueccegigsqmmmg = $this->iaicueasqoiusuoo([self::awkcoioakcaougmq => $umwqusowiqmyseom]); $yuwymayicwwqiske = esc_html($this->eiwcuqigayigimak(Setting::mqcukmwiaqukgywi)); $yuwymayicwwqiske = $this->imuqeaaqmwwkgqui($yuwymayicwwqiske, $qqueccegigsqmmmg); $scqcgogsiaiksiiq = esc_html($this->eiwcuqigayigimak(Setting::wywskiqiowiagemy)); $scqcgogsiaiksiiq = $this->imuqeaaqmwwkgqui($scqcgogsiaiksiiq, $qqueccegigsqmmmg); if (!($wukmmiqowweyucaa = $this->eiwcuqigayigimak(Setting::osgqakokgccsywgw))) { goto oyeyomcgkmgymogq; } $egaioscwooawuigc = str_pad($egaioscwooawuigc, strlen($wukmmiqowweyucaa), "\60", STR_PAD_LEFT); oyeyomcgkmgymogq: return $yuwymayicwwqiske . $egaioscwooawuigc . $scqcgogsiaiksiiq; } public function mwmuaeuyequywmsq($umwqusowiqmyseom) { $qummwmsmceweyoqo = [self::ykqogmimmamwckwe => $this->eoagosyscaaqycai($umwqusowiqmyseom), self::sqsaisksswaayayo => $this->oskkikcewyayqmme($umwqusowiqmyseom), self::cekyaeaeeigmwysa => current_time("\155\x79\163\161\x6c"), self::mgisuqmqaesqscso => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wmamggmmccsqcqwa), self::wkuaqkmwcegcgwim => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qiookqywwgemeamk), self::sokaqgmykimmecwq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kwmkawqoiesweswy), self::owoskccgqgyycqoe => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wsccocqiicegwska), self::cueaooscqucmcseu => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::aockomuqgkgqyaki), self::occkmmmsugiucmsi => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kosymqioioyguigs), self::yisqmeewaaykaeqg => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::ekyyyewmowkgcgay), self::asmcgcuuyowickgq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qaowyaoaqwacmgeo), self::uicuqucwwkscyyyy => $this->ywgkowokogikyoem($umwqusowiqmyseom)]; $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); ManipulatePost::ksmqawcowkmegigw(self::uqkoiiemwwwicsyu, $qummwmsmceweyoqo, $gkkgcoiwayaccqgm); foreach ($qummwmsmceweyoqo as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { ManipulatePost::ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gkkgcoiwayaccqgm); wsesqmcqoiyyqkqi: } iesekaeqeomeuaui: } public function eoagosyscaaqycai($umwqusowiqmyseom) : ?string { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom); $ogegikscwkaowsqa = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gkkgcoiwayaccqgm); if ($ogegikscwkaowsqa) { goto oimkeqocuguqqsqk; } $oqycwugsseyiisou = $this->eiwcuqigayigimak(Setting::ekeaeyoouiiymayo); if ($oqycwugsseyiisou == self::amcogigwsaqssuai) { goto mogkoocsoeuyoqqa; } $ogegikscwkaowsqa = $umwqusowiqmyseom->get_date_created(); goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: $ogegikscwkaowsqa = current_time("\155\171\x73\x71\154"); wkwamkgkwykeqkec: oimkeqocuguqqsqk: return $this->cqswciouesmewqke($ogegikscwkaowsqa); } public function oskkikcewyayqmme($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $egaioscwooawuigc = ManipulatePost::igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); if ($egaioscwooawuigc) { goto yykqaowwsqgqysmq; } if ($this->eiwcuqigayigimak(Setting::gooouyogomkqyiwa)) { goto oeocukauoyosicso; } $egaioscwooawuigc = $this->sywqsimcesscwamc(); goto suqceasgacskcmkc; oeocukauoyosicso: $egaioscwooawuigc = $gkkgcoiwayaccqgm; suqceasgacskcmkc: DecoratorOption::update(self::cgsyasqoqekikcue, date("\x59")); $egaioscwooawuigc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\144\x66\x5f\x69\156\166\157\x69\x63\145\x73\137\x73\x65\x74\x5f\151\x6e\x76\157\x69\x63\x65\x5f\x6e\x75\155\142\x65\x72"), $egaioscwooawuigc, $gkkgcoiwayaccqgm); ManipulatePost::ksmqawcowkmegigw(self::sqsaisksswaayayo, $egaioscwooawuigc, $gkkgcoiwayaccqgm); Setting::symcgieuakksimmu()->eiaacegkigqiwawg(Setting::ysoqycicuciiyuaw, $egaioscwooawuigc); yykqaowwsqgqysmq: return $egaioscwooawuigc; } }
