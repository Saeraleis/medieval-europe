<?php defined('SYSPATH') OR die('No direct access allowed.');

$lang = Array
(
'pending_action_exists' => 'Não podes começar esta ação, estás ocupado(a) com outras tarefas.', 
'donate_ok' => 'Doaste os bens.', 
'take_ok' => 'Recolheste os bens.', 
'donate_executeerror' => 'Ocorreu um erro durante a doação. Contacta a equipa do ME.', 
'take_executeerror' => 'Ocorreu um erro durante a transação. Contacta a equipa do ME.', 
'take_maxweightreached' => 'Já estás sobrecarregado(a) e não podes levar o objeto.', 
'global_notenoughmoney' => 'Não tens dinheiro suficiente.', 
'house_buyok' => 'Compraste um(a) %s por %s moedas de prata.', 
'sellhouse_ok' => 'Vendeste o(a) teu/tua %s por %s moedas de prata. Pagaste em taxas %s moedas de prata.', 
'sellhouse_housenotfound' => 'Esta casa não existe ou não é tua.', 
'sellhouse_itemsinhouse' => 'Deverás esvaziar a tua casa antes de a venderes.', 
'drop_storablecapacityfinished' => 'Excedeste a capacidade de armazenamento do edifício.', 
'drop_ok' => 'Depositaste os teus bens.', 
'market_itemsnotowned' => 'Não possuis tantos objetos desse tipo.', 
'item_notexist' => 'O objeto não existe.', 
'item_notininventory' => 'O objeto não está no teu inventário.', 
'item_soldsubject' => 'Alguém comprou em mercado um produto teu.', 
'item_soldbody' => 'Vendeste %s %s por %s moedas de prata.', 
'itemsquantitynotowned' => 'Não possuis tantos objetos desse tipo.', 
'marketsellitem_pricelessthanzero' => 'O preço de venda tem que ser positivo.', 
'marketbuyitem_cannotbuyownitems' => 'Não podes comprar os teus próprios objetos.', 
'marketcancellsell_ok' => 'Cancelaste a venda.', 
'item_notwearable' => 'Não podes usar/vestir este objeto.', 
'item_notundressable' => 'Não podes remover este objeto.', 
'getwood_no_energy' => 'Não tens energia suficiente para cortar madeira.', 
'getwood_no_handaxe' => 'Deves segurar um machado para cortar lenha.', 
'knifeneeded' => 'Precisas de uma faca para poder fazer isso.', 
'pickaxeneeded' => 'Precisas de uma picareta para poder fazer isso.', 
'breedingbuy_ok' => 'Compraste uma quinta.', 
'terrainbuy_ok' => 'Compraste um terreno por %s moedas de prata.', 
'terrainsell_ok' => 'Vendeste o teu campo por %s moedas de prata. Pagaste %s moedas de prata em taxas.', 
'royalp_appointvassal_ok' => 'Atribuíste o cargo de Vassalo(a) de %s a %s.', 
'royalp_candidateisincharge' => 'O(A) candidato(a) está encarregado de', 
'royalp_candidateisfromdifferentkingdom' => 'O(A) candidato(a) pertence a uma Reino diferente.', 
'resign_from_role_messagesubject' => '%s renunciou ao seu cargo.', 
'resign_from_role_messagebody' => '%s renunciou ao seu cargo com a seguinte explicação: %s', 
'resign_from_role_ok' => 'Renunciaste ao teu cargo.', 
'revoke_role' => 'Revogar cargo', 
'revoke_role_ok' => 'Atribuíste o cargo de %s a %s.', 
'char_hasntrole' => 'O jogador escolhido não desempenha nenhum cargo.', 
'castle_deletelaw_ok' => 'Revogaste a lei.', 
'castle_editlaw_ok' => 'Modificaste a lei.', 
'askaudience_messagesubject' => '%s solicitou uma audiência', 
'royalp_askaudience_ok' => 'Solicitaste uma audiência com o(a) Regente.', 
'appoint_priest' => 'Nomear um Pároco', 
'appoint_bishop' => 'Nomear um Bispo', 
'appoint_cardinal' => 'Nomear um Cardeal', 
'askaudience_ok' => 'Enviaste o teu pedido de audiência.', 
'marketbuy_maxweightreached' => 'Já estás sobrecarregado(a), não consegues transportar mais objetos.', 
'wear_ok' => 'Equipaste: %s.', 
'undress_ok' => 'Removeste: %s.', 
'shop_craftok' => 'Começaste a produzir o objeto.', 
'craft_cantcreateobject' => 'Não podes produzir este tipo de objeto.', 
'craft_chardoesnthaveneededitems' => 'Não possuis todos os materiais necessários para a produção.', 
'negative_quantity' => 'Por favor introduz um número maior que zero (0).', 
'free_motivationempty' => 'Deves apresentar uma razão para libertar o(a) prisioneiro(a).', 
'freeprisoner_ok' => 'Libertaste %s.', 
'publishsentence_parametersempty' => 'O destinatário e a sentença são obrigatórios.', 
'publishsentence_ok' => 'Proferiste a sentença.', 
'publishsentence_characterhasarole' => 'Não podes proferir uma sentença a %s, os diplomatas tomarão conta destes casos.', 
'publishsentence_messagesubject' => 'O juiz proferiu uma sentença.', 
'publishsentence_sentencetoolong' => 'O texto da sentença deverá ter no máximo 250 caracteres.', 
'deletesentence_notnew' => 'Não é possível anular uma sentença já atribuída.', 
'deletesentence_messagesubject_target' => 'O juiz cancelou uma sentença.', 
'deletesentence_ok' => 'Cancelaste a sentença.', 
'castle_candidateisfromdifferentnode' => 'Apenas podes nomear cidadãos já residentes na tua região.', 
'castle_appointsheriff_ok' => 'Nomeaste %s Capitão da Guarda de %s.', 
'castle_appointmagistrate_ok' => 'Nomeaste %s Magistrado de %s.', 
'charhasnomorerole' => 'Não podes revogar o cargo de %s.', 
'change_city_samecity' => 'Não podes mudar-te para %s porque já aí vives.', 
'change_city_ok' => 'Mudaste-te e és agora cidadã(o) de %s.', 
'change_city_timenotexpired' => 'Não podes mudar-te tão cedo. Deves permanecer, no mínimo, 15 dias numa região antes de mudares para outra.', 
'change_city_charhasarole' => 'Antes de te mudares, por favor, renuncia ao teu cargo.', 
'starving_subject' => '%s, estás a morrer de fome...', 
'starving_body' => '%s, se não comeres alguma coisa, amanhã ou no dia seguinte, vais morrer. O teu personagem %s e os seus bens serão apagados e se quiseres jogar novamente terás que criar um novo personagem.', 
'charinroledied_subject' => '%s, morreu de fome; o cargo está vago.', 
'item_notcure' => 'Não podes curar-te a ti próprio(a) com este tipo de objeto.', 
'cure_ok' => 'Estás curado(a) e sentes-te muito bem!', 
'shop_configure_ok' => 'O teu anúncio foi gravado.', 
'castle_addannouncement_ok' => 'O anúncio foi publicado.', 
'castle_editannouncement_ok' => 'O anúncio foi modificado.', 
'cannotcancelwardeclaration' => 'Não podes cancelar a declaração de guerra; agora já é tarde.', 
'deletewaraction_ok' => 'Cancelaste a declaração de guerra.', 
'senditem' => 'Enviar um objeto', 
'senditem_helper' => 'Podes enviar um objeto para outro personagem pagando algumas moedas de prata. O tempo de envio depende da localização e do peso do objeto.', 
'senditem_sendnormalitem' => 'Estás prestes a enviar', 
'senditem_sendcoins' => 'Estás a enviar', 
'senditem_ok' => 'Enviaste um objeto.', 
'senditem_shortmessage' => 'A enviar um objeto', 
'senditem_longmessage' => 'Estás a enviar um objeto.', 
'equipped_item' => 'Não podes enviar um objeto que estás a usar.', 
'norole' => 'Ainda não tens nenhum cargo.', 
'cannotattackchurch' => 'Não podes atacar a Igreja.', 
'bf_add_attack_ok' => 'Juntaste-te aos atacantes.', 
'bf_add_defend_ok' => 'Juntaste-te aos defensores.', 
'bf_retire_ok' => 'Abandonaste a batalha.', 
'giveitems_ok' => 'objetos modificados.', 
'toplist_doesnt_exist' => 'Esta toplist não está configurada.', 
'buy_avatar_ok' => 'Compraste uma imagem para o teu personagem. A equipa do ME foi notificada por email e vai atualizar o teu perfil brevemente.', 
'senditem_costmessage' => 'Estás prestes a enviar <b>%d %s</b> para <b>%s</b> por um total de <b>%s Kgs</b> e um custo de <b>%d moeda(s) de prata</b>. Os bens serão recebidos em <b>%s</b>.', 
'sending_alreadysending' => 'Estás a enviar <b>%d %s</b> para <b>%s</b>. Os bens serão recebidos em <b>%s</b>.', 
'renthorse_ok' => 'Alugaste um cavalo robusto e veloz.', 
'hirehelper_ok' => 'Contrataste um ajudante.', 
'item_wrongsex' => 'Após demorada reflexão, decidiste não vestir esta roupa.', 
'feedanimals_ok' => 'Estás a alimentar os teus animais.', 
'sail_no_porto' => 'Esta região não tem um porto de (des)embarque.', 
'sail_no_route' => 'Não há ligação marítima entre estas duas cidades.', 
'item_wrongrole' => 'Não preenches os requisitos para usar esta peça de roupa.', 
'item_not_enough_str' => 'Não tens força suficiente para usar este objeto.', 
'incompatible_worn_items_1' => 'Não conseguiste vestir esta roupa. Parece-te que tens que despir algo primeiro.', 
'incompatible_worn_items_2' => 'Não conseguiste vestir esta roupa. Parece-te que tens que despir algo primeiro.', 
'change_city_destregionisfull' => '%s já está sobrepovoado e não pode aceitar novos cidadãos.', 
'convertcurrency_ok' => 'Converteste as moedas.', 
'volunteerworkhourscheck' => 'Podes trabalhar voluntariamente entre 1 a 9 horas.', 
'paidworkhourscheck' => 'Podes trabalhar durante três, seis ou nove horas.', 
'notenoughenergyglut' => 'Estás demasiado(a) cansado(a) ou esfomeado para começar esta ação.', 
'worknotenoughslots' => 'Um guarda aproxima-se de ti e informa-te que já não há mais trabalhos pagos disponíveis.', 
'workonproject_ok' => 'Começaste a trabalhar num projeto.', 
'sendmoneynotoldenough' => 'Ainda não estás autorizado(a) a enviar dinheiro pelo correio.', 
'change_city' => 'Tornar-te cidadã(o)', 
'transfer' => 'Transferir', 
'changeattributes_ok' => 'Redistribuíste o valor dos teus atributos.', 
'sellproperty_propertynotempty' => 'O armazém/inventário da propriedade não está vazia. Contacta o(a) proprietário(a) para a esvaziar.', 
'sellproperty_pendingactionexists' => 'O(A) proprietário(a) está a trabalhar neste momento. Contacta-o(a) e diz-lhe para abandonar o trabalho.', 
'sendnotsendableitem' => 'Não podes enviar este tipo de objetos.', 
'restrain' => 'Bloquear', 
'craft_neededitemsmissing' => 'Faltam alguns materiais necessários à produção. Verifica o armazém/inventário da loja/oficina.', 
'structure_fullinventory' => 'A armazém/inventário está cheio, tenta livrar-te de alguns objetos antes de produzires mais.', 
'change_city_destnodeisindependent' => 'Não podes mudar-te para esta região porque ainda não tem governo.', 
'change_city_helper' => 'Podes mudar-te para %s. O custo é de <b>%s</b> moedas de prata. Depois de te mudares, necessitas permanecer na região pelo menos <b>30</b> dias antes de te poderes mudar novamente.', 
'sendnormalitemslimitation' => 'Só podes enviar um objeto.', 
'senditem_totalitemsmessage' => 'Tens um total de  <b>%d</b> %s.', 
'acquireclearancepermit_ok' => 'Compraste uma passagem/autorização.', 
'onlyoneoccurrenceforthisitem' => 'Podes carregar apenas um objeto deste tipo.', 
'acquiresupercart_ok' => 'Compraste uma carroça reforçada.', 
'itemtrashed_ok' => 'Livraste-te de alguns objetos.', 
'shovel_no_shovel' => 'Para recolheres areia necessitas de ter uma pá.', 
'fish_no_fishing_net' => 'Necessitas de uma rede de pesca.', 
'regionisindependent' => 'Quando te aproximas do edifício, um grupo de camponeses bloqueia-te o caminho.', 
'canbuyonlyone' => 'Só podes comprar um objeto deste tipo.', 
'buyship_ok' => 'Compraste um navio de mercante.', 
'customerscantbemerchant' => 'O remetente e o destinatário têm de ser dois utilizadores diferentes. Não podes ser,  ao mesmo tempo, remetente e destinatário.', 
'exhibit_scroll' => 'Exibir o pergaminho', 
'exhibit_scroll_helper' => 'Pode acontecer que um capitão, soldado, juiz ou jogador que te peça para mostrar um pergaminho. Podes mostrar um pergaminho selecionando "mostrar" quando clicas sobre o pergaminho. Um evento será enviado com as instruções de leitura do pergaminho. Só podes enviar um documento para um jogador que esteja na mesma região que tu.', 
'only_generic_scroll' => 'Apenas podes mostrar pergaminhos e documentos!', 
'travel_to_bf' => 'Estás a viajar em direção ao campo de batalha.', 
'select_color_tint' => 'Seleciona a tinta', 
'tint_helper' => 'Podes escolher a tinta a aplicar à roupa selecionada. Para tingir a roupa necessitas de uma tigela de tingir.', 
'missing_dyebowl' => 'Para tingires a roupa necessitas de uma tigela de tingir.', 
'dye_ok' => 'Tingiste o item com sucesso.', 
'move_charisrestrained' => 'Quando tentas sair da região, um guarda bloqueia-te e diz-te que tens que permanecer durante %s.', 
'castle_candidateisfromdifferentregion' => 'O(A) candidato(a) deve residir na região.', 
'acquirequeue_ok' => 'Compraste algumas poções de aumento de produtividade.', 
'craft_toomanyslot' => 'Não são necessárias tantas ações para completar o objeto.', 
'marketsellitem_itemislocked' => 'Este objeto é pessoal, não podes livrar-te dele.', 
'declarerevolt_notpossible' => 'Estás a preparar uma missiva anónima, na paz da tua casa, dirigida ao(à) Regente a expressar o teu descontentamento em relação à sua administração e às suas capacidades de liderança. Em seguida, dás ordens a um emissário para enviar a missiva <b>imediatamente</b>.<br/><br/>Estás consciente de que esta ação te trará graves consequências assim que for recebida e lida, mas já não há como voltar atrás. O emissário pede-te <b>50 moedas de prata</b> como recompensa pelos seus serviços secretos.', 
'house_declarerevolt_running_helper' => 'A revolta começou, o(a) Regente já foi informado(a). O teu exército está a agrupar-se junto ao Palácio Real, por isso a batalha começará brevemente em <b>%s</b>.', 
'revolt_kingcantsupportrevolt' => 'Apercebes-te de que apoiar a revolta não é uma ideia assim tão boa.', 
'revolt_choosefaction_ok' => 'Decidiste quem vais apoiar.', 
'revolt_charfactionnotchosen' => 'Ainda não escolheste quem vais apoiar.', 
'revolt_leaverevolt_ok' => 'Pensando melhor, decides que afinal não queres apoiar nenhum dos lados. Talvez seja melhor fugires para longe daqui.', 
'revolt_leadercantsupportking' => 'Depois de alguma reflexão, és da opinião que apoiar o(a) Regente, afinal, não é boa ideia.', 
'declarerevolt_alreadyfighting' => 'Já estás em ação num campo de batalha.', 
'revolt_charmustbekingdomresident' => 'Quando te aproximas, apercebes-te de que as pessoas estão desconfiadas e de que não vêm com bons olhos os estranhos intrometidos.', 
'defender_underrevolt' => 'Foste informado acerca de uma revolta iminente em %s; achas melhor esperar antes de declarares qualquer ação hostil.', 
'chooserevoltfaction_notoldenough' => 'Ainda não viveste tempo suficiente no Reino para tomares partido na revolta.', 
'bonus-hasalreadybonus' => 'Este bónus já está ativo ou tens algum outro bónus que está ativo e que é incompatível.', 
'bonus-acquirebonusok' => 'Compraste o bónus.', 
'travelmessage' => 'Estás a viajar de %s para %s.', 
'hammerneeded' => 'Necessitas de um martelo para completar essa ação.', 
'hoeneeded' => 'Necessitas de uma enxada para completar essa ação.', 
'bucketneeded' => 'Necessitas de um balde para completar essa ação.', 
'bellowneeded' => 'Necessitas de um fole para completar essa ação.', 
'reason_cleanprisons' => 'Limpa a prisão', 
'reason_boardvisibility' => 'Visibilidade do quadro de anúncios', 
'reason_questreward' => 'Prémio por completares a Missão', 
'reason_travelerpackage' => 'Bónus Pacote de Viajante', 
'reason_studycost' => 'A estudar/Em exercício', 
'reason_marketbuy' => 'Bens comprados no mercado', 
'reason_supercartbonus' => 'Bónus Super Carroça', 
'reason_basicpackage' => 'Comprar pacote básico', 
'reason_senditems' => 'Envia objetos', 
'reason_notspecified' => 'Razão não especificada', 
'reason_sailcost' => 'Custos de navegação', 
'reason_toplistvote' => 'Votação Toplist', 
'reason_structurebuy' => 'Adquire um edifício', 
'reason_referralbonus' => 'Bónus de Afilhado', 
'reason_structuresold' => 'Venda de propriedade', 
'reason_marketsale' => 'Bens vendidos no mercado', 
'reason_becomeking' => 'Despesas de coroação', 
'reason_adminsend' => 'Mensagem da Administração', 
'loot' => 'Pesquisar', 
'reason_game_diceelite' => 'Jogo dos Dados (Salão dos Nobres)', 
'reason_workerpackage' => 'Adquirir Bónus Pacote de Trabalhador', 
'reason_buildsalary' => 'Salário dos Trabalhadores de construção', 
'reason_game_dicesimple' => 'Jogo dos Dados (Salão dos Plebeus)', 
'reason_purchase' => 'Compra', 
'reason_duelpresence' => 'Presença de duelo', 
'reason_duelabsence' => 'Ausência de duelo', 
'reason_lootdiscovered' => 'Apanhado(a) a roubar', 
'error-notenough-questpoints' => 'Não podes utilizar esta funcionalidade sem possuíres, pelo menos, %d pontos de missão.', 
'achievementmissing' => 'Não conseguiste obter o seguinte objetivo: %s', 
'reason_prayer' => 'Oração', 
'paperpieceneeded' => 'Necessitas de um pedaço de papel.', 
'paperpieceandwaxsealneeded' => 'Necessitas de um pedaço de papel e de um selo de cera.', 
'reason_questtoken' => 'Enviadas 10 Insígnias de Missão úteis.', 
'reason_resttavern' => 'Repousar na taverna', 
'reason_donatecoins' => 'Doação', 
'reason_goodsandservicestax' => 'Bens e Taxas de Serviço', 
'reason_wage' => 'Salário', 
'reason_atelierlicense' => 'Comprar uma licença de Ateliê', 
'error-notenabledwhenrestrained' => 'Estás atualmente preso, não podes fazer isso.', 
'reason_tavernincome' => 'Lucro da Taverna', 
'reason_dailyrevenue' => 'Bónus diário por cidadão ativo', 
'reason_revokerole' => 'Remover do cargo', 
'reason_roleassignment' => 'Atribuir um cargo', 
'userisnotactive' => 'A tua conta ainda não está validada. Para validar segue as instruções do email que recebeste depois do registo.', 
'reason_suggestionsponsorship' => 'Sugestão de Apadrinhamento', 
'reason_wardrobeapproval' => 'Aprovação para Personalização do Guarda-roupa', 
'battlefielddismountedcantgoback' => 'O campo de batalha foi removido, não podes lá regressar.', 
'info-answered' => 'Respondeste ao pedido de casamento.', 
'error-proposalnotfound' => 'Pedido não encontrado.', 
'error-weddingproposalnotaccepted' => 'O pedido de casamento não foi ainda enviado ou não foi aceite.', 
'error-proposalalreadyanswered' => 'Já respondeste a este pedido.', 
'error-charnotavailableforregfunctions' => '%s declina o teu pedido porque não quer participar.', 
'reason_coursegain' => 'Ganho de Curso', 
'reason_wardrobeapprovalfree' => 'Aprovação de Personalização de Guarda-roupa Gratuita', 
'error-tooyoung' => 'És demasiado novo para fazer isto.', 
'reason_diamondring' => 'Compra de Bónus: Anel de Diamante', 
'reason_professionaldesk' => 'Compra de Bónus: Escrivaninha profissional', 
'reason_atelier-license-weapon' => 'Compra de Licença de Guarda-roupa: Arma/Armadura', 
'reason_atelier-license-avatar' => 'Compra de Licença de Guarda-roupa: Avatar', 
'reason_elixirofhealth' => 'Compra de Bónus: Elixir de Saúde', 
'reason_elixirofdexterity' => 'Compra de Bónus: Elixir de Destreza', 
'reason_elixirofstrength' => 'Compra de Bónus: Elixir de Força', 
'reason_elixirofconstitution' => 'Compra de Bónus: Elixir de Constituição', 
'reason_elixirofintelligence' => 'Compra de Bónus: Elixir de Inteligência', 
'reason_elixirofstamina' => 'Compra de Bónus: Elixir de Resistência', 
'reason_sparringpartner' => 'Treinar com Parceiro', 
'glance' => 'Espreitar', 
'equipment_failed' => 'Não estás a usar o itens apropriados para completar a função.', 
'charissick' => 'Não podes ir para retiro porque não te encontras bem de saúde.', 
'reason_dailyreward' => 'Preço Diário', 
'curedisease' => 'Curar Doença', 
'curehealth' => 'Curar saúde', 
'initiation' => 'Iniciação', 
'error_structure_tool_missing' => 'O edifício não tem as ferramentas necessárias para realizar a ação.', 
'confirm_operation_consume' => 'Confirmar consumo de %s %s?', 
'equipment_failed_craft' => 'Para completar esta ação, necessitas ter cobertos o corpo e pés. Também tens que usar na mão direita a ferramenta apropriada: <strong>%s</strong>', 
'reason_ipcheckshield' => 'Compra de Bónus: Proteção de Partilha de IP', 
'reason_rosary' => 'Compra de Bónus: Rosário', 
'reason_supercart' => 'Compra de Bónus: Carroça Profissional', 
'reason_elixirofcuredisease' => 'Compra de Bónus: Elixir de Curar Doenças', 
'attack' => 'Atacar', 
'error-moduleisdisabled' => 'Esta função está atualmente desativada.', 
'equipmentfailed_missing' => 'Precisas de equipar os seguintes itens para executar esta ação: %s', 
'equipmentfailed_wrong' => 'Não podes fazer esta ação porque estás a vestir os itens errados nas seguintes partes do corpo:<br/> %s.', 
'info-unequippedall' => 'Removeste todo o equipamento.', 
'senditems_updatesponsorstats' => 'Atualizar Estatística de Compras de Dobrões', 
'sendinfo' => 'Enviar este item vai custar-te <span class=\'value\' id=\'cost\'>?</span> moedas de prata e será entregue em <span class=\'value\' id=\'time\'>?</span>.', 
'marketbuyitem_cannotbuyreserveditem' => 'Não podes comprar este item, está reservado para outro Personagem.', 

);

?>