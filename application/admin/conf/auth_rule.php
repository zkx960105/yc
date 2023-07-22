<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-4-3
 */

/**
 * 权限属性说明
 * array
 *      id  主键ID
 *      menu_id   一级模块ID
 *      menu_id2    二级模块ID
 *      name  权限名称
 *      is_modules 是否显示在分组下
 *      sort_order 排序号
 *      auths 权限列表(格式：控制器@*,控制器@操作名 --多个权限以逗号隔开)
 */
return [
    [
        'id' => 1,
        'menu_id' => 1001,
        'menu_id2' => 0,
        'name'  => '栏目管理',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Arctype@index,Arctype@add,Arctype@edit,Arctype@del,Arctype@pseudo_del',
    ],
    [
        'id' => 2,
        'menu_id' => 1002,
        'menu_id2' => 0,
        'name'  => '内容管理',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Archives@*,Arctype@single_edit,ShopProduct@attrlist_index',
    ],
    [
        'id' => 3, // 广告管理
        'menu_id' => 1003,
        'menu_id2' => 0,
        'name'  => '允许操作',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Other@*,AdPosition@*',
    ],
    [
        'id' => 4,
        'menu_id' => 2001,
        'menu_id2' => 2001001,
        'name'  => '网站设置',
        'is_modules'    => 1,
        'sort_order'    => 10,
        'auths' => 'System@web',
    ],
    [
        'id' => 5,
        'menu_id' => 2001,
        'menu_id2' => 2001002,
        'name'  => '核心设置',
        'is_modules'    => 1,
        'sort_order'    => 20,
        'auths' => 'System@web2',
    ],
    [
        'id' => 6,
        'menu_id' => 2001,
        'menu_id2' => 2001003,
        'name'  => '附件设置',
        'is_modules'    => 1,
        'sort_order'    => 30,
        'auths' => 'System@basic',
    ],
    [
        'id' => 7,
        'menu_id' => 2004,
        'menu_id2' => 2004009,
        'name'  => '水印配置',
        'is_modules'    => 1,
        'sort_order'    => 20,
        'auths' => 'System@water',
    ],
    [
        'id' => 8,
        'menu_id' => 2003,
        'menu_id2' => 2003001,
        'name'  => 'URL配置',
        'is_modules'    => 1,
        'sort_order'    => 10,
        'auths' => 'Seo@*',
    ],
    [
        'id' => 9,
        'menu_id' => 2003,
        'menu_id2' => 2003003,
        'name'  => '友情链接',
        'is_modules'    => 1,
        'sort_order'    => 30,
        'auths' => 'Links@*',
    ],
    [
        'id' => 10,
        'menu_id' => 2004,
        'menu_id2' => 2004001,
        'name'  => '管理员',
        'is_modules'    => 1,
        'sort_order'    => 50,
        'auths' => 'Admin@admin_pwd,Admin@index',
    ],
    [
        'id' => 11,
        'menu_id' => 2004,
        'menu_id2' => 2004002,
        'name'  => '备份还原',
        'is_modules'    => 1,
        'sort_order'    => 70,
        'auths' => 'Tools@*',
    ],
    [
        'id' => 12,
        'menu_id' => 2004,
        'menu_id2' => 2004003,
        'name'  => '模板管理',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Filemanager@*',
    ],
    [
        'id' => 13,
        'menu_id' => 2001,
        'menu_id2' => 2001005,
        'name'  => '接口配置',
        'is_modules'    => 1,
        'sort_order'    => 50,
        'auths' => 'System@api_conf,System@smtp,System@smtp_tpl,System@smtp_tpl_edit,System@sms,System@sms_tpl,System@microsite,PayApi@*,Canal@*',
    ],
    // [
    //     'id' => 14,
    //     'menu_id' => 2004,
    //     'menu_id2' => 2004005,
    //     'name'  => '清除缓存',
    //     'is_modules'    => 1,
    //     'sort_order'    => 100,
    //     'auths' => 'System@clear_cache',
    // ],
    [
        'id' => 15,
        'menu_id' => 2005,
        'menu_id2' => 0,
        'name'  => '插件应用',
        'is_modules'    => 1,
        'sort_order' => 100,
        'auths' => 'Weapp@index,Weapp@create,Weapp@pack,Weapp@upload,Weapp@disable,Weapp@install,Weapp@enable,Weapp@execute',
    ],
    [
        'id' => 16,
        'menu_id' => 2002,
        'menu_id2' => 0,
        'name'  => '允许操作',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Uiset@*',
    ],
    [
        'id' => 17,
        'menu_id' => 2005,
        'menu_id2' => 0,
        'name'  => '插件卸载',
        'is_modules'    => 0,
        'sort_order'    => 100,
        'auths' => 'Weapp@uninstall',
    ],
    [
        'id' => 18,
        'menu_id' => 2004,
        'menu_id2' => 2004100,
        'name'  => '权限组',
        'is_modules'    => 0,
        'sort_order'    => 100,
        'auths' => 'Admin@admin_add,Admin@admin_del,AuthRole@*',
    ],
    [
        'id' => 19,
        'menu_id' => 2004,
        'menu_id2' => 2004006,
        'name'  => '回收站',
        'is_modules'    => 1,
        'sort_order'    => 60,
        'auths' => 'RecycleBin@*',
    ],
    [
        'id' => 20,
        'menu_id' => 2004,
        'menu_id2' => 2004007,
        'name'  => '频道模型',
        'is_modules'    => 1,
        'sort_order'    => 80,
        'auths' => 'Channeltype@*,Field@*',
    ],
    [
        'id' => 21,
        'menu_id' => 2006,
        'menu_id2' => 0,
        'name'  => '允许操作',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Member@*',
    ],
    [
        'id' => 22,
        'menu_id' => 2004,
        'menu_id2' => 2004004,
        'name'  => '栏目字段',
        'is_modules'    => 1,
        'sort_order'    => 90,
        'auths' => 'Field@arctype_index,Field@arctype_add,Field@arctype_edit,Field@arctype_del',
    ],
    [
        'id' => 23,
        'menu_id' => 2008,
        'menu_id2' => 0,
        'name'  => '允许操作',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Statistics@*,Shop@*,ShopProduct@*,Member@*',
    ],
    [
        'id' => 24,
        'menu_id' => 2009,
        'menu_id2' => 0,
        'name'  => '允许操作',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Diyminipro@*',
    ],
    [
        'id' => 25,
        'menu_id' => 2003,
        'menu_id2' => 2003002,
        'name'  => 'Sitemap',
        'is_modules'    => 1,
        'sort_order'    => 20,
        'auths' => 'Sitemap@*',
    ],
    [
        'id' => 26,
        'menu_id' => 2004,
        'menu_id2' => 2004008,
        'name'  => '文档属性',
        'is_modules'    => 1,
        'sort_order'    => 10,
        'auths' => 'ArchivesFlag@*',
    ],
    [
        'id' => 27,
        'menu_id' => 2004,
        'menu_id2' => 2004010,
        'name'  => '缩略图配置',
        'is_modules'    => 1,
        'sort_order'    => 30,
        'auths' => 'System@thumb',
    ],
    [
        'id' => 28,
        'menu_id' => 2004,
        'menu_id2' => 2004011,
        'name'  => 'TAG管理',
        'is_modules'    => 1,
        'sort_order'    => 40,
        'auths' => 'Tags@*',
    ],
    [
        'id' => 29,
        'menu_id' => 2004,
        'menu_id2' => 2004012,
        'name'  => '模块开关',
        'is_modules'    => 1,
        'sort_order'    => 1,
        'auths' => 'Index@switch_map_0',
    ],
    [
        'id' => 30,
        'menu_id' => 1004,
        'menu_id2' => 0,
        'name'  => '允许操作',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Archives@index_draft',
    ],
    [
        'id' => 31,
        'menu_id' => 1005,
        'menu_id2' => 1005001,
        'name'  => '快捷导航',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Index@ajax_quickmenu',
    ],
    [
        'id' => 32,
        'menu_id' => 1005,
        'menu_id2' => 1005002,
        'name'  => '内容统计',
        'is_modules'    => 1,
        'sort_order'    => 100,
        'auths' => 'Index@ajax_content_total',
    ],
    [
        'id' => 33,
        'menu_id' => 2004,
        'menu_id2' => 2004013,
        'name'  => '导航管理',
        'is_modules'    => 1,
        'sort_order'    => 44,
        'auths' => 'Navigation@*',
    ],
    [
        'id' => 34,
        'menu_id' => 2001,
        'menu_id2' => 2001006,
        'name'  => '自定义变量',
        'is_modules'    => 1,
        'sort_order'    => 60,
        'auths' => 'System@customvar,System@customvar_index,System@customvar_save,System@customvar_del',
    ],
    [
        'id' => 35,
        'menu_id' => 2004,
        'menu_id2' => 2004014,
        'name'  => '站内通知',
        'is_modules'    => 1,
        'sort_order'    => 120,
        'auths' => 'UsersNotice@*,Notify@*',
    ],
    [
        'id' => 36,
        'menu_id' => 2004,
        'menu_id2' => 2004015,
        'name'  => '验证码管理',
        'is_modules'    => 1,
        'sort_order'    => 110,
        'auths' => 'Vertify@*',
    ],
    [
        'id' => 37,
        'menu_id' => 2004,
        'menu_id2' => 2004016,
        'name'  => 'html生成',
        'is_modules'    => 1,
        'sort_order'    => 106,
        'auths' => 'Seo@build',
    ],
    [
        'id' => 38,
        'menu_id' => 2004,
        'menu_id2' => 2004017,
        'name'  => '安全中心',
        'is_modules'    => 1,
        'sort_order'    => 106,
        'auths' => 'Security@*',
    ],
    [
        'id' => 39,
        'menu_id' => 2004,
        'menu_id2' => 2004018,
        'name'  => '留言管理',
        'is_modules'    => 1,
        'sort_order'    => 106,
        'auths' => 'Form@*,Guestbook@details,Guestbook@del',
    ],
    [
        'id' => 40,
        'menu_id' => 2004,
        'menu_id2' => 2004019,
        'name'  => '城市分站',
        'is_modules'    => 1,
        'sort_order'    => 106,
        'auths' => 'Citysite@*',
    ],
    [
        'id' => 41,
        'menu_id' => 2004,
        'menu_id2' => 2004020,
        'name'  => '当前导航',
        'is_modules'    => 1,
        'sort_order'    => 2,
        'auths' => 'Index@switch_map_1',
    ],
    [
        'id' => 42,
        'menu_id' => 2004,
        'menu_id2' => 2004021,
        'name'  => '订单管理',
        'is_modules'    => 1,
        'sort_order'    => 120,
        'auths' => 'Order@*',
    ],
    [
        'id' => 43,
        'menu_id' => 2004,
        'menu_id2' => 2004022,
        'name'  => '搜索管理',
        'is_modules'    => 1,
        'sort_order'    => 130,
        'auths' => 'Search@*',
    ],
    [
        'id' => 44,
        'menu_id' => 2004,
        'menu_id2' => 2004023,
        'name'  => '积分商城',
        'is_modules'    => 1,
        'sort_order'    => 140,
        'auths' => 'Memgift@*',
    ],
];