# 仙职食堂在线点餐网站
项目是基于PHP、MySQL开发的在线点餐网站。

## 一.需求背景
在疫情期间，为避免学生返校后在学校食堂聚集买餐，引导学生通过线上点餐配送到学生宿舍，我们开发了仙职食堂在线点餐系统。

## 二.系统部署
1. 首先需要在MySQL中新建数据库
create database foodorder default character set utf8 ;

2. 导入备份的数据（备份数据在foodorder.sql）
source foodorder.sql;

3. 将项目源文件部署到web服务器的根目录

## 三.需求分析
学生可以通过电脑或者手机访问网站进行点餐。网站前台需要展示食堂的在售美食，支持分类查询和搜索查询。学生在点餐页面输入姓名、联系电话、宿舍地址等信息生成点餐订单。网站后台支持对管理员、美食分类等的管理。食堂工作人员通过网站后台可以查询、管理、配送后修改订单信息。

## 四.系统设计
管理员表（tbl_admin）
| 字段名       | 描述       | 数据类型         | 是否主键 | 备注 |   
|-----------|----------|--------------|------|----|
| id        | 管理员ID    | int(10)      | PK   |
| full_name | 管理员姓名    | varchar(100) |      | 
| username  | 管理员登录用户名 | varchar(100) |      |  
| password  | 用户密码     | varchar(255) |      |  



美食分类表（tbl_category）
| 字段名        | 描述     | 数据类型         | 是否主键 | 备注 |
|------------|--------|--------------|------|----|
| id         | 美食分类ID | int(10)      | PK   |    |
| title      | 美食分类名称 | varchar(100) |      |    |
| image_name | 图片名称   | varchar(255) |      |    |
| featured   | 是否首页推荐 | varchar(10)  |      |    |
| active     | 是否激活   | varchar(10)  |      |    |


美食表（tbl_food）
| 字段名         | 描述     | 数据类型          | 是否主键 | 备注 |
|-------------|--------|---------------|------|----|
| id          | 美食ID   | int(10)       | PK   |    |
| title       | 美食名称   | varchar(100)  |      |    |
| description | 美食描述   | text          |      |    |
| price       | 价格     | decimal(10,2) |      |    |
| image_name  | 图片名称   | varchar(255)  |      |    |
| category_id | 美食分类ID | int(10)       |      |    |
| featured    | 是否首页推荐 | varchar(10)   |      |    |
| active      | 是否激活   | varchar(10)   |      |    |


订单表（tbl_order）
| 字段名              | 描述    | 数据类型          | 是否主键 | 备注 |
|------------------|-------|---------------|------|----|
| id               | 订单ID  | int(10)       | PK   |    |
| food             | 美食名称  | varchar(150)  |      |    |
| price            | 美食价格  | decimal(10,2) |      |    |
| qty              | 购买份数  | int(11)       |      |    |
| total            | 订单总金额 | decimal(10,2) |      |    |
| order_date       | 下单时间  | datetime      |      |    |
| status           | 订单状态  | varchar(50)   |      |    |
| customer_name    | 用户姓名  | varchar(150)  |      |    |
| customer_contact | 用户手机号 | varchar(20)   |      |    |
| customer_email   | 用户邮箱  | varchar(150)  |      |    |
| customer_address | 用户地址  | varchar(255)  |      |    |

