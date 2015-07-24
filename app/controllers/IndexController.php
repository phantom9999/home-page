<?php

class IndexController extends ControllerBase
{
    /**
     * 图片分为: 链接, 名字, 图片, 类型
     */

    public function indexAction()
    {
        $websiteData = Website::find();
        $sightData = Sight::find();
        $colorData = Color::find();
        $length = count($websiteData);
        #$this->view->websiteData = $websiteData;
        #$this->view->sightData = $sightData;
        #$this->view->colorData = $colorData;
    }

    public function reAction($token) {
        $item = Website::findFirst(array("token='{$token}'"));
        if ($item === null) {
            echo 'null';
            return;
        }
        print_r($item);
        #$item->vote += 1;
        #$item->save();
        #$this->response->redirect($item->href, true);
    }
}
