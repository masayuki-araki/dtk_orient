<?php
use Cake\Core\Configure;

return [
    //アプリ設定
    define("APP_JNAME", "デンタツくん"),
    define("APP_LOGO", "logo.png"),
    define("COPYRIGHT", "© 2020 SUMI DENKI KOUGYOUSHO Co.,LTD."),
    //define("EMAIL_SERVICE", "dentatsukun@pitatto-systems.jp"),
    //define("DEBUG_MODE",false),
    define("APP_VERSION","1.2"),
    define("URL_SCHEME", "https"),
    define("COMMON_WEBROOT_URL", "https://dentatsukun.jp/webapp/"),

    //ピタバス設定
    define("API_SERVER_ADDRESS", "https://mf-minami-orient.dentatsukun.jp"),
    define("SERVER_ADDRESS", "https://wapi.vehicle-assist.jp"),
    define("CONTENTS_API", "https://api.vehicle-assist.jp"),
    define("COMPANY_ID", "2048335235"),
    define("AUTHORIZATION", "0m11GJNtkcbZ0kWd"),
    define("ORGANIZATION_ID", "3770"),
    define("PITABUS_API", "https://test.pitabus.jp/api/"),

    //プッシュ通知設定
    define("HUB_NAME_IOS", "dentatsukunNotificationiOSProduction"),
    define("HUB_CONNECT_IOS", "Endpoint=sb://dentatsukunnamespace.servicebus.windows.net/;SharedAccessKeyName=DefaultFullSharedAccessSignature;SharedAccessKey=NGbBjLaxoBjPuiaiYqXUZ1++TS3XW5c52gYXb7TKEZs="),
    define("HUB_NAME_ANDROID", "dentatsukunAndroid"),
    define("HUB_CONNECT_ANDROID", "Endpoint=sb://dentatsukunnamespace.servicebus.windows.net/;SharedAccessKeyName=DefaultFullSharedAccessSignature;SharedAccessKey=zFNBaL3jSDZsT3E2NjmBe4UDlqQjJKIdmEMIx5FZhp0="),

    //Webサービス設定
    define("GOOGLE_CALENDAR_API_KEY", "AIzaSyD7Y--XDeNPfixZl2kd7AfislqMhzlHMcU"),

    //組織情報
    define("ORG_NAME", "オリエント楽器"),
    define("CAR_JNAME", "バス"),
    define("CUSTOMER_JNAME", "利用者"),
    define("CUSTOMER_ID_JNAME", "管理番号"),
    define("CLASS_JNAME", "コース"),
    define("LETTER_JNAME", "お手紙"),
    define("FILE_JNAME", "ファイル"),
    define("SCHEDULES_JNAME", "スケジュール"),
    define("HEALTHCARE_JNAME", "健康状態"),
    define("USE_PITABUS", false),
    define("USE_CLASS_OPTION1", true),
    define("USE_CLASS_OPTION2", true),
    define("USE_CLASS_OPTION3", true),

];
