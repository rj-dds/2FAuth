<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'admin' => 'Администратор',
    'app_setup' => 'Настройки приложения',
    'auth' => 'Auth',
    'registrations' => 'Регистрации',
    'users' => 'Пользователи',
    'users_legend' => 'Управление пользователями, зарегистрированными на вашем экземпляре приложения или создание новых.',
    'admin_settings' => 'Административные настройки',
    'create_new_user' => 'Создать пользователя',
    'new_user' => 'Новый пользователь',
    'search_user_placeholder' => 'Имя пользователя, email...',
    'quick_filters_colons' => 'Быстрые фильтры:',
    'user_created' => 'пользователь успешно создан',
    'confirm' => [
        'delete_user' => 'Вы уверены, что хотите удалить этого пользователя? Это действие невозможно отменить.',
        'request_password_reset' => 'Вы уверены, что хотите сбросить пароль этого пользователя?',
        'purge_password_reset_request' => 'Вы уверены, что хотите отозвать предыдущий запрос?',
        'delete_account' => 'Вы действительно хотите удалить этого пользователя?',
        'edit_own_account' => 'Это ваша собственная учётная запись. Вы уверены?',
        'change_admin_role' => 'Это будет иметь серьезные последствия для разрешений этого пользователя. Вы уверены?',
        'demote_own_account' => 'Вы больше не будете администратором. Вы уверены?'
    ],
    'logs' => 'Журналы',
    'administration_legend' => 'Следующие настройки являются глобальными и будут применены ко всем пользователям.',
    'user_management' => 'Управление пользователем',
    'oauth_provider' => 'Провайдер OAuth',
    'account_bound_to_x_via_oauth' => 'Эта учётная запись привязана к учётной записи :provider через OAuth',
    'last_seen_on_date' => 'Последнее посещение: :date',
    'registered_on_date' => 'Дата регистрации: :date',
    'updated_on_date' => 'Дата последнего обновления: :date',
    'access' => 'Доступ',
    'password_requested_on_t' => 'Запрос на сброс пароля уже существует для этого пользователя (отправлен :date), что означает, что пользователь еще не изменил свой пароль, но ссылка, которую он получил, всё ещё является действительной. Это может быть запрос как от самого пользователя, так и от администратора.',
    'password_request_expired' => 'Запрос на сброс пароля уже существует для этого пользователя, но срок его действия истёк, что означает, что пользователь не успел изменить свой пароль вовремя. Это мог быть запрос как от самого пользователя, так и от администратора.',
    'resend_email' => 'Отправить письмо еще раз',
    'resend_email_title' => 'Отправить письмо для сброса пароля пользователю ещё раз',
    'resend_email_help' => 'Используйте <b>Отправить письмо ещё раз</b> , чтобы отправить пользователю новое письмо для сброса пароля. Это не изменит текущий пароль, а предыдущий запрос для сброса пароля будет аннулирован.',
    'reset_password' => 'Сбросить пароль',
    'reset_password_help' => 'Используйте <b>Сбросить пароля</b> для принудительного сброса пароля (это установит временный пароль) перед отправкой пользователю письма для сброса пароля, чтобы он мог установить новый пароль. Предыдущий запрос для сброса пароля будет аннулирован.',
    'reset_password_title' => 'Сбросить пароль пользователя',
    'password_successfully_reset' => 'Пароль успешно сброшен',
    'user_has_x_active_pat' => ':count активных токен(ов)',
    'user_has_x_security_devices' => ':count устройств(о) безопасности (passkeys)',
    'revoke_all_pat_for_user' => 'Отозвать все токены пользователя',
    'revoke_all_devices_for_user' => 'Отменить все устройства безопасности пользователя',
    'danger_zone' => 'ОСТОРОЖНО!!!',
    'delete_this_user_legend' => 'Учётная запись пользователя будет удалена, а также все её данные 2FA.',
    'this_is_not_soft_delete' => 'Это не мягкое удаление, это действие невозможно отменить.',
    'delete_this_user' => 'Удалить этого пользователя',
    'user_role_updated' => 'Роль пользователя обновлена',
    'pats_succesfully_revoked' => 'Персональные токены доступа пользователя успешно отозваны',
    'security_devices_succesfully_revoked' => 'Устройства безопасности пользователя успешно отозваны',
    'variables' => 'Переменные',
    'cache_cleared' => 'Кэш очищен',
    'cache_optimized' => 'Кэш оптимизирован',
    'check_now' => 'Проверить',
    'view_on_github' => 'Посмотреть на GitHub',
    'x_is_available' => 'Новая версия :version доступна',
    'successful_login_on' => 'Успешный вход <span class="has-text-grey-light">:login_at</span>',
    'successful_logout_on' => 'Успешный выход <span class="light-or-darker">:login_at</span>',
    'failed_login_on' => 'Ошибка входа <span class="has-text-grey-light">:login_at</span>',
    'viewed_on' => 'Просмотрено <span class="light-or-darker">:login_at</span>',
    'last_accesses' => 'Последний доступ',
    'see_full_log' => 'Смотреть полный журнал',
    'browser_on_platform' => ':browser на :platform',
    'access_log_has_more_entries' => 'Журнал доступа содержит больше записей.',
    'access_log_legend_for_user' => 'Полный журнал доступа пользователя :username',
    'show_last_month_log' => 'Показать записи за последний месяц',
    'show_three_months_log' => 'Показать записи за последние 3 месяца',
    'show_six_months_log' => 'Показать записи за последние 6 месяцев',
    'show_one_year_log' => 'Показать записи за последний год',
    'sort_by_date_asc' => 'Показать сначала первые',
    'sort_by_date_desc' => 'Показать сначала последние',
    'single_sign_on' => 'Single Sign-On (SSO)',
    'forms' => [
        'use_encryption' => [
            'label' => 'Защитить конфиденциальные данные',
            'help' => 'Конфиденциальные данные, секреты 2FA и адреса email хранятся в зашифрованном виде в базе данных. Убедитесь, что у вас есть резервная копия значения APP_KEY вашего .env файла (или весь файл) так как оно служит в качестве ключа шифрования. Не существует способа расшифровки данных без этого ключа.',
        ],
        'restrict_registration' => [
            'label' => 'Ограничить регистрацию',
            'help' => 'Сделайте регистрацию доступной только для ограниченного диапазона адресов электронной почты. Оба правила могут использоваться одновременно. Это не влияет на регистрацию через SSO.',
        ],
        'restrict_list' => [
            'label' => 'Список фильтрации',
            'help' => 'Регистрация будет доступна для адресов электронной почты из этого списка. Разделяйте адреса символом вертикальной черты ("|")',
        ],
        'restrict_rule' => [
            'label' => 'Правила фильтрации',
            'help' => 'Регистрация будет доступна для адресов электронной почты, удовлетворяющих регулярному выражению',
        ],
        'disable_registration' => [
            'label' => 'Отключить регистрацию',
            'help' => 'Запретить регистрацию новых пользователей. Если не переопределено (см. ниже), это также влияет на SSO, так что новые пользователи не смогут войти через SSO',
        ],
        'enable_sso' => [
            'label' => 'Enable SSO',
            'help' => 'Разрешить посетителям аутентифицироваться с использованием внешнего ID через схему Single Sign-On',
        ],
        'use_sso_only' => [
            'label' => 'Use SSO only',
            'help' => 'Make SSO the only available method to log in to 2FAuth. Password login and Webauthn are then disabled for regular users. Administrators are not affected by this restriction.',
        ],
        'keep_sso_registration_enabled' => [
            'label' => 'Сохранить SSO регистрацию включенной',
            'help' => 'Разрешить новым пользователям входить в систему впервые через SSO, пока регистрация отключена',
        ],
        'is_admin' => [
            'label' => 'Администратор',
            'help' => 'Даёт пользователю права администратора. Администраторы имеют разрешения на управление всем приложением, то есть настройками и другими пользователями, но не могут генерировать пароли для 2FA, которыми они не владеют.'
        ],
        'test_email' => [
            'label' => 'Тест конфигурации электронной почты',
            'help' => 'Отправить тестовое письмо для проверки конфигурации электронной почты вашего экземпляра 2FAuth. Важно иметь работающую конфигурацию, иначе пользователи не смогут запросить пароль для сброса.',
            'email_will_be_send_to_x' => 'Письмо будет отправлено на адрес <span class="is-family-code has-text-info">:email</span>',
        ],
        'cache_management' => [
            'label' => 'Управление кэшем',
            'help' => 'Иногда кэш должен быть очищен, например, после изменения переменных окружения или обновления приложения. Вы можете сделать это отсюда.',
        ]
    ],

];