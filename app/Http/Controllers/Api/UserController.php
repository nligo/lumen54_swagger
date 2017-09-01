<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Swagger\Annotations as SWG;

/**
 * @SWG\Swagger(
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="测试",
 *         description="测试的API",
 *     )
 * )
 */

class UserController extends Controller
{
    /**
     * @SWG\GET(
     *     path="/user/list",
     *     summary="用户列表",
     *     tags={"用户接口"},
     *     description="我想测试一下这是什么东西.",
     *     produces={ "application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="操作成功",
     *     ),
     *     @SWG\Response(
     *         response="400",
     *         description="失败",
     *     ),
     * )
     */
    public function index()
    {
        return new JsonResponse();
    }

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
    public function create(Request $request)
    {
        $res = [
            'code' => 200,
            'msg' => 'caozuo chengg',
            'data' => [],
        ];
        return new JsonResponse($res,500);
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
