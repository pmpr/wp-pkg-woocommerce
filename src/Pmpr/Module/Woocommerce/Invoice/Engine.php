<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662cf7a1c41c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Engine extends Common { protected ?Generator $generator = null; public function siciqscsekqaqess() : ?Generator { if ($this->generator) { goto emqswoaawgeyosmi; } $this->generator = Generator::symcgieuakksimmu(); emqswoaawgeyosmi: return $this->generator; } public function sywqsimcesscwamc() { $yeacayasgueouoqc = null; $wsgaqoyasieoiwuw = $this->eiwcuqigayigimak(Setting::aegqguumccieqwyk); $seauiwyeoycowegg = [self::ugsuecoyuqcamsac => "\x70\x6f\163\164\155\x65\164\x61", self::cgiswgcumueqgcmw => 1, self::cqcimoqckgmaacyw => "\x43\x41\123\x54\x28\x6d\x65\x74\x61\x5f\166\141\154\165\x65\163\x20\x41\123\40\123\111\107\116\105\104\51", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::sqsaisksswaayayo]]; if (!$wsgaqoyasieoiwuw) { goto iwsmmkqaoksmocok; } $yooaaeuioeawcqms = date("\131\x2d\x30\61\x2d\x30\x31"); $seusouwwgeqagsce = date("\131\55\x31\x32\x2d\63\x31"); $seauiwyeoycowegg[self::iowgsqgiaamyuswi]["\x70\x6f\163\164\137\151\144"] = [self::ugsuecoyuqcamsac => "\160\157\163\x74\155\145\x74\x61", self::soquiwyuimckgiow => "\x70\x6f\163\x74\137\151\x64", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::cekyaeaeeigmwysa, [self::ciyoccqkiamemcmm => $yooaaeuioeawcqms, self::meisqwykgaymauka => self::iwmgegikocuwggua, self::eugyciakiowwcuwm => "\76\75"], [self::ciyoccqkiamemcmm => $seusouwwgeqagsce, self::meisqwykgaymauka => self::iwmgegikocuwggua, self::eugyciakiowwcuwm => "\74\x3d"]]]; iwsmmkqaoksmocok: $eioamqeaccimmisg = ManipulateDatabase::gmogewiwceqokqmy($seauiwyeoycowegg); if (!$eioamqeaccimmisg) { goto esikeyqyuikmaiek; } $yeacayasgueouoqc = ManipulateArray::get($eioamqeaccimmisg, self::iwmgegikocuwggua); esikeyqyuikmaiek: if (!$yeacayasgueouoqc) { goto esaqcqqwuussiiwo; } $mmwoqcwiwemokkue = $yeacayasgueouoqc + 1; goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: $occuycyyyycsosao = ManipulateDatabase::qaumqeeagueuqkcg([self::ugsuecoyuqcamsac => "\160\157\163\164\x6d\145\x74\141", self::soquiwyuimckgiow => "\x63\x6f\x75\x6e\x74\x28\52\51", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::sqsaisksswaayayo]]); $mmwoqcwiwemokkue = 1; $mesieoomaagsgyqe = $this->eiwcuqigayigimak(Setting::uumqsyagoeuaaimw, 0); if (!$mesieoomaagsgyqe) { goto qiiigwkqeoewsuwm; } if (!(!$wsgaqoyasieoiwuw || $occuycyyyycsosao == 0)) { goto okkmcocqokkskasy; } $mmwoqcwiwemokkue = $mesieoomaagsgyqe; okkmcocqokkskasy: qiiigwkqeoewsuwm: ikqeeaysmqgcgawq: $acwmgkosiwekkosk = $this->eiwcuqigayigimak(Setting::ysoqycicuciiyuaw, 0); if (!(!$wsgaqoyasieoiwuw && $acwmgkosiwekkosk > $mmwoqcwiwemokkue)) { goto mscgewkcqcoowweg; } $mmwoqcwiwemokkue = $acwmgkosiwekkosk; mscgewkcqcoowweg: return $mmwoqcwiwemokkue; } public function ywgkowokogikyoem($umwqusowiqmyseom) : string { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $egaioscwooawuigc = ManipulatePost::igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); $qqueccegigsqmmmg = $this->iaicueasqoiusuoo([self::awkcoioakcaougmq => $umwqusowiqmyseom]); $yuwymayicwwqiske = esc_html($this->eiwcuqigayigimak(Setting::mqcukmwiaqukgywi)); $yuwymayicwwqiske = $this->imuqeaaqmwwkgqui($yuwymayicwwqiske, $qqueccegigsqmmmg); $scqcgogsiaiksiiq = esc_html($this->eiwcuqigayigimak(Setting::wywskiqiowiagemy)); $scqcgogsiaiksiiq = $this->imuqeaaqmwwkgqui($scqcgogsiaiksiiq, $qqueccegigsqmmmg); if (!($wukmmiqowweyucaa = $this->eiwcuqigayigimak(Setting::osgqakokgccsywgw))) { goto suqcsgaosywaauuu; } $egaioscwooawuigc = str_pad($egaioscwooawuigc, strlen($wukmmiqowweyucaa), "\x30", STR_PAD_LEFT); suqcsgaosywaauuu: return $yuwymayicwwqiske . $egaioscwooawuigc . $scqcgogsiaiksiiq; } public function mwmuaeuyequywmsq($umwqusowiqmyseom) { $qummwmsmceweyoqo = [self::ykqogmimmamwckwe => $this->eoagosyscaaqycai($umwqusowiqmyseom), self::sqsaisksswaayayo => $this->oskkikcewyayqmme($umwqusowiqmyseom), self::cekyaeaeeigmwysa => current_time("\x6d\x79\x73\x71\x6c"), self::mgisuqmqaesqscso => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wmamggmmccsqcqwa), self::wkuaqkmwcegcgwim => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qiookqywwgemeamk), self::sokaqgmykimmecwq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kwmkawqoiesweswy), self::owoskccgqgyycqoe => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wsccocqiicegwska), self::cueaooscqucmcseu => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::aockomuqgkgqyaki), self::occkmmmsugiucmsi => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kosymqioioyguigs), self::yisqmeewaaykaeqg => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::ekyyyewmowkgcgay), self::asmcgcuuyowickgq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qaowyaoaqwacmgeo), self::uicuqucwwkscyyyy => $this->ywgkowokogikyoem($umwqusowiqmyseom)]; $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); ManipulatePost::ksmqawcowkmegigw(self::uqkoiiemwwwicsyu, $qummwmsmceweyoqo, $gkkgcoiwayaccqgm); foreach ($qummwmsmceweyoqo as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { ManipulatePost::ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gkkgcoiwayaccqgm); gsygwgsiawgmqiyi: } wwukgaquuyoissgy: } public function eoagosyscaaqycai($umwqusowiqmyseom) : ?string { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom); $ogegikscwkaowsqa = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gkkgcoiwayaccqgm); if ($ogegikscwkaowsqa) { goto qikaewekoecykeou; } $oqycwugsseyiisou = $this->eiwcuqigayigimak(Setting::ekeaeyoouiiymayo); if ($oqycwugsseyiisou == self::amcogigwsaqssuai) { goto qsgqwyqaqiowkmco; } $ogegikscwkaowsqa = $umwqusowiqmyseom->get_date_created(); goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $ogegikscwkaowsqa = current_time("\x6d\x79\163\161\154"); yqagomygmeoecwey: qikaewekoecykeou: return $this->cqswciouesmewqke($ogegikscwkaowsqa); } public function oskkikcewyayqmme($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $egaioscwooawuigc = ManipulatePost::igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); if ($egaioscwooawuigc) { goto aiccyaswigkaycqk; } if ($this->eiwcuqigayigimak(Setting::gooouyogomkqyiwa)) { goto eucqomyqykgoiuge; } $egaioscwooawuigc = $this->sywqsimcesscwamc(); goto usymasgsyqgsuocg; eucqomyqykgoiuge: $egaioscwooawuigc = $gkkgcoiwayaccqgm; usymasgsyqgsuocg: DecoratorOption::update(self::cgsyasqoqekikcue, date("\x59")); $egaioscwooawuigc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x64\x66\137\151\156\166\x6f\x69\143\145\x73\x5f\x73\x65\x74\x5f\151\156\x76\x6f\x69\x63\x65\x5f\x6e\x75\155\x62\145\162"), $egaioscwooawuigc, $gkkgcoiwayaccqgm); ManipulatePost::ksmqawcowkmegigw(self::sqsaisksswaayayo, $egaioscwooawuigc, $gkkgcoiwayaccqgm); Setting::symcgieuakksimmu()->eiaacegkigqiwawg(Setting::ysoqycicuciiyuaw, $egaioscwooawuigc); aiccyaswigkaycqk: return $egaioscwooawuigc; } }
