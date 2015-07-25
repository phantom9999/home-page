<?php

class IndexController extends ControllerBase
{
    /**
     * 图片分为: 链接, 名字, 图片, 类型
     */

    public function indexAction()
    {

        if (!$this->view->getCache()->exists('index')) {
            $websiteData = Website::find(array(
                'order' => 'vote desc',
                'cache' => array(
                    'key' => 'website',
                    'lifetime' => 60 * 60 * 24
                )
            ));
            $sightData = Sight::find(array(
                'order' => 'RANDOM()',
                'cache' => array(
                    'key' => 'sight',
                    'lifetime' => 60 * 60 * 12
                )
            ));
            $colorData = Color::find(array(
                'order' => 'RANDOM()',
                'cache' => array(
                    'key' => 'color',
                    'lifetime' => 60 * 60 * 12
                )
            ));
            $this->view->websiteData = $websiteData;
            $this->view->sightData = $sightData;
            $this->view->colorData = $colorData;
        }

        $this->view->cache(array(
            'key' => 'index',
            'lifetime' => 60 * 60 * 12
        ));

    }

    public function reAction($token) {
        $item = Website::find(array(
            'conditions' => 'token = ?1',
            'bind' => array(1=>$token),
            'cache' => array(
                'key' => $token,
            )
        ))->getFirst();

        if ($item) {
            $item->vote += rand(1, 10);
            $item->save();
            $this->response->redirect($item->href, true);
        } else {
            $this->response->redirect('/', true);
        }
    }
}
