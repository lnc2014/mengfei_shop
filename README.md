# mengfei_shop
梦想飞翔的一个商城，满足你的所有需求，满足所有你想要的。

开发所用的各个版本的信息

yii 1.1.15 + Apache 2.49 + Mysql 5.67.17 + PHP 5.5.12


第一阶段初步实现yii商城的商品管理模块、用户登录注册模块、没有登录不能购买的公共模块、商品的分类显示模块

商品管理模块：包括商品的增加、修改、删除、查找等功能

重点：商品的增加和修改是同一个功能，要保证功能的唯一性

商品增加：包括各种商品信息的录入，难点应该在于商品展示图片的上传、商品缩略图的功能

数据库表设计：


mengfei_user  用户信息表

mengfei_admin 管理员表

mengfei_goods  商品信息表

mengfei_goods_cate	商品分类表

第二阶段 实现购物的功能模块

mengfei_orders  商品订单表

mengfei_order_goods 商品订单关联表

mengfei_cart 商品购物车

