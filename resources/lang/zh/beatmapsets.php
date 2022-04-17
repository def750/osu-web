<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'availability' => [
        'disabled' => '该谱面现在无法下载。',
        'parts-removed' => '应歌曲作者或第三方版权持有者的要求，这张谱面已无法下载。',
        'more-info' => '点击这里查看更多信息。',
        'rule_violation' => '已在审核后移除了谱面中不适合于 osu! 展示的内容。',
    ],

    'download' => [
        'limit_exceeded' => '慢一点，打几张图再回来吧。',
    ],

    'featured_artist_badge' => [
        'label' => '精选艺术家',
    ],

    'index' => [
        'title' => '谱面列表',
        'guest_title' => '谱面',
    ],

    'panel' => [
        'empty' => '没有谱面',

        'download' => [
            'all' => '下载',
            'video' => '下载并包含视频',
            'no_video' => '下载并不包含视频',
            'direct' => '在 osu!direct 中查看',
        ],
    ],

    'nominate' => [
        'hybrid_requires_modes' => '您需要在多模式谱面中选择至少一个游戏模式并提名。',
        'incorrect_mode' => '您没有提名 :mode 模式的权限。',
        'full_bn_required' => '您必须成为正式审核团队成员才能提名这张谱面。',
        'too_many' => '提名需求已达标。',

        'dialog' => [
            'confirmation' => '您确定要提名这张谱面吗？',
            'header' => '提名谱面',
            'hybrid_warning' => '注意：您只能提名一次，所以请确保提名包含所有您想要提名的游戏模式。',
            'which_modes' => '您要提名哪种模式？',
        ],
    ],

    'nsfw_badge' => [
        'label' => '少儿不宜',
    ],

    'show' => [
        'discussion' => '讨论',

        'details' => [
            'by_artist' => 'by :artist',
            'favourite' => '收藏这张谱面',
            'favourite_login' => '登录以收藏这张谱面',
            'logged-out' => '下载谱面前请先登录！',
            'mapped_by' => '谱师：:mapper',
            'unfavourite' => '取消收藏',
            'updated_timeago' => '上次更新于 :timeago',

            'download' => [
                '_' => '下载',
                'direct' => '',
                'no-video' => '不包含视频',
                'video' => '包含视频',
            ],

            'login_required' => [
                'bottom' => '以使用更多的功能',
                'top' => '登录',
            ],
        ],

        'details_date' => [
            'approved' => '于 :timeago Approved',
            'loved' => '于 :timeago Loved',
            'qualified' => '于 :timeago Qualified ',
            'ranked' => '于 :timeago Ranked',
            'submitted' => '提交于 :timeago',
            'updated' => '上次更新于 :timeago',
        ],

        'favourites' => [
            'limit_reached' => '谱面收藏数超出限制，请删除一些后再试。',
        ],

        'hype' => [
            'action' => '如果你觉得这张谱面很好玩，推荐它来帮助它发展到<strong>Ranked</strong>状态。',

            'current' => [
                '_' => '这张谱面正处于 :status 状态。',

                'status' => [
                    'pending' => 'pending',
                    'qualified' => 'qualified',
                    'wip' => '制作中',
                ],
            ],

            'disqualify' => [
                '_' => '如果你认为此谱面有问题，可以按下 :link 取消提名。',
            ],

            'report' => [
                '_' => '如果您发现此谱面有问题，请前往 :link 通知审核团队。',
                'button' => '报告问题',
                'link' => '这里',
            ],
        ],

        'info' => [
            'description' => '谱面介绍',
            'genre' => '流派',
            'language' => '语言',
            'no_scores' => '数据还在计算中。。。',
            'nsfw' => '少儿不宜内容',
            'offset' => '在线偏移值',
            'points-of-failure' => '失败位置',
            'source' => '来源',
            'storyboard' => '此谱面包含故事板',
            'success-rate' => '成功率',
            'tags' => '标签',
            'video' => '此谱面包含视频',
        ],

        'nsfw_warning' => [
            'details' => '此谱面包含少儿不宜、冒犯性或令人不安的内容。您仍然想查看它吗？',
            'title' => '少儿不宜内容',

            'buttons' => [
                'disable' => '关闭警告',
                'listing' => '返回谱面列表',
                'show' => '显示',
            ],
        ],

        'scoreboard' => [
            'achieved' => '在 :when 达成',
            'country' => '国内/区内排名',
            'error' => '加载排名失败',
            'friend' => '好友排名',
            'global' => '全球排名',
            'supporter-link' => '点击 <a href=":link">这里</a> 来查看你得到的精彩功能！',
            'supporter-only' => '你需要成为 osu! 支持者才能查看国内/好友排名！',
            'title' => '排行榜',

            'headers' => [
                'accuracy' => '准确率',
                'combo' => '最大连击',
                'miss' => 'Miss',
                'mods' => 'Mods',
                'pin' => '置顶',
                'player' => '玩家',
                'pp' => '',
                'rank' => '排名',
                'score' => '得分',
                'score_total' => '得分',
                'time' => '达成时间',
            ],

            'no_scores' => [
                'country' => '还没有玩家上传过成绩！',
                'friend' => '还没有好友上传成绩！',
                'global' => '还没有玩家上传过成绩，来玩一把？',
                'loading' => '加载分数中...',
                'unranked' => 'Unranked 谱面',
            ],
            'score' => [
                'first' => '领衔者',
                'own' => '你的最佳成绩',
            ],
            'supporter_link' => [
                '_' => '点击 :here 查看您获得的所有精彩功能！',
                'here' => '这里',
            ],
        ],

        'stats' => [
            'cs' => '圆圈大小',
            'cs-mania' => '键位数量',
            'drain' => '掉血速度',
            'accuracy' => '准度要求',
            'ar' => '缩圈速度',
            'stars' => '难度星级',
            'total_length' => '长度（游玩长度：:hit_length）',
            'bpm' => 'BPM',
            'count_circles' => '圆圈总数',
            'count_sliders' => '滑条总数',
            'offset' => '在线偏移值：:offset',
            'user-rating' => '玩家评价',
            'rating-spread' => '评分情况',
            'nominations' => '提名状态',
            'playcount' => '游玩次数',
        ],

        'status' => [
            'ranked' => 'Ranked',
            'approved' => 'Approved',
            'loved' => 'Loved',
            'qualified' => 'Qualified',
            'wip' => 'WIP',
            'pending' => 'Pending',
            'graveyard' => 'Graveyard',
        ],
    ],
];
