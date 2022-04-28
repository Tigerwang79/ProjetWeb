<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelProdContainer.php')->set(\ContainerVOVB2HH\App_KernelProdContainer::class, null);
require __DIR__.'/ContainerVOVB2HH/EntityManager_9a5be93.php';
require __DIR__.'/ContainerVOVB2HH/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerVOVB2HH/getValidator_ExpressionService.php';
require __DIR__.'/ContainerVOVB2HH/getValidator_EmailService.php';
require __DIR__.'/ContainerVOVB2HH/getValidator_BuilderService.php';
require __DIR__.'/ContainerVOVB2HH/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerVOVB2HH/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerVOVB2HH/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslatorService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerVOVB2HH/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerVOVB2HH/getSwiftmailer_TransportService.php';
require __DIR__.'/ContainerVOVB2HH/getSwiftmailer_Mailer_Default_Transport_RealService.php';
require __DIR__.'/ContainerVOVB2HH/getSwiftmailer_Mailer_DefaultService.php';
require __DIR__.'/ContainerVOVB2HH/getSwiftmailer_EmailSender_ListenerService.php';
require __DIR__.'/ContainerVOVB2HH/getSession_FactoryService.php';
require __DIR__.'/ContainerVOVB2HH/getServicesResetterService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_User_Provider_Concrete_InDatabaseService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Logout_Listener_RememberMe_MainService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_EventDispatcher_MainService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_ContextListener_0Service.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Access_RoleHierarchyVoterService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerVOVB2HH/getSecrets_VaultService.php';
require __DIR__.'/ContainerVOVB2HH/getRouting_LoaderService.php';
require __DIR__.'/ContainerVOVB2HH/getPropertyAccessorService.php';
require __DIR__.'/ContainerVOVB2HH/getMonolog_Logger_SecurityService.php';
require __DIR__.'/ContainerVOVB2HH/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_Type_FormService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_Type_EntityService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_Type_ColorService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_ServerParamsService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_RegistryService.php';
require __DIR__.'/ContainerVOVB2HH/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerVOVB2HH/getErrorControllerService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_SystemCachePoolService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_ResultCachePoolService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerVOVB2HH/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerVOVB2HH/getContainer_GetenvService.php';
require __DIR__.'/ContainerVOVB2HH/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerVOVB2HH/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_ValidatorService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_SystemClearerService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_SystemService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_SecurityExpressionLanguageService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_PropertyInfoService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_PropertyAccessService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_AppClearerService.php';
require __DIR__.'/ContainerVOVB2HH/getCache_AppService.php';
require __DIR__.'/ContainerVOVB2HH/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerVOVB2HH/getTemplateControllerService.php';
require __DIR__.'/ContainerVOVB2HH/getRedirectControllerService.php';
require __DIR__.'/ContainerVOVB2HH/getTotalService.php';
require __DIR__.'/ContainerVOVB2HH/getUserRepositoryService.php';
require __DIR__.'/ContainerVOVB2HH/getProduitRepositoryService.php';
require __DIR__.'/ContainerVOVB2HH/getPanierRepositoryService.php';
require __DIR__.'/ContainerVOVB2HH/getRegistrationTypeService.php';
require __DIR__.'/ContainerVOVB2HH/getProduitTypeService.php';
require __DIR__.'/ContainerVOVB2HH/getEditUserTypeService.php';
require __DIR__.'/ContainerVOVB2HH/getUserControllerService.php';
require __DIR__.'/ContainerVOVB2HH/getSuperAdminControllerService.php';
require __DIR__.'/ContainerVOVB2HH/getSiteControllerService.php';
require __DIR__.'/ContainerVOVB2HH/getSecurityControllerService.php';
require __DIR__.'/ContainerVOVB2HH/getProduitControllerService.php';
require __DIR__.'/ContainerVOVB2HH/getAdminControllerService.php';
require __DIR__.'/ContainerVOVB2HH/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_UlHwefDService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_KdVjeGeService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_Ch4JgvlService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_UDgw6OlService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_QOjUGpSService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_NGFjL5GService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_GNc8e5BService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_Frtx4czService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_8XUY8COService.php';
require __DIR__.'/ContainerVOVB2HH/get_ServiceLocator_6bIMjA9Service.php';
require __DIR__.'/ContainerVOVB2HH/get_Container_Private_ValidatorService.php';
require __DIR__.'/ContainerVOVB2HH/get_Container_Private_TwigService.php';
require __DIR__.'/ContainerVOVB2HH/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerVOVB2HH/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerVOVB2HH/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerVOVB2HH/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerVOVB2HH/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerVOVB2HH/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\AdminController';
$classes[] = 'App\Controller\ProduitController';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\SiteController';
$classes[] = 'App\Controller\SuperAdminController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Form\EditUserType';
$classes[] = 'App\Form\ProduitType';
$classes[] = 'App\Form\RegistrationType';
$classes[] = 'App\Repository\PanierRepository';
$classes[] = 'App\Repository\ProduitRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Service\Total';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Handler\FingersCrossedHandler';
$classes[] = 'Monolog\Formatter\JsonFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy';
$classes[] = 'Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\RememberMeLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener';
$classes[] = 'Swift_Mailer';
$classes[] = 'Swift_Events_SimpleEventDispatcher';
$classes[] = 'Swift_Transport';
$classes[] = 'Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SwiftmailerTransportFactory';
$classes[] = 'Swift_Transport_SpoolTransport';
$classes[] = 'Swift_MemorySpool';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityPanier.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityProduit.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityUser.php';

