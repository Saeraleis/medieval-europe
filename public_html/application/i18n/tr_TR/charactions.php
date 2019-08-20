<?php defined('SYSPATH') OR die('No direct access allowed.');

$lang = Array
(
'pending_action_exists' => 'Bu işlemi gerçekleştiremezsiniz, başka bir işle meşgulsünüz.', 
'donate_ok' => 'Bazı eşyalarınızdan kurtuldunuz.', 
'take_ok' => 'Bir takım eşyalar aldınız.', 
'donate_executeerror' => 'Hibe işlemi sırasında sorun meydana geldi. Yetkililere danışın.', 
'take_executeerror' => 'Alışveriş işlemi sırasında sorun meydana geldi. Yetkililere danışın.', 
'take_maxweightreached' => 'Aşırı yüklüsünüz, bu eşyayı alamazsınız.', 
'global_notenoughmoney' => 'Yeterli paranız yok.', 
'house_buyok' => 'Bir adet %s\'i %s akçeye satın aldınız', 
'sellhouse_ok' => 'Mülkünüz %s\'i %s akçeye sattınız. %s akçe vergi ödediniz', 
'sellhouse_housenotfound' => 'Bu ev mevcut değil, veya size ait değil.', 
'sellhouse_itemsinhouse' => 'Evinizi satmadan önce boşaltmalısınız.', 
'drop_storablecapacityfinished' => 'Binanın depolama kapasitesini aştınız.', 
'drop_ok' => 'Bazı eşyalarınızı buraya bıraktınız.', 
'market_itemsnotowned' => 'Bu tip eşyadan belirttiğiniz miktarda yok.', 
'item_notexist' => 'Bu eşya mevcut değil.', 
'item_notininventory' => 'Bu eşya envanterinizde değil.', 
'item_soldsubject' => 'Birisi Pazardaki malınızı satın aldı.', 
'item_soldbody' => 'Pazarda %s adet %s satıp %s akçe kazandınız.', 
'itemsquantitynotowned' => 'Bu nesneden elinizde o miktarda yok.', 
'marketsellitem_pricelessthanzero' => 'Satış fiyatı pozitif olmalıdır.', 
'marketbuyitem_cannotbuyownitems' => 'Satışa sunduğunuz malları satın alamazsınız.', 
'marketcancellsell_ok' => 'Satışınızı iptal ettiniz.', 
'item_notwearable' => 'Bu eşyayı giyemezsiniz/kullanamazsınız.', 
'item_notundressable' => 'Bu eşyayı çıkaramazsınız.', 
'getwood_no_energy' => 'Odun kesmek için yeterli enerjiniz yok.', 
'getwood_no_handaxe' => 'Odun kesebilmek için elinizde bir Nacak olmalı.', 
'knifeneeded' => 'Bu eylem için elinizde bir Bıçak olması gerekiyor.', 
'pickaxeneeded' => 'Bu eylemi tamamlamak için bir Kazmaya ihtiyacınız var.', 
'breedingbuy_ok' => 'Bir çiftlik satın aldınız.', 
'terrainbuy_ok' => '%s akçeye bir tarla satın aldınız.', 
'terrainsell_ok' => 'Tarlanızı %s akçeye sattınız. %s akçe vergi ödediniz.', 
'royalp_appointvassal_ok' => '%s bölgesi Valiliğine %s isimli şahsı atadınız.', 
'royalp_candidateisincharge' => 'Adayın zaten bir görevi var.', 
'royalp_candidateisfromdifferentkingdom' => 'Aday başka bir ülkenin vatandaşı.', 
'resign_from_role_messagesubject' => '%s isimli şahıs görevinden istifa etti.', 
'resign_from_role_messagebody' => '%s isimli şahıs görevinden istifa etti ve sebebini de şu şekilde açıkladı: %s', 
'resign_from_role_ok' => 'Görevinizden istifa ettiniz.', 
'revoke_role' => 'Görevden Al', 
'revoke_role_ok' => 'Görevden aldınız: %s, %s.', 
'char_hasntrole' => 'Seçilen oyuncunun bir görevi yok.', 
'castle_deletelaw_ok' => 'Kanun maddesini yürürlükten kaldırdınız.', 
'castle_editlaw_ok' => 'Kanun maddesi üzerinde değişiklik yaptınız.', 
'askaudience_messagesubject' => '%s isimli şahıs sizden bir randevu istedi.', 
'royalp_askaudience_ok' => 'Hükümdardan bir randevu talep ettiniz.', 
'appoint_priest' => 'Papaz atayın', 
'appoint_bishop' => 'Piskopos atayın', 
'appoint_cardinal' => 'Kardinal atayın', 
'askaudience_ok' => 'Randevu talebinizi yolladınız.', 
'marketbuy_maxweightreached' => 'Çok fazla ağırlık taşıyorsunuz, eşyayı satın alamadınız.', 
'wear_ok' => 'Şunu kullanıyorsunuz: %s', 
'undress_ok' => 'Şunu kullanmayı bıraktınız: %s', 
'shop_craftok' => 'Eşyayı üretmeye başladınız.', 
'craft_cantcreateobject' => 'Bu tür eşyaları üretemezsiniz.', 
'craft_chardoesnthaveneededitems' => 'Üretim için gerekli tüm hammaddelere sahip değilsiniz.', 
'negative_quantity' => 'Lütfen pozitif bir sayı giriniz.', 
'free_motivationempty' => 'Bu tutukluyu salıvermek için bir neden belirtiniz.', 
'freeprisoner_ok' => 'Şu şahsı salıverdiniz: %s', 
'publishsentence_parametersempty' => 'Alıcı ve karar metni alanları doldurulmak zorundadır.', 
'publishsentence_ok' => 'Ceza kararını yayınladınız', 
'publishsentence_characterhasarole' => '%s isimli şahsa ceza veremezsiniz, bu tür davalara diplomatik yetkililer bakar.', 
'publishsentence_messagesubject' => 'Yargıç bir ceza hükmü yayınladı.', 
'publishsentence_sentencetoolong' => 'Karar metni en fazla 250 karakter olabilir.', 
'deletesentence_notnew' => 'Yayınlanmış bir ceza hükmünü iptal etmek mümkün değildir.', 
'deletesentence_messagesubject_target' => 'Yargıç, bir ceza hükmünü iptal etti.', 
'deletesentence_ok' => 'Bir ceza hükmünü sildiniz.', 
'castle_candidateisfromdifferentnode' => 'Sadece bölgenizin sakinlerini atayabilirsiniz.', 
'castle_appointsheriff_ok' => 'Şu anda %s isimli şahsı %s bölgesinin Başmuhafızı olarak atamış bulunuyorsunuz.', 
'castle_appointmagistrate_ok' => 'Şu anda %s isimli şahsı %s bölgesinin Yargıcı olarak atamış bulunuyorsunuz.', 
'charhasnomorerole' => 'Bu şahsı görevden alamazsınız: %s', 
'change_city_samecity' => '%s bölgesine yerleşemezsiniz çünkü zaten orada yaşıyorsunuz.', 
'change_city_ok' => 'Taşındınız ve artık %s bölgesinin bir vatandaşısınız.', 
'change_city_timenotexpired' => 'İkametgahınızı değiştiremezsiniz çünkü kısa zaman önce bir değişiklik daha yapmıştınız.', 
'change_city_charhasarole' => 'İkametgahınızı değiştirmeden önce görevinizden istifa ediniz.', 
'starving_subject' => '%s, açlıktan ölmek üzeresiniz.', 
'starving_body' => '%s, eğer yarın ya da öbür gün bir şey yemezseniz öleceksiniz. Karakteriniz %s ve tüm varlıklarınız silinecek, ve eğer tekrar oynamak isterseniz, yeni bir karakter oluşturmanız gerekecektir.', 
'charinroledied_subject' => '%s isimli şahıs açlıkta öldü, görevi boşta.', 
'item_notcure' => 'Bu tip eşya ile kendinizi iyileştiremezsiniz.', 
'cure_ok' => 'Kendinizi iyileştirdiniz ve harika hissediyorsunuz!', 
'shop_configure_ok' => 'Reklam metniniz kaydedildi.', 
'castle_addannouncement_ok' => 'Duyurunuz yayınlandı.', 
'castle_editannouncement_ok' => 'Duyurunuz değiştirildi.', 
'cannotcancelwardeclaration' => 'Savaş ilanını iptal edemezsiniz, artık çok geç...', 
'deletewaraction_ok' => 'Savaş ilanı iptal edildi.', 
'senditem' => 'Eşya gönder', 
'senditem_helper' => 'Buradan, bir oyuncuya ufak bir ücret karşılığı bir eşya yollayabilirsiniz. Gönderi ücreti ve zamanı, gönderici ve alıcının bulunduğu bölgelere ve eşyanın ağırlığına göre değişir.', 
'senditem_sendnormalitem' => 'Göndermek üzeresiniz', 
'senditem_sendcoins' => 'Gönderiyorsunuz', 
'senditem_ok' => 'Bir eşya gönderdiniz.', 
'senditem_shortmessage' => 'Eşya gönderiiyor', 
'senditem_longmessage' => 'Bir eşya gönderiyorsunuz.', 
'equipped_item' => 'Kullanmakta olduğunuz bir eşyayı yollayamazsınız.', 
'norole' => 'Henüz bir göreviniz yok.', 
'cannotattackchurch' => 'Kiliseye saldıramazsınız.', 
'bf_add_attack_ok' => 'Saldıran taraf saflarına geçtiniz.', 
'bf_add_defend_ok' => 'Savunan taraf saflarına geçtiniz.', 
'bf_retire_ok' => 'Savaş meydanını terkettiniz.', 
'giveitems_ok' => 'Eşyalar değiştirildi.', 
'toplist_doesnt_exist' => 'Bu toplist ayarlanmamış.', 
'buy_avatar_ok' => 'Karakteriniz için bir avatar satın aldınız. Yöneticiye eposta ile bir bildirim gönderildi ve en kısa zamanda profilinizi güncelleyecekler.', 
'senditem_costmessage' => 'Göndereceğiniz eşya(lar): <b>%d %s</b> Alıcı: <b>%s</b> Toplam Ağırlık: <b>%s Kg</b> Maliyeti: <b>%d akçe(s)</b>. Eşyaların ulaşma süresi: <b>%s</b>.', 
'sending_alreadysending' => 'Şu anda zaten <b>%d %s</b>, <b>%s</b> isimli şahsa yollanmaktadır. Kalan gönderim süresi: <b>%s</b>.', 
'renthorse_ok' => 'Güçlü bir At kiraladınız', 
'hirehelper_ok' => 'Bir Çırak tuttunuz.', 
'item_wrongsex' => 'Giysiye dikkatlice bakınca, size pek yakışmayacağını farkettiniz.', 
'feedanimals_ok' => 'Hayvanları besliyorsunuz', 
'sail_no_porto' => 'Bu bölgede bir liman yok.', 
'sail_no_route' => 'İki şehir arasında deniz yolu yok.', 
'item_wrongrole' => 'Bu kıyafeti giymek için gereken şartlar sizde mevcut değil.', 
'item_not_enough_str' => 'Bu eşyayı kullanmak ya da giymek için yeterli Kuvvetiniz yok.', 
'incompatible_worn_items_1' => 'Bu giysiyi giyemediniz. Önce üstünüzdekini çıkarsanız iyi olacak.', 
'incompatible_worn_items_2' => 'Bu giysiyi giyemediniz. Önce üstünüzdekini çıkarsanız iyi olacak.', 
'change_city_destregionisfull' => '%s bölgesi bu aralar aşırı kalabalık, yeni vatandaş kabul etmiyor.', 
'convertcurrency_ok' => 'Bozuklukları dönüştürdünüz.', 
'volunteerworkhourscheck' => '1 ila 9 saat arası gönüllü çalışabilirsiniz.', 
'paidworkhourscheck' => 'Üç, altı ya da dokuz saat çalışabilirsiniz.', 
'notenoughenergyglut' => 'Bu işe başlamak için yeterli enerjiniz yok ya da açsınız.', 
'worknotenoughslots' => 'Bir muhafızın dediğine göre ücretli çalışma imkanı yokmuş.', 
'workonproject_ok' => 'İnşaatta çalışmaya başladınız.', 
'sendmoneynotoldenough' => 'Kuryeyle para yollayamazsınız.', 
'change_city' => 'Vatandaşlığa geç', 
'transfer' => 'Transfer', 
'changeattributes_ok' => 'Özellik puanlarınızı tekrar dağıttınız.', 
'sellproperty_propertynotempty' => 'Bu mülkün deposu boş değil, sahibiyle konuşup boşaltmasını sağlayın.', 
'sellproperty_pendingactionexists' => 'Sahibi şu anda çalışıyor. Temas kurup işi bırakmasını sağlayın.', 
'sendnotsendableitem' => 'Bu tip eşyaları gönderemezsiniz.', 
'restrain' => 'Blokla', 
'craft_neededitemsmissing' => 'Üretim için gerekli bazı hammaddeler mevcut değiş. Atölye envanterini kontrol edin.', 
'structure_fullinventory' => 'Binanın deposu ağzına kadar dolmuş durumda. Yeni bişeyler üretmeden önce biraz temizlik yapın.', 
'change_city_destnodeisindependent' => 'Bu bölgeye taşınamazsınız çünkü idarecisi yok.', 
'change_city_helper' => 'Eğer (%s) bölgesine taşınmak istiyorsanız,  <b>%s</b> akçe masraf ödemelisiniz.', 
'sendnormalitemslimitation' => 'Sadece tek bir eşya gönderebilirsiniz.', 
'senditem_totalitemsmessage' => 'Toplam <b>%d</b> adet %s\'e sahipsiniz.', 
'acquireclearancepermit_ok' => 'Geçiş İzni satın aldınız.', 
'onlyoneoccurrenceforthisitem' => 'Bu eşyadan sadece bir adet taşıyabilirsiniz.', 
'acquiresupercart_ok' => 'Sağlam bir Yük Arabası satın aldınız.', 
'itemtrashed_ok' => 'Bazı eşyalarınızdan kurtuldunuz.', 
'shovel_no_shovel' => 'Kum çıkarmak için elinizde bir Kürek olmalı.', 
'fish_no_fishing_net' => 'Bir Balık Ağı bulun.', 
'regionisindependent' => 'Bölgeye ulaştınız, ancak bir grup köylü yolu tutmuş.', 
'canbuyonlyone' => 'Bu eşyadan sadece bir adet satın alabilirsiniz.', 
'buyship_ok' => 'Bir Tüccar Gemisi satın aldınız.', 
'customerscantbemerchant' => 'Alıcı ve gönderici farklı kişiler olmalı. Aynı anda hem alıcı hem satıcı olamazsınız.', 
'exhibit_scroll' => 'Evrağı teşhir edin', 
'exhibit_scroll_helper' => 'Bazı durumlarda bir muhafız, asker, yargıç ya da herhangi bir oyuncu, sizden bir evrağı ona göstermenizi isteyebilir. Evrağı göstermek için, envanterinizde evrağın üstüne gelince açılan kutucuktan Teşhir Et seçeneğini kullanabilirsiniz. Evrağın içeriği belirttiğiniz kişiye bir hadise olarak gönderilicektir. Evrağı sadece bulunduğunuz bölgede olan birine gösterebilirsiniz.', 
'only_generic_scroll' => 'Sadece belge ve evrakları teşhir edebilirsiniz.', 
'travel_to_bf' => 'Doğrudan Savaş Meydanına gidiyorsunuz', 
'select_color_tint' => 'Boya seçin', 
'tint_helper' => 'Tercih ettiğiniz kumaşa uygulamak üzere bir boya seçebilirsiniz. Elbiseyi boyamak için bir Boya Çanağına ihtiyacınız var.', 
'missing_dyebowl' => 'Elbiseyi boyamak için bir Boya Çanağına ihtiyacınız var.', 
'dye_ok' => 'Eşyayı başarılı bir şekilde boyadınız.', 
'move_charisrestrained' => 'Tam bölgeyi terkediyordunuz ki, bir muhafız yolunuzu kesip bir süre daha burada kalmanız gerektiğini söyledi: %s', 
'castle_candidateisfromdifferentregion' => 'Adayın bölgede yaşıyor olması lazım.', 
'acquirequeue_ok' => 'Bir miktar Dayanıklılık İksiri edindiniz.', 
'craft_toomanyslot' => 'Bu eşyayı tamamlamak için o kadar işlem gerekmiyor.', 
'marketsellitem_itemislocked' => 'Bu eşya şahsi ya da korumada, satamazsınız.', 
'declarerevolt_notpossible' => 'Kulağınıza bir ayaklanma söylentisi geldi. Başka bir isyan ilan etmek size biraz anlamsız geliyor.', 
'house_declarerevolt_running_helper' => 'İsyan başladı! Hükümdarın bu işten haberi var. Ordunuz Krallık Sarayının önünde toplanıyor. Savaş için kalan süre :<b>%s</b>', 
'revolt_kingcantsupportrevolt' => 'İsyanı desteklemek iyi bir fikir değilmiş gibi bir his var içinizde.', 
'revolt_choosefaction_ok' => 'Hangi tarafı destekleyeceğinize karar verdiniz.', 
'revolt_charfactionnotchosen' => 'Kimi destekleyeceğinize henüz karar vermediniz.', 
'revolt_leaverevolt_ok' => 'Tekrar düşününce, hiçbir tarafı desteklemeyi istemediğinizi farkettiniz. Belki de artık buralardan gitmek gerekiyordur.', 
'revolt_leadercantsupportking' => 'Hükümdarı desteklemek iyi bir fikir değilmiş gibi bir his var içinizde.', 
'declarerevolt_alreadyfighting' => 'Zaten bir savaş alanında ve bir işle meşgul haldesiniz.', 
'revolt_charmustbekingdomresident' => 'Öfkeli kalabalığa yaklaşınca, kimsenin iç işlerine karışmasını istemediklerini anladınız.', 
'defender_underrevolt' => '%s bögesinde kabaran isyan dalgası hakkında istihbarat raporları geldi. Sağa sola saldırmadan önce bu işle ilgilenmek daha iyi olur sanki.', 
'chooserevoltfaction_notoldenough' => 'İsyanda taraf olacak kadar uzun süredir burada yaşamıyorsunuz.', 
'bonus-hasalreadybonus' => 'Bonus zaten aktif, ya da bu bonusu kapsayan başka bir bonus aktif.', 
'bonus-acquirebonusok' => 'Bonusu satın aldınız.', 
'travelmessage' => '%s bölgesinden %s bölgesine seyahat ediyorsunuz.', 
'hammerneeded' => 'Bu eylem için bir çekice ihtiyacınız var.', 
'hoeneeded' => 'Bu eylem için elinizde bir Çapa olması gerekiyor.', 
'bucketneeded' => 'Bu eylem için elinizde bir Kova olması gerekiyor.', 
'bellowneeded' => 'Bu eylem için elinizde bir Körük olması gerekiyor.', 
'reason_cleanprisons' => 'Zindanları Temizle', 
'reason_boardvisibility' => 'Duyuru görünürlüğü', 
'reason_questreward' => 'Görev Tamamlama Ödülü', 
'reason_travelerpackage' => 'Seyyah Pakedi Bonusu', 
'reason_studycost' => 'Eğitim/Talim', 
'reason_marketbuy' => 'Pazardan alınmış mallar', 
'reason_supercartbonus' => 'Ağır Yük Arabası Bonusu', 
'reason_basicpackage' => 'Soyluluk Pakedi Alma', 
'reason_senditems' => 'Eşya gönder', 
'reason_notspecified' => 'Neden belirtilmedi', 
'reason_sailcost' => 'Bahriye masrafları', 
'reason_toplistvote' => 'Oylama', 
'reason_structurebuy' => 'Bina alımı', 
'reason_referralbonus' => 'Davetçi bonusu', 
'reason_structuresold' => 'Bina satımı', 
'reason_marketsale' => 'Pazarda satılmış mallar', 
'reason_becomeking' => 'Tahta çıkma masrafları', 
'reason_adminsend' => 'Yönetimden gönderilen', 
'loot' => 'Yağmala', 
'reason_game_diceelite' => 'Barbut Oyunu (Soylular İçin)', 
'reason_workerpackage' => 'İşçi Pakedi Bonusu Satın Alın', 
'reason_buildsalary' => 'İnşaat işçisi yevmiyesi', 
'reason_game_dicesimple' => 'Barbut Oyunu (Avam İçin)', 
'reason_purchase' => 'Satın Al', 
'reason_duelpresence' => 'Düelloya iştirak', 
'reason_duelabsence' => 'Düellodan kaytarma', 
'reason_lootdiscovered' => 'Soygunda yakalandınız.', 
'error-notenough-questpoints' => 'En az %d Görev Puanınız olmadan bu eylemi kullanamazsınız.', 
'achievementmissing' => 'Şu başarıyı elde edemediniz: %s', 
'reason_prayer' => 'Dua', 
'paperpieceneeded' => 'Bir miktar kağıt gerekiyor', 
'paperpieceandwaxsealneeded' => 'Bir miktar kağıt ve mum mühür gerekiyor.', 
'reason_questtoken' => '10 faydalı Görev Jetonu gönderildi.', 
'reason_resttavern' => 'Handa dinlen', 
'reason_donatecoins' => 'Bağış', 
'reason_goodsandservicestax' => 'Mal ve Hizmetler Vergisi', 
'reason_wage' => 'Ücret', 
'reason_atelierlicense' => 'Bir Atölye işletme lisansı alın', 
'error-notenabledwhenrestrained' => 'Şu anda hakkınızda tedbir kararı var, bu eylemi yapamazsınız.', 
'reason_tavernincome' => 'Han geliri', 
'reason_dailyrevenue' => 'Günlük aktif vatandaş geliri', 
'reason_revokerole' => 'Görev Feshi', 
'reason_roleassignment' => 'Görev Tayini', 
'userisnotactive' => 'Hesabınız henüz doğrulanmamış. Eposta adresinize gelen maildeki yönergeleri takip ederek doğrulamanızı tamamlayın.', 
'reason_suggestionsponsorship' => 'Sponsorluk Önerileri', 
'reason_wardrobeapproval' => 'Elbise Dolabı kişiselleştirme onayı,', 
'battlefielddismountedcantgoback' => 'Savaş Meydanı kapandı, geri dönemezsiniz.', 
'info-answered' => 'Evlilik teklifine yanıt verdiniz.', 
'error-proposalnotfound' => 'Teklif bulunamadı', 
'error-weddingproposalnotaccepted' => 'Evlilik teklifi gönderilmemiş ya da kabul edilmemiş.', 
'error-proposalalreadyanswered' => 'Bu teklifi zaten yanıtladınız.', 
'error-charnotavailableforregfunctions' => '%s isteğinizi reddediyor', 
'reason_coursegain' => 'Bitirilen Dersler', 
'reason_wardrobeapprovalfree' => 'Giysi Kişiselleştirme Başvurusu bedava', 
'error-tooyoung' => 'Bunu yapabilmek için çok gençsiniz.', 
'reason_diamondring' => 'Bonus Alımı: Elmas Yüzük', 
'reason_professionaldesk' => 'Bonus Alımı: Özel Yazı Masası', 
'reason_atelier-license-weapon' => 'Giysi Dolabı Alımı: Silah', 
'reason_atelier-license-avatar' => 'Giysi Dolabı Alımı: Avatar', 
'reason_elixirofhealth' => 'Bonus Alımı: Sağlık İksiri', 
'reason_elixirofdexterity' => 'Bonus Alımı: Beceri İksiri', 
'reason_elixirofstrength' => 'Bonus Alımı: Kuvvet İksiri', 
'reason_elixirofconstitution' => 'Bonus Alımı: Dayanıklılık İksiri', 
'reason_elixirofintelligence' => 'Bonus Alımı: Zeka İksiri', 
'reason_elixirofstamina' => 'Bonus Alımı: Canlılık İksiri', 
'reason_sparringpartner' => 'Talim dövüşü yap', 
'glance' => 'Bak', 
'equipment_failed' => 'Bu eylem için gerekli aletleri kullanmıyorsun', 
'charissick' => 'İnzivaya giremezsin çünkü hastasın.', 
'reason_dailyreward' => 'Günlük ödül', 
'curedisease' => 'Hastalığı İyileştir', 
'curehealth' => 'İyileş', 
'initiation' => 'Kabul Töreni', 
'error_structure_tool_missing' => 'Bu binada gerekli aletler bulunmuyor.', 
'confirm_operation_consume' => '%s adet %s tüketimini onaylıyor musunuz?', 
'equipment_failed_craft' => 'Bu eylemi tamamlamak için vücudunuz ve ayaklarınız örtülü olmalıdır. Ayrıca sağ elinizde şunu tutmalısınız:  <strong>%s</strong>', 
'reason_ipcheckshield' => 'Bonus Satın Al: Paylaşılan IP Kontrolü Koruması', 
'reason_rosary' => 'Bonus Satın Al: Tesbih', 
'reason_supercart' => 'Bonus Satın Al: Profesyonel Yük Arabası', 
'reason_elixirofcuredisease' => 'Bonus Satınalın: Hastalık Şifa İksiri', 
'attack' => 'Saldır', 

);

?>