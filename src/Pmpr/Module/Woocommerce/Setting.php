<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630b4ce29fab6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; use Pmpr\Common\Foundation\Woocommerce\Setting as BaseClass; class Setting extends BaseClass { const eiyccksaowygmicm = self::soqkucakwksaeyce . "\x73\x68\157\x70\x5f\160\x65\x72\x5f\160\x61\147\145"; const mgaiesaoggoicmqi = self::soqkucakwksaeyce . "\x66\162\x65\145\137\160\162\151\143\145\x5f\x6c\141\142\145\x6c"; const siyomqwiwwmgqswi = self::soqkucakwksaeyce . "\x61\x74\164\x72\x69\x62\165\x74\145\163\x5f\x74\141\x62\137\x74\x69\164\x6c\x65"; const qqiuqmkwamakmmky = self::soqkucakwksaeyce . "\x76\141\x72\151\141\142\x6c\145\137\x70\x72\x6f\144\165\143\164\137\147\x75\x69\144\145"; const kqaecmeyeicscaye = self::soqkucakwksaeyce . "\163\x68\157\x70\x5f\164\141\x62\x6c\x65\137\166\151\145\x77\137\143\157\x6c\x75\155\x6e\x73"; const cuqwmqwgcuuceoqo = self::soqkucakwksaeyce . "\x6d\171\141\x63\x63\157\x75\x6e\164\x5f\x65\170\x63\154\165\144\145\x5f\156\x61\x76\x69\147\x61\164\x69\157\x6e"; const lkawsqiicuikigyu = self::soqkucakwksaeyce . "\160\162\151\x63\145\x5f\141\165\x74\157\x6d\x61\164\x69\143\x5f\163\x68\x6f\162\164\137\x63\x75\x72\162\x65\156\143\171"; public function ogsqeuumuqcqkuuk($ikgwqyuyckaewsow = []) { $eciuecguuowmeyqg = []; if (!ManipulateWoocommerce::mkiigkeqaeiwqyua()) { goto gsygwgsiawgmqiyi; } $eciuecguuowmeyqg[self::lkawsqiicuikigyu] = ["\144\x65\163\143" => __("\123\150\x6f\167\x20\x70\162\151\x63\145\x20\163\150\157\x72\164", PR__MDL__WOOCOMMERCE), self::squoamkioomemiyi => self::semqugiuwygamias, self::qescuiwgsyuikume => __("\123\x68\x6f\x72\x74\40\x50\162\151\x63\x65", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => "\x6e\157"]; gsygwgsiawgmqiyi: $eciuecguuowmeyqg[self::mgaiesaoggoicmqi] = ["\144\x65\163\x63" => __("\124\150\x69\163\x20\x6c\x61\x62\x65\154\x20\163\x68\x6f\x77\x20\151\x6e\x73\164\x65\141\x64\x20\157\146\x20\60\40\x70\x72\x6f\144\x75\x63\x74\47\163\40\160\x72\x69\143\145\x2c\x20\154\x65\x61\166\x65\x20\x65\x6d\x70\x74\x79\x20\x69\x66\x20\x79\x6f\165\40\144\x6f\x6e\x27\x74\x20\x77\x61\156\x74\40\x74\150\151\x73\x20\x63\x68\141\x6e\x67\x65", PR__MDL__WOOCOMMERCE), self::squoamkioomemiyi => self::TEXT, self::qescuiwgsyuikume => __("\x46\x72\x65\x65\x20\x50\162\151\143\x65\40\114\141\x62\145\154", PR__MDL__WOOCOMMERCE)]; if (!$eciuecguuowmeyqg) { goto qsgqwyqaqiowkmco; } $ikgwqyuyckaewsow = $this->ucgocwsamgumcyiq($eciuecguuowmeyqg, $ikgwqyuyckaewsow, self::ieegmywouoqgceii, false); qsgqwyqaqiowkmco: return $ikgwqyuyckaewsow; } public function eiwicgsqoiaeawkk($ikgwqyuyckaewsow = []) : array { $oammesyieqmwuwyi = DecoratorWoocommerce::qyyygkguqcmgkmey("\x77\143\x5f\x67\x65\164\x5f\x61\143\143\x6f\x75\x6e\x74\x5f\155\145\x6e\x75\x5f\151\164\145\x6d\163", []); ManipulateArray::unset($oammesyieqmwuwyi, "\144\x61\163\150\x62\x6f\x61\x72\x64"); if (!$oammesyieqmwuwyi) { goto yqagomygmeoecwey; } $oammesyieqmwuwyi["\156\x6f\x74\150\x69\x6e\x67"] = __("\x4e\x6f\x74\x68\151\x6e\x67\40\x73\145\x6c\145\143\x74\x65\144", PR__MDL__WOOCOMMERCE); $ikgwqyuyckaewsow = $this->gmqowegieyawsgau(["\x64\x65\x73\x63" => __("\x53\145\x6c\145\143\164\40\x74\150\x65\40\151\164\145\x6d\x73\x20\164\x68\141\x74\40\x79\x6f\x75\x20\x64\x6f\x20\156\157\x74\x20\167\x61\x6e\164\x20\x74\x6f\40\142\145\40\x64\151\x73\x70\x6c\141\x79\x65\x64\x20\151\156\40\x6e\x61\x76\x69\x67\141\x74\x69\157\156\40\142\141\162\56", PR__MDL__WOOCOMMERCE), "\157\x70\x74\151\x6f\x6e\163" => $oammesyieqmwuwyi, self::gouqcwikiiygyasc => self::cuqwmqwgcuuceoqo, self::squoamkioomemiyi => "\x63\165\163\164\157\x6d", "\x63\x75\163\164\157\155\55\x74\x79\x70\145" => "\142\x73\x73\x65\x6c\145\x63\x74", self::qescuiwgsyuikume => __("\105\x78\143\154\x75\x64\145\40\x4e\141\x76\40\111\164\x65\155\x73", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => [], "\x61\x73\55\155\165\x6c\164\x69\160\x6c\145", "\x70\141\x72\145\x6e\x74\x2d\x63\154\141\163\163" => "\160\x78\55\60"], $ikgwqyuyckaewsow, "\x61\x63\x63\x6f\x75\156\x74\x5f\162\x65\147\151\163\164\x72\x61\164\x69\x6f\156\x5f\x6f\x70\164\151\x6f\x6e\163", false); yqagomygmeoecwey: return $ikgwqyuyckaewsow; } public function qssqicawwgqqscui($ikgwqyuyckaewsow = []) { return $this->ucgocwsamgumcyiq([self::eiyccksaowygmicm => [self::qescuiwgsyuikume => __("\123\150\x6f\160\x20\x69\x74\145\155\163\x20\x70\x65\162\40\160\x61\147\145", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => 10], self::siyomqwiwwmgqswi => [self::qescuiwgsyuikume => __("\101\164\x74\x72\x69\142\x75\x74\x65\163\x20\164\x61\142\40\164\x69\164\154\x65", PR__MDL__WOOCOMMERCE), self::wikgqsqysyuoykse => __("\101\144\x64\x69\x74\151\x6f\156\x61\154\x20\x49\156\x66\157\x72\155\141\164\x69\157\156", PR__MDL__WOOCOMMERCE)], self::qqiuqmkwamakmmky => [self::qescuiwgsyuikume => __("\126\x61\162\x69\141\x74\x69\157\x6e\40\120\162\157\x64\165\143\x74\x20\x47\x75\151\x64\145", PR__MDL__WOOCOMMERCE)]], $ikgwqyuyckaewsow, self::imgaumeywmqsacas); } public static function ioukqkmiwsokywyy() { $cgqowqqsswqmocyc = self::ciyeymqmquocggeg(); $gqgemcmoicmgaqie = ManipulateServer::get(self::owuiaqkkkayouugm, $cgqowqqsswqmocyc); if (!($gqgemcmoicmgaqie !== $cgqowqqsswqmocyc)) { goto eucqomyqykgoiuge; } $kuuugksiksqcaaaa = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x73\150\157\x70\x5f\151\x74\x65\x6d\163\x5f\160\145\162\137\160\x61\147\x65\137\151\163\x5f\x76\141\154\x69\x64"), true, $gqgemcmoicmgaqie); if (!$kuuugksiksqcaaaa) { goto qikaewekoecykeou; } $cgqowqqsswqmocyc = $gqgemcmoicmgaqie; qikaewekoecykeou: eucqomyqykgoiuge: return $cgqowqqsswqmocyc; } public static function ckgyyysykiycqwwm() { return self::eiwcuqigayigimak(self::qqiuqmkwamakmmky, ''); } public static function ciyeymqmquocggeg() { return self::eiwcuqigayigimak(self::eiyccksaowygmicm, 9); } public static function oowsugsmwuqmaaii() { return self::eiwcuqigayigimak(self::siyomqwiwwmgqswi, ''); } public static function uusioiccyseocsmw() : bool { return ManipulateWoocommerce::mkiigkeqaeiwqyua() && self::eiwcuqigayigimak(self::lkawsqiicuikigyu) === "\x79\x65\163"; } public static function sqsceoaumcqaqqmw() : array { $ygmmaywsqqycaaok = ManipulateNumber::ywqgcuymeiswqyqc(9, 36, 1, 9); $qiouiwasaauyaaue = []; foreach ($ygmmaywsqqycaaok as $eusockqasqqmoess) { $qiouiwasaauyaaue[$eusockqasqqmoess] = sprintf(__("\x25\x73\40\x49\164\x65\155", PR__MDL__WOOCOMMERCE), $eusockqasqqmoess); aiccyaswigkaycqk: } usymasgsyqgsuocg: return $qiouiwasaauyaaue; } }
