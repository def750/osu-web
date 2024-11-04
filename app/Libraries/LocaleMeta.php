<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace App\Libraries;

class LocaleMeta
{
    // Keys must be a superset of app.available_locales. Additional locales are
    // available for use only in wiki articles
    const MAPPINGS = [
        'ar' => [
            'flag' => 'SA',
            'name' => 'اَلْعَرَبِيَّةُ‎',
        ],
        'be' => [
            'flag' => 'BY',
            'name' => 'Беларуская мова',
        ],
        'bg' => [
            'flag' => 'BG',
            'name' => 'Български',
        ],
        'ca' => [
            'flag' => 'AD', // ES-CA in crowdin
            'name' => 'Català',
        ],
        'cs' => [
            'flag' => 'CZ',
            'name' => 'Česky',
        ],
        'da' => [
            'flag' => 'DK',
            'name' => 'Dansk',
        ],
        'de' => [
            'flag' => 'DE',
            'name' => 'Deutsch',
        ],
        'el' => [
            'flag' => 'GR',
            'name' => 'ελληνικά',
        ],
        'en' => [
            'flag' => 'GB',
            'moment' => 'en-gb',
            'name' => 'English',
        ],
        'es' => [
            'flag' => 'ES',
            'name' => 'Español',
        ],
        'fi' => [
            'flag' => 'FI',
            'name' => 'Suomi',
        ],
        'fil' => [
            'flag' => 'PH',
            'name' => 'Wikang Filipino',
        ],
        'fr' => [
            'flag' => 'FR',
            'name' => 'Français',
        ],
        'he' => [
            'flag' => 'IL',
            'name' => 'עִבְרִית‎',
        ],
        'hu' => [
            'flag' => 'HU',
            'name' => 'Magyar',
        ],
        'id' => [
            'flag' => 'ID',
            'name' => 'Bahasa Indonesia',
        ],
        'it' => [
            'flag' => 'IT',
            'name' => 'Italiano',
        ],
        'ja' => [
            'flag' => 'JP',
            'name' => '日本語',
        ],
        'ko' => [
            'flag' => 'KR',
            'name' => '한국어',
        ],
        'lt' => [
            'flag' => 'LT',
            'name' => 'Lietuvių kalba',
        ],
        'nl' => [
            'flag' => 'NL',
            'name' => 'Nederlands',
        ],
        'no' => [
            'flag' => 'NO',
            'moment' => 'nb',
            'name' => 'Norsk',
        ],
        'pl' => [
            'flag' => 'PL',
            'name' => 'Polski',
        ],
        'pt' => [
            'flag' => 'PT',
            'name' => 'Português',
        ],
        'pt-br' => [
            'flag' => 'BR',
            'html' => 'pt-BR',
            'laravelPlural' => 'pt_BR',
            'name' => 'Português Brasileiro',
        ],
        'ro' => [
            'flag' => 'RO',
            'name' => 'Română',
        ],
        'ru' => [
            'flag' => 'RU',
            'name' => 'Русский',
        ],
        'sk' => [
            'flag' => 'SK',
            'name' => 'Slovenčina',
        ],
        'sl' => [
            'flag' => 'SI',
            'name' => 'Slovenščina',
        ],
        'sr' => [
            'flag' => 'RS',
            'moment' => 'sr-cyrl',
            'name' => 'Српски',
        ],
        'sv' => [
            'flag' => 'SE',
            'name' => 'Svenska',
        ],
        'th' => [
            'flag' => 'TH',
            'name' => 'ไทย',
        ],
        'tr' => [
            'flag' => 'TR',
            'name' => 'Türkçe',
        ],
        'uk' => [
            'flag' => 'UA',
            'name' => 'українська мова',
        ],
        'vi' => [
            'flag' => 'VN',
            'name' => 'Tiếng Việt',
        ],
        'zh' => [
            'flag' => 'CN',
            'moment' => 'zh-cn',
            'name' => '简体中文',
        ],
        'zh-tw' => [
            'flag' => 'TW',
            'html' => 'zh-TW',
            'laravelPlural' => 'zh_TW',
            'name' => '繁體中文（台灣）',
        ],
    ];

    private array $data;
    private string $locale;

    /**
     * Return cached instance of specified locale.
     *
     * Only valid locale listed as key in MAPPINGS constant is accepted.
     * Passing in invalid locale will result in error.
     */
    public static function find(string $locale): self
    {
        static $instances = [];

        return $instances[$locale] ??= new static($locale);
    }

    public static function isValid(?string $locale): bool
    {
        return isset(static::MAPPINGS[$locale]);
    }

    public static function sanitizeCode(?string $locale): ?string
    {
        if ($locale === null) {
            return null;
        }

        $ret = strtolower($locale);

        return static::isValid($ret) ? $ret : null;
    }

    public function __construct($locale)
    {
        $this->locale = $locale;
        $this->data = static::MAPPINGS[$locale];
    }

    public function flag(): string
    {
        return $this->data['flag'];
    }

    public function html(): string
    {
        return $this->data['html'] ?? $this->locale;
    }

    public function laravelPlural(): string
    {
        return $this->data['laravelPlural'] ?? $this->locale;
    }

    public function locale(): string
    {
        return $this->locale;
    }

    public function moment(): string
    {
        return $this->data['moment'] ?? $this->locale;
    }

    public function name(): string
    {
        return $this->data['name'];
    }
}
