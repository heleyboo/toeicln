<?php

return [

    // Mail Notification
    'mail_notification' => env('MAIL_NOTIFICATION') ?: false,

    // Default Avatar
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

    // Default Icon
    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

    'default_logo' => '/images/default_logo.jpg',
    'default_banner' => '/images/default_banner.png',
    'default_page_image' => '/images/default-news-image.jpg',
    'default_slogan' => 'Chất lượng được cam kết bằng hợp đồng',

    // Meta
    'meta' => [
        'keywords' => 'Toeic Gò Vấp, luyện thi toeic, tiếng anh giao tiếp',
        'description' => 'Trung tâm ngoại ngữ TOEIC LN chuyên dạy TOEIC và anh văn giao tiếp ở Gò Vấp, 97% hài lòng, cam kết bằng hợp đồng.'
    ],

    // Social Share
    'social_share' => [
        'article_share'    => env('ARTICLE_SHARE') ?: true,
        'discussion_share' => env('DISCUSSION_SHARE') ?: true,
        'sites'            => env('SOCIAL_SHARE_SITES') ?: 'google,twitter,weibo',
        'mobile_sites'     => env('SOCIAL_SHARE_MOBILE_SITES') ?: 'google,twitter,weibo,qq,wechat',
    ],

    // Google Analytics
    'google' => [
        'id'   => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
        'open' => env('GOOGLE_OPEN') ?: false
    ],

    // Article Page
    'article' => [
        'title'       => 'Nothing is impossible.',
        'description' => 'https://pigjian.com',
        'number'      => 15,
        'sort'        => 'desc',
        'sortColumn'  => 'published_at',
    ],

    'category' => [
        'number'        => '15',
        'sort'          => 'desc',
        'sortColumn'    => 'name'   
    ],

    // Discussion Page
    'discussion' => [
        'number' => 20,
        'sort'   => 'desc',
        'sortColumn' => 'created_at',
    ],

    // Footer
    'footer' => [
        'github' => [
            'open' => true,
            'url'  => 'https://github.com/jcc',
        ],
        'twitter' => [
            'open' => true,
            'url'  => 'https://twitter.com/pigjian'
        ],
        'meta' => '© PJ Blog 2016. Powered By Jiajian Chan',
    ],

    'license' => 'Powered By Jiajian Chan.<br/>This article is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.',

];
