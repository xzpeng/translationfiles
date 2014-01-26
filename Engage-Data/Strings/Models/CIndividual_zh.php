<?php

// Define the preferences

pref
(
    '[Engage-Data]/CIndividual/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '个人',
        STRING_NUMBER_SINGULAR => '个人',
        STRING_VOWELL => true
    )
);


// Indicators

$this->setString(STRING_INDICATOR, 'averageCart', null, '平均消费');
$this->setString(STRING_INDICATOR, 'averageCartPerStore', null, '每个店铺平均消费');
$this->setString(STRING_INDICATOR, 'averageShoppingCart', null, '购物车平均购买');
$this->setString(STRING_INDICATOR, 'campaignEmailClickRate', null, '电子邮件点击率');
$this->setString(STRING_INDICATOR, 'campaignEmailOpenRate', null, '电子邮件打开率');
$this->setString(STRING_INDICATOR, 'invoiceTotal', null, '购买总额');
$this->setString(STRING_INDICATOR, 'invoiceTotalPerStore', null, '每个店铺购买总量');
$this->setString(STRING_INDICATOR, 'nbAcquaintances', null, '认识的人');
$this->setString(STRING_INDICATOR, 'nbCampaigns', null, '活动');
$this->setString(STRING_INDICATOR, 'nbContributions', null, '贡献值');
$this->setString(STRING_INDICATOR, 'nbContributionsPerSocialNetwork', null, '每个社交网络贡献值');
$this->setString(STRING_INDICATOR, 'nbOrders', null, '订单');
$this->setString(STRING_INDICATOR, 'nbOrdersPerStore', null, '每个店铺订单');
$this->setString(STRING_INDICATOR, 'nbProductsPurchasedPerStore', null, '每个店铺购买的产品');
$this->setString(STRING_INDICATOR, 'nbPurchases', null, '购买数量');
$this->setString(STRING_INDICATOR, 'totalPurchased', null, '购买总额');
$this->setString(STRING_INDICATOR, 'invoiceTotalExcludedVat', null, '不包括增值税购买总额');
$this->setString(STRING_INDICATOR, 'invoiceTotalExclVat', null, '不包括增值税购买总额');
$this->setString(STRING_INDICATOR, 'invoiceTotalPerItemType', null, '每种类型的物品购买总额');
$this->setString(STRING_INDICATOR, 'nbOrdersPerItemType', null, '每种类型项目订单数');
$this->setString(STRING_INDICATOR, 'averageCartPerItemType', null, '每种类型项目消费');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此人，确定？');


// Label

$this->setString(STRING_PROPERTY, 'contacts', array('label'), '联系人');
$this->setString(STRING_PROPERTY, 'dateOfBirth', array('label'), '出生日期');

$this->setString(STRING_PROPERTY, 'email', array('label'), '电子邮件');
$this->setString(STRING_PROPERTY, 'emailForgeReports', array('label'), '活动');
$this->setString(STRING_PROPERTY, 'externalDateOfCreation', array('label'), '创建日期（外部）');
$this->setString(STRING_PROPERTY, 'externalDateOfDeletion', null, '删除日期（外部）');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', null, '更新日期（外部）');
$this->setString(STRING_PROPERTY, 'externalId', array('label'), 'ID（外部）');
$this->setString(STRING_PROPERTY, 'externalSource', array('label'), '来源（外部）');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', array('label'), '外部更新日期');
$this->setString(STRING_PROPERTY, 'familySituation', array('label'), '家庭情况');
$this->setString(STRING_PROPERTY, 'firstName', array('label'), '名字');
$this->setString(STRING_PROPERTY, 'gender', array('label'), '性别');
$this->setString(STRING_PROPERTY, 'initialStoreId', array('label'), '初始化店铺ID');
$this->setString(STRING_PROPERTY, 'lastName', array('label'), '姓氏');
$this->setString(STRING_PROPERTY, 'locations', array('label'), '位置');
$this->setString(STRING_PROPERTY, 'programs', null, '忠诚度计划');
$this->setString(STRING_PROPERTY, 'programs', array('label'), '忠诚度计划');
$this->setString(STRING_PROPERTY, 'stores', array('label'), '店铺');
$this->setString(STRING_PROPERTY, 'receipts', array('label'), '收入');
$this->setString(STRING_PROPERTY, 'reviews', array('label'), '评论');
$this->setString(STRING_PROPERTY, 'wishlists', array('label'), '心愿单');

