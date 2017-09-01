<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Swagger\Annotations as SWG;

class NewsController extends Controller
{
    /**
     * @SWG\GET(
     *     path="/news/list",
     *     summary="新闻列表",
     *     tags={"新闻接口","用户接口"},
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
     *   path="/news/create",
     *   summary="创建新闻",
     *   tags={"新闻接口"},
     *   description="这是创建新闻的接口",
     *   operationId="create_user",
     *   produces={"application/json"},
     *   consumes={"multipart/form-data"},
     *   @SWG\Parameter(
     *     name="username",
     *     in="formData",
     *     description="新闻名",
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
        return new JsonResponse($request->all());
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
