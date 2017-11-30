<?php

namespace Nitrique\ClearCacheBundle\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;

class ClearCacheController extends Controller
{
    public function indexAction()
    {
        $fs = new Filesystem();
        $result = false;

        try{
            $fs->remove($this->container->getParameter('kernel.cache_dir'));
            $result = true;
        }catch(Exception $e){
            $result = $e;
        }

        return new \Symfony\Component\HttpFoundation\JsonResponse(['result' => $result], 200);
    }
}
