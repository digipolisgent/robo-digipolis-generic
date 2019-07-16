<?php

namespace DigipolisGent\Robo\Generic\Traits;

trait DeployGenericTrait
{
    /**
     * @see \DigipolisGent\Robo\Helpers\Traits\TraitDependencyCheckerTrait
     */
    protected function getDeployGenericTraitDependencies()
    {
        return [BuildGenericTrait::class];
    }

    /**
     * Build a Generic site and push it to the servers.
     *
     * @param array $arguments
     *   Variable amount of arguments. The last argument is the path to the
     *   the private key file (ssh), the penultimate is the ssh user. All
     *   arguments before that are server IP's to deploy to.
     * @param array $opts
     *   The options for this command.
     *
     * @option app The name of the app we're deploying. Used to determine the
     *   directory to deploy to.
     * @option worker The IP of the worker server. Defaults to the first server
     *   given in the arguments.
     *
     * @usage --app=myapp 10.25.2.178 sshuser /home/myuser/.ssh/id_rsa
     */
    public function digipolisDeployGeneric(
        array $arguments,
        $opts = [
            'app' => 'default',
            'worker' => null,
        ]
    ) {
        return $this->deploy($arguments, $opts);
    }
}
