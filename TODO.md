文档
====

## 后台管理

例如已经完成的**登陆** 

### 1.登陆

	methor: POST
	action: login.php
	data:
		uname 
		pwd
		action = login

	result:
		成功:index.php
		失败:login.php


### 2.登出

	methor: POST
	action: login.php
	data:
		action = logout

	result:
		成功:login.php
		失败:login.php

### 3.添加菜

	methor: POST
	action: add.php
	data:
		name
		price
		category	// category 为数字 1,2,3,4 分别对应四个类别 chinese western fruit dessert
		upload_file
		content
		
		action = add

	result:
		成功: $log = 1
		失败: $log = 0

### 4.修改菜

	$foods = Array([0] => Array(id, name) )
	// 默认是chinese的所有菜

	methor: POST
	action: change.php
	data:
		idname
		price
		category	// category 为数字 1,2,3,4 分别对应四个类别 chinese western fruit dessert
		upload_file
		content
		
		action = edit

	result:
		成功: $log = 1
		失败: $log = 0

### 5.删除菜

	$foods = Array([0] => Array(id, name) )
	// 默认是chinese的所有菜

	methor: POST
	action: delete.php
	data:
		id = 1|2|3   // 用'|'分隔
		category = 1 // category 为数字 1,2,3,4 分别对应四个类别
		
		action = delete

	result:
		成功: $log = 1
		失败: $log = 0

### 6.查看所有菜

	methor: GET
	action: food.php
	data:
		// 默认全部输出
		num  // 每页数
		page // 页号


	result:
		成功: $foods = array()
		失败: 

### 7.管理订单

	$orders = Array ( [0] => Array ( 
					[food] => Array ( 
								[0] => Array ( 
										[0] => Array ( 
											[0] => 1 
											[id] => 1 
											[1] => é’èœè±†è…æ±¤ 
											[name] => é’èœè±†è…æ±¤ 
											[2] => 8.00 
											[price] => 8.00 
											[3] => 1.jpg 
											[pic] => 1.jpg 
											[4] => é’èœè±†è…æ±¤å¾ˆå¥½æ¬¡çš„ 
											[content] => é’èœè±†è…æ±¤å¾ˆå¥½æ¬¡çš„ [5] => 0 
											[recommond] => 0 ) ) 
								[1] => Array ( ) 
								[2] => Array ( ) 
								[3] => Array ( ) ) 
				 	[ano] => Array ( 
								[0] => 1 
								[ano] => 1 
								[1] => 1 
								[uid] => 1 
								[2] => è¥¿æ¹–åŒºæ•™è‚²å±€ 
								[address] => è¥¿æ¹–åŒºæ•™è‚²å±€ ) 
					[pno] => Array ( 
								[0] => 1 
								[pno] => 1 
								[1] => 1 
								[uid] => 1 
								[2] => 18765432123 
								[phone] => 18765432123 ) 
		 			[time] => 2013-12-26 16:23:55 
					[status] => 1 ) )  
		// status: 1.下单 2.运送中 3.接收	



	methor: GET
	action: order_manage.php
	data:
		// 默认全部输出
		num  // 每页数
		page // 页号

	result:
		成功: $orders 
		失败: 

### 8.修改订单
	methor: POST
	action: order_manage.php
	data:
			id // 订单号
			status = 1 or 2 or 3 	// status: 1.下单 2.运送中 3.接收	
			action = edit
	result:
		成功: $orders 
		失败: 

### 9.管理用户

	$users = Array ( 
				[0] => Array ( 
						[0] => 1 
						[uid] => 1 
						[1] => jojoafdjwjeofidkej 
						[openid] => jojoafdjwjeofidkej 
						[anos] => Array ( 
									[0] => Array ( 
											[ano] => 1 
											[uid] => 1 
											[address] => è¥¿æ¹–åŒºæ•™è‚²å±€ ) ) 
						[pnos] => Array ( 
									[0] => Array ( 
											[pno] => 1
											[uid] => 1
											[phone] => 18765432123 ) ) ) ) 

	methor: GET
	action: address_and_phone.php
	data:
		// 默认全部输出
		num  // 每页数
		page // 页号

	result:
		成功: $users 
		失败: 

### 10.设置菜
#### 1) 得到菜单

	$chinese = Array ( 
				[0] => Array ( 
							[id] => 1 
							[name] => é’èœè±†è…æ±¤ 
							[price] => 8.00 
							[pic] => 1.jpg 
							[content] => é’èœè±†è…æ±¤å¾ˆå¥½æ¬¡çš„ 
							[recommond] => 0 ) ) 
	$western = 
	$fruit =
	$dessert =

	methor: GET 
	action: today_menu.php
	data:


	result:
		成功: 
		失败: 

#### 2) 设置推荐菜

	methor: POST
	action: today_menu.php
	data:
		category = 1	// 1表示chinese，
		id = 1|2|3  	// 1,2,3表示chinese的1,2,3号

		action = recommond

	result:
		成功: $log = 1
		失败: $log = 0


## 微信点菜
### 1.查看今日菜单

    用户微信的网址是today/today.php?openid=XXXXXXXX

	前台选择，例如  today/today.php?openid=XXXXXXXX&category=1

	foods = array("id", "name", "price", "pic", "content", "recommond")
	uid //用户的id	

	methor: GET
	action: today.php
	data:
		// category 为数字 1,2,3,4 分别对应四个类别
		category

	result:
		成功: uid  foods //用户id
		失败: $log = 0


### 2.点单
	
	today/order.php?uid=XX

	$addresses = Array ( 
					[0] => Array ( 
							[0] => 1 
							[ano] => 1 
							[1] => 1 
							[uid] => 1 
							[2] => 西湖区教育局 
							[address] => 西湖区教育局 ) ) 
	$phones = Array ( 
					[0] => Array ( 
							[0] => 1 
							[pno] => 1 
							[1] => 1 
							[uid] => 1 
							[2] => 18765432123 
							[phone] => 18765432123 ) )

	methor: POST
	action: order.php

	data:
		uid 
		chinese = 1|2
		western = 2|3
		fruit = 
		dessert = 1|1
		price = 
		address or ano  // 如为新address，先insert，再取出ano
		phone or pno	// 如为新phone，先insert，再取出pno
		
		action = order

	result:
		成功: $log = 1
		失败: $log = 0



