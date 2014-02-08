<?php

// Define the preferences

pref
(
    '[Engage-Reward]/CReward/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '奖励',
        STRING_NUMBER_SINGULAR => '奖励',
        STRING_VOWELL => false
    )
);


// Actions

str(ACTION_CREATE . 'CReward', '新建奖励');

str(ACTION_DELETE . 'CReward', '删除此奖励');
str(ACTION_DELETE . 'CReward?object', '删除此奖励');
str(ACTION_DELETE . 'CReward?prompt&message', '您即将从程序中删除此奖励。单击OK确认。');
str(ACTION_DELETE . 'CReward?prompt&title', '确定？');

str(ACTION_DISABLE . 'CReward?object', '删除此奖励');
str(ACTION_EDIT . 'CReward', '编辑奖励');
str(ACTION_EDIT . 'CReward?object', '编辑此奖励');
str(ACTION_ENABLE . 'CReward?object', '禁用此奖励');
str(ACTION_FIND . 'CReward', '查找奖励');

str(ACTION_GENERATE_REPORT . 'CReward?object', '创建报告');

str(ACTION_HOLD . 'CReward?object', '暂停奖励');
str(ACTION_HOLD . 'CReward?prompt&message', '您将要暂停这个奖励。单击OK确认。');
str(ACTION_HOLD . 'CReward?prompt&title', '暂停此奖励');

str(ACTION_INSERT . 'CReward', '新建奖励');
str(ACTION_LIST . 'CReward', '奖励列表');
str(ACTION_MONITOR . 'CReward', '监察奖励');
str(ACTION_MONITOR . 'CReward?object', '监察此奖励');

str(ACTION_RESTORE . 'CReward?object', '恢复奖励');

str(ACTION_RELEASE . 'CReward?object', '发布此奖励');
str(ACTION_RELEASE . 'CReward?prompt&message', '您将要发布这个奖励。单击OK确认。');
str(ACTION_RELEASE . 'CReward?prompt&title', '发布此奖励');

str(ACTION_SAVE . 'CReward?object', '保存此奖励');
str(ACTION_VIEW . 'CReward?object', '显示此奖励');
// str(ACTION_ACQUIRE .'CReward?object', 'Acquire the reward');


// Release / Hold action

str('CReward.property.hold.action', '暂停此奖励');
str('CReward.property.release.action', '发布此奖励');


// Indicators

str('CReward.indicator.nbAcquirers', '获奖者人数');
str('CReward.indicator.nbAcquirers?values', '获奖者人数');
str('CReward.indicator.nbAcquirers?plural', '获奖者人数');

str('CReward.indicator.nbAcquisitions', '获得奖励总数');
str('CReward.indicator.nbAcquisitions?values', '获得奖励总数');
str('CReward.indicator.nbAcquisitions?plural', '获得奖励总数');

str('CReward.indicator.category.meter', '总计');
str('CReward.indicator.category.users', '个人');


// Enums

str('CReward.enum.type.badge', '徽章');
str('CReward.enum.type.product', '产品');
str('CReward.enum.type.service', '服务');
str('CReward.enum.type.voucher', '凭单');


// Filters

str('CReward.filter.name', '名称：');
str('CReward.filter.type','类型：');
str('CReward.filter.price', '价格：');
str('CReward.filter.isQuantityLimited','是否限量？');


// Geolocalized objects

str('CReward.geolocalized.purchases', '购买');
str('CReward.geolocalized.individuals','个人');


// Object

str('CReward', '奖励');
str('CReward?current', '当前奖励');
str('CReward?filter', '过滤奖励');
str('CReward?manage', '管理奖励');
str('CReward?plural', '奖励');
str('CReward?plural&short', '奖励');
str('CReward?short', '奖励');
str('CReward?isReleased', '此奖励可用');
str('CReward?isReleased&description', '该奖项已被发布，意味着它已经公开。如果你需要修改它，我们建议等到高峰时间之后后，把奖励暂停，然后再编辑。');
str('CReward?isNotReleased', '此奖励已暂停');
str('CReward?isNotReleased&description', '此奖励尚未发布，意味着只有管理员可以看到。');


// Properties

str('CReward.property.acquisitions', '收购');

str('CReward.property.color?label', '颜色：');

str('CReward.property.description?help&description', '告诉我们的奖励是什么。');
str('CReward.property.description?label', '描述：');
str('CReward.property.description?placeholder', '描述奖励');

str('CReward.property.frequencyOfAcquisition?help&description', '例如，如果奖励被设置为每周一此，你的计划的成员将被设置为每周只允许获得一次奖励。');
str('CReward.property.frequencyOfAcquisition?help&title', '此奖励将不可能被频繁获得');
str('CReward.property.frequencyOfAcquisition?label', '');
str('CReward.property.frequencyOfAcquisition?placeholder', '1');

