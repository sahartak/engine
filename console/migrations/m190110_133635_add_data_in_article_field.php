<?php

use yii\db\Migration;

/**
 * Class m190110_133635_add_data_in_article_field
 */
class m190110_133635_add_data_in_article_field extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        Yii::$app->db->createCommand('INSERT INTO `articles` (`id`, `category_id`, `category_child_id`, `admin_id`, `title`, `slug`, `description`, `breadcrumbs`, `meta_keywords`, `meta_description`, `meta_title`, `content`, `preview_image`, `created_at`, `updated_at`, `is_published`, `published_at`) VALUES
(4, 11, 145, 1, \'Как прописать ребенка в квартиру по месту жительства отца или матери -\', \'kak-propisat-rebenka-v-kvartiru\', \'Как прописать ребенка в квартиру - вопрос, которым задается множество новоиспеченных родителей. Узнайте правила регистрации несовершеннолетнего, упрощенный порядок процедуры.\', \'Как прописать ребенка в квартиру\', \'прописать, ребенок, квартира\', \'Как прописать ребенка в квартиру - вопрос, которым задается множество новоиспеченных родителей. Узнайте правила регистрации несовершеннолетнего, упрощенный порядок процедуры\', \'Как прописать ребенка в квартиру - упрощенная процедура и\', \'<p>Рождение младенца – прекрасное и очень важное событие. На фоне волнения и радостных эмоций родителям важно не забыть о формальностях. Мама и папа (или один из них) обязаны прописать ребенка в квартире, где зарегистрированы и постоянно проживают сами. Обязательность этой процедуры и порядок ее прохождения предусмотрены законодательством Российской Федерации (далее – РФ).</p>\r\n\r\n<div>\r\n\r\n<a name=\"h2_1\"></a><h2>Прописка несовершеннолетнего ребенка</h2>\r\n\r\n<p>Регистрация – это акт уведомления государства о проживании гражданина по конкретному адресу. Процедура обязательна как для взрослых, так и для детей. Порядок регистрации ребенка в комнате, квартире или доме существенно отличается от той же процедуры в отношении взрослого. Как и в случае с совершеннолетними гражданами, детская прописка бывает 2 видов:</p>\r\n\r\n<ul>\r\n<li>постоянная;</li>\r\n	<li>временная.</li>\r\n</ul>\r\n\r\n<a name=\"h2_1_h3_1\"></a><h3>Для чего нужна</h3>\r\n\r\n<p>Без прописки несовершеннолетнего его родитель не сможет воспользоваться привилегиями, положенными ему по статусу, или будет испытывать проблемы с их оформлением. К ним относятся:</p>\r\n\r\n<ul>\r\n<li>Получение социального пособия.</li>\r\n	<li>Оформление материнского капитала. Получить сертификат без регистрации ребенка по месту жительства родителей или одного из них невозможно.</li>\r\n	<li>Запись в детский сад. Встать в очередь на прием в дошкольное учреждение можно только по прописке малыша.</li>\r\n	<li>Уточнение: для оформления медицинского полиса новорожденному регистрация его матери является достаточным условием.</li>\r\n</ul>\r\n<div><img alt=\"Женщина с детьми\" src=\"http://sovets.net/photos/uploads/174/9596220-tekst.jpg\" style=\"width: 800px; height: 400px;\"></div>\r\n\r\n\r\n<a name=\"h2_1_h3_2\"></a><h3>С кем должен быть прописан ребенок до 14 лет</h3>\r\n\r\n<p>До наступления 14-летия оформлением прав несовершеннолетнего занимаются его родители, опекуны, усыновители – с одним из них он и должен быть прописан. Как только гражданин получит паспорт, он сможет самостоятельно инициировать процедуру регистрации в квартире. Для этого ему следует составить письменное заявление, подготовить полный пакет требуемых документов, подтверждающих его права на прописку по указанному адресу, передать их сотруднику паспортной службы по месту его жительства.</p>\r\n\r\n\r\n<a name=\"h2_2\"></a><h2>Нормативно-правовое регулирование</h2>\r\n\r\n<p>Порядок прописки ребенка в квартиру регламентируется законодательством РФ. Перечень правовых норм:</p>\r\n\r\n<ul>\r\n<li>ст. 5 – 8 Федерального закона РФ (далее – ФЗ РФ) от 25.06.1993 г. №5242-1 «О праве граждан РФ на свободу передвижения...»;</li>\r\n	<li>Постановление Правительства РФ от 17.07.1995 г. №713;</li>\r\n	<li>Жилищный кодекс РФ от 29.12.2004 г. №188-ФЗ;</li>\r\n	<li>ст. 19.15.1 – 19.15.2 Кодекса РФ об административных правонарушениях от 30.12.2001 г. №195-ФЗ (об ответственности, которая наступает в качестве последствий за нарушения миграционного режима).</li>\r\n</ul>\r\n\r\n<a name=\"h2_3\"></a><h2>Как прописать новорожденного ребенка в квартиру</h2>\r\n\r\n<p>Прописка новорожденного на жилплощади матери производится автоматически и называется первичной. Ее следует подтвердить, оформив постоянную. Можно зарегистрировать малыша по месту жительства отца – в этом случае потребуется предоставить дополнительные документы для прописки ребенка в квартиру. Стоит отметить, что при обращении к сотруднику паспортного стола заявителю следует иметь при себе:</p>\r\n\r\n<ul>\r\n<li>документ, подтверждающий отцовство;</li>\r\n	<li>составленное матерью и заверенное у нотариуса согласие на прописку у второго родителя, и его копия;</li>\r\n	<li>справку, которая подтверждает, что младенец не прописан на жилплощади матери.</li>\r\n</ul>\r\n<p>Пошаговый порядок действий будет таким:</p>\r\n\r\n<ol>\r\n<li>Младенца регистрируют в органе записи актов гражданского состояния (далее – ЗАГС), чтобы получить свидетельство о его рождении. Следует взять справку из родильного дома, которая должна выдаваться при появлении малыша на свет, и обратиться с ней в ЗАГС.</li>\r\n	<li>Собрать необходимый пакет документов, чтобы зарегистрировать новорожденного по месту жительства матери или отца.</li>\r\n	<li>Обратиться с бумагами к специалисту паспортной службы.</li>\r\n	<li>Взять у него расписку в получении бумаг.</li>\r\n	<li>Через 8 рабочих дней явиться в отделение паспортного стола по месту регистрации малыша. Предъявить расписку. Забрать свидетельство о регистрации и оригиналы представленных для его оформления документов.</li>\r\n</ol>\r\n\r\n<a name=\"h2_3_h3_1\"></a><h3>Упрощенная процедура прописки и сроки регистрации</h3>\r\n\r\n<p>Если младенца регистрируют впервые и с даты его появления на свет прошло не больше одного месяца, предусматривается упрощенная процедура его прописки в квартиру родителей или одного из них. Начинать оформление можно спустя 7 рабочих дней с момента получения свидетельства о рождении малыша. При прописке новорожденного к матери согласие отца не требуется.</p>\r\n\r\n\r\n<a name=\"h2_3_h3_2\"></a><h3>Документы для прописки новорожденного</h3>\r\n\r\n<p>Упрощенная процедура прописки в квартиру малыша, чей возраст составляет не более одного месяца, предусматривает подачу минимального количества бумаг. Чтобы зарегистрировать в квартире новорожденного, родителю следует представить сотруднику паспортной службы следующие документы:</p>\r\n\r\n<ol>\r\n<li>Заявление.</li>\r\n	<li>Свидетельство о рождении младенца.</li>\r\n	<li>Гражданский паспорт РФ его матери.</li>\r\n</ol>\r\n\r\n<a name=\"h2_4\"></a><h2>Временная регистрация малыша</h2>\r\n\r\n<p>В ряде ситуаций несовершеннолетнему может потребоваться временная регистрация. К ним относятся следующие случаи:</p>\r\n\r\n<ul>\r\n<li>Мать и/или отец переехали в другой город, регион, страну и согласно территориальному законодательству оформили временную регистрацию. Прописка осуществляется по месту проживания мамы и/или папы, является дополнением (к постоянной). Такой вид регистрации не влияет на механизмы наследования жилья и/или получения его в собственность, поэтому согласия владельца помещения, в котором проживают несовершеннолетний и его родители, не требуется.</li>\r\n	<li>Мать и отец женаты, но зарегистрированы (а иногда и проживают) по разным адресам. Пока родители принимают решение о том, куда будут прописывать ребенка на постоянной основе, один из них должен сделать ему временную регистрацию.</li>\r\n	<li>Мать и отец новорожденного не оформляли супружества официально и не заключали согласия, с кем из них будет прописан малыш. Подобные споры разрешаются в ходе судебного разбирательства, до момента вынесения вердикта несовершеннолетний должен иметь временную прописку.</li>\r\n	<li>Один из родственников (например, бабушка или дедушка) предлагает зарегистрировать внука или внучку на своей приватизированной жилплощади с целью упрощения механизма ее наследования и/или получения льгот или скидок на оплату жилищно-коммунального услуг (далее – ЖКУ) – это особенно актуально для квартир, расположенных в регионах с более высокими расценками на ЖКУ, например, в Москве. Мать или отец должны прописаться по адресу близкого человека или члена семьи вместе с ребенком.</li>\r\n</ul>\r\n<p>Чтобы сделать несовершеннолетнему временную регистрацию, матери или отцу понадобятся следующие документы:</p>\r\n\r\n<ul>\r\n<li>свидетельство о рождении ребенка;</li>\r\n	<li>заявление;</li>\r\n	<li>документ, подтверждающий временную прописку заявителя.</li>\r\n</ul>\r\n\r\n<a name=\"h2_5\"></a><h2>Правила прописки несовершеннолетних детей</h2>\r\n\r\n<p>Процедура прописки несовершеннолетнего осуществляется согласно следованию определенным правилам. Вот их список:</p>\r\n\r\n<ul>\r\n<li>Ребенок, не достигший 14 лет, должен быть прописан со своими родителями (или одним из них).</li>\r\n	<li>Если гражданину требуется покинуть территорию постоянного жительства на срок более 3 месяцев, он обязан пройти регистрацию по месту нового пребывания. Временную прописку следует оформить и несовершеннолетнему, который выехал вместе с родителем.</li>\r\n	<li>Семья, которая выписалась с одной жилплощади и переселилась на другую, обязана начать процедуру регистрации своих детей по новому адресу не позже, чем через 7 дней.</li>\r\n	<li>Оформить прописку отдельно от мамы с папой может лицо:</li>\r\n</ul>\r\n<ol>\r\n<li>достигшее совершеннолетия;</li>\r\n	<li>которому исполнилось 14 лет, но с согласия матери, отца или сотрудника органов опеки и попечительства.</li>\r\n</ol>\r\n<ul>\r\n<li>Родители обязаны прописать своего ребенка даже в такой квартире, которая не соответствует государственным нормативам жилых помещений.</li>\r\n	<li>Отец-одиночка имеет те же права, что и мать. Он может оформить прописку несовершеннолетнему. Дополнительно ему потребуется представить сотруднику отдела паспортной службы или свидетельство о смерти матери малыша, или ее официальный отказ от воспитания ребенка, или справку о лишении родительских прав.</li>\r\n	<li>При регистрации в квартире несовершеннолетнего подтверждений от остальных проживающих не требуется. Она состоится даже при их категорическом несогласии – главное, чтобы на этой площади был прописан хотя бы один из родителей.</li>\r\n	<li>Если ребенка регистрируют повторно, заявитель должен подавать 2 экземпляра листка убытия. Это талон, который оформляется при выписке с предыдущего места жительства.</li>\r\n</ul>\r\n<div><img alt=\"Люди подписывают документы\" src=\"http://sovets.net/photos/uploads/174/6034928-tekst.jpg\" style=\"width: 800px; height: 400px;\"></div>\r\n\r\n\r\n<a name=\"h2_5_h3_1\"></a><h3>При наличии прописки у родителей без права собственности</h3>\r\n\r\n<p>Согласие собственника не требуется, даже если мать и/или отец прописывают несовершеннолетнего по месту своего жительства в квартире, владельцами которой не являются. На практике дело может дойти до продажи недвижимости как имущества с обременением вместе с зарегистрированными на ней жильцами. Покупатель вправе выписывать из квартиры посторонних лиц.</p>\r\n\r\n\r\n<a name=\"h2_5_h3_2\"></a><h3>При съеме квартиры по договору найма</h3>\r\n\r\n<p>Гражданин может оформлять регистрацию на территории муниципального фонда в помещении, квартиросъемщиком которого он является по договору сдачи жилой площади в социальный найм. Члены его семьи обретают такое же право. Ребенок, родившийся после заключения соглашения о получении жилья по контракту соцнайма, прописывается в квартиру, где зарегистрированы его родители.</p>\r\n\r\n\r\n<a name=\"h2_6\"></a><h2>Какие документы нужны</h2>\r\n\r\n<p>Чтобы прописать ребенка по месту прописки матери или отца, нужен соответствующий пакет документов. Если регистрацией занимается законный представитель семьи, ему понадобится нотариально оформленная доверенность. Перечень бумаг в зависимости от сложившейся ситуации:</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:510px;\"><tbody>\r\n<tr>\r\n<td rowspan=\"7\" style=\"height:7px;width:274px;\">\r\n			<p>Документ</p>\r\n			</td>\r\n			<td colspan=\"3\" style=\"height:7px;width:406px;\">\r\n			<p>Условия</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td colspan=\"3\" style=\"height:7px;width:406px;\">\r\n			<p>Родители проживают:</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:95px;\">\r\n			<p>Совместно</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"height:7px;width:312px;\">\r\n			<p>Раздельно</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td colspan=\"3\" style=\"height:7px;width:406px;\">\r\n			<p>Семейное положение матери и отца:</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:95px;\">\r\n			<p>Супруги</p>\r\n			</td>\r\n			<td style=\"height:7px;width:236px;\">\r\n			<p>В «гостевом» браке (союз зарегистрирован, родители живут по разным адресам)</p>\r\n			</td>\r\n			<td style=\"height:7px;width:76px;\">\r\n			<p>В разводе</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td colspan=\"3\" style=\"height:7px;width:406px;\">\r\n			<p>Ребенка прописывают:</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:95px;\">\r\n			<p>К обоим родителям</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"height:7px;width:312px;\">\r\n			<p style=\"margin-left:9pt;\">К матери или отцу</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:274px;\">\r\n			<p>Заявление по форме №6</p>\r\n			</td>\r\n			<td colspan=\"3\" style=\"height:7px;width:406px;\">\r\n			<p>Требуется</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:274px;\">\r\n			<p>Свидетельство о рождении малыша</p>\r\n			</td>\r\n			<td colspan=\"3\" style=\"height:7px;width:406px;\"></td>\r\n		</tr>\r\n<tr>\r\n<td rowspan=\"2\" style=\"height:7px;width:274px;\">\r\n			<p>Паспорт гражданина РФ</p>\r\n			</td>\r\n			<td colspan=\"3\" style=\"height:7px;width:406px;\">\r\n			<p>Нужен:</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:95px;\">\r\n			<p>от обоих</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"height:7px;width:312px;\">\r\n			<p>от матери или отца, к которому прописывают ребенка</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:274px;\">\r\n			<p>Брачное свидетельство</p>\r\n			</td>\r\n			<td style=\"height:7px;width:95px;\">\r\n			<p>Требуется</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"height:7px;width:312px;\">\r\n			<p>Не нужно</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:274px;\">\r\n			<p>Выписка из домовой книги</p>\r\n			</td>\r\n			<td colspan=\"3\" style=\"height:7px;width:406px;\"></td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:274px;\">\r\n			<p>Справка о наличии лицевого счета</p>\r\n			</td>\r\n			<td colspan=\"3\" style=\"height:7px;width:406px;\"></td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:274px;\">\r\n			<p>Согласие матери/отца на прописку</p>\r\n			</td>\r\n			<td style=\"height:7px;width:95px;\">\r\n			<p>Не нужно</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"height:7px;width:312px;\"></td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:7px;width:274px;\">\r\n			<p>Свидетельство о расторжении брака, документ об установлении отцовства</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"height:7px;width:331px;\"></td>\r\n			<td style=\"height:7px;width:76px;\">\r\n			<p>Нужно</p>\r\n			</td>\r\n		</tr>\r\n<tr>\r\n<td style=\"height:52px;width:274px;\">\r\n			<p>Справка по месту регистрации одного из родителей, что ребенок с ним не прописан</p>\r\n			</td>\r\n			<td style=\"height:52px;width:95px;\"></td>\r\n			<td colspan=\"2\" style=\"height:52px;width:312px;\">\r\n			<p>Требуется</p>\r\n			</td>\r\n		</tr>\r\n</tbody></table>\r\n\r\n<a name=\"h2_6_h3_1\"></a><h3>Заявление в паспортный стол о регистрации по месту жительства (форма №6)</h3>\r\n\r\n<p>Бланк документа выдается работником паспортного стола в день подачи бумаг на прописку ребенка в квартире. Образец его заполнения размещен на стендах учреждения. Его можно найти и через интернет – на портале Главного управления по вопросам миграции Министерства внутренних дел РФ. Заполнить заявление должен один из родителей – тот, на чью жилплощадь регистрируется несовершеннолетний.</p>\r\n\r\n\r\n<a name=\"h2_6_h3_2\"></a><h3>Документы, удостоверяющие личность</h3>\r\n\r\n<p>Сотруднику паспортного стола представляются документы, подтверждающие личности всех участников процедуры и их гражданские состояния: матери, отца или родителя-одиночки, несовершеннолетнего, которого прописывают в квартиру. Требуются оригиналы и копии:</p>\r\n\r\n<ul>\r\n<li>гражданских паспортов родителей;</li>\r\n	<li>свидетельства о рождении несовершеннолетнего;</li>\r\n	<li>документа о регистрации брака;</li>\r\n	<li>свидетельств:</li>\r\n</ul>\r\n<ol>\r\n<li>о разводе;</li>\r\n	<li>об установлении отцовства.</li>\r\n</ol>\r\n\r\n<a name=\"h2_6_h3_3\"></a><h3>Выписка из домовой книги</h3>\r\n\r\n<p>Бумага предоставляется по месту жительства матери или отца – то есть, там, где находится жилплощадь, на которую будет зарегистрирован ребенок. Документ содержит информацию о прописанных по указанному адресу гражданах. Получить выписку из домовой книги можно собственнику жилья в одной из следующих инстанций:</p>\r\n\r\n<ul>\r\n<li>жилищно-эксплуатационной конторе (далее – ЖЭУ);</li>\r\n	<li>многофункциональном центре (далее – МФЦ).</li>\r\n</ul>\r\n\r\n<a name=\"h2_6_h3_4\"></a><h3>Справка о лицевом счете</h3>\r\n\r\n<p>Финансово-лицевой счет (далее – ФЛС) – документ, который содержит данные о типе, параметрах и состоянии помещения: комнаты, коммунальной или отдельной квартиры, их метраже, этаже, на котором они находятся, степени износа жилого массива, размерах индивидуального частного дома. В справке об ФЛС зафиксированы платежи за ЖКУ, сведения о характеристиках жилплощади. Документ выдается единым информационно-расчетным центром (далее – ЕИРЦ) или ЖЭУ.</p>\r\n\r\n\r\n<a name=\"h2_6_h3_5\"></a><h3>Письменное согласие одного из родителей</h3>\r\n\r\n<p>В некоторых случаях требуется документ, подтверждающий согласие одного из родителей, который не будет прописывать к себе ребенка, на регистрацию несовершеннолетнего по месту жительства другого. Вот типичные ситуации:</p>\r\n\r\n<ol>\r\n<li>При отсутствии согласия другого родителя ребенка прописывают на основании решения суда: на жилплощадь гражданина, с которым будет проживать несовершеннолетний.</li>\r\n	<li>Родители прописаны по разным адресам. Требуется согласие матери/отца на регистрацию несовершеннолетнего к отцу/матери. Документ составляется в произвольном письменном виде в присутствии сотрудника паспортного стола. Если территориальным отделением учреждения разработан унифицированный бланк согласия, следует заполнить бумагу в соответствии с ним.</li>\r\n	<li>Родитель, дающий согласие, не имеет возможности лично находиться при подаче документов сотруднику паспортной службы. От заявителя потребуется предоставление заранее составленной нотариально заверенной бумаги.</li>\r\n	<li>Во избежание двойной регистрации может потребоваться справка, подтверждающая, что ребенок не прописан у другого родителя.</li>\r\n</ol>\r\n<div><img alt=\"Мужчина пишет\" src=\"http://sovets.net/photos/uploads/174/9666371-tekst.jpg\" style=\"width: 800px; height: 400px;\"></div>\r\n\r\n\r\n<a name=\"h2_7\"></a><h2>Куда обращаться</h2>\r\n\r\n<p>Родители могут обратиться за оформлением регистрации несовершеннолетнего в несколько организаций на выбор. К ним относятся:</p>\r\n\r\n<ol>\r\n<li>Местное отделение МФЦ.</li>\r\n	<li>ЖЭУ.</li>\r\n	<li>Отдел Управления федеральной миграционной службы (далее – УФМС).</li>\r\n	<li>Единый портал государственных услуг (через интернет) – для этого одному из родителей надо заполнить и отправить на обработку форму электронной регистрации на сайте, создать личный кабинет, зайти в него, указать свое (территориальное) отделение УФМС и подать заявку. После проверки данных на его электронную почту будет прислано приглашение на оформление прописки.</li>\r\n</ol>\r\n\r\n<a name=\"h2_7_h3_1\"></a><h3>Сроки оформления</h3>\r\n\r\n<p>После подачи документов заявитель должен забрать расписку об их принятии у сотрудника отдела паспортной службы. Процесс прописки несовершеннолетнего занимает от 3 до 8 рабочих дней. По истечении этого периода к специалисту учреждения, куда подавались бумаги, должен прийти заявитель с распиской, получить свидетельство о регистрации ребенка по месту жительства родителей (или одного из них) по форме №8 и забрать:</p>\r\n\r\n<ul>\r\n<li>оригиналы гражданских паспортов РФ;</li>\r\n	<li>свидетельство о рождении прописываемого лица с отметкой о прописке.</li>\r\n</ul>\r\n\r\n<a name=\"h2_8\"></a><h2>Видео</h2>\r\n\r\n<p><iframe allow=\"autoplay; encrypted-media\" allowfullscreen=\"\" frameborder=\"0\" height=\"350\" src=\"https://www.youtube.com/embed/a1lu96sfy1c\" width=\"700\"></iframe></p>\r\n</div>\', \'xxxxxxxxxxxxxx\', 1545633842, 1545919257, 1, 1450986480);
')->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        return true;
    }

}
