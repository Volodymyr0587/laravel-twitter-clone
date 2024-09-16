<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Наступні рядки містять стандартні повідомлення про помилки, які використовуються
    | класом валідатора. Деякі з цих правил мають кілька версій, наприклад
    | правила розміру. Не соромтеся змінювати ці повідомлення тут.
    |
    */

    'accepted' => 'Поле :attribute повинно бути прийнято.',
    'accepted_if' => 'Поле :attribute повинно бути прийнято, коли :other дорівнює :value.',
    'active_url' => 'Поле :attribute повинно бути дійсною URL-адресою.',
    'after' => 'Поле :attribute повинно бути датою після :date.',
    'after_or_equal' => 'Поле :attribute повинно бути датою після або рівною :date.',
    'alpha' => 'Поле :attribute може містити лише літери.',
    'alpha_dash' => 'Поле :attribute може містити лише літери, цифри, дефіси та підкреслення.',
    'alpha_num' => 'Поле :attribute може містити лише літери та цифри.',
    'array' => 'Поле :attribute повинно бути масивом.',
    'ascii' => 'Поле :attribute може містити лише однобайтові алфавітно-цифрові символи та символи.',
    'before' => 'Поле :attribute повинно бути датою до :date.',
    'before_or_equal' => 'Поле :attribute повинно бути датою до або рівною :date.',
    'between' => [
        'array' => 'Поле :attribute повинно містити від :min до :max елементів.',
        'file' => 'Поле :attribute повинно бути від :min до :max кілобайт.',
        'numeric' => 'Поле :attribute повинно бути між :min та :max.',
        'string' => 'Поле :attribute повинно бути від :min до :max символів.',
    ],
    'boolean' => 'Поле :attribute повинно бути істинним або хибним.',
    'can' => 'Поле :attribute містить несанкціоноване значення.',
    'confirmed' => 'Підтвердження для поля :attribute не збігається.',
    'contains' => 'Поле :attribute містить обов\'язкове значення, якого бракує.',
    'current_password' => 'Пароль неправильний.',
    'date' => 'Поле :attribute повинно бути дійсною датою.',
    'date_equals' => 'Поле :attribute повинно бути датою, рівною :date.',
    'date_format' => 'Поле :attribute повинно відповідати формату :format.',
    'decimal' => 'Поле :attribute повинно містити :decimal знаків після коми.',
    'declined' => 'Поле :attribute повинно бути відхилено.',
    'declined_if' => 'Поле :attribute повинно бути відхилено, коли :other дорівнює :value.',
    'different' => 'Поля :attribute та :other повинні відрізнятися.',
    'digits' => 'Поле :attribute повинно містити :digits цифр.',
    'digits_between' => 'Поле :attribute повинно містити від :min до :max цифр.',
    'dimensions' => 'Поле :attribute має недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має дубльоване значення.',
    'doesnt_end_with' => 'Поле :attribute не повинно закінчуватися одним із таких значень: :values.',
    'doesnt_start_with' => 'Поле :attribute не повинно починатися одним із таких значень: :values.',
    'email' => 'Поле :attribute повинно бути дійсною електронною адресою.',
    'ends_with' => 'Поле :attribute повинно закінчуватися одним із таких значень: :values.',
    'enum' => 'Вибране значення для поля :attribute неправильне.',
    'exists' => 'Вибране значення для поля :attribute неправильне.',
    'extensions' => 'Поле :attribute повинно мати одне з таких розширень: :values.',
    'file' => 'Поле :attribute повинно бути файлом.',
    'filled' => 'Поле :attribute повинно мати значення.',
    'gt' => [
        'array' => 'Поле :attribute повинно містити більше ніж :value елементів.',
        'file' => 'Поле :attribute повинно бути більше ніж :value кілобайт.',
        'numeric' => 'Поле :attribute повинно бути більше ніж :value.',
        'string' => 'Поле :attribute повинно містити більше ніж :value символів.',
    ],
    'gte' => [
        'array' => 'Поле :attribute повинно містити :value або більше елементів.',
        'file' => 'Поле :attribute повинно бути більше або рівним :value кілобайт.',
        'numeric' => 'Поле :attribute повинно бути більше або рівним :value.',
        'string' => 'Поле :attribute повинно містити більше або рівно :value символів.',
    ],
    'hex_color' => 'Поле :attribute повинно бути дійсним шістнадцятковим кольором.',
    'image' => 'Поле :attribute повинно бути зображенням.',
    'in' => 'Вибране значення для поля :attribute неправильне.',
    'in_array' => 'Поле :attribute повинно існувати в :other.',
    'integer' => 'Поле :attribute повинно бути цілим числом.',
    'ip' => 'Поле :attribute повинно бути дійсною IP-адресою.',
    'ipv4' => 'Поле :attribute повинно бути дійсною IPv4-адресою.',
    'ipv6' => 'Поле :attribute повинно бути дійсною IPv6-адресою.',
    'json' => 'Поле :attribute повинно бути дійсним JSON рядком.',
    'list' => 'Поле :attribute повинно бути списком.',
    'lowercase' => 'Поле :attribute повинно бути написане малими літерами.',
    'lt' => [
        'array' => 'Поле :attribute повинно містити менше ніж :value елементів.',
        'file' => 'Поле :attribute повинно бути менше ніж :value кілобайт.',
        'numeric' => 'Поле :attribute повинно бути менше ніж :value.',
        'string' => 'Поле :attribute повинно містити менше ніж :value символів.',
    ],
    'lte' => [
        'array' => 'Поле :attribute не повинно містити більше ніж :value елементів.',
        'file' => 'Поле :attribute повинно бути менше або рівним :value кілобайт.',
        'numeric' => 'Поле :attribute повинно бути менше або рівним :value.',
        'string' => 'Поле :attribute повинно містити менше або рівно :value символів.',
    ],
    'mac_address' => 'Поле :attribute повинно бути дійсною MAC-адресою.',
    'max' => [
        'array' => 'Поле :attribute не повинно містити більше ніж :max елементів.',
        'file' => 'Поле :attribute не повинно бути більше ніж :max кілобайт.',
        'numeric' => 'Поле :attribute не повинно бути більше ніж :max.',
        'string' => 'Поле :attribute не повинно містити більше ніж :max символів.',
    ],
    'max_digits' => 'Поле :attribute не повинно містити більше ніж :max цифр.',
    'mimes' => 'Поле :attribute повинно бути файлом типу: :values.',
    'mimetypes' => 'Поле :attribute повинно бути файлом типу: :values.',
    'min' => [
        'array' => 'Поле :attribute повинно містити принаймні :min елементів.',
        'file' => 'Поле :attribute повинно бути принаймні :min кілобайт.',
        'numeric' => 'Поле :attribute повинно бути принаймні :min.',
        'string' => 'Поле :attribute повинно містити принаймні :min символів.',
    ],
    'min_digits' => 'Поле :attribute повинно містити принаймні :min цифр.',
    'missing' => 'Поле :attribute повинно бути відсутнє.',
    'missing_if' => 'Поле :attribute повинно бути відсутнє, коли :other дорівнює :value.',
    'missing_unless' => 'Поле :attribute повинно бути відсутнє, якщо :other не дорівнює :value.',
    'missing_with' => 'Поле :attribute повинно бути відсутнє, коли присутні :values.',
    'missing_with_all' => 'Поле :attribute повинно бути відсутнє, коли присутні всі :values.',
    'multiple_of' => 'Поле :attribute повинно бути кратним :value.',
    'not_in' => 'Вибране значення для поля :attribute неправильне.',
    'not_regex' => 'Формат поля :attribute неправильний.',
    'numeric' => 'Поле :attribute повинно бути числом.',
    'password' => [
        'letters' => 'Поле :attribute повинно містити принаймні одну літеру.',
        'mixed' => 'Поле :attribute повинно містити принаймні одну велику і одну малу літеру.',
        'numbers' => 'Поле :attribute повинно містити принаймні одне число.',
        'symbols' => 'Поле :attribute повинно містити принаймні один символ.',
        'uncompromised' => 'Вказане значення поля :attribute було знайдено в витоках даних. Будь ласка, виберіть інше значення.',
    ],
    'present' => 'Поле :attribute повинно бути присутнє.',
    'prohibited' => 'Поле :attribute заборонене.',
    'prohibited_if' => 'Поле :attribute заборонене, коли :other дорівнює :value.',
    'prohibited_unless' => 'Поле :attribute заборонене, якщо :other не знаходиться в :values.',
    'prohibits' => 'Поле :attribute забороняє присутність поля :other.',
    'regex' => 'Формат поля :attribute неправильний.',
    'required' => 'Поле :attribute обов\'язкове.',
    'required_array_keys' => 'Поле :attribute повинно містити записи для: :values.',
    'required_if' => 'Поле :attribute обов\'язкове, коли :other дорівнює :value.',
    'required_if_accepted' => 'Поле :attribute обов\'язкове, коли :other прийняте.',
    'required_unless' => 'Поле :attribute обов\'язкове, якщо :other не знаходиться в :values.',
    'required_with' => 'Поле :attribute обов\'язкове, коли присутні :values.',
    'required_with_all' => 'Поле :attribute обов\'язкове, коли присутні всі :values.',
    'required_without' => 'Поле :attribute обов\'язкове, коли відсутні :values.',
    'required_without_all' => 'Поле :attribute обов\'язкове, коли відсутні всі :values.',
    'same' => 'Поля :attribute та :other повинні збігатися.',
    'size' => [
        'array' => 'Поле :attribute повинно містити :size елементів.',
        'file' => 'Поле :attribute повинно бути :size кілобайт.',
        'numeric' => 'Поле :attribute повинно бути :size.',
        'string' => 'Поле :attribute повинно містити :size символів.',
    ],
    'starts_with' => 'Поле :attribute повинно починатися з одного з таких значень: :values.',
    'string' => 'Поле :attribute повинно бути рядком.',
    'timezone' => 'Поле :attribute повинно бути дійсною часовою зоною.',
    'unique' => 'Поле :attribute вже зайняте.',
    'uploaded' => 'Поле :attribute не вдалося завантажити.',
    'uppercase' => 'Поле :attribute повинно бути написане великими літерами.',
    'url' => 'Поле :attribute повинно бути дійсною URL-адресою.',
    'ulid' => 'Поле :attribute повинно бути дійсним ULID.',
    'uuid' => 'Поле :attribute повинно бути дійсним UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Тут ви можете вказати власні повідомлення про помилки для атрибутів,
    | використовуючи звичайний синтаксис "attribute.rule" для позначення рядків.
    | Це дозволяє легко налаштовувати конкретні мовні рядки для певного
    | правила атрибутів.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Наступні мовні рядки використовуються для заміни нашого заповнювача
    | атрибута чимось більш читабельним, наприклад "E-Mail Address"
    | замість "email". Це просто допомагає зробити наше повідомлення
    | трішки зрозумілішим.
    |
    */

    'attributes' => [],

];
