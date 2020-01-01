<?php

namespace Roger\Test\Bundle\First\src\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class FirstExtension extends Extension
{
    //指定加载服务配置文件
    public function load(array $configs, ContainerBuilder $container)
    {
        $loder = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        $loder->load('service.yaml');
    }

}