str('CReward.property.isAcquisitionLimited?label', '此奖励获取频率为每：');
str('CReward.property.isAcquisitionLimited', ' ');

str('CReward.property.initialQuantity?help&description', '此奖励有过少现货？');
str('CReward.property.initialQuantity?label', '');
str('CReward.property.initialQuantity?placeholder', '奖励现货数量');

str('CReward.property.isQuantityLimited', '数量有限');
str('CReward.property.isQuantityLimited?label', '有多少库存物品？');

str('CReward.property.photo?label', '照片：');
str('CReward.property.photo?help&description', '人们更喜欢有印象深刻的视觉效果的东西。你应该上传照片，让您的奖励更独特！');
str('CReward.property.photo?help&title', '上传照片');

str('CReward.property.price?help&description', '输入成员可以被允许获得此奖励的价格（积分）。');
str('CReward.property.price?help&title', '需要花费多少积分？');
str('CReward.property.price?label', '价格：');
str('CReward.property.price?placeholder', '0');
str('CReward.property.price?suffix', '%1');
str('CReward.property.price.edit?suffix', '积分');

str('CReward.property.maxAcquisitionsPerIndividual?help&description', '例如，如果你想让个人能够获得这种奖励不超过10次，将它设置成10。如果不想设置任何特别限制，将其留空。');
str('CReward.property.maxAcquisitionsPerIndividual?help&title', '此奖励可以被某个个人获取多少次？');
str('CReward.property.maxAcquisitionsPerIndividual?label', '每个个人获取奖励最大数量：');
str('CReward.property.maxAcquisitionsPerIndividual?placeholder', '10');

str('CReward.property.name?help&description', '例如，\'马尔代夫2周游\' 或者 \'Lady Gaga现场演唱会门票\'.');
str('CReward.property.name?label', '名称：');
str('CReward.property.name?placeholder', '填写一个奖励名称');

str('CReward.property.rewardCategoryId?help&description', '输入类别名称。如果此类别已经存在，它将会出现在列表中。否则，你可以创建此类别。');
str('CReward.property.rewardCategoryId?label', '类别：');
str('CReward.property.rewardCategoryId?placeholder', '指定奖励类别');

str('CReward.property.rewardTags?help&description', '输入标签名称。如果此标签已经存在，它将会出现在列表中。否则，你可以创建此标签。');
str('CReward.property.rewardTags?label', '标签：');
str('CReward.property.rewardTags?placeholder', '指定奖励标签');

str('CReward.property.type?help&description', '什么样的奖励呢？');
str('CReward.property.type?label', '奖励类型：');
str('CReward.property.type?placeholder', '一个奖励可以是徽章，优惠券，产品或服务。');


// Sections

str('CReward.section.reward', '奖励');
str('CReward.section.reward?description', '奖励描述');

str('CReward.section.reward.activity.chart.title', '获奖者人数与获得奖励总数');
str('CReward.section.reward.about.price', '价格');
str('CReward.section.reward.about.label.about', '关于奖励');
str('CReward.section.reward.about.label.conditions', '条件');
str('CReward.section.reward.about.label.description', '描述：');
str('CReward.section.reward.about.label.level', '可以通过以下方式获得：');
str('CReward.section.reward.about.label.limitation', '限制：');
str('CReward.section.reward.about.label.name', '名称');
str('CReward.section.reward.about.label.type', '类型：');
str('CReward.section.reward.activity.nbAcquisitions', '获得的奖励');
str('CReward.section.reward.activity.nbAcquirers', '个人');
str('CReward.section.reward.activity.inStock', '库存物品');
str('CReward.section.reward.activity.nbPoints', '获取的NQ积分');


str('CReward.section.tiers', '层级');
str('CReward.section.tiers?description', '指定奖励层级');

str('CReward.section.listRewards', '奖励列表');
str('CReward.section.activity', '行为');
str('CReward.section.lastRewards', '最后奖励');
str('CReward.section.tags', '标签和类别');


// List

str('CReward.range', '范围');
str('CReward.list.results', '奖励名单结果：');
str('CReward.RemainInStock', '库存余量：');
str('CReward.price', '价格：');
str('CReward.InStock', '是否可用');
str('CReward.OutOfStock', '缺货');
str('CReward.unlimited', '无限制');
str('CReward.noElementResult', '未找到奖励。');
str('CReward.noElementResult?text', '您可以在奖励部分创建的奖励。');


// Tags

str('CReward.tags?label', '标签');


// Separators

str('CReward.separator.about', '关于奖励');
str('CReward.separator.restrictions', '限制');
str('CReward.separator.select', '选择一个或多个奖励');
str('CReward.separator.stock', '库存');


//

str('CRewardCategory.selected', '所选类别：');

?>