$this->setString(STRING_PROPERTY, 'locationOfBirth', array('label'), '出生地');
$this->setString(STRING_PROPERTY, 'maidenName', array('label'), '婚前姓');
$this->setString(STRING_PROPERTY, 'masterIndividualId', array('label'), 'Master individual');
$this->setString(STRING_PROPERTY, 'middleName', array('label'), '中间名');
$this->setString(STRING_PROPERTY, 'nickName', array('label'), '昵称');
$this->setString(STRING_PROPERTY, 'title', array('label'), '标题');


//  String list

$this->setString(STRING_LIST, 'action', null, '行为');
$this->setString(STRING_LIST, 'defaultName', null, '名称');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'optInEmail', null, '默认不发送电子邮件');
$this->setString(STRING_LIST, 'optInCellPhone', null, '默认不联系手机号');


// Placeholder

$this->setString(STRING_PROPERTY, 'contacts', array('placeholder'), '联系人');
$this->setString(STRING_PROPERTY, 'dateOfBirth', array('placeholder'), '出生日期');

$this->setString(STRING_PROPERTY, 'description', array('placeholder'), '说明');
$this->setString(STRING_PROPERTY, 'email', array('placeholder'), '电子邮件');
$this->setString(STRING_PROPERTY, 'emailForgeReports', array('placeholder'), '活动');
$this->setString(STRING_PROPERTY, 'familySituation', array('placeholder'), '家庭情况');
$this->setString(STRING_PROPERTY, 'firstName', array('placeholder'), '名字');
$this->setString(STRING_PROPERTY, 'gender', array('placeholder'), '性别');
$this->setString(STRING_PROPERTY, 'individualStores', null, '附属店铺');
$this->setString(STRING_PROPERTY, 'initialStoreId', array('placeholder'), '初始化店铺ID');
$this->setString(STRING_PROPERTY, 'lastName', array('placeholder'), '姓氏');
$this->setString(STRING_PROPERTY, 'locations', array('placeholder'), '位置');
$this->setString(STRING_PROPERTY, 'stores', array('placeholder'), '店铺');
$this->setString(STRING_PROPERTY, 'receipts', array('placeholder'), '收入');
$this->setString(STRING_PROPERTY, 'reviews', array('placeholder'), '评论');
$this->setString(STRING_PROPERTY, 'wishlists', array('placeholder'), '心愿单');
$this->setString(STRING_PROPERTY, 'locationOfBirth', array('placeholder'), '出生地');
$this->setString(STRING_PROPERTY, 'maidenName', array('placeholder'), '婚前姓');
$this->setString(STRING_PROPERTY, 'masterIndividualId', array('placeholder'), 'Master individual');
$this->setString(STRING_PROPERTY, 'middleName', array('placeholder'), '中间名');
$this->setString(STRING_PROPERTY, 'nickName', array('placeholder'), '昵称');
$this->setString(STRING_PROPERTY, 'title', array('placeholder'), '标题');


// Properties

$this->setString(STRING_PROPERTY, 'contacts', null, '联系人');
$this->setString(STRING_PROPERTY, 'contacts', array('count'), '联系人数量');
$this->setString(STRING_PROPERTY, 'dateOfBirth', null, '出生日期');
$this->setString(STRING_PROPERTY, 'dateOfBirth', array('label'), '出生日期');

