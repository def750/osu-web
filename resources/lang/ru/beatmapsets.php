<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'availability' => [
        'disabled' => 'Данная карта временно недоступна для загрузки.',
        'parts-removed' => 'Некоторые части этой карты были удалены по требованию автора или правообладателей.',
        'more-info' => 'Для подробностей нажми сюда.',
        'rule_violation' => 'Некоторые части содержащиеся внутри данной карты были удалены после того, как их посчитали неприемлемыми для osu!.',
    ],

    'download' => [
        'limit_exceeded' => 'Притормози, поиграй больше.',
    ],

    'featured_artist_badge' => [
        'label' => 'Избранный исполнитель',
    ],

    'index' => [
        'title' => 'Библиотека карт',
        'guest_title' => 'Карты',
    ],

    'panel' => [
        'empty' => 'нет карт',

        'download' => [
            'all' => 'скачать',
            'video' => 'скачать с видео',
            'no_video' => 'скачать без видео',
            'direct' => 'открыть в osu!direct',
        ],
    ],

    'nominate' => [
        'hybrid_requires_modes' => 'Для гибридных карт требуется, чтобы вы выбрали по крайней мере один режим игры для номинирования.',
        'incorrect_mode' => 'У вас недостаточно прав для номинирования: :mode',
        'full_bn_required' => 'Вы должны быть полноправным номинатором, чтобы номинировать эту карту на ранк.',
        'too_many' => 'Требования к номинации уже выполнены.',

        'dialog' => [
            'confirmation' => 'Вы уверены, что хотите номинировать эту карту?',
            'header' => 'Номинировать карту',
            'hybrid_warning' => 'примечание: вы можете номинировать лишь один раз, так что убедитесь, что вы номинируете все режимы, которые необходимы',
            'which_modes' => 'Номинировать для каких режимов?',
        ],
    ],

    'nsfw_badge' => [
        'label' => '18+',
    ],

    'show' => [
        'discussion' => 'Обсуждение',

        'details' => [
            'by_artist' => 'от :artist',
            'favourite' => 'Добавить в избранное',
            'favourite_login' => 'Войдите, чтобы добавить эту карту в избранное',
            'logged-out' => 'Вы должны войти для загрузки карты!',
            'mapped_by' => 'сделана :mapper',
            'unfavourite' => 'Удалить из избранного',
            'updated_timeago' => 'обновлена :timeago',

            'download' => [
                '_' => 'Скачать',
                'direct' => '',
                'no-video' => 'без видео',
                'video' => 'с видео',
            ],

            'login_required' => [
                'bottom' => 'чтобы скачать',
                'top' => 'Войдите',
            ],
        ],

        'details_date' => [
            'approved' => 'одобрена :timeago',
            'loved' => 'стала любимой :timeago',
            'qualified' => 'квалифицирована :timeago',
            'ranked' => 'стала рейтинговой :timeago',
            'submitted' => 'загружена :timeago',
            'updated' => 'обновлена :timeago',
        ],

        'favourites' => [
            'limit_reached' => 'У вас слишком много избранных карт! Пожалуйста, удалите некоторые из них из избранных и попробуйте снова.',
        ],

        'hype' => [
            'action' => 'Хайпаните эту карту, если Вам понравилось её играть, чтобы помочь ей стать <strong>Рейтинговой</strong>.',

            'current' => [
                '_' => 'Эта карта сейчас :status.',

                'status' => [
                    'pending' => 'на рассмотрении',
                    'qualified' => 'квалифицирована',
                    'wip' => 'в разработке',
                ],
            ],

            'disqualify' => [
                '_' => 'Если Вы обнаружили проблему у этой карты, пожалуйста, дисквалифицируйте её :link.',
            ],

            'report' => [
                '_' => 'Если вы обнаружили проблему, связанную с этой картой, пожалуйста, сообщите об этом :link, чтобы оповестить команду osu!.',
                'button' => 'Сообщить о проблеме',
                'link' => 'здесь',
            ],
        ],

        'info' => [
            'description' => 'Описание',
            'genre' => 'Жанр',
            'language' => 'Язык',
            'no_scores' => 'Данные всё ещё обрабатываются...',
            'nsfw' => 'Откровенное содержание',
            'offset' => 'Сдвиг карты после ранка',
            'points-of-failure' => 'Шкала провалов',
            'source' => 'Источник',
            'storyboard' => 'Эта карта содержит сториборд',
            'success-rate' => 'Процент успешных прохождений',
            'tags' => 'Теги',
            'video' => 'Эта карта содержит видео',
        ],

        'nsfw_warning' => [
            'details' => 'Эта карта содержит откровенное или оскорбительное содержание. Вы уверены, что хотите продолжить?',
            'title' => 'Откровенное содержание',

            'buttons' => [
                'disable' => 'Отключить предупреждение',
                'listing' => 'Библиотека карт',
                'show' => 'Показать',
            ],
        ],

        'scoreboard' => [
            'achieved' => 'достигнут :when',
            'country' => 'Рейтинг по стране',
            'error' => 'Ошибка загрузки рейтинга',
            'friend' => 'Рейтинг среди друзей',
            'global' => 'Глобальный рейтинг',
            'supporter-link' => 'Нажмите <a href=":link">сюда</a> для просмотра всех возможностей, которые Вы можете получить!',
            'supporter-only' => 'Вы должны быть osu!supporter, чтобы получить доступ к рейтингу по друзьям, странам или модам! ',
            'title' => 'Табло',

            'headers' => [
                'accuracy' => 'Точность',
                'combo' => 'Макс. комбо',
                'miss' => 'Промах',
                'mods' => 'Моды',
                'pin' => 'В профиле',
                'player' => 'Игрок',
                'pp' => '',
                'rank' => 'Место',
                'score' => 'Очки',
                'score_total' => 'Всего очков',
                'time' => 'Дата',
            ],

            'no_scores' => [
                'country' => 'Никто из вашей страны ещё не играл в эту карту!',
                'friend' => 'Никто из ваших друзей ещё не играл в эту карту!',
                'global' => 'Пока рекордов нет. Поставите первый?',
                'loading' => 'Результаты загружаются...',
                'unranked' => 'Безрейтинговая карта.',
            ],
            'score' => [
                'first' => 'Лидирует',
                'own' => 'Ваш рекорд',
            ],
            'supporter_link' => [
                '_' => 'Нажмите :here для просмотра всех возможностей, которые Вы можете получить!',
                'here' => 'сюда',
            ],
        ],

        'stats' => [
            'cs' => 'Размер нот',
            'cs-mania' => 'Количество клавиш',
            'drain' => 'Скорость утечки HP',
            'accuracy' => 'Точность',
            'ar' => 'Скорость появления нот',
            'stars' => 'Сложность',
            'total_length' => 'Длительность (длительность утечки HP: :hit_length)',
            'bpm' => 'BPM',
            'count_circles' => 'Количество нот',
            'count_sliders' => 'Количество слайдеров',
            'offset' => 'Значение сдвига: :offset',
            'user-rating' => 'Оценки пользователей',
            'rating-spread' => 'Шкала оценок',
            'nominations' => 'Номинации',
            'playcount' => 'Количество игр',
        ],

        'status' => [
            'ranked' => 'Рейтинговая',
            'approved' => 'Одобренная',
            'loved' => 'Любимая',
            'qualified' => 'Квалифицированная',
            'wip' => 'В разработке',
            'pending' => 'На рассмотрении',
            'graveyard' => 'Заброшенная',
        ],
    ],
];
