<?php
declare(strict_types=1);

namespace Josegonzalez\Upload;

use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;
use Cake\Database\TypeFactory;
use Josegonzalez\Upload\Database\Type\FileType;

/**
 * Plugin class.
 */
class Plugin extends BasePlugin
{
    /**
     * Load all the plugin configuration and bootstrap logic.
     *
     * The host application is provided as an argument. This allows you to load
     * additional plugin dependencies, or attach events.
     *
     * @param \Cake\Core\PluginApplicationInterface $app The host application
     * @return void
     */
    public function bootstrap(PluginApplicationInterface $app): void
    {
        TypeFactory::map('upload.file', FileType::class);
        parent::bootstrap($app);
    }

}