$this->setString(STRING_PROPERTY, 'description', null, '说明');
$this->setString(STRING_PROPERTY, 'email', null, '电子邮件');
$this->setString(STRING_PROPERTY, 'emailForgeReports', null, '活动');
$this->setString(STRING_PROPERTY, 'emailForgeReports', array('count'), '活动数量');
$this->setString(STRING_PROPERTY, 'externalDateOfCreation', null, '创建时间（外部）');
$this->setString(STRING_PROPERTY, 'externalDateOfDeletion', null, '删除时间（外部）');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', null, '更新时间（外部）');
$this->setString(STRING_PROPERTY, 'externalId', null, 'ID（外部）');
$this->setString(STRING_PROPERTY, 'externalSource', null, '来源（外部）');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', null, '更新时间（外部）');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', array('label'), '更新时间（外部）:');
$this->setString(STRING_PROPERTY, 'familySituation', null, '家庭情况');
$this->setString(STRING_PROPERTY, 'firstName', null, '名字');
$this->setString(STRING_PROPERTY, 'gender', null, '性别');
$this->setString(STRING_PROPERTY, 'initialStoreId', null, '初始化店铺ID');
$this->setString(STRING_PROPERTY, 'lastName', null, '姓氏');
$this->setString(STRING_PROPERTY, 'languages', null, '语言');
$this->setString(STRING_PROPERTY, 'languages', array('count'), '语言数量');
$this->setString(STRING_PROPERTY, 'locations', null, '位置');
$this->setString(STRING_PROPERTY, 'locations', array('count'), '位置数量');
$this->setString(STRING_PROPERTY, 'optInCellPhone', null, '默认不联系手机号');
$this->setString(STRING_PROPERTY, 'optInCellPhone', array('label'), '默认不联系手机号');
$this->setString(STRING_PROPERTY, 'optInEmail', null, '默认不发送电子邮件');
$this->setString(STRING_PROPERTY, 'optInEmail', array('label'), '默认不发送电子邮件');
$this->setString(STRING_PROPERTY, 'stores', null, '店铺');
$this->setString(STRING_PROPERTY, 'stores', array('count'), '店铺数量');
$this->setString(STRING_PROPERTY, 'receipts', null, '收入');
$this->setString(STRING_PROPERTY, 'receipts', array('count'), '收入数量');
$this->setString(STRING_PROPERTY, 'reviews', null, '评论');
$this->setString(STRING_PROPERTY, 'reviews', array('count'), '评论数量');
$this->setString(STRING_PROPERTY, 'wishlists', null, '心愿单');
$this->setString(STRING_PROPERTY, 'wishlists', array('count'), '心愿单数量');
$this->setString(STRING_PROPERTY, 'programs', array('count'), '计划数量');

$this->setString(STRING_PROPERTY, 'locationOfBirth', null, '出生地');
$this->setString(STRING_PROPERTY, 'maidenName', null, '婚前姓');
$this->setString(STRING_PROPERTY, 'masterIndividualId', null, 'Master individual');
$this->setString(STRING_PROPERTY, 'middleName', null, '中间名');
$this->setString(STRING_PROPERTY, 'nickName', null, '昵称');
$this->setString(STRING_PROPERTY, 'title', null, '标题');


// Sections

$this->setString(STRING_SECTION, 'Contacts', null, '联系人');
$this->setString(STRING_SECTION, 'Languages', null, '语言');
$this->setString(STRING_SECTION, 'Locations', null, '位置');
$this->setString(STRING_SECTION, 'About', null, '关于');
$this->setString(STRING_SECTION, 'Stores', null, '店铺');
$this->setString(STRING_SECTION, 'sales', null, '销售');
$this->setString(STRING_SECTION, 'campaigns', null, '活动');
$this->setString(STRING_SECTION, 'earn-burn', null, 'Earn & Burn');
$this->setString(STRING_SECTION, 'Wishlists', null, '心愿单');
$this->setString(STRING_SECTION, 'Reviews', null, '评论');
$this->setString(STRING_SECTION, 'Receipts', null, '收入');
$this->setString(STRING_SECTION, 'Programs', null, '忠诚度计划');
$this->setString(STRING_SECTION, 'EmailForgeReports', null, '活动');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');
?>
