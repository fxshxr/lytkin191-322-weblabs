<?php

namespace ContainerVl6r6xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Authenticator_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.authenticator.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManager.php';

        $a = new \Symfony\Component\EventDispatcher\EventDispatcher();
        $a->addListener('Symfony\\Component\\Security\\Http\\Event\\LoginSuccessEvent', [0 => function () use ($container) {
            return ($container->privates['security.listener.session.main'] ?? $container->load('getSecurity_Listener_Session_MainService'));
        }, 1 => 'onSuccessfulLogin'], 0);
        $a->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => function () use ($container) {
            return ($container->privates['security.listener.user_checker.main'] ?? $container->load('getSecurity_Listener_UserChecker_MainService'));
        }, 1 => 'preCheckCredentials'], 256);
        $a->addListener('security.authentication.success', [0 => function () use ($container) {
            return ($container->privates['security.listener.user_checker.main'] ?? $container->load('getSecurity_Listener_UserChecker_MainService'));
        }, 1 => 'postCheckCredentials'], 256);
        $a->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => function () use ($container) {
            return ($container->privates['security.listener.user_provider'] ?? $container->load('getSecurity_Listener_UserProviderService'));
        }, 1 => 'checkPassport'], 1024);
        $a->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => function () use ($container) {
            return ($container->privates['security.listener.check_authenticator_credentials'] ?? $container->load('getSecurity_Listener_CheckAuthenticatorCredentialsService'));
        }, 1 => 'checkPassport'], 0);
        $a->addListener('Symfony\\Component\\Security\\Http\\Event\\LoginSuccessEvent', [0 => function () use ($container) {
            return ($container->privates['security.listener.password_migrating'] ?? $container->load('getSecurity_Listener_PasswordMigratingService'));
        }, 1 => 'onLoginSuccess'], 0);
        $a->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => function () use ($container) {
            return ($container->privates['security.listener.csrf_protection'] ?? $container->load('getSecurity_Listener_CsrfProtectionService'));
        }, 1 => 'checkPassport'], 512);
        $a->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.csrf_token_clearing'] ?? $container->load('getSecurity_Logout_Listener_CsrfTokenClearingService'));
        }, 1 => 'onLogout'], 0);

        return $container->privates['security.firewall.authenticator.main'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => ($container->privates['security.authenticator.http_basic.main'] ?? $container->load('getSecurity_Authenticator_HttpBasic_MainService'))], ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), $a, 'main', ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true, true));
    }
}