<?php
return [
    'cacheTimestamp' => 1589241012,
    'database' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'port' => '',
        'charset' => 'utf8mb4',
        'dbname' => 'skndb',
        'user' => 'root',
        'password' => '2104hihi'
    ],
    'useCache' => true,
    'recordsPerPage' => 20,
    'recordsPerPageSmall' => 5,
    'applicationName' => 'Sharon Kelly Newspapers',
    'version' => '5.8.5',
    'timeZone' => 'UTC',
    'dateFormat' => 'DD.MM.YYYY',
    'timeFormat' => 'HH:mm',
    'weekStart' => 1,
    'thousandSeparator' => ',',
    'decimalMark' => '.',
    'exportDelimiter' => ';',
    'currencyList' => [
        0 => 'EUR'
    ],
    'defaultCurrency' => 'EUR',
    'baseCurrency' => 'EUR',
    'currencyRates' => [
        
    ],
    'outboundEmailIsShared' => true,
    'outboundEmailFromName' => 'SharonKelly Newspapers',
    'outboundEmailFromAddress' => '',
    'smtpServer' => '',
    'smtpPort' => 587,
    'smtpAuth' => false,
    'smtpSecurity' => 'TLS',
    'smtpUsername' => '',
    'smtpPassword' => '',
    'language' => 'en_GB',
    'logger' => [
        'path' => 'data/logs/espo.log',
        'level' => 'WARNING',
        'rotation' => true,
        'maxFileNumber' => 30
    ],
    'authenticationMethod' => 'Espo',
    'globalSearchEntityList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity'
    ],
    'tabList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Invoice',
        3 => 'OrderItems'
    ],
    'quickCreateList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Invoice',
        3 => 'Orders',
        4 => 'OrderItems'
    ],
    'exportDisabled' => false,
    'adminNotifications' => true,
    'adminNotificationsNewVersion' => true,
    'adminNotificationsCronIsNotConfigured' => true,
    'adminNotificationsNewExtensionVersion' => true,
    'assignmentEmailNotifications' => false,
    'assignmentEmailNotificationsEntityList' => [
        0 => 'Lead',
        1 => 'Opportunity',
        2 => 'Task',
        3 => 'Case'
    ],
    'assignmentNotificationsEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task',
        3 => 'Email'
    ],
    'portalStreamEmailNotifications' => true,
    'streamEmailNotificationsEntityList' => [
        0 => 'Case'
    ],
    'streamEmailNotificationsTypeList' => [
        0 => 'Post',
        1 => 'Status',
        2 => 'EmailReceived'
    ],
    'emailNotificationsDelay' => 30,
    'emailMessageMaxSize' => 10,
    'notificationsCheckInterval' => 10,
    'maxEmailAccountCount' => 2,
    'followCreatedEntities' => false,
    'b2cMode' => false,
    'restrictedMode' => false,
    'theme' => 'HazyblueVertical',
    'massEmailMaxPerHourCount' => 100,
    'massEmailVerp' => false,
    'personalEmailMaxPortionSize' => 50,
    'inboundEmailMaxPortionSize' => 50,
    'authTokenLifetime' => 0,
    'authTokenMaxIdleTime' => 120,
    'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
    'addressFormat' => 1,
    'displayListViewRecordCount' => true,
    'dashboardLayout' => [
        0 => (object) [
            'name' => 'My Espo',
            'layout' => [
                0 => (object) [
                    'id' => 'default-activities',
                    'name' => 'Activities',
                    'x' => 2,
                    'y' => 2,
                    'width' => 2,
                    'height' => 4
                ],
                1 => (object) [
                    'id' => 'default-stream',
                    'name' => 'Stream',
                    'x' => 0,
                    'y' => 0,
                    'width' => 2,
                    'height' => 4
                ]
            ]
        ]
    ],
    'calendarEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task'
    ],
    'activitiesEntityList' => [
        0 => 'Meeting',
        1 => 'Call'
    ],
    'historyEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Email'
    ],
    'cleanupJobPeriod' => '1 month',
    'cleanupActionHistoryPeriod' => '15 days',
    'cleanupAuthTokenPeriod' => '1 month',
    'currencyFormat' => 2,
    'currencyDecimalPlaces' => 2,
    'aclStrictMode' => true,
    'aclAllowDeleteCreated' => false,
    'aclAllowDeleteCreatedThresholdPeriod' => '24 hours',
    'inlineAttachmentUploadMaxSize' => 20,
    'textFilterUseContainsForVarchar' => false,
    'tabColorsDisabled' => false,
    'massPrintPdfMaxCount' => 50,
    'emailKeepParentTeamsEntityList' => [
        0 => 'Case'
    ],
    'streamEmailWithContentEntityTypeList' => [
        0 => 'Case'
    ],
    'recordListMaxSizeLimit' => 200,
    'noteDeleteThresholdPeriod' => '1 month',
    'noteEditThresholdPeriod' => '7 days',
    'emailForceUseExternalClient' => false,
    'useWebSocket' => false,
    'auth2FAMethodList' => [
        0 => 'Totp'
    ],
    'personNameFormat' => 'firstLast',
    'newNotificationCountInTitle' => false,
    'isInstalled' => true,
    'siteUrl' => 'http://localhost',
    'passwordSalt' => '91be0a24943d2b07',
    'cryptKey' => 'eff27bd39ccedbeadbd591813f0531cb',
    'hashSecretKey' => 'a38af830def8ea3d3879b3e0826efe0d',
    'fullTextSearchMinLength' => 4,
    'actualDatabaseType' => 'mariadb',
    'actualDatabaseVersion' => '10.4.12',
    'userThemesDisabled' => false,
    'avatarsDisabled' => false,
    'scopeColorsDisabled' => false,
    'tabIconsDisabled' => false,
    'dashletsOptions' => (object) [
        
    ],
    'companyLogoId' => '5eb9c49a1482f5ce7',
    'companyLogoName' => 'skn.png',
    'maintenanceMode' => false,
    'cronDisabled' => false,
    'emailAddressIsOptedOutByDefault' => false,
    'cleanupDeletedRecords' => false,
    'addressCountryList' => [
        
    ],
    'addressCityList' => [
        
    ],
    'addressStateList' => [
        
    ],
    'fiscalYearShift' => 0
];
?>