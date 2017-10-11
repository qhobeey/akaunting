<?php

return [

    'company' => [
        'name'              => '名稱',
        'email'             => '電子郵件',
        'phone'             => '電話',
        'address'           => '地址',
        'logo'              => '商標',
    ],
    'localisation' => [
        'tab'               => '本地化',
        'date' => [
            'format'        => '日期格式',
            'separator'     => '日期分隔',
            'dash'          => '破折號 (-)',
            'dot'           => '點 (.)',
            'comma'         => '逗號 (,)',
            'slash'         => '斜線 (/)',
            'space'         => '空格 ( )',
        ],
        'timezone'          => '時區',
    ],
    'invoice' => [
        'tab'               => '訂單',
        'prefix'            => '訂單字軌',
        'digit'             => '訂單號碼',
        'start'             => '訂單起始號碼',
        'logo'              => '訂單商標',
    ],
    'default' => [
        'tab'               => '預設',
        'account'           => '預設帳號',
        'currency'          => '預設貨幣',
        'tax'               => '預設稅率',
        'payment'           => '預設付款方式',
        'language'          => '預設語言',
    ],
    'email' => [
        'protocol'          => '協定',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP 主機',
            'port'          => 'SMTP 通訊埠',
            'username'      => 'SMTP 帳號',
            'password'      => 'SMTP 密碼',
            'encryption'    => 'SMTP 安全性',
            'none'          => '無',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail 路徑',
        'log'               => '郵件日誌',
    ],
    'scheduling' => [
        'tab'               => '排程',
        'send_invoice'      => '傳送訂單提醒',
        'invoice_days'      => '於到期日後傳送',
        'send_bill'         => '傳送帳單提醒',
        'bill_days'         => '於到期日前傳送',
        'cron_command'      => 'Cron指令',
        'schedule_time'     => '執行時間',
    ],
    'appearance' => [
        'tab'               => '外觀',
        'theme'             => '主題',
        'light'             => '明亮',
        'dark'              => '暗色',
        'list_limit'        => '每頁記錄',
        'use_gravatar'      => '使用 Gravatar',
    ],
    'system' => [
        'tab'               => '系統',
        'session' => [
            'lifetime'      => '工作階段保存 (分鐘)',
            'handler'       => '工作階段管理員',
            'file'          => '檔案',
            'database'      => '資料庫',
        ],
        'file_size'         => '最大檔案容量 (MB)',
        'file_types'        => '允許檔案格式',
    ],

];