$classes = [];
$classes[] = 'Doctrine\\ORM\\Mapping\\ClassMetadata';
$classes[] = 'Doctrine\\ORM\\Id\\IdentityGenerator';
$preloaded = Preloader::preload($classes, $preloaded);
require_once __DIR__.'/twig/5b/5bfda500d59dadc07768513da3bf5503bb77d8cfa405e00c3cefc86c97750233.php';
require_once __DIR__.'/twig/3e/3e57c2736b30709c433b6d89eff371f3b4ab616d6d5441396f7ceb4cc2e23a44.php';
require_once __DIR__.'/twig/7b/7be2f558e4e5ac026ebcb5102f0c9a415662482920305426940ba38e97377421.php';
require_once __DIR__.'/twig/1e/1e856b02fc5f857d8bf219a79c9506a1a8d1372c2c08131ee18937a21ea8dc68.php';
require_once __DIR__.'/twig/a4/a403afd4ed5a41e681fee504316b507b44082befbf55bdde32e16e22d70a0cd6.php';
require_once __DIR__.'/twig/58/58ce306db5e8ca023ab4ba2debb14319f91590abc24b023581c147c7e1cdc914.php';
require_once __DIR__.'/twig/18/18b08ab828b8a8bb27c0a0b2cf9bb88184cd668212d29e25be1d68677ff0e475.php';
require_once __DIR__.'/twig/1f/1f52dfe975c0707e8664ff2bff79afa815511f0bc1a527e80bd01f9b845acd0e.php';
require_once __DIR__.'/twig/15/15c0caa033f804ab490026e18153faaa8c53ee2f831bf00a1afed2d62d0c4d30.php';
require_once __DIR__.'/twig/0f/0ffe63b8892c8a73116e44656538ad2ea5a4eebce2d76c5d3754cad0895b3b48.php';
require_once __DIR__.'/twig/ea/ea6aa58907c4ba18468051d56f179a5fe92fd9a0b208a3683093f3d2ad302cce.php';
require_once __DIR__.'/twig/63/63f710fd4b2efafed960f8a5a70a1c7c3f7048863c9e0ea9236c51bb9f96dbcd.php';
require_once __DIR__.'/twig/14/140c850ab58e0951ca609094966cf0dd2a1dbfc2c80eb476b96328f761269644.php';
require_once __DIR__.'/twig/a5/a58b38e582725a568835cf1e481477549182e7294c95ba4c9395e774737bf9e9.php';
require_once __DIR__.'/twig/cf/cf1247bf89e24e7095a300336b15310f99d476c633d811ff9c0855ea49681c49.php';
require_once __DIR__.'/twig/f9/f9e4832f80d836647b8427a84f91525010db20a9870a0940cae9f591ae85af6a.php';
require_once __DIR__.'/twig/bf/bf43dc6eeda77f39f5d570228a42a379f6fe209cd442556738da80ad983b0326.php';
require_once __DIR__.'/twig/5b/5b77d1d2520ee3998294b9e585f9fdcaa1ed7874ce1d26af0ea9f4b8d95687bf.php';
require_once __DIR__.'/twig/94/94ebc5135f084ca5583e299ca7acb92b0415376ea9aa995b1c588153c982ed57.php';
require_once __DIR__.'/twig/33/33bcdbb7a9342e9c773d378b8a3c30e7a24697523848b71e0d0546546801b3ec.php';
require_once __DIR__.'/twig/4b/4b2698f8984a46032d9b68c2d29b07ba10f6b497b0de63c6e38ac8e2a347b1ed.php';
require_once __DIR__.'/twig/3a/3aa15df6bebc734686075d36065e0573372ef160bb98e0797c2598cafeaebc1a.php';
require_once __DIR__.'/twig/46/4656838a923b1cfb448aadbd599d91405c592652c4743fe40dec5c2e89d84a9d.php';
require_once __DIR__.'/twig/aa/aa8552a7716acf32163f2d3ed3eaab59ba4b2c002ddd1c2bf6e41d1d26260577.php';
require_once __DIR__.'/twig/29/29194c37f1724eaab3abf85526c16ac6962106b7c45d4018ee5f5dbb6721bb53.php';
require_once __DIR__.'/twig/b6/b6cd6273680234acbab32cfc98749228f2b217d829027a292e990aade1f17ddc.php';
require_once __DIR__.'/twig/da/daf6462992c143ae7ac57dec03ef4899231a8edb247c67ee510fb39d4464e65e.php';
require_once __DIR__.'/twig/88/88bcc4d2b3d361f8ac2129ebb90018061f6d8c89a8211d13ae26c7de8066b822.php';
require_once __DIR__.'/twig/82/8280ff6ccc4d031c73e48bc5f7d9c80b32202be924a0b029e2ecf8d74b74d1f6.php';
require_once __DIR__.'/twig/cd/cd5a42f0fa358d7a10638ec227f5a75b367736ecd4929cedba0c46d1edbd0be0.php';
require_once __DIR__.'/twig/a0/a09669d723122390757a1964cbb6e966c24fa02f24f2fe9bbcc8ba080476e2b2.php';
require_once __DIR__.'/twig/0a/0a5fd3fc75986f4489358061624580d1fc8b513cf9df7ef6f2b3e138f290c436.php';
require_once __DIR__.'/twig/60/60cc64c6644ddbffcec24a8016e8da00cc827cfdfc57d2e646a61dc4d832b38b.php';
require_once __DIR__.'/twig/bc/bc1a64f2407d0b46f2811c390a3085e3f742496e722c85ac1d2a321eeb6bdf84.php';
require_once __DIR__.'/twig/46/46e475ab0cbe2120a090b31ffc106d6a481bbb974c05088cc81db0b32ccb307c.php';
require_once __DIR__.'/twig/f3/f33663a7bdf28d9bc55ff8e1e09704bb737e0dda65b9f3bfe2d2a4e645994e5a.php';
require_once __DIR__.'/twig/97/9763d439f37a2431eb431d32ac6cb1120d0f1756e47eebc581075b4e84562d0d.php';
require_once __DIR__.'/twig/9e/9ea746a468ebc24ac769e9347f0e2058424e92e03487d4aab65608f94d7b6b7e.php';
require_once __DIR__.'/twig/ce/ced9dc20094d76f09bbb7111ad5845db5cd707a76469d6e470e73e59c454b33a.php';
require_once __DIR__.'/twig/16/1612a079d2407ddaa32f757b67c948b3e7c2406efea071ba63ddeb20af6fed8b.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Routing\\Annotation\\Route';
$classes[] = 'Symfony\\Component\\Validator\\Mapping\\ClassMetadata';
$classes[] = 'Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form';
$preloaded = Preloader::preload($classes, $preloaded);
