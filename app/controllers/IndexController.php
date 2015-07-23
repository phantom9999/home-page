<?php

class IndexController extends ControllerBase
{
    /**
     * 图片分为: 链接, 名字, 图片, 类型
     */

    public function indexAction()
    {
        $this->view->data = Content::find();
    }
}
