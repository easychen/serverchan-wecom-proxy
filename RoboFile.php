<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see https://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    public function buildImage()
    {
        $this->taskExec('docker build -t serverchan-wecom-proxy . --load ')
            ->run();

        $id = time();
        $repo = 'easychen/serverchan-wecom-proxy';
        $version = $repo. ':' . $id;
        $this->_exec("docker tag serverchan-wecom-proxy $version && docker push $version ");
        $this->_exec("docker tag serverchan-wecom-proxy $repo:latest && docker push $repo:latest ");
        $this->say("$version");
    }
}
