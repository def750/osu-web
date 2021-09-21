<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'play_more' => '',
    'require_login' => '',
    'require_verification' => '',
    'restricted' => "",
    'silenced' => "",
    'unauthorized' => '',

    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => '',
            'has_reply' => '',
        ],
        'nominate' => [
            'exhausted' => '',
            'incorrect_state' => '',
            'owner' => "",
            'set_metadata' => '',
        ],
        'resolve' => [
            'not_owner' => '',
        ],

        'store' => [
            'mapper_note_wrong_user' => '',
        ],

        'vote' => [
            'bot' => "نمیتوان به گفت و گوی ایجاد شده توسط بات رای داد",
            'limit_exceeded' => 'لطفا اندکی قبل از ارسال رای های بیشتر صبر کنید',
            'owner' => "نمیتوانید به گفت و گوی خودتان رای دهید.",
            'wrong_beatmapset_state' => '',
        ],
    ],

    'beatmap_discussion_post' => [
        'destroy' => [
            'not_owner' => 'شما فقط میتوانید پست های خودتان را حذف کنید.',
            'resolved' => 'شما نمی توانید یک پست از یک گفت و گوی حل شده را حذف کنید.',
            'system_generated' => 'پست هایی که خودکار ساخته شده اند، نمیتوانند حذف شوند.',
        ],

        'edit' => [
            'not_owner' => 'فقط ارسال کننده پست میتواند آن را ویرایش کند.',
            'resolved' => 'شما نمیتوانید یک پست از یک گفت و گوی حل شده را ویرایش کنید.',
            'system_generated' => 'پست هایی که خودکار ساخته شده اند، نمیتوانند ویرایش شوند.',
        ],

        'store' => [
            'beatmapset_locked' => 'این بیتمپ برای گفت و گو قفل شده است.',
        ],
    ],

    'beatmapset' => [
        'metadata' => [
            'nominated' => '',
        ],
    ],

    'chat' => [
        'blocked' => 'نمیتوان به کاربری پیام ارسال کرد که او را مسدود کرده اید یا او شما را مسدود کرده باشد.',
        'friends_only' => 'کاربر مورد نظر، پیام ها را از طرف کسانی که جزو لیست دوستانش نیستند، مسدود کرده است.',
        'moderated' => '',
        'no_access' => 'شما به آن کانال دسترسی ندارید.',
        'restricted' => 'شما نمیتوانید موقعی که ساکت، محدود و یا مسدود شده اید پیام بفرستید.',
        'silenced' => 'شما نمیتوانید موقعی که ساکت، محدود و یا مسدود شده اید پیام بفرستید.',
    ],

    'comment' => [
        'update' => [
            'deleted' => "نمیتوان پست پاک شده را ویرایش کرد.",
        ],
    ],

    'contest' => [
        'voting_over' => 'شما نمیتوانید رای خود را بعد این که رقابت به پایان رسیده عوض کنید.',

        'entry' => [
            'limit_reached' => 'شما به محدودیت ورودی این رقابت رسیدید',
            'over' => 'از ورودی های ارسالی شما سپاسگزاریم! ارسال آثار برای این رقابت بسته شده و رای گیری به زودی آغاز خواهد شد.',
        ],
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'دسترسی مدیریت این انجمن را ندارید.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'فقط آخرین پست میتواند پاک شود.',
                'locked' => 'نمی توان پستی را از یک مبحث قفل شده حذف کرد.',
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
                'not_owner' => 'فقط ارسال کننده پست میتواند آن را پاک کند.',
            ],

            'edit' => [
                'deleted' => 'نمیتوان پست پاک شده را ویرایش کرد.',
                'locked' => 'این پست برای ویرایش قفل شده است.',
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
                'not_owner' => 'فقط ارسال کننده پست میتواند آن را ویرایش کند.',
                'topic_locked' => 'نمی توان پستی را از یک مبحث قفل شده ویرایش کرد.',
            ],

            'store' => [
                'play_more' => 'لطفا ابتدا سعی کنید قبل ارسال پست در انجمن بازی را (درست) انجام دهید! اگر با بازی کردن مشکل دارید، لطفا به انجمن کمک و پشتیبانی پست ارسال کنید.',
                'too_many_help_posts' => "", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => '',
                'locked' => '',
                'no_forum_access' => '',
                'no_permission' => '',

                'user' => [
                    'require_login' => 'لطفا برای پاسخ دادن وارد سایت شوید.',
                    'restricted' => "نمیوانید موقعی که محدود شده اید پاسخ ارسال کنید.",
                    'silenced' => "نمیتوانید موقعی که ساکت شده اید پاسخ ارسال کنید.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
                'no_permission' => 'مجوز برای ساخت مبحث جدید ندارید.',
                'forum_closed' => 'انجمن بسته شده و نمیتوان به آن پست ارسال کرد.',
            ],

            'vote' => [
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
                'over' => 'نظرسنجی تمام شده و نمیتوان دیگر به آن رای داد.',
                'play_more' => 'شما قبل از این که بتوانید در انجمن رای بدهید، باید بیشتر بازی کنید.',
                'voted' => 'تغییر رای مجاز نیست.',

                'user' => [
                    'require_login' => 'لطفا برای رای دادن وارد سایت شوید.',
                    'restricted' => "نمیتوانید موقعی که محدود شده اید رای بدهید.",
                    'silenced' => "",
                ],
            ],

            'watch' => [
                'no_forum_access' => '',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => '',
                'not_owner' => '',
            ],
            'store' => [
                'forum_not_allowed' => '',
            ],
        ],

        'view' => [
            'admin_only' => '',
        ],
    ],

    'user' => [
        'page' => [
            'edit' => [
                'locked' => '',
                'not_owner' => '',
                'require_supporter_tag' => '',
            ],
        ],
    ],
];