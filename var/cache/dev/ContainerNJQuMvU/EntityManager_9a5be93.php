<?php

namespace ContainerNJQuMvU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbbe64 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer24141 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdc442 = [
        
    ];

    public function getConnection()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getConnection', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getMetadataFactory', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getExpressionBuilder', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'beginTransaction', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getCache', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getCache();
    }

    public function transactional($func)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'transactional', array('func' => $func), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'wrapInTransaction', array('func' => $func), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'commit', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->commit();
    }

    public function rollback()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'rollback', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getClassMetadata', array('className' => $className), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'createQuery', array('dql' => $dql), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'createNamedQuery', array('name' => $name), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'createQueryBuilder', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'flush', array('entity' => $entity), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'clear', array('entityName' => $entityName), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->clear($entityName);
    }

    public function close()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'close', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->close();
    }

    public function persist($entity)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'persist', array('entity' => $entity), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'remove', array('entity' => $entity), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'refresh', array('entity' => $entity), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'detach', array('entity' => $entity), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'merge', array('entity' => $entity), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getRepository', array('entityName' => $entityName), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'contains', array('entity' => $entity), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getEventManager', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getConfiguration', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'isOpen', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getUnitOfWork', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getProxyFactory', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'initializeObject', array('obj' => $obj), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'getFilters', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'isFiltersStateClean', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'hasFilters', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return $this->valueHolderbbe64->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer24141 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbbe64) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbbe64 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbbe64->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, '__get', ['name' => $name], $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        if (isset(self::$publicPropertiesdc442[$name])) {
            return $this->valueHolderbbe64->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbe64;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbbe64;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbe64;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbbe64;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, '__isset', array('name' => $name), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbe64;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbbe64;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, '__unset', array('name' => $name), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbe64;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbbe64;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, '__clone', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        $this->valueHolderbbe64 = clone $this->valueHolderbbe64;
    }

    public function __sleep()
    {
        $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, '__sleep', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;

        return array('valueHolderbbe64');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer24141 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer24141;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer24141 && ($this->initializer24141->__invoke($valueHolderbbe64, $this, 'initializeProxy', array(), $this->initializer24141) || 1) && $this->valueHolderbbe64 = $valueHolderbbe64;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbbe64;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbbe64;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
