<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a7b052712             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Woocommerce; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; use Pmpr\Common\Foundation\Woocommerce\Setting as BaseClass; class Setting extends BaseClass { const SHOP_ITEMS_PER_PAGE = self::WOOCOMMERCE_ . "\163\150\x6f\160\x5f\x70\x65\162\137\160\x61\147\145"; const ATTRIBUTES_TAB_TITLE = self::WOOCOMMERCE_ . "\x73\151\156\x67\x6c\x65\137\141\x74\164\162\151\142\165\164\145\x73\x5f\x74\141\142\x5f\x74\x69\x74\x6c\x65"; const VARIABLE_PRODUCT_GUIDE = self::WOOCOMMERCE_ . "\166\141\x72\x69\x61\142\x6c\x65\x5f\x70\x72\157\144\x75\143\164\x5f\x67\165\151\144\145"; const SHOP_TABLE_VIEW_COLUMNS = self::WOOCOMMERCE_ . "\x73\x68\157\x70\137\x74\141\x62\x6c\x65\x5f\166\x69\145\167\x5f\143\157\154\x75\155\156\163"; const PRICE_AUTOMATIC_SHORT_CURRENCY = self::WOOCOMMERCE_ . "\x70\162\x69\143\x65\137\141\x75\164\x6f\155\141\164\151\143\137\163\x68\x6f\162\x74\x5f\143\x75\162\162\145\156\143\x79"; public function ogsqeuumuqcqkuuk($ikgwqyuyckaewsow = []) { goto qiaqsassksqiuyae; qiaqsassksqiuyae: if (!ManipulateWoocommerce::mkiigkeqaeiwqyua()) { goto cecuyayqoioasumi; } goto qogqewiwmwiwskgm; qwigomakwmyiwkgo: return $ikgwqyuyckaewsow; goto myoicgcuugciueis; qgoiooayqmqqsiok: cecuyayqoioasumi: goto qwigomakwmyiwkgo; qogqewiwmwiwskgm: $ikgwqyuyckaewsow = $this->ucgocwsamgumcyiq([self::PRICE_AUTOMATIC_SHORT_CURRENCY => ["\144\145\x73\143" => __("\x53\150\157\167\40\160\162\151\143\x65\40\163\150\157\162\164", PR__PKG__WOOCOMMERCE), self::TYPE => "\143\x68\x65\x63\153\142\x6f\x78", self::TITLE => __("\x53\150\x6f\x72\x74\x20\x50\x72\151\x63\145", PR__PKG__WOOCOMMERCE), self::DEFAULT => "\156\x6f"]], $ikgwqyuyckaewsow, self::PRICING_OPTIONS, false); goto qgoiooayqmqqsiok; myoicgcuugciueis: } public function qssqicawwgqqscui($ikgwqyuyckaewsow = []) { return $this->ucgocwsamgumcyiq([self::SHOP_ITEMS_PER_PAGE => [self::TITLE => __("\x53\x68\x6f\x70\40\x69\x74\x65\x6d\163\x20\x70\145\x72\x20\x70\x61\147\x65", PR__PKG__WOOCOMMERCE), self::DEFAULT => 10], self::ATTRIBUTES_TAB_TITLE => [self::TITLE => __("\x41\x74\x74\162\x69\x62\165\164\x65\x73\x20\164\x61\142\x20\164\x69\x74\x6c\145", PR__PKG__WOOCOMMERCE), self::DEFAULT => __("\x41\144\144\151\164\x69\157\x6e\x61\154\40\111\156\146\x6f\x72\x6d\x61\164\x69\x6f\x6e", PR__PKG__WOOCOMMERCE)], self::VARIABLE_PRODUCT_GUIDE => [self::TITLE => __("\x56\x61\162\x69\x61\164\x69\157\156\x20\120\162\x6f\144\x75\143\164\40\x47\165\151\x64\145", PR__PKG__WOOCOMMERCE)]], $ikgwqyuyckaewsow, self::CATALOG_OPTIONS); } public static function ioukqkmiwsokywyy() { goto cuykwgmswkskqkyi; eqkauqciwewmgeoi: if (!$kuuugksiksqcaaaa) { goto asmecuqiyyswueqe; } goto kwagwqyusyiyoaqs; kiqogmwcgcamwiig: csscmcacoikwsecs: goto iomcaiwewsawiamu; sciwggaeogcoesiu: $kuuugksiksqcaaaa = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x73\x68\157\x70\x5f\x69\x74\x65\155\x73\137\x70\145\162\x5f\x70\141\x67\x65\137\151\x73\x5f\166\x61\154\151\x64"), true, $gqgemcmoicmgaqie); goto eqkauqciwewmgeoi; yowsmsiyimmimemc: asmecuqiyyswueqe: goto kiqogmwcgcamwiig; kuicqywysciceggs: $gqgemcmoicmgaqie = ManipulateServer::get(self::ITEMS_PER_PAGE, $cgqowqqsswqmocyc); goto mkwskuycuyguqqok; cuykwgmswkskqkyi: $cgqowqqsswqmocyc = self::ciyeymqmquocggeg(); goto kuicqywysciceggs; iomcaiwewsawiamu: return $cgqowqqsswqmocyc; goto sqiciiuwmykocycc; kwagwqyusyiyoaqs: $cgqowqqsswqmocyc = $gqgemcmoicmgaqie; goto yowsmsiyimmimemc; mkwskuycuyguqqok: if (!($gqgemcmoicmgaqie !== $cgqowqqsswqmocyc)) { goto csscmcacoikwsecs; } goto sciwggaeogcoesiu; sqiciiuwmykocycc: } public static function ckgyyysykiycqwwm() { return self::eiwcuqigayigimak(self::VARIABLE_PRODUCT_GUIDE, ''); } public static function ciyeymqmquocggeg() { return self::eiwcuqigayigimak(self::SHOP_ITEMS_PER_PAGE, 9); } public static function oowsugsmwuqmaaii() { return self::eiwcuqigayigimak(self::ATTRIBUTES_TAB_TITLE, ''); } public static function uusioiccyseocsmw() : bool { return ManipulateWoocommerce::mkiigkeqaeiwqyua() && self::eiwcuqigayigimak(self::PRICE_AUTOMATIC_SHORT_CURRENCY) === "\171\145\x73"; } public static function sqsceoaumcqaqqmw() : array { goto cggowoquuiwqkyew; cggowoquuiwqkyew: $ygmmaywsqqycaaok = ManipulateNumber::ywqgcuymeiswqyqc(9, 36, 1, 9); goto ocokwuuquaokmasc; yiwiqaqmwiogawym: foreach ($ygmmaywsqqycaaok as $eusockqasqqmoess) { $qiouiwasaauyaaue[$eusockqasqqmoess] = sprintf(__("\45\163\40\x49\164\145\x6d", PR__PKG__WOOCOMMERCE), $eusockqasqqmoess); uukumskkeggaowck: } goto goacqqsgaaigyuaw; goacqqsgaaigyuaw: eequksumcoogyoem: goto meawswgwagoqgkye; ocokwuuquaokmasc: $qiouiwasaauyaaue = []; goto yiwiqaqmwiogawym; meawswgwagoqgkye: return $qiouiwasaauyaaue; goto wcesymwqykqoyuqk; wcesymwqykqoyuqk: } }
