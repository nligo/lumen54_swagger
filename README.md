# Laravel集成swagger

@(laravel)[swagger]

**swagger**是一款api文档生产工具，提供生成工具以及测试API功能
 
### swagger语法示例``` 
/**
 * @SWG\Swagger(
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="测试",
 *         description="测试的API",
 *     )
 * )
 **/
 
```

``` 
    /**
     * @SWG\Post(
     *   path="/user/create",
     *   summary="创建用户",
     *   tags={"用户接口"},
     *   description="这是创建用户的接口",
     *   operationId="create_user",
     *   produces={"application/json"},
     *   consumes={"multipart/form-data"},
     *   @SWG\Parameter(
     *     name="username",
     *     in="formData",
     *     description="用户名",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="password",
     *     in="formData",
     *     description="密码",
     *     required=true,
     *     type="string"
     *   ),
     *     @SWG\Response(
     *         response=200,
     *         description="操作成功",
     *     ),
     *     @SWG\Response(
     *         response="400",
     *         description="失败",
     *     ),
     *   @SWG\Response(response="405",description="Invalid input"),
     * )
     */
 
```
