<?php

// Exceptions related to programs

str(EXCEPTION_PROGRAM_INDIVIDUAL_ALREADY_ENROLLED, '个人不能重复登记到程序');
str(EXCEPTION_PROGRAM_INDIVIDUAL_ALREADY_ENROLLED . '?description', '个人不能被登记到程序，可能因为此个人已经被登记到程序中。');

str(EXCEPTION_PROGRAM_INDIVIDUAL_NOT_ACCEPTED, '个人不能被登记到程序');
str(EXCEPTION_PROGRAM_INDIVIDUAL_NOT_ACCEPTED . '?description', '个人不能被登记到程序，可能因为登记本程序不支持此个人ID。');

str(EXCEPTION_PROGRAM_INDIVIDUAL_NOT_ENOUGH_POINTS, '没有足够积分');


// Exceptions related to rewards

str(EXCEPTION_REWARD_ACQUISITION_TOO_FAST, '无法获得奖励');
str(EXCEPTION_REWARD_ACQUISITION_TOO_FAST . '?description', '不要这么草率！很明显你过快的想获得相同的奖励。休息一会，稍后重试。');

str(EXCEPTION_REWARD_NOT_ASSOCIATED_WITH_TIER, '无法获得奖励');
str(EXCEPTION_REWARD_NOT_ASSOCIATED_WITH_TIER . '?description', '你想获得的奖励与你所属的层级不相关。');

str(EXCEPTION_REWARD_OUT_OF_STOCK, '无法获得奖励');
str(EXCEPTION_REWARD_OUT_OF_STOCK . '?description', '对不起，由于你想要的奖励太受欢迎导致不可用。稍后回来，我们会补充存货。');

str(EXCEPTION_REWARD_PRICE_TOO_HIGH, '无法获得奖励');
str(EXCEPTION_REWARD_PRICE_TOO_HIGH . '?description', '对不起，你没有足够的积分来获取此奖励。请你获得更多积分后再来！'); 

str(EXCEPTION_REWARD_TOO_MANY_ACQUISITIONS, '无法获得奖励');
str(EXCEPTION_REWARD_TOO_MANY_ACQUISITIONS . '?description', '看来你非常喜欢这个奖励，导致你已经得到了规定的最高限额。对不起，请为其他人保留一些！');


// Exceptions related to social networks

str(EXCEPTION_SOCIAL_POST_MESSAGE_FAIL, '信息不能发布');
str(EXCEPTION_SOCIAL_POST_MESSAGE_FAIL . '?description', '看起来是尝试向社交网络发布消息失败了。');


// Exceptions related to tags

str(EXCEPTION_TAG_NAME_NOT_AVAILABLE, '该标签不在可用');
str(EXCEPTION_TAG_NAME_NOT_AVAILABLE . '?description', '你为该标签选的名称已被分配给其他标签，请选择其他标签！');

str(EXCEPTION_TAG_NAME_VALUE_REQUIRED, '标签名称需要一个值');
str(EXCEPTION_TAG_NAME_VALUE_REQUIRED . '?description', '标签的名称是必填项，请填写。');


// Exceptions related to categories

str(EXCEPTION_CATEGORY_NAME_VALUE_REQUIRED, '类别名称需要一个值');
str(EXCEPTION_CATEGORY_NAME_VALUE_REQUIRED . '?description', '类别的名称是必填项，请填写。');

?>
